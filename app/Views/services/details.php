<?= $this->extend('layouts/main'); ?>
<?= $title ?? 'E-Tech'; ?>
<?= $this->section('content'); ?>
<style>
    .site-title {
        color: #40bb0d !important;
    }
</style>

<div class="site-breadcrumb">
    <div class="container">
        <h2 class="breadcrumb-title"><?= $service['srv_title'] ?? 'Secteur'; ?></h2>
        <ul class="breadcrumb-menu">
            <li><a href="<?= base_url() ?>">Accueil</a></li>
            <li class="active">Détails <?= $service['srv_title'] ?? ''; ?></li>
        </ul>
    </div>
</div>

<!-- <div class="video-area" style="background-image: url(</?=base_url()?>/resources/images/services/<?=$service['photo']?>);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="video-wrapper">
                    <h2 class="video-title"></?= $service['srv_title'] ?? ''; ?></h2>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="faq-area py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="faq-left">
                    <div class="site-heading mb-3">
                        <span class="site-title-tagline"><?= $service['srv_title'] ?? 'SECTEUR'; ?></span>
                        <h2 class="site-title my-3"><?= $service['srv_title'] ?? 'SECTEUR'; ?></h2>
                    </div>

                    <p class="about-text" style="text-align: justify;">
                        <?= $service['srv_description'] ?? 'Déscription'; ?>
                    </p>
                </div>
            </div>

            <div class="col-lg-6">
                <?php if (isset($categories)) : ?>
                    <div class="accordion" id="accordionExample">
                        <?php for ($i = 0; $i < $nb; $i++) : ?>
                            <?php
                            $elements = (new App\Models\Element)->getElementsByCategory($categories[$i]['cat_id']);
                            ?>
                            <?php if ($i == 0) : ?>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <span><i class="far fa-arrow-right"></i></span> <?= $categories[$i]['cat_title']; ?>
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">

                                        <div class="widget sidebar-tag">
                                            <div class="tag-list">
                                                <?php foreach ($elements as $elt)
                                                    echo "<a href=''>" . $elt['el_title'] . "</a>"
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php else : ?>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo<?= $categories[$i]['cat_id']; ?>">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo<?= $categories[$i]['cat_id']; ?>" aria-expanded="false" aria-controls="collapseTwo<?= $categories[$i]['cat_id']; ?>">
                                            <span><i class="far fa-arrow-right"></i></span> <?= $categories[$i]['cat_title']; ?>
                                        </button>
                                    </h2>
                                    <div id="collapseTwo<?= $categories[$i]['cat_id']; ?>" class="accordion-collapse collapse" aria-labelledby="headingTwo<?= $categories[$i]['cat_id']; ?>" data-bs-parent="#accordionExample">

                                        <div class="widget sidebar-tag">
                                            <div class="tag-list">
                                                <?php foreach ($elements as $elt)
                                                    echo "<a href=''>" . $elt['el_title'] . "</a>"
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </div>

                <?php endif; ?>

            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>