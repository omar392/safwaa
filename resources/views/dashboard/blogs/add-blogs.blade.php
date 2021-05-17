@extends('dashboard.layouts.master')
@section('pageTitle', 'المدونة')
@section('content')
<div class="page_content">

    <h1 class="heading_title">إضافة جديدة للمدونة</h1>
    <div class="form">
        <form class="form-horizontal" method="POST" action="{{route('blogs.store')}}" enctype="multipart/form-data">
            @csrf
        <div class="container">
               <div class="form-group">
                <div class="form-group">
                    <div class="col-sm-10">
                        <label for="input4" class="col-sm-2 control-label bring_right left_text">رفع الصورة</label>
                        <input type="file" name="image" class="form-control" style="height: unset;" id="input4" multiple>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">العنوان بالعربية</label>
                    <input type="text" name="title_ar" class="form-control" id="input0" placeholder="أدخل العنوان بالعربية ">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">Title In English</label>
                    <input type="text"  name="title_en" class="form-control" id="input0" placeholder="Enter The Title In English">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">وصف الخبر بالعربية </label>
                    <textarea name="subject_ar" class="form-control" id="" cols="160" rows="10"  placeholder="أدخل موضوع المدونة بالعربية"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">Enter The New Description In English</label>
                    <textarea name="subject_en" class="form-control" id="" cols="160" rows="10"  placeholder="Enter Blog Subject In English"></textarea>
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