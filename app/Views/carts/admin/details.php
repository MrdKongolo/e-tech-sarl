<?= $this->extend("layouts/base") ?>
<?= $this->section("content") ?>
<?php
    $user_data = session()->get('user_data');
    helper('text');
    use CodeIgniter\I18n\Time;
;?>
<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Produits</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url() ?>/dashboard"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Produits</a></li>
                            <li class="breadcrumb-item"><a href="#!">Liste des Produits</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- customar product  start -->
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-sm-6">
                            </div>
                            <?php if ($user_data['role'] === 'admin'):?>
                                <div class="col-sm-6 text-right">
                                    <a type="button" href="<?= base_url()?>/add-product" class="btn btn-success btn-sm btn-round has-ripple"><i class="feather icon-plus"></i>&nbsp;Produit</a>
                                </div>
                            <?php endif;?>
                        </div>
                        <div class="table-responsive">
                            <table id="report-table" class="table mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Date</th>
                                        <th>Article</th>
                                        <th>Quantité</th>
                                        <th>Montant</th>
                                        <th>Actions</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($carting ) : ?>
                                        <?php foreach ($carting as $row) : ?>
                                            <?php if ($user_data['role'] === 'admin'):?>
                                                <tr>
                                                    <td>
                                                        <?= $row['created_at']?><br>
                                                        <p style="color: violet;"><strong><?= Time::parse($row['created_at'])->humanize();?></strong></p>
                                                    </td>
                                                    <?php  $produit = (new App\Models\Element)->getElement($row['prod_id']);?>
                                                    <td class="align-middle">
                                                        <img src="<?= base_url();?>/resources/images/products/<?= $produit['picture'];?>"
                                                             alt="product"
                                                             title="product-img"
                                                             class="rounded mr-3"
                                                             style="width: 36px;height: 48px;"
                                                        />
                                                        <p class="m-0 d-inline-block align-middle font-16">
                                                            <a href="#!" class="text-body"><?= $produit['el_title'] ?? '';?></a>
                                                            <br />
                                                        </p>
                                                    </td>
                                                    <td class="align-middle">
                                                        <?= $row['quantity'] ?? '0'?>
                                                    </td>
                                                    <td class="align-middle">
                                                        <?= $row['total'] ?? '0'?>
                                                    </td>
                                                    <td class="align-middle">
                                                        <?php if (isset($row['status'])): ?>
                                                            <?php if ($row['status'] == 'attente'): ?>
                                                                <span class="badge badge-warning">En attente</span>
                                                            <?php elseif ($row['status'] == 'en cours') :?>
                                                                <span class="badge badge-info">En cours</span>
                                                            <?php elseif ($row['status'] == 'traité') :?>
                                                                <span class="badge badge-success">Traité</span>
                                                            <?php endif ?>
                                                        <?php endif ?>
                                                    </td>
                                                    
                                                    <td class="table-action">
                                                        
                                                        <a type="button" href="<?= base_url()?>/dealing-cart/<?= $row['prod_id']?>/" data-toggle="tooltip"  data-placement="top" title="Traiter"  class="btn btn-icon btn-outline-success">
                                                            <i class="feather icon-check-circle"></i>
                                                        </a>

                                                        <a type="button" href="<?= base_url()?>dealing-cart/<?= $row['prod_id']?>" data-toggle="tooltip" data-placement="top" title="Terminer"
                                                                class="btn btn-icon btn-outline-info">
                                                            <i class="feather icon-thumbs-up"></i>
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
            <!-- customar product  end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
    
</div>
<!-- [ Main Content ] end -->



<script type="text/javascript">
    $(document).ready(function(){
        

        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        });
    
        // DataTable start
        $('#report-table').DataTable({
            "lengthMenu": [
                [5, 10, 25, 50, -1],
                [5, 10, 25, 50, "All"]
            ]
        });
        // DataTable end
    });
</script>

<?= $this->endSection() ?>
