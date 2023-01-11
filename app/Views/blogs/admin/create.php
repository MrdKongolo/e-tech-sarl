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
                            <h5 class="m-b-10">Les Réalisations</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url() ?>/dashboard"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="<?= base_url() ?>/blogs">Réalisations</a></li>
                            <li class="breadcrumb-item"><a href="#!">Ajout Réalisation</a></li>
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
                        <h5>Réalisations</h5>
                    </div>
                    <?php if(session()->getFlashdata('success')):?>
                        <div class="alert alert-success"><?=session()->getFlashdata('success');?></div>
                    <?php endif;?>
                    <?php if(session()->getFlashdata('error')):?>
                        <div class="alert alert-danger"><?=session()->getFlashdata('error');?></div>
                    <?php endif;?>
                    <div class="card-body">

                        <?= form_open_multipart('add-blog') ?>
                            <?= csrf_field()?>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <select name="srv_id" class="form-control" id="srv_id" onchange="getCategories(this.value)">
                                            <option value="">Sélectionnez un service</option>
                                            <?php foreach ($services as $srv) : ?>
                                                <option value="<?= $srv->srv_id ?>" <?= set_select('srv_id', $srv->srv_id); ?>><?= ucfirst($srv->srv_title) ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <small id="input-help" class="form-text text-danger"><?= $validation['srv_id'] ?? null ;  ?></small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="floating-label" for="name">Titre</label>
                                        <input type="text" class="form-control" name="title" value="<?= set_value('title')?>">
                                        <small id="input-help" class="form-text text-danger"><?= $validation['title'] ?? null ;  ?></small>
                                    </div>
                                </div>                                
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="floating-label" for="description">Déscription</label>
                                        <textarea class="form-control" name="description" id="" cols="30" rows="2" ><?= set_value('description')?></textarea>
                                        <small id="input-help" class="form-text text-danger"><?= $validation['description']  ?? null ;  ?></small>
                                    </div>
                                </div>
                                
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="file" class="form-control" name="picture">
                                    </div>
                                    <small id="input-help" class="form-text text-danger"><?= $validation['picture'] ?? null; ?></small>
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