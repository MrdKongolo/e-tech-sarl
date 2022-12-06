<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>

<div class="site-breadcrumb">
    <div class="container">
        <h2 class="breadcrumb-title">About Us</h2>
        <ul class="breadcrumb-menu">
            <li><a href="index.html">Home</a></li>
            <li class="active">About Us</li>
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
                            <h5>29 <span class="far fa-plus"></span></h5>
                            <p>Years Experience</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-right">
                    <div class="site-heading mb-3">
                        <span class="site-title-tagline">About Us</span>
                        <h2 class="site-title">Provide The Creative Solutions For You</h2>
                    </div>
                    <p class="about-text">
                        There are many variations of passages of Lorem Ipsum available,
                        but the majority have suffered alteration in some form, by injected humour, or
                        randomised words.
                    </p>
                    <p class="mt-10">
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
                    </p>
                    <a href="about.html" class="theme-btn mt-30">Discover More <i class="far fa-long-arrow-right"></i></a>
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