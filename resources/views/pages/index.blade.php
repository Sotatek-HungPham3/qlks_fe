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
                                <input type="text" class="field-input calendar-input" id="check_in"
                                       placeholder="Check in">
                            </div>
                            <div class="form-field field-date">
                                <input type="text" class="field-input calendar-input" id="check_out"
                                       placeholder="Check out">
                            </div>
                            <div class="form-field field-select">
                                <div class="select">
                                    <span>Guest</span>
                                    <select id="guest">
                                        <option selected disabled>Guest</option>
                                        <option value="1">1 Guest</option>
                                        <option value="2">2 Guest</option>
                                        <option value="3">3 Guest</option>
                                        <option value="more">More</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-submit">
                                <button type="submit" class="awe-btn awe-search booking">Book Now</button>
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
                        <h3>Contact us now</h3>
                        <p>Enter your email address and we’ll send you our regular promotional emails, packed with
                            special offers, great deals, and huge discounts</p>
                        <!-- Subscribe Form -->
                        <div class="subscribe-form">
                            <input type="email" id="emailContact" name="" value="" placeholder="Your email"
                                   class="subscribe-input">
                            <button
                                class="awe-btn awe-btn-5 arrow-right text-uppercase awe-btn-lager contact">
                                Contact
                            </button>
                        </div>
                        <!-- End Subscribe Form -->
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

            console.log(1);

            getRoomType();
            getImagesInHomePage();

            async function getRoomType() {
                let url = API_URL + '/room-types';
                lstRoomType = await getData(url);

                let str = '<option value="select" disabled selected>Choose room type</option>';
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

            $('.booking').click(function () {
                let room_type = $('#selectRoomTypes').val();
                let check_in = $('#check_in').val();
                let check_out = $('#check_out').val();
                let guest = $('#guest').val();

                if (room_type === null) {
                    notifyError('Please choose room type');
                    return;
                }
                if (check_in === "") {
                    notifyError('Please choose check in');
                    return;
                }
                if (check_out === "") {
                    notifyError('Please choose check out');
                    return;
                }
                if (guest === null) {
                    notifyError('Please choose guest');
                    return;
                }

                check_in = new Date(check_in).getTime() / 1000;
                check_out = new Date(check_out).getTime() / 1000;

                window.location.href = DOMAIN_FE + `/booking?room_type=${room_type}&check_in=${check_in}&check_out=${check_out}&guest=${guest}`;
            });

            $('#check_in').change(function () {
                let check_in = $(this).val();
                let today = new Date().toLocaleDateString('en-US')

                if (dateCompare(check_in, today) < 1) {
                    notifyError('Please choose check in after today');
                    $(this).val('');
                }
                let check_out = $('#check_out').val();
                if (check_out) {
                    if (dateCompare(check_out, check_in) < 1) {
                        notifyError('Please choose check out large than check in');
                        $(this).val('');
                    }
                }

            });

            $('.contact').click(function () {
                let email = $('#emailContact').val();
                if (email !== "") {
                    window.location.href = DOMAIN_FE + '/contact?email=' + email;
                } else {
                    notifyError('Please enter the email');
                }
            })

            $('#check_out').change(function () {
                let check_out = $(this).val();
                let today = new Date().toLocaleDateString('en-US')

                if (dateCompare(check_out, today) < 1) {
                    notifyError('Please choose check out after today');
                    $(this).val('');
                }

                let check_in = $('#check_in').val();
                if (check_in) {
                    if (dateCompare(check_out, check_in) < 1) {
                        notifyError('Please choose check out large than check in');
                        $(this).val('');
                    }
                }
            });
        });
    </script>
@endsection
