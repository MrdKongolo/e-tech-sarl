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


<div class="service-area py-120">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="icon-growth"></i>
                    </div>
                    <h3 class="service-title">
                        <a href="#">Digital Marketing</a>
                    </h3>
                    <p class="service-text">
                        There are many variations of passages available but the majority have suffered alteration in some form injected humour randomised words.
                    </p>
                    <div class="service-arrow">
                        <a href="#" class="theme-btn">Read More <span class="far fa-long-arrow-right"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="icon-front-end"></i>
                    </div>
                    <h3 class="service-title">
                        <a href="#">Website Development</a>
                    </h3>
                    <p class="service-text">
                        There are many variations of passages available but the majority have suffered alteration in some form injected humour randomised words.
                    </p>
                    <div class="service-arrow">
                        <a href="#" class="theme-btn">Read More <span class="far fa-long-arrow-right"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="icon-bullhorn"></i>
                    </div>
                    <h3 class="service-title">
                        <a href="#">Social Marketing</a>
                    </h3>
                    <p class="service-text">
                        There are many variations of passages available but the majority have suffered alteration in some form injected humour randomised words.
                    </p>
                    <div class="service-arrow">
                        <a href="#" class="theme-btn">Read More <span class="far fa-long-arrow-right"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="icon-online-shopping"></i>
                    </div>
                    <h3 class="service-title">
                        <a href="#">App Development</a>
                    </h3>
                    <p class="service-text">
                        There are many variations of passages available but the majority have suffered alteration in some form injected humour randomised words.
                    </p>
                    <div class="service-arrow">
                        <a href="#" class="theme-btn">Read More <span class="far fa-long-arrow-right"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="icon-webpage"></i>
                    </div>
                    <h3 class="service-title">
                        <a href="#">Graphics Design</a>
                    </h3>
                    <p class="service-text">
                        There are many variations of passages available but the majority have suffered alteration in some form injected humour randomised words.
                    </p>
                    <div class="service-arrow">
                        <a href="#" class="theme-btn">Read More <span class="far fa-long-arrow-right"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="icon-conversation"></i>
                    </div>
                    <h3 class="service-title">
                        <a href="#">Strategy & Research</a>
                    </h3>
                    <p class="service-text">
                        There are many variations of passages available but the majority have suffered alteration in some form injected humour randomised words.
                    </p>
                    <div class="service-arrow">
                        <a href="#" class="theme-btn">Read More <span class="far fa-long-arrow-right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>