<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php if ($this->uri->segment(1) == 'contact'): ?>
<?php $this->load->view('pages/public/builder/component/breadcump') ?>
<?php endif ?>
<link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


<style>
.spinner {
    /*   for centering div */
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);

    /*   spinner div css */
    height: 50px;
    width: 50px;
    border-radius: 50%;
    /*   background-color : red; */
    border: 10px solid #ccc;
    border-top-color: #007bff;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    0% {
        transform: rotate(0deg);
    }

    100% {
        transform: rotate(360deg);
    }
}
</style>

<div class="contact wow fadeInUp">
    <div class="container">
        <div class="section-header text-center">
            <p><?= $meta_contact['meta_deskripsi'] ?></p>
            <h2><?= $meta_contact['meta_title'] ?></h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="contact-info">
                    <div class="contact-item">
                        <a target="_blank" href="<?= app('map') ?>"><i class="flaticon-address"></i></a>
                        <div class="contact-text">
                            <h2>Location</h2>
                            <p><?= app('addres') ?></p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <a target="_blank" href="tel:+62<?= app('telpon') ?>"><i class="flaticon-call"></i></a>
                        <div class="contact-text">
                            <h2>Phone</h2>
                            <p>+<?= app('telpon') ?></p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <a target="_blank" href="mailto:<?= app('email') ?>"><i class="flaticon-send-mail"></i></a>
                        <div class="contact-text">
                            <h2>Email</h2>
                            <p><?= app('email') ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="contact-form">

                    <form id="contactForm" novalidate="novalidate">
                        <div class="control-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name"
                                required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email"
                                required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject"
                                required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" id="message" name="message" placeholder="Message"
                                required="required"
                                data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn" type="submit" id="sendMessage">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
toastr.options = {
    "closeButton": true,
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


$('#contactForm').submit(function(e) {
    e.preventDefault();
    var form = $('#contactForm')[0];
    var data = new FormData(form);

    $('#sendMessage').html(
        "<span class='spinner-border spinner-border-sm' role='status' aria-hidden='true'></span> Loading..."
    ).attr('disabled', true);

    $.ajax({
        url: "<?php echo site_url('contact/form/send_message') ?>",
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
                    $('#sendMessage').text('Send Message'); //change button text
                    $('#sendMessage').attr('disabled', false); //set button enable
                    $('#contactForm')[0].reset();
                    toastr.success('Berhasil di kirim...')
                }, 2000);
            } else {
                setTimeout(function() {
                    $('#sendMessage').text('Send Message'); //change button text
                    $('#sendMessage').attr('disabled', false); //set button enable
                    toastr.error(data.mess)
                }, 2000);
            }

        },
        error: function(jqXHR, textStatus, errorThrown) {
            setTimeout(function() {
                $('#sendMessage').text('Send Message'); //change button text
                $('#sendMessage').attr('disabled', false); //set button enable
                toastr.error('Error Code....')
            }, 2000);
        }
    });

});
</script>