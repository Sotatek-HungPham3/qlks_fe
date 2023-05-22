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
                                    <li class="{{ \Illuminate\Support\Facades\Request::is('room-type/*') ? 'current-menu-parent' : '' }}">
                                        <a href="#" title="">Room Types</a>
                                        <ul class="sub-menu navRoomTypes">

                                        </ul>
                                    </li>
                                    <li class="{{ \Illuminate\Support\Facades\Request::is('images/*') ? 'current-menu-parent' : '' }}">
                                        <a href="#" title="">Images</a>
                                        <ul class="sub-menu navImages">
                                        </ul>
                                    </li>
                                    <li class="{{ \Illuminate\Support\Facades\Request::is('contact') ? 'current-menu-parent' : '' }}">
                                        <a href="{{ route('contact') }}" title="">Contact Us</a>
                                    </li>
                                    <li class="{{ (\Illuminate\Support\Facades\Request::is('booking') or \Illuminate\Support\Facades\Request::is('payments') or \Illuminate\Support\Facades\Request::is('payment-return')) ? 'current-menu-parent' : '' }}">
                                        <a href="{{ route('booking') }}">Booking Now</a>
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
