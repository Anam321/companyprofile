<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php if ($this->uri->segment(1) == 'privacy'): ?>
    <?php $this->load->view('pages/public/builder/component/breadcump') ?>
<?php endif ?>
<div class="single">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="single-content wow fadeInUp">
                    <h2><?= $field['title'] ?></h2>
                    <?= $field['body'] ?>
                </div>
            </div>

        </div>
    </div>
</div>