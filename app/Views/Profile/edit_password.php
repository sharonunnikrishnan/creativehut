<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Edit Password<?= $this->endSection() ?>

<?= $this->section("content") ?>

    <h1>Edit Password</h1>

    <?php if(session()->has('errors')): ?>

        <ul>
            <?php foreach(session('errors') as $error): ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    
    <?php endif ?>

    <?= form_open("/profile/updatepassword") ?>

        <div>
                <label for="current_password">Current Password</label>
                <input type="password" name="current_password">
        </div> 

        <div>
                <label for="password">New Password</label>
                <input type="password" name="password">
        </div> 

        <div>
                <label for="password_confirmation">Repeat New Password</label>
                <input type="password" name="password_confirmation">
        </div> 

        <button>Save</button>
        <a href="<?= site_url("/profile/show/") ?>">Cancel</a>

    </form>

<?= $this->endSection() ?>