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

    <link rel="stylesheet" href="<?= esc(base_url('css/style.css')) ?>">
</head>

<body>
    <header class="site-header">
        <div class="nav-wrap">
            <a
                class="brand"
                href="<?= esc(site_url('/')) ?>"
                aria-label="POS Brillantes home"
            >
                <span class="brand-mark">P</span>
                <span>POS Brillantes</span>
            </a>

            <nav aria-label="Main navigation">
                <a
                    class="<?= ($active ?? '') === 'home' ? 'active' : '' ?>"
                    href="<?= esc(site_url('/')) ?>"
                >
                    Home
                </a>

                <a
                    class="<?= ($active ?? '') === 'about' ? 'active' : '' ?>"
                    href="<?= esc(site_url('about')) ?>"
                >
                    About
                </a>

                <a
                    class="<?= ($active ?? '') === 'customers' ? 'active' : '' ?>"
                    href="<?= esc(site_url('customers')) ?>"
                >
                    Customers
                </a>

                <a
                    class="<?= ($active ?? '') === 'users' ? 'active' : '' ?>"
                    href="<?= esc(site_url('users')) ?>"
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
