<?php if (session()->has('warning')): ?>
<div class="warning">
    <?= session('warning') ?>
</div>
<?php endif; ?>

<?php if (session()->has('info')): ?>
    <div class="info">
        <?= session('info') ?>
    </div>
<?php endif; ?>

<?php if (session()->has('error')): ?>
    <div class="error">
        <?= session('error') ?>
    </div>
<?php endif; ?>

<?= $this->renderSection("content") ?>