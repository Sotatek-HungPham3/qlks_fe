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
                    <!-- Breakcrumb -->
                    <section class="breakcrumb-sc">
                        <ul class="breadcrumb arrow">
                            <li><a href=""><i class="fa fa-home"></i></a></li>
                            <li>Contact us</li>
                        </ul>
                    </section>
                    <!-- End Breakcrumb -->
                    <section class="contact-page">
                        <div style="text-align: center;">
                            <h2>We are always in touch</h2>
                            <ul style="list-style: none">
                                <li>
                                    <img src="{{ asset('fe/images/icon-maker-contact.png') }}" alt="">
                                    <span class="address"></span>
                                </li>
                                <li>
                                    <img src="{{ asset('fe/images/icon-phone.png') }}" alt="">
                                    <span class="settingPhone"></span>
                                </li>
                                <li>
                                    <img src="{{ asset('fe/images/icon-email.png') }}" alt="">
                                    <a class="settingContactMail" href="#">contact@bookatrip.com</a>
                                </li>
                            </ul>

                        </div>
                        <div class="form-contact">
                            <form >
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
                    </section>
                </div>
            </div>
        </div>
        <!-- End Main -->
@endsection
