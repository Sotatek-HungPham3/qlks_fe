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
                        <li class="step-part">
                            <span>2</span>
                            <p>Your Booking &amp; Payment Details</p>
                        </li>
                        <li>
                            <span>3</span>
                            <p>Booking Completed!</p>
                        </li>
                    </ul>
                    <!-- ENd Step -->
                </div>
                <!-- Payment Room -->
                <div class="payment-room">

                </div>
                <!-- Payment Room -->

                <div class="payment-form">
                    <div class="row form">
                        <div class="col-md-6">
                            <h2>Your detail booking</h2>
                            <div class="form-field">
                                <label for="guest">Guest</label>
                                <input type="text" class="field-input" id="guest" disabled>
                            </div>
                            <div class="form-field">
                                <label for="checkIn">Check In</label>
                                <input type="text" class="field-input" id="checkIn" disabled>
                            </div>
                            <div class="form-field">
                                <label for="checkIn">Check Out</label>
                                <input type="text" class="field-input" id="checkOut" disabled>
                            </div>
                            <div class="form-field">
                                <label for="note">Note</label>
                                <textarea id="note" rows="10" class="field-input" disabled>

                                </textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h2>Your Information</h2>
                            <div class="form-field">
                                <label for="name">Name <span style="color: red;">(*)</span></label>
                                <input type="text" placeholder="First Name" class="field-input" id="name">
                            </div>
                            <div class="form-field">
                                <label for="name">Email <span style="color: red;">(*)</span></label>
                                <input type="email" placeholder="Email" class="field-input" id="email">
                            </div>
                            <div class="form-field">
                                <label for="name">Confirm Email <span style="color: red;">(*)</span></label>
                                <input type="email" placeholder="Email (confirm)" class="field-input" id="cf_email">
                            </div>
                            <div class="form-field">
                                <label for="name">Phone <span style="color: red;">(*)</span></label>
                                <input type="text" placeholder="Phone number" class="field-input" id="phone">
                            </div>
                            <div class="form-field">
                                <label for="name">Passport / Citizen Identification <span style="color: red;">(*)</span></label>
                                <input type="text" placeholder="Country of Passport" class="field-input"
                                       id="identification_number">
                            </div>
                            <div class="form-field">
                                <span style="color: red;">(*)</span> <label>Please enter your personal information
                                    correctly.</label>
                            </div>
                        </div>
                    </div>

                    <div class="submit text-center">
                        <p>
                            By selecting to complete this booking I acknowledge that I have read and accept the <span>rules &amp; restrictions terms &amp; conditions</span>
                            , and <span>privacy policy</span>.
                        </p>

                        <button class="awe-btn awe-btn-1 awe-btn-lager pay">Pay</button>
                        <button class="btn btn-danger backBooking">Back to Booking</button>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Main -->
@endsection

@section('js')
    <script>
        $(document).ready(function () {
            var booking = JSON.parse(localStorage.getItem(BOOKING));
            var totalBill = 0;
            if (!booking) {
                $.toast({
                    text: "You haven't selected a room. Please choose before pay.",
                    icon: 'warning',
                    hideAfter: '5000',
                    position: 'bottom-right',


                    afterHidden: function () {
                        window.location.href = DOMAIN_FE + '/booking';
                    },
                })
            }
            var rooms = JSON.parse(booking.room);

            getDetail(rooms, booking);

            $('.backBooking').click(function () {
                window.location.href = DOMAIN_FE + '/booking';
            });

            async function getDetail(rooms, booking) {
                const SETTING = JSON.parse(localStorage.getItem(SETTINGS_KEY))
                $('#guest').val(booking.guest);
                $('#checkIn').val(new Date(booking.checkIn).toDateString());
                $('#checkOut').val(new Date(booking.checkOut).toDateString());
                $('#note').val(booking.note);
                let str = '';
                for (const item of rooms) {
                    if (parseInt(item.value) !== 0) {
                        let numberRoom = item.value;
                        let days = subDate(booking.checkIn, booking.checkOut);
                        let url = API_URL + '/detail-room-type/' + item.roomTypeId;
                        let data = await getData(url);
                        if (data) {
                            let totalPrice = parseFloat(numberRoom) * parseInt(days) * parseFloat(data.price);
                            totalBill += totalPrice;
                            let star = '';
                            for (let i = 0; i < data.star; i++) {
                                star += '<i class="glyphicon glyphicon-star"></i>';
                            }
                            str += `<div class="row">
                        <div class="col-lg-6">
                            <div class="payment-info">
                                <h2>${data.name}</h2>
                                <span class="star-room">
                                      ${star}
                                    </span>
                                <ul>
                                    <li>
                                        <span>Location:</span>
                                        ${SETTING.address}
                                    </li>
                                    <li>
                                        <span>Price:</span>
                                        ${FORMATTER.format(data.price)} / 1 night
                                       </li>
 <li>
                                        <span>Total beds:</span>
                                        ${data.total_bed} beds
                                       </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="payment-price">

                                <figure>
                                    <img height="184px" src="${DOMAIN_S3 + '/' + data.image}" alt="">
                                </figure>
                                <div class="total-trip">
                                        <span>
                                            ${numberRoom} Room x ${days} Nights<br>
                                            ${FORMATTER.format(data.price)}<small>/night</small>
                                        </span>

                                    <p>
                                        Total:
                                        <ins>${FORMATTER.format(totalPrice)}</ins>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>`
                        }
                    }
                }
                str += `<div class="col-md-12" style="text-align: center; padding-top: 3em;">
                        <span style="font-size: 1em; font-weight: 600">TOTAL PRICE</span>: <span style="color: red; font-size: 1.5em">${FORMATTER.format(totalBill)}</span> <span style="font-size: 1.5em">=</span> <span style="color: red; font-size: 1.5em">${FORMATTER_VND.format(totalBill * 21000)}</span>
                        </div>;`
                $('.payment-room').html(str);
            }

            $('.pay').click(async function () {
                let name = $('#name').val();
                if (name === "") {
                    notifyError("Please enter the name");
                    return;
                }
                let email = $('#email').val();
                if (email === "") {
                    notifyError("Please enter the email");
                    return;
                }
                let cf_email = $('#cf_email').val();
                if (cf_email === "") {
                    notifyError("Please enter the email");
                    return;
                }
                if (cf_email !== email) {
                    notifyError("Email confirmation is not the same email");
                    return;
                }
                let phone = $('#phone').val();
                if (phone === "") {
                    notifyError("Please enter the phone");
                    return;
                }
                let passport = $('#identification_number').val();
                if (passport === "") {
                    notifyError("Please enter the passport / citizen identification");
                    return;
                }

                let params = {
                    checkIn: booking.checkIn,
                    checkOut: booking.checkOut,
                    guest: booking.guest,
                    note: booking.note,
                    name,
                    email,
                    cf_email,
                    phone,
                    identification_number: passport,
                    rooms: booking.room,
                    totalBill: totalBill,
                    currency: 'usd'
                }
                let url = API_URL + '/payments/create';
                let data = await postData(url, params);

                window.location.href = data.data;
            })
        })
    </script>
@endsection
