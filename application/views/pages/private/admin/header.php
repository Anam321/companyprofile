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
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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

.swal-lg {
    width: 1000px !important;
}

.swal-input-250 {
    width: 250px !important;
    margin-top: 1em !important;
    margin-right: auto !important;
    margin-bottom: 3px !important;
    margin-left: auto !important;
}

.swal-left {
    text-align: left !important;
}

.swal-bold {
    font-weight: bold !important;
}


.loader {
    position: fixed;
    z-index: 999;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.6);
    margin: auto;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    overflow: visible;
}

.loader__spinner {
    border: 10px solid rgba(0, 0, 0, 0.25);
    border-left: 10px solid #FFAC12;
    transform: translateZ(0);
    animation: spinner 1.1s infinite cubic-bezier(0.785, 0.135, 0.15, 0.86);
    border-radius: 50%;
    width: 65px;
    height: 65px;
}

@keyframes spinner {
    0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }

    100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}
   </style>