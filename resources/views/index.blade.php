<!DOCTYPE html>
<!--[if IE 7 ]>
<html class="ie ie7"> <![endif]-->
<!--[if IE 8 ]>
<html class="ie ie8"> <![endif]-->
<!--[if IE 9 ]>
<html class="ie ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en"> <!--<![endif]-->

<!-- Mirrored from envato.megadrupal.com/html/bookawesome/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Aug 2015 04:48:30 GMT -->
<head>
    <meta charset="utf-8">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!-- Font Google -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400%7COpen+Sans:300,400,600' rel='stylesheet'
          type='text/css'>
    <!-- End Font Google -->
    <!-- Library CSS -->
    <link rel="stylesheet" href="{{ asset('fe/css/library/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fe/css/library/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fe/css/library/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fe/css/library/owl.carousel.css') }}">
    <!-- End Library CSS -->
    <link rel="stylesheet" href="{{ asset('fe/css/style.css') }}">

    @yield('css')
</head>
<body>
<!-- Preloader -->
<div id="preloader">
    <div class="tb-cell">
        <div id="page-loading">
            <div></div>
            <p>Loading</p>
        </div>
    </div>
</div>
<!-- Wrap -->
<div id="wrap">
    @include('layout.header')

    @yield('content')

    @include('layout.footer')

</div>

<!-- Library JS -->
<script type="text/javascript" src="{{ asset('fe/js/library/jquery-1.11.0.min.js') }}"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="{{ asset('fe/js/library/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('fe/js/library/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('fe/js/library/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('fe/js/library/parallax.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('fe/js/library/jquery.nicescroll.js') }}"></script>
<script type="text/javascript" src="{{ asset('fe/js/library/jquery.ui.touch-punch.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('fe/js/library/SmoothScroll.js') }}"></script>
<!-- End Library JS -->
<!-- Main Js -->
<script type="text/javascript" src="{{ asset('fe/js/script.js') }}"></script>
<!-- End Main Js -->
{{--<script>--}}
{{--    (function (i, s, o, g, r, a, m) {--}}
{{--        i['GoogleAnalyticsObject'] = r;--}}
{{--        i[r] = i[r] || function () {--}}
{{--            (i[r].q = i[r].q || []).push(arguments)--}}
{{--        }, i[r].l = 1 * new Date();--}}
{{--        a = s.createElement(o),--}}
{{--            m = s.getElementsByTagName(o)[0];--}}
{{--        a.async = 1;--}}
{{--        a.src = g;--}}
{{--        m.parentNode.insertBefore(a, m)--}}
{{--    })(window, document, 'script', '../../../www.google-analytics.com/analytics.js', 'ga');--}}

{{--    ga('create', 'UA-20585382-5', 'megadrupal.com');--}}
{{--    ga('send', 'pageview');--}}
{{--</script>--}}
@yield('js')
</body>

<!-- Mirrored from envato.megadrupal.com/html/bookawesome/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Aug 2015 04:48:30 GMT -->
</html>
