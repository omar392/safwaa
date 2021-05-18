@extends('dashboard.layouts.master')
@section('pageTitle', 'الاعضاء')
@section('content')
 <!--Start Main content container-->
 <div class="main_content_container">
    <div class="main_container  main_menu_open">
        <!--Start system bath-->
        <div class="home_pass hidden-xs">
            <ul>
                <li class="bring_right"><span class="glyphicon glyphicon-home "></span></li>
                <li class="bring_right"><a href="">إدارة أعضاء فريق العمل</a></li>
                <li class="bring_right"><a href="">عرض أعضاء فريق العمل</a></li>
            </ul>
        </div>
        <!--/End system bath-->
        <div class="page_content">
            <h1 class="heading_title">عرض كل أعضاء فريق العمل</h1>
            @include('dashboard.layouts.flash-message')
            <div class="wrap">
                <table class="table table-bordered">
                    <tr>
                        <td>#</td>
                        <td>الصورة</td>
                        <td>الاسم بالعربية</td>
                        <td>Name En</td>
                        <td>الدرجة بالعربية</td>
                        <td>Degree En</td>
                        <td>التحكم</td>
                    </tr>
                    @foreach ($all_data as $key=>$members)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td><img src="{{(!empty($members->image))?url('upload/slider_images/'.$members->image):url('upload/no_image.jfif')}}" width="120px" height="130px" alt="image"></td>
                        <td>{{$members->name_ar}}</td>
                        <td>{{$members->name_en}}</td>
                        <td>{{$members->degree_ar}}</td>
                        <td>{{$members->degree_en}}</td>
                        <td>
                            <a href="{{route('members.edit',$members->id)}}" class="glyphicon glyphicon-pencil" data-toggle="tooltip"
                               data-placement="top" title="تعديل"></a>
                            <a href="{{route('members.delete',$members->id)}}" class="glyphicon glyphicon-remove" data-toggle="tooltip"
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