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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <style type="text/css">
.fa_custom {
color: #0099CC
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
    <script>
        var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?5505';
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = url;
        var options = {
      "enabled":true,
      "chatButtonSetting":{
          "backgroundColor":"#4dc247",
          "ctaText":"",
          "borderRadius":"100",
          "marginLeft":"0",
          "marginBottom":"10",
          "marginRight":"20",
          "position":"right"
      },
      "brandSetting":{
          "brandName":"الصفوة",
          "brandSubTitle":"سيصلك الرد خلال اليوم",
          "brandImg":"https://scontent.fcai21-1.fna.fbcdn.net/v/t1.6435-9/184784401_2930576567262289_2335544341578323342_n.jpg?_nc_cat=107&ccb=1-3&_nc_sid=09cbfe&_nc_ohc=BVLPwnGQhRQAX_6Rp0F&_nc_oc=AQmb4Y2d0dIWx202uMtRNGw4CPJTp5KD6i9R2Se71HNNxN-uRDfQxXc8hnVHQSiuBM8&_nc_ht=scontent.fcai21-1.fna&oh=dde01fe250ea24b9d5c472f3dfe28706&oe=60CC15CF",
          "welcomeText":"أهلا بك \n كيف يمكننى مساعدتك؟",
          "messageText":"أهلا بك أخبرنا بما تريد",
          "backgroundColor":"#0a5f54",
          "ctaText":"أبدأ المحادثة",
          "borderRadius":"25",
          "autoShow":false,
          "phoneNumber":"+201050081087"
      }
    };
        s.onload = function() {
            CreateWhatsappChatWidget(options);
        };
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    </script>
</body>
</html>