<!DOCTYPE html>
<html lang="en">
<head>
    <title>Shopping Cart</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="shopping cart">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>/public/styles/bootstrap4/bootstrap.min.css">
    <link href="<?= base_url()?>/public/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>/public/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>/public/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>/public/plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>/public/styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>/public/styles/responsive.css">

    
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>/public/styles/single_styles.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>/public/styles/single_responsive.css">
    <!-- Favicon icon -->
    <link rel="shortcut icon" type="image/png" href="<?= base_url()?>/assets/img/logo/logo-e-tech.png" />
    <style>
        body {
            font-family: roboto,sans-serif;
        }
        .logo_container img {
            width: 160px;
            height: 84px;
        }
    </style>
</head>

<body>

    <div class="super_container">

        <!-- Header -->

        <header class="header trans_300">

            <!-- Top Navigation -->

            <div class="top_nav">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="top_nav_left">Ajout au panier</div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="top_nav_right">
                                <ul class="top_nav_menu">
                                    <li class="currency">
                                        <a href="#">
                                            usd
                                            <i class="fa fa-angle-right"></i>
                                        </a>                                        
                                    </li>
                                    <li class="language">
                                        <a href="#">
                                            Français
                                            <i class="fa fa-angle-right"></i>
                                        </a>                                        
                                    </li>                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Navigation -->

            <div class="main_nav_container">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-right">
                            <div class="logo_container">
                                <a href="<?= base_url()?>"> <img src="<?= base_url()?>/assets/img/logo/logo-e-tech.png" alt="logo"></span></a>
                            </div>
                            <nav class="navbar">
                                <ul class="navbar_menu">
                                    <li><a href="<?=base_url();?>">Acueil</a></li>
                                    <li><a href="<?=base_url();?>/about-us">A Propos</a></li>
                                    <li><a href="<?=base_url();?>/services">Services</a></li>
                                    <li><a href="<?=base_url();?>/team">Equipe</a></li>
                                    <li><a href="<?=base_url();?>/blog">Réalisations</a></li>
                                    <li><a href="<?=base_url();?>/contact">Contact</a></li>
                                </ul>
                                <ul class="navbar_user">
                                    <li class="checkout">
                                        <a href="#">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            <span id="checkout_items" class="checkout_items">0</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="hamburger_container">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

        </header>

        <div class="fs_menu_overlay"></div>
        <div class="hamburger_menu">
            <div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
            <div class="hamburger_menu_content text-right">
                <ul class="menu_top_nav">
                    <li class="menu_item has-children">                     
                    <li class="menu_item"><a href="<?=base_url();?>">Acueil</a></li>
                    <li class="menu_item"><a href="#">shop</a></li>
                    <li class="menu_item"><a href="<?=base_url();?>/about-us">A Propos</a></li>
                    <li class="menu_item"><a href="<?=base_url();?>/services">Services</a></li>
                    <li class="menu_item"><a href="<?=base_url();?>/team">Equipe</a></li>
                    <li class="menu_item"><a href="<?=base_url();?>/blog">Réalisations</a></li>
                    <li class="menu_item"><a href="<?=base_url();?>/contact">Contact</a></li>
                </ul>
            </div>
        </div>

       <?= $this->renderSection('content');?>

        <!-- Footer -->

        <footer class="footer" style="background-color: #1e1e27 !important;color:antiquewhite !important;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
                            <ul class="footer_nav">
                                <li><a href="<?= base_url()?>">Accueil</a></li>
                                <li><a href="<?= base_url()?>/services">Services</a></li>
                                <li><a href="<?= base_url()?>/contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
                            <ul class="footer_nav">
                                <li><a href="<?= base_url()?>/blog">Réalisations</a></li>
                                <li><a href="<?= base_url()?>/team">Personnel</a></li>
                                <li><a href="<?= base_url()?>/about-us">A Propos</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-telegram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="footer_nav_container">
                            <div class="cr">
                                <p class="copyright-text">&copy; Copyright <?= date('Y')?> <a href=""> E-Tech Sarl </a> Tous droits reservés</p> 
                                <p class="copyright-text">Dévéloppé par <a href="https://api.whatsapp.com/send?phone=243976739301"> MrdKB</p> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>

<script src="<?= base_url()?>/public/js/jquery-3.2.1.min.js"></script>
<script src="<?= base_url()?>/public/styles/bootstrap4/popper.js"></script>
<script src="<?= base_url()?>/public/styles/bootstrap4/bootstrap.min.js"></script>
<script src="<?= base_url()?>/public/plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="<?= base_url()?>/public/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="<?= base_url()?>/public/plugins/easing/easing.js"></script>
<script src="<?= base_url()?>/public/js/custom.js"></script>
<script src="<?= base_url()?>/public/js/single_custom.js"></script>
</body>

</html>
