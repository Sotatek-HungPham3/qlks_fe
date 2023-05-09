@extends('index')
@section('title-page', 'Trang Chủ')
@section('content')

    <!--Banner-->
    <section class="banner">

        <!--Background-->
        <div class="bg-parallax bg-1"></div>
        <!--End Background-->

        <div class="container">

            <div class="logo-banner text-center">
                <a href="#" title="">
                    <img src="{{ asset('fe/images/logo-banner.png') }}" alt="">
                </a>
            </div>

            <!-- Banner Content -->
            <div class="banner-cn">

                <!-- Tabs Cat Form -->
                <ul class="tabs-cat text-center row">
                    <li class="cate-item active col-xs-2">
                        <a data-toggle="tab" href="#form-hotel" title=""><span>Hotel</span><img
                                src="{{ asset('fe/images/icon-hotel.png') }}" alt=""></a>
                    </li>
                </ul>
                <!-- End Tabs Cat -->

                <!-- Tabs Content -->
                <div class="tab-content">

                    <!-- Search Hotel -->
                    <div class="form-cn form-hotel tab-pane active in" id="form-hotel">
                        <h2>Where would you like to go?</h2>
                        <div class="form-search clearfix">
                            <div class="form-field field-destination">
                                <div class="select">
                                    <span>Room Type: <small>Deluxe, Supervisor, ...</small></span>
                                    <select id="selectRoomTypes">

                                    </select>
                                </div>
                            </div>
                            <div class="form-field field-date">
                                <input type="text" class="field-input calendar-input" placeholder="Check in">
                            </div>
                            <div class="form-field field-date">
                                <input type="text" class="field-input calendar-input" placeholder="Check out">
                            </div>
                            <div class="form-field field-select">
                                <div class="select">
                                    <span>Guest</span>
                                    <select>
                                        <option>Guest</option>
                                        <option>1 Guest</option>
                                        <option>2 Guest</option>
                                        <option>3 Guest</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-submit">
                                <button type="submit" class="awe-btn awe-btn-lager awe-search">Search</button>
                            </div>
                        </div>
                    </div>
                    <!-- End Search Hotel -->

                </div>
                <!-- End Tabs Content -->

            </div>
            <!-- End Banner Content -->

        </div>

    </section>
    <!--End Banner-->

    <!-- Sales -->
    <section class="sales">
        <!-- Title -->
        <div class="title-wrap">
            <div class="container">
                <div class="travel-title float-left">
                    <h2>Room Types: <span id="spanRoomType"></span></h2>
                </div>
                <a href="#" title="" class="awe-btn awe-btn-5 awe-btn-lager arrow-right text-uppercase float-right">Show
                    Images of Room Type</a>
            </div>
        </div>
        <!-- End Title -->
        <!-- Hot Sales Content -->
        <div class="container">
            <div class="sales-cn">
                <div class="row listRoomType">

                </div>
            </div>
        </div>
        <!-- End Hot Sales Content -->
    </section>
    <!-- End Sales -->

    <!-- Travel Destinations -->
    <section class="destinations">

        <!-- Title -->
        <div class="title-wrap">
            <div class="container">
                <div class="travel-title float-left">
                    <h2>Images</h2>
                </div>
                <a href="#" title="" class="awe-btn awe-btn-5 arrow-right awe-btn-lager text-uppercase float-right">view
                    all</a>
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
                    <!-- Destinations Grid -->
                    <div class="col-md-12 col-lg-12">
                        <div class="tab-content destinations-grid">
                            <!-- Tab One -->
                            <div id="destinations-1" class="clearfix tab-pane fade active in ">

                            </div>
                            <!-- End Tab One -->
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
            var lstRoomType;
            var images

            getRoomType();
            getImagesInHomePage();

            async function getRoomType() {
                let url = API_URL + '/room-types';
                lstRoomType = await getData(url);

                let str = '';
                let strSpanRoomType = '';
                let listRoomType = '';
                if (lstRoomType.length > 0) {
                    let i = 0;
                    for (const item of lstRoomType) {
                        let starRoomType = '';
                        if (item.star) {
                            for (let i = 0; i < item.star; i++) {
                                starRoomType += `<i class="fa fa-star" aria-hidden="true" style="color: #ffe100;"></i> `;
                            }
                        }
                        let image = DOMAIN_S3 + '/' + item.image;
                        str += `<option value="${item.id}">${item.name}</option>`;
                        listRoomType += `
                    <div class="col-xs-6 col-md-3">
                        <div class="sales-item">
                            <figure class="home-sales-img">
                                <a href="#" title="">
                                    <img src="${image}" alt="">
                                </a>
                                <figcaption>
                                    Show <span>Room</span>
                                </figcaption>
                            </figure>
                            <div class="home-sales-text">
                                <div class="home-sales-name-places">
                                    <div class="home-sales-name">
                                        <a href="#" title="">${item.name}</a>
                                    </div>
                                        <div class="home-sales-places">
                                            <a href="#" title="">${starRoomType}</a>
                                        </div>
                                </div>
                                <hr class="hr">
                                <div class="price-box">
                                    <span class="price special-price">${FORMATTER.format(item.priceRoomType)}<small>/night</small></span>
                                </div>
                            </div>
                        </div>
                    </div>
                   `;
                        if (i === lstRoomType.length - 1) {
                            strSpanRoomType += `${item.name}`;
                        } else {
                            strSpanRoomType += `${item.name} , `;
                        }
                        i++;
                    }
                }
                $('#selectRoomTypes').html(str);
                $('#spanRoomType').text(strSpanRoomType);
                $('.listRoomType').html(listRoomType);
            }

            async function getImagesInHomePage() {
                let url = API_URL + '/images-home-page';
                images = await getData(url);

                let str = '';
                if (images.length > 0) {
                    for (const item of images) {
                        let urlImage = DOMAIN_S3 + '/' + item.url;
                        str += `  <!-- Destinations Item -->
                                <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                    <div class="destinations-item ">
                                        <figure class="destinations-img">
                                            <a href="#" title="">
                                                <img src="${urlImage}" alt="" height="250px";>
                                            </a>
                                        </figure>
                                    </div>
                                </div>
                                <!-- End Destinations Item -->
                              `;
                    }
                }

                $('#destinations-1').html(str);
            }
        });
    </script>
@endsection
