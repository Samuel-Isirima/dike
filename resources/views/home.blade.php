<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Meta Tag -->
    <meta charset="utf-8" />
    <title>Welcome to AsusXpress</title>
    <meta name="description" content="" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="assets/images/fav.svg" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.svg" />

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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    
    <!-- Preloader start -->
    <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner">
                <div class="loader-icon">
                    <!-- <img src="assets/images/logo/loder.png" alt="" /> -->
                </div>
            </div>
            <div class="txt-loading">
                <span data-text-preloader="A" class="letters-loading"> A </span>
                <span data-text-preloader="s" class="letters-loading"> s </span>
                <span data-text-preloader="u" class="letters-loading"> u </span>
                <span data-text-preloader="s" class="letters-loading"> s </span>
                <span data-text-preloader="X" class="letters-loading"> X </span>
                <span data-text-preloader="p" class="letters-loading"> p </span>
                <span data-text-preloader="r" class="letters-loading"> r </span>
                <span data-text-preloader="e" class="letters-loading"> e </span>
                <span data-text-preloader="s" class="letters-loading"> s </span>
                <span data-text-preloader="s" class="letters-loading"> s </span>
            </div>
        </div>
    </div>
    <!-- Preloader end -->

    <!-- Offcanvas Area Start-->
    <div id="tj-overlay-bg2" class="tj-overlay-canvas"></div>
     
    <div class="tj-offcanvas-area">
        <div class="tj-offcanvas-header d-flex align-items-center justify-content-between">
            <div class="logo-area text-center">
                <a href="/"><img height="80" src="assets/images/logo/logo.jpeg" alt="Logo" /></a>
            </div>
            <div class="offcanvas-icon">
                <a id="canva_close">
                    <i class="fa fa-times"></i>
                </a>
            </div>
        </div>
        <div class="tj-search-box">
            <form action="{{route('customer.package.index')}}">
                <input type="text" class="form-control-1" name="tracking_code" id="tracking_code" placeholder="ENTER TRACKING CODE" required/>
                <button class="btn btn-xs"> <i class="fa fa-search"></i></button>
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
                    <a href="mailto:support@AsusXpress.com"> support@AsusXpress.com</a>
                </div>
            </div>
            <div class="contact-box">
                <div class="contact-icon">
                    <i class="flaticon-telephone"></i>
                </div>
                <div class="contact-link">
                    <span class="d-block"> Call us:</span>
                    <a href="tel:+1800-456-7890"> +1800-456-7890</a>
                </div>
            </div>
        </div>
        
    </div>
    <!-- Offcanvas Area End-->

    <!-- start: Search Popup -->
    <section class="search_popup">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="search_wrapper">
                        <div class="search_top d-flex justify-content-between align-items-center">
                            <div class="search_logo">
                                <a href="/">
                                    <img height="80" src="assets/images/logo/logo.png" alt="logo" />
                                </a>
                            </div>
                            <div class="search_close">
                                <a class="search_close_btn"> <i class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <div class="search_form">
                            <form  action="{{route('customer.package.index')}}" method="GET">
                                <div class="search_input">
                                    <input class="search-input-field" name="tracking_code" type="text"
                                        placeholder="ENTER TRACKING ID" required />
                                    <span class="search-focus-border"></span>
                                    <button class="btn btn-xs"> <i class="flaticon-loupe"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="search-popup-overlay"></div>
    <!-- end: Search Popup -->

    <!--========== Header Section Start ==============-->
    <header class="header-section-three" id="header-sticky">
        <!-- header menu Start -->
        <div class="tj-header-menu-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="header-menu-area">
                            <div class="logo-box">
                                <a href="/"><img height="50" src="assets/images/logo/logo.png" alt="Logo" /></a>
                            </div>
                            <!-- Mainmenu Item Start -->
                            <div class="tj-main-menu d-lg-block d-none text-end" id="main-menu">
                                <ul class="main-menu">
                                    <li class="active current-menu-item">
                                        <a class="active" href="/"> Home</a>
                                    </li>
                                    <li>
                                        <a href="/about"> About Us</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a> Services</a>
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

                            <div class="menu-search-box d-flex align-items-center">
                                <div class="header_searce d-none d-lg-block">
                                    <button class="search-btn"><i class="flaticon-loupe"></i></button>
                                </div>
                                <div class="tj-hambagur-icon d-lg-none">
                                    <a class="canva_expander nav-menu-link menu-button" href="#">
                                        <span class="dot1"></span>
                                        <span class="dot2"></span>
                                        <span class="dot3"></span>
                                    </a>
                                </div>
                                <div class="hambugar-icon d-none d-lg-block">
                                    <a class="canva_expander" href="#">
                                        <i class="flaticon-menu"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Header end End -->
                </div>
            </div>
        </div>
        <!-- header menu Start -->
    </header>
    <!--========== Header Section End ==============-->

    <!--========== Slider Section Start ==============-->
    <section class="tj-slider-section-three">
        <div class="slider_shape2"><img src="assets/images/banner/shape-2.png" alt="Image" /></div>
        <div class="swiper thumb-slider2">
            <div class="swiper-wrapper">
                <div class="swiper-slide tj-bg-layer" data-bg-image="assets/images/slider/slider-3.jpg">
                    <div class="container container-two">
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <div class="slider-content p-z-idex">
                                    <div class="slider-client">
                                        <div class="client-wrapper">
                                            <img src="assets/images/team/author-2.jpg" alt="Image" />
                                            <img src="assets/images/team/author-3.jpg" alt="Image" />
                                            <img src="assets/images/team/author-4.jpg" alt="Image" />
                                            <img src="assets/images/team/author-5.jpg" alt="Image" />
                                        </div>
                                        <div class="client-auother">
                                            <p>Trusted by Clients</p>
                                        </div>
                                    </div>
                                    <h1 class="slider-title">PROVIDING FIRST CLASS
                                        LOGISTICS SERVICES REGARDLESS OF YOUR INDUSTRY, YOUR COMMODITY OR KEY MARKETS
                                    </h1>
                                    <div class="tj-theme-button">
                                        <a class="tj-transparent-btn" href="/about">
                                            Read More <i class="flaticon-right-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="swiper-slide tj-bg-layer" data-bg-image="assets/images/slider/slider-4.jpg">
                    <div class="container container-two">
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <div class="slider-content p-z-idex">
                                    <div class="slider-client">
                                        <div class="client-wrapper">
                                            <img src="assets/images/team/author-2.jpg" alt="Image" />
                                            <img src="assets/images/team/author-3.jpg" alt="Image" />
                                            <img src="assets/images/team/author-4.jpg" alt="Image" />
                                            <img src="assets/images/team/author-5.jpg" alt="Image" />
                                        </div>
                                        <div class="client-auother">
                                            <p>Trusting Clients</p>
                                        </div>
                                    </div>
                                    <h1 class="slider-title">PROVIDING WORLD CLASS
                                        SHIPPING SERVICES. WE PACKAGE AND STORE YOUR SHIPMENTS EFFECTIVELY AND SECURELY.
                                    </h1>
                                    <div class="tj-theme-button">
                                        <a class="tj-transparent-btn" href="/about">
                                            Read More <i class="flaticon-right-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5"></div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide tj-bg-layer" data-bg-image="assets/images/slider/slider-5.jpg">
                    <div class="slide-image sc-image-layer"></div>
                    <div class="container container-two">
                        <div class="row align-items-center">
                            <div class="col-lg-7">
                                <div class="slider-content p-z-idex">
                                    <div class="slider-client">
                                        <div class="client-wrapper">
                                            <img src="assets/images/team/author-2.jpg" alt="Image" />
                                            <img src="assets/images/team/author-3.jpg" alt="Image" />
                                            <img src="assets/images/team/author-4.jpg" alt="Image" />
                                            <img src="assets/images/team/author-5.jpg" alt="Image" />
                                        </div>
                                        <div class="client-auother">
                                            <p>Trusting Clients</p>
                                        </div>
                                    </div>
                                    <h1 class="slider-title">GET EXPRESS COURIER DELIVERY FROM THE SPECIALISTS IN
                                        INTERNATIONAL SHIPPING.</h1>
                                    <div class="tj-theme-button">
                                        <a class="tj-transparent-btn" href="/about">
                                            Read More <i class="flaticon-right-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper thumb-slider">
            <div class="swiper-wrapper thumb_slider">
                <div class="swiper-slide thumb_slide">
                    <img src="assets/images/banner/arrow-image.png" alt="Icons" />
                </div>
                <div class="swiper-slide thumb_slide">
                    <img src="assets/images/banner/arrow-image2.png" alt="Icons" />
                </div>
                <div class="swiper-slide thumb_slide">
                    <img src="assets/images/banner/arrow-image3.png" alt="Icons" />
                </div>
            </div>
        </div>
    </section>
    <!--========== Slider Section End ==============-->

    <!--========== Service Section Start ==============-->
    <section class="tj-service-section-four">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-section-heading text-center">
                        <span class="sub-title active-shape"> What We Do</span>
                        <h2 class="title">Logistics & Transport</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                    <div class="service-item-three">
                        <div class="service-image">
                            <img src="assets/images/service/service-8.jpg" alt="Image" />
                        </div>
                        <div class="service-content">
                            <div class="service-icon">
                                <i class="flaticon-air-freight"></i>
                            </div>
                            <h4><a class="title" href="/air-freight"> Air Freight Service</a></h4>
                            <p>Air freight can reduce the total logistics cost for time-critical logistical
                                challenges.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="400">
                    <div class="service-item-three">
                        <div class="service-image">
                            <img src="assets/images/service/service-9.jpg" alt="Image" />
                        </div>
                        <div class="service-content">
                            <div class="service-icon">
                                <i class="flaticon-cargo-ship-1"></i>
                            </div>
                            <h4><a class="title" href="/ocean-freight"> Ocean Freight</a></h4>
                            <p>Our services range from the coordination of single LCL shipments all the way to
                                multicountry consolidation.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="500">
                    <div class="service-item-three">
                        <div class="service-image">
                            <img src="assets/images/service/service-10.jpg" alt="Image" />
                        </div>
                        <div class="service-content">
                            <div class="service-icon">
                                <i class="flaticon-delivery-van"></i>
                            </div>
                            <h4><a class="title" href="/road-freight"> Road Freight</a></h4>
                            <p>When goods have to be delivered to your customer's door, road freight is still
                                indispensable.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--========== Service Section End ==============-->

    <!--========== Cta Section Start ==============-->
    <section class="tj-cta-section-three">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" data-sal="slide-left" data-sal-duration="800">
                    <div class="tj-cta-left-content">
                        <h3 class="title">WE ARE DEDICATED TO PROVIDE THE BEST SERVICES
                            AT THE LOWEST POSSIBLE COST</p>
                            <div class="tj-theme-button">
                                <a class="tj-primary-btn tj-transparent-btn" href="/about">
                                    Read More <i class="flaticon-right-1"></i>
                                </a>
                            </div>
                    </div>
                </div>
                <div class="col-lg-6" data-sal="slide-right" data-sal-duration="800">
                    <div class="cta-counter-box">
                        <ul class="list-gap list-one">
                            <li>
                                <div class="counter-number">
                                    <div class="tj-count"><span class="odometer" data-count="340,000">0</span></div>
                                    <span class="sub-title">Delivered Packages</span>
                                </div>
                            </li>
                            <li>
                                <div class="counter-number">
                                    <div class="tj-count"><span class="odometer" data-count="68,000">0</span></div>
                                    <span class="sub-title">Satisfied Clients</span>
                                </div>
                            </li>
                            <li>
                                <div class="counter-number">
                                    <div class="tj-count"><span class="odometer" data-count="72">0</span></div>
                                    <span class="sub-title">Countries Covered</span>
                                </div>
                            </li>
                            <li>
                                <div class="counter-number">
                                    <div class="tj-count"><span class="odometer" data-count="50,000">0</span></div>
                                    <span class="sub-title">Tons of Goods</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--========== Cta Section End ==============-->

    <!--========== Faq Section Start ==============-->
    <section class="tj-faq-section mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-section-heading text-center">
                        <span class="sub-title active-shape"> Things To Know</span>
                        <h2 class="title">Frequently Asked Questions</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6" data-sal="slide-left" data-sal-duration="800">
                    <div class="tj-faq-left-content">
                        <div class="faq-image">
                            <img src="assets/images/slider/slider-4.jpg" alt="Image" />
                        </div>
                        <div class="faq-content">
                            <div class="faq-icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="faq-text">
                                <h6 class="title">Freight and Logistics</h6>
                                <p>A logistics partner big enough to deliver freight of any kind, to any place via air,
                                    ocean, road or rail.</p>
                            </div>
                        </div>
                        <div class="faq-content">
                            <div class="faq-icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="faq-text">
                                <h6 class="title">Express Shipping</h6>
                                <p>International Parcel and Document delivery from AsusXpress Express</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-sal="slide-right" data-sal-duration="800">
                    <div class="tj-faq-area">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        What is Logistics Management?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>Logistics management is a function where a company usually consisting of
                                            various shipping and distribution professionals provide services to analyze
                                            a company's supply chain, offer carrier and service options, and provide
                                            continued management of all or some areas of a customer's transportation
                                            needs.</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        DOES IT COST ANYTHING TO DO A FULL ANALYSIS OF OUR SUPPLY CHAIN SERVICES?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>No, we do not charge for our initial analysis. There is absolutely
                                            nothing to lose by having our expert logistics professionals review your
                                            shipping and distribution spend and profile. In most cases we are
                                            compensated by our providers should you utilize our services.</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        WHAT MODES AND SERVICES DOES AsusXpress PROVIDE?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>We offer services for international and domestic freight, LCL shipping,
                                            FCL shipping solutions, freight and parcel audit and reporting, and overall
                                            supply chain management.</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        I AM A SMALL START-UP, CAN AsusXpress HELP ME?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>Yes, we love working with small and emerging companies. ArryCourier
                                            provides the expertise and support to help your company scale.</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">
                                        HOW DO I CHECK THE STATUS OF A SHIPMENT?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>There are multiple ways in which AsusXpress clients can track a
                                            shipment.
                                            1. Customers with a substantial amount of freight coming into their facility
                                            expect their logistics company to provide instant access to their product at
                                            all times. For these customers, they can be granted a portal with
                                            information specific to their business. In this case, clients rarely are
                                            calling your employees and forcing them to spend their valuable time
                                            tracking freight.<br>
                                            2. Customers who do not have a great enough volume to necessitate a portal,
                                            can utilize the search field on the McClain website for instant tracking of
                                            shipments by PO, PRO, shipment, or any other associated number.<br>
                                            3. Regardless of the volume, customers can optionally receive realtime
                                            updates emailed to them regarding their shipment. In addition, customers can
                                            have reports emailed to them on a scheduled or on demand basis with all
                                            freight information.<br>
                                            4. Customers also have the option of calling ArryCourier , providing them
                                            with a PO, PRO, BOL or any other number associated with the shipment to
                                            receive tracking information.<br>
                                            5. If a customer were to call into your facility, your personnel could
                                            quickly and easily log into their portal, and give them the requested
                                            information.</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--========== Faq Section End ==============-->

    <!--========== Why choose us Section Start ==============-->
    <section class="tj-choose-us-section-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="choose-us-top-content">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape2" style="color: white"> Few reasons people choose us</span>
                            <h2 class="title">Reasons Why You Choose Us.</h2>
                        </div>
                        <div class="tj-theme-button">
                            <a class="tj-transparent-btn" href="/about">
                                Read More <i class="flaticon-right-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                    <div class="choose-us-step-item">
                        <div class="choose-step-box">
                            <div class="choose-box"></div>
                            <div class="step-content">
                                <h6 class="title">SECURITY</h6>
                            </div>
                        </div>
                        <p>
                            Our customer service teams focus on specific industries to ensure they understand your
                            business, and are dedicated to increasing the reliability, sustainability and efficiency of
                            your supply chain 24 hours a day.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="400">
                    <div class="choose-us-step-item">
                        <div class="choose-step-box">
                            <div class="choose-box"></div>
                            <div class="step-content">
                                <h6 class="title">FAST DELIVERY</h6>
                            </div>
                        </div>
                        <p>
                            We are passionate about understanding and meeting our customer's needs, both today and in
                            the future, and our people are known for their can-do attitude and willingness to go the
                            extra mile to find the best and most efficient solution to ensure your cargo is delivered on
                            time.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="500">
                    <div class="choose-us-step-item">
                        <div class="choose-step-box">
                            <div class="choose-box"></div>
                            <div class="step-content">
                                <h6 class="title">TRACKABLE</h6>
                            </div>
                        </div>
                        <p>
                            Access to tracking systems that ensure our customers have control and visibility of their
                            supply chains at all times.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--========== Chhose Section End ==============-->

    <!--=========== Footer Section Start =========-->
    <footer class="tj-footer-v3">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="footer-contact-box">
                        <div class="footer-logo">
                            <a href="/"> <img src="assets/images/logo/logo.png" alt="Logo" /></a>
                        </div>
                        <p>
                            AsusXpress is a global supplier of transport and logistics solutions. We have offices in more than 70
                            countries and an international network of partners and agents.
                        </p>
                        <div class="footer-contact-list d-flex align-items-center">
                            <div class="contact-box">
                                <div class="contact-icon">
                                    <i class="flaticon-phone-call"></i>
                                </div>
                                <div class="contact-link">
                                    <span class="sub-title"> Phone Call</span>
                                    <a href="tel:(+01)1234567890"> (+01) 123 456 7890</a>
                                </div>
                            </div>
                            <div class="contact-box">
                                <div class="contact-icon">
                                    <i class="flaticon-email-2"></i>
                                </div>
                                <div class="contact-link">
                                    <span class="sub-title"> Email</span>
                                    <a href="mailto:support@AsusXpress.com"> support@AsusXpress.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="footer-subscribe-box">
                        <h3 class="title">TRACK YOUR ITEM</h3>
                        <div class="footer-form">
                            <form action="{{route('customer.package.index')}}" method="GET">
                            <input type="text" name="tracking_code" placeholder="Tracking ID" required/>
                            <div class="tj-theme-button">
                                <button class="tj-transparent-btn submit-btn2" type="submit" value="submit">
                                    Track <i class="flaticon-right-1"></i>
                                </button>
                            </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright_bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copyright-area footer-copyright-three">
                            <div class="copyright-target">
                                <p>
                                    Copyright © 2023 <a href="/"> AsusXpress. </a> All Rights
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

    <!-- Start scrollUp  -->
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
  <x-ticker/>


    <!-- End scrollUp  -->

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
</html>