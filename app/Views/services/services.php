<style>
    .case-img::before {
        content: '';
        position: absolute;
        top: 0 !important;
        bottom: 0 !important;
        right: 0 !important;
        left: 0 !important;
    }
</style>

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
                <?php foreach($services as $serv):?>
                    <div class="col-md-3 col-lg-3">
                        <a href="<?=base_url()?>/services/<?=strtolower($serv['srv_slug']);?>">
                            <div class="case-item">
                                <div class="case-img">
                                    <img 
                                        class="img-fluid" 
                                        src="<?= base_url();?>/resources/images/services/<?= $serv['photo'];?>" style="width:300px;height:400px"
                                        alt="services"                                
                                    >
                                </div>
                                <div class="case-content">
                                    <div class="case-content-info">
                                        <h4><a href="<?=base_url()?>/services/<?=strtolower($serv['srv_slug']);?>">Imprimerie </a></h4>
                                        <small>Textiles, Papiers & Calicots</small>
                                    </div>
                                    <a href="<?=base_url()?>/services/<?=strtolower($serv['srv_slug']);?>" class="case-arrow"><i class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</div>