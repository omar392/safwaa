@extends('dashboard.layouts.master')
@section('pageTitle', 'عداد القضايا')
@section('content')
 <!--Start Main content container-->
 <div class="main_content_container">
    <div class="main_container  main_menu_open">
        <!--Start system bath-->
        <div class="home_pass hidden-xs">
            <ul>
                <li class="bring_right"><span class="glyphicon glyphicon-home "></span></li>
                <li class="bring_right"><a href="">عداد القضايا</a></li>
                <li class="bring_right"><a href="">عرض عداد القضايا</a></li>
            </ul>
        </div>
        <!--/End system bath-->
        <div class="page_content">
            <h1 class="heading_title">عرض عداد القضايا</h1>
            @include('dashboard.layouts.flash-message')
            <div class="wrap">
                <table class="table table-bordered">
                    <tr>
                        <td>#</td>
                        <td>قضايا حسمت</td>
                        <td>قضايا قيد الانتظار</td>
                        <td>قضايا تدرس</td>
                        <td>قضايا خسرت</td>
                        <td>التحكم</td>
                    </tr>
                    @foreach ($all_data as $key=>$isues)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$isues->solved}}</td>
                        <td>{{$isues->waited}}</td>
                        <td>{{$isues->studied}}</td>
                        <td>{{$isues->losed}}</td>
                        <td>
                            <a href="{{route('isues.edit',$isues->id)}}" class="glyphicon glyphicon-pencil" data-toggle="tooltip"
                               data-placement="top" title="تعديل"></a>
                            <a href="{{route('isues.delete',$isues->id)}}" class="glyphicon glyphicon-remove" data-toggle="tooltip"
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