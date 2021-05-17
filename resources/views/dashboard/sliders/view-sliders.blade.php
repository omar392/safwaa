@extends('dashboard.layouts.master')
@section('pageTitle', 'الشرائح')
@section('content')
 <!--Start Main content container-->
 <div class="main_content_container">
    <div class="main_container  main_menu_open">
        <!--Start system bath-->
        <div class="home_pass hidden-xs">
            <ul>
                <li class="bring_right"><span class="glyphicon glyphicon-home "></span></li>
                <li class="bring_right"><a href="">شرائح الصور</a></li>
                <li class="bring_right"><a href="">عرض شرائح الصور</a></li>
            </ul>
        </div>
        <!--/End system bath-->
        <div class="page_content">
            <h1 class="heading_title">عرض كل الشرائح و الصور </h1>

            <div class="wrap">
                <table class="table table-bordered">
                    <tr>
                        <td>#</td>
                        <td>الشرائح المصورة</td>
                        <td>وصف بالعربية</td>
                        <td>Description in English</td>
                        <td>التحكم</td>
                    </tr>
                    @foreach ($all_data as $key=>$sliders)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td><img src="{{(!empty($sliders->image))?url('upload/slider_images/'.$sliders->image):url('upload/no_image.jfif')}}" width="120px" height="130px" alt="image"></td>
                        <td>{{$sliders->short_title}}</td>
                        <td>{{$sliders->long_title}}</td>
                        <td>
                            <a href="{{route('sliders.edit',$sliders->id)}}" class="glyphicon glyphicon-pencil" data-toggle="tooltip"
                               data-placement="top" title="تعديل"></a>
                            <a href="{{route('sliders.delete',$sliders->id)}}" class="glyphicon glyphicon-remove" data-toggle="tooltip"
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