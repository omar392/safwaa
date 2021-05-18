@extends('dashboard.layouts.master')
@section('pageTitle', 'الرؤية')
@section('content')
 <!--Start Main content container-->
 <div class="main_content_container">
    <div class="main_container  main_menu_open">
        <!--Start system bath-->
        <div class="home_pass hidden-xs">
            <ul>
                <li class="bring_right"><span class="glyphicon glyphicon-home "></span></li>
                <li class="bring_right"><a href="">الاخبار و الرسالة</a></li>
                <li class="bring_right"><a href="">عرض الرؤية والرسالة</a></li>
            </ul>
        </div>
        <!--/End system bath-->
        <div class="page_content">
            <h1 class="heading_title">عرض الرؤية والرسالة</h1>
            @include('dashboard.layouts.flash-message')
            <div class="wrap">
                <table class="table table-bordered">
                    <tr>
                        <td>#</td>
                        <td>الرؤية بالعربية</td>
                        <td>Goals  En</td>
                        <td>الرسالة بالعربية</td>
                        <td>Message En</td>
                        <td>التحكم</td>
                    </tr>
                    @foreach ($all_data as $key=>$goals)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$goals->goal_ar}}</td>
                        <td>{{$goals->goal_en}}</td>
                        <td>{{$goals->message_ar}}</td>
                        <td>{{$goals->message_en}}</td>
                        <td>
                            <a href="{{route('goals.edit',$goals->id)}}" class="glyphicon glyphicon-pencil" data-toggle="tooltip"
                               data-placement="top" title="تعديل"></a>
                            <a href="{{route('goals.delete',$goals->id)}}" class="glyphicon glyphicon-remove" data-toggle="tooltip"
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