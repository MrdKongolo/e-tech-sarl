<?= $this->extend("layouts/base") ?>
<?= $this->section("content") ?>
 
    <section class="pcoded-main-container" xmlns="http://www.w3.org/1999/html">
        <div class="pcoded-content">
                <!-- [ breadcrumb ] start -->

            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10"><?= ucfirst($user['username']) ?? "Nom Complet"?></h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url() ?>/dashboard"><i
                                                class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Ajout Image Profile</a></li>
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
                            <h5><?= ucfirst($user['username']) ?? "Changer l'image de profil"?></h5>
                        </div>
                        <?php if (session()->getFlashdata('success') !== NULL) : ?>
                            <div class="alert alert-primary alert-dismissible fade show" role="alert" style="border:1px solid dodgerblue  ;background-color:transparent;elevation:20deg; border-radius: 10px; text-align: center; margin-left: 5%; margin-right: 5%">
                                <?= session()->getFlashdata('success'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                        <?php endif; ?>
                        <div class="card-body">
                            <?= form_open_multipart('save-picture') ?>
                                <div class="row text-c">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="file" class="form-control" name="picture">
                                        </div>
                                        <small id="input-help" class="form-text text-danger mb-2"><?= $validation['picture'] ?? null; ?></small>
                                    </div>
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-icon btn-primary has-ripple p-2"><i class="feather icon-check"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Main Content ] end -->
        </div>
   </section>
       <!-- [ Main Content ] end -->

<?= $this->endSection() ?>