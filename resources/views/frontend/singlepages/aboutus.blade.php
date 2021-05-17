@extends('frontend.layouts.master')
@section('content')
    <div class="page-banner bg-1">
        <div class="d-table">
        <div class="d-table-cell">
        <div class="container">
        <div class="page-content">
        <h2>About Us</h2>
        <ul>
        <li><a href="index.html">Home <i class="las la-angle-right"></i></a></li>
        <li>About Us</li>
        </ul>
        </div>
        </div>
        </div>
        </div>
        </div>
        
        
        <div class="choose-area about-page-area pt-100 pb-70">
        <div class="container">
        <div class="section-title text-center">
        <h2>We Are Top Lawyers With <span> 25 Years</span> Of Experience</h2>
        <p>Lore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris </p>
        </div>
        <div class="row">
            @foreach ($aboutus as $about)
          
        <div class="col-lg-6">
          <div class="choose-card">
        <i class="las la-balance-scale"></i>
        <h3>{{$about->name_ar}}</h3>
        <p>{{$about->title_ar}}</p>
        </div>
        </div>
      
             @endforeach
        </div>
        </div>
        </div>
        </div>
        
        
      
@endsection