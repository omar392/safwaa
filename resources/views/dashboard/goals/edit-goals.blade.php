@extends('dashboard.layouts.master')
@section('pageTitle', 'الرؤية')
@section('content')
<div class="page_content">

    <h1 class="heading_title">تعديل الرؤية والرسالة</h1>
    <div class="form">
        <form class="form-horizontal" method="POST" action="{{route('goals.update',$edit_data->id)}}" enctype="multipart/form-data">
            @csrf
        <div class="container">
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text"> الرؤية بالعربية</label>
                    {{-- <textarea name="goal_ar" class="form-control" id="" cols="160" rows="10" required >{{$edit_data->goal_ar}}</textarea> --}}
                    <textarea name="goal_ar" id="editor3">{!! $edit_data->goal_ar !!}</textarea>
                    <script>
                            CKEDITOR.replace( 'editor3' );
                    </script>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">Message English</label>
                    {{-- <textarea name="goal_en" class="form-control" id="" cols="160" rows="10" required >{{$edit_data->goal_en}}</textarea> --}}
                    <textarea name="goal_en" id="editor2">{!! $edit_data->goal_en !!}</textarea>
                    <script>
                            CKEDITOR.replace( 'editor2' );
                    </script>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text"> الرسالة بالعربية</label>
                    {{-- <textarea name="message_ar" class="form-control" id="" cols="160" rows="10" required >{{$edit_data->message_ar}}</textarea> --}}
                    <textarea name="message_ar" id="editor1">{!! $edit_data->message_ar !!}</textarea>
                    <script>
                            CKEDITOR.replace( 'editor1' );
                    </script>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="input0" class="col-sm-2 control-label bring_right left_text">Message English</label>
                    {{-- <textarea name="message_en" class="form-control" id="" cols="160" rows="10" required >{{$edit_data->message_en}}</textarea> --}}
                    <textarea name="message_en" id="editor">{!! $edit_data->message_en !!}</textarea>
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