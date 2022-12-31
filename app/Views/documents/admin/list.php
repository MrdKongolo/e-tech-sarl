<?= $this->extend("layouts/base") ?>
<?= $this->section("content") ?>
<?php $user_data = session()->get('user_data');?>
<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Documents</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url() ?>/dashboard"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="<?= base_url() ?>/documents">Les Documents</a></li>
                            <li class="breadcrumb-item"><a href="#!">Liste des documents</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- customar project  start -->
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-sm-6">
                            </div>
                            <?php if ($user_data['role'] === 'admin'):?>
                                <div class="col-sm-6 text-right">
                                    <a type="button" href="<?= base_url()?>/add-document" class="btn btn-success btn-sm btn-round has-ripple"><i class="feather icon-plus"></i>&nbsp;Document</a>
                                </div>
                            <?php endif;?>
                        </div>
                        <div class="table-responsive">
                            <table id="report-table" class="table mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Document</th>
                                        <th>Type & Nom</th>
                                        <th>Création</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($documents ) : ?>
                                        <?php foreach ($documents as $row) : ?>
                                            <?php if ($user_data['role'] === 'admin'):?>
                                                <tr>
                                                    <td class="align-middle">
                                                        <?= $row['name']?? 'Nom Document';?>
                                                    </td>
                                                    <td class="align-middle">
                                                        <?= $row['file']?? 'Type';?>
                                                    </td>
                                                    <td class="align-middle">
                                                        <?= date('d-m-Y',strtotime($row['created_at']));?>
                                                    </td>                                                    
                                                    <td class="table-action">                                                        
                                                        <a type="button" href="<?= base_url()?>/delete-document/<?= $row['doc_id'];?>" data-toggle="tooltip"  data-placement="top" title="Supprimer"  
                                                            class="btn btn-icon btn-outline-danger"
                                                            onclick="return confirm('Etes-vous sûr de supprimer ce produit ?')"
                                                        >
                                                            <i class="feather icon-trash"></i>
                                                        </a>
                                                    </td>
                                                   
                                                </tr>                                                
                                            
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    <?php endif; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- customar project  end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
    
</div>
<!-- [ Main Content ] end -->



<script type="text/javascript">
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });
</script>

<?= $this->endSection() ?>
