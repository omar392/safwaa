@extends('frontend.layouts.master')
@section('content')
<div class="page-banner bg-1">
    <div class="d-table">
    <div class="d-table-cell">
    <div class="container">
    <div class="page-content">
    <h2>{{__('messages.Gallery')}} </h2>
    <ul>
    <li><a href="#">{{__('messages.Home')}} <i class="las la-angle-right"></i></a></li>
    <li>{{__('messages.Gallery')}} </li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    
    <div class="gallery-area pt-100 pb-70">
    <div class="container">
    <div class="section-title">
    <h2>{{__('messages.Gallery')}}</h2>
    </div>
    <div class="row">
   @foreach ($galeries as $galery)
       
    <div class="col-lg-4 col-md-6">
    <div class="atorn-gallery">
    <img src="{{asset('upload/slider_images/'.$galery->image)}}" alt="Image" style="width: 400px;hight: 400px;" class="center" >
    <div class="caption">
    <div class="d-table">
    <div class="d-table-cell">
    <a href="{{asset('upload/slider_images/'.$galery->image)}}" alt="Image" style="width: 400px;hight: 400px;" class="center" >
    <i class="las la-eye"></i>
    </a>
    </div>
    </div>
     </div>
    </div>
    </div>
    @endforeach
    </div>
    </div>
    </div>
    @endsection