<?= $this->extend('layouts/main'); ?>
<?= $title ?? 'E-Tech'; ?>
<?= $this->section('content'); ?>

<div class="site-breadcrumb">
    <div class="container">
        <h2 class="breadcrumb-title">Notre Equipe</h2>
        <ul class="breadcrumb-menu">
            <li><a href="<?= base_url() ?>">Accueil</a></li>
            <li class="active">L'Equipe</li>
        </ul>
    </div>
</div>


<div class="team-area py-120">
    <div class="container">
        <div class="row justify-content-center">
            <?php if (isset($team)) : ?>
                <?php foreach ($team as $val) : ?>
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item">
                            <img src="<?=base_url()?>/resources/images/team/<?=$val['picture']?>" alt="thumb">
                            <div class="team-content">
                                <div class="team-bio">
                                    <h5><a href="#"><?=$val['firstname'] .' '. $val['lastname']?></a></h5>
                                    <span><?=$val['profession'] ?? 'Profession' ;?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
            
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>