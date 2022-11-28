<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>User<?= $this->endSection() ?>

<?= $this->section("content") ?>

        <h1>User</h1>

        <a href="<?= site_url("/admin/users") ?>"><< Back to Index</a>

        <dl>

                <dt>Name</dt>
                <dt><?= esc($user->name) ?></dt>

                <dt>Email</dt>
                <dt><?= esc($user->email) ?></dt>

                <dt>Active</dt>
                <dt><?= $user->is_active ? 'yes' : 'no' ?></dt>

                <dt>Administrator</dt>
                <dt><?= $user->is_admin ? 'yes' : 'no' ?></dt>

                <dt>Created At</dt>
                <dt><?= $user->created_at ?></dt>

                <dt>Updated At</dt>
                <dt><?= $user->updated_at ?></dt>

        </dl>

        <a href="<?= site_url('/admin/users/edit/' . $user->id ) ?>">Edit</a>

        <?php if($user->id != current_user()->id): ?>
                <a href="<?= site_url('/admin/users/delete/' . $user->id ) ?>">Delete</a>
        <?php endif; ?>

<?= $this->endSection() ?>