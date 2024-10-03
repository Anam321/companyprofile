  <?php
    defined('BASEPATH') or exit('No direct script access allowed'); ?>

  <link rel="stylesheet" type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
      crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js">
  </script>


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
  <!-- Footer Start -->
  <div class="footer wow fadeIn" data-wow-delay="0.3s">
      <div class="container">
          <div class="row">
              <div class="col-md-6 col-lg-3">
                  <div class="footer-contact">
                      <h2>Office Contact</h2>
                      <p><i class="fa fa-map-marker-alt"></i><?= htmlentities(app('addres')) ?></p>
                      <p><i class="fa fa-phone-alt"></i>+<?= htmlentities(app('telpon'))  ?></p>
                      <p><i class="fa fa-envelope"></i><?= htmlentities(app('email'))  ?></p>
                      <div class="footer-social">
                          <a href="<?= htmlentities(media('WHATSAPP'), ENT_QUOTES)  ?>"><i
                                  class="fab fa-whatsapp"></i></a>
                          <a href="<?= htmlentities(media('FACEBOOK'), ENT_QUOTES)  ?>"><i
                                  class="fab fa-facebook-f"></i></a>
                          <a href="<?= htmlentities(media('YOUTUBE'), ENT_QUOTES)  ?>"><i
                                  class="fab fa-youtube"></i></a>
                          <a href="<?= htmlentities(media('INSTAGRAM'), ENT_QUOTES)  ?>"><i
                                  class="fab fa-instagram"></i></a>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3">
                  <div class="footer-link">
                      <h2>Services Areas</h2>
                      <?php foreach (get_db('tbl_service') as $service): ?>
                          <a
                              href="<?= htmlentities(base_url('service/') . $service->slug, ENT_QUOTES)  ?>"><?= htmlentities($service->title) ?></a>
                      <?php endforeach ?>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3">
                  <div class="footer-link">
                      <h2>Useful Pages</h2>
                      <a href="<?= htmlentities(base_url('about'), ENT_QUOTES) ?>">About Us</a>
                      <a href="<?= htmlentities(base_url('contact'), ENT_QUOTES)  ?>">Contact Us</a>
                      <a href="<?= htmlentities(base_url('portfolio'), ENT_QUOTES)  ?>">Projects</a>
                      <a href="<?= htmlentities(base_url('service'), ENT_QUOTES)  ?>">Service</a>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3">
                  <div class="newsletter">
                      <h2>Newsletter</h2>
                      <p>
                          Setiap edisi kami dirancang untuk memberikan update terbaru, penawaran eksklusif, serta
                          insight mendalam dari para ahli di bidangnya. Jangan lewatkan info terbaru tentang produk
                          unggulan kami, dan promosi menarik lain nya, Gabung bersama kami sekarang.
                      </p>
                      <div class="form">
                          <form id="formNewslater">
                              <input class="form-control" type="email" name="email" placeholder="Email here">
                              <button class="btn" id="sendNewslater">Submit</button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="container footer-menu">
          <div class="f-menu">
              <a href="<?= htmlentities(base_url('terms'), ENT_QUOTES)  ?>">Terms of use</a>
              <a href="<?= htmlentities(base_url('privacy'), ENT_QUOTES)  ?>">Privacy policy</a>
              <a href="<?= htmlentities(base_url('faqs'), ENT_QUOTES) ?>">FAQS</a>
          </div>
      </div>
      <div class="container copyright">
          <div class="row">
              <div class="col-md-6">
                  <p>&copy; <a href="javascript:void()"><?= app('app_name') ?></a>, All Right Reserved.</p>
              </div>

              <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
              <div class="col-md-6">
                  <p>Developer By <a href="https://vortex.com">Vortex</a></p>
              </div>
          </div>
      </div>
  </div>
  <!-- Footer End -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  </div>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="<?= base_url('assets/public/') ?>lib/wow/wow.min.js"></script>
  <script src="<?= base_url('assets/public/') ?>lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?= base_url('assets/public/') ?>lib/isotope/isotope.pkgd.min.js"></script>
  <script src="<?= base_url('assets/public/') ?>lib/lightbox/js/lightbox.min.js"></script>
  <script src="<?= base_url('assets/public/') ?>lib/waypoints/waypoints.min.js"></script>
  <script src="<?= base_url('assets/public/') ?>lib/counterup/counterup.min.js"></script>
  <script src="<?= base_url('assets/public/') ?>lib/slick/slick.min.js"></script>

  <!-- Template Javascript -->
  <script src="<?= base_url('assets/public/') ?>js/main.js"></script>


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


      $('#formNewslater').submit(function(e) {
          e.preventDefault();
          var form = $('#formNewslater')[0];
          var data = new FormData(form);

          $('#sendNewslater').html(
              "<span class='spinner-border spinner-border-sm' role='status' aria-hidden='true'></span> Loading..."
          ).attr('disabled', true);

          $.ajax({
              url: "<?php echo site_url('contact/form/sendNews') ?>",
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
                          $('#sendNewslater').text('Submit'); //change button text
                          $('#sendNewslater').attr('disabled', false); //set button enable
                          $('#formNewslater')[0].reset();
                          toastr.success('Berhasil di kirim...')
                      }, 2000);
                  } else {
                      setTimeout(function() {
                          $('#sendNewslater').text('Submit'); //change button text
                          $('#sendNewslater').attr('disabled', false); //set button enable
                          toastr.error(data.mess)
                      }, 2000);
                  }

              },
              error: function(jqXHR, textStatus, errorThrown) {
                  setTimeout(function() {
                      $('#sendNewslater').text('Submit'); //change button text
                      $('#sendNewslater').attr('disabled', false); //set button enable
                      toastr.error('Error Code....')
                  }, 2000);
              }
          });

      });
  </script>