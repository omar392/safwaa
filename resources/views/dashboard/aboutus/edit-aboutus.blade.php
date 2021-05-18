@extends('dashboard.layouts.master')
@section('pageTitle', 'أعمال المكتب')
@section('content')
<div class="page_content">

    <h1 class="heading_title">تعديل أعمال المكتب</h1>
    <div class="form">
        <form class="form-horizontal" method="POST" action="{{route('aboutus.update',$edit_data->id)}}" enctype="multipart/form-data">
            @csrf
        <div class="container">
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">العنوان بالعربية</label>
                    <input type="text" name="name_ar" class="form-control" id="input0" value="{{$edit_data->name_ar}}" required >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">Title En </label>
                    <input type="text"  name="name_en" class="form-control" id="input0" value="{{$edit_data->name_en}}" required >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">وصف العمل</label>
                    <textarea name="title_ar" class="form-control" id="" cols="160" rows="10" required >{{$edit_data->title_ar}}</textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">Work Description</label>
                    <textarea name="title_en" class="form-control" id="" cols="160" rows="10" required >{{$edit_data->title_en}}</textarea>

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