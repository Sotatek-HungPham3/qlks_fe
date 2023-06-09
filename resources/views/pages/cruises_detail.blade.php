@extends('index')
@section('title-page', 'Chi tiết Du thuyền')
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
        <div class="main main-dt">
            <div class="container">
                <div class="main-cn detail-page bg-white clearfix">

                    <!-- Breakcrumb -->
                    <section class="breakcrumb-sc">
                        <ul class="breadcrumb arrow">
                            <li><a href="index-2.html"><i class="fa fa-home"></i></a></li>
                            <li><a href="hotel.html" title="">Hotels</a></li>
                            <li><a href="#" title="">Europe </a></li>
                            <li>Netherlands</li>
                        </ul>
                        <div class="support float-right">
                            <small>Got a question?</small> 123-123-1234
                        </div>
                    </section>
                    <!-- End Breakcrumb -->

                    <!-- Header Detail -->
                    <section class="head-detail">
                        <div class="head-dt-cn">
                            <div class="row">
                                <div class="col-sm-7">
                                    <h1>7-night Western Caribbean Cruise</h1>
                                    <ul>
                                        <li><span>Miami Round-Trip</span></li>
                                        <li>Ship: Norwegian Getaway</li>
                                    </ul>
                                </div>
                                <div class="col-sm-5 text-right">
                                    <p class="price-book">
                                        From-<span>$345</span>/night
                                        <a href="#" title="" class="awe-btn awe-btn-1 awe-btn-lager">Book Now</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Header Detail -->

                    <!-- Detail Slide -->
                    <section class="detail-slider">
                        <!-- Lager Image -->
                        <div class="slide-room-lg">
                            <div id="slide-room-lg">
                                <img src="images/cruise/slide/img-1.jpg" alt="">
                                <img src="images/cruise/slide/img-1.jpg" alt="">
                                <img src="images/cruise/slide/img-1.jpg" alt="">
                                <img src="images/cruise/slide/img-1.jpg" alt="">
                                <img src="images/cruise/slide/img-1.jpg" alt="">
                                <img src="images/cruise/slide/img-1.jpg" alt="">
                                <img src="images/cruise/slide/img-1.jpg" alt="">
                                <img src="images/cruise/slide/img-1.jpg" alt="">
                                <img src="images/cruise/slide/img-1.jpg" alt="">
                                <img src="images/cruise/slide/img-1.jpg" alt="">
                            </div>
                        </div>
                        <!-- End Lager Image -->
                        <!-- Thumnail Image -->
                        <div class="slide-room-sm">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div id="slide-room-sm">
                                        <img src="images/cruise/slide/img-2.jpg" alt="">
                                        <img src="images/cruise/slide/img-3.jpg" alt="">
                                        <img src="images/cruise/slide/img-4.jpg" alt="">
                                        <img src="images/cruise/slide/img-5.jpg" alt="">
                                        <img src="images/cruise/slide/img-6.jpg" alt="">
                                        <img src="images/hotel/thumnail/img-3.png" alt="">
                                        <img src="images/cruise/slide/img-7.jpg" alt="">
                                        <img src="images/cruise/slide/img-8.jpg" alt="">
                                        <img src="images/cruise/slide/img-2.jpg" alt="">
                                        <img src="images/cruise/slide/img-5.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Thumnail Image -->
                    </section>
                    <!-- End Detail Slide -->

                    <!-- Cruise Itinerary -->
                    <section class="cruise-itinerary detail-cn" id="cruise-itinerary">
                        <div class="row">
                        
                            <div class="col-lg-3 detail-sidebar">
                                <!-- Cruise Itinerary Map -->
                                <h2 class="title-detail">Cruise itinerary</h2>
                                <div id="itinerary-maps"><img src="images/cruise/img-11.jpg" alt=""></div>
                                <!-- End Cruise Itinerary Map -->
                            </div>
                            
                            <!-- Cruise Itinerary Content -->
                            <div class="col-lg-9 cruise-itinerary-cn">
                                <div class="responsive-table">
                                    <table class="table table-itinerary">
                                        <thead>
                                            <tr>
                                                <th>Day</th>
                                                <th>Ports of Call</th>
                                                <th class="th-arrival">Arrival</th>
                                                <th class="th-departure">Departure</th>
                                            </tr>
                                        </thead>
                                        <tr>
                                            <td class="td-day">Day 1</td>
                                            <td class="td-post">Miami, Florida</td>
                                            <td class="td-arrival">4:00 PM</td>
                                            <td class="td-departure">4:00 PM</td>
                                        </tr>
                                        <tr>
                                            <td class="td-day">Day 2</td>
                                            <td class="td-post">At Sea</td>
                                            <td class="td-arrival">4:00 PM</td>
                                            <td class="td-departure">4:00 PM</td>
                                        </tr>
                                        <tr>
                                            <td class="td-day">Day 3</td>
                                            <td class="td-post">At Sea</td>
                                            <td class="td-arrival">4:00 PM</td>
                                            <td class="td-departure">4:00 PM</td>
                                        </tr>
                                        <tr>
                                            <td class="td-day">Day 4</td>
                                            <td class="td-post">Philipsburg, Sint Maarten, Netherlands Antilles</td>
                                            <td class="td-arrival">4:00 PM</td>
                                            <td class="td-departure">4:00 PM</td>
                                        </tr>
                                        <tr>
                                            <td class="td-day">Day 5</td>
                                            <td class="td-post">St. Thomas, USVI</td>
                                            <td class="td-arrival">4:00 PM</td>
                                            <td class="td-departure">4:00 PM</td>
                                        </tr>
                                        <tr>
                                            <td class="td-day">Day 6</td>
                                            <td class="td-post">At Sea</td>
                                            <td class="td-arrival">4:00 PM</td>
                                            <td class="td-departure">4:00 PM</td>
                                        </tr>
                                        <tr>
                                            <td class="td-day">Day 7</td>
                                            <td class="td-post">Miami, Florida</td>
                                            <td class="td-arrival">4:00 PM</td>
                                            <td class="td-departure">4:00 PM</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <!-- End Cruise Itinerary Content -->
                        </div>

                    </section>
                    <!-- End Cruise Itinerary -->
                    <!-- Date Availability-->
                    <section class="date-availability detail-cn" id="date-availability">
                        <div class="row">
                            <div class="col-lg-3 detail-sidebar">
                                <div class="scroll-heading">
                                    <h2>Date Availability</h2>
                                    <hr class="hr">
                                    <a href="#cabin-type" title="">Cabin type</a>
                                    <a href="#cabin-number" title="">Cabin number</a>
                                    <a href="#cruise-overview" title="">Cruise overview</a>
                                </div>
                            </div>
                            <div class="col-lg-9 date-availability-cn">
                                <h2 class="title-detail">Select a Cabin Type</h2>
                                <ul class="tabs-availability">
                                    <li class="active"><a data-toggle="tab" href="#section1">Oct-Nov-Dec 2014</a></li>
                                    <li><a data-toggle="tab" href="#section2">Jan-Feb-Mar 2015</a></li>
                                    <li><a data-toggle="tab" href="#section3">Apr-May-Jun 2015</a></li>
                                    <li><a data-toggle="tab" href="#section4">Jul-Aug-Sep 2015</a></li>
                                    <li><a data-toggle="tab" href="#section5">View All</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="section1" class="cruise-dates-tabs tab-pane fade active in">
                                        <div class="responsive-table">
                                            <table class="table cruise-dates-table table-radio">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th class="th-date">Date</th>
                                                        <th>Inside</th>
                                                        <th>Oceanview</th>
                                                        <th>Balcony</th>
                                                        <th>Suite</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="td-radio">
                                                            <div class="radio-checkbox">
                                                                <input type="radio" name="radio-date" id="radio-1" class="radio">
                                                                <label for="radio-1"></label>
                                                            </div>
                                                        </td>
                                                        <td class="td-date">
                                                            Oct 4 - 11, 2014
                                                        </td>
                                                        <td class="td-price inside">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$217</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                        <td class="td-price oceanview">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$293</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                        <td class="td-price balcony">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$282</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                        <td class="td-price suite">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$252</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-radio">
                                                            <div class="radio-checkbox">
                                                                <input type="radio" name="radio-date" id="radio-2" class="radio">
                                                                <label for="radio-2"></label>
                                                            </div>
                                                        </td>
                                                        <td class="td-date">
                                                            Oct 5 - 11, 2014
                                                        </td>
                                                        <td class="td-price inside">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$231</ins></span>
                                                                <span class="price night">$60/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                        <td class="td-price oceanview">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$233</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                        <td class="td-price balcony">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$235</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                        <td class="td-price suite">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$232</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="warning">
                                                        <td class="td-radio">
                                                            <div class="radio-checkbox">
                                                                <input type="radio" name="radio-date" id="radio-3" checked class="radio">
                                                                <label for="radio-3"></label>
                                                            </div>
                                                        </td>
                                                        <td class="td-date">
                                                            Oct 6 - 11, 2014
                                                        </td>
                                                        <td class="td-price inside">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$230</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                        <td class="td-price oceanview">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$222</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                        <td class="td-price balcony">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$236</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                        <td class="td-price suite">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$232</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-radio">
                                                            <div class="radio-checkbox">
                                                                <input type="radio" name="radio-date" id="radio-4" class="radio">
                                                                <label for="radio-4"></label>
                                                            </div>
                                                        </td>
                                                        <td class="td-date">
                                                            Oct 7 - 11, 2014
                                                        </td>
                                                        <td class="td-price inside">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$238</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                        <td class="td-price oceanview">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$233</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                        <td class="td-price balcony">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$237</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                        <td class="td-price suite">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$232</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-radio">
                                                            <div class="radio-checkbox">
                                                                <input type="radio" name="radio-date" id="radio-5" class="radio">
                                                                <label for="radio-5"></label>
                                                            </div>
                                                        </td>
                                                        <td class="td-date">
                                                            Oct 7 - 11, 2014
                                                        </td>
                                                        <td class="td-price inside">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$238</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                        <td class="td-price oceanview">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$231</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                        <td class="td-price balcony">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$232</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                        <td class="td-price suite">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$232</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div id="section2" class="cruise-dates-tabs tab-pane fade">
                                        <div class="responsive-table">
                                            <table class="table cruise-dates-table table-radio">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th class="th-date">Date</th>
                                                        <th>Inside</th>
                                                        <th>Oceanview</th>
                                                        <th>Balcony</th>
                                                        <th>Suite</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="td-radio">
                                                            <div class="radio-checkbox">
                                                                <input type="radio" name="radio-date" id="radio-1b" class="radio">
                                                                <label for="radio-1b"></label>
                                                            </div>
                                                        </td>
                                                        <td class="td-date">
                                                            Jan 4 - 11, 2014
                                                        </td>
                                                        <td class="td-price inside">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$252</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                        <td class="td-price oceanview">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$321</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                        <td class="td-price balcony">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$123</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                        <td class="td-price suite">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$212</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-radio">
                                                            <div class="radio-checkbox">
                                                                <input type="radio" name="radio-date" id="radio-2b" class="radio">
                                                                <label for="radio-2b"></label>
                                                            </div>
                                                        </td>
                                                        <td class="td-date">
                                                            Jan 4 - 11, 2014
                                                        </td>
                                                        <td class="td-price inside">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$51</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                        <td class="td-price oceanview">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$216</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                        <td class="td-price balcony">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$221</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                        <td class="td-price suite">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$232</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="warning">
                                                        <td class="td-radio">
                                                            <div class="radio-checkbox">
                                                                <input type="radio" name="radio-date" id="radio-3b" checked class="radio">
                                                                <label for="radio-3b"></label>
                                                            </div>
                                                        </td>
                                                        <td class="td-date">
                                                            Jan 4 - 11, 2014
                                                        </td>
                                                        <td class="td-price inside">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$162</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                        <td class="td-price oceanview">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$222</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                        <td class="td-price balcony">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$230</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                        <td class="td-price suite">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$290</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-radio">
                                                            <div class="radio-checkbox">
                                                                <input type="radio" name="radio-date" id="radio-4b" class="radio">
                                                                <label for="radio-4b"></label>
                                                            </div>
                                                        </td>
                                                        <td class="td-date">
                                                            Jan 4 - 11, 2014
                                                        </td>
                                                        <td class="td-price inside">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$232</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                        <td class="td-price oceanview">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$232</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                        <td class="td-price balcony">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$232</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                        <td class="td-price suite">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$232</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-radio">
                                                            <div class="radio-checkbox">
                                                                <input type="radio" name="radio-date" id="radio-5b" class="radio">
                                                                <label for="radio-5b"></label>
                                                            </div>
                                                        </td>
                                                        <td class="td-date">
                                                            Oct 4 - 11, 2014
                                                        </td>
                                                        <td class="td-price inside">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$232</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                        <td class="td-price oceanview">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$232</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                        <td class="td-price balcony">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$232</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                        <td class="td-price suite">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$232</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div id="section3" class="cruise-dates-tabs tab-pane fade">
                                        <div class="responsive-table">
                                            <table class="table cruise-dates-table table-radio">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th class="th-date">Date</th>
                                                        <th>Inside</th>
                                                        <th>Oceanview</th>
                                                        <th>Balcony</th>
                                                        <th>Suite</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="td-radio">
                                                            <div class="radio-checkbox">
                                                                <input type="radio" name="radio-date" id="radio-1c" class="radio">
                                                                <label for="radio-1c"></label>
                                                            </div>
                                                        </td>
                                                        <td class="td-date">
                                                            Oct 4 - 11, 2014
                                                        </td>
                                                        <td class="td-price inside">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$296</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                        <td class="td-price oceanview">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$162</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                        <td class="td-price balcony">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$196</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                        <td class="td-price suite">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$134</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-radio">
                                                            <div class="radio-checkbox">
                                                                <input type="radio" name="radio-date" id="radio-2c" class="radio">
                                                                <label for="radio-2c"></label>
                                                            </div>
                                                        </td>
                                                        <td class="td-date">
                                                            Oct 4 - 11, 2014
                                                        </td>
                                                        <td class="td-price inside">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$232</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                        <td class="td-price oceanview">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$232</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                        <td class="td-price balcony">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$232</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                        <td class="td-price suite">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$232</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="warning">
                                                        <td class="td-radio">
                                                            <div class="radio-checkbox">
                                                                <input type="radio" name="radio-date" id="radio-3c" checked class="radio">
                                                                <label for="radio-3c"></label>
                                                            </div>
                                                        </td>
                                                        <td class="td-date">
                                                            Oct 4 - 11, 2014
                                                        </td>
                                                        <td class="td-price inside">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$232</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                        <td class="td-price oceanview">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$232</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                        <td class="td-price balcony">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$232</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                        <td class="td-price suite">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$232</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-radio">
                                                            <div class="radio-checkbox">
                                                                <input type="radio" name="radio-date" id="radio-4c" class="radio">
                                                                <label for="radio-4c"></label>
                                                            </div>
                                                        </td>
                                                        <td class="td-date">
                                                            Oct 4 - 11, 2014
                                                        </td>
                                                        <td class="td-price inside">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$232</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                        <td class="td-price oceanview">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$232</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                        <td class="td-price balcony">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$232</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                        <td class="td-price suite">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$232</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-radio">
                                                            <div class="radio-checkbox">
                                                                <input type="radio" name="radio-date" id="radio-5c" class="radio">
                                                                <label for="radio-5c"></label>
                                                            </div>
                                                        </td>
                                                        <td class="td-date">
                                                            Oct 4 - 11, 2014
                                                        </td>
                                                        <td class="td-price inside">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$232</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                        <td class="td-price oceanview">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$232</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                        <td class="td-price balcony">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$232</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                        <td class="td-price suite">
                                                            <div class="price-box">
                                                                <span class="price">From <ins>$232</ins></span>
                                                                <span class="price night">$61/<small>night</small></span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Date Availability -->

                    <!-- Cabin Type-->
                    <section class="cabin-type detail-cn" id="cabin-type">
                        <div class="row">
                            <div class="col-lg-3 detail-sidebar">
                                <div class="scroll-heading">
                                    <h2>Cabin type</h2>
                                    <hr class="hr">
                                    <a href="#date-availability" title="">Date availability</a>
                                    <a href="#cabin-number" title="">Cabin number</a>
                                    <a href="#cruise-overview" title="">Cruise overview</a>
                                </div>
                            </div>
                            <div class="col-lg-9 cabin-type-cn">
                                <h2 class="title-detail">Select a Cabin Type</h2>
                                <div class="responsive-table">
                                    <table class="table cabin-type-tabel table-radio">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Room Types</th>
                                                <th>Rate</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="td-radio">
                                                    <div class="radio-checkbox">
                                                        <input type="radio" name="radio-cabin" id="radio-01" class="radio">
                                                        <label for="radio-01"></label>
                                                    </div>
                                                </td>
                                                <td class="td-room">
                                                    <figure>
                                                        <img src="images/hotel/img-5.jpg" alt="">
                                                    </figure>
                                                    <h2>Inside </h2>
                                                    <p>
                                                        The smallest cabins onboard and have no view. Price differences between the cabin types usually relate to the specific deck and location of the cabin
                                                    </p>
                                                </td>
                                                <td class="t-price">
                                                    <div class="price-box">
                                                        <span class="price">From <ins>$232</ins></span>
                                                        <span class="price night">$61/<small>night</small></span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="warning">
                                                <td class="td-radio">
                                                    <div class="radio-checkbox">
                                                        <input type="radio" name="radio-cabin" checked id="radio-02" class="radio">
                                                        <label for="radio-02"></label>
                                                    </div>
                                                </td>
                                                <td class="td-room">
                                                    <figure>
                                                        <img src="images/hotel/img-6.jpg" alt="">
                                                    </figure>
                                                    <h2>Inside </h2>
                                                    <p>
                                                        The smallest cabins onboard and have no view. Price differences between the cabin types usually relate to the specific deck and location of the cabin
                                                    </p>
                                                </td>
                                                <td class="t-price">
                                                    <div class="price-box">
                                                        <span class="price">From <ins>$232</ins></span>
                                                        <span class="price night">$61/<small>night</small></span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="td-radio">
                                                    <div class="radio-checkbox">
                                                        <input type="radio" name="radio-cabin" id="radio-03" class="radio">
                                                        <label for="radio-03"></label>
                                                    </div>
                                                </td>
                                                <td class="td-room">
                                                    <figure>
                                                        <img src="images/hotel/img-7.jpg" alt="">
                                                    </figure>
                                                    <h2>Inside </h2>
                                                    <p>
                                                        The smallest cabins onboard and have no view. Price differences between the cabin types usually relate to the specific deck and location of the cabin
                                                    </p>
                                                </td>
                                                <td class="t-price">
                                                    <div class="price-box">
                                                        <span class="price">From <ins>$232</ins></span>
                                                        <span class="price night">$61/<small>night</small></span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="td-radio">
                                                    <div class="radio-checkbox">
                                                        <input type="radio" name="radio-cabin" id="radio-04" class="radio">
                                                        <label for="radio-04"></label>
                                                    </div>
                                                </td>
                                                <td class="td-room">
                                                    <figure>
                                                        <img src="images/hotel/img-8.jpg" alt="">
                                                    </figure>
                                                    <h2>Inside </h2>
                                                    <p>
                                                        The smallest cabins onboard and have no view. Price differences between the cabin types usually relate to the specific deck and location of the cabin
                                                    </p>
                                                </td>
                                                <td class="t-price">
                                                    <div class="price-box">
                                                        <span class="price">From <ins>$232</ins></span>
                                                        <span class="price night">$61/<small>night</small></span>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Cabin Type -->

                    <!-- Cabin number-->
                    <section class="cabin-number detail-cn" id="cabin-number">
                        <div class="row">
                            <div class="col-lg-3 detail-sidebar">
                                <div class="scroll-heading">
                                    <h2>Cabin number</h2>
                                    <hr class="hr">
                                    <a href="#date-availability" title="">Date availability</a>
                                    <a href="#cabin-type" title="">Cabin type</a>
                                    <a href="#cruise-overview" title="">Cruise overview</a>
                                </div>
                            </div>
                            <div class="col-lg-9 cabin-number-cn">
                                <!-- Balcony -->
                                <h2 class="title-detail">Find available cabins in the category you have selected</h2>
                                <div class="row">
                                    <div class="balcony-desk col-md-5">
                                        <p class="caption-desk">Balcony <span>(Change cabin type)</span></p>
                                        <ul class="ul-desk">
                                            <li>
                                                <div class="radio-checkbox">
                                                    <input type="radio" name="radio-desk" id="desk-1" class="radio">
                                                    <label for="desk-1">Desk 5</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-checkbox">
                                                    <input type="radio" name="radio-desk" id="desk-2" class="radio">
                                                    <label for="desk-2">Desk 8</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-checkbox">
                                                    <input type="radio" name="radio-desk" id="desk-3" class="radio">
                                                    <label for="desk-3">Desk 12</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-checkbox">
                                                    <input type="radio" name="radio-desk" id="desk-4" class="radio">
                                                    <label for="desk-4">Desk 14</label>
                                                </div>
                                            </li>
                                        </ul>
                                        
                                    </div>
                                    <div class="col-md-6 col-md-offset-1 desk-img">
                                        <img src="images/background/bg-8.png" alt="">
                                    </div>
                                </div>
                                <!-- End Balcony -->

                                <!-- Stateroom categorys - Available cabins -->
                                <div class="stateroom-available">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <!-- Stateroom Categories -->
                                            <div class="stateroom-cat">
                                                <h2 class="title-detail">Stateroom Categories</h2>

                                                <!-- Accordion -->
                                                <div class="panel-group" id="accordion">

                                                    <!-- Accordion 1 -->
                                                    <div class="panel">
                                                        <div class="panel-heading" id="headingOne">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                                    <span class="num _1">cs</span>Deluxe Ocean View with Balcony
                                                                    <span class="icon fa fa-angle-down"></span>
                                                                </a>
                                                            </h4>
                                                          
                                                        </div>
                                                        <div  id="collapseOne" class="panel-collapse collapse" aria-labelledby="headingOne">
                                                            <div class="panel-body">
                                                                This stateroom features two convertible lower beds, floor-to-ceiling sliding glass doors, private veranda, sitting area (some with sofa bed), refrigerator, 20" multifunction interactive television, direct-dial telephone and voicemail, individual safe, hair dryer, thermostat-controlled air-conditioning, mini-bar, bathroom with bathtub and/or shower, complimentary use of bathrobes, and 24-hour room service.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Accordion 1 -->

                                                    <!-- Accordion 2 -->
                                                    <div class="panel">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#headingTwo">
                                                                    <span class="num _3">cs</span>Concierge Class 1
                                                                    <span class="icon fa fa-angle-down"></span>
                                                                </a>
                                                            </h4>
                                                          
                                                        </div>
                                                        <div  id="headingTwo" class="panel-collapse collapse in">
                                                            <div class="panel-body">
                                                                <img src="images/cruise/img-10.jpg" alt="">
                                                                <p>
                                                                    This stateroom features two convertible lower beds, floor-to-ceiling sliding glass doors, private veranda, sitting area (some with sofa bed), refrigerator, 20" multifunction interactive television, direct-dial telephone and voicemail, individual safe, hair dryer, thermostat-controlled air-conditioning, mini-bar, bathroom with bathtub and/or shower, complimentary use of bathrobes, and 24-hour room service.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Accordion 2 -->

                                                    <!-- Accordion 3 -->
                                                    <div class="panel">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                                    <span class="num _3">cs</span>Celebrity Suite
                                                                    <span class="icon fa fa-angle-down"></span>
                                                                </a>
                                                            </h4>
                                                          
                                                        </div>
                                                        <div  id="collapseThree" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                This stateroom features two convertible lower beds, floor-to-ceiling sliding glass doors, private veranda, sitting area (some with sofa bed), refrigerator, 20" multifunction interactive television, direct-dial telephone and voicemail, individual safe, hair dryer, thermostat-controlled air-conditioning, mini-bar, bathroom with bathtub and/or shower, complimentary use of bathrobes, and 24-hour room service.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Accordion 3 -->

                                                    <!-- Accordion 4 -->
                                                    <div class="panel">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                                    <span class="num _4">2a</span>Family Ocean View with Balcony
                                                                    <span class="icon fa fa-angle-down"></span>
                                                                </a>
                                                            </h4>
                                                          
                                                        </div>
                                                        <div class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                This stateroom features two convertible lower beds, floor-to-ceiling sliding glass doors, private veranda, sitting area (some with sofa bed), refrigerator, 20" multifunction interactive television, direct-dial telephone and voicemail, individual safe, hair dryer, thermostat-controlled air-conditioning, mini-bar, bathroom with bathtub and/or shower, complimentary use of bathrobes, and 24-hour room service.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Accordion 4 -->

                                                    <!-- Accordion 5 -->
                                                    <div class="panel">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                                                                    <span class="num _5">2a</span>Family Ocean View with Balcony
                                                                    <span class="icon fa fa-angle-down"></span>
                                                                </a>
                                                            </h4>
                                                          
                                                        </div>
                                                        <div  id="collapseFive" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                This stateroom features two convertible lower beds, floor-to-ceiling sliding glass doors, private veranda, sitting area (some with sofa bed), refrigerator, 20" multifunction interactive television, direct-dial telephone and voicemail, individual safe, hair dryer, thermostat-controlled air-conditioning, mini-bar, bathroom with bathtub and/or shower, complimentary use of bathrobes, and 24-hour room service.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Accordion 5 -->

                                                </div>
                                                <!-- Accordion -->
                                            </div>
                                            <!-- End Stateroom Categories -->

                                            <!-- Available cabins -->
                                            <div class="available-cabins">
                                                <h2 class="title-detail">
                                                    Available cabins
                                                </h2>
                                                <div class="responsive-table">
                                                    <table class="table available-cabins-table">
                                                        <thead>
                                                            <tr>
                                                                <th>Cabin Number</th>
                                                                <th>Desk</th>
                                                                <th></th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="td-number">A722</td>
                                                                <td class="td-desk">Desk 8</td>
                                                                <td class="td-select">
                                                                    <div class="select">
                                                                        <span>Detail</span>
                                                                        <select name="adults">
                                                                            <option>Detail</option>
                                                                            <option>1</option>
                                                                            <option>2</option>
                                                                            <option>3</option>
                                                                        </select>
                                                                    </div>
                                                                </td>
                                                                <td class="td-book"><a href="#" class="awe-btn awe-btn-1 awe-btn-small">Book</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="td-number">A722</td>
                                                                <td class="td-desk">Desk 8</td>
                                                                <td class="td-select">
                                                                    <div class="select">
                                                                        <span>Detail</span>
                                                                        <select name="adults">
                                                                            <option>Detail</option>
                                                                            <option>1</option>
                                                                            <option>2</option>
                                                                            <option>3</option>
                                                                        </select>
                                                                    </div>
                                                                </td>
                                                                <td class="td-book"><a href="#" class="awe-btn awe-btn-1 awe-btn-small">Book</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="td-number">A722</td>
                                                                <td class="td-desk">Desk 8</td>
                                                                <td class="td-select">
                                                                    <div class="select">
                                                                        <span>Detail</span>
                                                                        <select name="adults">
                                                                            <option>Detail</option>
                                                                            <option>1</option>
                                                                            <option>2</option>
                                                                            <option>3</option>
                                                                        </select>
                                                                    </div>
                                                                </td>
                                                                <td class="td-book"><a href="#" class="awe-btn awe-btn-1 awe-btn-small">Book</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="td-number">A722</td>
                                                                <td class="td-desk">Desk 8</td>
                                                                <td class="td-select">
                                                                    <div class="select">
                                                                        <span>Detail</span>
                                                                        <select name="adults">
                                                                            <option>Detail</option>
                                                                            <option>1</option>
                                                                            <option>2</option>
                                                                            <option>3</option>
                                                                        </select>
                                                                    </div>
                                                                </td>
                                                                <td class="td-book"><a href="#" class="awe-btn awe-btn-1 awe-btn-small">Book</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="td-number">A722</td>
                                                                <td class="td-desk">Desk 8</td>
                                                                <td class="td-select">
                                                                    <div class="select">
                                                                        <span>Detail</span>
                                                                        <select name="adults">
                                                                            <option>Detail</option>
                                                                            <option>1</option>
                                                                            <option>2</option>
                                                                            <option>3</option>
                                                                        </select>
                                                                    </div>
                                                                </td>
                                                                <td class="td-book"><a href="#" class="awe-btn awe-btn-1 awe-btn-small">Book</a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <!-- End Available cabins -->
                                        </div>
                                        <div class="col-md-4 col-md-offset-1 stateroom-img">
                                            <img src="images/background/bg-9.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Stateroom categorys - Available cabins -->

                            </div>
                        </div>
                    </section>
                    <!-- End Cabin number -->

                    <!-- Cruise Overview-->
                    <section class="cruise-overview detail-cn" id="cruise-overview">
                        <div class="row">
                            <div class="col-lg-3 detail-sidebar">
                                <div class="scroll-heading">
                                    <h2>Cruise overview</h2>
                                    <hr class="hr">
                                    <a href="#date-availability" title="">Date availability</a>
                                    <a href="#cabin-type" title="">Cabin type</a>
                                    <a href="#cabin-number" title="">Cabin number</a>
                                </div>
                            </div>
                            <div class="col-lg-9 cruise-overview-cn">

                                <!-- Cruise Overview Content -->
                                <div class="cruise-overview-item">
                                    <h2 class="title-detail">Ship Description</h2>
                                    <div class="text">
                                        <p>
                                            Integer ullamcorper tincidunt faucibus. Nulla ac varius lacus. Suspendisse odio tellus, ullamcorper quis nulla at, ornare aliquet sem. Integer rhoncus purus ante, vehicula auctor turpis auctor non. Cum sociis natoque penatibus et magnis dis parturient m ontes, nascetur ridiculus mus. Vivamus neque est, scelerisque a nisi quis, ullamcorper tincidunt ex. Nullam feugiat commodo lectus sit amet suscipit. Nullam blandit ac felis eget faucibus. Aenean quis volutpat risus. Vestibulum eu eros scelerisque, malesuada justo ut, cursus dui. Nam mattis nisl nec nibh commodo, id auctor enim ullamcorper.
                                        </p>
                                    </div>
                                </div>
                                <!-- End Cruise Overview Content -->
                                <!-- Cruise Overview Content -->
                                <div class="cruise-overview-item">
                                    <h2 class="title-detail">Ship Highlights</h2>
                                    <div class="text">
                                        <ul class="ship-highlight-list">
                                            <li>WaterWorks park includes 115-foot-long, 14-foot-high water slide with hairpin twists and turns</li>
                                            <li>Serenity Adult-Only Retreat is aimed for relaxation with an oceanview, hot tub, and big umbrellas</li>
                                            <li>Large El Dorado casino with antique slot machines from the '30s and '40s</li>
                                            <li>9-hole Mini-Golf course with greens that are meticulously maintained</li>
                                            <li>A variety of nightlife including a pulsating disco with a spiral-shaped dance floor</li>
                                            <li>A unique selection of children's, vegetarian, and health-conscious dishes</li>
                                            <li>Circle C is the best spot for kids 12-14 years of age, with karaoke, video games, and movies</li>
                                            <li>A 12,000-square-foot luxury spa with sauna, steam room, massage, and body/facial treatments</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Cruise Overview Content -->
                            </div>
                        </div>
                    </section>
                    <!-- End Cruise Overview -->

                    <section class="detail-footer cruise-detail-footer detail-cn">
                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-9 detail-footer-cn text-right">
                                <p class="price-book">
                                    From-<span>$345</span>/night
                                    <a href="#" title="" class="awe-btn awe-btn-1 awe-btn-lager">Book Now</a>
                                </p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <!-- End Main -->
@endsection