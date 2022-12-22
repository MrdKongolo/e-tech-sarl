<?= $this->extend("layouts/base")?>
<?= $this->section("content")?>

    <!-- [ Main Content ] start -->
    <section class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Les Services</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url()?>/dashboard"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url()?>/service-list">Services</a></li>
                                <li class="breadcrumb-item"><a href="#!">Modifier Service</a></li>
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
                            <h5>Services</h5>
                        </div>
                        <div class="card-body">

                            <?= form_open_multipart('update-service')?>
                            <input type="hidden" name="_method" value="PUT" />
                                <?= csrf_field()?>
                                <div class="row">
                                <input type="hidden" class="form-control" name="srv_id" value="<?= $service['srv_id'];?>">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="floating-label" for="srv_title">Titre</label>
                                            <input type="text" class="form-control" name="srv_title" value="<?= $service['srv_title']?>">
                                            <small id="input-help" class="form-text text-danger"><?= $validation['srv_title'] ?? null ;  ?></small>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="floating-label" for="srv_description">Déscription</label>
                                            <textarea class="form-control" name="srv_description" id="" cols="30" rows="3" ><?= $service['srv_description']?></textarea>
                                            <small id="input-help" class="form-text text-danger"><?= $validation['srv_description']  ?? null ;  ?></small>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 text-center">
                                        <input type="submit" class="btn btn-md btn-primary" value="Enregistrer Modifications">
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </section>
    <!-- [ Main Content ] end -->
<?= $this->endSection()?>