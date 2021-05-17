@extends('dashboard.layouts.master')
@section('pageTitle', 'المدونة')
@section('content')
<div class="page_content">

    <h1 class="heading_title">تعديل المدونة</h1>
    <div class="form">
        <form class="form-horizontal" method="POST" action="{{route('blogs.update',$edit_data->id)}}" enctype="multipart/form-data">
            @csrf
        <div class="container">
            <div class="form-group">
                <div class="form-group">
                    <div class="col-sm-10">                
                        <label for="input4" class="col-sm-2 control-label bring_right left_text">تعديل الشريحة</label>
                        <input type="file" name="image" class="form-control" style="height: unset;" id="input4" value="{{$edit_data->image}}" multiple>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">العنوان بالعربية</label>
                    <input type="text" name="title_ar" class="form-control" id="input0" value="{{$edit_data->title_ar}}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">Title En </label>
                    <input type="text"  name="title_en" class="form-control" id="input0" value="{{$edit_data->title_en}}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">الموضوع بالعربية</label>
                    <textarea name="subject_ar" class="form-control" id="" cols="160" rows="10">{{$edit_data->subject_ar}}</textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">Subject Description</label>
                    <textarea name="subject_en" class="form-control" id="" cols="160" rows="10">{{$edit_data->subject_en}}</textarea>

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