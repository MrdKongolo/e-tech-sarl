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
                            <h5 class="m-b-10">Les Produits</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url() ?>/dashboard"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="<?= base_url() ?>/elements">Produits</a></li>
                            <li class="breadcrumb-item"><a href="#!">Edition Produit</a></li>
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
                        <h5>Produits</h5>
                    </div>
                    <?php if(session()->getFlashdata('success')):?>
                        <div class="alert alert-success"><?=session()->getFlashdata('success');?></div>
                    <?php endif;?>
                    <?php if(session()->getFlashdata('error')):?>
                        <div class="alert alert-danger"><?=session()->getFlashdata('error');?></div>
                    <?php endif;?>
                    <div class="card-body">

                        <?= form_open_multipart('update-element') ?>
                            <input type="hidden" name="_method" value="PUT" />
                            <?= csrf_field()?>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="Text">Nom Produit</label>
                                        <input type="text" class="form-control" name="el_title" value="<?= $element['el_title']?>" >
                                        <small id="input-help" class="form-text text-danger"><?= $validation['el_title'] ?? null ;  ?></small>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="floating-label" for="units">Unité de vente</label>
                                        <input type="text" class="form-control" name="units" value="<?= $element['units']?>" required>
                                        <small id="input-help" class="form-text text-danger"><?= $validation['units'] ?? null ;  ?></small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="floating-label" for="option">Option (Facultative)</label>
                                        <input type="text" class="form-control" name="option" value="<?= $element['option']?>">
                                        <small id="input-help" class="form-text text-danger"><?= $validation['option'] ?? null ;  ?></small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="floating-label" for="autre">Option 2 (Facultative)</label>
                                        <input type="text" class="form-control" name="autre" value="<?= $element['autre']?>">
                                        <small id="input-help" class="form-text text-danger"><?= $validation['autre'] ?? null ;  ?></small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="floating-label" for="price_inf">Prix Unitaire</label>
                                        <input type="number" class="form-control" name="price_inf" value="<?= $element['price_inf']?>" required>
                                        <small id="input-help" class="form-text text-danger"><?= $validation['price_inf'] ?? null ;  ?></small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="floating-label" for="price_max">Prix Max</label>
                                        <input type="number" class="form-control" name="price_max" value="<?= $element['price_max']?>" required>
                                        <small id="input-help" class="form-text text-danger"><?= $validation['price_max'] ?? null ;  ?></small>
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
<?= $this->endSection() ?>