@extends('dashboard.layouts.master')
@section('pageTitle', 'الرؤية')
@section('content')
<div class="page_content">

    <h1 class="heading_title">تعديل الرؤية والرسالة</h1>
    <div class="form">
        <form class="form-horizontal" method="POST" action="{{route('goals.update',$edit_data->id)}}" enctype="multipart/form-data">
            @csrf
        <div class="container">
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text"> الرؤية بالعربية</label>
                    <textarea name="goal_ar" class="form-control" id="" cols="160" rows="10">{{$edit_data->goal_ar}}</textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">Message English</label>
                    <textarea name="goal_en" class="form-control" id="" cols="160" rows="10">{{$edit_data->goal_en}}</textarea>

                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text"> الرسالة بالعربية</label>
                    <textarea name="message_ar" class="form-control" id="" cols="160" rows="10">{{$edit_data->message_ar}}</textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">Message English</label>
                    <textarea name="message_en" class="form-control" id="" cols="160" rows="10">{{$edit_data->message_en}}</textarea>

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