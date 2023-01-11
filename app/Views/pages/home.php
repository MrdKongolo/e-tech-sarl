<?= $this->extend('layouts/main'); ?>
<?= $title ?? 'E-Tech'; ?>
<?= $this->section('content'); ?>
<style>
    div#serv {
        padding-top: 5px;
    }

    div.blog-item-img>img {
        width: 416px;
        height: 277px;
    }
</style>
<div class="hero-section">
    <div class="hero-single">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7 col-lg-7">
                    <div class="hero-content">
                        <h6 class="hero-sub-title wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
                            <?=$accueil['subtitle']?? '';?>
                        </h6>
                        <h1 class="hero-title wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay=".50s" style="font-style: capitalize;">
                        <?=$accueil['title']?? '';?>
                        </h1>
                        <p class="wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay=".75s" style="text-align:justify">
                            <?=$accueil['description']?? '';?>
                        </p>
                        <div class="hero-btn wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                            <!-- <a class="theme-btn" href="</?= base_url() ?>/resources/docs/domino.pdf" target="_blank">Continuez<i class="far fa-long-arrow-down"></i></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-lg-5">
                    <div class="hero-img">
                        <img src="<?= base_url() ?>/resources/images/slider/<?= $accueil['photo'] ?? 'e-tech.jpg'?>" height="490" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="about-area py-5">
    <div class="container">
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
                    <div class="hero-btn wow animate__animated animate__fadeInUp" data-wow-duration=".5" data-wow-delay=".5s">
                        <a class="theme-btn" href="<?= base_url() ?>/about-us">Lire Plus<i class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section Secteurs ou Services -->
<?= view_cell('\App\Controllers\Services::services'); ?>
<!-- End Sections Secteurs-->

<!--  Sections Réalisations-->
<div class="blog-area pt-5">
    <div class="container" style="text-align:center;align-items:center;">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                    <span class="site-title-tagline"></span>
                    <h2 class="site-title">Nos Réalisations</h2>
                    <div class="heading-divider"></div>
                    <p>
                        Voici quelques unes de nos réalisations
                    </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <?php if(isset($blogs)):?>
                <?php foreach($blogs as $blog):?>
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item">
                            <div class="blog-item-meta">
                                <ul>
                                    <li><a href="#"><i class="far fa-user-circle"></i> <?= $blog['srv_title'];?></a></li>                            
                                </ul>
                            </div>
                            <hr>
                            <div class="blog-item-img">
                                <img src="<?= base_url() ?>/resources/images/blogs/<?= $blog['picture'];?>" alt="Thumb">
                            </div>
                            <div class="blog-item-info">
                                <h4 class="blog-title">
                                    <a href="#"><?= $blog['title'];?></a>
                                </h4>
                                <p><?= $blog['description'];?></p>
                                
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            <?php endif;?>            
        </div>
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="hero-btn wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                    <a class="theme-btn" href="<?= base_url() ?>/blog">Voir Plus<i class="far fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="partner-area pt-70 pb-70" style="background-color:#f9f5f4">
    <div class="container">
        <?php if (isset($parts)) : ?>
            <div class="partner-wrapper partner-slider owl-carousel owl-theme">
                <?php foreach ($parts as $val) : ?>
                    <img src="<?= base_url(); ?>/resources/images/partners/<?= $val['part_logo']; ?>" alt="thumb" id="partner">
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</div>

<?= $this->endSection('content'); ?>