<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php if ($this->uri->segment(1) == 'about'): ?>
    <?php $this->load->view('pages/public/builder/component/breadcump') ?>
<?php endif ?>
<div class="about wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6">
                <div class="about-img">
                    <img src="<?= htmlentities(base_url('assets/public/img/') . $about['images'], ENT_QUOTES)  ?>"
                        alt="<?= htmlentities($about['title']) ?>">
                </div>
            </div>
            <div class="col-lg-7 col-md-6">
                <div class="section-header text-left">
                    <p><?= htmlentities($about['deskripsi']) ?></p>
                    <h2><?= htmlentities($about['title']) ?></h2>
                </div>
                <div class="about-text">
                    <?= $about['body'] ?>
                    <a class="btn" href="<?= htmlentities($about['link'], ENT_QUOTES) ?>">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>