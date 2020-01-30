<!DOCTYPE html>
<html class="no-js" lang="zxx">
<?php include('head.php'); ?>
<body>
  <style>
  .thin{
    display:none !important;
  }
  </style>
    <div id="loading"></div>
  <!--====================  header area ====================-->
  <div class="header-area header-sticky header-sticky--default">
        <div class="header-area__desktop header-area__desktop--default">
          <?php include('header.php'); ?>
          <?php include('navigation.php'); ?>
        </div>
    </div>
    <!--====================  End of header area  ====================-->
    <?php include('home-slider.php'); ?>
    <?php include('about-video.php'); ?>

    <?php include('project-slider.php'); ?>

    <!--====================  service tab area ====================-->
    <?php include('project-tab.php'); ?>
    <?php include('tesimonial-slider.php'); ?>
    <?php include('job-hiring.php'); ?>


    <?php include('brand-slider.php') ?>
    <!--====================  End of brand logo area  ====================-->
    <!-- popup form -->

<!-- pop up form end -->
<div id="poup-form" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <div class="form-title">
                <span>Get in touch with us!</span>
              </div>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body pop-up-form">
              <div class="row">
                    <div class="col-md-12">
                  <form id= "pop-up-contact" action = "admin/process.php" method = "post">
                  <div id="contact-form" class="form-container" data-form-container>
                  <div class="input-container">
                    <div class="row">
                      <span class="req-input" >
                        <span class="input-status" data-toggle="tooltip" data-placement="top" title="Input Your First and Last Name."> </span>
                        <input type="text" data-min-length="8" name = "name" placeholder="Full Name">
                      </span>
                    </div>
                    <div class="row">
                      <span class="req-input">
                        <span class="input-status" data-toggle="tooltip" data-placement="top" title="Please Input Your Email."> </span>
                        <input type="email" name = "email" placeholder="Email">
                      </span>
                    </div>
                    <div class="row">
                      <span class="req-input">
                        <span class="input-status" data-toggle="tooltip" data-placement="top" title="Please Input Your Phone Number."> </span>
                        <input type="tel" name = "phone" placeholder="Phone Number">
                      </span>
                    </div>
                    <div class="row">
                      <span class="req-input message-box">
                        <span class="input-status" data-toggle="tooltip" data-placement="top" title="Please Include a Message."> </span>
                        <textarea type="textarea" data-min-length="10" placeholder="Message" name = "message"></textarea>
                        <input type = "hidden" value = "<?php echo $_SERVER['PHP_SELF']?>" name = "redirect">
                    </div>
                    <div class="row submit-row">
                      <input type="submit" name="submit" value="Submit" class="btn btn-block submit-form">
                    </div>
                  </div>
                  </div>
                  </form>
                   <div class="row">
                    <div class="col-md-12">
                        <div class = "col-md-12 soc">
                            <a  href="javascript:void(0);" class="btn btn-block btn-social btn-google"  id="googleSignIn" >
                            <i class="fa fa-google-plus-square fa-2x"> </i>Log in With Google
                            </a>

                        </div>
                        <div class = "col-md-12">
                                <div class="fb-login-button" data-width="" data-size="large" data-button-type="login_with" data-auto-logout-link="false"
                                data-use-continue-as="false"  scope="public_profile,email" onlogin="checkLoginState();"></div>
                        </div>

                    </div>
                     </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
    <?php include('footer.php'); ?>
    <!--=======  offcanvas mobile menu  =======-->



    <!--=======  End of offcanvas mobile menu  =======-->
    <!--====================  scroll top ====================-->
    <a href="#" class="scroll-top" id="scroll-top">
        <i class="ion-android-arrow-up"></i>
    </a>
    <!--====================  End of scroll top  ====================-->
    <!-- JS
============================================ -->

    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="assets/js/vendor/bootstrap.min.js"></script>

    <!-- Popper JS -->
    <script src="assets/js/vendor/popper.min.js"></script>

    <!-- Swiper Slider JS -->
    <script src="assets/js/plugins/swiper.min.js"></script>

    <!-- Light gallery JS -->
    <script src="assets/js/plugins/lightgallery.min.js"></script>

    <!-- Light gallery video JS -->
    <script src="assets/js/plugins/lg-video.min.js"></script>

    <!-- Waypoints JS -->
    <script src="assets/js/plugins/waypoints.min.js"></script>

    <!-- Counter up JS -->
    <script src="assets/js/plugins/counterup.min.js"></script>

    <!-- Mailchimp JS -->
    <script src="assets/js/plugins/mailchimp-ajax-submit.min.js"></script>
    <script src="https://apis.google.com/js/platform.js?onload=onLoadGoogleCallback" async defer></script>
    <script src="assets/js/plugins/validation.js"></script>

    <!-- Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from avobe) -->

    <!--
<script src="assets/js/plugins/plugins.min.js"></script>
-->
    <script type="text/javascript">
        $(document).ready(function(){
        $("#poup-form").modal('show');
        });
    </script>
    <!-- below code is for online chat system -->
    <script src="assets/js/main.js"></script>
<style>
 .soc {
        min-width: 57%;
        margin: 8px auto;
    }
@media only screen and (max-device-width: 480px) {
    .soc {
        min-width: 70%;
        margin: 8px auto;
    }
 }

</style>
</body>

<style>

</style>
</html>
