@extends('dashboard.layouts.master')
@section('pageTitle', 'أعمال المكتب')
@section('content')
 <!--Start Main content container-->
 <div class="main_content_container">
    <div class="main_container  main_menu_open">
        <!--Start system bath-->
        <div class="home_pass hidden-xs">
            <ul>
                <li class="bring_right"><span class="glyphicon glyphicon-home "></span></li>
                <li class="bring_right"><a href="">الاعمال التى نقدمها للناس</a></li>
                <li class="bring_right"><a href="">عرض الاعمال التى نقدمها</a></li>
            </ul>
        </div>
        <!--/End system bath-->
        <div class="page_content">
            <h1 class="heading_title">عرض الاعمال التى نقدمها</h1>

            <div class="wrap">
                <table class="table table-bordered">
                    <tr>
                        <td>#</td>
                        <td>عنوان العمل بالعربية</td>
                        <td>Work Title En</td>
                        <td>وصف العمل بالعربية</td>
                        <td>Work Description En</td>
                        <td>التحكم</td>
                    </tr>
                    @foreach ($all_data as $key=>$aboutus)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$aboutus->name_ar}}</td>
                        <td>{{$aboutus->name_en}}</td>
                        <td>{{$aboutus->title_ar}}</td>
                        <td>{{$aboutus->title_en}}</td>
                        <td>
                            <a href="{{route('aboutus.edit',$aboutus->id)}}" class="glyphicon glyphicon-pencil" data-toggle="tooltip"
                               data-placement="top" title="تعديل"></a>
                            <a href="{{route('aboutus.delete',$aboutus->id)}}" class="glyphicon glyphicon-remove" data-toggle="tooltip"
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