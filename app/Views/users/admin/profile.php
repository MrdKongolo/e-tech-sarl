<?= $this->extend('layouts/base')?>
<?= $this->section('content')?>
<!-- [ Main Content ] start -->
<?php
helper('text');
;?>
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ Main Content ] start -->
        <!-- profile header start -->
        <div class="user-profile user-card mb-4">
            <div class="card-header border-0 p-0 pb-0">
                <div class="cover-img-block">
                    <!-- <img src="assets/images/profile/cover.jpg" alt="" class="img-fluid"> -->
                    <div class="overlay"></div>
                    <div class="change-cover">
                        <div class="dropdown">
                            <a class="drp-icon dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon feather icon-camera"></i></a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#"><i class="feather icon-upload-cloud mr-2"></i>Nouvelle image</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body py-0">
                <div class="user-about-block m-0">
                    <div class="row">
                        <div class="col-md-4 text-center mt-n5">
                            <div class="change-profile text-center">
                                <div class="dropdown w-auto d-inline-block">
                                    <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="profile-dp">
                                            <div class="position-relative d-inline-block">
                                                <img class="img-radius img-fluid wid-100" src="<?= base_url()?>/resources/images/user/<?= $user_data['photo'] ?? "user-default-avatar.png"?>" alt="User image">
                                            </div>
                                            <div class="overlay">
                                                <span>change</span>
                                            </div>
                                        </div>
                                        <div class="certificated-badge">
                                            <i class="fas fa-certificate text-c-blue bg-icon"></i>
                                            <i class="fas fa-check front-icon text-white"></i>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="<?= base_url()?>/users/addImage"><i class="feather icon-upload-cloud mr-2"></i>Nouvelle photo</a>
                                    </div>
                                </div>
                            </div>
                            <h5 class="mb-1"><?= ucfirst($user_data['username'])?></h5>
                            <p class="mb-2 text-muted"><?= ucfirst($user_data['role'] ?? "Rôle")?></p>
                        </div>
                        <div class="col-md-8 mt-md-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <?php if(($user_data['role'] === 'admin')) :?>

                                    <?php endif; ?>
                                    <div class="clearfix"></div>
                                    <a href="mailto:<?= $user_data['email'] ?? "User email"?>" class="mb-1 text-muted d-flex align-items-end text-h-primary"><i class="feather icon-mail mr-2 f-18"></i><?= $user_data['email'] ?? "Adresse email"?></a>
                                    <div class="clearfix"></div>
                                    <a href="#!" class="mb-1 text-muted d-flex align-items-end text-h-primary"><i class="feather icon-phone mr-2 f-18"></i><?= $user_data['phone'] ?? "Téléphone"?></a>
                                </div>
                                <div class="col-md-6">
                                    <div class="media">
                                        <i class="feather icon-map-pin mr-2 mt-1 f-18"></i>
                                        <div class="media-body">
                                            <p class="mb-0 text-muted"><?= $user_data->org_adress ?? ""?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="nav nav-tabs profile-tabs nav-fill" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link text-reset active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true"><i class="feather icon-user mr-2"></i>Profile</a>
                                </li>
                                <li class="nav-item">
<!--                                    <a class="nav-link text-reset " id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false"><i class="feather icon-home mr-2"></i>Home</a>-->
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- profile header end -->
        <!-- profile body start -->
        <div class="row">
            <div class="col-md-8 order-md-2">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="card">
                            <div class="card-body d-flex align-items-center justify-content-between">
                                <h5 class="mb-0">Détails Personnels</h5>
                                <button type="button" class="btn btn-primary btn-sm rounded m-0 float-right" data-toggle="collapse" data-target=".pro-det-edit" aria-expanded="false" aria-controls="pro-det-edit-1 pro-det-edit-2">
                                    <i class="feather icon-edit"></i>
                                </button>
                            </div>
                            <div class="card-body border-top pro-det-edit collapse show" id="pro-det-edit-1">
                                <form>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label font-weight-bolder">Nom complet</label>
                                        <div class="col-sm-9" style="padding-top: 12px;">
                                            <?= ucfirst($user_data['username']);?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label font-weight-bolder">Téléphone</label>
                                        <div class="col-sm-9" style="padding-top: 12px;">
                                            <?= $user_data['phone'] ?? "N° Téléphone" ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label font-weight-bolder">Adresse Email </label>
                                        <div class="col-sm-9" style="padding-top: 12px;">
                                            <?= $user_data['email'] ?? "utilisateur@email.com" ?>
                                        </div>
                                    </div>

                                </form>
                            </div>
                            <div class="card-body border-top pro-det-edit collapse " id="pro-det-edit-2">
                                <?= form_open("update-one-self")?>
                                    <?= csrf_field();?>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label font-weight-bolder">Prénom</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="u_firstname" class="form-control" placeholder="Prénom" value="<?= $user_data['u_firstname'] ?? "" ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label font-weight-bolder">Nom</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="u_lastname" class="form-control" placeholder="Nom" value="<?= $user_data['u_lastname'] ?? "" ?>">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label font-weight-bolder">Téléphone</label>
                                        <div class="col-sm-9">
                                            <input type="tel" name="phone" class="form-control" placeholder="Téléphone" value="<?= $user_data['phone'] ?? "" ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label font-weight-bolder">Adresse Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" name="email" class="form-control" placeholder="Email" value="<?= $user_data['email'] ?? "" ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label"></label>
                                        <div class="col-sm-9">
                                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade " id="home" role="tabpanel" aria-labelledby="home-tab">

                    </div>
                </div>
            </div>
        </div>
        <!-- profile body end -->
    </div>
</div>
<!-- [ Main Content ] end -->
<?= $this->endSection()?>
