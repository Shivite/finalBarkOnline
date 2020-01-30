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
    <div class="breadcrumb-area bg-img" data-bg="assets/img/projects/backgrounds/funfact-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page-banner text-center">
                        <h1>Ongoing Projects</h1>
                        <ul class="page-breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li>Ongoing Projects</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--====================  End of breadcrumb area  ====================-->
    <!--====================  End of breadcrumb area  ====================-->
    <div class="page-wrapper section-space--inner--120">
        <!--Projects section start-->
        <div class="project-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="project-item-wrapper">
                            <div class="row">
                                <div class="col-lg-4 col-sm-6 col-12 section-space--bottom--30">
                                    <div class="service-grid-item service-grid-item--style2">
                                        <div class="service-grid-item__image">
                                            <div class="service-grid-item__image-wrapper">
                                                <a href="picasso-floors.php">
                                                    <img src="assets/img/projects/picassofloors.jpg" class="img-fluid" alt="">
                                                </a>
                                            </div>

                                        </div>
                                        <div class="service-grid-item__content">
                                            <h3 class="title">
                                                <a href="picasso-floors.php">Picasso Floors</a>
                                            </h3>
                                            <p class="subtitle">PNB Picasso Floors is located at Sector 127...</p>
                                            <a href="picasso-floors.php" class="see-more-link">SEE MORE</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-6 col-12 section-space--bottom--30">
                                    <div class="service-grid-item service-grid-item--style2">
                                        <div class="service-grid-item__image">
                                            <div class="service-grid-item__image-wrapper">
                                                <a href="noor-homes.php">
                                                    <img src="assets/img/projects/noorhomes.jpg" class="img-fluid" alt="">
                                                </a>
                                            </div>

                                        </div>
                                        <div class="service-grid-item__content">
                                            <h3 class="title">
                                                <a href="noor-homes.php">Noor Homes</a>
                                            </h3>
                                            <p class="subtitle">PNB Noor Homes is located at Sector 115...</p>
                                            <a href="noor-homes.php" class="see-more-link">SEE MORE</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-6 col-12 section-space--bottom--30">
                                    <div class="service-grid-item service-grid-item--style2">
                                        <div class="service-grid-item__image">
                                            <div class="service-grid-item__image-wrapper">
                                                <a href="/mileniofloors.php">
                                                    <img src="assets/img/projects/mileniofloors.jpg" class="img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="service-grid-item__content">
                                            <h3 class="title">
                                                <a href="/milenio-floors.php">Milenio Floors</a>
                                            </h3>
                                            <p class="subtitle">PNB Milenio Floors is an ideal situated on Sector 116 Kharar...</p>
                                            <a href="/milenio-floors.php" class="see-more-link">SEE MORE</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row section-space--top--60">
                    <div class="col">
                        <ul class="page-pagination">
                            <li><a href="#"><i class="fa fa-angle-left"></i> Prev</a></li>
                            <li class="active"><a href="#">01</a></li>
                            <!-- <li><a href="#">02</a></li>
                            <li><a href="#">03</a></li> -->
                            <li><a href="#"><i class="fa fa-angle-right"></i> Next</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <!--Projects section end-->
    </div>
    <!--====================  brand logo area ====================-->
    <?php include('brand-slider.php');
          include('footer.php');
    ?>
    <div class="offcanvas-mobile-menu" id="mobile-menu-overlay">
        <a href="javascript:void(0)" class="offcanvas-menu-close" id="mobile-menu-close-trigger">
            <i class="ion-android-close"></i>
        </a>

        <div class="offcanvas-wrapper">

            <div class="offcanvas-inner-content">
                <div class="offcanvas-mobile-search-area">
                    <form action="#">
                        <input type="search" placeholder="Search ...">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <nav class="offcanvas-navigation">
                    <ul>
                        <li class="menu-item-has-children">
                            <a href="#">Home</a>
                            <ul class="sub-menu">
                                <li><a href="index.html">Homepage One</a></li>
                                <li><a href="index-2.html">Homepage Two</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">About</a></li>
                        <li class="menu-item-has-children">
                            <a href="service.html">Service</a>
                            <ul class="sub-menu">
                                <li><a href="service.html">Service Page</a></li>
                                <li><a href="service-details.html">Service Details Left Sidebar</a></li>
                                <li><a href="service-details-right-sidebar.html">Service Details Right Sidebar</a></li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children">
                            <a href="javascript:void(0)">Project</a>
                            <ul class="sub-menu">
                                <li><a href="project.html">Project Page</a></li>
                                <li><a href="project-details.html">Project Details</a></li>
                                <li class="menu-item-has-children">
                                    <a href="#">Submenu Level One</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="#">Submenu Level Two</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Submenu Level Three</a></li>
                                                <li><a href="#">Submenu Level Three</a></li>
                                                <li><a href="#">Submenu Level Three</a></li>
                                                <li><a href="#">Submenu Level Three</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Submenu Level Two</a></li>
                                        <li><a href="#">Submenu Level Two</a></li>
                                        <li><a href="#">Submenu Level Two</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Submenu Level One</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="#">Submenu Level Two</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Submenu Level Three</a></li>
                                                <li><a href="#">Submenu Level Three</a></li>
                                                <li><a href="#">Submenu Level Three</a></li>
                                                <li><a href="#">Submenu Level Three</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Submenu Level Two</a></li>
                                        <li><a href="#">Submenu Level Two</a></li>
                                        <li><a href="#">Submenu Level Two</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="javascript:void(0)">Blog</a>
                            <ul class="sub-menu">
                                <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                <li><a href="blog-details-left-sidebar.html">Blog Details Left Sidebar</a></li>
                                <li><a href="blog-details-right-sidebar.html">Blog Details Right Sidebar</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>



                <div class="offcanvas-widget-area">
                    <div class="off-canvas-contact-widget">
                        <div class="header-contact-info">
                            <ul class="header-contact-info__list">
                                <li><i class="ion-android-phone-portrait"></i> <a href="tel://12452456012">(1245) 2456 012 </a></li>
                                <li><i class="ion-android-mail"></i> <a href="mailto:info@yourdomain.com">info@yourdomain.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--Off Canvas Widget Social Start-->
                    <div class="off-canvas-widget-social">
                        <a href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" title="Twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" title="LinkedIn"><i class="fa fa-linkedin"></i></a>
                        <a href="#" title="Youtube"><i class="fa fa-youtube-play"></i></a>
                        <a href="#" title="Vimeo"><i class="fa fa-vimeo-square"></i></a>
                    </div>
                    <!--Off Canvas Widget Social End-->
                </div>
            </div>
        </div>

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

    <!-- Mailchimp JS -->
    <script src="assets/js/plugins/mailchimp-ajax-submit.min.js"></script>

    <!-- Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from avobe) -->

    <!--
<script src="assets/js/plugins/plugins.min.js"></script>
-->

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>


</body>

</html>
