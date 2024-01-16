@extends('layouts.about')
@section('title', 'About')

@section('content')
    <!--========== breadcrumb Start ==============-->
    <section class="breadcrumb-wrapper" data-bg-image="assets/images/banner/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h1 class="breadcrumb-title text-center">About Us</h1>
                        <div class="breadcrumb-link">
                            <span>
                                <a href="index.html">
                                    <span>Home</span>
                                </a>
                            </span>
                            >
                            <span>
                                <span> About</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--========== breadcrumb End ==============-->

    <!--=========== About Section Start =========-->
    <section class="tj-about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape"> Logistics Company</span>
                            <h2 class="title">About Our Corporation</h2>
                            <p class="desc">
                                AsusXpress is a world leading provider of logistics, freight forwarding and supply
                                chain management services. Our focus is on simplifying complex supply chains, uncovering
                                efficiency improvements that enable our customers to cut their inventories, reducing
                                operating costs, and making significant short-term savings for long-term
                                competitiveness.<br><br>
                                We work to connect and simplify our customers’ supply chains. As the global leader in
                                shipping services, the company operates in 72 countries and employs roughly 800 people.


                            </p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6" data-sal="slide-right" data-sal-duration="800">
                    <div class="about-group-image d-flex flex-wrap align-items-start flex-column">
                        <div class="tj-icon-box2 text-center">
                            <div class="number-icon">
                                <i class="flaticon-in-person"></i>
                            </div>
                            <div class="about-number">
                                <div class="tj-count"><span class="odometer" data-count="6800">0</span></div>
                                <p class="desc">Satisfied Client</p>
                            </div>
                        </div>
                        <div class="image-box">
                            <img class="p-z-idex" src="assets/images/about/ab-1.jpg" alt="Image" />
                        </div>
                        <img class="group-1 p-z-idex" src="assets/images/about/ab-2.jpg" alt="Image" />
                        <img class="group-shape" src="assets/images/about/ab-shape.png" alt="Image" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== About Section End =========-->

    <!--=========== Cta Section Start =========-->
    <section class="tj-cta-section icon-animate">
        <div class="cta-inner" data-bg-image="assets/images/cta/cta-1.jpg"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="cta-content-area">
                        <div class="cta-content">
                            <div class="cta-icon">
                                <i class="flaticon flaticon-freight"></i>
                            </div>
                            <div class="cta-text">
                                <h3 class="title">Ready to work with us?</h3>
                                <p class="desc">You are just a click away. Get in touch with us now!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 position-relative">
                    <div class="tj-theme-button">
                        <a class="tj-transparent-btn" href="contact.html">
                            GET IN TOUCH <i class="flaticon-right-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Cta Section End =========-->

    <!--=========== Testimonial Section Start =========-->
    <section class="tj-testimonial-section tj-testimonial-page">
        <div class="container">
            <div class="row">
                <div class="tj-section-heading text-center">
                    <span class="sub-title active-shape"> Client Feedback</span>
                    <h2 class="title">Our Client Reviews</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="swiper tj-testimonial-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="tj-testimonial-item">
                                    <div class="testimonial-rating d-flex justify-content-between">
                                        <div class="testimoniasl-image">
                                            <img src="assets/images/testimonial/test.png" alt="Image" />
                                        </div>
                                        <div class="rating-icon">
                                            <ul class="list-gap">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="content-area">
                                        <p>
                                            The shipping process with this crew was a pleasurable experience! They did
                                            all in time and with no safety incidents. Thank you so much guys!
                                        </p>
                                        <div class="testimonial-content d-flex justify-content-between">
                                            <div class="testimonial-auother">
                                                <h5 class="title">Greg Anderson</h5>
                                                <span class="sub-title"> VIP Construction, Austrialia</span>
                                            </div>
                                            <div class="testimonial-comment">
                                                <img src="assets/icons/comment.svg" alt="Icon" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tj-testimonial-item">
                                    <div class="testimonial-rating d-flex justify-content-between">
                                        <div class="testimoniasl-image">
                                            <img src="assets/images/testimonial/test1.png" alt="Image" />
                                        </div>
                                        <div class="rating-icon">
                                            <ul class="list-gap">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="content-area">
                                        <p>
                                            These guys are just the coolest logistics company ever! They exceptionally handled our complex road freight services.
                                        </p>
                                        <div class="testimonial-content d-flex justify-content-between">
                                            <div class="testimonial-auother">
                                                <h5 class="title">Adams Kenneth</h5>
                                                <span class="sub-title"> CFD Engineer</span>
                                            </div>
                                            <div class="testimonial-comment">
                                                <img src="assets/icons/comment.svg" alt="Icon" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Testimonial Section End =========-->

    <!--========== Faq Section Start ==============-->
    <section class="tj-faq-section">
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
    <x-tracking />

@endsection