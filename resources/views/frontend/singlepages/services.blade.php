@extends('frontend.layouts.master')
@section('content')

<div class="page-banner bg-1">
    <div class="d-table">
    <div class="d-table-cell">
    <div class="container">
    <div class="page-content">
    <h2>{{__('messages.Services')}} </h2>
    <ul>
    <li><a href="index.html">{{__('messages.Home')}} <i class="las la-angle-right"></i></a></li>
    <li>{{__('messages.Services')}} </li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    
    <div class="our-service-area pt-100 pb-70">
    <div class="container">
    <div class="section-title">
    <span>{{__('messages.Services')}} </span>
    <h2>{{__('messages.Services Performance')}} </h2>
    </div>
    <div class="row">
@foreach ($services as $service)
    <div class="col-lg-4 col-sm-6">
    <div class="our-service-card">
    <i class="las la-balance-scale"></i>
    <h3><span>{{$service->name}}</span></h3>
    <p>{{$service->description}}</p>
    </div>
    </div>
@endforeach
    </div>
    </div>
    </div>
       
@endsection