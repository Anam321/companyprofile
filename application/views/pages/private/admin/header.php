   <?php
    defined('BASEPATH') or exit('No direct script access allowed'); ?>

   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <title><?= $seo_title ?></title>
   <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
   <link rel="icon" href="<?= htmlentities(base_url('assets/public/img/') . app('favicon'), ENT_QUOTES) ?>"
       type="image/x-icon" />

   <!-- Fonts and icons -->
   <script src="<?= base_url('assets/admin/') ?>js/plugin/webfont/webfont.min.js"></script>
   <script>
       WebFont.load({
           google: {
               families: ["Public Sans:300,400,500,600,700"]
           },
           custom: {
               families: [
                   "Font Awesome 5 Solid",
                   "Font Awesome 5 Regular",
                   "Font Awesome 5 Brands",
                   "simple-line-icons",
               ],
               urls: ["<?= base_url('assets/admin/') ?>css/fonts.min.css"],
           },
           active: function() {
               sessionStorage.fonts = true;
           },
       });
   </script>

   <!-- CSS Files -->
   <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>css/bootstrap.min.css" />
   <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>css/plugins.min.css" />
   <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>css/kaiadmin.min.css" />

   <!-- CSS Just for demo purpose, don't include it in your project -->
   <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>css/demo.css" />
   <link href="<?= base_url() ?>assets/admin/summernote/summernote-lite.min.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css"
       href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

   <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
       crossorigin="anonymous"></script>
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js">
   </script>
   <style>
       .note-editor .dropdown-toggle::after {
           all: unset;

       }

       .note-editor .note-dropdown-menu {
           box-sizing: content-box;
       }

       .note-editor .note-modal-footer {
           box-sizing: content-box;
       }
   </style>