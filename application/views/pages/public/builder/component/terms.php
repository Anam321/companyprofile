<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php if ($this->uri->segment(1) == 'terms'): ?>
<?php $this->load->view('pages/public/builder/component/breadcump') ?>
<?php endif ?>
<div class="single">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="single-content wow fadeInUp">
                    <h2><?= $terms['title'] ?></h2>
                    <?= $terms['body'] ?>
                </div>
            </div>

        </div>
    </div>
</div>