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
            <div class="col-lg-8">
                <div class="single-content wow fadeInUp">
                    <img src="<?= htmlentities(base_url('assets/public/img/') . $field['images'], ENT_QUOTES)   ?>" />
                    <h2><?= htmlentities($field['title'])  ?></h2>
                    <?= $field['desk'] ?>
                    <br>
                    <br>

                    <div class="row">
                        <?php foreach (get_db_where('ref_projek_images', 'id_projek', $field['id_projek'], 50) as $row) : ?>
                        <div class="col-sm-4">
                            <div class="card" style="width: 18rem;">
                                <img src="<?= htmlentities(base_url('assets/public/img/') . $row->images, ENT_QUOTES)   ?>"
                                    class="card-img-top" alt="<?= $row->images ?>">
                            </div>
                        </div>
                        <?php endforeach ?>
                    </div>

                    <br>
                    <br>
                    <br>
                    <h5>Client</h5>
                    <table class="table table-sm" style="width: 100%;">
                        <?php $testi = get_db_where_onc('tbl_testimoni', 'id_projek', $field['id_projek']); ?>
                        <?php $projek = get_db_where_onc('ref_projek', 'id_projek', $field['id_projek']); ?>
                        <?php if($testi):?>
                        <tr>
                            <td style="width: 70px;">Nama</td>
                            <td style="width: 40px;">:</td>
                            <td><?= $testi['name'] ?></td>
                        </tr>
                        <tr>
                            <td style="width: 70px;">Alamat</td>
                            <td>:</td>
                            <td><?= $projek['alamat'] ?></td>
                        </tr>
                        <tr>
                            <td style="width: 70px;">Testimoni</td>
                            <td>:</td>
                            <td><?= $testi['testimoni'] ?></td>
                        </tr>
                        <?php endif?>
                    </table>
                </div>
                <div class="single-tags wow fadeInUp">
                    <div class="footer-social">
                        <a href="<?= base_url('wa_me/') . $field['link'] ?>"><i class="fab fa-whatsapp"></i></a>
                        <a href="<?= htmlentities($field['facebook'], ENT_QUOTES)  ?>"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="<?= htmlentities($field['youtube'], ENT_QUOTES)  ?>"><i class="fab fa-youtube"></i></a>
                        <a href="<?= htmlentities($field['instagram'], ENT_QUOTES)  ?>"><i
                                class="fab fa-instagram"></i></a>
                    </div>
                </div>

            </div>
            <div class="col-lg-4">
                <div class="sidebar">

                    <div class="sidebar-widget wow fadeInUp">
                        <h2 class="widget-title">Portfolio Lain Nya</h2>
                        <div class="recent-post">
                            <?php foreach ($populerportfolio as $rpost): ?>
                            <div class="post-item">
                                <div class="post-img">
                                    <img
                                        src="<?= htmlentities(base_url('assets/public/img/') . $rpost->images, ENT_QUOTES)   ?>" />
                                </div>
                                <div class="post-text">
                                    <a
                                        href="<?= htmlentities(base_url('portfolio/') . $rpost->link, ENT_QUOTES) ?>"><?= htmlentities($rpost->title)  ?></a>

                                </div>
                            </div>
                            <?php endforeach ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>