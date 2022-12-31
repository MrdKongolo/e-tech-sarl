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
                            <h5 class="m-b-10">L'équipe</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url()?>/dashboard"><i class="feather icon-home"></i>Tableau de Bord</a></li>
                            <li class="breadcrumb-item"><a href="<?= base_url()?>/team-list">Liste Membres</a></li>
                            <li class="breadcrumb-item"><a href="#!">Nouveau Membre</a></li>
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
                        <h5>La Team</h5>
                    </div>
                    <div class="card-body">

                        <?= form_open_multipart('update-team')?>
                            <?= csrf_field()?>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="floating-label" for="Email">Prénom</label>
                                        <input type="text" class="form-control" id="Text" aria-describedby="emailHelp" name="firstname" value="<?= $member['firstname']?>">
                                        <small id="input-help" class="form-text text-danger"><?= $validation['firstname'] ?? null ;  ?></small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="floating-label" for="Text">Nom</label>
                                        <input type="text" class="form-control" id="Text" name="lastname" value="<?= $member['lastname']?>">
                                        <small id="input-help" class="form-text text-danger"><?= $validation['lastname'] ?? null ;  ?></small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="floating-label" for="Text">Profession</label>
                                        <input type="text" class="form-control" id="Text" name="profession" value="<?= $member['profession']?>">
                                        <small id="input-help" class="form-text text-danger"><?= $validation['profession'] ?? null ;  ?></small>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="floating-label" for="Text">Téléphone</label>
                                        <input type="tel" class="form-control" id="Text" name="phone" value="<?= $member['phone']?>">
                                        <small id="input-help" class="form-text text-danger"><?= $validation['phone']  ?? null ;  ?></small>
                                    </div>
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
