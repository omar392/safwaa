@extends('frontend.layouts.master')
@section('content')
<div class="page-banner bg-1">
    <div class="d-table">
    <div class="d-table-cell">
    <div class="container">
    <div class="page-content">
    <h2>Blog</h2>
    <ul>
    <li><a href="index.html">Home <i class="las la-angle-right"></i></a></li>
    <li>Blog</li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    
    <div class="blog-area ptb-100">
    <div class="container">
    <div class="row">
        {{--  --}}
        @foreach ($blogs as $blog)
    <div class="col-lg-4 col-sm-6">
    <div class="blog-card">
    <a href="#">
    <img src="{{asset('upload/slider_images/'.$blog->image)}}" alt="Image" style="width: 400px;hight: 400px;" class="center" >
    </a>
    <div class="blog-card-text">
     <h3>{{$blog->title_ar}}</h3>
    <p>{{$blog->subject_ar}}</p>
    </div>
    </div>
    </div>
           
        @endforeach
    {{--  --}}
    
    </div>
    </div>
@endsection