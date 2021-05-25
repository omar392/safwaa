@extends('dashboard.layouts.master')
@section('pageTitle', 'اراء العملاء')
@section('content')
<div class="page_content">

    <h1 class="heading_title">إضافة رأى</h1>
    <div class="form">
        <form class="form-horizontal" method="POST" action="{{route('tells.store')}}" enctype="multipart/form-data">
            @csrf
        <div class="container">

            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input4" class="col-sm-2 control-label bring_right left_text">رفع لوجو العميل</label>
                    <input type="file" name="image" class="form-control" style="height: unset;" id="input4" multiple>
                </div>
            </div>
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
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">وظيفة العميل بالعربية</label>
                    <input type="text" name="work_ar" class="form-control" id="input0" placeholder="أدخل الاسم بالعربية" required >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">Customer work En </label>
                    <input type="text"  name="work_en" class="form-control" id="input0" placeholder="Enter The Name In English" required >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">ما قاله العميل بالعربية</label>
                    {{-- <textarea name="description_ar" class="form-control" id="" cols="160" rows="10"  placeholder="أدخل بالعربية" required ></textarea> --}}
                    <textarea name="description_ar" id="editor1"></textarea>
                    <script>
                            CKEDITOR.replace( 'editor1' );
                    </script>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">Enter The Message In English</label>
                    {{-- <textarea name="description_en" class="form-control" id="" cols="160" rows="10"  placeholder="Enter The Message In English" required ></textarea> --}}
                    <textarea name="description_en" id="editor"></textarea>
                    <script>
                            CKEDITOR.replace( 'editor' );
                    </script>
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