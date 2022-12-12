<?= $this->extend('layouts/main'); ?>
<?= $title ?? 'E-Tech'; ?>
<?= $this->section('content'); ?>

<div class="site-breadcrumb">
    <div class="container">
        <h2 class="breadcrumb-title">Notre Equipe</h2>
        <ul class="breadcrumb-menu">
            <li><a href="<?=base_url()?>">Accueil</a></li>
            <li class="active">L'Equipe</li>
        </ul>
    </div>
</div>


<div class="team-area py-120">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="team-item">
                    <img src="assets/img/team/01.jpg" alt="thumb">
                    <div class="team-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                    <div class="team-content">
                        <div class="team-bio">
                            <h5><a href="#">Malissa Fierro</a></h5>
                            <span>Project Manager</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="team-item">
                    <img src="assets/img/team/02.jpg" alt="thumb">
                    <div class="team-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                    <div class="team-content">
                        <div class="team-bio">
                            <h5><a href="#">Arron Rodri</a></h5>
                            <span>Project Manager</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="team-item active">
                    <img src="assets/img/team/03.jpg" alt="thumb">
                    <div class="team-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                    <div class="team-content">
                        <div class="team-bio">
                            <h5><a href="#">Chad Smith</a></h5>
                            <span>Project Manager</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="team-item">
                    <img src="assets/img/team/04.jpg" alt="thumb">
                    <div class="team-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                    <div class="team-content">
                        <div class="team-bio">
                            <h5><a href="#">Tony Pinto</a></h5>
                            <span>Project Manager</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>