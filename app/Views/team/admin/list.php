<?= $this->extend("layouts/base") ?>
<?= $this->section("content") ?>
<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5>Tous Les Membres</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url() ?>/dashboard"><i
                                        class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Les Membres</a></li>
                            <?php if($user_data['role'] === 'admin'):?>
                                <li class="breadcrumb-item"><a href="<?= base_url() ?>/users/create">Ajouter Un Utilisateur</a>
                            <?php endif;?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card user-profile-list">
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
                                    <a type="button" href="<?= base_url() ?>/add-team" class="btn btn-success btn-sm btn-round has-ripple"><i class="feather icon-plus"></i>&nbsp;Membre</a>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="dt-responsive table-responsive">
                            <table id="user-list-table" class="table nowrap">
                                
                                <?php if($user_data['role'] === 'admin'):?>
                                    <thead>
                                        <tr>
                                            <th>Noms</th>
                                            <th>Téléphone</th>
                                            <th>Profession</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($members as $row): ?>
                                            <tr>
                                                <td>
                                                    <div class="d-inline-block align-middle">
                                                        <img src="<?= base_url() ?>/resources/images/team/<?= $row->picture ?? "no-image.jpg"?>"
                                                             alt="user image" class="img-radius align-top m-r-15"
                                                             style="width:40px;">
                                                        <div class="d-inline-block">
                                                            <h6 class="m-b-0"><?= ucfirst($row->firstname) .' '.  ucfirst($row->lastname) ?></h6>
                                                            <p class="m-b-0"><?= $row->profession ?? "" ?></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><?= $row->phone ?? "" ?></td>
                                                <td><?= ucfirst($row->profession) ?? "" ?></td>
                                                <td>                                                    
                                                    <div class="overlay-edit">
                                                        <!-- <a type="button" class="btn btn-icon btn-success"
                                                           href="" data-toggle="tooltip" data-placement="top" title="Voir Plus">
                                                            <i class="feather icon-eye"></i>
                                                        </a> -->
                                                        <a type="button" class="btn btn-icon btn-info" href="<?= base_url()?>/team-edit/<?= $row->member_id;?>" data-toggle="tooltip"  data-placement="top" title="Modifier"  class="btn btn-icon btn-outline-success">
                                                            <i class="feather icon-edit"></i>
                                                        </a>

                                                        <a type="button" class="btn btn-icon btn-success"
                                                           href="<?=base_url()?>/team-image/<?= $row->member_id;?>" data-toggle="tooltip" data-placement="top" title="Image">
                                                            <i class="feather icon-image"></i>
                                                        </a>
                                                        <a type="button" href="<?=base_url()?>/delete-member/<?= $row->member_id;?>" data-toggle="tooltip" data-placement="top" title="Supprimer"
                                                            class="btn btn-icon btn-danger" onclick="return confirm('Etes-vous sûr de supprimer cet utilisateur ?')"><i
                                                                class="feather icon-trash-2"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Noms</th>
                                            <th>Téléphone</th>
                                            <th>Profession</th>
                                            <th>Status</th>
                                        </tr>
                                    </tfoot>
                                <?php endif;?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
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

