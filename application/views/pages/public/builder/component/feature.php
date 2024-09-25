<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="feature wow fadeInUp" data-wow-delay="0.1s">
    <div class="container-fluid">
        <div class="row align-items-center">

            <?php foreach ($feature as $r): ?>
            <div class="col-lg-4 col-md-12">
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="<?= htmlentities($r->icon)  ?>"></i>
                    </div>
                    <div class="feature-text">
                        <h3><?= htmlentities($r->title)  ?></h3>
                        <p><?= htmlentities($r->deskripsi)  ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach ?>

        </div>
    </div>
</div>