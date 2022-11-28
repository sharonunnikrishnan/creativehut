<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Task<?= $this->endSection() ?>

<?= $this->section("content") ?>

        <h1>Task</h1>

        <a href="<?= site_url("/tasks") ?>"><< Back to Index</a>

        <dl>
                <dt>ID</dt>
                <dt><?= $task->id ?></dt>

                <dt>Description</dt>
                <dt><?= esc($task->description) ?></dt>

                <dt>Created At</dt>
                <dt><?= $task->created_at ?></dt>

                <dt>Updated At</dt>
                <dt><?= $task->updated_at ?></dt>

        </dl>

        <a href="<?= site_url('/tasks/edit/' . $task->id ) ?>">Edit</a>
        <a href="<?= site_url('/tasks/delete/' . $task->id ) ?>">Delete</a>

<?= $this->endSection() ?>