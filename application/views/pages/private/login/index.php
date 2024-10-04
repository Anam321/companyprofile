 <?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

 <!DOCTYPE html>

 <html lang="en">

 <head>
     <meta charset="utf-8">
     <title><?= app('app_name') ?> | Login</title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport">
     <meta content="Login Form Template" name="keywords">
     <meta content="Login Form Template" name="description">

     <!-- Favicon -->
     <link href="<?= base_url('assets/auth/') ?>img/favicon.ico" rel="icon">
     <link href="<?= base_url('assets/auth/') ?>css/style.css" rel="stylesheet">

     <link rel="stylesheet" type="text/css"
         href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

     <script src="https://code.jquery.com/jquery-3.6.0.js"
         integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js">
     </script>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

     <?php $color = 'FF6500'; ?>
     <style type="text/css">
         .file-input__input {

             opacity: 0;
             overflow: hidden;
             position: absolute;
             z-index: -1;
         }

         .file-input__label {
             cursor: pointer;
             display: inline-flex;
             align-items: center;
             border-radius: 4px;
             font-size: 12px;
             font-weight: 600;
             color: #fff;
             font-size: 12px;
             padding: 8px 10px;
             background-color: #4245a8;
             box-shadow: 0px 0px 2px rgba(0, 0, 0, 0.25);
         }

         .file-input__label svg {
             height: 14px;
             margin-right: 4px;
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


         button {
             display: block;
             position: relative;
             width: 100%;
             height: 40px;
             /* margin: 40px auto; */
             border-radius: 5px;
             border: none;
             border: 1px solid #FF6500;
             background-color: #4caf50;
             outline: none;
             color: #666666;
             font-size: 13px;
             text-transform: uppercase;
             cursor: pointer;
             letter-spacing: 1px;
         }

         button:enabled:hover,
         button.spinning {
             background-color: #FF6500
         }

         button:disabled {
             cursor: default;
         }


         <?php $color = '4CAF50';

            ?><style>.login-3 .btn:hover {
             color: #FF6500 background: #ffffff;
         }

         .bg {
             background: #FF6500
         }

         .login-3 .login-form p a {
             color: #3c4043;
             font-size: 14px;
             text-decoration: none;
         }

         .login-3 .login-form input.btn {
             color: #ffffff;
             background: #FF6500 border-color:#FF6500 outline: none;
             cursor: pointer;
         }

         .login-3 .login-form input.btn:hover {
             color: #FF6500 background: #ffffff;
         }
     </style>
 </head>

 <body>
     <div class="wrapper login-3">
         <div class="container">
             <div class="col-left">
                 <div class="login-text">
                     <h2><img style="width: 80px;"
                             src="<?= htmlentities(base_url('assets/public/img/') . app('logo'), ENT_QUOTES)   ?>"
                             alt="Logo"></h2>
                     <p>
                         <?= htmlentities(app('addres')) ?>
                     </p>
                     <a target="_blank" class="btn" href="<?= htmlentities(app('map'), ENT_QUOTES) ?>">Read More</a>
                 </div>
             </div>
             <div class="col-right">
                 <div class="login-form">
                     <h2>Login</h2>
                     <?php if ($sess == 1) : ?>
                         <div class="alert alert-danger d-flex align-items-center" role="alert">
                             <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                                 <use xlink:href="#exclamation-triangle-fill" />
                             </svg>
                             <div>
                                 Kamu 3 kali gagal login. Kembai lagi setelah 15 menit.
                             </div>
                         </div>
                     <?php endif ?>

                     <?php
                        if (!$this->session->csrf_token) {
                            $this->session->csrf_token = hash('sha1', time());
                        }
                        ?>
                     <form id="form">
                         <input style="display: none;" name="token" value="<?= $this->session->csrf_token ?>">
                         <p>
                             <input <?php if ($sess == 1) {
                                        echo 'disabled';
                                    } ?> type="text" name="username"
                                 value="<?= htmlentities(set_value('name'), ENT_QUOTES) ?>" placeholder="Username"
                                 required>
                         </p>
                         <p>
                             <input <?php if ($sess == 1) {
                                        echo 'disabled';
                                    } ?> type="password" name="password"
                                 value="<?= htmlentities(set_value('name'), ENT_QUOTES) ?>" placeholder="Password"
                                 required>
                         </p>
                         <p>
                             <button class="bg" <?php if ($sess == 1) {
                                                    echo 'disabled';
                                                } ?> id="login" type="submit">
                                 Login
                             </button>
                         </p>
                         <p>
                             <!-- <a href="">Forget password?</a> -->
                             <!-- <a href="">Create an account.</a> -->
                         </p>
                     </form>
                 </div>
             </div>
         </div>
         <div class="credit">
             by <a href="https://vortex.com">vortex</a>
         </div>

     </div>

     <div id="spin">
     </div>



     <script>
         toastr.options = {
             // "closeButton": true,
             "debug": false,
             "newestOnTop": false,
             "progressBar": true,
             "positionClass": "toast-top-center",
             "preventDuplicates": false,
             "onclick": null,
             "showDuration": "300",
             "hideDuration": "1000",
             "timeOut": "5000",
             "extendedTimeOut": "1000",
             "showEasing": "swing",
             "hideEasing": "linear",
             "showMethod": "fadeIn",
             "hideMethod": "fadeOut"
         }

         $('#form').submit(function(e) {
             e.preventDefault();
             var form = $('#form')[0];
             var data = new FormData(form);
             //  $('#login').html("<i class='fa fa-refresh fa-spin'></i>Loading").attr('disabled', true);
             $('#spin').html("<div class='loader'><div class ='loader__spinner'></div></div>").attr('disabled',
                 true);
             $.ajax({
                 url: '<?php echo site_url('auth/login') ?>',
                 type: "POST",
                 //contentType: 'multipart/form-data',
                 cache: false,
                 contentType: false,
                 processData: false,
                 method: 'POST',
                 data: data,
                 dataType: "JSON",

                 success: function(data) {
                     if (data.status == '00') {

                         setTimeout(function() {
                             $('#login').text('Login'); //change button text
                             $('#login').attr('disabled', false); //set button enable
                             $('#spin').hide();
                             Swal.fire({
                                 position: "top-midle",
                                 icon: "success",
                                 title: "Anda Berhasil Login",
                                 showConfirmButton: false,
                                 timer: 2500,

                             }).then((result) => {
                                 window.location =
                                     '<?php echo base_url('app-admin/dashboard') ?>';
                             })

                         }, 1500);


                     } else {
                         setTimeout(function() {
                             $('#login').text('Login'); //change button text
                             $('#login').attr('disabled', false); //set button enable
                             Swal.fire({
                                 title: data.mess,
                                 text: "Cek kembali informasi login anda.",
                                 icon: data.type,
                             }).then((result) => {
                                 window.location.reload();
                             })
                         }, 1500);

                     }
                 },
                 error: function(jqXHR, textStatus, errorThrown) {
                     setTimeout(function() {
                         toastr.error('Error Code....')
                         $('#login').text('Login'); //change button text
                         $('#login').attr('disabled', false); //set button enable
                         $('#spin').hide();
                     }, 2000);

                 }
             });

         });
     </script>
 </body>

 </html>