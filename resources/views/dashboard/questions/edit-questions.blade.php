@extends('dashboard.layouts.master')
@section('pageTitle', 'الاسئلة')
@section('content')
<div class="page_content">

    <h1 class="heading_title">تعديل الاسئلة المقدمة</h1>
    <div class="form">
        <form class="form-horizontal" method="POST" action="{{route('questions.update',$edit_data->id)}}" enctype="multipart/form-data">
            @csrf
        <div class="container">
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">السؤال بالعربية</label>
                    <input type="text" name="question_ar" class="form-control" id="input0" value="{{$edit_data->question_ar}}" required >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">Question En </label>
                    <input type="text"  name="question_en" class="form-control" id="input0" value="{{$edit_data->question_en}}" required >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">الاجابة بالعربية</label>
                    <textarea name="answer_ar" class="form-control" id="" cols="160" rows="10" required >{{$edit_data->answer_ar}}</textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">Answer English</label>
                    <textarea name="answer_en" class="form-control" id="" cols="160" rows="10" required>{{$edit_data->answer_en}}</textarea>

                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12 left_text">
                    <button type="submit" class="btn btn-success">تعديل</button>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
@endsection