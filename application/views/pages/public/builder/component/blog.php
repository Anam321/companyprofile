<div class="blog">
    <div class="container">
        <div class="section-header text-center">
            <p><?= $meta_blog['meta_deskripsi'] ?></p>
            <h2><?= $meta_blog['meta_title'] ?> </h2>
        </div>
        <div class="row">
            <?php foreach ($blog as $r): ?>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="<?= htmlentities(base_url('assets/public/img/') . $r->foto, ENT_QUOTES) ?>"
                            alt="<?= htmlentities($r->title) ?>">
                    </div>
                    <div class="blog-title">
                        <h3><?= htmlentities($r->title) ?></h3>
                        <a class="btn" href="<?= htmlentities(base_url('blog/') . $r->slug, ENT_QUOTES) ?>">+</a>
                    </div>
                    <div class="blog-meta">
                        <p>By<a href="javascript:void()">Admin</a></p>
                        <p>In<a href=""><?= htmlentities($r->category) ?></a></p>
                    </div>
                    <div class="blog-text">
                        <p>
                            <?= htmlentities($r->meta_deskripsi) ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php endforeach ?>

        </div>
    </div>
</div>