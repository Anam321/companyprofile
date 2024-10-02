<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="testimonial wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="testimonial-slider-nav">

                    <?php foreach ($testimoni as $r): ?>
                        <div class="slider-nav"><img
                                src="<?= htmlentities(base_url('assets/public/img/') . $r->foto, ENT_QUOTES)  ?>"
                                alt="<?= htmlentities($r->foto) ?>"></div>

                    <?php endforeach ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="testimonial-slider">
                    <?php foreach ($testimoni as $r): ?>
                        <div class="slider-item">
                            <h3><?= htmlentities($r->name) ?></h3>
                            <a href="<?= htmlentities(base_url('project/') . $r->project, ENT_QUOTES) ?>">
                                <?php $text = strtolower(str_replace('-', ' ', $r->project)); ?>
                                <h4><?= htmlentities($text) ?></h4>
                            </a>
                            <p><?= htmlentities($r->testimoni) ?></p>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</div>