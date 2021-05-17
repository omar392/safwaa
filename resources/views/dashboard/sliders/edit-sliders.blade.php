@extends('dashboard.layouts.master')
@section('pageTitle', 'الشرائح')
@section('content')
<div class="page_content">

    <h1 class="heading_title"> تعديل شريحة</h1>
    <div class="form">
        <form class="form-horizontal" method="POST" action="{{route('sliders.update',$edit_data->id)}}" enctype="multipart/form-data">
            @csrf
        <div class="container">
            
            <div class="form-group">
                <div class="form-group">
                    <div class="col-sm-10">                
                        <label for="input4" class="col-sm-2 control-label bring_right left_text">تعديل الشريحة</label>
                        <input type="file" name="image" class="form-control" style="height: unset;" id="input4" value="{{$edit_data->image}}" multiple>
                    </div>
                </div>
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">الوصف بالعربية</label>
                    <input type="text" name="short_title" class="form-control" id="input0" value="{{$edit_data->short_title}}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">Description In English </label>
                    <input type="text"  name="long_title" class="form-control" id="input0" value="{{$edit_data->long_title}}">
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