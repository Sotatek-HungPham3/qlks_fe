@extends('index')
@section('title-page', 'Chi tiết chuyến du lịch')
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
                                    <h1>9 Days, Barcelona to Rome, Travel Europe like a movie star!</h1>
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
                                <img src="images/tour/slide/img-1.jpg" alt="">
                                <img src="images/tour/slide/img-1.jpg" alt="">
                                <img src="images/tour/slide/img-1.jpg" alt="">
                                <img src="images/tour/slide/img-1.jpg" alt="">
                                <img src="images/tour/slide/img-1.jpg" alt="">
                                <img src="images/tour/slide/img-1.jpg" alt="">
                                <img src="images/tour/slide/img-1.jpg" alt="">
                                <img src="images/tour/slide/img-1.jpg" alt="">
                                <img src="images/tour/slide/img-1.jpg" alt="">
                                <img src="images/tour/slide/img-1.jpg" alt="">
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

                    <!-- Tour Overview -->
                    <section class="tour-overview detail-cn" id="tour-overview">
                        <div class="row">
                            <div class="col-lg-3 detail-sidebar">
                                <div class="scroll-heading">
                                    <h2>overview</h2>
                                    <hr class="hr">
                                    <a href="#optional-acitivites" title="">Optional activities</a>
                                    <a href="#accomodation" title="">accomodation</a>
                                    <a href="#tour-meals" title="">Meals</a>
                                    <a href="#tour-necessary">No Tip Necessary</a>
                                </div>
                            </div>

                            <!-- Tour Overview Content -->
                            <div class="col-lg-9 tour-overview-cn">

                                <!-- Description -->
                                <div class="tour-description">
                                    <h2 class="title-detail">
                                        Description
                                    </h2>
                                    <div class="tour-detail-text">
                                        <p>
                                            Visiting 5 countries: Spain, France, Monaco, Switzerland, Italy<br>
                                            Make sure you keep your camera batteries charged, as they'll be getting some serious use as you travel Europe on our Paparazzi Parade. We'll be snapping away at the spectacular architecture of Barcelona, supercars in Monaco, mountain resorts in Switzerland and exquisite Renaissance statues in Florence; by the time we reach Rome you'll have memory card full of amazing pics and a scrapbook bursting with memories. Fabulous darling!
                                        </p>
                                    </div>
                                </div>
                                <!-- End Description -->

                                <div class="tour-itinerary">
                                    <h2 class="title-detail">Itinerary</h2>
                                    <!-- Accordion -->
                                    <div class="panel-group no-margin" id="accordion">

                                        <!-- Accordion 1 -->
                                        <div class="panel">
                                            <div class="panel-heading" id="headingOne">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                        <small>Day 1:</small>Barcelona
                                                        <span class="icon fa fa-angle-down"></span>
                                                    </a>
                                                </h4>
                                              
                                            </div>
                                            <div  id="collapseOne" class="panel-collapse collapse in" aria-labelledby="headingOne">
                                                <div class="panel-body">
                                                    This stateroom features two convertible lower beds, floor-to-ceiling sliding glass doors, private veranda, sitting area (some with sofa bed), refrigerator, 20" multifunction interactive television, direct-dial telephone and voicemail, individual safe, hair dryer, thermostat-controlled air-conditioning, mini-bar, bathroom with bathtub and/or shower, complimentary use of bathrobes, and 24-hour room service.
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Accordion 1 -->
                                        
                                        <!-- Accordion 2 -->
                                        <div class="panel">
                                            <div class="panel-heading" id="headingTwo">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle collapsed" data-toggle="collapse" href="#collapseTwo" data-parent="#accordion">
                                                        <small>Day 2:</small>Barcelona
                                                        <span class="icon fa fa-angle-down"></span>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div  id="collapseTwo" class="panel-collapse collapse" aria-labelledby="headingTwo">
                                              <div class="panel-body">
                                                    This stateroom features two convertible lower beds, floor-to-ceiling sliding glass doors, private veranda, sitting area (some with sofa bed), refrigerator, 20" multifunction interactive television, direct-dial telephone and voicemail, individual safe, hair dryer, thermostat-controlled air-conditioning, mini-bar, bathroom with bathtub and/or shower, complimentary use of bathrobes, and 24-hour room service.
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Accordion 2 -->
                                        
                                        <!-- Accordion 3 -->
                                        <div class="panel">
                                            <div class="panel-heading" id="headingThree">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle collapsed" data-toggle="collapse" href="#collapseThree" data-parent="#accordion">
                                                        <small>Day 3:</small>French Riviera
                                                        <span class="icon fa fa-angle-down"></span>
                                                    </a>
                                                </h4>
                                              
                                            </div>
                                            <div  id="collapseThree" class="panel-collapse collapse" >
                                              <div class="panel-body">
                                                    This stateroom features two convertible lower beds, floor-to-ceiling sliding glass doors, private veranda, sitting area (some with sofa bed), refrigerator, 20" multifunction interactive television, direct-dial telephone and voicemail, individual safe, hair dryer, thermostat-controlled air-conditioning, mini-bar, bathroom with bathtub and/or shower, complimentary use of bathrobes, and 24-hour room service.
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Accordion 3 -->
                                        
                                        <!-- Accordion 4 -->
                                        <div class="panel">
                                            <div class="panel-heading" id="headingFour">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle collapsed" data-toggle="collapse" href="#collapseFour" data-parent="#accordion">
                                                        <small>Day 4:</small>  Swiss Alps
                                                        <span class="icon fa fa-angle-down"></span>
                                                    </a>
                                                </h4>
                                              
                                            </div>
                                            <div  id="collapseFour" class="panel-collapse collapse" >
                                              <div class="panel-body">
                                                    This stateroom features two convertible lower beds, floor-to-ceiling sliding glass doors, private veranda, sitting area (some with sofa bed), refrigerator, 20" multifunction interactive television, direct-dial telephone and voicemail, individual safe, hair dryer, thermostat-controlled air-conditioning, mini-bar, bathroom with bathtub and/or shower, complimentary use of bathrobes, and 24-hour room service.
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Accordion 4 -->
                                        
                                        <!-- Accordion 5 -->
                                        <div class="panel">
                                            <div class="panel-heading" id="headingFive">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle collapsed" data-toggle="collapse" href="#collapseFive" data-parent="#accordion">
                                                        <small>Day 5:</small>  Swiss Alps
                                                        <span class="icon fa fa-angle-down"></span>
                                                    </a>
                                                </h4>
                                              
                                            </div>
                                            <div  id="collapseFive" class="panel-collapse collapse" >
                                              <div class="panel-body">
                                                    This stateroom features two convertible lower beds, floor-to-ceiling sliding glass doors, private veranda, sitting area (some with sofa bed), refrigerator, 20" multifunction interactive television, direct-dial telephone and voicemail, individual safe, hair dryer, thermostat-controlled air-conditioning, mini-bar, bathroom with bathtub and/or shower, complimentary use of bathrobes, and 24-hour room service.
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Accordion 5 -->
                                        
                                        <!-- Accordion 6 -->
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle collapsed" data-toggle="collapse" href="#collapseSix" data-parent="#accordion">
                                                        <small>Day 6:</small>  Florence
                                                        <span class="icon fa fa-angle-down"></span>
                                                    </a>
                                                </h4>
                                              
                                            </div>
                                            <div  id="collapseSix" class="panel-collapse collapse" >
                                              <div class="panel-body">
                                                    This stateroom features two convertible lower beds, floor-to-ceiling sliding glass doors, private veranda, sitting area (some with sofa bed), refrigerator, 20" multifunction interactive television, direct-dial telephone and voicemail, individual safe, hair dryer, thermostat-controlled air-conditioning, mini-bar, bathroom with bathtub and/or shower, complimentary use of bathrobes, and 24-hour room service.
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Accordion 6 -->
                                        
                                        <!-- Accordion 7 -->
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle collapsed" data-toggle="collapse" href="#collapseSeven" data-parent="#accordion">
                                                        <small>Day 7:</small>  Rome
                                                        <span class="icon fa fa-angle-down"></span>
                                                    </a>
                                                </h4>
                                              
                                            </div>
                                            <div  id="collapseSeven" class="panel-collapse collapse" >
                                              <div class="panel-body">
                                                    This stateroom features two convertible lower beds, floor-to-ceiling sliding glass doors, private veranda, sitting area (some with sofa bed), refrigerator, 20" multifunction interactive television, direct-dial telephone and voicemail, individual safe, hair dryer, thermostat-controlled air-conditioning, mini-bar, bathroom with bathtub and/or shower, complimentary use of bathrobes, and 24-hour room service.
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Accordion 7 -->

                                        <!-- Accordion 8 -->
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle collapsed" data-toggle="collapse" href="#collapseEight" data-parent="#accordion">
                                                        <small>Day 8:</small>  Rome
                                                        <span class="icon fa fa-angle-down"></span>
                                                    </a>
                                                </h4>
                                              
                                            </div>
                                            <div  id="collapseEight" class="panel-collapse collapse" >
                                              <div class="panel-body">
                                                    This stateroom features two convertible lower beds, floor-to-ceiling sliding glass doors, private veranda, sitting area (some with sofa bed), refrigerator, 20" multifunction interactive television, direct-dial telephone and voicemail, individual safe, hair dryer, thermostat-controlled air-conditioning, mini-bar, bathroom with bathtub and/or shower, complimentary use of bathrobes, and 24-hour room service.
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Accordion 8 -->

                                    </div>
                                    <!-- Accordion -->
                                </div>
                            </div>
                            <!-- End Tour Overview Content -->

                        </div>
                    </section>
                    <!-- End Tour Overview -->

                    <!-- Optional Activities -->
                    <section class="optional-acitivites detail-cn" id="optional-acitivites">
                        <div class="row">
                            <div class="col-lg-3 detail-sidebar">
                                <div class="scroll-heading">
                                    <h2>Optional Activities</h2>
                                    <hr class="hr">
                                    <a href="#tour-overview" title="">Overview</a>
                                    <a href="#accomodation" title="">accomodation</a>
                                    <a href="#tour-meals" title="">Meals</a>
                                    <a href="#tour-necessary">No Tip Necessary</a>
                                </div>
                            </div>
                            <div class="col-lg-9 optional-acitivites-cn">
                                <!-- Optional Text -->
                                <div class="tour-detail-text">
                                    <p>
                                        On all trips we have arranged extra activities that we think will enhance your travel experience, but you have a choice as to whether or not you will participate. These are not included in the cost of your trip. They are usually organised on a group participation basis and should be taken into consideration when budgeting your spending money.<br>
                                        None of the Optional Activities on your trip are operated by Topdeck, nor do they form part of your contract with Topdeck for your trip. Topdeck arranges the activity as an agent of the local supplier. Should you participate in any Optional Activities your contract will be with the local supplier and their conditions will apply.
                                    </p>
                                </div>
                                <!-- End Optional Text -->
                                <div class="optional-list">
                                    <!-- Optional Item -->
                                    <h4>United States - Grand Canyon, Arizona</h4>
                                    <p>
                                        <span>Helicopter ride:</span> $220-$265 depending on duration
                                    </p>
                                    <p>
                                        <span>Bike ride:</span> $10-$35 depending on duration
                                    </p>
                                    <!-- End Optional Item -->
                                    <!-- Optional Item -->
                                    <h4>United States - Las Vegas, Nevada</h4>
                                    <p>
                                        <span>Go Karting:</span> $60
                                    </p>
                                    <p>
                                        <span>Gun range:</span> $14-$34
                                    </p>
                                    <p>
                                        <span>Rollercoasters:</span> $14-$34
                                    </p>
                                    <!-- End Optional Item -->

                                    <!-- Optional Item -->
                                    <h4>United States - Yosemite National Park, California</h4>
                                    <p>
                                        <span>Bike hire (seasonal):</span> $11 per hour
                                    </p>
                                    <p>
                                        <span>Ice skating:</span> $31.50 per day
                                    </p>
                                    <p>
                                        <span>Rollercoasters:</span> $10
                                    </p>
                                    <!-- End Optional Item -->
                                    <!-- Optional Item -->
                                    <h4>United States - Las Vegas, Nevada</h4>
                                    <p>
                                        <span>Go Karting:</span> $60
                                    </p>
                                    <p>
                                        <span>Gun range:</span> $14-$34
                                    </p>
                                    <p>
                                        <span>Rollercoasters:</span> $14-$34
                                    </p>
                                    <!-- End Optional Item -->
                                    <!-- Optional Item -->
                                    <h4>United States - Yosemite National Park, California</h4>
                                    <p>
                                        <span>Bike hire (seasonal):</span> $11 per hour
                                    </p>
                                    <p>
                                        <span>Ice skating:</span> $31.50 per day
                                    </p>
                                    <p>
                                        <span>Rollercoasters:</span> $10
                                    </p>
                                    <!-- End Optional Item -->
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Optional Activities -->

                    <!-- Accomodation -->
                    <section class="accomodation detail-cn" id="accomodation">
                        <div class="row">
                            <div class="col-lg-3 detail-sidebar">
                                <div class="scroll-heading">
                                    <h2>accomodation</h2>
                                    <hr class="hr">
                                    <a href="#tour-overview" title="">Overview</a>
                                    <a href="#optional-acitivites" title="">Optional activities</a>
                                    <a href="#tour-meals" title="">Meals</a>
                                    <a href="#tour-necessary">No Tip Necessary</a>
                                </div>
                            </div>
                            <div class="col-lg-9 accomodation-cn">
                                <div class="tour-detail-text">
                                    <p>
                                        Nunc a eleifend metus. Praesent sit amet libero non leo dapibus pharetra vel ultrices nulla. Nullam egestas finibus purus, iaculis ornare sem ornare non. Nam pellentesque justo et arcu scelerisque, non pretium purus feugiat. Fusce rutrum ipsum a lacinia tempor. Duis porta arcu in velit tincidunt dapibus. Integer nisi diam, fermentum in elementum at, volutpat et nulla. Praesent quis tincidunt urna. Phasellus elit est, aliquam et massa a, porta dictum eros. Nulla dapibus arcu at mi bibendum vestibulum. Suspendisse in arcu vitae ipsum facilisis cursus id quis leo. Cras non lacinia tortor. Etiam nec turpis non tortor mollis volutpat. In euismod viverra leo, eu tristique ligula bibendum eu. Aenean eget auctor odio, nec porttitor sem.
                                    </p>
                                    <p>
                                        Vivamus ultricies eget eros ac pellentesque. Morbi egestas euismod sem, vel dapibus ante volutpat id. Integer mollis pulvinar risus in bibendum. Vivamus dolor est, viverra vel aliquam sit amet, finibus ut mi. Nunc viverra enim et nulla suscipit, nec laoreet sapien convallis. Pellentesque congue in dui vehicula viverra. Curabitur eu quam dui. Aliquam sodales ante non gravida varius.
                                    </p>
                                    <br>
                                    
                                        <h5><strong>Important Note:</strong></h5>
                                    <p>
                                        Vestibulum feugiat pulvinar nisi et consequat. Vestibulum eleifend quis ex sit amet consequat. Quisque interdum risus id justo posuere tempor. Donec faucibus est quis neque pellentesque porta. In mattis massa at porttitor aliquam. Suspendisse potenti. Aliquam pretium molestie enim, non viverra ante tempus sed. Nullam efficitur, justo vel auctor porttitor, ex dui tristique libero, quis facilisis lorem nisi vel orci.
                                    </p>
                                    <br>
                                    <p>
                                        Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean mattis eget nisl eu viverra. Maecenas finibus ipsum non vestibulum viverra. Ut vehicula at quam sit amet bibendum. Vestibulum ac tristique risus. Integer odio lacus, mattis eget diam eu, tempus semper lectus. Pellentesque finibus velit orci, nec efficitur elit maximus in. Fusce eleifend id mi id finibus.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Accomodation-->
                    
                    <!-- Meals -->
                    <section class="tour-meals detail-cn" id="tour-meals">
                        <div class="row">
                            <div class="col-lg-3 detail-sidebar">
                                <div class="scroll-heading">
                                    <h2>Meals</h2>
                                    <hr class="hr">
                                    <a href="#tour-overview" title="">Overview</a>
                                    <a href="#optional-acitivites" title="">Optional activities</a>
                                    <a href="#accomodation" title="">Accomodation</a>
                                    <a href="#tour-necessary">No Tip Necessary</a>
                                </div>
                            </div>
                            <div class="col-lg-9 tour-meals-cn">
                                <div class="tour-detail-text">
                                    <ul class="tour-meals-gallery">
                                        <li><img src="images/tour/img-1.jpg" alt=""></li>
                                        <li><img src="images/tour/img-2.jpg" alt=""></li>
                                        <li><img src="images/tour/img-3.jpg" alt=""></li>
                                        <li><img src="images/tour/img-4.jpg" alt=""></li>
                                        <li><img src="images/tour/img-5.jpg" alt=""></li>
                                    </ul>
                                    <p>
                                        Your included meals are detailed in the ‘Also Included’ section of this document.<br>
                                        On most days breakfast is included. Lunch and dinner when included are in local restaurants or you place of accommodation and are either two or three courses. In most cases table water is provided with the meals, and if you wish to purchase additional drinks you can do so at your own expense.
                                    </p>
                                    <p>
                                        If you have any dietary requirements we will make every effort to cater to your specific needs as long as you advise your travel agent or Topdeck Trip Consultant when you book. But please be aware that although we will do everything in our power to arrange it, we cannot guarantee that every restaurant we use will be able to cater to all dietary needs. We also cannot cater for tastes or dislikes, as most of our included evening meals feature a set menu.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Meals-->

                    <!-- Necessary -->
                    <section class="tour-necessary detail-cn" id="tour-necessary">
                        <div class="row">
                            <div class="col-lg-3 detail-sidebar">
                                <div class="scroll-heading">
                                    <h2>No Tip Necessary</h2>
                                    <hr class="hr">
                                    <a href="#tour-overview" title="">Overview</a>
                                    <a href="#optional-acitivites" title="">Optional activities</a>
                                    <a href="#accomodation" title="">Accomodation</a>
                                    <a href="#tour-meals">Meals</a>
                                </div>
                            </div>
                            <div class="col-lg-9 tour-necessary-cn">
                                <div class="tour-detail-text">
                                    <p>
                                        Nunc a eleifend metus. Praesent sit amet libero non leo dapibus pharetra vel ultrices nulla. Nullam egestas finibus purus, iaculis ornare sem ornare non. Nam pellentesque justo et arcu scelerisque, non pretium purus feugiat. Fusce rutrum ipsum a lacinia tempor. Duis porta arcu in velit tincidunt dapibus. Integer nisi diam, fermentum in elementum at, volutpat et nulla. Praesent quis tincidunt urna. Phasellus elit est, aliquam et massa a, porta dictum eros. Nulla dapibus arcu at mi bibendum vestibulum. Suspendisse in arcu vitae ipsum facilisis cursus id quis leo. Cras non lacinia tortor.

                                    </p>
                                    <p>
                                        Your Topdeck crew never expect tips themselves and will not ask for any; that’s not what friends do! We also know how much tipping can cost you. So go ahead, spoil yourself with the money you will save by travelling with Topdeck!
                                    </p>
                                    <br>
                                    <p>
                                        Vestibulum feugiat pulvinar nisi et consequat. Vestibulum eleifend quis ex sit amet consequat. Quisque interdum risus id justo posuere tempor. Donec faucibus est quis neque pellentesque porta. In mattis massa at porttitor aliquam. Suspendisse potenti. Aliquam pretium molestie enim, non viverra ante tempus sed. Nullam efficitur, justo vel auctor porttitor, ex dui tristique libero, quis facilisis lorem nisi vel orci.
                                    </p>
                                    <br>
                                    <p>
                                        Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean mattis eget nisl eu viverra. Maecenas finibus ipsum non vestibulum viverra. Ut vehicula at quam sit amet bibendum. Vestibulum ac tristique risus. Integer odio lacus, mattis eget diam eu, tempus semper lectus. Pellentesque finibus velit orci, nec efficitur elit maximus in. Fusce eleifend id mi id finibus.
                                    </p>
                                </div>

                            </div>
                        </div>
                    </section>
                    <!-- End Necessary-->

                    <section class="detail-footer tour-detail-footer detail-cn">
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