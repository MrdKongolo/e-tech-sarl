 <?= $this->extend('carts/shopping'); ?>
 <?= $this->section('content'); ?>
 <!-- Slider -->
 <style>
     @media screen and (min-width : 480px) {
         #product_image>img {
             width: 221px;
             height: 221px;
             padding: 2%;
         }
     }
 </style>

 <div class="container single_product_container">
     <div class="row">
         <div class="col">

             <!-- Breadcrumbs -->

             <div class="breadcrumbs d-flex flex-row align-items-center">
                 <ul>
                     <li><a href="<?= base_url() ?>">Accueil</a></li>
                     <li><a href="<?= base_url() ?>/services"><i class="fa fa-angle-right" aria-hidden="true"></i>Services</a></li>
                     <li class="active"><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i><?= $service['srv_title']; ?></a></li>
                 </ul>
             </div>

         </div>
     </div>

     <div class="row">
         <div class="col-lg-7">
             <div class="single_product_pics">
                 <div class="row">
                     <div class="col-lg-3 thumbnails_col order-lg-1 order-2">
                         <div class="single_product_thumbnails">
                             <ul>
                                <li>
                                    <img 
                                        src="<?= base_url(); ?>/resources/images/services/<?= $service['photo']; ?>" alt="" 
                                        data-image="<?= base_url(); ?>/resources/images/services/<?= $service['photo']; ?>"
                                        height="136"
                                    >
                                </li>
                                <li class="active">
                                    <img 
                                        src="<?= base_url(); ?>/resources/images/services/<?= $service['photo']; ?>" alt="" 
                                        data-image="<?= base_url(); ?>/resources/images/services/<?= $service['photo']; ?>"
                                        height="136"
                                    >
                                </li>
                                <li>
                                    <img 
                                        src="<?= base_url(); ?>/resources/images/services/<?= $service['photo']; ?>" alt="" 
                                        data-image="<?= base_url(); ?>/resources/images/services/<?= $service['photo']; ?>"
                                        height="136"
                                    >
                                </li>
                             </ul>
                         </div>
                     </div>
                     <div class="col-lg-9 image_col order-lg-2 order-1">
                         <div class="single_product_image">
                             <div class="single_product_image_background" style="background-image:url(<?= base_url(); ?>/resources/images/services/<?= $service['photo']; ?>)"></div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="col-lg-5">
             <div class="product_details">
                 <div class="product_details_title">
                     <h2><?= $service['srv_title'] ?? 'Secteur'; ?></h2>
                     <p style="text-align: justify;"><?= $service['srv_description'] ?? 'Description'; ?></p>
                 </div>
                 <div class="free_delivery d-flex flex-row align-items-center justify-content-center">
                     <span class="ti-truck"></span><span>Choisissez un produit en bas</span>
                 </div>
             </div>
         </div>
     </div>
 </div>

 <!-- New Arrivals -->

 <div class="new_arrivals" style="margin-bottom: 20px;" id="commandes">
     <div class="container">
         <?php if (isset($categories)) : ?>
             <?php foreach ($categories as $cat) : ?>
                 <div class="row">
                     <div class="col text-center">
                         <div class="section_title new_arrivals_title">
                             <h2><?= $cat['cat_title'] ?></h2>
                         </div>
                     </div>
                 </div>
                 <?php
                    $elements = (new App\Models\Element)->getElementsByCategory($cat['cat_id']);
                    ?>
                 <?php if (isset($elements)) : ?>
                     <div class="row">
                         <div class="col">
                             <div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>
                                 <?php foreach ($elements as $elt) : ?>
                                     <div class="product-item">
                                         <div class="product product_filter">
                                             <div class="product_image">
                                                 <img src="<?= base_url() ?>/resources/images/elements/<?= $elt['picture'] ?? 'no-image.png'; ?>" alt="" style="border-radius: 15px;">
                                             </div>
                                             <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span><?= $elt['price_max'] ?? 0.0 ?></span></div>

                                             <div class="product_info">
                                                 <h6 class="product_name"><a href=""><?= $elt['el_title'] ?? 'Produit' ?></a></h6>
                                                 <div class="product_price">$<?= $elt['price_inf'] ?? 0.0 ?></div>
                                                 <h6 class="product_name" style="margin-top: 5px;"><a href=""><?= $elt['units'] ?? 'Unité de vente' ?></a></h6>
                                             </div>
                                         </div>
                                         <div class="red_button add_to_cart_button"><a href="<?= base_url(); ?>/unity/<?= $elt['el_id'] ?>/<?= strtolower(url_title($elt['el_title'])) ?>">Ajouter au panier</a></div>
                                     </div>
                                 <?php endforeach; ?>
                             </div>
                         </div>
                     </div>
                 <?php endif; ?>
             <?php endforeach; ?>
         <?php endif; ?>
     </div>
 </div>
 <?= $this->endSection('content'); ?>