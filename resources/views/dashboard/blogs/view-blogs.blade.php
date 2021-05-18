@extends('dashboard.layouts.master')
@section('pageTitle', 'المدونة')
@section('content')
 <!--Start Main content container-->
 <div class="main_content_container">
    <div class="main_container  main_menu_open">
        <!--Start system bath-->
        <div class="home_pass hidden-xs">
            <ul>
                <li class="bring_right"><span class="glyphicon glyphicon-home "></span></li>
                <li class="bring_right"><a href="">المدونة الخاصة بالمكتب</a></li>
                <li class="bring_right"><a href="">عرض المدونة الخاصة بالمكتب</a></li>
            </ul>
        </div>
        <!--/End system bath-->
        <div class="page_content">
            <h1 class="heading_title">عرض المدونة التى نقدمها</h1>
            @include('dashboard.layouts.flash-message')
            <div class="wrap">
                <table class="table table-bordered">
                    <tr>
                        <td>#</td>
                        <td>صورة التدوينة</td>
                        <td>العنوان بالعربية</td>
                        <td>Title En</td>
                        <td>موضوع التدوينة</td>
                        <td>subject Description En</td>
                        <td>التحكم</td>
                    </tr>
                    @foreach ($all_data as $key=>$blogs)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td><img src="{{(!empty($blogs->image))?url('upload/slider_images/'.$blogs->image):url('upload/no_image.jfif')}}" width="120px" height="130px" alt="image"></td>
                        <td>{{$blogs->title_ar}}</td>
                        <td>{{$blogs->title_en}}</td>
                        <td>{{$blogs->subject_ar}}</td>
                        <td>{{$blogs->subject_en}}</td>
                        <td>
                            <a href="{{route('blogs.edit',$blogs->id)}}" class="glyphicon glyphicon-pencil" data-toggle="tooltip"
                               data-placement="top" title="تعديل"></a>
                            <a href="{{route('blogs.delete',$blogs->id)}}" class="glyphicon glyphicon-remove" data-toggle="tooltip"
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