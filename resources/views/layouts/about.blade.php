<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Meta Tag -->
    <meta charset="utf-8" />
    <title>AsussXpress - @yield('title')</title>
    <meta name="description" content="" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
    <!-- Bootstrap  v5.1.3 css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!-- Meanmenu  css -->
    <link rel="stylesheet" href="assets/css/meanmenu.css" />
    <!-- Sal css -->
    <link rel="stylesheet" href="assets/css/sal.css" />
    <!-- Magnific css -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css" />
    <!-- Swiper Slider css -->
    <link rel="stylesheet" href="assets/css/swiper.min.css" />
    <!-- Carousel css file -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css" />
    <!-- Icons css -->
    <link rel="stylesheet" href="assets/css/icons.css" />
    <!-- Odometer css -->
    <link rel="stylesheet" href="assets/css/odometer.min.css" />
    <!-- Select css -->
    <link rel="stylesheet" href="assets/css/nice-select.css" />
    <!-- Animate css -->
    <link rel="stylesheet" href="assets/css/animate.css" />
    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- Responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <link rel="stylesheet" href="assets/css/package-page.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
     <!-- Preloader start -->
     <div id="preloader" class="preloader" style="background-color: #f7f5ec">
        <div class="animation-preloader">
                    <img src="assets/images/ship-loading.gif" alt="" height="70" width="150" />
        </div>
    </div>
    <!-- Preloader end -->
    <!-- Offcanvas Area Start-->
    <div id="tj-overlay-bg2" class="tj-overlay-canvas"></div>
    <div class="tj-offcanvas-area">
        <div class="tj-offcanvas-header d-flex align-items-center justify-content-between">
            <div class="logo-area text-center">
                <a href="/"><img height="50" src="assets/images/asus.jpeg" alt="Logo" /></a>
            </div>
            <div class="offcanvas-icon">
                <a id="canva_close">
                    <i class="fa fa-times"></i>
                </a>
            </div>
        </div>
        <div class="tj-search-box">
            <form  action="{{route('customer.package.index')}}" method="GET">
                <input type="text" class="form-control-1" name="tracking_code" required placeholder="ENTER TRACKING ID" />
                <button class="btn btn-success btn-xs"> <i class="fa fa-search"></i></button>
            </form>
        </div>
        <!-- Canvas Mobile Menu start -->
        <nav class="right_menu_togle mobile-navbar-menu d-lg-none" id="mobile-navbar-menu"></nav>

        <!-- Canvas Menu end -->
        <div class="contact-info-list">
            <h4 class="offcanvas-title">Contact info</h4>
            <div class="contact-box contact-box1">
                <div class="contact-icon">
                    <i class="flaticon-email-2"></i>
                </div>
                <div class="contact-link">
                    <span class="d-block"> Email us:</span>
                    <a href="mailto:support@AsussXpress.com"> support@AsussXpress.com</a>
                </div>
            </div>
            <div class="contact-box">
                <div class="contact-icon">
                    <i class="flaticon-telephone"></i>
                </div>
                <div class="contact-link">
                    <span class="d-block"> Call us:</span>
                    <a href="tel:+1 (985) 240-9084">+1 (985) 240-9084</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Offcanvas Area End-->

    <!--========== Header Section Start ==============-->
    <header class="tj-header-section" id="header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bg-color d-flex flex-wrap">
                        <!-- Logo Area Start -->
                        <div class="logo-area">
                            <div class="logo-box">
                                <a href="/"><img height="80" src="assets/images/logo/logo.jpeg" alt="Logo" /></a>
                            </div>
                        </div>
                        <!-- Logo Area End -->

                        <div class="header-content-area">
                            <!-- Topbar Section Start -->
                            <div class="header-topbar">
                                <div
                                    class="topbar-content-area d-flex flex-wrap align-items-center justify-content-between">
                                    <div class="header-content-left">
                                        <span> Mon - Sat: 8 am - 5 pm, Sunday: Closed</span>
                                    </div>

                                </div>
                            </div>
                            <!-- Topbar Section End-->

                            <!-- Header menu Start -->
                            <div class="header-content d-flex flex-wrap align-items-center justify-content-between">
                                <div class="mobile-logo-area d-lg-none">
                                    <a href="/"><img height="50" src="assets/images/asus.jpeg" alt="Logo" /></a>
                                </div>
                                <!-- Mainmenu Item Start -->
                                <div class="tj-main-menu d-lg-block d-none text-end" id="main-menu">
                                    <ul class="main-menu">
                                        <li class="">
                                            <a href="/"> Home</a>
                                        </li>
                                        <li class="ab-gap current-menu-item">
                                            <a class="active" href="/about"> About Us</a>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a> Service</a>
                                            <ul class="list-gap sub-menu-list">
                                            <li><a href="/air-freight">AIR FREIGHT FORWARDING</a></li>
                                            <li><a href="/ocean-freight">OCEAN FREIGHT FORWARDING</a></li>
                                            <li><a href="/road-freight">ROAD FREIGHT FORWARDING</a></li>
                                            <li><a href="/ware-housing-and-storage">WAREHOUSING AND STORAGE</a></li>
                                        </ul>
                                        </li>
                                        <li><a href="/contact">Contact</a></li>
                                    </ul>
                                </div>
                                <!-- Mainmenu Item End -->

                                <div class="header-menu-select d-flex align-items-center justify-content-end">
                                    <div class="tj-header-button d-none d-lg-block">
                                        <a class="tj-header-btn" href="#tracking">
                                            Track <i class="flaticon-right-1"></i>
                                        </a>
                                    </div>
                                    <div class="tj-hambagur-icon d-lg-none">
                                        <a class="canva_expander nav-menu-link menu-button" href="#">
                                            <span class="dot1"></span>
                                            <span class="dot2"></span>
                                            <span class="dot3"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Header end End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--========== Header Section End ==============-->

    @yield('content')
    <!--=========== Footer Section Start =========-->
    <footer class="tj-footer-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget footer1_col_1 footer-content-info"
                        data-bg-image="assets/images/banner/footer-shape.png">
                        <a href="/"> <img height="80" src="assets/images/logo/logo.png" alt="Logo" /></a>
                        <p>
                        AsussXpress is a global supplier of transport and logistics solutions. We have offices in more than 70 countries and an international network of partners and agents.
                        </p>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget footer1_col_2 widget_nav_menu">
                        <div class="footer-title">
                            <h5 class="title">Our Services</h5>
                        </div>
                        <div class="widget-menu">
                        <ul>
                                <li>
                                    <a href="/air-freight"> <i class="flaticon-plus"></i> Air Freight</a>
                                </li>
                                <li>
                                    <a href="/ocean-freight"> <i class="flaticon-plus"></i> Ocean Freight</a>
                                </li>
                                <li>
                                    <a href="/road-freight"> <i class="flaticon-plus"></i> Road Freight</a>
                                </li>
                                <li>
                                    <a href="/ware-housing-and-storage"> <i class="flaticon-plus"></i> Warehousing and Storage</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget footer1_col_4 footer-contact-info">
                        <div class="footer-title">
                            <h5 class="title">Contact Info</h5>
                        </div>
                        <div class="widget-contact">
                            <div class="contact-list">
                                <ul class="list-gap">
                                    <li>
                                        <i class="flaticon-phone-call"></i>
                                        <a href="tel:+1 (985) 240-9084"> +1 (985) 240-9084</a>
                                    </li>
                                    <li>
                                        <i class="flaticon-email-2"></i>
                                        <a href="mailto:support@AsussXpress.com"> support@AsussXpress.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copyright-area">
                            <div class="copyright-target">
                                <p>
                                    Copyright © 2023 <a href="/"> AsussXpress. </a> All Rights
                                    Reserved.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--=========== Footer Section End =========-->

    <!-- start scrollUp  -->
    <div class="logiland-scroll-top progress-done">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="
                        transition: stroke-dashoffset 10ms linear 0s;
                        stroke-dasharray: 307.919px, 307.919px;
                        stroke-dashoffset: 71.1186px;
                    "></path>
        </svg>
        <div class="logiland-scroll-top-icon">
            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em"
                viewBox="0 0 24 24" data-icon="mdi:arrow-up" class="iconify iconify--mdi">
                <path fill="currentColor" d="M13 20h-2V8l-5.5 5.5l-1.42-1.42L12 4.16l7.92 7.92l-1.42 1.42L13 8v12Z">
                </path>
            </svg>
        </div>
    </div>
    <!-- End scrollUp  -->

    <x-ticker/>
    <!-- Modernizr.JS -->
    <script src="assets/js/modernizr-2.8.3.min.js"></script>
    <!-- jQuery.min JS -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Bootstrap.min JS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Meanmenu JS -->
    <script src="assets/js/meanmenu.js"></script>
    <!-- Imagesloaded JS -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- Isotope JS -->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- Magnific JS -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Swiper.min JS -->
    <script src="assets/js/swiper.min.js"></script>
    <!-- Owl.min JS -->
    <script src="assets/js/owl.carousel.js"></script>
    <!-- Appear JS -->
    <script src="assets/js/jquery.appear.min.js"></script>
    <!-- Odometer JS -->
    <script src="assets/js/odometer.min.js"></script>
    <!-- Sal JS -->
    <script src="assets/js/sal.js"></script>
    <!-- Nice JS -->
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
</body>

<script>
        //on load, set the z-index of the white class
        $(function() {
            //set the z index of the white class to 10
            $('.white').css('z-index', 10)
            console.log('white')
        })
    </script>

<script>
   //wait for the page to load, then wait one more second
   $(document).ready(function() {
    setTimeout(function() {
    
  // Get all elements with the class 'scaling-svg'
  const svgElements = document.querySelectorAll('.fa-shipping-fast');
    console.log(svgElements);
  // Add the 'scaled' class to the last SVG element
  svgElements[svgElements.length - 1].classList.add('scaled');
}, 1000);
});
</script>
</html>