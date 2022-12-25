<?= $this->extend('layouts/main'); ?>
<?= $title ?? 'E-Tech'; ?>
<?= $this->section('content'); ?>


<?= view_cell('\App\Controllers\Services::services');?>

<?= $this->endSection('content'); ?>