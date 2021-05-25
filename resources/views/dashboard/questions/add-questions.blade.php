@extends('dashboard.layouts.master')
@section('pageTitle', 'الاسئلة')
@section('content')
<div class="page_content">

    <h1 class="heading_title">إضافة سؤال وجواب</h1>
    <div class="form">
        <form class="form-horizontal" method="POST" action="{{route('questions.store')}}" enctype="multipart/form-data">
            @csrf
        <div class="container">
            
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text"> السؤال بالعربية</label>
                    <input type="text" name="question_ar" class="form-control" id="input0" placeholder="أدخل السؤال بالعربية " required >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">Question En </label>
                    <input type="text"  name="question_en" class="form-control" id="input0" placeholder="Enter The Question In English" required >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text"> اجابة السؤال بالعربية </label>
                    {{-- <textarea name="answer_ar" class="form-control" id="" cols="160" rows="10"  placeholder="  إجابة السؤال بالعربية" required ></textarea> --}}
                    <textarea name="answer_ar" id="editor1"></textarea>
                    <script>
                            CKEDITOR.replace( 'editor1' );
                    </script>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">Enter The Answer In English</label>
                    {{-- <textarea name="answer_en" class="form-control" id="" cols="160" rows="10"  placeholder="Enter The Answer In English" required ></textarea> --}}
                    <textarea name="answer_en" id="editor"></textarea>
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