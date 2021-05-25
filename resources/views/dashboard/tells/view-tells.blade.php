@extends('dashboard.layouts.master')
@section('pageTitle', 'أراء العملاء')
@section('content')
 <!--Start Main content container-->
 <div class="main_content_container">
    <div class="main_container  main_menu_open">
        <!--Start system bath-->
        <div class="home_pass hidden-xs">
            <ul>
                <li class="bring_right"><span class="glyphicon glyphicon-home "></span></li>
                <li class="bring_right"><a href="">أراء العملاء</a></li>
                <li class="bring_right"><a href="">عرض الأراء</a></li>
            </ul>
        </div>
        <!--/End system bath-->
        <div class="page_content">
            <h1 class="heading_title">عرض أراء العملاء</h1>
            @include('dashboard.layouts.flash-message')
            <div class="wrap">
                <table class="table table-bordered">
                    <tr>
                        <td>#</td>
                        <td>الصورة</td>
                        <td>الاسم</td>
                        <td>Name</td>
                        <td>العمل</td>
                        <td>Work</td>
                        <td>الوصف</td>
                        <td>Description</td>
                        <td>التحكم</td>
                    </tr>
                    @foreach ($all_data as $key=>$tells)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td><img src="{{(!empty($tells->image))?url('upload/customer_logo/'.$tells->image):url('upload/no_image.jfif')}}" width="120px" height="130px" alt="image"></td>
                        <td>{{$tells->name_ar}}</td>
                        <td>{{$tells->name_en}}</td>
                        <td>{{$tells->work_ar}}</td>
                        <td>{{$tells->work_en}}</td>
                        <td>{!! $tells->description_ar !!}</td>
                        <td>{!! $tells->description_en !!}</td>
                        <td>
                            <a href="{{route('tells.edit',$tells->id)}}" class="glyphicon glyphicon-pencil" data-toggle="tooltip"
                               data-placement="top" title="تعديل"></a>
                            <a href="{{route('tells.delete',$tells->id)}}" class="glyphicon glyphicon-remove" data-toggle="tooltip"
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