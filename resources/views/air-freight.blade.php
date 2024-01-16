@extends('layouts.about')
@section('title', 'Air Freight')

@section('content')
    <!--========== breadcrumb Start ==============-->
    <section class="breadcrumb-wrapper" data-bg-image="assets/images/banner/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h1 class="breadcrumb-title text-center">AIR FREIGHT FORWARDING</h1>
                        <div class="breadcrumb-link">
                            <span>
                                <a href="index.html">
                                    <span>Home</span>
                                </a>
                            </span>
                            >
                            <span>
                                <span> Services</span>
                            </span>
                            >
                            <span>
                                <span> Air Freight</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--========== breadcrumb End ==============-->

    <!--========== details Start ==============-->
    <section class="tj-project-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="project-details-wrapper">
                        <div class="tj-project-widget tj-project-image">
                            <a href="#">
                                <img src="assets/images/project/project-7.jpg" alt="Project" /></a>

                        </div>
                        <div class="tj-project-widget project-content-area">
                            <h3>
                                <a class="title-link" href="air-freight.html">
                                    Air Freight Forwarding</a>
                            </h3>
                            <p>
                                Airfreight can reduce the total logistics cost for urgent or time-critical logistical
                                challenges. By combining the speed of air with the cost savings of other modes, backed
                                by smooth and efficient customs and administrative procedures, customers can enjoy the
                                best of both worlds; reducing inventory and improving their own service offer with
                                faster response times at affordable cost.
                            </p>
                        </div>
                        <div class="tj-project-widget row align-items-center">
                            <div class="col-lg-5">
                                <div class="check-image">
                                    <img src="assets/images/service/service-8.jpg" alt="Project" />
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="check-list">
                                    <h3 class="title">GLOBAL EXPRESS SHIPPING</h3>
                                    <p>
                                        On selected high volume trade lanes, AsusXpress operates a hub and gateway
                                        network, using our own controlled capacity through our in-house carrier. By
                                        careful selection of airports, and by using our own staff, we can ensure
                                        services that are frequent, cost-effective and highly reliable. We also offers
                                        airfreight services through our global network of offices. Most of our volume is
                                        routed through strategic partners with whom we have deep and longstanding
                                        relationships. This enables us to secure capacity, control costs and attain high
                                        service levels.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tj-project-widget row align-items-center">
                            <div class="col-lg-12">
                                <div class="check-list">
                                    <h3 class="title">SECURITY</h3>
                                    <p>
                                        Security is of course our number one priority in airfreight, at our own hubs and
                                        at all the other facilities we use. All our hub/gateway warehouses are TAPA ‘A’
                                        and/or C-TPAT certified. We make extensive use of CCTV, and where possible we
                                        build our own units supported by photographic evidence of seals and ULD numbers.
                                        Pallets are check weighed at origin and destination. Our robust and
                                        comprehensive information systems also ensure that security authorities are not
                                        confronted with unexpected or non-compliant consignments.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--========== details End ==============-->

    <!--=========== Tracking Section Start =========-->
    <section id="tracking" class="tj-subscribe-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="subscribe-content-box d-flex align-items-center justify-content-between"
                        data-bg-image="assets/images/banner/subscribe.png">
                        <div class="subscribe-content d-flex align-items-center">
                            <div class="mail-icon">
                                <img src="assets/icons/email.svg" alt="Icon" />
                            </div>
                            <div class="subscribe-title">
                                <h3 class="title">Track Your Item</h3>
                            </div>
                        </div>
                        <div class="subscribe-form d-flex align-items-center">
                            <div class="subscribe-input">
                                <input type="text" id="email" name="emailAddress" placeholder="ENTER TRACKING ID"
                                    required="" />
                            </div>
                            <div class="tj-theme-button">
                                <button class="tj-submit-btn" type="submit" value="submit">
                                    Track <i class="flaticon-right-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Tracking Section End =========-->
@endsection