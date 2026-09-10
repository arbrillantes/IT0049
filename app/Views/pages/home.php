<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section class="hero">
    <div>
        <span class="eyebrow">Simple store management</span>
        <h1>Your small shop,<br><span>all in one place.</span></h1>
        <p>Keep customer and staff account information organized with a clean and easy-to-use POS foundation.</p>
        <div class="hero-actions">
            <a class="button button-primary" href="<?= base_url('customers') ?>">View customers</a>
            <a class="button button-secondary" href="<?= base_url('users') ?>">View staff</a>
        </div>
    </div>

    <div class="summary-card" aria-label="System summary">
        <div class="summary-top">
            <span>Store overview</span>
            <span class="status"><i></i> Ready</span>
        </div>
        <div class="summary-row">
            <div class="summary-icon customer-icon">C</div>
            <div><strong>5</strong><span>Customer accounts</span></div>
        </div>
        <div class="summary-row">
            <div class="summary-icon user-icon">U</div>
            <div><strong>5</strong><span>User accounts</span></div>
        </div>
        <div class="summary-note">Everything ready for today's work.</div>
    </div>
</section>

<section class="features">
    <article>
        <span class="feature-number">01</span>
        <h2>Simple records</h2>
        <p>See the important account details without extra clutter.</p>
    </article>
    <article>
        <span class="feature-number">02</span>
        <h2>Quick access</h2>
        <p>Move between every page using one clear navigation bar.</p>
    </article>
    <article>
        <span class="feature-number">03</span>
        <h2>Ready to grow</h2>
        <p>A clean MVC structure can connect to a database later.</p>
    </article>
</section>
<?= $this->endSection() ?>
