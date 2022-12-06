<?= $this->extend('layouts/main'); ?>
<?= $title ?? 'E-Tech'; ?>
<?= $this->section('content'); ?>

<div class="site-breadcrumb">
    <div class="container">
        <h2 class="breadcrumb-title">Services</h2>
        <ul class="breadcrumb-menu">
            <li><a href=" ">Home</a></li>
            <li class="active">Détails Services</li>
        </ul>
    </div>
</div>


<div class="faq-area py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="faq-left">
                    <div class="site-heading mb-3">
                        <span class="site-title-tagline">SECTEUR</span>
                        <h2 class="site-title my-3">General frequently asked questions</h2>
                    </div>
                    
                    <p class="about-text">
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
                    </p>
                    <p class="mt-10">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
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
                            <!-- <div class="accordion-body">
                                We are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable
                                it is a long established fact.
                            </div> -->
                            <div class="widget sidebar-tag">
                                <div class="tag-list">
                                    <a href="#">Creative Agency</a>
                                    <a href="#">Business</a>
                                    <a href="#">Corporate</a>
                                    <a href="#">Marketing</a>
                                    <a href="#">Design</a>
                                    <a href="#">Commercial</a>
                                </div>
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
<?= $this->endSection('content'); ?>