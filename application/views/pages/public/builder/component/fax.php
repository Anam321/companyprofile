<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="faqs">
    <div class="container">
        <div class="section-header text-center">
            <p><?= $meta_fax['meta_deskripsi'] ?></p>
            <h2><?= $meta_fax['meta_title'] ?></h2>
        </div>
        <div class="row">


            <div class="col-md-6">
                <div id="accordion-1">
                    <?php $no = 1;
                    foreach ($faxLeft as $rl): ?>
                        <div class="card wow fadeInLeft" data-wow-delay="0.1s">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#<?= $rl->inisial ?>">
                                    <?= $rl->title ?>
                                </a>
                            </div>
                            <div id="<?= $rl->inisial ?>" class="collapse" data-parent="#accordion-1">
                                <div class="card-body">
                                    <?= $rl->deskripsi ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>



            <div class="col-md-6">
                <div id="accordion-2">
                    <?php foreach ($faxRight as $rr): ?>
                        <div class="card wow fadeInRight" data-wow-delay="0.1s">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#<?= $rr->inisial ?>">
                                    <?= $rr->title ?>
                                </a>
                            </div>
                            <div id="<?= $rr->inisial ?>" class="collapse" data-parent="#accordion-2">
                                <div class="card-body">
                                    <?= $rr->deskripsi ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</div>