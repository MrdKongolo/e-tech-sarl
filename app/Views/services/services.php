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

<div class="case-area py-120" id="serv" style="background: #f9f5f4;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                    <span class="site-title-tagline">&nbsp;</span>
                    <h2 class="site-title">Nos Secteurs</h2>
                    <div class="heading-divider"></div>
                    <p>
                        Voici certains de nos secteurs clés d'activité <br>
                        Cliquez sur un service pour voir les détails.
                    </p>
                </div>
            </div>
        </div>
        <div class="row popup-gallery">
            <div class="row mx-auto">
                <?php foreach($services as $serv):?>
                    <div class="col-md-6 col-lg-4  mx-auto">
                        <a href="<?=base_url()?>/service-details/<?=strtolower($serv['srv_slug']);?>">
                            <div class="case-item">
                                <div class="case-img">
                                    <img 
                                        class="img-fluid" 
                                        src="<?= base_url();?>/resources/images/services/<?= $serv['photo'];?>" style="height:543px"
                                        alt="services"                                
                                    >
                                </div>
                                <div class="case-content">
                                    <div class="case-content-info">
                                        <h4><a href="<?=base_url()?>/service-details/<?=strtolower($serv['srv_slug']);?>"><?=ucfirst($serv['srv_title']);?> </a></h4>
                                        <small><?=$serv['srv_title'];?></small>
                                    </div>
                                    <a href="<?=base_url()?>/service-details/<?=strtolower($serv['srv_slug']);?>" class="case-arrow"><i class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</div>