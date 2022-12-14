<?= $this->extend('layouts/base') ?>
<?= $this->section('content') ?>
<!-- [ Main Content ] start -->
<?php
$user_data = session()->get('user_data');
helper('text');

use CodeIgniter\I18n\Time;; ?>
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
                                                <img class="img-radius img-fluid wid-100" src="<?= base_url() ?>/resources/images/user/<?= $user_data['photo'] ?? "user-default-avatar.png" ?>" alt="User image">
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
                                        <a class="dropdown-item" href="<?= base_url() ?>/users/addImage"><i class="feather icon-upload-cloud mr-2"></i>Nouvelle photo</a>
                                    </div>
                                </div>
                            </div>
                            <h5 class="mb-1"><?= ucfirst($user_data['username']) ?></h5>
                            <p class="mb-2 text-muted"><?= ucfirst($user_data['role'] ?? "R??le") ?></p>
                        </div>
                        <div class="col-md-8 mt-md-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <?php if ($user_data['role'] === 'admin') : ?>

                                    <?php endif; ?>
                                    <div class="clearfix"></div>
                                    <a href="mailto:<?= $user_data['email'] ?? "User email" ?>" class="mb-1 text-muted d-flex align-items-end text-h-primary"><i class="feather icon-mail mr-2 f-18"></i><?= $user_data['u_email'] ?? "Adresse email" ?></a>
                                    <div class="clearfix"></div>
                                    <a href="#!" class="mb-1 text-muted d-flex align-items-end text-h-primary"><i class="feather icon-phone mr-2 f-18"></i><?= $user_data['phone'] ?? "T??l??phone" ?></a>
                                </div>
                                <div class="col-md-6">
                                    <div class="media">
                                        <i class="feather icon-map-pin mr-2 mt-1 f-18"></i>
                                        <div class="media-body">
                                            <p class="mb-0 text-muted"><?= $coords['address'] ?? "" ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="nav nav-tabs profile-tabs nav-fill" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link text-reset active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false"><i class="feather icon-home mr-2"></i>Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-reset" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true"><i class="feather icon-user mr-2"></i>Profile</a>
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
            <div class="col-md-12">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card user-profile-list">
                                    <div class="card-body">
                                        <div class="dt-responsive table-responsive">
                                            <table id="user-list-table" class="table nowrap">
                                                <thead>
                                                    <tr>
                                                        <th>Date</th>
                                                        <th>Client</th>
                                                        <th>Phone</th>
                                                        <th>Montant</th>
                                                        <th>Preuve</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php if ($user_data['role'] === 'admin') : ?>

                                                        <?php if ($quotes) : ?>

                                                            <?php foreach ($quotes as $quote) : ?>
                                                                <tr>
                                                                    <td>
                                                                        <?= $quote->created_at ?><br>
                                                                        <p style="color: violet;"><strong><?= Time::parse($quote->created_at)->humanize(); ?></strong></p>
                                                                    </td>
                                                                    <td>

                                                                        <div class="d-inline-block align-middle">

                                                                            <div class="d-inline-block">
                                                                                <h6 class="m-b-0"><?= $quote->client; ?></h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td><?= $quote->phone ?? ''; ?></td>
                                                                    <td><?= $quote->amount ?? ''; ?></td>
                                                                    <td><?= substr($quote->proof, 0, 10) ?? ""; ?></td>

                                                                    <td>
                                                                        <?php if (isset($quote->status)) : ?>
                                                                            <?php if ($quote->status == 'attente') : ?>
                                                                                <span class="badge badge-light-danger">Attente</span>
                                                                            <?php elseif ($quote->status == 'en cours') : ?>
                                                                                <span class="badge badge-light-warning">En cours</span>
                                                                            <?php elseif ($quote->status == 'trait??') : ?>
                                                                                <span class="badge badge-light-success">Trait??</span>
                                                                            <?php endif ?>
                                                                        <?php endif ?>
                                                                        <div class="overlay-edit">
                                                                            <a type="button" href="<?= base_url() ?>/dealing/<?= $quote->hash ?>/process" class="btn btn-icon btn-warning" data-toggle="tooltip" data-placement="top" title="Proc??der">
                                                                                <i class="feather icon-check-circle"></i></a>
                                                                            <a type="button" href="<?= base_url() ?>/dealing/<?= $quote->hash ?>/done" class="btn btn-icon btn-success" data-toggle="tooltip" data-placement="top" title="T??rminer">
                                                                                <i class="feather icon-thumbs-up"></i></a>
                                                                            <a type="button" href="<?= base_url() ?>/cart-details/<?= $quote->hash ?>" class="btn btn-icon btn-danger" data-toggle="tooltip" data-placement="top" title="D??tails">
                                                                                <i class="feather icon-eye"></i></a>
                                                                            <!-- <button type="button" class="btn  btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Launch demo modal</button> -->
                                                                            <button class="btn btn-icon btn-info" data-toggle="modal" data-target="#proof<?= $quote->hash ?>" title="Preuve">
                                                                                <i class="feather icon-image"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <!-- [ vertically-modal ] start -->

                                                                <div id="proof<?= $quote->hash ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="proof<?= $quote->hash ?>" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalCenterTitle">Preuve</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                    <div class="thumb">
                                                                                        <a href="<?=base_url()?>/resources/images/proofs/<?= $quote->proof ?>" data-lightbox="1" data-title="My caption 1">
                                                                                            <img src="<?=base_url()?>/resources/images/proofs/<?= $quote->proof ?>" alt="" class="img-fluid img-thumbnail">
                                                                                        </a>
                                                                                    </div>                                                                                      
                                                                                </div>
                                                                                <p class="mb-0">Preuve <?= $quote->proof ?></p>
                                                                            </div>
                                                                            <div class="modal-footer text-center">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <!-- [ vertically-modal ] end -->
                                                            <?php endforeach; ?>
                                                        <?php else : ?>
                                                            <div class="alert alert-primary text-center">
                                                                Aucune requ??te n'a ??t?? soumise !
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>


                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>Date</th>
                                                        <th>Client</th>
                                                        <th>Phone</th>
                                                        <th>Montant</th>
                                                        <th>Preuve</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade col-md-8" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="card">
                            <div class="card-body d-flex align-items-center justify-content-between">
                                <h5 class="mb-0">D??tails Personnels</h5>
                                <button type="button" class="btn btn-primary btn-sm rounded m-0 float-right" data-toggle="collapse" data-target=".pro-det-edit" aria-expanded="false" aria-controls="pro-det-edit-1 pro-det-edit-2">
                                    <i class="feather icon-edit"></i>
                                </button>
                            </div>
                            <div class="card-body border-top pro-det-edit collapse show" id="pro-det-edit-1">
                                <form>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label font-weight-bolder">Nom complet</label>
                                        <div class="col-sm-9" style="padding-top: 12px;">
                                            <?= ucfirst($user_data['username']); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label font-weight-bolder">T??l??phone</label>
                                        <div class="col-sm-9" style="padding-top: 12px;">
                                            <?= $user_data['phone'] ?? "N?? T??l??phone" ?>
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
                                <?= form_open("update-one-self") ?>
                                <?= csrf_field(); ?>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label font-weight-bolder">Pr??nom</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="username" class="form-control" placeholder="Username" value="<?= $user_data['username'] ?? "" ?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label font-weight-bolder">T??l??phone</label>
                                    <div class="col-sm-9">
                                        <input type="tel" name="phone" class="form-control" placeholder="T??l??phone" value="<?= $user_data['phone'] ?? "" ?>">
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

                </div>
            </div>
        </div>
        <!-- profile body end -->
    </div>
</div>
<!-- [ Main Content ] end -->
<?= $this->endSection() ?>