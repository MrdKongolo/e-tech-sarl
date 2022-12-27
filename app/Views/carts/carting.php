<style>
    .popover {
        width: 100%;
        max-width: 800px;
    }
</style>
<ul class="navbar_user">
    <li class="checkout">
        <a class="btn" id="cart-popover" data-placement="bottom" title="Votre Panier" style="cursor:pointer;">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            <span id="checkout_items" class="checkout_items total_item">0</span>
            <!-- <span id="checkout_items" class="checkout_items total_price">0</span> -->
        </a>
    </li>
</ul>
<div class="hamburger_container">
    <i class="fa fa-bars" aria-hidden="true"></i>
</div>

<div id="popover_content_wrapper" style="display: none">
    <span id="cart_details"></span>
    <div align="right">
        <a href="<?= base_url('shopping') ?>" class="btn btn-primary" id="check_out_cart">
            <span class="fa fa-shopping-cart"></span> Commander
        </a>
        <button class="btn btn-default" id="clear_cart">
            <span class="fa fa-trash"></span> Vider
        </button>
    </div>
</div>