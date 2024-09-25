<div class="service">
    <div class="container">
        <div class="section-header text-center">
            <p><?= $meta_service['meta_deskripsi'] ?></p>
            <h2><?= $meta_service['meta_title'] ?></h2>
        </div>
        <div class="row">

            <?php foreach ($service as $r): ?>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="<?= htmlentities(base_url('assets/public/img/') . $r->images, ENT_QUOTES) ?>"
                            alt="<?= htmlentities($r->title) ?>">
                        <div class="service-overlay">
                            <p>
                                <?= htmlentities($r->meta_deskripsi) ?>
                            </p>
                        </div>
                    </div>
                    <div class="service-text">
                        <h3><?= htmlentities($r->title) ?></h3>
                        <a class="btn" href="<?= htmlentities(base_url('service/') . $r->slug, ENT_QUOTES) ?>"
                            data-lightbox="service">+</a>
                    </div>
                </div>
            </div>
            <?php endforeach ?>

        </div>
    </div>
</div>