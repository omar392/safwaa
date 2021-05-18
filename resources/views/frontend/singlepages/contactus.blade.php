@extends('frontend.layouts.master')
@section('content')
<div class="page-banner bg-1">
    <div class="d-table">
    <div class="d-table-cell">
    <div class="container">
    <div class="page-content">
    <h2>Contact Us</h2>
    <ul>
    <li><a href="index.html">Home <i class="las la-angle-right"></i></a></li>
    <li>Contact Us</li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    
    <div class="contact-area contact-two ptb-100">
    <div class="container">
    <div class="row align-items-center">
    <div class="col-lg-6">
    <div class="contact-text">
    <div class="section-title">
    <h2>Contact Us Today, Get In Touch With Expert</h2>
    <p>This is version of Lorem Ipsum. Proin ida nibh vel velit auctor aliquet. Aenean tdin, lorem quis bibendum auctor, nisi elit conse thequat ipsum, nec sagtis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit. amet.mauris.</p>
    </div>
    <div class="row">
    <div class="col-lg-6">
    <div class="contact-card">
    <span>Phone Number</span>
    <h3><a href="tel:+0123456987">+0123 456 987</a></h3>
    </div>
    </div>
    <div class="col-lg-6">
    <div class="contact-card">
    <span>Our Social Link</span>
    <ul>
    <li>
    <a href="#" target="_blank">
    <i class="lab la-facebook-f"></i>
    </a>
    </li>
    <li>
    <a href="#" target="_blank">
    <i class="lab la-twitter"></i>
    </a>
    </li>
    <li>
    <a href="#" target="_blank">
    <i class="lab la-instagram"></i>
    </a>
    </li>
    <li>
    <a href="#" target="_blank">
    <i class="lab la-google-plus"></i>
    </a>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-6">
    <div class="section-title">
    <span>Contact Form</span>
    <h2>Get A Flexible Schedule</h2>
    </div>
    @include('dashboard.layouts.flash-message')
    <div class="contact-form">
        <form method="POST" action="{{route('fronts.contactus.store')}}" enctype="multipart/form-data">
                @csrf
        <div class="row">
        <div class="col-md-6">
        <div class="form-group">
        <input type="text" name="name" class="form-control" id="name" required data-error="Please enter your name" placeholder="Full name">
        <div class="help-block with-errors"></div>
        <i class="las la-user"></i>
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
        <input type="email" name="email" class="form-control" id="email" required data-error="Please enter your email" placeholder="Email address">
        <div class="help-block with-errors"></div>
        <i class="las la-envelope"></i>
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
        <input type="text" name="phone" class="form-control" id="Phone" required data-error="Please enter your phone" placeholder="Phone No">
        <div class="help-block with-errors"></div>
        <i class="las la-phone"></i>
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
        <input type="text" name="subject" class="form-control" id="subject" required data-error="Please enter your subject" placeholder="Your subject">
        <div class="help-block with-errors"></div>
        <i class="las la-id-card"></i>
        </div>
        </div>
        <div class="col-lg-12 col-md-12">
        <div class="form-group">
        <textarea name="message" id="message" class="form-control" cols="30" rows="6" required data-error="Please enter your message" placeholder="Write your message..."></textarea>
        <div class="help-block with-errors"></div>
        <i class="las la-sms"></i>
        </div>
        </div>
        <div class="col-lg-12 col-md-12">
        <button type="submit" class="default-btn-one">Send</button>
        <div id="msgSubmit" class="h3 text-center hidden"></div>
        <div class="clearfix"></div>
        </div>
        </div>
        </form>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection