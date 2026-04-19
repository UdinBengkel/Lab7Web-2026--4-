<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<h1><?= $title ?? 'Home' ?></h1>
<hr>
<p><?= $content ?? '' ?></p>
<?= $this->endSection() ?>