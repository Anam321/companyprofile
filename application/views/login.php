<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login Page | CodingNepal</title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/auth/mystyle.css">
    <script src="<?= base_url() ?>assets/admin/js/core/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Onest:wght@600&display=swap');

    :root {
        --green: #b8d953;
        --lilac: #b2b2eb;
        --pink: #bb86e9;
        --dark-green: #529a91;
        --peach: #fe96b7;
        --black: #191819;
        --grey: #2a292a;
        --white: #d9d9d9;

    }




    .code-block {
        font-family: 'Courier New', Courier, monospace;
        color: white;
        background-color: black;
        padding: 5px;
        border-radius: 5px;
        border: 1px solid #ccc;

    }


    .loader-page-container {
        display: flex;
        gap: 30px;
        flex-wrap: wrap;
        justify-content: center;
    }

    .loader-container {
        padding: 30px;
        display: flex;
        flex-direction: column;
        align-items: center;
        max-width: 300px;
    }


    .loader-3 {
        display: inline-block;
        align-items: center;
        justify-content: space-around;
        width: 80px;
        height: 20px;
    }

    .loader-3 div {
        margin-left: 5px;
        width: 15px;
        height: 15px;
        background-color: var(--lilac);
        border-radius: 50%;
        display: inline-block;
        animation: loader-3-bounce 1.4s infinite ease-in-out both;
    }

    .loader-3 div:nth-child(1) {
        animation-delay: -0.32s;
    }

    .loader-3 div:nth-child(2) {
        animation-delay: -0.16s;
    }

    @keyframes loader-3-bounce {

        0%,
        80%,
        100% {
            transform: scale(0);
        }

        40% {
            transform: scale(1.0);
        }
    }
</style>

<body style="background: url(<?= base_url() ?>assets/auth/images/konstruksi.jpg)">
    <nav>
        <a href="#"><img src="<?= base_url() ?>assets/auth/images/logo.svg" alt="logo"></a>
    </nav>
    <div class="form-wrapper">
        <h2>Sign In</h2>
        <!-- <?php if ($sess == 1) : ?>
            <div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                    <use xlink:href="#exclamation-triangle-fill" />
                </svg>
                <div>
                    Kamu 3 kali gagal login. Kembai lagi setelah 15 menit.
                </div>
            </div>
        <?php endif ?> -->

        <?php
        // if (!$this->session->csrf_token) {
        //     $this->session->csrf_token = hash('sha1', time());
        // }
        // 
        ?>
        <form id="form">
            <!-- <input style="display: none;" name="token" value="<?= $this->session->csrf_token ?>"> -->
            <div class="form-control">
                <input type="text" required>
                <label>Username</label>
            </div>
            <div class="form-control">
                <input type="password" required>
                <label>Password</label>
            </div>
            <button type="submit" id="login">
                Sign In
            </button>


            <div class="form-help">
                <!-- <div class="remember-me">
                    <input type="checkbox" id="remember-me">
                    <label for="remember-me">Remember me</label>
                </div> -->
                <!-- <a href="#">Need help?</a> -->
            </div>
        </form>
        <p>Lupa Password? <a href="#">Ubah Password</a></p>
        <small>
            This page is protected by Google reCAPTCHA to ensure you're not a bot.
            <a href="#">Learn more.</a>
        </small>
    </div>

    <!-- <script src="<?= base_url() ?>assets/admin/js/plugin/sweetalert/sweetalert.min.js"></script> -->


    <script>
        $('#form').submit(function(e) {
            e.preventDefault();
            var form = $('#form')[0];
            var data = new FormData(form);
            //  $('#login').html("<i class='fa fa-refresh fa-spin'></i>Loading").attr('disabled', true);
            $('#login').html("<div class='loader-wrap'><div class='loader loader-3'><div></div><div></div><div></div></div></div>").attr('disabled', true);
            $.ajax({
                url: '<?php echo site_url('auth/serverProsess') ?>',
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
                            $('#login').text('Sign In'); //change button text
                            $('#login').attr('disabled', false); //set button enable
                            $('#login').hide();
                            Swal.fire({
                                position: "top-midle",
                                icon: "success",
                                title: "Anda Berhasil Login",
                                showConfirmButton: false,
                                timer: 2500,

                            }).then((result) => {
                                window.location = '<?php echo base_url('dis/dashboard') ?>';
                            })

                        }, 1500);


                    } else {
                        setTimeout(function() {
                            $('#login').text('Sign In'); //change button text
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
                        Swal.fire({
                            icon: "error",
                            title: "Oops...",
                            text: "Something went wrong!",

                        });
                        $('#login').text('Sign In'); //change button text
                        $('#login').attr('disabled', false); //set button enable
                    }, 2000);

                }
            });

        });
    </script>

</body>

</html>