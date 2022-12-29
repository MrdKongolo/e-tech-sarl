<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>
<style>
    .form-control.preuve {
        max-width: 240px !important;
    }
    label {
        display: inline;
    }
</style>
<link rel="stylesheet" href="<?= base_url() ?>/assets/css/cart.css">
<script src="<?= base_url() ?>/public/js/jquery-3.2.1.min.js"></script>

<section class="bd-contact-area pt-120" data-background="">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-xl-8 col-xl-7 col-lg-7">
                <div class="card card-calc">
                    <div class="card-body">
                        <div class="alert alert-primary d-flex d-md-flex justify-content-center justify-content-md-center" role="alert">
                            <span><strong>Complétez le formulaire</strong></span>
                        </div>
                        <?= form_open_multipart('shopping', 'class="form-calc"'); ?>
                            <?= csrf_field(); ?>

                            <div class="form-group d-inline-flex group-calc">
                                <label class="field-calc">Total à payer &nbsp; &nbsp; &nbsp; &nbsp;:</label>
                                <input class="form-control nombre" name="total" id="total" type="text" style="background-color: rgb(244,248,247);" value="<?= $total;?>" readonly="">
                                <label class="field-calc-fin">USD</label>
                            </div>
                            <div class="form-group group-calc">
                                <small id="input-help" class="form-text text-danger"><?= $validation['total'] ?? null; ?></small>
                            </div>
                            <div class="form-group">
                                <div class="alert alert-info d-flex d-sm-flex justify-content-center justify-content-sm-center" role="alert">
                                    <span class="text-center" style="font-size: 14px;">Sélectionnez le moyen de paiement de votre choix et remplissez les coordonnées demandées.<br></span>
                                </div>
                            </div>
                            <div>
                                <div class="form-group group-calc">
                                    <label>Moyen de Paiement<br></label>
                                    <select class="form-control" name="mean">
                                        <optgroup label="Moyen de Paiement">
                                            <option value="Airtel Money" selected="" <?= set_select('mean', "Airtel Money") ?>>Airtel Money (+24399XXXXXXX)</option>
                                            <option value="Orange Money" <?= set_select('mean', "Orange Money") ?>>Orange Money (+24385YYYYYYY)</option>
                                            <option value="M-Pesa" <?= set_select('mean', "M-Pesa") ?>>M-Pesa (+24381YYYYYYY)</option>
                                            <option value="Dépôt Bancaire" <?= set_select('mean', "Dépôt Bancaire") ?>>Dépôt Bancaire</option>
                                            <option value="Cash" <?= set_select('mean', "Cash") ?>>Cash</option>
                                        </optgroup>
                                    </select>
                                    <div class="form-group group-calc">
                                        <small id="input-help" class="form-text text-danger"><?= $validation['mean'] ?? null; ?></small>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="form-group group-calc">
                                    <label class="field-calc">Téléphone</label>
                                    <input class="form-control" type="tel" name="phone" placeholder="+243 98 76 54 321" value="<?= set_value('phone') ?>">
                                </div>
                                <div class="form-group group-calc">
                                    <small id="input-help" class="form-text text-danger"><?= $validation['phone'] ?? null; ?></small>
                                </div>
                            </div>
                            <div>
                                <div class="form-group group-calc">
                                    <label class="field-calc">Preuve (Télécharger la capture)</label>
                                    <input class="form-control" type="file" name="proof"   accept="image/png,image/jpeg,image/jpg,image/webp">
                                </div>
                                <div class="form-group group-calc">
                                    <small id="input-help" class="form-text text-danger"><?= $validation['proof'] ?? null; ?></small>
                                </div>
                            </div>
                            <div>
                                <div class="form-group group-calc">
                                    <label class="field-calc"><small id="input-help" class="text-danger" style="font-size:0.75em;">Le montant ne doit pas être inférieur aux 30% du montant total</small></label>
                                </div>
                            </div>
                            <div>
                                <div class="form-group d-inline-flex group-calc">
                                    <label class="field-calc">Montant</label>
                                    <input class="form-control nombre" type="number" id="amount" name="amount" placeholder="Ex : 100" min="<?= 0.3*$total;?>">
                                    <label class="field-calc-fin">USD</label>
                                </div>
                                <div class="form-group group-calc" id="verif" style="display: none;">
                                    <label class="field-calc">
                                        <small id="input-help" class="text-danger">
                                            Le montant doit être supérieur ou égal à <?= $total*0.3?> $
                                        </small>
                                    </label>
                                </div>
                                <div class="form-group group-calc">
                                    <small id="input-help" class="form-text text-danger"><?= $validation['amount'] ?? null; ?></small>
                                </div>
                            </div>
                            <div class="form-group group-calc">
                                <label>Nom Client</label>
                                <input class="form-control" type="text" name="client" value="<?= set_value('client')?>">
                                <small id="input-help" class="form-text text-danger"><?= $validation['client'] ?? null; ?></small>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-outline-primary btn-block" id="valider" type="submit" disabled>Valider La Commande</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).on('focusout',"#amount",function(){
        var price = $('#amount').val();
        var avance = <?= $total *0.3 ?>;
        if(price > 0 && price < avance) {
            $('#valider').attr('disabled','disabled');
            $('#verif').fadeIn(1000);
        }else {
            $('#verif').fadeOut(1500);
            $('#valider').attr('disabled',false);
        }
    });        
</script>
<?= $this->endSection('content'); ?>