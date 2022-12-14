<?= $this->extend('layouts/main'); ?>
<?= $title ?? 'E-Tech'; ?>
<?= $this->section('content'); ?>

<div class="site-breadcrumb">
    <div class="container">
        <h2 class="breadcrumb-title">Contact</h2>
        <ul class="breadcrumb-menu">
            <li><a href="<?= base_url() ?>">Accueil</a></li>
            <li class="active">Contact</li>
        </ul>
    </div>
</div>

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
                                <h5>Office Address</h5>
                                <p>25/B Milford, New York, USA</p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-info-icon">
                                <i class="fal fa-phone"></i>
                            </div>
                            <div class="contact-info-content">
                                <h5>Call Us</h5>
                                <p>+2 123 654 7898</p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-info-icon">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="contact-info-content">
                                <h5>Email Us</h5>
                                <p><a href="https://live.themewild.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7b12151d143b1e031a160b171e55181416">[email&#160;protected]</a></p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-info-icon">
                                <i class="fal fa-clock"></i>
                            </div>
                            <div class="contact-info-content">
                                <h5>Office Open</h5>
                                <p>Sun - Fri (08AM - 10PM)</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 align-self-center">
                    <div class="contact-form">
                        <div class="contact-form-header">
                            <h2>Get In Touch</h2>
                            <p>It is a long established fact that a reader will be distracted by the readable
                                content of a page when looking at its layout. </p>
                        </div>
                        <form method="post" action="https://live.themewild.com/retox/assets/php/contact.php" id="contact-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" placeholder="Your Subject" required>
                            </div>
                            <div class="form-group">
                                <textarea name="message" cols="30" rows="5" class="form-control" placeholder="Write Your Message"></textarea>
                            </div>
                            <button type="submit" class="theme-btn"> <i class="far fa-paper-plane"></i>Envoyer</button>
                            <div class="col-md-12 mt-3">
                                <div class="form-messege text-success"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>