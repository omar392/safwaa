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
    <div class="col-lg-4 col-sm-6">
    <div class="blog-card">
    <a href="#">
    <img src="{{asset('frontend/img/news%26blog/blog1.jpg')}}" alt="Image">
    </a>
    <div class="blog-card-text">
     <h3><a href="#">Law provides comprehensive business</a></h3>
    <ul>
    <li>
    <i class="las la-calendar"></i>
    22 Sep 2020
    </li>
    <li>
    <i class="las la-user-alt"></i>
    Thomas Albeny
    </li>
    </ul>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
    <a href="#" class="read-more">
    Read More <i class="las la-angle-double-right"></i>
    </a>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-sm-6">
    <div class="blog-card">
    <a href="#">
    <img src="{{asset('frontend/img/news%26blog/blog2.jpg')}}" alt="Image">
    </a>
    <div class="blog-card-text">
    <h3><a href="#">Broken Bonds: rights after a divorce</a></h3>
    <ul>
    <li>
    <i class="las la-calendar"></i>
    23 Sep 2020
    </li>
    <li>
    <i class="las la-user-alt"></i>
    Rick Barry
    </li>
    </ul>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
    <a href="#" class="read-more">
    Read More <i class="las la-angle-double-right"></i>
    </a>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-sm-6">
    <div class="blog-card">
    <a href="#">
    <img src="{{asset('frontend/img/news%26blog/blog3.jpg')}}" alt="Image">
    </a>
    <div class="blog-card-text">
    <h3><a href="#">The virtue of justice consists in moderation</a></h3>
    <ul>
    <li>
    <i class="las la-calendar"></i>
    24 Sep 2020
    </li>
    <li>
    <i class="las la-user-alt"></i>
    Julius Erving
    </li>
    </ul>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
    <a href="#" class="read-more">
    Read More <i class="las la-angle-double-right"></i>
    </a>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-sm-6">
    <div class="blog-card">
    <a href="#">
    <img src="{{asset('frontend/img/news%26blog/blog4.jpg')}}" alt="Image">
    </a>
    <div class="blog-card-text">
    <h3><a href="#">Who Can The Victim A Sue After A Car Accident?</a></h3>
    <ul>
    <li>
    <i class="las la-calendar"></i>
    25 Sep 2020
    </li>
    <li>
    <i class="las la-user-alt"></i>
    Robert Adam
    </li>
    </ul>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
    <a href="#" class="read-more">Read More <i class="las la-angle-double-right"></i></a>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-sm-6">
    <div class="blog-card">
    <a href="#">
    <img src="{{asset('frontend/img/news%26blog/blog5.jpg')}}" alt="Image">
    </a>
    <div class="blog-card-text">
    <h3><a href="#">By Whom Your Business Is Being Loss?</a></h3>
    <ul>
    <li>
    <i class="las la-calendar"></i>
    26 Sep 2020
    </li>
    <li>
    <i class="las la-user-alt"></i>
    Christian Thomas
    </li>
    </ul>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
    <a href="#" class="read-more">Read More <i class="las la-angle-double-right"></i></a>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-sm-6">
    <div class="blog-card">
    <a href="#">
    <img src="{{asset('frontend/img/news%26blog/blog6.jpg')}}" alt="Image">
    </a>
    <div class="blog-card-text">
    <h3><a href="#">Justice May For You If You Are Innocent</a></h3>
    <ul>
    <li>
    <i class="las la-calendar"></i>
    27 Sep 2020
    </li>
    <li>
    <i class="las la-user-alt"></i>
    Jack Jaxon
    </li>
    </ul>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
    <a href="#" class="read-more">Read More <i class="las la-angle-double-right"></i></a>
    </div>
    </div>
    </div>
    </div>
    
    <div class="col-lg-12 col-md-12">
    <ul class="pagination">
    <li class="page-item">
    <a class="page-link" href="#" aria-label="Previous">
    <span aria-hidden="true">&laquo;</span>
    </a>
    </li>
    <li class="page-item active"><a class="page-link" href="#">1</a></li>
     <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
    <a class="page-link" href="#" aria-label="Next">
    <span aria-hidden="true">&raquo;</span>
    </a>
    </li>
    </ul>
    </div>
    </div>
    </div>
    <div class="article-share">
        <ul class="social">
        <li><span>Share:</span></li>
        <li><a href="#" class="facebook" target="_blank"><i class="lab la-facebook-f"></i></a></li>
        <li><a href="#" class="twitter" target="_blank"><i class="lab la-twitter"></i></a></li>
        <li><a href="#" class="linkedin" target="_blank"><i class="lab la-linkedin-in"></i></a></li>
        <li><a href="#" class="instagram" target="_blank"><i class="lab la-instagram"></i></a></li>
        </ul>
    </div>
@endsection