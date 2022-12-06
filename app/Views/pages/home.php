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
                            A Propos de Nous
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
                            <a href="" class="theme-btn">Continuez<i class="far fa-long-arrow-down"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-lg-5">
                    <div class="hero-img">
                        <img src="assets/img/slider/hero-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="case-area py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                    <span class="site-title-tagline">Services</span>
                    <h2 class="site-title">Nos Secteurs d'activité</h2>
                    <div class="heading-divider"></div>
                    <p>
                        It is a long established fact that a reader will be distracted by the readable content.
                    </p>
                </div>
            </div>
        </div>
        <div class="row popup-gallery">
            <div class="row">
                <div class="col-md-3 col-lg-3">
                    <div class="case-item">
                        <div class="case-img">
                            <img class="img-fluid" src="assets/img/case/01.jpg" alt="">
                            <a class="popup-img case-link" href="assets/img/case/01.jpg"> <i class="far fa-plus"></i></a>
                        </div>
                        <div class="case-content">
                            <div class="case-content-info">
                                <h4><a href="#">Imprimerie </a></h4>
                                <small>Textiles, Papiers & Calicots</small>
                            </div>
                            <a href="#" class="case-arrow"><i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="case-item">
                        <div class="case-img">
                            <img class="img-fluid" src="assets/img/case/02.jpg" alt="">
                            <a class="popup-img case-link" href="assets/img/case/02.jpg"> <i class="far fa-plus"></i></a>
                        </div>
                        <div class="case-content">
                            <div class="case-content-info">
                                <small>Agropastoral</small>
                                <h4><a href="#">Agropastoral</a></h4>
                            </div>
                            <a href="#" class="case-arrow"><i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="case-item">
                        <div class="case-img">
                            <img class="img-fluid" src="assets/img/case/03.jpg" alt="">
                            <a class="popup-img case-link" href="assets/img/case/03.jpg"> <i class="far fa-plus"></i></a>
                        </div>
                        <div class="case-content">
                            <div class="case-content-info">
                                <h4><a href="#">Construction</a></h4>
                                <small>Construction & Travaux Publics</small>
                            </div>
                            <a href="#" class="case-arrow"><i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="case-item">
                        <div class="case-img">
                            <img class="img-fluid" src="assets/img/case/05.jpg" alt="">
                            <a class="popup-img case-link" href="assets/img/case/05.jpg"> <i class="far fa-plus"></i></a>
                        </div>
                        <div class="case-content">
                            <div class="case-content-info">
                                <small>Formation</small>
                                <h4><a href="#">Formation</a></h4>
                            </div>
                            <a href="#" class="case-arrow"><i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
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


<div class="case-area py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                    <span class="site-title-tagline">Cases</span>
                    <h2 class="site-title">Recent Projects</h2>
                    <div class="heading-divider"></div>
                    <p>
                        It is a long established fact that a reader will be distracted by the readable content.
                    </p>
                </div>
            </div>
        </div>
        <div class="row popup-gallery">
            <div class="case-slider owl-carousel owl-theme">
                <div class="case-item">
                    <div class="case-img">
                        <img class="img-fluid" src="assets/img/case/01.jpg" alt="">
                        <a class="popup-img case-link" href="assets/img/case/01.jpg"> <i class="far fa-plus"></i></a>
                    </div>
                    <div class="case-content">
                        <div class="case-content-info">
                            <small>Graphics</small>
                            <h4><a href="#">Product Design</a></h4>
                        </div>
                        <a href="#" class="case-arrow"><i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="case-item">
                    <div class="case-img">
                        <img class="img-fluid" src="assets/img/case/02.jpg" alt="">
                        <a class="popup-img case-link" href="assets/img/case/02.jpg"> <i class="far fa-plus"></i></a>
                    </div>
                    <div class="case-content">
                        <div class="case-content-info">
                            <small>Graphics</small>
                            <h4><a href="#">Product Design</a></h4>
                        </div>
                        <a href="#" class="case-arrow"><i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="case-item">
                    <div class="case-img">
                        <img class="img-fluid" src="assets/img/case/03.jpg" alt="">
                        <a class="popup-img case-link" href="assets/img/case/03.jpg"> <i class="far fa-plus"></i></a>
                    </div>
                    <div class="case-content">
                        <div class="case-content-info">
                            <small>Graphics</small>
                            <h4><a href="#">Product Design</a></h4>
                        </div>
                        <a href="#" class="case-arrow"><i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="case-item">
                    <div class="case-img">
                        <img class="img-fluid" src="assets/img/case/04.jpg" alt="">
                        <a class="popup-img case-link" href="assets/img/case/04.jpg"> <i class="far fa-plus"></i></a>
                    </div>
                    <div class="case-content">
                        <div class="case-content-info">
                            <small>Graphics</small>
                            <h4><a href="#">Product Design</a></h4>
                        </div>
                        <a href="#" class="case-arrow"><i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="counter-area">
    <div class="container">
        <div class="counter-wrapper">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box">
                        <div class="icon"><i class="icon-social-media"></i></div>
                        <span class="counter" data-count="+" data-to="500" data-speed="3000">500</span>
                        <h6 class="title">+ Project Done</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box">
                        <div class="icon"><i class="icon-customer"></i></div>
                        <span class="counter" data-count="+" data-to="250" data-speed="3000">250</span>
                        <h6 class="title">+ Satisfied Clients</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box">
                        <div class="icon"><i class="icon-recruit"></i></div>
                        <span class="counter" data-count="+" data-to="120" data-speed="3000">120</span>
                        <h6 class="title">+ Expert Teams</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box">
                        <div class="icon"><i class="icon-recommend"></i></div>
                        <span class="counter" data-count="+" data-to="50" data-speed="3000">50</span>
                        <h6 class="title">+ Win Awards</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="faq-area py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="faq-left">
                    <div class="site-heading mb-3">
                        <span class="site-title-tagline">Faq's</span>
                        <h2 class="site-title my-3">General frequently asked questions</h2>
                    </div>
                    <p class="about-text">
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
                    </p>
                    <p class="mt-10">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                    <a href="#" class="theme-btn mt-5">Ask Your Question <i class="far fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <span><i class="far fa-question"></i></span> Do I Need A Business Plan ?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                We are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable
                                it is a long established fact.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <span><i class="far fa-question"></i></span> How Long Should A Business Plan Be
                                ?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                We are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable
                                it is a long established fact.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <span><i class="far fa-question"></i></span> What Payment Gateway You Support ?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                We are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable
                                it is a long established fact.
                            </div>
                        </div>
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