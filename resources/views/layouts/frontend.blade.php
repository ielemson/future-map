<!doctype html>
<html lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/iconplugins.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/theme-dark.css') }}">


    <title>Future Map</title>

    <link rel="icon" type="image/png" href="{{asset('frontend/images/favicon.png')}}">
</head>

<body>

    {{-- <div id="preloader">
        <div id="preloader-area">
            <div class="spinner"></div>
            <div class="spinner"></div>
            <div class="spinner"></div>
            <div class="spinner"></div>
            <div class="spinner"></div>
            <div class="spinner"></div>
            <div class="spinner"></div>
            <div class="spinner"></div>
        </div>
        <div class="preloader-section preloader-left"></div>
        <div class="preloader-section preloader-right"></div>
    </div> --}}

   @yield('content')

  {{-- Footer Starts --}}
  @include('frontend.includes.footer')
  {{-- Footer Ends --}}


    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>

    <script src="{{ asset('frontend/js/plugins.js') }}"></script>

    <script src="{{ asset('frontend/js/custom.js') }}"></script>
    {{-- <script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('frontend/js/meanmenu.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('frontend/js/ajaxchimp.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('frontend/js/form-validator.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('frontend/js/contact-form-script.js')}}" type="text/javascript"></script>
    <script src="{{asset('frontend/js/contact-form-script.js')}}" type="text/javascript"></script>
    <script src="{{asset('frontend/js/owl.carousel.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('frontend/js/magnific-popup.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('frontend/js/magnific-popup.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('frontend/js/aos.js')}}" type="text/javascript"></script>
    <script src="{{asset('frontend/js/odometer.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('frontend/js/appear.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('frontend/js/tweenMax.min.js')}}" type="text/javascript"></script> --}}
   
</body>

</html>
