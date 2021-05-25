@extends('dashboard.layouts.master')
@section('pageTitle', 'رأى العميل')
@section('content')
<div class="page_content">

    <h1 class="heading_title">تعديل رأى عميل</h1>
    <div class="form">
        <form class="form-horizontal" method="POST" action="{{route('tells.update',$edit_data->id)}}" enctype="multipart/form-data">
            @csrf
        <div class="container">
            
            <div class="form-group">
                <div class="col-sm-10">                
                    <label for="input4" class="col-sm-2 control-label bring_right left_text">تعديل لوجو العميل</label>
                    <input type="file" name="image" class="form-control" style="height: unset;" id="input4" value="{{$edit_data->image}}" multiple>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">الاسم العميل بالعربية</label>
                    <input type="text" name="name_ar" class="form-control" id="input0" value="{{$edit_data->name_ar}}" required >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">Customer Name En </label>
                    <input type="text"  name="name_en" class="form-control" id="input0" value="{{$edit_data->name_en}}" required >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">وظيفة العميل بالعربية</label>
                    <input type="text" name="work_ar" class="form-control" id="input0" value="{{$edit_data->work_ar}}" required >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">Customer Work En </label>
                    <input type="text"  name="work_en" class="form-control" id="input0" value="{{$edit_data->work_en}}" required >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">ما قاله العميل بالعربية</label>
                    {{-- <textarea name="description_ar" class="form-control" id="" cols="160" rows="10"  placeholder="أدخل بالعربية" required >{{$edit_data->description_ar}}</textarea> --}}
                    <textarea name="description_ar" id="editor1">{!! $edit_data->description_ar !!}</textarea>
                    <script>
                            CKEDITOR.replace( 'editor1' );
                    </script>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">Enter The Message In English</label>
                    {{-- <textarea name="description_en" class="form-control" id="" cols="160" rows="10"  placeholder="Enter The Message In English" required >{{$edit_data->description_en}}</textarea> --}}
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