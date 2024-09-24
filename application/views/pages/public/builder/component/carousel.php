<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div id="carousel" class="carousel slide" data-ride="carousel">
    <!-- <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
    </ol> -->
    <div class="carousel-inner">
        <?php foreach ($slider as $r): ?>
        <div class="carousel-item <?php if ($r->main == 1) {
                                            echo 'active';
                                        } ?>">
            <img src="<?= htmlentities(base_url('assets/public/img/') . $r->foto, ENT_QUOTES)  ?>" alt="Carousel Image">
            <div class="carousel-caption">
                <p class="animated fadeInRight"><?= htmlentities($r->deskripsi)  ?></p>
                <h1 class="animated fadeInLeft"><?= htmlentities($r->title) ?></h1>
                <a class="btn animated fadeInUp" href="<?= htmlentities($r->link)  ?>">Get
                    A Quote</a>
            </div>
        </div>
        <?php endforeach ?>
    </div>

    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>