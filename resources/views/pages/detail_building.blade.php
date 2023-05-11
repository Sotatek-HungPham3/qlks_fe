@extends('index')
@section('title-page', 'Khách sạn')
@section('content')
    <!--Banner-->
    <section class="sub-banner">
        <!--Background-->
        <div class="bg-parallax bg-1"></div>
        <!--End Background-->
        <!-- Logo -->
        <div class="logo-banner text-center">
            <a href="#" title="">
                <img src="{{ asset('fe/images/logo-banner.png') }}" alt="">
            </a>
        </div>
        <!-- End Logo -->
    </section>
    <!--End Banner-->

    <!-- Main -->
    <div class="main main-dt">
        <div class="container">
            <div class="main-cn bg-white clearfix">
                <!-- Header Detail -->
                <section class="head-detail">
                    <div class="head-dt-cn">
                        <div class="row">
                            <div class="col-sm-7">
                                <h1 class="nameRoomType"></h1>
                                <div class="start-address">
                                        <span class="star">

                                        </span>
                                    <address class="address">

                                    </address>

                                </div>
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
                            <img id="imageRoomType" src="{{ asset('fe/images/hotel/img-4.jpg') }}" height="500px"
                                 alt="">
                        </div>
                    </div>
                    <!-- End Lager Image -->
                </section>
                <!-- End Detail Slide -->

                <!-- Hotel Content One -->
                <section class="hotel-content detail-cn" id="hotel-content">
                    <div class="row">
                        <div class="col-lg-3 detail-sidebar">
                            <!-- Hight Light -->
                            <div class="hight-light">

                                <h2 class="nameRoomType"></h2>
                                <!-- Vote Text -->
                                <div class="row">
                                    <!-- Recommend -->
                                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-6 vote-text">
                                        <p><span>95</span>%</p>
                                        <small>Member Recommend</small>
                                    </div>
                                    <!-- End Recommend -->
                                    <!-- Tripadvitsor -->
                                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-6  vote-text">
                                         <span class="star">

                                        </span>
                                        <small class="descStar"></small>
                                    </div>
                                    <!-- End Tripadvitsor -->
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-12">
                                        <hr class="hr">

                                        <!-- Quote -->
                                        <blockquote class="quote-sidebar">
                                            <p>
                                                Great location tucked behind the Bookawesome Hotel on Ha Noi. Good value
                                                for money. The suite I booked was good.<br>
                                                <span><b>Cristiano Ronaldo</b> - Portugal,  10/05/2023</span>
                                            </p>
                                        </blockquote>
                                        <!-- End Quote -->
                                    </div>
                                </div>
                                <!-- End Vote Text -->


                            </div>
                            <!-- End Hight Light -->
                        </div>

                        <!-- Description -->
                        <div class="col-lg-9 hl-customer-like">

                            <h2>Why customer like this hotel</h2>

                            <!-- Custom link field -->
                            <div class="customer-like">
                                    <span class="cs-like-label">
                                        Nearest transport
                                    </span>
                                <ul>
                                    <li>Gia Lam Station (0.5km / 5 min walk)</li>
                                    <li>Long Bien Station (3km / 10 min walk)</li>
                                </ul>
                            </div>
                            <!-- End Custom link field -->

                            <!-- Custom link field -->
                            <div class="customer-like">
                                    <span class="cs-like-label">
                                        Distance to airport
                                    </span>
                                <ul>
                                    <li> Noi Bai Airport (10.0 Km)</li>
                                </ul>
                            </div>
                            <!-- End Custom link field -->

                            <!-- Custom link field -->
                            <div class="customer-like">
                                    <span class="cs-like-label">
                                        Nearest transportCustomer comments
                                    </span>
                                <ul>
                                    <li>Comfortable and clean, Friendly staff, Value for money</li>
                                </ul>
                            </div>
                            <!-- End Custom link field -->

                            <!-- Custom link field -->
                            <div class="customer-like">
                                    <span class="cs-like-label">
                                        Top attractions in the area
                                    </span>
                                <ul>
                                    <li>Ho Guom (5km / 20 min walk)</li>
                                    <li>West Lake (8km Km / 30 min walk)</li>
                                    <li>Ho Chi Minh mausoleum (8 Km)</li>
                                </ul>
                            </div>
                            <!-- End Custom link field -->

                        </div>
                        <!-- End Description -->
                    </div>

                </section>
                <!-- End Hotel Content One -->

                <!-- Check Rates-->
                <section class="check-rates detail-cn" id="check-rates">
                    <div class="row">
                        <div class="col-lg-3 detail-sidebar">
                            <div class="scroll-heading">
                                <h2>Check Rates &amp; Availability</h2>
                                <hr class="hr">
                                <a href="#hl-features" title="">Features</a>
                                <a href="#details-policies" title="">Details &amp; Policies</a>
                            </div>
                        </div>
                        <div class="col-lg-9 check-rates-cn">

                            <!-- Form Check Hotel Availability -->
                            <div class="check-rates-form">
                                <h3>Other room types</h3>
                            </div>
                            <!-- Form Check Hotel Availability -->
                            <!-- Hotel Availability -->
                            <div class="hl-availability">
                                <div class="table-responsive">
                                    <table class="table table-availability tableRoomType">
                                        <tr>
                                            <th>Room Types</th>
                                            <th>Rate <span>(/night)</span></th>
                                            <th></th>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <!-- Hotel Availability -->
                        </div>
                    </div>
                </section>
                <!-- End Check Rates -->

                <!-- Hotel Features -->
                <section class="hl-features detail-cn" id="hl-features">
                    <div class="row">
                        <div class="col-lg-3 detail-sidebar">
                            <div class="scroll-heading">
                                <h2>Features</h2>
                                <hr class="hr">
                                <a href="#check-rates" title="">Check Rates &amp; Availability</a>
                                <a href="#details-policies" title="">Details &amp; Policies</a>
                            </div>
                        </div>
                        <div class="col-lg-9 hl-features-cn">
                            <div class="featured-service">
                                <h3>Utilities</h3>
                                <ul class="service-list">

                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Hotel Features -->

                <!-- Details-Policies -->
                <section class="details-policies detail-cn" id="details-policies">
                    <div class="row">
                        <div class="col-lg-3 detail-sidebar">
                            <div class="scroll-heading">
                                <h2>Details &amp; Policies</h2>
                                <hr class="hr">
                                <a href="#check-rates" title="">Check Rates &amp; Availability</a>
                                <a href="#hl-features" title="">Features</a>
                            </div>
                        </div>
                        <div class="col-lg-9 details-policies-cn">
                            <!-- Details Policies Item -->
                            <div class="policies-item">
                                <h3 class="hotel-description"></h3>
                                <p class="detail-description">

                                </p>
                            </div>
                            <!-- End Details Policies Item -->

                        </div>
                    </div>
                </section>
                <!-- End Details-Policies -->

                <section class="detail-footer detail-cn">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-9 detail-footer-cn">
                            <!-- Show More Book -->
                            <div class="row">
                                <div class="col-xs-5 ">

                                </div>
                                <div class="col-xs-7 text-right">
                                    <p class="viewImages">
                                        <a href="#" title="" class="awe-btn awe-btn-1 awe-btn-lager">View All Images</a>
                                    </p>
                                </div>
                            </div>
                            <!-- End Show More Book -->
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- End Main -->
    <li class="unselected">
        <figure>
            <div class="icon-service">
                <i class="fa fa-check" style="color: green;"></i>
            </div>
            <figcaption>Free breakfast</figcaption>
        </figure>
    </li>
