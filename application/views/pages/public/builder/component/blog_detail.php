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
                <a href="<?= base_url('blog/') . $this->uri->segment(2) ?>"><?= htmlentities($field['title'])  ?></a>
            </div>
        </div>
    </div>
</div>





<div class="single">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="single-content wow fadeInUp">
                    <img src="<?= htmlentities(base_url('assets/public/img/') . $field['foto'], ENT_QUOTES)   ?>" />
                    <h2><?= htmlentities($field['title'])  ?></h2>
                    <?= $field['body'] ?>
                </div>
                <div class="single-tags wow fadeInUp">
                    <?php foreach ($category as $ct): ?>
                        <a
                            href="<?= htmlentities(base_url('categori/') . $ct->category_seo, ENT_QUOTES)  ?>"><?= htmlentities($ct->category)  ?></a>
                    <?php endforeach ?>
                </div>
                <!-- <div class="single-bio wow fadeInUp">
                    <div class="single-bio-img">
                        <img src="img/user.jpg" />
                    </div>
                    <div class="single-bio-text">
                        <h3>Author Name</h3>
                        <p>
                            Lorem ipsum dolor sit amet elit. Integer lorem augue purus mollis sapien, non eros leo in
                            nunc. Donec a nulla vel turpis tempor ac vel justo. In hac platea dictumst.
                        </p>
                    </div>
                </div> -->
                <div class="single-related wow fadeInUp">
                    <h2>Related Post</h2>
                    <div class="owl-carousel related-slider">
                        <?php foreach (get_db_where('tbl_blog', 'category', $field['category'], 6) as $post): ?>
                            <div class="post-item">
                                <div class="post-img">
                                    <img
                                        src="<?= htmlentities(base_url('assets/public/img/') . $post->foto, ENT_QUOTES)   ?>" />
                                </div>
                                <div class="post-text">
                                    <a
                                        href="<?= htmlentities(base_url('blog/') . $post->slug, ENT_QUOTES) ?>"><?= htmlentities($post->title)  ?></a>
                                    <div class="post-meta">
                                        <p>By<a href="javascript:void()">Admin</a></p>
                                        <p>In<a
                                                href="<?= htmlentities(base_url('categori/') . $post->category, ENT_QUOTES) ?>"><?= htmlentities($post->category) ?></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>

                    </div>
                </div>


                <!-- <?php $this->load->view('pages/public/builder/component/form_comment') ?> -->
            </div>

            <?php $this->load->view('pages/public/builder/component/widget') ?>
        </div>
    </div>
</div>