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
                            Qui Sommes-Nous
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
                        <img src="assets/img/slider/hero-2.jpg" alt="">
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