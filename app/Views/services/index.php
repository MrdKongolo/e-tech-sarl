<?= $this->extend('layouts/main'); ?>
<?= $title ?? 'E-Tech'; ?>
<?= $this->section('content'); ?>

<div class="site-breadcrumb">
    <div class="container">
        <h2 class="breadcrumb-title">Secteurs d'Activité</h2>
        <ul class="breadcrumb-menu">
            <li><a href="<?=base_url()?>">Accueil</a></li>
            <li class="active">Les Services</li>
        </ul>
    </div>
</div>

<?= view_cell('\App\Controllers\Services::services');?>

<?= $this->endSection('content'); ?>