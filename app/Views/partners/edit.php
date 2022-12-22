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
                            <h5 class="m-b-10">Les Partenaires</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url()?>/dashboard"><i class="feather icon-home"></i>Tableau de Bord</a></li>
                            <li class="breadcrumb-item"><a href="<?= base_url()?>/team-list">Liste Partenaires</a></li>
                            <li class="breadcrumb-item"><a href="#!">Modifier Partenaire</a></li>
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
                        <h5>Le Partenaire</h5>
                    </div>
                    <?php if(session()->getFlashdata('success')):?>
                        <div class="alert alert-success"><?=session()->getFlashdata('success');?></div>
                    <?php endif;?>
                    <div class="card-body">
                        <?= form_open_multipart('')?>
                            <?= csrf_field()?>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="floating-label" for="part_name">Nom Complet</label>
                                        <input type="text" class="form-control" id="Text" aria-describedby="emailHelp" name="part_name" value="<?= set_value('part_name')?>">
                                        <small id="input-help" class="form-text text-danger"><?= $validation['part_name'] ?? null ;  ?></small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="floating-label" for="address">Adresse</label>
                                        <input type="text" class="form-control" id="Text" name="address" value="<?= set_value('address')?>">
                                        <small id="input-help" class="form-text text-danger"><?= $validation['address'] ?? null ;  ?></small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="floating-label" for="city">Ville</label>
                                        <input type="text" class="form-control" id="city" name="city" value="<?= set_value('city')?>">
                                        <small id="input-help" class="form-text text-danger"><?= $validation['city'] ?? null ;  ?></small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <select name="country" class="form-control" id="country">
                                            <option value="">Sélectionnez votre pays</option>
                                            <?php foreach ($countries as $ctry) : ?>
                                                <option value="<?= $ctry->id ?>" <?= set_select('country', $ctry->id); ?>><?= ucfirst($ctry->name) ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <small id="input-help" class="form-text text-danger"><?= $validation['country'] ?? null ;  ?></small>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="floating-label" for="part_email">Email</label>
                                        <input type="tel" class="form-control" id="part_email" name="part_email" value="<?= set_value('part_email')?>">
                                        <small id="input-help" class="form-text text-danger"><?= $validation['part_email']  ?? null ;  ?></small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="floating-label" for="part_tel">Téléphone</label>
                                        <input type="tel" class="form-control" id="part_tel" name="part_tel" value="<?= set_value('part_tel')?>">
                                        <small id="input-help" class="form-text text-danger"><?= $validation['part_tel']  ?? null ;  ?></small>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="file" class="form-control" name="part_logo">
                                    </div>
                                    <small id="input-help" class="form-text text-danger mb-2"><?= $validation['part_logo'] ?? null; ?></small>
                                </div>
                                <div class="col-sm-12">
                                    <input type="submit" class="btn btn-md btn-primary" value="Sauvegarder">
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
