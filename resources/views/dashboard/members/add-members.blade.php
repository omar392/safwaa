@extends('dashboard.layouts.master')
@section('pageTitle', 'الاعضاء')
@section('content')
<div class="page_content">

    <h1 class="heading_title">إضافة أعضاء فريق العمل ودرجاتهم</h1>
    <div class="form">
        <form class="form-horizontal" method="POST" action="{{route('members.store')}}" enctype="multipart/form-data">
            @csrf
        <div class="container">
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input4" class="col-sm-2 control-label bring_right left_text">رفع الصورة</label>
                    <input type="file" name="image" class="form-control" style="height: unset;" id="input4" multiple>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">الاسم بالعربية</label>
                    <input type="text" name="name_ar" class="form-control" id="input0" placeholder="أدخل الاسم بالعربية">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">Name En </label>
                    <input type="text"  name="name_en" class="form-control" id="input0" placeholder="Enter The Name In English">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">درجة المحامى بالعربية</label>
                    <input type="text"  name="degree_ar" class="form-control" id="input0" placeholder="أدخل درجة المحامى">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">Lower Degree</label>
                    <input type="text" name="degree_en" class="form-control" id="input0" placeholder="Enter Lower Degree In English">
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