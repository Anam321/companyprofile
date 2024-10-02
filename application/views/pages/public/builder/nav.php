<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="wrapper">
    <!-- Top Bar Start -->
    <div class="top-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12">
                    <div class="logo">
                        <a href="index.html">
                            <!-- <h1>Anugrah Alumunium</h1> -->
                            <img src="<?= htmlentities(base_url('assets/public/img/') . app('logo'), ENT_QUOTES) ?>"
                                alt="<?= htmlentities(app('app_name')) ?>">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7 d-none d-lg-block">
                    <div class="row">
                        <div class="col-4">
                            <div class="top-bar-item">
                                <div class="top-bar-icon">
                                    <i class="flaticon-calendar"></i>
                                </div>
                                <div class="top-bar-text">
                                    <h3>Opening Hour</h3>
                                    <p>Mon - Fri, 7:00 - 24:00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="top-bar-item">
                                <div class="top-bar-icon">
                                    <i class="flaticon-call"></i>
                                </div>
                                <div class="top-bar-text">
                                    <h3>Telpon</h3>
                                    <p>+<?= app('telpon') ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="top-bar-item">
                                <div class="top-bar-icon">
                                    <i class="flaticon-send-mail"></i>
                                </div>
                                <div class="top-bar-text">
                                    <h3>Email</h3>
                                    <p><?= app('email') ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Bar End -->

    <!-- Nav Bar Start -->
    <div class="nav-bar">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                <a href="#" class="navbar-brand">MENU</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto">
                        <a href="<?= base_url() ?>" class="nav-item nav-link <?php if ($this->uri->segment(1) == '') {
                                                                                    echo 'active';
                                                                                } ?>">Home</a>
                        <a href="<?= htmlentities(base_url('about'), ENT_QUOTES) ?>"
                            class="nav-item nav-link <?php if ($this->uri->segment(1) == 'about') {
                                                            echo 'active';
                                                        } ?>">Tentang
                            Kami</a>
                        <a href="<?= htmlentities(base_url('service'), ENT_QUOTES) ?>"
                            class="nav-item nav-link <?php if ($this->uri->segment(1) == 'service') {
                                                            echo 'active';
                                                        } ?>">Layanan</a>
                        <a href="<?= htmlentities(base_url('portfolio'), ENT_QUOTES) ?>"
                            class="nav-item nav-link <?php if ($this->uri->segment(1) == 'portfolio') {
                                                            echo 'active';
                                                        } ?>">Portfolio</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Kategori</a>
                            <div class="dropdown-menu">
                                <a href="<?= htmlentities(base_url('category/'), ENT_QUOTES) ?>"
                                    class="dropdown-item">Blog
                                    Page</a>
                            </div>
                        </div>
                        <a href="<?= htmlentities(base_url('blog'), ENT_QUOTES) ?>" class="nav-item nav-link">Blog</a>
                        <a href="<?= htmlentities(base_url('contact'), ENT_QUOTES) ?>"
                            class="nav-item nav-link">Kontak</a>
                    </div>

                </div>
            </nav>
        </div>
    </div>
    <!-- Nav Bar End -->