@endsection

@section('js')
    <script>
        $(document).ready(function () {
            var slug = '{{$slug}}';

            getDetailRoomType();
            getRoomTypeSpecial();
            getAllUtilities();
            // getPromotionExists();

            async function getDetailRoomType() {
                let url = API_URL + '/room-type/' + slug;
                let data = await getData(url);

                if (data) {
                    let strPrice = `From-<span>${FORMATTER.format(data.price)}</span>/night
                                   <a href="#" title="" class="awe-btn awe-btn-1 awe-btn-lager">Book Now</a>`;

                    let strStar = '';
                    for (let i = 0; i < data.star; i++) {
                        strStar += '<i class="glyphicon glyphicon-star"></i>';
                    }

                    $('.hotel-description').text(`${data.name} Description`);
                    $('.detail-description').html(data.description);
                    $('#imageRoomType').attr('src', DOMAIN_S3 + '/' + data.image);
                    $('.descStar').text(`${data.star} star Very Good`);
                    $('.star').html(strStar);
                    $('.nameRoomType').text(data.name);
                    $('.price-book').html(strPrice);
                }
            }

            async function getRoomTypeSpecial() {
                let url = API_URL + '/list-room-type-special/' + slug;
                let data = await getData(url);

                if (data.length > 0) {
                    let str = '';
                    for (const item of data) {
                        let imageRoomType = DOMAIN_S3 + '/' + item.image;
                        str += `
                        <tr>
                                            <td class="avai-td-text">
                                                <figure>
                                                    <img src="${imageRoomType}" alt="">
                                                </figure>
                                                <h3>${item.name}</h3>
                                                <p>${item.name} Room</p>
                                            </td>
                                            <td class="avai-td-price">
                                                <span class="price">${FORMATTER.format(item.price)}<small>/night</small></span>
                                            </td>

                                            <td class="avai-td-book">
                                                <a href="#" class="awe-btn awe-btn-1 awe-btn-small">Book</a>
                                            </td>
                                        </tr>`;
                    }
                    $('.tableRoomType').append(str);
                }
            }

            async function getAllUtilities() {
                let url = API_URL + '/utilities';
                let data = await getData(url);
                let urlUtilitiesOfRoomType = API_URL + '/utilities/room-type/' + slug;
                let utilitiesOfRoomType = await getData(urlUtilitiesOfRoomType);

                console.log(utilitiesOfRoomType)
                let str = '';
                if (data.length > 0) {
                    for (const item of data) {
                        let checkExistUtility = utilitiesOfRoomType.find(utility => utility.id === item.id);
                        let icon = '<i class="fa fa-times" style="color: red;" aria-hidden="true"></i>';
                        if (checkExistUtility) {
                            icon = `
                                            <i class="fa fa-check" style="color: green;"></i>
                                      `;
                        }
                        str += ` <li class="unselected" style="white-space: nowrap; overflow: hidden;">
                                    <figure>
                                                <div class="icon-service">
                                        ${icon}
</div>
                                        <figcaption data-toggle="tooltip" title="${item.name}">${item.name}</figcaption>
                                    </figure>
                                </li>`
                    }
                }
                $('.service-list').html(str);
            }

            // async function getPromotionExists() {
            //     let url = API_URL + '/promotion/' + slug;
            //     let data = await getData(url);
            //
            //     console.log(data);
            // }

        })
    </script>
@endsection
