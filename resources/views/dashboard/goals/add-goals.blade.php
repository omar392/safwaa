@extends('dashboard.layouts.master')
@section('pageTitle', 'الرؤية')
@section('content')
<div class="page_content">

    <h1 class="heading_title">إضافة الرؤية والرسالة</h1>
    <div class="form">
        <form class="form-horizontal" method="POST" action="{{route('goals.store')}}" enctype="multipart/form-data">
            @csrf
        <div class="container">
            
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">وصف الرؤية بالعربية </label>
                    <textarea name="goal_ar" class="form-control" id="" cols="160" rows="10"  placeholder="أدخل الرؤية بالعربية"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">Enter The Goal In English</label>
                    <textarea name="goal_en" class="form-control" id="" cols="160" rows="10"  placeholder="Enter Goals In English"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">الرسالة بالعربية </label>
                    <textarea name="message_ar" class="form-control" id="" cols="160" rows="10"  placeholder="أدخل الرسالة بالعربية"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">Enter The Message In English</label>
                    <textarea name="message_en" class="form-control" id="" cols="160" rows="10"  placeholder="Enter The Message In English"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12 left_text">
                    <button type="submit" class="btn btn-success">إضافة</button>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
@endsection