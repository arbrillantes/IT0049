<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section class="page-heading">
    <div>
        <span class="eyebrow">Account directory</span>
        <h1>Customer Accounts</h1>
        <p>Contact details for the store's registered customers.</p>
    </div>
    <span class="record-count"><?= count($customers) ?> records</span>
</section>

<section class="table-card">
    <div class="table-scroll">
        <table>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Full name</th>
                    <th scope="col">Email address</th>
                    <th scope="col">Phone number</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($customers as $index => $customer): ?>
                    <tr>
                        <td class="row-number"><?= $index + 1 ?></td>
                        <td><strong><?= esc($customer['full_name']) ?></strong></td>
                        <td><a class="table-link" href="mailto:<?= esc($customer['email']) ?>"><?= esc($customer['email']) ?></a></td>
                        <td><?= esc($customer['phone']) ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</section>
<?= $this->endSection() ?>
