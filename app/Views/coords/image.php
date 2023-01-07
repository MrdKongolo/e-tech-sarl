<?= $this->extend("layouts/base") ?>
<?= $this->section("content") ?>
<?php helper('form')?>
<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">L'accueil</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url() ?>/dashboard"><i
                                        class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Modifier l'image d'accueil</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Accueil</h5>
                    </div>
                    <!-- [ breadcrumb ] end -->
                    <div class="card-body">
                        <?php $hidden = ['accueil' => $accueil['id']];?>
                        <?= form_open_multipart('home-update-image','', $hidden) ?>
                            <div class="row text-c">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="file" class="form-control" name="photo">
                                    </div>
                                    <small id="input-help" class="form-text text-danger"><?= $validation['photo'] ?? null; ?></small>
                                </div>
                                <div class="col-sm-6">
                                    <button type="submit" class="btn btn-icon btn-primary has-ripple"><i class="feather icon-check"></i></button>
                                </div>
                            </div>
                        <?= form_close()?>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>
<!-- [ Main Content ] end -->

<?= $this->endSection() ?>
