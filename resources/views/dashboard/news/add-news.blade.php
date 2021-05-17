@extends('dashboard.layouts.master')
@section('pageTitle', 'الأخبار')
@section('content')
<div class="page_content">

    <h1 class="heading_title">إضافة أخبار جديدة خاصة بالمجموعة</h1>
    <div class="form">
        <form class="form-horizontal" method="POST" action="{{route('news.store')}}" enctype="multipart/form-data">
            @csrf
        <div class="container">
            
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">الخبر بالعربية</label>
                    <input type="text" name="new_title_ar" class="form-control" id="input0" placeholder="أدخل الخدمة بالعربية ">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">News En English</label>
                    <input type="text"  name="new_title_en" class="form-control" id="input0" placeholder="Enter The Service In English">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">وصف الخبر بالعربية </label>
                    <textarea name="new_description_ar" class="form-control" id="" cols="160" rows="10"  placeholder="أدخل وصف الخدمة بالعربية"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">Enter The New Description In English</label>
                    <textarea name="new_description_en" class="form-control" id="" cols="160" rows="10"  placeholder="Enter Service Description In English"></textarea>
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