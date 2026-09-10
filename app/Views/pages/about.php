<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section class="page-heading compact-heading">
    <span class="eyebrow">About the project</span>
    <h1>A small foundation for a <span>better store.</span></h1>
    <p>SimplePOS is a beginner-friendly CodeIgniter 4 project made to demonstrate routes, controllers, views, and temporary array data.</p>
</section>

<section class="about-grid">
    <article class="about-main">
        <h2>What this website does</h2>
        <p>This first version keeps things focused. It gives store staff one place to view customer contact details and user account roles.</p>
        <p>No database is used yet. The sample records are stored in PHP arrays inside the controllers, then passed to the views for display.</p>
    </article>
    <aside class="about-list">
        <h2>Built with MVC</h2>
        <div><strong>Routes</strong><span>Match each URL to a page.</span></div>
        <div><strong>Controllers</strong><span>Prepare page information.</span></div>
        <div><strong>Views</strong><span>Display the final website.</span></div>
    </aside>
</section>
<?= $this->endSection() ?>
