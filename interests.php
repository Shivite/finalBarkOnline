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
    <div class="breadcrumb-area bg-img" data-bg="assets/img/projects/interest/interest-banner.png">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page-banner text-center">
                        <h1>Interest</h1>
                        <ul class="page-breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li>Interest</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--====================  End of breadcrumb area  ====================-->
    <div class="page-wrapper section-space--inner--120">
        <!--Projects section start-->
        <div class="project-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12 section-space--bottom--30 pl-30 pl-sm-15 pl-xs-15">
                        <div class="project-details">
                            <h2>Intersts</h2>
                            <p>
                              Milenio Floors Offers best flats in Mohali located on Kharar-Landran Road
                              Sector -116, Mohali. Milenio Floors is providing with all the
                              ultramodern amenities like spacious Modular Kitchen, Toilets fitted with
                              branded chinaware and C.P fittings, wooden Cupboards and finishes of
                              walls with obd and floor with branded vitrified tiles. Attractive Main entrance
                              Gate with security Cabin 24hrs security. Internal Wall with Good Quality
                              plaster and external wall finish as per architect’s design. Granite Kitchen
                              platform with S.S Sink, designer wall tiles dado over kitchen platform.
                              Concealed copper electrical wiring with premium quality modular switches,
                              Provisions of AC plug point in the master bedroom and Adequate light
                              points and plug points in all rooms. Birla putty finish over internal wall and
                              semi acrylic paint over external wall. Designer bathrooms with premium
                              quality fittings and vessels. Decorative main entrance door with premium
                              hardware fittings and all internal laminated flush doors. All joinery work
                              shall be done in wood to give them a rich look.
                            </p>
                        </div>
                    </div>



                </div>
            </div>
        </div>
        <!--Projects section end-->
        <!-- calculation section -->
        <div class="team-job-area section-space--inner--120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="team-job__content">
                        <div class="team-job__title-wrapper">
                            <h2 class="team-job__title">Interest Calculator<br></h2>
                        </div>

                        <div class="team-job__content-wrapper">
                            <h2 class="team-job__title">Fill Details <span></a></span></h2>
                            <div class="team-job__list-wrapper">
                              <form id = "interestForm">
                                <div class="team-job__single">
                                    <h3 class="title">Investement Amount1 </h3>
                                    <p class="text"><input type = "text" name = "investement"  id = "investement" class="number" maxlength="12"></p>
                                </div>
                                <div class="team-job__single">
                                    <h3 class="title">TENURE</h3>
                                    <p class="text"><input type = "text" name = "tenure" id = "tenure" class = "tenure" maxlength="2"></p>
                                </div>
                                <div class="team-job__single">
                                    <h3 class="title"> RATE OF INTEREST</h3>
                                    <p class="text"><input type = "text" name = "interest" id = "interest" class = "interest"></p>
                                </div>
                              </form>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="team-job__image text-center">
                        <!-- <div id="donutchart" style="width: 900px; height: 500px;"></div> -->


                        

                            <div id="chart_div"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- calculation section end-->
    </div>

    <!--====================  brand logo area ====================-->

    <!--====================  End of brand logo area  ====================-->
  <?php include('footer.php'); ?>
    <!--====================  End of footer area  ====================-->
    <!--=======  offcanvas mobile menu  =======-->

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
    <script src="assets/js/plugins/validation.js"></script>
    <!-- Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from avobe) -->

    <!--
<script src="assets/js/plugins/plugins.min.js"></script>
-->

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
<style>
.red-border{
    border: 1px solid red;
}
</style>

</body>

</html>
