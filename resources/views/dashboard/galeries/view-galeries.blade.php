@extends('dashboard.layouts.master')
@section('pageTitle', 'معرض الصفوة')
@section('content')
 <!--Start Main content container-->
 <div class="main_content_container">
    <div class="main_container  main_menu_open">
        <!--Start system bath-->
        <div class="home_pass hidden-xs">
            <ul>
                <li class="bring_right"><span class="glyphicon glyphicon-home "></span></li>
                <li class="bring_right"><a href="">معرض الصفوة</a></li>
                <li class="bring_right"><a href="">عرض معرض الصفوة</a></li>
            </ul>
        </div>
        <!--/End system bath-->
        <div class="page_content">
            <h1 class="heading_title">عرض كل صور المعرض </h1>

            <div class="wrap">
                <table class="table table-bordered">
                    <tr>
                        <td>#</td>
                        <td>صور الصفوة</td>
                        <td>التحكم</td>
                    </tr>
                    @foreach ($all_data as $key=>$galeries)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td><img src="{{(!empty($galeries->image))?url('upload/slider_images/'.$galeries->image):url('upload/no_image.jfif')}}" width="120px" height="130px" alt="image"></td>
                        <td>
                            <a href="{{route('galeries.edit',$galeries->id)}}" class="glyphicon glyphicon-pencil" data-toggle="tooltip"
                               data-placement="top" title="تعديل"></a>
                            <a href="{{route('galeries.delete',$galeries->id)}}" class="glyphicon glyphicon-remove" data-toggle="tooltip"
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