<?= $this->extend('layouts/main');?>
<?= $this->section('content');?>
<style>
    .truc li a i {
        height: 50px;
        width: 50px;
        line-height: 50px;
        text-align: center;
        background-color: green;
        color: #fff;
        border-radius: 50%;
        transition: all .5s ease-in-out;
    }
</style>
<div class="login-area py-120">
    <div class="container">
        <div class="col-md-5 mx-auto">
            <div class="login-form">
                <div class="login-header text-center">
                    <h3 style="color: green !important;">Confirmation</h3>
                    <p>Votre commande a été envoyée avec succès</p>
                    <small>Contactez-nous directement sur les réseaux sociaux</small>
                </div>
                <ul class="footer-social truc justify-content-center">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://api.whatsapp.com/send?phone=243814590209"><i class="fab fa-whatsapp"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                </ul>                    
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content');?>