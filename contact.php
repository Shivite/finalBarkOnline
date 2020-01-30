<!DOCTYPE html>
<html class="no-js" lang="zxx">
<?php include('head.php'); ?>
<body>

    <!--====================  header area ====================-->
    <div class="header-area header-sticky header-sticky--default">
        <div class="header-area__desktop header-area__desktop--default">
          <?php include('header.php'); ?>
          <?php include('navigation.php'); ?>
        </div>
    </div>
    <!--====================  End of header area  ====================-->
    <!--====================  breadcrumb area ====================-->
    <!--====================  breadcrumb area ====================-->
    <div class="breadcrumb-area bg-img" data-bg="assets/img/backgrounds/funfact-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page-banner text-center">
                        <h1>Contact Us</h1>
                        <ul class="page-breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="page-wrapper section-space--inner--120">
        <!--Contact section start-->
        <div class="conact-section">
            <div class="container">
              <div class="row section-space--bottom--50">
                  <div class="col">
                      <!-- <div id="contact-map" class="contact-map"></div> -->
                      <div style="height: 400px;"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3430.0547576352806!2d76.6923409505677!3d30.71686098155263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fee56b1119c47%3A0x62f722a0dac05fa5!2sPNB+GROUP!5e0!3m2!1sen!2sin!4v1555405946051!5m2!1sen!2sin" width="100%" height = "100%"  frameborder="0" style="border:0" allowfullscreen></iframe></div>
                  </div>
              </div>

                <div class="row">
                    <div class="col-lg-4 col-12">
                        <div class="contact-information">
                            <h3>Contact Information</h3>
                            <ul>
                                <li>
                                    <span class="icon"><i class="fa fa-h-square"></i></span></br>

                                    <span class="text1"><b>HEAD OFFICE :  </b><span>C-86 Pannu Tower, <br>Phase 7, Industrial Area, <br>Sahibzada Ajit Singh Nagar,<br> Punjab 140308</span></span>
                                </li>
                                <li>
                                    <span class="icon"><i class="fa fa-pinterest-square"></i></span></br>

                                    <span class="text1"><b>SALES OFFICE :  Crystal Homes</b><p><span>Sec- 115, Kharar Landra Road.</span></p></span>
                                </li>
                                <li>
                                    <span class="icon"><i class="fa fa-pinterest-square"></i></span></br>

                                    <span class="text1"><b>SALES OFFICE :  Milenio Floors</b><p><span>Sec- 116, Kharar Landra Road.</span></p></span>
                                </li>
                                <li>
                                    <span class="icon"><i class="fa fa-pinterest-square"></i></span></br>

                                    <span class="text1"><b>SALES OFFICE :  Picasso Floors</b><p><span>Sec- 127, Kharar Landra Road.</span></p></span>
                                </li>
                                <li>
                                    <span class="icon"><i class="fa fa-phone-square"></i></span>
                                    <span class="text">
                                      <a href="#"><b>TOLLFREE:</b> &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;      8725025025</a>
                                      <a href="#"><b>HEAD OFFICE:</b> &nbsp;  &nbsp;  8725003092</a>
                                      <a href="#"><b>HEAD OFFICE: </b> &nbsp;  &nbsp;  0172-4182700</a>
                                    </span>
                                </li>
                                <li>
                                    <span class="icon"><i class="fa fa-envelope-open"></i></span>
                                    <span class="text"><a href="#">info@grouppnb.com</a><a href="#">www.grouppnb.com</a></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-12">
                        <div class="contact-form">
                            <h3>Leave Your Message</h3>
                            <form id="contact-form" action="assets/php/mail.php" method="post">
                                <div class="row row-10">
                                    <div class="col-md-6 col-12 section-space--bottom--20"><input name="con_name" type="text" placeholder="Your Name" required></div>
                                    <div class="col-md-6 col-12 section-space--bottom--20"><input name="con_email" type="email" placeholder="Your Email" required></div>
                                    <div class="col-md-12 col-12 section-space--bottom--20"><input name="con_mobile" type="text" placeholder="Your Mobile" required pattern="[1-9]{10}" title="Contact number must be 10 digits."></div>
                                    <div class="col-12"><textarea name="con_message" placeholder="Your Message" required></textarea></div>
                                    <div class="col-md-12 col-12 section-space--bottom--20">
                                        <button>Send Message</button>

                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class = "col-md-6 section-space--bottom--20 soc float-right">
                                           <a  href="javascript:void(0);" class="btn btn-block btn-social btn-google"  id="googleSignIn" >
                                                <i class="fa fa-google-plus-square fa-2x"> </i>Log in With Google
                                                </a>

                                        </div>
                                        <div class = "col-md-6 section-space--bottom--20">
                                                <div class="fb-login-button" data-width="" data-size="large" data-button-type="login_with" data-auto-logout-link="false" data-use-continue-as="false"  scope="public_profile,email" onlogin="checkLoginState();"></div>
                                        </div>


                                    <!--</div>-->
                                </div>

                            </form>
                            <p class="form-message"></p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!--Contact section end-->
    </div>
    <!--====================  footer area ====================-->
    <!--====================  End of brand logo area  ====================-->

    <?php  include('footer.php'); ?>
    <!--=======  offcanvas mobile menu  =======-->
    <!--====================  End of footer area  ====================-->
    <!--=======  offcanvas mobile menu  =======-->

    <div class="offcanvas-mobile-menu" id="mobile-menu-overlay">
        <a href="javascript:void(0)" class="offcanvas-menu-close" id="mobile-menu-close-trigger">
            <i class="ion-android-close"></i>
        </a>

        </div>

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
    <!-- Map JS -->
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfmCVTjRI007pC1Yk2o2d_EhgkjTsFVN8"></script>


    <!-- Mailchimp JS -->
    <script src="assets/js/plugins/mailchimp-ajax-submit.min.js"></script>
    <script src="assets/js/plugins/validation.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script>
    <!-- Main JS -->
    <script src="https://apis.google.com/js/platform.js?onload=onLoadGoogleCallback" async defer></script>
    <script src="assets/js/main.js"></script>

</body>

</html>
