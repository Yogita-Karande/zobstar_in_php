
<!-- ================================
       START FOOTER AREA
================================= -->
<footer class="theme-backgound-color text-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4 mx-auto text-center">
            <form action="#" method="post">
                <div class="newsletter">
                  <p class="fw-bold">Get all our latest updates straight into your inbox by signing up with us</p>
                  <div class="input-group mb-0">
                    <input type="text" class="form-control" name="semail"  placeholder="Your email" required aria-describedby="passwordHelpBlock">
                    <button class="btn btn-primary py-0 px-5" type="submit"><i class="bi bi-telegram"></i></button>
                  </div>
                  <small id="passwordHelpBlock" class="form-text text-muted mb-3">
                      By signing up, you consent to the Privacy Policy
                  </small>
                </div>
            </form>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-md-4">
            <h6>Head Office</h6>
            Unit no 5, Vasudeo Apartments, Vasudeo Mishra Marg, Andheri East, Mumbai – 400069<br> India
            <div class="list-inline social-link mt-3">
              <a href="#?" class="list-inline-item text-light"><i class="bi bi-facebook"></i></a>
              <a href="#?" class="list-inline-item text-light"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="col-md-8 text-end">
            <div class="list-inline menu-link mt-4">
              <a href="<?= base_url?>about-us.php" class="list-inline-item text-light">Sitemap</a>
              <a href="<?= base_url?>privacy-policy.php" class="list-inline-item text-light">Privacy Policy</a>
              <a href="<?= base_url?>terms-and-conditions.php" class="list-inline-item text-light">Terms & Condition</a>
            </div>
          </div>
        </div>
      </div>
      <div class="container text-center">
        <div class="row">
          <div class="col-12">
            © <?= date('Y')?> HighSeasTech, All Rights Reserved
          </div>
        </div>
      </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
<script src="<?= base_url?>src/js/owl/owl.carousel.min.js"></script>
<?= isset($appendScript)?$appendScript:''?>

<!-- ================================
       END FOOTER AREA
================================= -->

<!-- start back-to-top -->
<div id="back-to-top">
    <i class="la la-angle-up" title="Go top"></i>
</div>
<!-- end back-to-top -->

<!-- Template JS Files -->
<script src="<?= asset_path;?>js/jquery-3.4.1.min.js"></script>
<script src="<?= asset_path;?>js/jquery-ui.js"></script>
<script src="<?= asset_path;?>js/popper.min.js"></script>
<script src="<?= asset_path;?>js/bootstrap.min.js"></script>
<script src="<?= asset_path;?>js/owl.carousel.min.js"></script>
<script src="<?= asset_path;?>js/jquery.magnific-popup.min.js"></script>
<script src="<?= asset_path;?>js/isotope-3.0.6.min.js"></script>
<script src="<?= asset_path;?>js/chosen.min.js"></script>
<script src="<?= asset_path;?>js/moment.min.js"></script>
<script src="<?= asset_path;?>js/daterangepicker.js"></script>
<script src="<?= asset_path;?>js/purecounter.js"></script>
<script src="<?= asset_path;?>js/pricing-script.js"></script>
<script src="<?= asset_path;?>js/particles.min.js"></script>
<script src="<?= asset_path;?>js/particles-script-2.js"></script>
<script src="<?= asset_path;?>js/progresscircle.js"></script>
<script src="<?= asset_path;?>js/main.js"></script>
