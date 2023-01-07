<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>

<style>
    .case-img::before {
        content: '';
        position: absolute;
        top: 0 !important;
        bottom: 0 !important;
        right: 0 !important;
        left: 0 !important;
    }
</style>


<div class="about-area py-120">
    <div class="container pt-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-left">
                    <div class="about-img">
                        <img class="about-img-1" src="<?= base_url() ?>/assets/img/slider/e-tech.jpg" alt="">
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
                        <span class="site-title-tagline">Qui Sommes-Nous ?</span>
                        <h2 class="site-title">E-Tech SARL</h2>
                    </div>
                    <p class="about-text" style="text-align:justify">
                        E-Tech Sarl est une société de droit congolais composée des professionnels très ambitieux soucieux d’exceller et d’innover.
                        Nous garantissons la réussite et surtout la satisfaction de nos partenaires. <br>
                        Nos techniciens ont fait preuves dans toutes sortes de projets (marchés) quelles que soient leurs tailles, tant locaux qu’internationaux.
                        Ce qui fait de nous un panel de talentueux..
                    </p>
                </div>
                <div class="widget service-download">
                    <h4 class="widget-title">Documents à télécharger</h4>
                    <?php if(isset($docs)):?>
                        <?php foreach($docs as $doc):?>
                            <a href="<?= base_url();?>/resources/documents/<?=$doc['file'];?>" target="_blank""><i class="far fa-file-alt"></i><?=$doc['name'];?></a>
                        <?php endforeach;?>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- Section Why-->
<?= view_cell('\App\Controllers\Home::why'); ?>
<!-- End Section Why-->

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