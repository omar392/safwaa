@extends('dashboard.layouts.master')
@section('pageTitle', 'الخدامات')
@section('content')
 <!--Start Main content container-->
 <div class="main_content_container">
    <div class="main_container  main_menu_open">
        <!--Start system bath-->
        <div class="home_pass hidden-xs">
            <ul>
                <li class="bring_right"><span class="glyphicon glyphicon-home "></span></li>
                <li class="bring_right"><a href="">الخدمات التى نقدمها للناس</a></li>
                <li class="bring_right"><a href="">عرض الخدمات التى نقدمها</a></li>
            </ul>
        </div>
        <!--/End system bath-->
        <div class="page_content">
            <h1 class="heading_title">عرض الخدمات التى نقدمها</h1>

            <div class="wrap">
                <table class="table table-bordered">
                    <tr>
                        <td>#</td>
                        <td>الخدمة بالعربية</td>
                        <td>Service En</td>
                        <td>وصف الخدمة بالعربية</td>
                        <td>Description En</td>
                        <td>التحكم</td>
                    </tr>
                    @foreach ($all_data as $key=>$services)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$services->name_ar}}</td>
                        <td>{{$services->name_en}}</td>
                        <td>{{$services->description_ar}}</td>
                        <td>{{$services->description_en}}</td>
                        <td>
                            <a href="{{route('services.edit',$services->id)}}" class="glyphicon glyphicon-pencil" data-toggle="tooltip"
                               data-placement="top" title="تعديل"></a>
                            <a href="{{route('services.delete',$services->id)}}" class="glyphicon glyphicon-remove" data-toggle="tooltip"
                               data-placement="top" title="حذف"></a>
                        </td>
                    </tr>
                @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
<!--/End Main content container-->
@endsection