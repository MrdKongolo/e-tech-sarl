<?= $this->extend("layouts/base") ?>
<?= $this->section("content") ?>
<?php $user_data = session()->get('user_data'); ?>
<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Réalisations</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url() ?>/dashboard"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Réalisations</a></li>
                            <li class="breadcrumb-item"><a href="#!">Liste des Réalisations</a></li>
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
                        <?php if(session()->getFlashdata('success')):?>
                            <div class="alert alert-success"><?=session()->getFlashdata('success');?></div>
                        <?php endif;?>
                        <?php if(session()->getFlashdata('error')):?>
                            <div class="alert alert-danger"><?=session()->getFlashdata('error');?></div>
                        <?php endif;?>
                        <div class="row align-items-center m-l-0">
                            <div class="col-sm-6">
                            </div>
                            <?php if ($user_data['role'] === 'admin') : ?>
                                <div class="col-sm-6 text-right">
                                    <a type="button" href="<?= base_url();?>/add-blog" class="btn btn-success btn-sm btn-round has-ripple"><i class="feather icon-plus"></i>&nbsp;Réalisation</a>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="table-responsive">
                            <table id="report-table" class="table mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Projet</th>
                                        <th>Service</th>
                                        <th>Description</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($blogs) : ?>
                                        <?php foreach ($blogs as $row) : ?>
                                            <?php if ($user_data['role'] === 'admin') : ?>
                                                <tr>
                                                    <td class="align-middle">
                                                        <img src="<?= base_url(); ?>/resources/images/blogs/<?= $row['picture']; ?>" alt="sect-img" title="service-img" class="rounded mr-3" style="width: 64px;height: 48px;" />
                                                        <p class="m-0 d-inline-block align-middle font-16">
                                                            <a href="#!" class="text-body"><?= $row['title'] ?></a>
                                                            <br />

                                                            <?php for ($i = 0; $i < rand(1, 4); $i++) : ?>
                                                                <span class="text-warning feather icon-star-on"></span>
                                                            <?php endfor; ?>
                                                        </p>
                                                    </td>
                                                    <td class="align-middle">
                                                        <?= $row['srv_title'] ?>
                                                    </td>
                                                    <td class="align-middle">
                                                        <?= substr($row['description'],0,30)?>
                                                    </td>

                                                    <td class="table-action">

                                                        <a type="button" href="<?= base_url() ?>/blog-edit/<?= $row['id'] ?>" data-toggle="tooltip" data-placement="top" title="Modifier" class="btn btn-icon btn-outline-success">
                                                            <i class="feather icon-edit"></i>
                                                        </a>

                                                        <a type="button" href="<?= base_url();?>/blog-image/<?= $row['id'] ?>" data-toggle="tooltip" data-placement="top" title="Changer Image" class="btn btn-icon btn-outline-info">
                                                            <i class="feather icon-image"></i>
                                                        </a>
                                                        <a 
                                                            type="button" href="<?= base_url();?>/delete-blog/<?= $row['id'] ?>" data-toggle="tooltip" data-placement="top" title="Supprimer" 
                                                            class="btn btn-icon btn-danger" 
                                                            onclick="return confirm('Etes-vous sûr de supprimer ce projet ?')"
                                                        >
                                                            <i class="feather icon-trash-2"></i>
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
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    });
</script>

<?= $this->endSection() ?>