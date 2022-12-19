<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>

<div class="site-breadcrumb">
    <div class="container">
        <h2 class="breadcrumb-title">A Propos de Nous</h2>
        <ul class="breadcrumb-menu">
            <li><a href="<?=base_url()?>">Accueil</a></li>
            <li class="active">Qui Nous Sommes</li>
        </ul>
    </div>
</div>


<div class="about-area py-120">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-left">
                    <div class="about-img">
                        <img class="about-img-1" src="<?=base_url()?>/assets/img/slider/e-tech.jpg" alt="">
                    </div>
                    <div class="about-left-content">
                        <div class="about-left-info">
                            <h5>5 <span class="far fa-plus"></span></h5>
                            <p>Ans d'experience</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-right">
                    <div class="site-heading mb-3">
                        <span class="site-title-tagline">Qui Sommes-Nous</span>
                        <h2 class="site-title">E-Tech SARL</h2>
                    </div>
                    <p class="about-text" style="text-align:justify">
                        E-Tech Sarl est une société de droit congolais composée des professionnels très ambitieux soucieux d’exceller et d’innover.
                        Nous garantissons la réussite et surtout la satisfaction de nos partenaires. <br>
                        Nos techniciens ont fait preuves dans toutes sortes de projets (marchés) quelles que soient leurs tailles, tant locaux qu’internationaux.
                        Ce qui fait de nous un panel de talentueux..
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section Why-->
<?= view_cell('\App\Controllers\Home::why');?>
<!-- End Section Why-->

<div class="counter-area">
    <div class="container">
        <div class="counter-wrapper">
        <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="counter-box">
                        <div class="icon"><i class="icon-social-media"></i></div>
                        <span class="counter" data-count="+" data-to="100" data-speed="3000">100</span>
                        <h6 class="title">+ Projets Réalisés</h6>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="counter-box">
                        <div class="icon"><i class="icon-customer"></i></div>
                        <span class="counter" data-count="+" data-to="80" data-speed="3000">80</span>
                        <h6 class="title">+ Clients Statisfaits</h6>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="counter-box">
                        <div class="icon"><i class="icon-recruit"></i></div>
                        <span class="counter" data-count="+" data-to="4" data-speed="3000">4</span>
                        <h6 class="title">+ Equipe</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection('content'); ?>