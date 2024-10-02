<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="team">
    <div class="container">
        <div class="section-header text-center">
            <p><?= $meta_patner['meta_title'] ?></p>
            <h2><?= $meta_patner['meta_deskripsi'] ?></h2>
        </div>
        <div class="row">
            <?php foreach ($patner as $r): ?>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="<?= htmlentities(base_url('assets/public/img/') . $r->foto, ENT_QUOTES)  ?>"
                                alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2><?= htmlentities($r->name) ?></h2>
                            <p><?= htmlentities($r->category) ?></p>
                        </div>
                        <div class="team-social">
                            <a class="social-tw" href="<?= htmlentities($r->web), ENT_QUOTES ?>"><i
                                    class="fa fa-globe"></i></a>
                            <a class="social-fb" href="<?= htmlentities($r->facebook), ENT_QUOTES ?>"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="social-li" href="<?= htmlentities($r->linked), ENT_QUOTES ?>"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="social-in" href="<?= htmlentities($r->instagram), ENT_QUOTES ?>"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>