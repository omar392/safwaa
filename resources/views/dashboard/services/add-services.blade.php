@extends('dashboard.layouts.master')
@section('pageTitle', 'الخدمات')
@section('content')
<div class="page_content">

    <h1 class="heading_title">إضافة الخدمات التى نقدمها</h1>
    <div class="form">
        <form class="form-horizontal" method="POST" action="{{route('services.store')}}" enctype="multipart/form-data">
            @csrf
        <div class="container">
            
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">اسم الخدمة بالعربية</label>
                    <input type="text" name="name_ar" class="form-control" id="input0" placeholder="أدخل الخدمة بالعربية ">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">Services En </label>
                    <input type="text"  name="name_en" class="form-control" id="input0" placeholder="Enter The Service In English">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">وصف الخدمة بالعربية </label>
                    <textarea name="description_ar" class="form-control" id="" cols="160" rows="10"  placeholder="أدخل وصف الخدمة بالعربية"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">Enter Service Description In English</label>
                    <textarea name="description_en" class="form-control" id="" cols="160" rows="10"  placeholder="Enter Service Description In English"></textarea>
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