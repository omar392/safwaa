<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('pageTitle') - الصفوة </title>
    <script src="//cdn.ckeditor.com/4.5.9/standard/ckeditor.js"></script>
    <link href="{{asset('dashboard/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/css/icon.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/css/ar.css')}}" rel="stylesheet" class="lang_css arabic">
    <link rel="icon" type="image/png" href="{{asset('dashboard/img/toto.jfif')}}"> 
    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script> 
</head>
<body>
<div class="container-fluid">
    <!--Start header-->
    @include('dashboard.layouts.header')
    <!--/End header-->
    <!--Start body container section-->
    <div class="row container_section">

        <!--Start left sidebar-->
        <div class="user_details close_user_details  bring_left">
            <div class="user_area">
                <h1 class="h3">الصفوة | AL-Safwa</h1>
                <hr>
                <p>
                    <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();" class="dropdown-item dropdown-footer">تسجيل الخروج</a>
                      
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                </p>
            </div>
            </div>
        </div>
        <!--/End left sidebar-->
        <!--Start Side bar main menu-->
        @include('dashboard.layouts.sidebar')
        <!--/End side bar main menu-->
          <!--Start Main content container-->
        @yield('content')
        <!--/End body container section-->
    </div>
</div>
<script type="text/javascript" src="{{asset('dashboard/js/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('dashboard/js/bootstrap.min.js')}}"></script>
<script src="{{asset('dashboard/js/js.js')}}"></script>
</body>
</html>