@extends('index')
@section('title-page', 'Danh sách du thuyền')
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
                <div class="main-cn cruise-page bg-white clearfix">
                    <div class="row">

                    <!-- Cruise Right -->
                    <div class="col-lg-9 col-lg-push-3">

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

                        <section class="cruise-list">

                            <!-- Sort by and View by -->
                            <div class="sort-view clearfix">
                                <!-- Sort by -->
                                <div class="sort-by float-left">
                                    <label>Sort by: </label>
                                    <div class="sort-select select float-left">
                                        <span>Travelocity Picks</span>
                                        <select>
                                            <option value="POPULARITY">Travelocity Picks</option>
                                            <option value="PRICE">Price</option>
                                            <option value="DEPARTUREDATE">Departure Date</option>
                                            <option value="DURATION">Length</option>
                                            <option value="CRUISELINE">Cruise Line</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- End Sort by -->
                                <!-- View by -->
                                <div class="view-by float-right">
                                    <ul>
                                        <li><a href="hotel-list.html" title="" class="current"><img src="images/icon-grid.png" alt=""> List</a></li>
                                        <li><a href="hotel-list-3.html" title=""><img src="images/icon-map.png" alt=""> Map</a></li>
                                    </ul>
                                </div>
                                <!-- View by -->
                            </div>
                            <!-- End Sort by and View by -->

                            <!-- Cruise Content -->
                            <div class="cruise-list-cn">
                                <!-- Item -->
                                <div class="cruise-item">
                                    <figure class="cruise-img">
                                        <a href="cruise-detail.html">
                                            <img src="images/cruise/img-1.jpg" alt="">
                                        </a>
                                    </figure>
                                    <div class="cruise-text">
                                        <div class="cruise-name">
                                            <a href="cruise-detail.html">7 - Night Eastern Caribbean - Miami Round-Trip</a>
                                        </div>
                                        <ul class="ship-port">
                                            <li>
                                                <span class="label">Ship:</span>
                                                Norwegian Getaway
                                            </li>
                                            <li>
                                                <span class="label">Ports of Call:</span>
                                                Miami, Florida; Philipsburg, Sint Maarten, Netherlands Antilles; St. Thomas, USVI; Nassau, Bahamas; Miami...
                                            </li>
                                        </ul>
                                        <div class="price-box">
                                            <span class="price">
                                                From<br>
                                                <ins>$429</ins>
                                            </span>
                                            <span class="price night">
                                                <ins>$61</ins><small>/night</small>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Item -->
                                <!-- Item -->
                                <div class="cruise-item">
                                    <figure class="cruise-img">
                                        <a href="cruise-detail.html">
                                            <img src="images/cruise/img-2.jpg" alt="">
                                        </a>
                                    </figure>
                                    <div class="cruise-text">
                                        <div class="cruise-name">
                                            <a href="cruise-detail.html">8 - Night Eastern Caribbean - including 1 night tour </a>
                                        </div>
                                        <ul class="ship-port">
                                            <li>
                                                <span class="label">Ship:</span>
                                                Norwegian Getaway
                                            </li>
                                            <li>
                                                <span class="label">Ports of Call:</span>
                                                Miami, Florida; Philipsburg, Sint Maarten, Netherlands Antilles; St. Thomas, USVI; Nassau, Bahamas; Miami...
                                            </li>
                                        </ul>
                                        <div class="price-box">
                                            <span class="price">
                                                From<br>
                                                <ins>$356</ins>
                                            </span>
                                            <span class="price night">
                                                <ins>$61</ins><small>/night</small>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Item -->
                                <!-- Item -->
                                <div class="cruise-item">
                                    <figure class="cruise-img">
                                        <a href="cruise-detail.html">
                                            <img src="images/cruise/img-3.jpg" alt="">
                                        </a>
                                    </figure>
                                    <div class="cruise-text">
                                        <div class="cruise-name">
                                            <a href="cruise-detail.html">3 - Night Bahamas - Miami Round-Trip</a>
                                        </div>
                                        <ul class="ship-port">
                                            <li>
                                                <span class="label">Ship:</span>
                                                Norwegian Getaway
                                            </li>
                                            <li>
                                                <span class="label">Ports of Call:</span>
                                                Miami, Florida; Philipsburg, Sint Maarten, Netherlands Antilles; St. Thomas, USVI; Nassau, Bahamas; Miami...
                                            </li>
                                        </ul>
                                        <div class="price-box">
                                            <span class="price">
                                                From<br>
                                                <ins>$429</ins>
                                            </span>
                                            <span class="price night">
                                                <ins>$61</ins><small>/night</small>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Item -->
                                <!-- Item -->
                                <div class="cruise-item">
                                    <figure class="cruise-img">
                                        <a href="cruise-detail.html">
                                            <img src="images/cruise/img-4.jpg" alt="">
                                        </a>
                                    </figure>
                                    <div class="cruise-text">
                                        <div class="cruise-name">
                                            <a href="cruise-detail.html">7-night Western Caribbean Cruise from Port Canaveral Roundtrip</a>
                                        </div>
                                        <ul class="ship-port">
                                            <li>
                                                <span class="label">Ship:</span>
                                                Norwegian Getaway
                                            </li>
                                            <li>
                                                <span class="label">Ports of Call:</span>
                                                Miami, Florida; Philipsburg, Sint Maarten, Netherlands Antilles; St. Thomas, USVI; Nassau, Bahamas; Miami...
                                            </li>
                                        </ul>
                                        <div class="price-box">
                                            <span class="price">
                                                From<br>
                                                <ins>$250</ins>
                                            </span>
                                            <span class="price night">
                                                <ins>$61</ins><small>/night</small>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Item -->
                                <!-- Item -->
                                <div class="cruise-item">
                                    <figure class="cruise-img">
                                        <a href="cruise-detail.html">
                                            <img src="images/cruise/img-5.jpg" alt="">
                                        </a>
                                    </figure>
                                    <div class="cruise-text">
                                        <div class="cruise-name">
                                            <a href="cruise-detail.html">7 - Night Eastern Caribbean - Miami Round-Trip </a>
                                        </div>
                                        <ul class="ship-port">
                                            <li>
                                                <span class="label">Ship:</span>
                                                Norwegian Getaway
                                            </li>
                                            <li>
                                                <span class="label">Ports of Call:</span>
                                                Miami, Florida; Philipsburg, Sint Maarten, Netherlands Antilles; St. Thomas, USVI; Nassau, Bahamas; Miami...
                                            </li>
                                        </ul>
                                        <div class="price-box">
                                            <span class="price">
                                                From<br>
                                                <ins>$429</ins>
                                            </span>
                                            <span class="price night">
                                                <ins>$61</ins><small>/night</small>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Item -->
                                <!-- Item -->
                                <div class="cruise-item">
                                    <figure class="cruise-img">
                                        <a href="cruise-detail.html">
                                            <img src="images/cruise/img-6.jpg" alt="">
                                        </a>
                                    </figure>
                                    <div class="cruise-text">
                                        <div class="cruise-name">
                                            <a href="cruise-detail.html">7 - Night Eastern Caribbean - Miami Round-Trip</a>
                                        </div>
                                        <ul class="ship-port">
                                            <li>
                                                <span class="label">Ship:</span>
                                                Norwegian Getaway
                                            </li>
                                            <li>
                                                <span class="label">Ports of Call:</span>
                                                Miami, Florida; Philipsburg, Sint Maarten, Netherlands Antilles; St. Thomas, USVI; Nassau, Bahamas; Miami...
                                            </li>
                                        </ul>
                                        <div class="price-box">
                                            <span class="price">
                                                From<br>
                                                <ins>$429</ins>
                                            </span>
                                            <span class="price night">
                                                <ins>$61</ins><small>/night</small>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Item -->
                                <!-- Item -->
                                <div class="cruise-item">
                                    <figure class="cruise-img">
                                        <a href="cruise-detail.html">
                                            <img src="images/cruise/img-7.jpg" alt="">
                                        </a>
                                    </figure>
                                    <div class="cruise-text">
                                        <div class="cruise-name">
                                            <a href="cruise-detail.html">8 - Night Eastern Caribbean - including 1 night tour </a>
                                        </div>
                                        <ul class="ship-port">
                                            <li>
                                                <span class="label">Ship:</span>
                                                Norwegian Getaway
                                            </li>
                                            <li>
                                                <span class="label">Ports of Call:</span>
                                                Miami, Florida; Philipsburg, Sint Maarten, Netherlands Antilles; St. Thomas, USVI; Nassau, Bahamas; Miami...
                                            </li>
                                        </ul>
                                        <div class="price-box">
                                            <span class="price">
                                                From<br>
                                                <ins>$356</ins>
                                            </span>
                                            <span class="price night">
                                                <ins>$61</ins><small>/night</small>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Item -->
                                <!-- Item -->
                                <div class="cruise-item">
                                    <figure class="cruise-img">
                                        <a href="cruise-detail.html">
                                            <img src="images/cruise/img-8.jpg" alt="">
                                        </a>
                                    </figure>
                                    <div class="cruise-text">
                                        <div class="cruise-name">
                                            <a href="cruise-detail.html">3 - Night Bahamas - Miami Round-Trip</a>
                                        </div>
                                        <ul class="ship-port">
                                            <li>
                                                <span class="label">Ship:</span>
                                                Norwegian Getaway
                                            </li>
                                            <li>
                                                <span class="label">Ports of Call:</span>
                                                Miami, Florida; Philipsburg, Sint Maarten, Netherlands Antilles; St. Thomas, USVI; Nassau, Bahamas; Miami...
                                            </li>
                                        </ul>
                                        <div class="price-box">
                                            <span class="price">
                                                From<br>
                                                <ins>$429</ins>
                                            </span>
                                            <span class="price night">
                                                <ins>$61</ins><small>/night</small>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Item -->
                                <!-- Item -->
                                <div class="cruise-item">
                                    <figure class="cruise-img">
                                        <a href="cruise-detail.html">
                                            <img src="images/cruise/img-9.jpg" alt="">
                                        </a>
                                    </figure>
                                    <div class="cruise-text">
                                        <div class="cruise-name">
                                            <a href="cruise-detail.html">7-night Western Caribbean Cruise from Port Canaveral Roundtrip</a>
                                        </div>
                                        <ul class="ship-port">
                                            <li>
                                                <span class="label">Ship:</span>
                                                Norwegian Getaway
                                            </li>
                                            <li>
                                                <span class="label">Ports of Call:</span>
                                                Miami, Florida; Philipsburg, Sint Maarten, Netherlands Antilles; St. Thomas, USVI; Nassau, Bahamas; Miami...
                                            </li>
                                        </ul>
                                        <div class="price-box">
                                            <span class="price">
                                                From<br>
                                                <ins>$250</ins>
                                            </span>
                                            <span class="price night">
                                                <ins>$61</ins><small>/night</small>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Item -->
                            </div>
                            <!-- End Cruise Content -->

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
                    <!-- End Cruise Right -->

                    <!-- Sidebar Hotel -->
                    <div class="col-lg-3 col-lg-pull-9">
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
                                            <input type="radio" name="radio-1" id="radio-1" class="radio">
                                            <label for="radio-1">Popular Cruises</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input type="radio" name="radio-1" id="radio-2" class="radio">
                                            <label for="radio-2">Luxury Cruises</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input type="radio" name="radio-1" id="radio-3" class="radio">
                                            <label for="radio-3">River Cruises</label>
                                        </div>
                                    </li>
                                </ul>
                                <div class="row">
                                    <div class="form-search clearfix">
                                        <div class="form-field col-md-12">
                                            <label for="destination"><span>Destination:</span> Netherlands</label>
                                            <input type="text" id="destination" value="" class="field-input">
                                        </div>
                                        <div class="form-field field-select col-md-12">
                                            <div class="select">
                                                <span>Length of Cruise</span>
                                                <select name="guest">
                                                    <option>Length of Cruise</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-field field-select col-md-12">
                                            <div class="select">
                                                <span>Month</span>
                                                <select name="guest">
                                                    <option>Month</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-field field-select col-md-12">
                                            <div class="select">
                                                <span>Cruise Departure Port</span>
                                                <select name="guest">
                                                    <option>Cruise Departure Port</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-field field-select col-md-12">
                                            <div class="select">
                                                <span data-placeholder="Select">Cruise Line</span>
                                                <select name="guest">
                                                    <option>Cruise Line</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
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
                                    <form action="http://envato.megadrupal.com/html/bookawesome/narrow" method="get">
                                        <input type="text" name="" class="narrow-input" placeholder="Property name contains:">
                                        <button class="submit-narrow"></button>
                                    </form>
                                </div>
                            </div>
                            <!-- End Narrow your results -->
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

                                <h4 class="title-sidebar">Cruise line</h4>

                                <ul class="widget-ul">

                                    <li>
                                        <div class="radio-checkbox">
                                            <input id="checkbox-1" type="checkbox" class="checkbox" />
                                            <label for="checkbox-1">Any Cruise line</label>
                                        </div>
                                        <span>$2,120</span>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input id="checkbox-2" type="checkbox" class="checkbox" checked />
                                            <label for="checkbox-2">Carnival Cruise Lines</label>
                                        </div>
                                        <span>$1,027</span>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input id="checkbox-3" type="checkbox" class="checkbox" />
                                            <label for="checkbox-3">Celebrity Cruises</label>
                                        </div>
                                        <span>$863</span>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input id="checkbox-4" type="checkbox" class="checkbox" />
                                            <label for="checkbox-4">Disney Cruise Line</label>
                                        </div>
                                        <span>$2,120</span>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input id="checkbox-5" type="checkbox" class="checkbox" />
                                            <label for="checkbox-5">Holland America Line</label>
                                        </div>
                                        <span>$1,027</span>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input id="checkbox-6" type="checkbox" class="checkbox" />
                                            <label for="checkbox-6">MSC Cruises</label>
                                        </div>
                                        <span>$863</span>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input id="checkbox-7" type="checkbox" class="checkbox" />
                                            <label for="checkbox-7">Norwegian Cruise Line</label>
                                        </div>
                                        <span>$2,120</span>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input id="checkbox-8" type="checkbox" class="checkbox" />
                                            <label for="checkbox-8">Princess Cruises</label>
                                        </div>
                                        <span>$1,027</span>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input id="checkbox-9" type="checkbox" class="checkbox" />
                                            <label for="checkbox-9">Royal Caribbean Inte...</label>
                                        </div>
                                        <span>$863</span>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Hotel facilities -->

                        </div>
                        <!-- End Sidebar Content -->
                    </div>
                    <!-- End Sidebar Hotel -->
                    
                    </div>

                </div>
            </div>
        </div>
@endsection