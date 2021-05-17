@extends('dashboard.layouts.master')
@section('content')
<style>
    .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 60%;
}
</style>
<div class="main_content_container">
    <div class="main_container  main_menu_open">
        <!--Start system bath-->
        <div class="home_pass hidden-xs">
            <ul>
                <li class="bring_right"><span class="glyphicon glyphicon-home "></span></li>
                <li class="bring_right"><a href="">الصفحة الرئيسية للوحة تحكم الموقع</a></li>
            </ul>
        </div>
        <!--/End system bath-->
        <div class="page_content">
            <div class="page_content">
                <div class="quick_links text-center">
                    <h1 class="heading_title">الوصول السريع</h1>
                    <a href="{{route('fronts.index')}}" style="background-color: #c0392b">
                        <h4>استعراض الموقع</h4>
                    </a>
                    <img src="{{asset('dashboard/img/titi.jfif')}}" alt="Paris" class="center">
                </div>
            </div>
        </div>
    </div>
    <!--/End Main content container-->

</div>
    
@endsection