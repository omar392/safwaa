@extends('dashboard.layouts.master')
@section('pageTitle', 'عداد القضايا')
@section('content')
<div class="page_content">

    <h1 class="heading_title">تعديل فى عداد القضايا</h1>
    <div class="form">
        <form class="form-horizontal" method="POST" action="{{route('isues.update',$edit_data->id)}}" enctype="multipart/form-data">
            @csrf
        <div class="container">
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">القضايا التى حلت</label>
                    <input type="number" name="solved" class="form-control" id="input0" value="{{$edit_data->solved}}" required >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">القضايا قيد الانتظار </label>
                    <input type="number"  name="waited" class="form-control" id="input0"value="{{$edit_data->waited}}" required >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">قضايا تدرس</label>
                    <input type="number"  name="studied" class="form-control" id="input0" value="{{$edit_data->studied}}" required >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">Lower Degree</label>
                    <input type="number" name="losed" class="form-control" id="input0" value="{{$edit_data->losed}}" required >
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