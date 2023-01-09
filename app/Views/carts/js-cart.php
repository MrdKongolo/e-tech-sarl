<script>
    $(document).ready(function() {

        load_cart_data();

        function load_cart_data() {
            $.ajax({
                url: "<?php echo base_url(); ?>/carts/load",
                method: "POST",
                dataType: "json",
                success: function(data) {
                    $('#cart_details').html(data.cart_details);
                    $('.total_price').text(data.total_price);
                    $('.total_item').text(data.total_item);
                    $('.badge').text(data.total_item);
                }
            });
        }

        $('#cart-popover').popover({
            html: true,
            container: 'body',
            content: function() {
                return $('#popover_content_wrapper').html();
            }
        });

        $(document).on('click', '.add_to_cart', function() {

            var prix = document.querySelector('input[name="price"]:checked').value;
           
            var product_id = $(this).attr("id");
            var product_name = $('#name' + product_id + '').val();
            var product_price = prix;
            var product_quantity = $('#quantity' + product_id).val();
            if (product_quantity > 0) {
                $.ajax({
                    url: "<?php echo base_url(); ?>/carts/add",
                    method: "POST",
                    data: {
                        product_id: product_id,
                        product_name: product_name,
                        product_price: product_price,
                        product_quantity: product_quantity,
                    },
                    success: function(data) {
                        load_cart_data();
                        swal({
                            text: "Le produit a été ajouté au panier",
                            icon: "success",
                            button: "OK!",
                        });
                    }
                });
            } else {
                alert("SVP, entrez une quantité");
            }
        });

        $(document).on('click', '.delete', function() {
            var row_id = $(this).attr("id");
            if (confirm("Voulez-vous enlever ce produit ?")) {
                $.ajax({
                    url: "<?php echo base_url(); ?>/carts/remove",
                    method: "POST",
                    data: {
                        row_id: row_id
                    },
                    success: function() {
                        load_cart_data();
                        $('#cart-popover').popover('hide');
                        swal({
                            text: "Le produit a été retiré du panier",
                            icon: "success",
                            button: "OK!",
                        });
                    }
                });
            } else {
                return false;
            }
        });
        $(document).on('click', '#clear_cart', function() {
            $.ajax({
                url: "<?php echo base_url(); ?>/carts/clear",
                method: "POST",
                success: function() {
                    load_cart_data();
                    $('#cart-popover').popover('hide');
                    swal({
                        title: "Nettoyage!",
                        text: "Le panier a été vidé!",
                        icon: "success",
                        button: "Bien",
                    });
                }
            });
        });
    });
</script>