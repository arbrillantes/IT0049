<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section class="page-heading">
    <div>
        <span class="eyebrow">Staff directory</span>
        <h1>User Accounts</h1>
        <p>Login names and assigned roles for store employees.</p>
    </div>
    <span class="record-count"><?= count($users) ?> records</span>
</section>

<section class="table-card">
    <div class="table-scroll">
        <table>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">Full name</th>
                    <th scope="col">Role</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $index => $user): ?>
                    <tr>
                        <td class="row-number"><?= $index + 1 ?></td>
                        <td><strong><?= esc($user['username']) ?></strong></td>
                        <td><?= esc($user['full_name']) ?></td>
                        <td><span class="role-badge"><?= esc($user['role']) ?></span></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</section>
<?= $this->endSection() ?>
