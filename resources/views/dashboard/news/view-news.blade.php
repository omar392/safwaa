@extends('dashboard.layouts.master')
@section('pageTitle', 'الاخبار')
@section('content')
 <!--Start Main content container-->
 <div class="main_content_container">
    <div class="main_container  main_menu_open">
        <!--Start system bath-->
        <div class="home_pass hidden-xs">
            <ul>
                <li class="bring_right"><span class="glyphicon glyphicon-home "></span></li>
                <li class="bring_right"><a href="">الاخبار الخاصة بالمجموعة</a></li>
                <li class="bring_right"><a href="">عرض الاخبار الخاصة بالمجموعة</a></li>
            </ul>
        </div>
        <!--/End system bath-->
        <div class="page_content">
            <h1 class="heading_title">عرض الاخبار التى نقدمها</h1>
            @include('dashboard.layouts.flash-message')
            <div class="wrap">
                <table class="table table-bordered">
                    <tr>
                        <td>#</td>
                        <td>الخبر بالعربية</td>
                        <td>New En</td>
                        <td>وصف الخبر بالعربية</td>
                        <td>News Description En</td>
                        <td>التحكم</td>
                    </tr>
                    @foreach ($all_data as $key=>$news)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$news->new_title_ar}}</td>
                        <td>{{$news->new_title_en}}</td>
                        <td>{{$news->new_description_ar}}</td>
                        <td>{{$news->new_description_en}}</td>
                        <td>
                            <a href="{{route('news.edit',$news->id)}}" class="glyphicon glyphicon-pencil" data-toggle="tooltip"
                               data-placement="top" title="تعديل"></a>
                            <a href="{{route('news.delete',$news->id)}}" class="glyphicon glyphicon-remove" data-toggle="tooltip"
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