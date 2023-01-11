<?= $this->extend("layouts/base") ?>
<?= $this->section("content") ?>

<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Les Moyens de Payment</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url() ?>/dashboard"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="<?= base_url() ?>/moyens">Moyens de Payment</a></li>
                            <li class="breadcrumb-item"><a href="#!">Ajout Moyen de Payment</a></li>
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
                        <h5>Les Moyens de Payment</h5>
                    </div>
                    <div class="card-body">

                        <?= form_open_multipart('add-mean') ?>
                            <?= csrf_field() ?>
                            <div class="row">
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="floating-label" for="name">Nom</label>
                                        <input type="text" class="form-control" name="name" value="<?= set_value('name') ?>">
                                        <small id="input-help" class="form-text text-danger"><?= $validation['name'] ?? null;  ?></small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="floating-label" for="numero">Numéro</label>
                                        <input type="text" class="form-control" name="numero" value="<?= set_value('numero') ?>">
                                        <small id="input-help" class="form-text text-danger"><?= $validation['numero'] ?? null;  ?></small>
                                    </div>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <input type="submit" class="btn btn-md btn-primary" value="Enregistrer">
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
<?= $this->endSection() ?>