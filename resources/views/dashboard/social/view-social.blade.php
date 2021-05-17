@extends('dashboard.layouts.master')
@section('pageTitle', 'التواصل')
@section('content')
 <!--Start Main content container-->
 <div class="main_content_container">
    <div class="main_container  main_menu_open">
        <!--Start system bath-->
        <div class="home_pass hidden-xs">
            <ul>
                <li class="bring_right"><span class="glyphicon glyphicon-home "></span></li>
                <li class="bring_right"><a href="">إدارة مواقع التواصل</a></li>
                <li class="bring_right"><a href="">عرض كل مواقع التواصل</a></li>
            </ul>
        </div>
        <!--/End system bath-->
        <div class="page_content">
            <h1 class="heading_title">عرض كل مواقع التواصل</h1>

            <div class="wrap">
                <table class="table table-bordered">
                    <tr>
                        <td>#</td>
                        <td>الفيس بوك</td>
                        <td> رقم الواتساب</td>
                        <td>Gmail</td>
                        <td>تويتر</td>
                        <td>انستجرام</td>
                        <td>اليوتيوب</td>
                        <td>التحكم</td>
                    </tr>
                    @foreach ($all_data as $key=>$social)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$social->facebook}}</td>
                        <td>{{$social->whats_app_num}}</td>
                        <td>{{$social->gmail}}</td>
                        <td>{{$social->twitter}}</td>
                        <td>{{$social->inestgram}}</td>
                        <td>{{$social->youtube}}</td>
                        <td>
                            <a href="{{route('social.edit',$social->id)}}" class="glyphicon glyphicon-pencil" data-toggle="tooltip"
                               data-placement="top" title="تعديل"></a>
                            <a href="{{route('social.delete',$social->id)}}" class="glyphicon glyphicon-remove" data-toggle="tooltip"
                               data-placement="top" title="حذف"></a>
                        </td>
                    </tr>
                    @endforeach
                </table>

                {{-- <nav class="text-center">
                    <ul class="pagination">
                        <li class="disabled"><a aria-label="Previous" href="#"><span aria-hidden="true">»</span></a>
                        </li>
                        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a aria-label="Next" href="#"><span aria-hidden="true">«</span></a></li>
                    </ul>
                </nav> --}}
            </div>
        </div>
    </div>
</div>
<!--/End Main content container-->
@endsection