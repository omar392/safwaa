@extends('dashboard.layouts.master')
@section('pageTitle', 'الاخبار')
@section('content')
<div class="page_content">

    <h1 class="heading_title">تعديل الاخبار المقدمة</h1>
    <div class="form">
        <form class="form-horizontal" method="POST" action="{{route('news.update',$edit_data->id)}}" enctype="multipart/form-data">
            @csrf
        <div class="container">
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">الخبر بالعربية</label>
                    <input type="text" name="new_title_ar" class="form-control" id="input0" value="{{$edit_data->new_title_ar}}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">News En </label>
                    <input type="text"  name="new_title_en" class="form-control" id="input0" value="{{$edit_data->new_title_en}}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">وصف الخدمة</label>
                    {{-- <input type="text"  name="description_ar" class="form-control" id="input0" value="{{$edit_data->description_ar}}"> --}}
                    <textarea name="new_description_ar" class="form-control" id="" cols="160" rows="10">{{$edit_data->new_description_ar}}</textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">Services Description</label>
                    {{-- <input type="text" name="description_en" class="form-control" id="input0" value="{{$edit_data->description_en}}"> --}}
                    <textarea name="new_description_en" class="form-control" id="" cols="160" rows="10">{{$edit_data->new_description_en}}</textarea>

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