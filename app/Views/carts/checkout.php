<?= $this->extend('layouts/main'); ?>
<?= $title ?? 'E-Tech'; ?>
<?= $this->section('content'); ?>
<style>
    .site-breadcrumb {
        padding-top: 8px;
    }
</style>
<div class="site-breadcrumb">
</div>

<div class="team-area py-20">
    <div class="container">
        <div class="row justify-content-center p-5">
            <div class="p-2">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium maiores impedit laboriosam distinctio reiciendis excepturi, quam itaque obcaecati debitis, laudantium amet commodi atque corrupti nostrum ea recusandae consequuntur nobis aliquam.</p>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>