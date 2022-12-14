<div class="case-area py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                    <span class="site-title-tagline">Services</span>
                    <h2 class="site-title">Nos Secteurs d'activité</h2>
                    <div class="heading-divider"></div>
                    <p>
                        Voici certains de nos secteurs clés d'activité
                    </p>
                </div>
            </div>
        </div>
        <div class="row popup-gallery">
            <div class="row">
                <div class="col-md-3 col-lg-3">
                    <div class="case-item">
                        <div class="case-img">
                            <img 
                                class="img-fluid" 
                                src="<?= base_url();?>/resources/images/services/<?= $services[0]['photo'];?>" style="width:300px;height:400px"
                                alt="services"
                                
                            >
                            <a class="popup-img case-link" href="<?=base_url()?>/services/<?=$services[0]['srv_slug']?>"> <i class="far fa-plus"></i></a>
                        </div>
                        <div class="case-content">
                            <div class="case-content-info">
                                <h4><a href="#">Imprimerie </a></h4>
                                <small>Textiles, Papiers & Calicots</small>
                            </div>
                            <a href="<?=base_url()?>/services/<?=$services[0]['srv_slug']?>" class="case-arrow"><i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="case-item">
                        <div class="case-img">
                            <img class="img-fluid" src="<?= base_url();?>/resources/images/services/<?= $services[1]['photo'];?>" alt="" style="width:300px;height:400px">
                            <a class="popup-img case-link" href="assets/img/case/02.jpg"> <i class="far fa-plus"></i></a>
                        </div>
                        <div class="case-content">
                            <div class="case-content-info">
                                <small>Agropastoral</small>
                                <h4><a href="#">Agropastoral</a></h4>
                            </div>
                            <a href="<?=base_url()?>/services/<?=$services[1]['srv_slug']?>" class="case-arrow"><i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="case-item">
                        <div class="case-img">
                            <img class="img-fluid" src="<?= base_url();?>/resources/images/services/<?= $services[2]['photo'];?>" alt="" style="width:300px;height:400px">
                            <a class="popup-img case-link" href="assets/img/case/03.jpg"> <i class="far fa-plus"></i></a>
                        </div>
                        <div class="case-content">
                            <div class="case-content-info">
                                <h4><a href="#">Construction</a></h4>
                                <small>Construction & Travaux Publics</small>
                            </div>
                            <a href="<?=base_url()?>/services/<?=$services[2]['srv_slug']?>" class="case-arrow"><i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="case-item">
                        <div class="case-img">
                            <img class="img-fluid" src="<?= base_url();?>/resources/images/services/<?= $services[3]['photo'];?>" alt="" style="width:300px;height:400px">
                            <a class="popup-img case-link" href="assets/img/case/05.jpg"> <i class="far fa-plus"></i></a>
                        </div>
                        <div class="case-content">
                            <div class="case-content-info">
                                <small>Formation</small>
                                <h4><a href="<?=base_url()?>/services/<?=$services[3]['srv_slug']?>">Formation</a></h4>
                            </div>
                            <a href="<?=base_url()?>/services/<?=$services[3]['srv_slug']?>" class="case-arrow"><i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>