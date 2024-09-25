  <?php
    defined('BASEPATH') or exit('No direct script access allowed'); ?>
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
                      <a href="<?= htmlentities(base_url('kontak'), ENT_QUOTES)  ?>">Contact Us</a>
                      <a href="<?= htmlentities(base_url('portfolio'), ENT_QUOTES)  ?>">Projects</a>
                      <a href="<?= htmlentities(base_url('testimoni'), ENT_QUOTES)  ?>">Testimonial</a>
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
                          <input class="form-control" placeholder="Email here">
                          <button class="btn">Submit</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="container footer-menu">
          <div class="f-menu">
              <a href="<?= htmlentities(base_url('terms'), ENT_QUOTES)  ?>">Terms of use</a>
              <a href="<?= htmlentities(base_url('privacy', ENT_QUOTES))  ?>">Privacy policy</a>
              <a href="<?= htmlentities(base_url('fqas'), ENT_QUOTES) ?>">FQAs</a>
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