<?= $this->extend('layouts/main');?>
<?= $this->section('content');?>

    <div class="login-area py-120">
        <div class="container">
            <div class="col-md-5 mx-auto">
                <div class="login-form">
                    <div class="login-header">
                        <h3>Connexion</h3>
                        <p>Connectez-vous à votre compte</p>
                    </div>
                    <?php if(session()->getFlashdata('error')):?>
                        <div class="alert alert-danger"><?=session()->getFlashdata('error');?></div>
                    <?php endif;?>
                    <?php if(session()->getFlashdata('success')):?>
                        <div class="alert alert-danger"><?=session()->getFlashdata('success');?></div>
                    <?php endif;?>
                    <?=form_open('signin');?>
                        <?= csrf_field();?>
                        <div class="form-group">
                            <label>Addresse Email</label>
                            <input type="email" class="form-control" placeholder="Votre Email" name="email" value="<?= set_value('email') ?>" >
                            <small id="input-help" class="form-text text-danger"><?= $validation['email'] ?? null; ?></small>
                        </div>
                        <div class="form-group">
                            <label>Mot de passe</label>
                            <input type="password" class="form-control" placeholder="Mot de passe" name="password" value="<?= set_value('password') ?>">
                            <small id="input-help" class="form-text text-danger"><?= $validation['password'] ?? null; ?></small>
                        </div>
                        <div class="d-flex align-items-center">
                            <button type="submit" class="theme-btn"><i class="far fa-sign-in"></i> Connexion</button>
                        </div>
                    <?=form_close();?>
                </div>
            </div>
        </div>
    </div>
    <script>
        // const form = document.getElementById('form');
        // $("#form").submit(function(e) {
        //     e.preventDefault();
        // });
    </script>
    <?= $this->endSection('content');?>

    