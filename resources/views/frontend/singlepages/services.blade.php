@extends('frontend.layouts.master')
@section('content')

<div class="page-banner bg-1">
    <div class="d-table">
    <div class="d-table-cell">
    <div class="container">
    <div class="page-content">
    <h2>Services</h2>
    <ul>
    <li><a href="index.html">Home <i class="las la-angle-right"></i></a></li>
    <li>Services</li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    
    <div class="our-service-area pt-100 pb-70">
    <div class="container">
    <div class="section-title">
    <span>Our Services</span>
    <h2>We Are Providing <span> Top Services</span> With Excellent Performance</h2>
    </div>
    <div class="row">
@foreach ($services as $service)
    <div class="col-lg-4 col-sm-6">
    <div class="our-service-card">
    <i class="las la-balance-scale"></i>
    <h3><span>{{$service->name_ar}}</span></h3>
    <p>{{$service->description_ar}}</p>
    </div>
    </div>
@endforeach
    </div>
    </div>
    </div>
       
@endsection