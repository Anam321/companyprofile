<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php if ($this->uri->segment(1) == 'portfolio'): ?>
    <?php $this->load->view('pages/public/builder/component/breadcump') ?>
<?php endif ?>

<div class="portfolio">
    <div class="container">
        <div class="section-header text-center">
            <p><?= $meta_portfolio['meta_deskripsi'] ?></p>
            <h2><?= $meta_portfolio['meta_title'] ?></h2>
        </div>

        <div class="row portfolio-container">

            <?php foreach ($portfolio_data as $portflio): ?>
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-warp">
                        <div class="portfolio-img">
                            <img src="<?= htmlentities(base_url('assets/public/img/') . $portflio['images'], ENT_QUOTES) ?>"
                                alt="<?= htmlentities($portflio['title']) ?>">
                            <div class="portfolio-overlay">
                                <p>
                                    <?= htmlentities($portflio['desk']) ?>
                                </p>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <h3><?= htmlentities($portflio['title']) ?></h3>
                            <a class="btn"
                                href="<?= htmlentities(base_url('portfolio/') . $portflio['link']), ENT_QUOTES ?>">+</a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>

        </div>
        <div class="row">
            <div class="col-12 load-more">
                <?= $paging ?>
            </div>
        </div>
    </div>
</div>