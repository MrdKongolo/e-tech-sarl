<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>
<style>
    h4>a {
        text-align: center;
    }

    div>p {
        text-align: justify;
    }

    div>img {
        width: 416px;
        height: 277px;
    }

    img#partner {
        width: 144.33px;
        height: 109.55px;
    }
</style>
<!-- <div class="site-breadcrumb">
    <div class="container">
        <h2 class="breadcrumb-title">Quelques réalisations </h2>
        <ul class="breadcrumb-menu">
            <li><a href="<?= base_url() ?>">Accueil</a></li>
            <li class="active">Nos Réalisations</li>
        </ul>
    </div>
</div> -->

<div class="blog-area py-120">
    <div class="container" style="text-align:center;align-items:center;">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                    <span class="site-title-tagline"></span>
                    <h2 class="site-title">Quelques Réalisations</h2>
                    <div class="heading-divider"></div>
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
            <!-- <div class="col-md-6 col-lg-4">
                <div class="blog-item">
                    <div class="blog-item-img">
                        <img src="<?= base_url() ?>/assets/img/blog/salles.jpg" alt="Thumb">
                    </div>
                    <div class="blog-item-info">
                        <h4 class="blog-title">
                            <a href="#">Construction de 6 salles de classe </a>
                        </h4>
                        <p>Construction de 6 salles de classe / Construction of 6 classrooms</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="blog-item">
                    <div class="blog-item-meta">
                        <ul>
                            <li><a href="#"><i class="far fa-user-circle"></i> IMPRIMERIE</a></li>                            
                        </ul>
                    </div>
                    <hr>
                    <div class="blog-item-img">
                        <img src="<?= base_url() ?>/assets/img/blog/etudes.jpg" alt="Thumb">
                    </div>
                    <div class="blog-item-info">
                        <h4 class="blog-title">
                            <a href="#">Sed ut perspiciatis unde iste omnis natus sit volup</a>
                        </h4>
                        <p>At vero eos et accusamus et iusto odio digniss ducimus qui blanditiis praesentium voluptatum deleniti atque corrupt.</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="blog-item">
                    <div class="blog-item-img">
                        <img src="<?= base_url() ?>/assets/img/blog/etudes.jpg" alt="Thumb">
                    </div>
                    <div class="blog-item-info">
                        <h4 class="blog-title">
                            <a href="#">
                                Etudes topographiques à 100m du péage Kanyaka
                            </a>
                        </h4>
                        <p>Etudes topographiques à 100m du péage Kanyaka sur la route Kasumbalesa où sera construit un parking + 2 bâtiments R+2 </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="blog-item">
                    <div class="blog-item-img">
                        <img src="<?= base_url() ?>/assets/img/blog/oignons.jpg" alt="Thumb">
                    </div>
                    <div class="blog-item-info">
                        <h4 class="blog-title">
                            <a href="#">Sous-traitance agricole dans une ferme</a>
                        </h4>
                        <p> Sous-traitance agricole à la ferme POULE AUX ŒUFS D’OR (cuture des oignons) </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="blog-item">
                    <div class="blog-item-img">
                        <img src="<?= base_url() ?>/assets/img/blog/site.jpg" alt="Thumb">
                    </div>
                    <div class="blog-item-info">
                        <h4 class="blog-title">
                            <a href="#">Construction d’un site touristique à Mwadingusha</a>
                        </h4>
                        <p>Construction d’un site touristique à Mwadingusha / Construction of a tourist site in Mwadingusha</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="blog-item">
                    <div class="blog-item-img">
                        <img src="<?= base_url() ?>/assets/img/blog/etangs.jpg" alt="Thumb">
                    </div>
                    <div class="blog-item-info">
                        <h4 class="blog-title">
                            <a href="#">Construction des étangs piscicoles</a>
                        </h4>
                        <p>Construction des étangs piscicoles à Kolwezi dans le site de Sanka avec Alternatives Plus pour le compte de
                            Metalkol dans le cadre de la responsabilité sociétale</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="blog-item">
                    <div class="blog-item-img">
                        <img src="<?= base_url() ?>/assets/img/blog/parking.jpg" alt="Thumb">
                    </div>
                    <div class="blog-item-info">
                        <h4 class="blog-title">
                            <a href="#">Construction d’un parking moderne </a>
                        </h4>
                        <p>Construction d’un parking moderne + 2 bâtiments R+1 sur la routeKasumbalesa (après le péage Kanyaka) </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="blog-item">
                    <div class="blog-item-img">
                        <img src="<?= base_url() ?>/assets/img/blog/livres.jpg" alt="Thumb">
                    </div>
                    <div class="blog-item-info">
                        <h4 class="blog-title">
                            <a href="#">Production des livres</a>
                        </h4>
                        <p>
                            Reliure cartonnée des cahiers des charge de l’ONG Alternatives Plus.
                            Production livres A6 fondation Cité de la Jeune Fille
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="blog-item">
                    <div class="blog-item-img">
                        <img src="<?= base_url() ?>/assets/img/blog/serres.jpg" alt="Thumb">
                    </div>
                    <div class="blog-item-info">
                        <h4 class="blog-title">
                            <a href="#">Vente et Installation des serres agricoles</a>
                        </h4>
                        <p> Vente et Installation des serres agricoles / Sale and Installation of agricultural greenhouses</p>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>


<?= $this->endSection('content'); ?>