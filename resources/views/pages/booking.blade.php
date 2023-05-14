@extends('index')
@section('title-page', 'Thanh toán')
@section('css')

@endsection
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
                                <input type="number" placeholder="Guest" class="field-input" id="guest" min="0">
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

    <!-- Modal -->
    <div class="modal fade" id="modalRoom" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">List Room Available</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
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
                let tomorrow = addDays(new Date(), 1);
                let nextTomorrow = addDays(new Date(tomorrow), 1);
                $('#checkIn').val(tomorrow.toISOString().split('T')[0]).attr('min', tomorrow.toISOString().split('T')[0]);
                $('#checkOut').val(nextTomorrow.toISOString().split('T')[0]).attr('min', nextTomorrow.toISOString().split('T')[0]);
            }
            if (guest !== '0' && guest !== 'more') {
                $('#guest').val(guest);
            }

            function addDays(date, days) {
                date.setDate(date.getDate() + days);
                return date;
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
                let yourDate = new Date(date * 1000);
                // get the current year in YYYY digit format
                const year = yourDate.getFullYear();

// get the month in a 2-digit format
                // getMonth() returns an index position of the month in an array.
                // Therefore, we need to add 1 to get the correct month.
                // toLocaleString() converts any single digit months to have a leading zero (i.e. "2" => "02")
                let month = yourDate.getMonth() + 1;
                month = month.toLocaleString('en-US', {minimumIntegerDigits: 2, useGrouping: false});

// get the current day of the month
                // toLocaleString() converts any single digit days to have a leading zero (i.e. "8" => "08")
                let day = yourDate.getDate();
                day = day.toLocaleString('en-US', {minimumIntegerDigits: 2, useGrouping: false});
                return `${year}-${month}-${day}`;
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
                                <input type="number" min="0" placeholder="Number room of ${item.name}" data-id="${item.id}" value="${val}" class="field-input numberRoom">
                            </div>`;
                    }
                    str += `<div class="form-field"style="text-align: center;">
                                <p style="color: green;">Please check availability room before you click Book now!</p>
                                <button class="btn btn-info" data-toggle="modal" data-target="#modalRoom" id="checkRoom">Check availability room</button>
                            </div>`
                }
                $('.selectRoomNumber').append(str);
                await getRoomAvailable();
                if (roomType !== 0) {
                    await getRoomType(roomType);
                }

                var booking = JSON.parse(localStorage.getItem(BOOKING));
                if (booking) {
                    notifySuccess('You have a booking unpaid!');
                    let room = JSON.parse(booking.room);
                    $('#checkIn').val(booking.checkIn);
                    $('#checkOut').val(booking.checkOut);
                    $('#guest').val(booking.guest);
                    $('#note').val(booking.note);

                    $('.numberRoom').each(function (i, obj) {
                        let oneRoom = room.find((item) => {
                            return item.roomTypeId === $(obj).attr('data-id')
                        });
                        $(obj).val(oneRoom.value);
                    })
                }
            }

            async function getRoomAvailable() {
                let check_in = $('#checkIn').val();
                let check_out = $('#checkOut').val();
                if (check_in !== "" && check_out !== "") {
                    let url = API_URL + '/check-available-room?checkIn=' + check_in + '&checkOut=' + check_out;
                    let data = await getData(url);
                    console.log(data);
                    for (let item of data) {
                        let room = parseInt(item.totalRoom) - parseInt(item.countRoom)
                        $(`.numberRoom[data-id="${item.roomId}"]`).attr("max", room);
                    }
                }
            }

            async function getRoom() {
                let check_in = $('#checkIn').val();
                let check_out = $('#checkOut').val();
                let url = API_URL + '/check-available-room?checkIn=' + check_in + '&checkOut=' + check_out;
                let data = await getData(url);
                let str = '';
                for (const item of data) {
                    str += `<b>${item.nameRoom}</b>: have ${parseInt(item.totalRoom) - parseInt(item.countRoom)} room left <br>`;
                }

                $('.modal-body').html(str);
            }

            async function checkRoom() {
                let check_in = $('#checkIn').val();
                let check_out = $('#checkOut').val();
                let url = API_URL + '/check-available-room?checkIn=' + check_in + '&checkOut=' + check_out;
                let data = await getData(url);
                let count = 0;
                console.log(data);
                for (let item of data) {
                    let roomVal = $(`.numberRoom[data-id="${item.roomId}"]`).val();
                    if (parseInt(roomVal) !== 0) {
                        if (parseInt(roomVal) > parseInt(item.totalRoom) - parseInt(item.countRoom)) {
                            return {
                                msg: `${item.nameRoom} out of room`,
                                status: false
                            };
                        }
                        count++;
                    }
                }
                if (count === 0) {
                    return {
                        msg: `Please choose room`,
                        status: false
                    };
                }
                return {
                    msg: 'Success!! Room available',
                    status: true
                }
            }

            $(document).on('click', '#checkRoom', async function () {
                await getRoom();
            });

            $(document).on('change', '.numberRoom', function () {
                let value = $(this).val();
                if (parseInt(value) < 0 || isNaN(parseInt(value))) {
                    $(this).val(0);
                }
                let max = $(this).attr('max');
                if (parseInt(value) > parseInt(max)) {
                    $(this).val(max);
                }
            });

            $('#checkIn').change(function () {
                let check_in = $(this).val();
                let today = new Date().toLocaleDateString('en-US')

                if (dateCompare(check_in, today) < 1) {
                    notifyError('Please choose check in after today');
                    $(this).val('');
                }
                let check_out = $('#checkOut').val();
                if (check_out !== "") {
                    if (dateCompare(check_out, check_in) < 1) {
                        notifyError('Please choose check out large than check in');
                        $(this).val('');
                    }
                }

                getRoomAvailable();
            });

            $('#checkOut').change(function () {
                let check_out = $(this).val();
                let today = new Date().toLocaleDateString('en-US')

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

                getRoomAvailable();
            });

            $(document).on('click', '.bookNow', async function () {
                let dataCheckRoom = await checkRoom();
                if (!dataCheckRoom.status) {
                    notifyError(dataCheckRoom.msg);
                } else {
                    let guest = $('#guest').val();
                    console.log(guest)
                    if (parseInt(guest) === 0 || isNaN(parseInt(guest))) {
                        notifyError('Please enter guest');
                        return;
                    }
                    let arrRoom = [];
                    $('.numberRoom').each(function (i, obj) {
                        arrRoom.push({
                            roomTypeId: $(obj).attr('data-id'),
                            value: $(obj).val()
                        })
                    })
                    let data = {
                        checkIn: $('#checkIn').val(),
                        checkOut: $('#checkOut').val(),
                        guest: guest,
                        note: $('#note').val(),
                        room: JSON.stringify(arrRoom)
                    };

                    localStorage.setItem(BOOKING, JSON.stringify(data));
                    window.location.href = DOMAIN_FE + '/payments';
                }
            })
        });
    </script>
@endsection
