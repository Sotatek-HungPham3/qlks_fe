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
                <img src="{{ asset('fe/images/logo-banner.png') }}" alt="">
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
                        <li class="step-part">
                            <span>1</span>
                            <p>Choose Your Room</p>
                        </li>
                        <li>
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
                <div class="payment-form">
                    <div class="row form">
                        <div class="col-md-6">
                            <h2>Booking Information</h2>
                            <div class="form-field">
                                <label for="checkIn">Check in</label>
                                <input type="date" placeholder="Check in" class="field-input" id="checkIn">
                            </div>
                            <div class="form-field">
                                <label for="checkOut">Check out</label>
                                <input type="date" placeholder="Check out" class="field-input" id="checkOut">
                            </div>
                            <div class="form-field">
                                <label for="guest">Guest</label>
                                <input type="text" placeholder="Guest" class="field-input" id="guest">
                            </div>
                            <div class="form-field">
                                <label for="note">Note</label>
                                <textarea id="note" class="field-input" rows="10"></textarea>
                            </div>
                        </div>

                        <div class="col-md-6 selectRoomNumber">
                            <h2>Choose Number Room</h2>
                        </div>
                    </div>

                    <div class="submit text-center">
                        <p>
                            By selecting to complete this booking I acknowledge that I have read and accept the <span>rules &amp; restrictions terms &amp; conditions</span>
                            , and <span>privacy policy</span>.
                        </p>

                        <button class="awe-btn awe-btn-1 awe-btn-lager bookNow">Pay &amp; Book now</button>

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
            var roomType = {{ $roomType ?? 0 }};
            var checkIn = {{ $checkIn ?? 0 }};
            var checkOut = {{ $checkOut ?? 0 }};
            var guest = '{{ $guest ?? 0 }}';

            getRoomTypes(roomType);
            $('#checkIn').val(getDateFromUnix(checkIn));
            $('#checkOut').val(getDateFromUnix(checkOut));
            if (checkIn === 0 || checkOut === 0) {
                console.log(1)
                $('#checkIn').val(new Date().toISOString().split('T')[0]).attr('min', new Date().toISOString().split('T')[0]);
                $('#checkOut').val(new Date().toISOString().split('T')[0]).attr('min', new Date().toISOString().split('T')[0]);
            }
            if (guest !== '0' && guest !== 'more') {
                $('#guest').val(guest);
            }

            async function getRoomType(roomType) {
                let url = API_URL + '/detail-room-type/' + roomType;
                let data = await getData(url);

                if (data) {
                    let star = '';
                    for (let i = 0; i < data.star; i++) {
                        star += `<i class="fa fa-star" aria-hidden="true" style="color: #ffe100;"></i> `;
                    }
                    $('.nameRoomType').text(data.name);
                    $('.star-room').html(star);
                    $('#selectRoomTypes').val(data.id);
                }
            }

            function getDateFromUnix(date) {
                let yourDate = new Date(parseInt(date) * 1000);
                return yourDate.toISOString().split('T')[0];
            }

            async function getRoomTypes(roomType) {
                let url = API_URL + '/room-types';
                let lstRoomType = await getData(url);

                let str = '';
                if (lstRoomType.length > 0) {
                    for (const item of lstRoomType) {
                        let val = 0;
                        if (roomType === item.id) {
                            val = 1;
                        }
                        str += `<div class="form-field">
                                <input type="text" class="field-input" data-id="${item.id}" value="${item.name}" disabled>
                            </div>
                            <div class="form-field">
                                <input type="number" placeholder="Number room of ${item.name}" data-id="${item.id}" value="${val}" class="field-input numberRoom">
                            </div>`;
                    }
                    str += `<div class="form-field"style="text-align: center;">
                                <p style="color: green;">Please check availability room before you click Book now!</p>
                                <button class="btn btn-info" id="checkRoom">Check availability room</button>
                            </div>`
                }
                $('.selectRoomNumber').append(str);
                if (roomType !== 0) {
                    await getRoomType(roomType);
                }
            }

            $(document).on('click', '#checkRoom', async function () {
                let check_in = $('#checkIn').val();
                let url = API_URL + '/check-available-room?checkIn=' + check_in;
                let data = await getData(url);
                for (let item of data) {
                    let roomVal = $(`.numberRoom[data-id="${item.roomId}"]`).val();
                    if (roomVal !== 0) {
                        if (roomVal > item.totalRoom - item.countRoom) {
                            notifyError(`${item.nameRoom} out of room`);
                            return;
                        }
                    }
                }
                notifySuccess('Success!! Room available')
            });

            $('#checkIn').change(function () {
                let check_in = $(this).val();
                let today = new Date().toLocaleDateString()

                if (dateCompare(check_in, today) < 1) {
                    notifyError('Please choose check in after today');
                    $(this).val('');
                }
                let check_out = $('#checkOut').val();
                console.log(check_out)
                if (check_out !== "") {
                    if (dateCompare(check_out, check_in) < 1) {
                        notifyError('Please choose check out large than check in');
                        $(this).val('');
                    }
                }
            });

            $('#checkOut').change(function () {
                let check_out = $(this).val();
                let today = new Date().toLocaleDateString()

                if (dateCompare(check_out, today) < 1) {
                    notifyError('Please choose check in after today');
                    $(this).val('');
                }
                let check_in = $('#checkIn').val();
                if (check_in !== "") {
                    if (dateCompare(check_out, check_in) < 1) {
                        notifyError('Please choose check out large than check in');
                        $(this).val('');
                    }
                }
            });

        });
    </script>
@endsection
