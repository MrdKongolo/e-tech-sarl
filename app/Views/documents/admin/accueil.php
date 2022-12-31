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
                                <h5 class="m-b-10">Le Mot Accueil</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url()?>/dashboard"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Modifier Accueil</a></li>
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
                        <div class="card-body">

                            <?= form_open('update-accueil')?>
                                <?= csrf_field()?>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="floating-label" for="srv_title">Titre</label>
                                            <input type="text" class="form-control" name="title" value="<?= $accueil['title']?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="floating-label" for="subtitle">Sous-titre</label>
                                            <input type="text" class="form-control" name="subtitle" value="<?= $accueil['subtitle']?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <label class="floating-label" for="Text">Déscription</label>
                                        <div class="form-group">
                                            <textarea name="description" id="classic-editor">
                                                <?= $accueil['description']?>
                                            </textarea>
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