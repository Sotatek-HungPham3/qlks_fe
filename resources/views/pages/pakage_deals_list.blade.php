@extends('index')
@section('title-page', 'Pakages')
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
                <div class="main-cn package-page bg-white clearfix">

                    <div class="row">
                    
                    <!-- Hotel Right -->
                    <div class="col-md-9 col-md-push-3">

                        <!-- Breakcrumb -->
                        <section class="breakcrumb-sc">
                            <ul class="breadcrumb arrow">
                                <li><a href="index-2.html"><i class="fa fa-home"></i></a></li>
                                <li><a href="hotel.html" title="">Hotels</a></li>
                                <li><a href="#" title="">Europe </a></li>
                                <li>Netherlands</li>
                            </ul>
                        </section>
                        <!-- End Breakcrumb -->

                        <section class="package-list">
                            <!-- Step -->
                            <ul class="payment-step package-step text-center clearfix">
                                <!-- class 'step-select' or 'step-part' -->
                                <li class="step-part">
                                    <span><img src="images/icon-step-hotel.png" alt=""></span>
                                    <p>Choosing hotel</p>
                                </li>
                                <li>
                                    <span><img src="images/icon-step-bed.png" alt=""></span>
                                    <p>Selecting room</p>
                                </li>
                                <li>
                                    <span><img src="images/icon-step-flight.png" alt=""></span>
                                    <p>Choosing flights</p>
                                </li>
                            </ul>
                            <!-- ENd Step -->
                            <!-- Sort by and View by -->
                            <div class="sort-view clearfix">
                                <!-- Sort by -->
                                <div class="sort-by float-left">
                                    <label>Sort by: </label>
                                    <div class="sort-select select float-left">
                                        <span>Star rating</span>
                                        <select>
                                            <option>Star rating</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                    <div class="sort-select select float-left">
                                        <span>Guest rating</span>
                                        <select>
                                            <option>Guest rating</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                    <div class="sort-select select float-left">
                                        <span>Pricing</span>
                                        <select name="pricing">
                                            <option>Pricing</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- End Sort by -->
                                <!-- View by -->
                                <div class="view-by float-right">
                                    <ul>
                                        <li><a href="hotel-list.html" title="" class="current"><img src="images/icon-grid.png" alt=""> List</a></li>
                                        <li><a href="hotel-maps.html" title=""><img src="images/icon-map.png" alt=""> Map</a></li>
                                    </ul>
                                </div>
                                <!-- View by -->
                            </div>
                            <!-- End Sort by and View by -->
                            <!-- Package Content -->
                            <div class="package-list-cn">
                                <!-- Item -->
                                <div class="package-item">
                                    <figure class="package-img">
                                        <a href="#">
                                            <img src="images/package/img-1.jpg" alt="">
                                        </a>
                                    </figure>
                                    <div class="package-text">
                                        <div class="package-name">
                                            <a href="#">Copley Square</a>
                                        </div>
                                        <span class="package-star">
                                            <i class="glyphicon glyphicon-star"></i>
                                            <i class="glyphicon glyphicon-star"></i>
                                            <i class="glyphicon glyphicon-star"></i>
                                            <i class="glyphicon glyphicon-star"></i>
                                            <i class="glyphicon glyphicon-star"></i>
                                        </span>
                                        <span class="package-rating">
                                            <ins>7.5</ins> - Good
                                        </span>
                                        <address class="package-address">
                                            42 Princes Square, London W2 4AD
                                        </address>
                                        <p>

                                            My stay at cumberland hotel was amazing, loved the location, was close to all the major attractions allt... <a href="#">view all 125 reviews</a>
                                        </p>
                                        <div class="price-box">
                                            <span class="price separately">
                                                Booked separately <br>
                                                <ins>$4250</ins>
                                            </span>
                                            <span class="price together">
                                                Booked together<br>
                                                <ins>$1,757</ins><small>/night</small>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Item -->
                                <!-- Item -->
                                <div class="package-item">
                                    <figure class="package-img">
                                        <a href="#">
                                            <img src="images/package/img-2.jpg" alt="">
                                        </a>
                                    </figure>
                                    <div class="package-text">
                                        <div class="package-name">
                                            <a href="#">The Cosmopolitan</a>
                                        </div>
                                        <span class="package-star">
                                            <i class="glyphicon glyphicon-star"></i>
                                            <i class="glyphicon glyphicon-star"></i>
                                            <i class="glyphicon glyphicon-star"></i>
                                            <i class="glyphicon glyphicon-star"></i>
                                            <i class="glyphicon glyphicon-star"></i>
                                        </span>
                                        <span class="package-rating">
                                            <ins>7.5</ins> - Good
                                        </span>
                                        <address class="package-address">
                                            42 Princes Square, London W2 4AD
                                        </address>
                                        <p>
                                            My stay at cumberland hotel was amazing, loved the location, was close to all the major attractions allt... <a href="#">view all 125 reviews</a>
                                        </p>
                                        <div class="price-box">
                                            <span class="price separately">
                                                Booked separately <br>
                                                <ins>$4250</ins>
                                            </span>
                                            <span class="price together">
                                                Booked together<br>
                                                <ins>$1,757</ins><small>/night</small>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Item -->
                                <!-- Item -->
                                <div class="package-item">
                                    <figure class="package-img">
                                        <a href="#">
                                            <img src="images/package/img-3.jpg" alt="">
                                        </a>
                                    </figure>
                                    <div class="package-text">
                                        <div class="package-name">
                                            <a href="#">Melia White House Hotel</a>
                                        </div>
                                        <span class="package-star">
                                            <i class="glyphicon glyphicon-star"></i>
                                            <i class="glyphicon glyphicon-star"></i>
                                            <i class="glyphicon glyphicon-star"></i>
                                            <i class="glyphicon glyphicon-star"></i>
                                            <i class="glyphicon glyphicon-star"></i>
                                        </span>
                                        <span class="package-rating">
                                            <ins>7.5</ins> - Good
                                        </span>
                                        <address class="package-address">
                                            42 Princes Square, London W2 4AD
                                        </address>
                                        <p>
                                            My stay at cumberland hotel was amazing, loved the location, was close to all the major attractions allt... <a href="#">view all 125 reviews</a>
                                        </p>
                                        <div class="price-box">
                                            <span class="price separately">
                                                Booked separately <br>
                                                <ins>$4250</ins>
                                            </span>
                                            <span class="price together">
                                                Booked together<br>
                                                <ins>$1,757</ins><small>/night</small>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Item -->
                                <!-- Item -->
                                <div class="package-item">
                                    <figure class="package-img">
                                        <a href="#">
                                            <img src="images/package/img-4.jpg" alt="">
                                        </a>
                                    </figure>
                                    <div class="package-text">
                                        <div class="package-name">
                                            <a href="#">Kensington Close Hotel</a>
                                        </div>
                                        <span class="package-star">
                                            <i class="glyphicon glyphicon-star"></i>
                                            <i class="glyphicon glyphicon-star"></i>
                                            <i class="glyphicon glyphicon-star"></i>
                                            <i class="glyphicon glyphicon-star"></i>
                                            <i class="glyphicon glyphicon-star"></i>
                                        </span>
                                        <span class="package-rating">
                                            <ins>7.5</ins> - Good
                                        </span>
                                        <address class="package-address">
                                            42 Princes Square, London W2 4AD
                                        </address>
                                        <p>
                                            My stay at cumberland hotel was amazing, loved the location, was close to all the major attractions allt... <a href="#">view all 125 reviews</a>
                                        </p>
                                        <div class="price-box">
                                            <span class="price separately">
                                                Booked separately <br>
                                                <ins>$4250</ins>
                                            </span>
                                            <span class="price together">
                                                Booked together<br>
                                                <ins>$1,757</ins><small>/night</small>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Item -->
                                <!-- Item -->
                                <div class="package-item">
                                    <figure class="package-img">
                                        <a href="#">
                                            <img src="images/package/img-1.jpg" alt="">
                                        </a>
                                    </figure>
                                    <div class="package-text">
                                        <div class="package-name">
                                            <a href="#">Copley Square</a>
                                        </div>
                                        <span class="package-star">
                                            <i class="glyphicon glyphicon-star"></i>
                                            <i class="glyphicon glyphicon-star"></i>
                                            <i class="glyphicon glyphicon-star"></i>
                                            <i class="glyphicon glyphicon-star"></i>
                                            <i class="glyphicon glyphicon-star"></i>
                                        </span>
                                        <span class="package-rating">
                                            <ins>7.5</ins> - Good
                                        </span>
                                        <address class="package-address">
                                            42 Princes Square, London W2 4AD
                                        </address>
                                        <p>
                                            My stay at cumberland hotel was amazing, loved the location, was close to all the major attractions allt... <a href="#">view all 125 reviews</a>
                                        </p>
                                        <div class="price-box">
                                            <span class="price separately">
                                                Booked separately <br>
                                                <ins>$4250</ins>
                                            </span>
                                            <span class="price together">
                                                Booked together<br>
                                                <ins>$1,757</ins><small>/night</small>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Item -->
                                <!-- Item -->
                                <div class="package-item">
                                    <figure class="package-img">
                                        <a href="#">
                                            <img src="images/package/img-2.jpg" alt="">
                                        </a>
                                    </figure>
                                    <div class="package-text">
                                        <div class="package-name">
                                            <a href="#">The Cosmopolitan</a>
                                        </div>
                                        <span class="package-star">
                                            <i class="glyphicon glyphicon-star"></i>
                                            <i class="glyphicon glyphicon-star"></i>
                                            <i class="glyphicon glyphicon-star"></i>
                                            <i class="glyphicon glyphicon-star"></i>
                                            <i class="glyphicon glyphicon-star"></i>
                                        </span>
                                        <span class="package-rating">
                                            <ins>7.5</ins> - Good
                                        </span>
                                        <address class="package-address">
                                            42 Princes Square, London W2 4AD
                                        </address>
                                        <p>
                                            My stay at cumberland hotel was amazing, loved the location, was close to all the major attractions allt... <a href="#">view all 125 reviews</a>
                                        </p>
                                        <div class="price-box">
                                            <span class="price separately">
                                                Booked separately <br>
                                                <ins>$4250</ins>
                                            </span>
                                            <span class="price together">
                                                Booked together<br>
                                                <ins>$1,757</ins><small>/night</small>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Item -->
                                <!-- Item -->
                                <div class="package-item">
                                    <figure class="package-img">
                                        <a href="#">
                                            <img src="images/package/img-3.jpg" alt="">
                                        </a>
                                    </figure>
                                    <div class="package-text">
                                        <div class="package-name">
                                            <a href="#">Melia White House Hotel</a>
                                        </div>
                                        <span class="package-star">
                                            <i class="glyphicon glyphicon-star"></i>
                                            <i class="glyphicon glyphicon-star"></i>
                                            <i class="glyphicon glyphicon-star"></i>
                                            <i class="glyphicon glyphicon-star"></i>
                                            <i class="glyphicon glyphicon-star"></i>
                                        </span>
                                        <span class="package-rating">
                                            <ins>7.5</ins> - Good
                                        </span>
                                        <address class="package-address">
                                            42 Princes Square, London W2 4AD
                                        </address>
                                        <p>
                                            My stay at cumberland hotel was amazing, loved the location, was close to all the major attractions allt... <a href="#">view all 125 reviews</a>
                                        </p>
                                        <div class="price-box">
                                            <span class="price separately">
                                                Booked separately <br>
                                                <ins>$4250</ins>
                                            </span>
                                            <span class="price together">
                                                Booked together<br>
                                                <ins>$1,757</ins><small>/night</small>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Item -->
                                <!-- Item -->
                                <div class="package-item">
                                    <figure class="package-img">
                                        <a href="#">
                                            <img src="images/package/img-4.jpg" alt="">
                                        </a>
                                    </figure>
                                    <div class="package-text">
                                        <div class="package-name">
                                            <a href="#">Kensington Close Hotel</a>
                                        </div>
                                        <span class="package-star">
                                            <i class="glyphicon glyphicon-star"></i>
                                            <i class="glyphicon glyphicon-star"></i>
                                            <i class="glyphicon glyphicon-star"></i>
                                            <i class="glyphicon glyphicon-star"></i>
                                            <i class="glyphicon glyphicon-star"></i>
                                        </span>
                                        <span class="package-rating">
                                            <ins>7.5</ins> - Good
                                        </span>
                                        <address class="package-address">
                                            42 Princes Square, London W2 4AD
                                        </address>
                                        <p>
                                            My stay at cumberland hotel was amazing, loved the location, was close to all the major attractions allt... <a href="#">view all 125 reviews</a>
                                        </p>
                                        <div class="price-box">
                                            <span class="price separately">
                                                Booked separately <br>
                                                <ins>$4250</ins>
                                            </span>
                                            <span class="price together">
                                                Booked together<br>
                                                <ins>$1,757</ins><small>/night</small>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Item -->

                            </div>
                            <!-- End Package Content -->

                            <div class="page-navigation-cn">
                                <ul class="page-navigation">
                                    <!--<li class="first"><a href="" title="">First</a></li>-->
                                    <li class="current"><a href="#" title="">1</a></li>
                                    <li><a href="#" title="">2</a></li>
                                    <li><a href="#" title="">3</a></li>
                                    <li><a href="#" title="">4</a></li>
                                    <li><a href="#" title="">5</a></li>
                                    <li><a href="#" title="">...</a></li>
                                    <li class="last"><a href="#" title="">Last</a></li>
                                </ul>
                            </div>

                        </section>
                    </div>
                    <!-- End Hotel Right -->

                    <!-- Sidebar Hotel -->
                    <div class="col-md-3 col-md-pull-9">
                        <!-- Sidebar Content -->
                        <div class="sidebar-cn">
                            <!-- Search Result -->
                            <div class="search-result">
                                <p>
                                    We found <br>
                                    <ins>640</ins> <span>properties availability</span>
                                </p>
                            </div>
                            <!-- End Search Result -->
                            <!-- Search Form Sidebar -->
                            <div class="search-sidebar">
                                <ul class="form-radio">
                                    <li>
                                        <div class="radio-checkbox">
                                            <input type="radio" name="radio" id="radio-1" class="radio">
                                            <label for="radio-1">Flight + Hotel</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input type="radio" name="radio" id="radio-2" class="radio">
                                            <label for="radio-2">Flight + Hotel +Car</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input type="radio" name="radio" id="radio-3" class="radio">
                                            <label for="radio-3">Hotel +Car</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input type="radio" name="radio" id="radio-4" class="radio">
                                            <label for="radio-4">Flight +Car</label>
                                        </div>
                                    </li>
                                </ul>
                                <div class="row">
                                    <div class="form-search clearfix">
                                        <div class="form-field col-md-12">
                                            <label for="destination"><span>Destination:</span> Netherlands</label>
                                            <input type="text" id="destination" value="" class="field-input">
                                        </div>
                                        <div class="form-field field-date col-md-6">
                                            <input type="text" class="field-input calendar-input" placeholder="Check in">
                                        </div>
                                        <div class="form-field field-date col-md-6">
                                            <input type="text" class="field-input calendar-input" placeholder="Check out">
                                        </div>
                                        <div class="form-field field-select col-md-6">
                                            <div class="select">
                                                <span data-placeholder="Select">2 guest</span>
                                                <select>
                                                    <option value="1">1 guest</option>
                                                    <option selected value="1">2 guest</option>
                                                    <option value="1">3 guest</option>
                                                    <option value="1">4 guest</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-submit col-md-12">
                                            <button type="submit" class="awe-btn awe-btn-medium awe-search">Search</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Search Form Sidebar -->
                            <!-- Narrow your results -->
                            <div class="narrow-results">
                                <h6>Narrow your results</h6>
                                <div class="narrow-form">
                                    <form action="http://envato.megadrupal.com/html/bookawesome/action" method="get">
                                        <input type="text" name="" class="narrow-input" placeholder="Property name contains:">
                                        <button class="submit-narrow"></button>
                                    </form>
                                </div>
                            </div>
                            <!-- End Narrow your results -->
                            <!-- Star rating-->
                            <div class="widget-sidebar start-rating-sidebar">
                                <h4 class="title-sidebar">Star rating</h4>
                                <ul class="widget-rate">
                                    <li>
                                        <div class="radio-checkbox">
                                            <input id="rating-5" type="checkbox" class="checkbox" />
                                            <label for="rating-5"></label>
                                        </div>
                                        <div class="group-star">
                                            <i class="glyphicon glyphicon-star"></i>
                                            <i class="glyphicon glyphicon-star"></i>
                                            <i class="glyphicon glyphicon-star"></i>
                                            <i class="glyphicon glyphicon-star"></i>
                                            <i class="glyphicon glyphicon-star"></i>
                                        </div>
                                        5 Stars
                                        <span>12</span>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input id="rating-4" type="checkbox" class="checkbox" />
                                            <label for="rating-4"></label>
                                        </div>
                                        <div class="group-star">
                                            <i class="glyphicon glyphicon-star"></i>
                                            <i class="glyphicon glyphicon-star"></i>
                                            <i class="glyphicon glyphicon-star"></i>
                                            <i class="glyphicon glyphicon-star"></i>
                                        </div>
                                        4 Stars
                                        <span>12</span>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input id="rating-3" type="checkbox" class="checkbox" />
                                            <label for="rating-3"></label>
                                        </div>
                                        <div class="group-star">
                                            <i class="glyphicon glyphicon-star"></i>
                                            <i class="glyphicon glyphicon-star"></i>
                                            <i class="glyphicon glyphicon-star"></i>
                                        </div>
                                        3 Stars
                                        <span>12</span>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input id="rating-2" type="checkbox" class="checkbox" />
                                            <label for="rating-2"></label>
                                        </div>
                                        <div class="group-star">
                                            <i class="glyphicon glyphicon-star"></i>
                                            <i class="glyphicon glyphicon-star"></i>
                                        </div>
                                         2 Stars
                                        <span>12</span>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input id="rating-1" type="checkbox" class="checkbox" />
                                            <label for="rating-1"></label>
                                        </div>
                                        <div class="group-star">
                                            <i class="glyphicon glyphicon-star"></i>
                                        </div>
                                        1 Stars
                                        <span>12</span>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input id="rating-6" type="checkbox" class="checkbox" />
                                            <label for="rating-6"></label>
                                        </div>
                                        <div class="group-star">
                                            <i class="glyphicon glyphicon-star-empty"></i>
                                        </div>
                                        Not Rated
                                        <span>12</span>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Star rating -->
                            <!-- Price Slider -->
                            <div class="widget-sidebar price-slider-sidebar">
                                <h4 class="title-sidebar">Price <span>(per night)</span></h4>
                                <div class="slider-sidebar price-slider" id="price-slider">
                                    <input type="text" name="price" class="range" value="0,1500" />
                                </div>
                            </div>
                            <!-- End Price Slider -->
                            <!-- Hotel facilities -->
                            <div class="widget-sidebar facilities-sidebar">
                                <h4 class="title-sidebar">Hotel facilities</h4>
                                <ul class="widget-ul">
                                    <li>
                                        <div class="radio-checkbox">
                                            <input id="checkbox-1" type="checkbox" class="checkbox" />
                                            <label for="checkbox-1">Swimming Pool</label>
                                        </div>
                                        <span>12</span>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input id="checkbox-2" type="checkbox" class="checkbox" checked />
                                            <label for="checkbox-2">Gym/Fitness</label>
                                        </div>
                                        <span>12</span>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input id="checkbox-3" type="checkbox" class="checkbox" />
                                            <label for="checkbox-3">Car Park</label>
                                        </div>
                                        <span>12</span>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input id="checkbox-4" type="checkbox" class="checkbox" />
                                            <label for="checkbox-4">Spa/Sauna</label>
                                        </div>
                                        <span>12</span>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input id="checkbox-5" type="checkbox" class="checkbox" />
                                            <label for="checkbox-5">Casino</label>
                                        </div>
                                        <span>12</span>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input id="checkbox-6" type="checkbox" class="checkbox" />
                                            <label for="checkbox-6">Free Wifi</label>
                                        </div>
                                        <span>12</span>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input id="checkbox-7" type="checkbox" class="checkbox" />
                                            <label for="checkbox-7">Pet-friendly</label>
                                        </div>
                                        <span>12</span>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input id="checkbox-8" type="checkbox" class="checkbox" />
                                            <label for="checkbox-8">Airport Transfer</label>
                                        </div>
                                        <span>12</span>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input id="checkbox-9" type="checkbox" class="checkbox" />
                                            <label for="checkbox-9">Smoking Area</label>
                                        </div>
                                        <span>12</span>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Hotel facilities -->
                            <!-- Area -->
                            <div class="widget-sidebar area-sidebar">

                                <h4 class="title-sidebar">Area</h4>

                                <ul class="widget-ul">
                                    <li>
                                        <div class="radio-checkbox">
                                            <input id="area-1" type="checkbox" class="checkbox" />
                                            <label for="area-1">Earls Court</label>
                                        </div>
                                        <span>12</span>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input id="area-2" type="checkbox" class="checkbox" checked />
                                            <label for="area-2">Victoria and Westminster</label>
                                        </div>
                                        <span>12</span>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input id="area-3" type="checkbox" class="checkbox" />
                                            <label for="area-3">Bloomsbury - Fitzrovia</label>
                                        </div>
                                        <span>12</span>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input id="area-4" type="checkbox" class="checkbox" />
                                            <label for="area-4">West End -Soho</label>
                                        </div>
                                        <span>12</span>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input id="area-5" type="checkbox" class="checkbox" />
                                            <label for="area-5">Chelsea - Kensington</label>
                                        </div>
                                        <span>12</span>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input id="area-6" type="checkbox" class="checkbox" />
                                            <label for="area-6">Heathrow & Nearby</label>
                                        </div>
                                        <span>12</span>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input id="area-7" type="checkbox" class="checkbox" />
                                            <label for="area-7">Gatwick Airport & Nearby</label>
                                        </div>
                                        <span>12</span>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input id="area-8" type="checkbox" class="checkbox" />
                                            <label for="area-8">Heathrow & Nearby</label>
                                        </div>
                                        <span>12</span>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input id="area-9" type="checkbox" class="checkbox" />
                                            <label for="area-9">The City</label>
                                        </div>
                                        <span>12</span>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input id="area-10" type="checkbox" class="checkbox" />
                                            <label for="area-10">Greenwich</label>
                                        </div>
                                        <span>12</span>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Area -->

                        </div>
                        <!-- End Sidebar Content -->
                    </div>
                    <!-- End Sidebar Hotel -->
                    
                    </div>

                </div>
            </div>
        </div>
        <!-- End Main -->
@endsection