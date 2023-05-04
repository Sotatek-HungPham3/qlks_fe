@extends('index')
@section('title-page', 'Chuyến bay')
@section('content')
        <!--Banner-->
        <section class="banner">
            <!--Background-->
            <div class="bg-parallax bg-6"></div>
            <div class="overlay"></div>
            <!--End Background-->
            <div class="container">
                <!-- Banner Content -->
                <div class="banner-cn">
                    <!-- Logo -->
                    <div class="logo-banner text-center">
                        <a href="#" title="">
                            <img src="images/logo-banner.png" alt="">
                        </a>
                    </div>
                    <!-- Logo -->
                    <!-- Category Singer -->
                    <div class="category-singer clearfix">
                        <div class="cate-singer-icon float-left">
                            <h2>Flight</h2>
                            <img src="images/icon-flight.png" alt="">
                        </div>
                        <p>Over <span>150,000</span> flights for you choice</p>
                    </div>
                    <!-- End Category Singer -->
                    <!-- Form Search -->
                    <div class="form-cn form-flight">
                        <h2>Where would you like to go?</h2>
                        <div class="form-search clearfix">
                            <div class="form-field field-from">
                                <label for="flight-from"><span>Flight from:</span> Airport</label>
                                <input type="text" name="flightfrom" id="flight-from" class="field-input">
                            </div>
                            <div class="form-field field-to">
                                <label for="flight-to"><span>To :</span> Country, Airpor</label>
                                <input type="text" id="flight-to" class="field-input">
                            </div>
                            <div class="form-field field-date">
                                <input type="text" class="field-input calendar-input" placeholder="Departing">
                            </div>
                            <div class="form-field field-date">
                                <input type="text" class="field-input calendar-input" placeholder="Returning">
                            </div>
                            <div class="form-field field-select field-adult">
                                <div class="select">
                                    <span>Adults</span>
                                    <select>
                                        <option>Adults</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-field field-select field-children">
                                <div class="select">
                                    <span>Children</span>
                                    <select>
                                        <option>Children</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-submit">
                                <button type="submit" class="awe-btn awe-btn-medium awe-search">Search</button>
                            </div>
                        </div>
                    </div>
                    <!-- End Form Search -->
                </div>
                <!-- End Banner Content -->
            </div>

        </section>
        <!--End Banner-->

        <!-- Flight Deals -->
        <section class="cruise-deals">
            <!-- Title -->
            <div class="title-wrap">
                <div class="container">
                    <div class="travel-title float-left">
                        <h2>Last-Minute Cruise Deals: <span> Paris, Amsterdam, Saint Petersburg &amp; more</span></h2>
                    </div>
                </div>
            </div>
            <!-- End Title -->
            <!-- Cruise Deals Content -->
            <div class="container">
                <div class="cruise-deals-cn clearfix">
                    <!-- Flight Deal Item -->
                    <div class="col-xs-6 col-md-4 col-lg-3">
                        <div class="flight-deal-item">
                            <figure class="flight-img">
                                <a href="#" title="">
                                    <img src="images/deal/img-5.jpg" alt="">
                                </a>
                            </figure>
                            <div class="flight-text">
                                <div class="flight-name">
                                    <a href="#" title="">Amsterdam</a>
                                </div>
                                <div class="flight-price">
                                    One way fare only
                                    <span class="price">$50</span>
                                    depart from Paris
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Flight Deal Item -->
                    <!-- Flight Deal Item -->
                    <div class="col-xs-6 col-md-4 col-lg-3">
                        <div class="flight-deal-item">
                            <figure class="flight-img">
                                <a href="#" title="">
                                    <img src="images/deal/img-6.jpg" alt="">
                                </a>
                            </figure>
                            <div class="flight-text">
                                <div class="flight-name">
                                    <a href="#" title="">HongKong</a>
                                </div>
                                <div class="flight-price">
                                    Round trip fare only
                                    <span class="price">$258</span>
                                    depart from Hanoi
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Flight Deal Item -->
                    <!-- Flight Deal Item -->
                    <div class="col-xs-6 col-md-4 col-lg-3">
                        <div class="flight-deal-item">
                            <figure class="flight-img">
                                <a href="#" title="">
                                    <img src="images/deal/img-7.jpg" alt="">
                                </a>
                            </figure>
                            <div class="flight-text">
                                <div class="flight-name">
                                    <a href="#" title="">Marseille</a>
                                </div>
                                <div class="flight-price">
                                    One way fare only
                                    <span class="price">$50</span>
                                    depart from Shanghai
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Flight Deal Item -->
                    <!-- Flight Deal Item -->
                    <div class="col-xs-6 col-md-4 col-lg-3">
                        <div class="flight-deal-item">
                            <figure class="flight-img">
                                <a href="#" title="">
                                    <img src="images/deal/img-8.jpg" alt="">
                                </a>
                            </figure>
                            <div class="flight-text">
                                <div class="flight-name">
                                    <a href="#" title="">Barcelona</a>
                                </div>
                                <div class="flight-price">
                                    One way fare only
                                    <span class="price">$175</span>
                                    depart from Moscow
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Flight Deal Item -->
                    <!-- Flight Deal Item -->
                    <div class="col-xs-6 col-md-4 col-lg-3">
                        <div class="flight-deal-item">
                            <figure class="flight-img">
                                <a href="#" title="">
                                    <img src="images/deal/img-5.jpg" alt="">
                                </a>
                            </figure>
                            <div class="flight-text">
                                <div class="flight-name">
                                    <a href="#" title="">Bangkok</a>
                                </div>
                                <div class="flight-price">
                                    One way fare only
                                    <span class="price">$50</span>
                                    depart from Manila 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Flight Deal Item -->
                    <!-- Flight Deal Item -->
                    <div class="col-xs-6 col-md-4 col-lg-3">
                        <div class="flight-deal-item">
                            <figure class="flight-img">
                                <a href="#" title="">
                                    <img src="images/deal/img-6.jpg" alt="">
                                </a>
                            </figure>
                            <div class="flight-text">
                                <div class="flight-name">
                                    <a href="#" title="">Marseille</a>
                                </div>
                                <div class="flight-price">
                                    One way fare only
                                    <span class="price">$50</span>
                                    depart from Shanghai
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Flight Deal Item -->
                    <!-- Flight Deal Item -->
                    <div class="col-xs-6 col-md-4 col-lg-3">
                        <div class="flight-deal-item">
                            <figure class="flight-img">
                                <a href="#" title="">
                                    <img src="images/deal/img-7.jpg" alt="">
                                </a>
                            </figure>
                            <div class="flight-text">
                                <div class="flight-name">
                                    <a href="#" title="">Tokyo Haneda</a>
                                </div>
                                <div class="flight-price">
                                    One way fare only
                                    <span class="price">$150</span>
                                    depart from Taipei
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Flight Deal Item -->
                    <!-- Flight Deal Item -->
                    <div class="col-xs-6 col-md-4 col-lg-3">
                        <div class="flight-deal-item">
                            <figure class="flight-img">
                                <a href="#" title="">
                                    <img src="images/deal/img-8.jpg" alt="">
                                </a>
                            </figure>
                            <div class="flight-text">
                                <div class="flight-name">
                                    <a href="#" title="">San Francisco</a>
                                </div>
                                <div class="flight-price">
                                    One way fare only
                                    <span class="price">$214</span>
                                    depart from Washington
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Flight Deal Item -->
                    
                </div>
            </div>
            <!-- End Cruise Deals Content -->
        </section>
        <!-- End Flight Deals -->

        <!-- Travel Destinations -->
        <section class="destinations">

            <!-- Title -->
            <div class="title-wrap">
                <div class="container">
                    <div class="travel-title float-left">
                        <h2>Top Travel Destinations</h2>
                    </div>
                    <a href="#" title="" class="awe-btn awe-btn-5 arrow-right awe-btn-lager text-uppercase float-right">view all</a>
                </div>
            </div>
            <!-- End Title -->

            <!-- Destinations Content -->
            <div class="destinations-cn">

                <!-- Background -->
                <div class="bg-parallax bg-2"></div>
                <!-- End Background -->

                <div class="container">
                    <div class="row">
                        <!-- Destinations Filter -->
                        <div class="col-md-4 col-lg-3">
                            <div class="intro-filter">
                                <div class="intro">
                                    <p>
                                        <small>Discover</small><br>
                                        <span>2364</span> destinations
                                    </p>
                                    <p>
                                        <small>With</small><br>
                                        <span>152,364</span> properties
                                    </p>
                                </div>
                                <ul class="filter">
                                    <li class="active">
                                        <a data-toggle="tab" href="#destinations-1"><i class="fa fa-map-marker"></i> Recommendation for you</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#destinations-2"><i class="fa fa-map-marker"></i> Australia &amp; Oceania</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#destinations-3"><i class="fa fa-map-marker"></i> Asia</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#destinations-4"><i class="fa fa-map-marker"></i> Europe</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#destinations-5"><i class="fa fa-map-marker"></i> USA &amp; Canada</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#destinations-6"><i class="fa fa-map-marker"></i> The rest of the world</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <!-- End Destinations Filter -->
                        <!-- Destinations Grid -->
                        <div class="col-md-8 col-lg-9">
                            <div class="tab-content destinations-grid">
                                <!-- Tab One -->
                                <div id="destinations-1" class="clearfix tab-pane fade active in ">
                                    <!-- Destinations Item -->
                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                        <div class="destinations-item ">
                                            <div class="destinations-text">
                                                <div class="destinations-name">
                                                    <a href="#" title="">London - UK</a>
                                                </div>
                                                <span class="properties-nb">
                                                    <ins>1289</ins> properties
                                                </span>
                                            </div>
                                            <figure class="destinations-img">
                                                <a href="#" title="">
                                                    <img src="images/destinations/img-1.jpg" alt="">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- End Destinations Item -->
                                    <!-- Destinations Item -->
                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                        <div class="destinations-item">
                                            <div class="destinations-text">
                                                <div class="destinations-name">
                                                    <a href="#" title="">Paris - France</a>
                                                </div>
                                                <span class="properties-nb">
                                                    239 properties
                                                </span>
                                            </div>
                                            <figure class="destinations-img">
                                                <a href="#" title="">
                                                    <img src="images/destinations/img-2.jpg" alt="">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- End Destinations Item -->
                                    <!-- Destinations Item -->
                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                        <div class="destinations-item">
                                            <div class="destinations-text">
                                                <div class="destinations-name">
                                                    <a href="#" title="">Rome - Italy</a>
                                                </div>
                                                <span class="properties-nb">
                                                    478 properties
                                                </span>
                                            </div>
                                            <figure class="destinations-img">
                                                <a href="#" title="">
                                                    <img src="images/destinations/img-3.jpg" alt="">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- End Destinations Item -->
                                    <!-- Destinations Item -->
                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                        <div class="destinations-item">
                                            <div class="destinations-text">
                                                <div class="destinations-name">
                                                    <a href="#" title="">Barcelona - Spain</a>
                                                </div>
                                                <span class="properties-nb">
                                                    452 properties
                                                </span>
                                            </div>
                                            <figure class="destinations-img">
                                                <a href="#" title="">
                                                    <img src="images/destinations/img-4.jpg" alt="">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- End Destinations Item -->
                                    <!-- Destinations Item -->
                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                        <div class="destinations-item">
                                            <div class="destinations-text">
                                                <div class="destinations-name">
                                                    <a href="#" title="">Madrid - Spain</a>
                                                </div>
                                                <span class="properties-nb">
                                                    794 properties
                                                </span>
                                            </div>
                                            <figure class="destinations-img">
                                                <a href="#" title="">
                                                    <img src="images/destinations/img-5.jpg" alt="">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- End Destinations Item -->
                                    <!-- Destinations Item -->
                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                        <div class="destinations-item">
                                            <div class="destinations-text">
                                                <div class="destinations-name">
                                                    <a href="#" title="">Vienna - Austria</a>
                                                </div>
                                                <span class="properties-nb">
                                                    1289 properties
                                                </span>
                                            </div>
                                            <figure class="destinations-img">
                                                <a href="#" title="">
                                                    <img src="images/destinations/img-6.jpg" alt="">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- End Destinations Item -->
                                </div>
                                <!-- End Tab One -->
                                <!-- Tab Two -->
                                <div id="destinations-2" class="clearfix tab-pane fade">
                                    <!-- Destinations Item -->
                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                        <div class="destinations-item ">
                                            <div class="destinations-text">
                                                <div class="destinations-name">
                                                    <a href="#" title="">London - UK</a>
                                                </div>
                                                <span class="properties-nb">
                                                    <ins>1289</ins> properties
                                                </span>
                                            </div>
                                            <figure class="destinations-img">
                                                <a href="#" title="">
                                                    <img src="images/destinations/img-1.jpg" alt="">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- End Destinations Item -->
                                    <!-- Destinations Item -->
                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                        <div class="destinations-item">
                                            <div class="destinations-text">
                                                <div class="destinations-name">
                                                    <a href="#" title="">Paris - France</a>
                                                </div>
                                                <span class="properties-nb">
                                                    239 properties
                                                </span>
                                            </div>
                                            <figure class="destinations-img">
                                                <a href="#" title="">
                                                    <img src="images/destinations/img-2.jpg" alt="">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- End Destinations Item -->
                                    <!-- Destinations Item -->
                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                        <div class="destinations-item">
                                            <div class="destinations-text">
                                                <div class="destinations-name">
                                                    <a href="#" title="">Rome - Italy</a>
                                                </div>
                                                <span class="properties-nb">
                                                    478 properties
                                                </span>
                                            </div>
                                            <figure class="destinations-img">
                                                <a href="#" title="">
                                                    <img src="images/destinations/img-3.jpg" alt="">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- End Destinations Item -->
                                    <!-- Destinations Item -->
                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                        <div class="destinations-item">
                                            <div class="destinations-text">
                                                <div class="destinations-name">
                                                    <a href="#" title="">Barcelona - Spain</a>
                                                </div>
                                                <span class="properties-nb">
                                                    452 properties
                                                </span>
                                            </div>
                                            <figure class="destinations-img">
                                                <a href="#" title="">
                                                    <img src="images/destinations/img-4.jpg" alt="">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- End Destinations Item -->
                                    <!-- Destinations Item -->
                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                        <div class="destinations-item">
                                            <div class="destinations-text">
                                                <div class="destinations-name">
                                                    <a href="#" title="">Madrid - Spain</a>
                                                </div>
                                                <span class="properties-nb">
                                                    794 properties
                                                </span>
                                            </div>
                                            <figure class="destinations-img">
                                                <a href="#" title="">
                                                    <img src="images/destinations/img-5.jpg" alt="">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- End Destinations Item -->
                                    <!-- Destinations Item -->
                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                        <div class="destinations-item">
                                            <div class="destinations-text">
                                                <div class="destinations-name">
                                                    <a href="#" title="">Vienna - Austria</a>
                                                </div>
                                                <span class="properties-nb">
                                                    1289 properties
                                                </span>
                                            </div>
                                            <figure class="destinations-img">
                                                <a href="#" title="">
                                                    <img src="images/destinations/img-6.jpg" alt="">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- End Destinations Item -->
                                </div>
                                <!-- End Tab Two -->
                            </div>
                        </div>
                        <!-- ENd Destinations Grid -->
                    </div>
                </div>
            </div>
            <!-- End Destinations Content -->
        </section>
        <!-- End Travel Destinations -->

        <!-- Confidence and Subscribe  -->
        <section class="confidence-subscribe no-bg">
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
                            <p>Enter your email address and we’ll send you our regular promotional emails, packed with special offers, great deals, and huge discounts</p>
                            <!-- Subscribe Form -->
                            <div class="subscribe-form">
                                <form action="#" method="get">
                                    <input type="text" name="" value="" placeholder="Your email" class="subscribe-input">
                                    <button type="submit" class="awe-btn awe-btn-5 arrow-right text-uppercase awe-btn-lager">subcrible</button>
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