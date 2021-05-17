@extends('frontend.layouts.master')
@section('content')
<style>
    .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
</style>
<div class="page-banner bg-1">
    <div class="d-table">
    <div class="d-table-cell">
    <div class="container">
    <div class="page-content">
    <h2>Team</h2>
    <ul>
    <li><a href="index.html">Home <i class="las la-angle-right"></i></a></li>
    <li>Team</li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    
    <div class="attorney-area ptb-100">
    <div class="container">
    <div class="section-title">
    <span>Experienced Team</span>
    <h2>Our Experienced Attorney Are Ready To answer any questions</h2>
    </div>
    <div class="row">

@foreach ($members as  $member)
    <div class="col-lg-4 col-sm-6">
    
    <div class="attorney-card">
     <a href="#">
    <img src="{{asset('upload/slider_images/'.$member->image)}}" alt="Image" style="width: 300px;hight: 200px;" class="center" >
    </a>
    <div class="attorney-card-text">
    <h3><a href="#">{{$member->name_en}}</a></h3>
    <p>{{$member->degree_en}}</p>
    </div>
    </div>
    </div>
    @endforeach
    </div>
    </div>
    
   
    </div>
    </div>
    </div>
@endsection