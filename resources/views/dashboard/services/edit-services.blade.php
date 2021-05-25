@extends('dashboard.layouts.master')
@section('pageTitle', 'الخدمات')
@section('content')
<div class="page_content">

    <h1 class="heading_title">تعديل الخدمات المقدمة</h1>
    <div class="form">
        <form class="form-horizontal" method="POST" action="{{route('services.update',$edit_data->id)}}" enctype="multipart/form-data">
            @csrf
        <div class="container">
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">الاسم بالعربية</label>
                    <input type="text" name="name_ar" class="form-control" id="input0" value="{{$edit_data->name_ar}}" required >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">Name En </label>
                    <input type="text"  name="name_en" class="form-control" id="input0" value="{{$edit_data->name_en}}" required >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">وصف الخدمة</label>
                    {{-- <textarea name="description_ar" class="form-control" id="" cols="160" rows="10" required >{{$edit_data->description_ar}}</textarea> --}}
                    <textarea name="description_ar" id="editor1">{!! $edit_data->description_ar !!}</textarea>
                    <script>
                            CKEDITOR.replace( 'editor1' );
                    </script>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">Services Description</label>
                    {{-- <textarea name="description_en" class="form-control" id="" cols="160" rows="10" required >{{$edit_data->description_en}}</textarea> --}}
                    <textarea name="description_en" id="editor">{!! $edit_data->description_en !!}</textarea>
                    <script>
                            CKEDITOR.replace( 'editor' );
                    </script>
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