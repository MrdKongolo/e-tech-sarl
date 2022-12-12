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
                        <img class="about-img-1" src="assets/img/about/01.jpg" alt="">
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

<div class="service-area pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                    <span class="site-title-tagline">Mille et une raison de nous choisir</span>
                    <h2 class="site-title">Pourquoi Nous ?</h2>
                    <p>
                        
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="icon-growth"></i>
                    </div>
                    <h3 class="service-title">
                        <a href="#">La compétence</a>
                    </h3>
                    <p class="service-text" style="text-align:justify;">
                    Une équipe de passionnés pour des prestations de qualité. La Société ETech est constituée des personnes 
                    qualifiées et dynamique chacune dans son domaine avec une expérience avérée.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="icon-front-end"></i>
                    </div>
                    <h3 class="service-title">
                        <a href="#">La qualité de service</a>
                    </h3>
                    <p class="service-text" style="text-align:justify;">
                    E-Tech est engagée dans une démarche d’amélioration continue de la qualité de ses produits et services pour la satisfaction de ses clients.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="icon-bullhorn"></i>
                    </div>
                    <h3 class="service-title">
                        <a href="#">L’efficacité</a>
                    </h3>
                    <p class="service-text" style="text-align:justify;">
                    Notre objectif est de satisfaire nos clients en leur offrant un travail de qualité au-delà de leurs attentes et 
                    dans le respect strict des délais. L’excellence est l’un de nos leitmotivs.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="icon-online-shopping"></i>
                    </div>
                    <h3 class="service-title">
                        <a href="#">L’expérience</a>
                    </h3>
                    <p class="service-text" style="text-align:justify;">
                    5 ans d’expérience et une forte capacité d’innovation pour vous apporter le meilleur service dans le meilleur délai.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="icon-webpage"></i>
                    </div>
                    <h3 class="service-title">
                        <a href="#">La vision</a>
                    </h3>
                    <p class="service-text" style="text-align:justify;">
                    La performance se mesure, non pas au volume d’activités ni au seul chiffre d’affaires, mais au succès et à la pérennité de l’entreprise.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="icon-conversation"></i>
                    </div>
                    <h3 class="service-title">
                        <a href="#">La dimension humaine</a>
                    </h3>
                    <p class="service-text" style="text-align:justify;">
                    Au-delà de la prestation technique, l’humain est au cœur de notre action.
                    Tout ce que nous faisons est pour faciliter la vie de nos concitoyens.
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


<div class="partner-area pt-70 pb-70">
    <div class="container">
        <div class="partner-wrapper partner-slider owl-carousel owl-theme">
            <img src="assets/img/partner/01.jpg" alt="thumb">
            <img src="assets/img/partner/02.jpg" alt="thumb">
            <img src="assets/img/partner/03.jpg" alt="thumb">
            <img src="assets/img/partner/04.jpg" alt="thumb">
            <img src="assets/img/partner/01.jpg" alt="thumb">
            <img src="assets/img/partner/02.jpg" alt="thumb">
            <img src="assets/img/partner/03.jpg" alt="thumb">
        </div>
    </div>
</div>


<?= $this->endSection('content'); ?>