@extends('dashboard.layouts.master')
@section('pageTitle', 'العملاء')
@section('content')
<div class="page_content">

    <h1 class="heading_title">إضافة عميل</h1>
    <div class="form">
        <form class="form-horizontal" method="POST" action="{{route('customers.store')}}" enctype="multipart/form-data">
            @csrf
        <div class="container">
            
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">الاسم العميل بالعربية</label>
                    <input type="text" name="name_ar" class="form-control" id="input0" placeholder="أدخل الاسم بالعربية" required >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">Customer Name En </label>
                    <input type="text"  name="name_en" class="form-control" id="input0" placeholder="Enter The Name In English" required >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input4" class="col-sm-2 control-label bring_right left_text">رفع لوجو العميل</label>
                    <input type="file" name="customer_logo" class="form-control" style="height: unset;" id="input4" multiple>
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