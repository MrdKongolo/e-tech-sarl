<?= $this->extend('layouts/main'); ?>
<?= $title ?? 'E-Tech'; ?>
<?= $this->section('content'); ?>

<!-- <div class="site-breadcrumb">
    <div class="container">
        <h2 class="breadcrumb-title">Contact</h2>
        <ul class="breadcrumb-menu">
            <li><a href="<?= base_url() ?>">Accueil</a></li>
            <li class="active">Contact</li>
        </ul>
    </div>
</div> -->

<div class="error-area py-120">
    <div class="container">
        <div class="col-md-6 mx-auto">
            <div class="error-wrapper">
                <h1>4<span>0</span>4</h1>
                <h2>Opos... Page Non Trouvée!</h2>
                <p>La page que vous cherchez n'existe pas ou pourrait être supprimé</p>
                <a href="<?= base_url() ?>" class="theme-btn"><i class="far fa-home"></i> Accueil</a>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>