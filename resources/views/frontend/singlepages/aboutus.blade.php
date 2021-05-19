@extends('frontend.layouts.master')

@section('content')
    <div class="page-banner bg-1">
        <div class="d-table">
        <div class="d-table-cell">
        <div class="container">
        <div class="page-content">
        <h2>{{__('messages.About Us')}}</h2>
        <ul>
        <li><a href="#">{{__('messages.Home')}}  <i class="las la-angle-right"></i></a></li>
        <li>{{__('messages.About Us')}}</li>
        </ul>
        </div>
        </div>
        </div>
        </div>
        </div>
        
        
        <div class="choose-area about-page-area pt-100 pb-70">
        <div class="container">
        <div class="section-title text-center">
        <h2>{{__('messages.Safwa Defention')}}</h2>
        </div>
        <div class="row">
            @foreach ($aboutus as $about)
          
        <div class="col-lg-6">
          <div class="choose-card">
        <i class="las la-balance-scale"></i>
        <h3>{{$about->name}}</h3>
        <p>{{$about->title}}</p>
        </div>
        </div>
      
             @endforeach
        </div>
        </div>
        </div>
        </div>
        
        
      
@endsection