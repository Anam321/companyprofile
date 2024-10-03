<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2><?= $breadcump_1 ?></h2>
            </div>
            <div class="col-12">
                <a href="<?= base_url() ?>">Home</a>
                <a href="<?= base_url('blog/') ?>"><?= $breadcump_1 ?></a>
                <a href="javascript:void()"><?= htmlentities($field['title'])  ?></a>
            </div>
        </div>
    </div>
</div>





<div class="single">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="single-content wow fadeInUp">
                    <img src="<?= htmlentities(base_url('assets/public/img/') . $field['images'], ENT_QUOTES)   ?>" />
                    <h2><?= htmlentities($field['title'])  ?></h2>
                    <?= $field['body'] ?>


                </div>
                <div class="single-tags wow fadeInUp">
                    <div class="footer-social">
                        <a href="<?= htmlentities(media('WHATSAPP'), ENT_QUOTES)  ?>"><i
                                class="fab fa-whatsapp"></i></a>
                        <a href="<?= htmlentities(media('FACEBOOK'), ENT_QUOTES)  ?>"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="<?= htmlentities(media('YOUTUBE'), ENT_QUOTES)  ?>"><i class="fab fa-youtube"></i></a>
                        <a href="<?= htmlentities(media('INSTAGRAM'), ENT_QUOTES)  ?>"><i
                                class="fab fa-instagram"></i></a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>