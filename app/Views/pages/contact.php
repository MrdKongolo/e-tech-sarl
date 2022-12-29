<?= $this->extend('layouts/main'); ?>
<?= $title ?? 'E-Tech'; ?>
<?= $this->section('content'); ?>
<script src="<?= base_url()?>/assets/js/jquery-3.6.0.min.js"></script>
<style>
    .case-img::before {
        content: '';
        position: absolute;
        top: 0 !important;
        bottom: 0 !important;
        right: 0 !important;
        left: 0 !important;
    }
</style>

<div class="contact-area py-120">
    <div class="container">
        <div class="contact-wrapper">
            <div class="row">
                <div class="col-md-4">
                    <div class="contact-content">
                        <div class="contact-info">
                            <div class="contact-info-icon">
                                <i class="fal fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-info-content">
                                <h5>Adresse du Siège</h5>
                                <p><?= $coords['address'] ?? 'Adressse'?></p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-info-icon">
                                <i class="fal fa-phone"></i>
                            </div>
                            <div class="contact-info-content">
                                <h5>Téléphone </h5>
                                <p><a href="tel:+243 971 808 488" style="text-decoration:none">+243 971 808 488</a></p>
                                <p><a href="tel:<?= $coords['phone']?>" style="text-decoration:none"><?= $coords['phone'] ?? '+243 971 808 4889';?></a></p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-info-icon">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="contact-info-content">
                                <h5>Email</h5>
                                <p><a href="<?= $coords['email']?>" class="__cf_email__" data-cfemail="7b12151d143b1e031a160b171e55181416"><?= $coords['email']?></a></p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-info-icon">
                                <i class="fal fa-clock"></i>
                            </div>
                            <div class="contact-info-content">
                                <h5>Ouvert</h5>
                                <p>Lu - Sa (24h/24)</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 align-self-center">
                    <div class="contact-form">
                        <div class="contact-form-header">
                            <h2>Ecrivez-nous</h2>
                            <p>
                                Pour une commande, pour un partenariat ou pour n'importe quel autre service, laissez-nous un message 
                                et nous vous contacterons
                            </p>
                        </div>
                        <?=form_open('message','id="contact-form"');?>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="sender" placeholder="Votre nom" value="<?=old('sender')?>">
                                        <small id="sender_error" class="form-text text-danger"></small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Votre Email" value="<?=old('email')?>">
                                        <small id="email_error" class="form-text text-danger"></small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="subject" placeholder="Objet">
                                        <small id="subject_error" class="form-text text-danger"></small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="tel" class="form-control" name="phone" placeholder="Téléphone" value="<?=old('phone')?>">
                                        <small id="phone_error" class="form-text text-danger"></small>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea name="message" cols="30" rows="3" class="form-control" placeholder="Votre message ici SVP !"></textarea>
                                <small id="message_error" class="form-text text-danger"></small>
                            </div>
                            <div class="col-md-12 mt-3">
                                <span id="success_message"></span>
                            </div>
                            <button type="submit" class="theme-btn" name="contact" id="contact"><i class="far fa-paper-plane"></i>Envoyer</button>
                        <?=form_close();?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#contact-form').on('submit', function(event){
            event.preventDefault();
            $.ajax({
                url:"<?=base_url()?>/message",
                method:"POST",
                data:$(this).serialize(),
                dataType:"json",
                beforeSend:function(){
                    $('#contact').attr('disabled','disabled');
                },
                success:function(data){
                    if(data.error){
                        if(data.sender_error != ''){
                            $('#sender_error').html(data.sender_error);
                        }else {
                            $('#sender_error').html('');
                        }
                        if(data.email_error != ''){
                            $('#email_error').html(data.email_error);
                        }else {
                            $('#email_error').html('');
                        }
                        if(data.phone_error != ''){
                            $('#phone_error').html(data.phone_error);
                        }else {
                            $('#phone_error').html('');
                        }
                        if(data.subject_error != ''){
                            $('#subject_error').html(data.subject_error);
                        }else {
                            $('#subject_error').html('');
                        }
                        if(data.message_error != ''){
                            $('#message_error').html(data.message_error);
                        }else {
                            $('#message_error').html('');
                        }
                    }
                    if(data.success){
                        $('#success_message').html(data.success);                        
                        $('#sender_error').html('');
                        $('#email_error').html('');
                        $('#phone_error').html('');
                        $('#subject_error').html('');
                        $('#message_error').html('');
                        $('#contact-form')[0].reset();
                    }
                    $('#contact').attr('disabled', false)
                }
            })
        })
    })
</script>
<?= $this->endSection('content'); ?>