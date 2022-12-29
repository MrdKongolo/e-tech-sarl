<?= $this->extend('layouts/main'); ?>
<?=$title ?? 'E-Tech';?>
<?= $this->section('content'); ?>

<div class="hero-section">
    <div class="hero-single">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7 col-lg-7">
                    <div class="hero-content">
                        <h6 class="hero-sub-title wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
                            Bienvenue Sur E-Tech SARL
                        </h6>
                        <h1 class="hero-title wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay=".50s">
                            E-Tech SARL
                        </h1>
                        <p class="wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay=".75s" style="text-align:justify">
                            E-Tech Sarl est une société de droit congolais composée des professionnels très ambitieux soucieux d’exceller et d’innover.
                            Nous garantissons la réussite et surtout la satisfaction de nos partenaires. <br>
                            Nos techniciens ont fait preuves dans toutes sortes de projets (marchés) quelles que soient leurs tailles, tant locaux qu’internationaux.
                            Ce qui fait de nous un panel de talentueux.
                        </p>
                        <div class="hero-btn wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                            <a class="theme-btn" href="<?=base_url()?>/resources/docs/domino.pdf" target="_blank">Continuez<i class="far fa-long-arrow-down"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-lg-5">
                    <div class="hero-img">
                        <img src="<?=base_url()?>/assets/img/slider/e-tech.jpg" height="490" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section Secteurs ou Services -->
<?= view_cell('\App\Controllers\Services::services');?>
<!-- End Sections Secteurs-->

<!-- Section Why-->
<?= view_cell('\App\Controllers\Home::why');?>
<!-- End Section Why-->

<div class="case-area py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                    <span class="site-title-tagline">Projets</span>
                    <h2 class="site-title">Projets</h2>
                    <div class="heading-divider"></div>
                    <p>
                        Voici en bas quelques statistiques des projets
                    </p>
                </div>
            </div>
        </div>        
    </div>
</div>

<div class="counter-area">
    <div class="container">
        <div class="counter-wrapper">
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <div class="counter-box">
                        <div class="icon"><i class="icon-social-media"></i></div>
                        <span class="counter" data-count="+" data-to="300" data-speed="3000">300</span>
                        <h6 class="title">+ Marchés Réalisés</h6>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="counter-box">
                        <div class="icon"><i class="icon-customer"></i></div>
                        <span class="counter" data-count="+" data-to="270" data-speed="3000">270</span>
                        <h6 class="title">+ Clients Statisfaits</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>