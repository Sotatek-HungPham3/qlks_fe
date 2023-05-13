@extends('index')
@section('title-page', 'Thanh toán')
@section('content')
    <!--Banner-->
    <section class="sub-banner">
        <!--Background-->
        <div class="bg-parallax bg-1"></div>
        <!--End Background-->
        <!-- Logo -->
        <div class="logo-banner text-center">
            <a href="#" title="">
                <img src="images/logo-banner.png" alt="">
            </a>
        </div>
        <!-- Logo -->
    </section>
    <!--End Banner-->
    <!-- Main -->
    <div class="main">
        <div class="container">
            <div class="main-cn bg-white clearfix">
                <div class="step">
                    <!-- Step -->
                    <ul class="payment-step text-center clearfix">
                        <li class="step-select">
                            <span>1</span>
                            <p>Choose Your Room</p>
                        </li>
                        <li class="step-select">
                            <span>2</span>
                            <p>Your Booking &amp; Payment Details</p>
                        </li>
                        <li class="step-select">
                            <span>3</span>
                            <p>Booking Completed!</p>
                        </li>
                    </ul>
                    <!-- ENd Step -->
                </div>
                <!-- Payment Room -->
                <div class="payment-room">
                    <div class="row message" style="text-align: center; padding-top: 5em;">

                    </div>
                </div>
                <!-- Payment Room -->

            </div>
        </div>
    </div>
    <!-- End Main -->

    <!-- Confidence and Subscribe  -->
    <section class="confidence-subscribe">
        <!-- Background -->
        <div class="bg-parallax bg-3"></div>
        <!-- End Background -->
        <div class="container">
            <div class="row cs-sb-cn">

                <!-- Confidence -->
                <div class="col-md-6">
                    <div class="confidence">
                        <h3>Book with confidence</h3>
                        <ul>
                            <li>
                                <span class="label-nb">01</span>
                                <h5>No booking charges</h5>
                                <p>We don't charge you an extra fee for booking a hotel room with us</p>
                            </li>
                            <li>
                                <span class="label-nb">02</span>
                                <h5>No cancellation fees</h5>
                                <p>We don't charge you a cancellation or modification fee in case plans change</p>
                            </li>
                            <li>
                                <span class="label-nb">03</span>
                                <h5>Instant confirmation</h5>
                                <p>Instant booking confirmation whether booking online or via the telephone</p>
                            </li>
                            <li>
                                <span class="label-nb">04</span>
                                <h5>Flexible booking</h5>
                                <p>You can book up to a whole year in advance until the moment of your stay</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End Confidence -->
                <!-- Subscribe -->
                <div class="col-md-6">
                    <div class="subscribe">
                        <h3>Subscribe to our newsletter</h3>
                        <p>Enter your email address and we’ll send you our regular promotional emails, packed with
                            special offers, great deals, and huge discounts</p>
                        <!-- Subscribe Form -->
                        <div class="subscribe-form">
                            <form action="#" method="get">
                                <input type="text" name="" value="" placeholder="Your email" class="subscribe-input">
                                <button type="submit"
                                        class="awe-btn awe-btn-5 arrow-right text-uppercase awe-btn-lager">subcrible
                                </button>
                            </form>
                        </div>
                        <!-- End Subscribe Form -->
                        <!-- Follow us -->
                        <div class="follow-us">
                            <h4>Follow us</h4>
                            <div class="follow-group">
                                <a href="#" title=""><i class="fa fa-facebook"></i></a>
                                <a href="#" title=""><i class="fa fa-twitter"></i></a>
                                <a href="#" title=""><i class="fa fa-pinterest"></i></a>
                                <a href="#" title=""><i class="fa fa-linkedin"></i></a>
                                <a href="#" title=""><i class="fa fa-instagram"></i></a>
                                <a href="#" title=""><i class="fa fa-google-plus"></i></a>
                                <a href="#" title=""><i class="fa fa-digg"></i></a>
                            </div>
                        </div>
                        <!-- Follow us -->
                    </div>
                </div>
                <!-- End Subscribe -->

            </div>
        </div>
    </section>
    <!-- End Confidence and Subscribe  -->
@endsection

@section('js')
    <script>
        $(document).ready(function () {
            let code = '{{ $vnp_ResponseCode }}';
            localStorage.removeItem(BOOKING);
            localStorage.removeItem(KEY_VNPAY);
            let str = '';
            if (code === '00') {
                str = `<span style="color: green; font-size: 3em; "> Booking successfully!! </span> <br>
 <span style="padding-top: 1em; padding-bottom: 2em">Please check your email.</span> <br>
<button class="btn btn-success backHome" onclick="returnHome()">Go Home</button>
                        `;
            } else {
                str = `<span style="color: red; font-size: 3em; "> Booking fail!! </span> <br>
            <span style="padding-top: 1em; padding-bottom: 2em">Please check again your payments.</span> <br>
                        <a class="btn btn-danger backHome" onclick="returnHome()">Go Home</a>
                        `;
            }
            $('.message').html(str);
        });

        function returnHome() {
            window.location.href = DOMAIN_FE;
        }
    </script>
@endsection
