@extends('index')
@section('title-page', 'Liên hệ')
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
                    <!-- Breakcrumb -->
                    <section class="breakcrumb-sc">
                        <ul class="breadcrumb arrow">
                            <li><a href="index-2.html"><i class="fa fa-home"></i></a></li>
                            <li>Contact us</li>
                        </ul>
                    </section>
                    <!-- End Breakcrumb -->
                    <section class="contact-page">
                        <div class="contact-maps">
                            <div id="contact-maps" data-map-zoom="16" data-map-latlng="45.738028, 21.224535" data-map-content="Book Awesome"></div>
                        </div>
                        <div class="contact-cn">
                            <h2>We are always in touch</h2>
                            <ul>
                                <li>
                                    <img src="images/icon-maker-contact.png" alt="">
                                    25 California Avenue, Santa Monica, California.
                                </li>
                                <li>
                                    <img src="images/icon-phone.png" alt="">
                                    +1-888-8765-1234
                                </li>
                                <li>
                                    <img src="images/icon-email.png" alt="">
                                    <a href="#">contact@bookatrip.com</a>
                                </li>
                            </ul>
                            <div class="form-contact">
                                <form id="contact-form" action="http://envato.megadrupal.com/html/bookawesome/processContact.php" method="post">
                                    <div class="form-field">
                                        <label for="name">Name <sup>*</sup></label>
                                        <input type="text" name="name" id="name" class="field-input">
                                    </div>
                                    <div class="form-field">
                                        <label for="email">Email <sup>*</sup></label>
                                        <input type="text" name="email" id="email" class="field-input">
                                    </div>
                                    <div class="form-field form-field-area">
                                        <label for="message">Message <sup>*</sup></label>
                                        <textarea name="message" id="message" cols="30" rows="10" class="field-input"></textarea>
                                    </div>
                                    <div class="form-field text-center">
                                        <button type="submit" id="submit-contact" class="awe-btn awe-btn-2 arrow-right arrow-white awe-btn-lager">Submit</button>
                                    </div>
                                    <div id="contact-content">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <!-- End Main -->
@endsection