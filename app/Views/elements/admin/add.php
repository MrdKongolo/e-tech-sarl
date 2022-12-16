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
                            <h5 class="m-b-10">Les Catégories</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url() ?>/dashboard"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="<?= base_url() ?>/service-list">Catégories</a></li>
                            <li class="breadcrumb-item"><a href="#!">Ajout Catégories</a></li>
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
                        <h5>Eléments</h5>
                    </div>
                    <?php if(session()->getFlashdata('success')):?>
                        <div class="alert alert-danger"><?=session()->getFlashdata('success');?></div>
                    <?php endif;?>
                    <div class="card-body">

                        <?= form_open_multipart('add-element') ?>
                        <?= csrf_field() ?>
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
                                        <select name="cat_id" class="form-control" id="cat_id">
                                            <option value="">Sélectionnez une catégorie</option>
                                        </select>
                                    </div>
                                    <small id="input-help" class="form-text text-danger"><?= $validation['cat_id'] ?? null ;  ?></small>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="Text">Noms Eléments</label>
                                        <input type="text" class="form-control" name="el_title" value="<?= set_value('el_title')?>" >
                                        <small id="input-help" class="form-text text-danger"><?= $validation['el_title'] ?? null ;  ?></small>
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
<script>
    function getCategories(svc){
        var html = '<option value="" disabled selected>Sélectionnez Une Catégorie</option>';
        if(svc !== ''){
           $.ajax({
                url:"<?= base_url()?>/categories/getCategoryService/" + svc,
                method:"POST",
                data: {srv_id:svc},
                dataType:"JSON",
                success: function(data){
                    for(var count = 0; count < data.length; count++){
                        html += '<option value="'+data[count].cat_id+'">'+data[count].cat_title+'</option>';
                    }
                    $('#cat_id').html(html);
                }
           });
        }else {
            $('#cat_id').html(html);
        }
    }
</script>
<?= $this->endSection() ?>