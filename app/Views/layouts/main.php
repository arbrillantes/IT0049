<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta
        name="description"
        content="A simple point-of-sale account management website."
    >

    <title><?= esc($title ?? 'Home') ?> | POS Brillantes</title>

    <?php
    $isRender = str_contains(
        $_SERVER['HTTP_HOST'] ?? '',
        'onrender.com'
    );

    $pageUrl = function (string $path = '') use ($isRender): string {
        return $isRender
            ? '/' . ltrim($path, '/')
            : base_url($path);
    };

    $cssUrl = $pageUrl('css/style.css');
    ?>

    <link rel="stylesheet" href="<?= esc($cssUrl) ?>">
</head>

<body>
    <header class="site-header">
        <div class="nav-wrap">
            <a
                class="brand"
                href="<?= $pageUrl('/') ?>"
                aria-label="POS Brillantes home"
            >
                <span class="brand-mark">P</span>
                <span>POS Brillantes</span>
            </a>

            <nav aria-label="Main navigation">
                <a
                    class="<?= ($active ?? '') === 'home' ? 'active' : '' ?>"
                    href="<?= $pageUrl('/') ?>"
                >
                    Home
                </a>

                <a
                    class="<?= ($active ?? '') === 'about' ? 'active' : '' ?>"
                    href="<?= $pageUrl('about') ?>"
                >
                    About
                </a>

                <a
                    class="<?= ($active ?? '') === 'customers' ? 'active' : '' ?>"
                    href="<?= $pageUrl('customers') ?>"
                >
                    Customers
                </a>

                <a
                    class="<?= ($active ?? '') === 'users' ? 'active' : '' ?>"
                    href="<?= $pageUrl('users') ?>"
                >
                    Users
                </a>
            </nav>
        </div>
    </header>

    <main class="container">
        <?= $this->renderSection('content') ?>
    </main>

    <footer>
        <div class="container footer-inner">
            <span>Made by Angelo Brillantes</span>
            <span>IT0049 · BSIT WMA 3rd Year – TW33</span>
        </div>
    </footer>
</body>
</html>