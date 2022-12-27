<?= $this->extend('carts/shopping'); ?>
<?= $this->section('content'); ?>
<style>
    #add_to_cart {
        width: 160px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        background-color: #fe4c50;
        margin-left: 19px;
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
                <div class="free_delivery d-flex flex-row align-items-center justify-content-center">
                    <span class="ti-truck"></span><span>Ajouter au Panier</span>
                </div>
                <?php if ($element['price_max']) : ?>
                    <div class="original_price" style="padding-top: 5px;">$<?= $element['price_max']; ?></div>
                <?php endif; ?>
                <div class="product_price pt-3">$<?= $element['price_inf'] ?? 0.0; ?></div>
                <div class="quantity d-flex flex-column flex-sm-row align-items-sm-center">
                    <span>Quantité:</span>
                    <div class="quantity_selector">
                        <span class="minus"><i class="fa fa-minus" aria-hidden="true"></i></span>
                        <span id="quantity_value" onchange="setQuantity()">1</span>
                        <span class="plus"><i class="fa fa-plus" aria-hidden="true"></i></span>
                    </div>
                    <input type="hidden" name="quantity" id="quantity<?= $element['el_id'] ?>" class="form-control text-center" value="1" />
                    <input type="hidden" name="hidden_name" id="name<?= $element["el_id"] ?>" value="<?= $element["el_title"] ?>" />
                    <input type="hidden" name="hidden_price" id="price<?= $element["el_id"] ?>" value="<?= $element["price_inf"] ?>" />
                    <input type="button" id="add_to_cart" type="submit" value="Ajouter au Panier" onclick="alert('bonjour')" />
                </div>
            </div>
        </div>
    </div>

</div>
<script>
    $(document).ready(function() {
        setQuantity();
        function setQuantity() {
            let text = document.getElementById('quantity_value').textContent;
            
            console.log(text);
        }
    });
</script>
<?= $this->endSection('content'); ?>