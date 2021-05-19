<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/meanmenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/line-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/odometer.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/rtl.css')}}">
    {{-- <link rel="icon" type="image/png" href="{{asset('frontend/img/favicon.png')}}"> --}}
    <link rel="icon" type="image/png" href="{{asset('dashboard/img/toto.jfif')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend/font-awesome/css/font-awesome.min.css')}}">
<style>
    .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
</style>
<title>@yield('pageTitle')  {{__('messages.Name')}} </title>
</head>
<body>
    <div class="preloader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="lds-hourglass"></div>
            </div>
        </div>
    </div>
    @include('frontend.layouts.header')
    @yield('content')
    @include('frontend.layouts.footer')
   
    <script data-cfasync="false" src="{{asset('frontend/email-decode.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.min.js')}}" type="deba8a7ad3035b59c10e9f70-text/javascript"></script>
    <script src="{{asset('frontend/js/popper.min.js')}}" type="deba8a7ad3035b59c10e9f70-text/javascript"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}" type="deba8a7ad3035b59c10e9f70-text/javascript"></script>
    <script src="{{asset('frontend/js/meanmenu.min.js')}}" type="deba8a7ad3035b59c10e9f70-text/javascript"></script>
    <script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}" type="deba8a7ad3035b59c10e9f70-text/javascript"></script>
    <script src="{{asset('frontend/js/owl.carousel.min.js')}}" type="deba8a7ad3035b59c10e9f70-text/javascript"></script>
    <script src="{{asset('frontend/js/odometer.min.js')}}" type="deba8a7ad3035b59c10e9f70-text/javascript"></script>
    <script src="{{asset('frontend/js/jquery.appear.js')}}" type="deba8a7ad3035b59c10e9f70-text/javascript"></script>
    <script src="{{asset('frontend/js/form-validator.min.js')}}" type="deba8a7ad3035b59c10e9f70-text/javascript"></script>
    <script src="{{asset('frontend/js/contact-form-script.js')}}" type="deba8a7ad3035b59c10e9f70-text/javascript"></script>
    <script src="{{asset('frontend/js/jquery.ajaxchimp.min.js')}}" type="deba8a7ad3035b59c10e9f70-text/javascript"></script>
    <script src="{{asset('frontend/js/custom.js')}}" type="deba8a7ad3035b59c10e9f70-text/javascript"></script>
    <script src="{{asset('frontend/rocket-loader.min.js')}}" data-cf-settings="deba8a7ad3035b59c10e9f70-|49" defer=""></script>
</body>
</html>