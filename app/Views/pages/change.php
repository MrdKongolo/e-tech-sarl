<?php $user_data = session()->get('user_data');?>
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title><?= $title ?? "Move 4 Men";?></title>
    <!--[if lt IE 11]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="shortcut icon" type="image/png" href="<?= base_url() ?>/assets/img/logo/logo-e-tech.png" />

    <!-- vendor css -->
    <link rel="icon" href="<?= base_url()?>/resources/images/favicon.ico" type="image/x-icon">
    <!-- vendor css -->
    <link rel="stylesheet" href="<?= base_url()?>/resources/css/style.css">
</head>

<div class="auth-wrapper">
    <div class="blur-bg-images"></div>
    <!-- [ change-password ] start -->
    <div class="auth-content">
        <div class="card">
            <?= form_open('change') ?>
                <?= csrf_field() ?>
                <div class="row align-items-center text-center">
                    <div class="col-md-12">
                        <div class="card-body">
                            <h4 class="mb-4 f-w-400">Changer votre mot de passe</h4>
                            <?php if(session()->getFlashdata('error')):?>
                                <div class="alert alert-danger"><?=session()->getFlashdata('error');?></div>
                            <?php endif;?>
                            <div class="form-group mb-3">
                                <input type="hidden" name="email" value="<?= $user_data['email'] ;?>">
                                <label class="floating-label" for="current_password">Mot de passe actuel</label>
                                <input type="password" class="form-control" placeholder="" name="current_password" value="<?=set_value('current_password');?>">
                                <small id="input-help" class="form-text text-danger"><?= $validation['current_password'] ?? null; ?></small>
                            </div>
                            <div class="form-group mb-3">
                                <label class="floating-label" for="new_Password">Nouveau Mot de passe</label>
                                <input type="password" class="form-control" name="new_password" placeholder="" value="<?= set_value('new_password');?>">
                                <small id="input-help" class="form-text text-danger"><?= $validation['new_password'] ?? null; ?></small>
                            </div>
                            <div class="form-group mb-4">
                                <label class="floating-label" for="conf_new_password">Confirmer le Mot de passe</label>
                                <input type="password" class="form-control" name="conf_new_password" placeholder="" value="<?= set_value('conf_new_password');?>">
                                <small id="input-help" class="form-text text-danger"><?= $validation['conf_new_password'] ?? null; ?></small>
                            </div>
                            <button class="btn btn-block btn-primary mb-4">Sauvegarder</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- [ change-password ] end -->
</div>

<!-- Required Js -->
<script src="<?= base_url() ?>/resources/js/vendor-all.min.js"></script>
<script src="<?= base_url() ?>/resources/js/plugins/bootstrap.min.js"></script>
<script src="<?= base_url() ?>/resources/js/ripple.js"></script>
<script src="<?= base_url() ?>/resources/js/pcoded.min.js"></script>



</body>

</html>
