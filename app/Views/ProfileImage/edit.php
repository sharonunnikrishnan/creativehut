<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Edit Profile Image<?= $this->endSection() ?>

<?= $this->section("content") ?>

    <h1>Edit Profile Image</h1>

    <?php if(session()->has('errors')): ?>

        <ul>
            <?php foreach(session('errors') as $error): ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    
    <?php endif ?>

    <?= form_open_multipart("/profileimage/update") ?>

        <div>
                <label for="image">File</label>
                <input type="file" name="image" id="image">
        </div>

        <button>Upload</button>
        <a href="<?= site_url("/profile/show") ?>">Cancel</a>

    </form>

<?= $this->endSection() ?>