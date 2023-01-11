<?= $this->extend('carts/shopping'); ?>
<?= $this->section('content'); ?>
<style>
    .add_to_cart {
        border: none;
        border-radius: 5px;
        cursor: pointer;
        background-color: #fe4c50;
        font-size: 12px !important;
        display: block;
        color: #FFFFFF;
        text-transform: uppercase;
        font-size: 12px;
        font-weight: 500;
        text-align: center;
        line-height: 40px;
        width: 100%;
    }
</style>
<!-- Slider -->

<div class="container single_product_container">
    <div class="row">
        <div class="col">

            <!-- Breadcrumbs -->

            <div class="breadcrumbs d-flex flex-row align-items-center">
                <ul>
                    <li><a href="<?= base_url() ?>">Accueil</a></li>
                    <li><a href="<?= base_url() ?>/services"><i class="fa fa-angle-right" aria-hidden="true"></i>Produits</a></li>
                    <li class="active"><a href="javascript:javascript:history.go(-1)"><i class="fa fa-angle-right" aria-hidden="true"></i>Retour</a></li>
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
                                        src="<?= base_url(); ?>/resources/images/elements/<?= $element['picture']; ?>" alt="" 
                                        data-image="<?= base_url(); ?>/resources/images/elements/<?= $element['picture']; ?>"
                                        height="136"
                                    >
                                </li>
                                <li class="active">
                                    <img 
                                        src="<?= base_url(); ?>/resources/images/elements/<?= $element['picture']; ?>" alt="" 
                                        data-image="<?= base_url(); ?>/resources/images/elements/<?= $element['picture']; ?>"
                                        height="136"
                                    >
                                </li>
                                <li>
                                    <img 
                                        src="<?= base_url(); ?>/resources/images/elements/<?= $element['picture']; ?>" alt="" 
                                        data-image="<?= base_url(); ?>/resources/images/elements/<?= $element['picture']; ?>"
                                        height="136"
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 image_col order-lg-2 order-1">
                        <div class="single_product_image" style="height: 428px;">
                            <div class="single_product_image_background" style="background-image:url(<?= base_url() ?>/resources/images/elements/<?= $element['picture'] ?? 'no-image.png'; ?>)"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="product_details">
                <div class="product_details_title">
                    <h2><?= $element['el_title']; ?></h2>
                    <p></p>
                </div>
                <div class="free_delivery d-flex flex-row align-items-center justify-content-center" style="margin-top:10px">
                    <span class="ti-truck"></span><span>Ajouter au Panier</span>
                </div>                
                <div>
                    <input type="radio" name="price" id="inf" value="<?= $element['price_inf']; ?>" checked> <?= $element['option'] ?> &nbsp;
                    <div class="product_price pt-3">$<?= $element['price_inf']; ?></div>
                </div>
                <?php if($element['autre']!== null):?>
                    <div>                  
                        <input type="radio" name="price" id="max" value="<?= $element['price_max'] ?? $element['price_inf']; ?>"> <?= $element['autre'] ?> &nbsp;
                        <div class="product_price pt-3">$<?= $element['price_max'] ?? $element['price_inf']; ?></div>
                    </div>
                <?php endif;?>
                <div class="quantity d-flex flex-column flex-sm-row align-items-sm-center">
                    <span>Quantité:</span>
                    <div class="quantity_selector">
                        <span id="quantity_value">
                            <input type="number" name="quantity" id="quantity<?= $element['el_id'] ?>"  
                                class="form-control text-center" value="1" min="1" 
                                onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"
                            />
                        </span>
                    </div>     
                    <input type="hidden" name="hidden_name" id="name<?= $element["el_id"] ?>" value="<?= $element["el_title"] ?>" />
                    <input type="hidden" name="hidden_price" id="price<?= $element["el_id"] ?>" value="<?= $element["price_inf"] ?>" />
                </div>
                <div class="mt-5">
                    <input type="button" class="add_to_cart" name="add_to_cart" id="<?= $element["el_id"]?>" type="submit" value="Ajouter au Panier" />
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>