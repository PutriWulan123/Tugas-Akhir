<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
     <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    @if (!isset($hideCSS) || $hideCSS)
    <link rel="stylesheet" href="{{asset('/template/css/bootstrap.min.css')}}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('/template/css/font-awesome.min.css')}}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('/template/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('/template/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('/template/css/owl.transitions.css')}}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('/template/css/animate.css')}}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('/template/css/normalize.css')}}">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('/template/css/meanmenu.min.css')}}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('/template/css/main.css')}}">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('/template/css/educate-custon-icon.css')}}">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('/template/css/morrisjs/morris.css')}}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('/template/css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('/template/css/metisMenu/metisMenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('/template/css/metisMenu/metisMenu-vertical.css')}}">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('/template/css/calendar/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{asset('/template/css/calendar/fullcalendar.print.min.css')}}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('/template/style.css')}}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('/template/css/responsive.css')}}">
    @endif
    <!-- modernizr JS
		============================================ -->
    <script src="{{asset('/template/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Start Left menu area -->
     @if (!isset($hideSidebar) || !$hideSidebar)
        @include('tampilan.sidebar')
    @endif
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    @if (!isset($hideContent) || !$hideContent)
        @include('tampilan.content')
    @else
        {{-- Jika hideContent true, tampilkan section content dari halaman --}}
        @yield('content')
    @endif


   
    <!-- jquery
		============================================ -->
  @if (!isset($hideJS) || $hideJS)
    <script src="{{asset('/template/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{asset('/template/js/bootstrap.min.js')}}"></script>
    <!-- wow JS
		============================================ -->
    <script src="{{asset('/template/js/wow.min.js')}}"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{{asset('/template/js/jquery-price-slider.js')}}"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{asset('/template/js/jquery.meanmenu.js')}}"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{{asset('/template/js/owl.carousel.min.js')}}"></script>
    <!-- sticky JS
		============================================ -->
    <script src="{{asset('/template/js/jquery.sticky.js')}}"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{asset('/template/js/jquery.scrollUp.min.js')}}"></script>
    <!-- counterup JS
		============================================ -->
    <script src="{{asset('/template/js/counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('/template/js/counterup/waypoints.min.js')}}"></script>
    <script src="{{asset('/template/js/counterup/counterup-active.js')}}"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{asset('/template/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('/template/js/scrollbar/mCustomScrollbar-active.js')}}"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="{{asset('/template/js/metisMenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('/template/js/metisMenu/metisMenu-active.js')}}"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="{{asset('/template/js/morrisjs/raphael-min.js')}}"></script>
    <script src="{{asset('/template/js/morrisjs/morris.js')}}"></script>
    <script src="{{asset('/template/js/morrisjs/morris-active.js')}}"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="{{asset('/template/js/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('/template/js/sparkline/jquery.charts-sparkline.js')}}"></script>
    <script src="{{asset('/template/js/sparkline/sparkline-active.js')}}"></script>
    <!-- calendar JS
		============================================ -->
    <script src="{{asset('/template/js/calendar/moment.min.js')}}"></script>
    <script src="{{asset('/template/js/calendar/fullcalendar.min.js')}}"></script>
    <script src="{{asset('/template/js/calendar/fullcalendar-active.js')}}"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{asset('/template/js/plugins.js')}}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{asset('/template/js/main.js')}}"></script>
    <!-- tawk chat JS
		============================================ -->
    <script src="{{asset('/template/js/tawk-chat.js')}}"></script>
    @endif
</body>

</html>