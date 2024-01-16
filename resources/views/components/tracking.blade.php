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
                            <form class="form-group" action="{{route('customer.package.index')}}">
                            <div class="subscribe-input">
                                <input type="text" name="tracking_code" placeholder="ENTER TRACKING ID"
                                    required />
                            </div>
                            <div class="tj-theme-button">
                                <button class="tj-submit-btn" type="submit" value="submit">
                                    Track <i class="flaticon-right-1"></i>
                                </button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Tracking Section End =========-->