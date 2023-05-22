@extends('index')
@section('title-page', 'Về chúng tôi')
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
            <div class="main-cn about-page bg-white clearfix">
                <!-- About -->
                <section class="about-cn clearfix">
                    <div class="about-searved">
                        <span>Served over</span>
                        <ins>584,000</ins>
                        <span>people in 45 countries</span>
                    </div>
                    <div class="about-text">
                        <h1>We love travel</h1>
                        <div class="about-description">
                            <p>
                                Mauris convallis hendrerit posuere. In hac habitasse platea dictumst. Curabitur dapibus
                                bibendum eros sit amet porta. Aliquam erat volutpat. Mauris a porta ligula. Nulla
                                convallis at urna ut rutrum.
                            </p>
                            <p>
                                Mauris convallis hendrerit posuere. In hac habitasse platea dictumst. Curabitur dapibus
                                bibendum eros sit amet porta. Aliquam erat volutpat. Mauris a porta ligula. Nulla
                                convallis at urna ut rutrum.
                                Aliquam bibendum ultrices dui, eget pulvinar dolor bibendum sed. Aenean ullamcorper,
                                nunc in lacinia tincidunt, erat eros lobortis urna, ac scelerisque velit augue aliquam
                                ipsum. Nulla ut hendrerit lorem. Aenean sed ipsum mauris. Proin in venenatis augue, vel
                                congue ipsum. Etiam convallis tincidunt sagittis.ac scelerisque velit augue aliquam
                                ipsum. Nulla ut hendrerit lorem. Aenean sed ipsum mauris. Proin in venenatis augu.
                            </p>
                        </div>
                    </div>
                </section>
                <!-- End About -->
                <!-- Team -->
                <section class="team">
                    <div class="team-head">
                        <h2>Our team</h2>
                        <p>
                            Morbi sed sollicitudin augue. Ut metus nibh, fringilla vitae mi in, aliquam ullamcorper
                            nisl. Integer id tincidunt libero. Donec pharetra est sed suscipit efficitur. In a gravida
                            quam. Aenean vel dolor augue. In nec lacinia enim, vitae fermentum elit. Aliquam non diam
                            sed lectus commodo hendrerit.
                        </p>
                    </div>
                    <div class="team-group row">
                        <!-- Team Item -->
                        <div class="team-item col-xs-6 col-md-3">
                            <figure>
                                <img id="hung" src="" alt="">
                            </figure>
                            <h3>Manh Hung</h3>
                            <span>Director</span>
                        </div>
                        <!-- End Team Item -->
                    </div>
                </section>
                <!-- End Team -->
                <!-- Twitter -->
                <section class="twitter">
                    <div class="bg-parallax bg-4"></div>
                    <div class="twitter-cn text-center">
                        <span class="icon"><i class="fa fa-twitter"></i></span>
                        <div class="twitter-slide">
                            <!-- Twitter Item -->
                            <div class="twitter-item">
                                <p>
                                    Etiam sodales ligula lacus. Vestibulum pellentesque purus at mauris tristique, id
                                    mollis nibh suscipit. Nunc malesuada<br>consequat velit mollis laoreet. Ut feugiat
                                    est sit amet mauris tristique<br>1month ago
                                </p>
                                <ul>
                                    <li><span>REply</span></li>
                                    <li><span>REtweets</span></li>
                                    <li><span>favorite</span></li>
                                </ul>
                            </div>
                            <!-- End Twitter Item -->
                        </div>
                    </div>
                </section>
                <!-- End Twitter -->
                <!-- Follow -->
                <section class="follow-about">
                    <div class="follow-group">
                        <a href="#" title=""><i class="fa fa-facebook"></i></a>
                        <a href="#" title=""><i class="fa fa-twitter"></i></a>
                        <a href="#" title=""><i class="fa fa-pinterest"></i></a>
                        <a href="#" title=""><i class="fa fa-linkedin"></i></a>
                        <a href="#" title=""><i class="fa fa-instagram"></i></a>
                    </div>
                </section>
                <!-- Follow -->

            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function () {
            $('#hung').attr('src', DOMAIN_S3 + '/uploads/hung.jpg');
        })
    </script>
@endsection
