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
<div class="site-breadcrumb">
    <div class="container">
        <h2 class="breadcrumb-title">Quelques réalisations </h2>
        <ul class="breadcrumb-menu">
            <li><a href="<?= base_url() ?>">Accueil</a></li>
            <li class="active">Nos Réalisations</li>
        </ul>
    </div>
</div>

<div class="blog-area py-120">
    <div class="container" style="text-align:center;align-items:center;">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
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
            </div>
        </div>
    </div>
</div>


<?= $this->endSection('content'); ?>