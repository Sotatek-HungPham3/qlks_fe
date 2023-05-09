        <!-- Header -->
        <header id="header" class="header">
            <div class="container">
                <!-- Logo -->
                <div class="logo float-left">
                    <a href="/" title=""><img src="{{ asset('fe/images/logo-header.png') }}" alt=""></a>
                </div>
                <!-- End Logo -->
                <!-- Bars -->
                <div class="bars" id="bars"></div>
                <!-- End Bars -->

                <!--Navigation-->
                <nav class="navigation nav-c" id="navigation" data-menu-type="1200">
                    <div class="nav-inner">
                        <a href="#" class="bars-close" id="bars-close">Close</a>
                        <div class="tb">
                            <div class="tb-cell">
                                <ul class="menu-list text-uppercase">
                                    <li class="{{ \Illuminate\Support\Facades\Request::is('/') ? 'current-menu-parent' : '' }}">
                                        <a href="/" title="">Home</a>
                                    </li>
                                    <li class="{{ \Illuminate\Support\Facades\Request::is('about') ? 'current-menu-parent' : '' }}">
                                        <a href="{{ route('about') }}">About</a>
                                    </li>
                                    <li>
                                        <a href="#" title="">Room Types</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="home-hotel.html" title="">Hotel</a>
                                            </li>
                                            <li>
                                                <a href="hotel-list.html">Hotel List 1</a>
                                            </li>
                                            <li>
                                                <a href="hotel-list-2.html">Hotel List 2</a>
                                            </li>
                                            <li>
                                                <a href="hotel-maps.html">Hotel Map</a>
                                            </li>
                                            <li>
                                                <a href="hotel-detail.html">Hotel Detail</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" title="">Images</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="home-flight.html" title="">Flights</a>
                                            </li>
                                            <li>
                                                <a href="flight-list.html">Flight List</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" title="">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
                <!--End Navigation-->
            </div>
        </header>
        <!-- End Header -->
