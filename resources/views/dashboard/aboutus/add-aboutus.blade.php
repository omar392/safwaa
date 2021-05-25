@extends('dashboard.layouts.master')
@section('pageTitle', 'أعمال المكتب')
@section('content')
<div class="page_content">

    <h1 class="heading_title">إضافة أعمال المكتب</h1>
    <div class="form">
        <form class="form-horizontal" method="POST" action="{{route('aboutus.store')}}" enctype="multipart/form-data">
            @csrf
        <div class="container">
            
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">عنوان العمل بالعربية</label>
                    <input type="text" name="name_ar" class="form-control" id="input0" placeholder="أدخل المهمة بالعربية" required >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">Title Work En </label>
                    <input type="text"  name="name_en" class="form-control" id="input0" placeholder="Enter The Title In English" required >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">وصف العمل بالعربية </label>
                    {{-- <textarea name="title_ar" class="form-control" id="" cols="160" rows="10"  placeholder="أدخل وصف العمل بالعربية" required ></textarea> --}}
                    <textarea name="title_ar" id="editor1"></textarea>
                    <script>
                            CKEDITOR.replace( 'editor1' );
                    </script>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">Enter Work Description In English</label>
                    {{-- <textarea name="title_en" class="form-control" id="" cols="160" rows="10"  placeholder="Enter Work Description In English" required ></textarea> --}}
                    <textarea name="title_en" id="editor"></textarea>
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