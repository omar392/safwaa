@extends('dashboard.layouts.master')
@section('pageTitle', 'التواصل')
@section('content')
<div class="page_content">

    <h1 class="heading_title">تعديل مواقع التواصل الإجتماعى</h1>
    <div class="form">
        <form class="form-horizontal" method="POST" action="{{route('social.update',$edit_data->id)}}" enctype="multipart/form-data">
            @csrf
        <div class="container">
            
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">facebook</label>
                    <input type="text" name="facebook" class="form-control" id="input0" placeholder="أدخل الموقع" value="{{$edit_data->facebook}}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">whats_app_num</label>
                    <input type="number" name="whats_app_num"  class="form-control" id="input0" placeholder="أدخل رقم الواتس" value="{{$edit_data->whats_up_num}}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">Gmail</label>
                    <input type="text"  name="gmail" class="form-control" id="input0" placeholder="أدخل الموقع" value="{{$edit_data->gmail}}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">twitter</label>
                    <input type="text"  name="twitter" class="form-control" id="input0" placeholder="أدخل الموقع" value="{{$edit_data->twitter}}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">inestgram</label>
                    <input type="text" name="inestgram" class="form-control" id="input0" placeholder="أدخل الموقع"value="{{$edit_data->inestgram}}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">youtube</label>
                    <input type="text" name="youtube" class="form-control" id="input0" placeholder="أدخل الموقع" value="{{$edit_data->youtube}}">
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
             