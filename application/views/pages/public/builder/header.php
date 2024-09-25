  <?php
  defined('BASEPATH') or exit('No direct script access allowed'); ?>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no" />

  <title><?= htmlentities($seo_title)  ?></title>
  <meta content="<?= htmlentities($seo_deskripsi)  ?>" name="description" />
  <meta content="<?= htmlentities($seo_keyword) ?>" name="keywords" />

  <meta name="robots" content="<?= $robots ?>" />
  <meta name="author" content="<?= app('app_name') ?>" />
  <meta http-equiv="Content-Language" content="id-ID" />
  <meta NAME="Distribution" CONTENT="Global" />
  <meta NAME="Rating" CONTENT="General" />
  <link rel="canonical" href="<?php echo "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>" />


  <meta name="og:description" content="<?= htmlentities($seo_deskripsi) ?>" data-dynamic="true" />
  <meta name="og:image" content="<?= $ogImages ?>" data-dynamic="true">
  <meta name="og:image:alt" content="<?= htmlentities($ogAlt) ?>" data-dynamic="true" />
  <meta name="og:image:height" content="630" data-dynamic="true" />
  <meta name="og:image:secure_url" content="<?= htmlentities($ogAlt) ?>" data-dynamic="true" />
  <meta name="og:image:width" content="1200" data-dynamic="true" />
  <meta name="og:locale" content="en_US" data-dynamic="true" />
  <meta name="og:site_name" content="<?= htmlentities($ogAlt) ?>" data-dynamic="true" />
  <meta name="og:title" content="<?= htmlentities($seo_title)  ?>" data-dynamic="true" />
  <meta name="og:type" content="website" data-dynamic="true" />
  <meta name="og:url" content="<?php echo "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>" data-dynamic="true" />

  <meta name="geo.position" content="-6.365170805966089,106.72579137670745" />
  <meta name="geo.placename" content="tangerang, banten" />
  <meta name="geo.region" content="indonesia" />
  <meta name="twitter:card" content="summary_large_image" />



  <!-- Favicon -->
  <link href="<?= base_url('assets/public/') ?>img/favicon.ico" rel="icon">
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet">
  <!-- CSS Libraries -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/public/') ?>lib/flaticon/font/flaticon.css" rel="stylesheet">
  <link href="<?= base_url('assets/public/') ?>lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/public/') ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/public/') ?>lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/public/') ?>lib/slick/slick.css" rel="stylesheet">
  <link href="<?= base_url('assets/public/') ?>lib/slick/slick-theme.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="<?= base_url('assets/public/') ?>css/style.css" rel="stylesheet">