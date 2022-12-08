<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Nous garantissons la réussite et surtout la satisfaction de nos partenaires.">
    <meta name="keywords" content="imprimerie,construction,agropastoral,fournitures,consultance">
    <meta name="author" content="Medard Kongolo">

    <title><?= $title ?? 'E-Tech SARL'?></title>

    <link rel="icon" type="image/x-icon" href="<?= base_url()?>/assets/img/logo/logo-e-tech.png">

    <link rel="stylesheet" href="<?= base_url()?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/all-fontawesome.min.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/icomoon.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/animate.min.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/style.css">
    <style>
        .site-breadcrumb::before {
            background-image: linear-gradient(to top,#f9f5f4 0%,#f9f5f4 0%);
        }
        .footer-logo img {
            margin-bottom: 0px;
            height: 93px;
        }
    </style>
</head>

<body>

    <div class="preloader">
        <div class="loader">
            <div class="loader-box-1"></div>
            <div class="loader-box-2"></div>
        </div>
    </div>

    <header class="home-3 header">
        <div class="main-navigation">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="<?= base_url()?>">
                        <img src="<?= base_url()?>/assets/img/logo/logo-e-tech.png" alt="logo">
                    </a>
                    <div class="mobile-menu-right">
                        <a href="#" class="mobile-search-btn search-box-outer"><i class="far fa-search"></i></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"><i class="far fa-stream"></i></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="main_nav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link  active" href="#">Accueil</a>                               
                            </li>
                            <li class="nav-item"><a class="nav-link" href=""> A Propos </a></li>                            
                            <li class="nav-item"><a class="nav-link" href=""> Services </a></li>                            
                            <li class="nav-item"><a class="nav-link" href=""> Projets </a></li>                            
                            <li class="nav-item"><a class="nav-link" href=""> Réalisations </a></li>                            
                            
                            <li class="nav-item">
                                <a class="nav-link" href="">Contact</a>
                            </li>
                        </ul>
                        <div class="header-nav-right">
                            <div class="header-nav-search">
                                <a href="#" class="search-box-outer"><i class="far fa-search"></i></a>
                            </div>
                            <div class="header-phone">
                                <div class="header-phone-icon">
                                    <i class="fal fa-mobile-android"></i>
                                </div>
                                <div class="header-phone-content">
                                    <span>Téléphone</span>
                                    <h5 class="header-phone-number"><a href="tel:+243 852 769 918">+243 852 769 918</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <div class="search-popup">
        <button class="close-search"><span class="far fa-times"></span></button>
        <form action="#">
            <div class="form-group">
                <input type="search" name="search-field" placeholder="Search Here..." required>
                <button type="submit"><i class="far fa-search"></i></button>
            </div>
        </form>
    </div>

    <main class="home-3 main">

    <?= $this->renderSection('content');?>

    </main>

    <footer class="footer-area">
        <div class="footer-widget">
            <div class="container">
                <div class="row footer-widget-wrapper pt-100 pb-70">
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-widget-box about-us">
                            <a href="#" class="footer-logo">
                                <img src="<?= base_url()?>/assets/img/logo/logo-e-tech.png" alt="">
                            </a>
                            <p class="mb-20" style="text-align: center;">
                            E-Tech Sarl est une société de droit congolais composée des professionnels très ambitieux soucieux d’exceller et d’innover.
                            Nous garantissons la réussite et surtout la satisfaction de nos partenaires. 
                            </p>
                            <ul class="footer-social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Liens Utiles</h4>
                            <ul class="footer-list">
                                <li><a href="#"><i class="fas fa-caret-right"></i> Accueil</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i> A Propos</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i> Services</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i> Réalisations</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i> Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-widget-box">
                            <h4 class="footer-widget-title">Contact</h4>
                            <ul class="footer-contact">
                                <li><i class="far fa-map-marker-alt"></i>05, Av. Tshisawaka, C/ Kampemba, Lubumbashi-RDC</li>
                                <li><a href="tel:+243 852 769 918"><i class="far fa-phone"></i>+243 852 769 918</a></li>
                                <li><a href=""><i class="far fa-envelope"></i><span class="__cf_email__" data-cfemail="cea7a0a8a18eabb6afa3bea2abe0ada1a3">[email&#160;protected]</span></a>
                                </li>
                                <li><i class="far fa-clock"></i>Lu - Ven (90:00 - 16:00)</li>
                            </ul>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <p class="copyright-text">
                            &copy; Copyright <span id="date"></span> <a href="#"> E-Tech Sarl </a> Tous droits reservés.
                        </p>
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <ul class="footer-menu">
                            <li><a href="https://api.whatsapp.com/send?phone=243976739301">Dévéloppé par <span style="color:red">MrdKB</span> </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <a href="#" id="scroll-top"><i class="far fa-long-arrow-up"></i></a>


<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="<?= base_url()?>/assets/js/jquery-3.6.0.min.js"></script>
<script src="<?= base_url()?>/assets/js/modernizr.min.js"></script>
<script src="<?= base_url()?>/assets/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url()?>/assets/js/imagesloaded.pkgd.min.js"></script>
<script src="<?= base_url()?>/assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url()?>/assets/js/isotope.pkgd.min.js"></script>
<script src="<?= base_url()?>/assets/js/jquery.appear.min.js"></script>
<script src="<?= base_url()?>/assets/js/jquery.easing.min.js"></script>
<script src="<?= base_url()?>/assets/js/owl.carousel.min.js"></script>
<script src="<?= base_url()?>/assets/js/counter-up.js"></script>
<script src="<?= base_url()?>/assets/js/wow.min.js"></script>
<script src="<?= base_url()?>/assets/js/main.js"></script>
</body>


</html>