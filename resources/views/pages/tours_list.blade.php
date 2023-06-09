@extends('index')
@section('title-page', 'Danh sách chuyến du lịch')
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
                <div class="main-cn tour-page bg-white clearfix">
                    <div class="row">

                    <!-- Cruise Right -->
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
                        
                        <section class="cruise-list">

                            <!-- Sort by and View by -->
                            <div class="sort-view clearfix">
                                <!-- Sort by -->
                                <div class="sort-by float-left">
                                    <label>Sort by: </label>

                                    <div class="sort-select select float-left">
                                        <span>Departure Date</span>
                                        <select>
                                            <option>Departure Date</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>

                                    <div class="sort-select select float-left">
                                        <span>Length</span>
                                        <select>
                                            <option>Length</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>

                                    <div class="sort-select select float-left">
                                        <span>Cruise Line</span>
                                        <select>
                                            <option>Cruise Line</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>

                                    <div class="sort-select select float-left">
                                        <span>Pricing</span>
                                        <select>
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
                                        <li><a href="#" title="" class="current"><img src="images/icon-grid.png" alt=""> List</a></li>
                                        <li><a href="#" title=""><img src="images/icon-map.png" alt=""> Map</a></li>
                                    </ul>
                                </div>
                                <!-- View by -->
                            </div>
                            <!-- End Sort by and View by -->

                            <!-- Cruise Content -->
                            <div class="cruise-list-cn tour-list-cn">
                                <!-- Item -->
                                <div class="cruise-item">
                                    <figure class="cruise-img">
                                        <a href="tour-detail.html">
                                            <img src="images/tour/img-6.jpg" alt="">
                                        </a>
                                    </figure>   
                                    <div class="cruise-text">
                                        <div class="cruise-name">
                                            <a href="tour-detail.html">European Contrasts plus Corfu</a>
                                        </div>
                                        <ul class="ship-port">
                                            <li>
                                                <span class="label">Featuring:</span>
                                                France, Switzerland, Spain, Monaco, Italy, Vatican City, Austria, Germany, Czech Republic, Netherlands, Belgium (in transit)
                                            </li>
                                        </ul>
                                        <div class="price-box">
                                            <span class="price">
                                                From<br>
                                                <ins>$429</ins>
                                            </span>
                                            <span class="price night">
                                                <ins>6</ins><small>/day</small>
                                            </span>
                                        </div>
                                    </div>
                                </div> 
                                <!-- End Item -->

                                <!-- Item -->
                                <div class="cruise-item">
                                    <figure class="cruise-img">
                                        <a href="tour-detail.html">
                                            <img src="images/tour/img-7.jpg" alt="">
                                        </a>
                                    </figure>   
                                    <div class="cruise-text">
                                        <div class="cruise-name">
                                            <a href="tour-detail.html">Winter Wanderer</a>
                                        </div>
                                        <ul class="ship-port">
                                            <li>
                                                <span class="label">Featuring:</span>
                                                France, Switzerland, Spain, Monaco, Italy, Vatican City, Austria, Germany, Czech Republic, Netherlands, Belgium (in transit)
                                            </li>
                                        </ul>
                                        <div class="price-box">
                                            <span class="price">
                                                From<br>
                                                <ins>$429</ins>
                                            </span>
                                            <span class="price night">
                                                <ins>6</ins><small>/day</small>
                                            </span>
                                        </div>
                                    </div>
                                </div> 
                                <!-- End Item -->

                                <!-- Item -->
                                <div class="cruise-item">
                                    <figure class="cruise-img">
                                        <a href="tour-detail.html">
                                            <img src="images/tour/img-8.jpg" alt="">
                                        </a>
                                    </figure>   
                                    <div class="cruise-text">
                                        <div class="cruise-name">
                                            <a href="tour-detail.html">Berlin &amp; Prague plus Vienna</a>
                                        </div>
                                        <ul class="ship-port">
                                            <li>
                                                <span class="label">Featuring:</span>
                                                France, Switzerland, Spain, Monaco, Italy, Vatican City, Austria, Germany, Czech Republic, Netherlands, Belgium (in transit)
                                            </li>
                                        </ul>
                                        <div class="price-box">
                                            <span class="price">
                                                From<br>
                                                <ins>$429</ins>
                                            </span>
                                            <span class="price night">
                                                <ins>6</ins><small>/day</small>
                                            </span>
                                        </div>
                                    </div>
                                </div> 
                                <!-- End Item -->

                                <!-- Item -->
                                <div class="cruise-item">
                                    <figure class="cruise-img">
                                        <a href="tour-detail.html">
                                            <img src="images/tour/img-9.jpg" alt="">
                                        </a>
                                    </figure>   
                                    <div class="cruise-text">
                                        <div class="cruise-name">
                                            <a href="tour-detail.html">European Contrasts plus Corfu</a>
                                        </div>
                                        <ul class="ship-port">
                                            <li>
                                                <span class="label">Featuring:</span>
                                                France, Switzerland, Spain, Monaco, Italy, Vatican City, Austria, Germany, Czech Republic, Netherlands, Belgium (in transit)
                                            </li>
                                        </ul>
                                        <div class="price-box">
                                            <span class="price">
                                                From<br>
                                                <ins>$429</ins>
                                            </span>
                                            <span class="price night">
                                                <ins>6</ins><small>/day</small>
                                            </span>
                                        </div>
                                    </div>
                                </div> 
                                <!-- End Item -->

                                <!-- Item -->
                                <div class="cruise-item">
                                    <figure class="cruise-img">
                                        <a href="tour-detail.html">
                                            <img src="images/tour/img-10.jpg" alt="">
                                        </a>
                                    </figure>   
                                    <div class="cruise-text">
                                        <div class="cruise-name">
                                            <a href="tour-detail.html">European Inspiration</a>
                                        </div>
                                        <ul class="ship-port">
                                            <li>
                                                <span class="label">Featuring:</span>
                                                France, Switzerland, Spain, Monaco, Italy, Vatican City, Austria, Germany, Czech Republic, Netherlands, Belgium (in transit)
                                            </li>
                                        </ul>
                                        <div class="price-box">
                                            <span class="price">
                                                From<br>
                                                <ins>$429</ins>
                                            </span>
                                            <span class="price night">
                                                <ins>6</ins><small>/day</small>
                                            </span>
                                        </div>
                                    </div>
                                </div> 
                                <!-- End Item -->

                                <!-- Item -->
                                <div class="cruise-item">
                                    <figure class="cruise-img">
                                        <a href="tour-detail.html">
                                            <img src="images/tour/img-11.jpg" alt="">
                                        </a>
                                    </figure>   
                                    <div class="cruise-text">
                                        <div class="cruise-name">
                                            <a href="tour-detail.html">Winter Wanderer</a>
                                        </div>
                                        <ul class="ship-port">
                                            <li>
                                                <span class="label">Featuring:</span>
                                                France, Switzerland, Spain, Monaco, Italy, Vatican City, Austria, Germany, Czech Republic, Netherlands, Belgium (in transit)
                                            </li>
                                        </ul>
                                        <div class="price-box">
                                            <span class="price">
                                                From<br>
                                                <ins>$429</ins>
                                            </span>
                                            <span class="price night">
                                                <ins>6</ins><small>/day</small>
                                            </span>
                                        </div>
                                    </div>
                                </div> 
                                <!-- End Item -->

                                <!-- Item -->
                                <div class="cruise-item">
                                    <figure class="cruise-img">
                                        <a href="tour-detail.html">
                                            <img src="images/tour/img-12.jpg" alt="">
                                        </a>
                                    </figure>   
                                    <div class="cruise-text">
                                        <div class="cruise-name">
                                            <a href="tour-detail.html">Berlin &amp; Prague plus Vienna</a>
                                        </div>
                                        <ul class="ship-port">
                                            <li>
                                                <span class="label">Featuring:</span>
                                                France, Switzerland, Spain, Monaco, Italy, Vatican City, Austria, Germany, Czech Republic, Netherlands, Belgium (in transit)
                                            </li>
                                        </ul>
                                        <div class="price-box">
                                            <span class="price">
                                                From<br>
                                                <ins>$429</ins>
                                            </span>
                                            <span class="price night">
                                                <ins>6</ins><small>/day</small>
                                            </span>
                                        </div>
                                    </div>
                                </div> 
                                <!-- End Item -->

                                <!-- Item -->
                                <div class="cruise-item">
                                    <figure class="cruise-img">
                                        <a href="tour-detail.html">
                                            <img src="images/tour/img-13.jpg" alt="">
                                        </a>
                                    </figure>   
                                    <div class="cruise-text">
                                        <div class="cruise-name">
                                            <a href="tour-detail.html">European Contrasts plus Corfu</a>
                                        </div>
                                        <ul class="ship-port">
                                            <li>
                                                <span class="label">Featuring:</span>
                                                France, Switzerland, Spain, Monaco, Italy, Vatican City, Austria, Germany, Czech Republic, Netherlands, Belgium (in transit)
                                            </li>
                                        </ul>
                                        <div class="price-box">
                                            <span class="price">
                                                From<br>
                                                <ins>$429</ins>
                                            </span>
                                            <span class="price night">
                                                <ins>6</ins><small>/day</small>
                                            </span>
                                        </div>
                                    </div>
                                </div> 
                                <!-- End Item -->

                                <!-- Item -->
                                <div class="cruise-item">
                                    <figure class="cruise-img">
                                        <a href="tour-detail.html">
                                            <img src="images/tour/img-14.jpg" alt="">
                                        </a>
                                    </figure>   
                                    <div class="cruise-text">
                                        <div class="cruise-name">
                                            <a href="tour-detail.html">European Inspiration</a>
                                        </div>
                                        <ul class="ship-port">
                                            <li>
                                                <span class="label">Featuring:</span>
                                                France, Switzerland, Spain, Monaco, Italy, Vatican City, Austria, Germany, Czech Republic, Netherlands, Belgium (in transit)
                                            </li>
                                        </ul>
                                        <div class="price-box">
                                            <span class="price">
                                                From<br>
                                                <ins>$429</ins>
                                            </span>
                                            <span class="price night">
                                                <ins>6</ins><small>/day</small>
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
                                <div class="row">
                                    <div class="form-search clearfix">
                                        <div class="form-field col-md-12">
                                            <label for="region"><span>Region:</span> Wourldwide, Africa...</label>
                                            <input type="text" name="region" id="region" value="" class="field-input">
                                        </div>
                                        <div class="form-field field-select col-md-12">
                                            <div class="select">
                                                <span>Country</span>
                                                <select name="guest">
                                                    <option>Country</option>
                                                    <option>Viet Nam</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-field field-select col-md-12">
                                            <div class="select">
                                                <span>Tour Style</span>
                                                <select name="guest">
                                                    <option>Tour Style</option>
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
                                    <form action="http://envato.megadrupal.com/html/bookawesome/action" method="get">
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
                            <!-- Hotel Location -->
                            <div class="widget-sidebar facilities-sidebar">
                                <h4 class="title-sidebar">Location</h4>
                                <ul class="widget-ul">
                                    <li>
                                        <div class="radio-checkbox">
                                            <input id="facilities-1" type="checkbox" class="checkbox" />
                                            <label for="facilities-1">Albania</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input id="facilities-2" type="checkbox" class="checkbox" checked />
                                            <label for="facilities-2">Austria</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input id="facilities-3" type="checkbox" class="checkbox" />
                                            <label for="facilities-3">Bulgaria</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input id="facilities-4" type="checkbox" class="checkbox" />
                                            <label for="facilities-4">Croatia</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input id="facilities-5" type="checkbox" class="checkbox" />
                                            <label for="facilities-5">Czech Republic</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input id="facilities-6" type="checkbox" class="checkbox" />
                                            <label for="facilities-6">France</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input id="facilities-7" type="checkbox" class="checkbox" />
                                            <label for="facilities-7">Germany</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input id="facilities-8" type="checkbox" class="checkbox" />
                                            <label for="facilities-8">Greece</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input id="facilities-9" type="checkbox" class="checkbox" />
                                            <label for="facilities-9">Hungary</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input id="facilities-10" type="checkbox" class="checkbox" />
                                            <label for="facilities-10">Italy</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input id="facilities-11" type="checkbox" class="checkbox" />
                                            <label for="facilities-11">Macedonia</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input id="facilities-12" type="checkbox" class="checkbox" />
                                            <label for="facilities-12">Netherlands</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input id="facilities-13" type="checkbox" class="checkbox" />
                                            <label for="facilities-13">Poland</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input id="facilities-14" type="checkbox" class="checkbox" />
                                            <label for="facilities-14">Slovakia</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input id="facilities-15" type="checkbox" class="checkbox" />
                                            <label for="facilities-15">Spain</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input id="facilities-16" type="checkbox" class="checkbox" />
                                            <label for="facilities-16">Switzerland</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input id="facilities-17" type="checkbox" class="checkbox" />
                                            <label for="facilities-17">Turkey</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input id="facilities-18" type="checkbox" class="checkbox" />
                                            <label for="facilities-18">United Kingdom</label>
                                        </div>
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
        <!-- End Main -->
@endsection