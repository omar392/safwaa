@extends('dashboard.layouts.master')
@section('pageTitle', 'الاسئلة')
@section('content')
 <!--Start Main content container-->
 <div class="main_content_container">
    <div class="main_container  main_menu_open">
        <!--Start system bath-->
        <div class="home_pass hidden-xs">
            <ul>
                <li class="bring_right"><span class="glyphicon glyphicon-home "></span></li>
                <li class="bring_right"><a href="">الاسئلة التى يطلبها الناس</a></li>
                <li class="bring_right"><a href="">عرض الاسئلة التى يطلبها الناس</a></li>
            </ul>
        </div>
        <!--/End system bath-->
        <div class="page_content">
            <h1 class="heading_title">عرض الاسئلة التى يطلبها</h1>
            @include('dashboard.layouts.flash-message')
            <div class="wrap">
                <table class="table table-bordered">
                    <tr>
                        <td>#</td>
                        <td style="width: 25%">السؤال بالعربية</td>
                        <td>Question En</td>
                        <td>إجابة السؤال بالعربية</td>
                        <td>Answer En</td>
                        <td>التحكم</td>
                    </tr>
                    @foreach ($all_data as $key=>$questions)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td style="width: 25%">{{$questions->question_ar}}</td>
                        <td>{{$questions->question_en}}</td>
                        <td>{{$questions->answer_ar}}</td>
                        <td>{{$questions->answer_en}}</td>
                        <td>
                            <a href="{{route('questions.edit',$questions->id)}}" class="glyphicon glyphicon-pencil" data-toggle="tooltip"
                               data-placement="top" title="تعديل"></a>
                            <a href="{{route('questions.delete',$questions->id)}}" class="glyphicon glyphicon-remove" data-toggle="tooltip"
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