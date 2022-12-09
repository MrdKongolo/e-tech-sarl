<?= $this->extend("layouts/base")?>
<?= $title ;?>
<?= $this->section("content")?>

<?//php $user = session()->get('user_data');?>
<!-- [ Main Content ] start -->
<?php $user_data = session()->get('user_data');?>
<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Page d'Administration</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Tableau de Bord</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <?php if(session()->getFlashdata('error')):?>
                <div class="alert alert-danger"><?=session()->getFlashdata('error');?></div>
            <?php endif;?>
            <?php if(session()->getFlashdata('success')):?>
                <div class="alert alert-success"><?=session()->getFlashdata('success');?></div>
            <?php endif;?>
            <div class="col-lg-12 col-md-12">
                <!-- support-section start -->
                <div class="row justify-content-center">
                    <?php if ($user_data['role'] === 'admin'):?>
                        <div class="col-sm-4 text-center">
                            <div class="card support-bar overflow-hidden">
                                <div class="card-body pb-0">
                                    <h2 class="m-0"></?= $serv;?></h2>
                                    <span class="text-c-green"><strong><a href="<?= base_url()?>/services-list">SERVICES</a></strong></span>
                                    <p class="mb-3 mt-3"><a href="">Total Services</a></p>
                                </div>
                                <div class="card-footer bg-success text-white">
                                    <div class="row text-center">
                                        <div class="col">
                                            <a type="button" href="<?= base_url()?>/add-service" data-toggle="tooltip" data-placement="top" title="Ajout Services" 
                                            class="btn btn-icon btn-danger">
                                                <i class="feather icon-plus"></i>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <h5 class="m-0 text-white">Total</h5>
                                            <span></?= $serv;?></span>
                                        </div>
                                        <div class="col">
                                            <a type="button" href="<?= base_url()?>/services-list" data-toggle="tooltip" data-placement="top" title="Liste"
                                                class="btn btn-icon btn-info">
                                                <i class="feather icon-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 text-center">
                            <div class="card support-bar overflow-hidden">
                                <div class="card-body pb-0">
                                    <h2 class="m-0"></?= $services;?></h2>
                                    <span class="text-c-blue"><strong><a href="<?= base_url()?>/service-list">CATEGORIES</a></strong></span>
                                    <p class="mb-3 mt-3"><a style="color: black" href="<?= base_url()?>">Total Catégories</a></p>
                                </div>
                                <div class="card-footer bg-primary text-white">
                                    <div class="row text-center">
                                        <div class="col">
                                            <a type="button" href="<?= base_url()?>/add-service" data-placement="top" data-toggle="tooltip" title="Ajout Service" 
                                            class="btn btn-icon btn-danger">
                                                <i class="feather icon-plus"></i>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <h5 class="m-0 text-white">Total</h5>
                                            <span></?= $cat;?></span>
                                        </div>
                                        <div class="col">
                                            <a type="button" href="<?= base_url()?>/service-list" data-toggle="tooltip" data-placement="top" title="Liste"
                                                class="btn btn-icon btn-info">
                                                <i class="feather icon-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 text-center">
                            <div class="card support-bar overflow-hidden">
                                <div class="card-body pb-0">
                                    <h2 class="m-0"></?= $services;?></h2>
                                    <span class="text-c-red">
                                        <strong>
                                            <a class="text-c-red" href="">ELEMENTS</a>
                                        </strong>
                                    </span>
                                    <p class="mb-3 mt-3"><a style="color: black" href="">Total Eléments</a></p>
                                </div>
                                <div class="card-footer bg-info text-white">
                                    <div class="row text-center">
                                    <div class="col">
                                            <a type="button" href="<?= base_url()?>/add-service" data-placement="top" data-toggle="tooltip" title="Ajout Service" 
                                            class="btn btn-icon btn-danger">
                                                <i class="feather icon-plus"></i>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <h5 class="m-0 text-white">Total</h5>
                                            <span></?= $services;?></span>
                                        </div>
                                        <div class="col">
                                            <a type="button" href="" data-toggle="tooltip" data-placement="top" title="Liste"
                                                class="btn btn-icon btn-secondary">
                                                <i class="feather icon-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 text-center">
                            <div class="card support-bar overflow-hidden">
                                <div class="card-body pb-0">
                                    <h2 class="m-0"></?= $part;?></h2>
                                    <span class="text-c-red">
                                        <strong>
                                            <a class="text-c-red" href="">PARTENAIRES</a>
                                        </strong>
                                    </span>
                                    <p class="mb-3 mt-3"><a style="color: black" href="">Total Partenaires</a></p>
                                </div>
                                <div class="card-footer bg-info text-white">
                                    <div class="row text-center">
                                    <div class="col">
                                            <a type="button" href="<?= base_url()?>/add-partner" data-placement="top" data-toggle="tooltip" title="Ajouter" 
                                            class="btn btn-icon btn-danger">
                                                <i class="feather icon-plus"></i>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <h5 class="m-0 text-white">Total</h5>
                                            <span></?= $part;?></span>
                                        </div>
                                        <div class="col">
                                            <a type="button" href="<?= base_url()?>/partners-list" data-toggle="tooltip" data-placement="top" title="Liste"
                                                class="btn btn-icon btn-info">
                                                <i class="feather icon-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 text-center">
                            <div class="card support-bar overflow-hidden">
                                <div class="card-body pb-0">
                                    <h2 class="m-0"></?= $projs;?></h2>
                                    <span class="text-c-red">
                                        <strong>
                                            <a class="text-c-red" href="">PROJETS</a>
                                        </strong>
                                    </span>
                                    <p class="mb-3 mt-3"><a style="color: black" href="">Total Projets</a></p>
                                </div>
                                <div class="card-footer bg-facebook text-white">
                                    <div class="row text-center">
                                    <div class="col">
                                            <a type="button" href="<?= base_url()?>/add-project" data-placement="top" data-toggle="tooltip" title="Ajouter" 
                                            class="btn btn-icon btn-danger">
                                                <i class="feather icon-plus"></i>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <h5 class="m-0 text-white">Total</h5>
                                            <span></?= $projs;?></span>
                                        </div>
                                        <div class="col">
                                            <a type="button" href="<?= base_url()?>/project-list" data-toggle="tooltip" data-placement="top" title="Liste"
                                                class="btn btn-icon btn-info">
                                                <i class="feather icon-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif;?>      
                </div>
                <!-- support-section end -->
            </div>
            <div class="col-lg-12 col-md-12">
                <!-- page statistic card start -->
                <div class="row justify-content-center">
                    <?php if ($user_data['role'] === 'admin'):?>
                        <div class="col-sm-6 text-center">
                            <div class="card support-bar overflow-hidden">
                                <div class="card-body pb-0">
                                    <h2 class="m-0"></h2>
                                    <span class="text-c-blue"><strong><a href="<?= base_url()?>/coords">Coordonnées</a></strong></span>
                                    <p class="mb-3 mt-3"><a href="<?= base_url()?>/coords"">Modifier Les Coordonées</a></p>
                                </div>
                                <div class="card-footer bg-facebook text-white">
                                    <div class="row text-center">
                                        <div class="col">
                                            <h5 class="m-0 text-white"></h5>
                                            <span></span>
                                        </div>
                                        <div class="col">
                                            <h5 class="m-0 text-white"></h5>
                                            <span></span>
                                        </div>
                                        <div class="col">
                                            <h5 class="m-0 text-white"></h5>
                                            <span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif;?>
                </div>
                <!-- page statistic card end -->
            </div>
            <!-- project ,team member start -->

            <!-- project ,team member start -->>
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- Button trigger modal -->
<?= $this->endSection()?>