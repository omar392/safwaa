@extends('frontend.layouts.master')
@section('content')
<div class="page-banner bg-1">
    <div class="d-table">
    <div class="d-table-cell">
    <div class="container">
    <div class="page-content">
    <h2>{{__('messages.Contact Us')}} </h2>
    <ul>
    <li><a href="index.html">{{__('messages.Home')}}  <i class="las la-angle-right"></i></a></li>
    <li>{{__('messages.Contact Us')}} </li>
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
    <h2>{{__('messages.Contact Us')}} </h2>
    <p>{{__('messages.Contact Message')}} </p>
    </div>
    </div>
    </div>
    <div class="col-lg-6">
    <div class="section-title">
    <span>{{__('messages.Contact Form')}}</span>
    </div>
    @include('dashboard.layouts.flash-message')
    <div class="contact-form">
        <form method="POST" action="{{route('fronts.contactus.store')}}" enctype="multipart/form-data">
                @csrf
        <div class="row">
        <div class="col-md-6">
        <div class="form-group">
        <input type="text" name="name" class="form-control" id="name" required data-error="Please enter your name" placeholder="{{__('messages.HolderName')}}">
        <div class="help-block with-errors"></div>
        <i class="las la-user"></i>
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
        <input type="email" name="email" class="form-control" id="email" required data-error="Please enter your email" placeholder="{{__('messages.HolderEmail')}}">
        <div class="help-block with-errors"></div>
        <i class="las la-envelope"></i>
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
        <input type="text" name="phone" class="form-control" id="Phone" required data-error="Please enter your phone" placeholder="{{__('messages.Holderphone')}}">
        <div class="help-block with-errors"></div>
        <i class="las la-phone"></i>
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
        <input type="text" name="subject" class="form-control" id="subject" required data-error="Please enter your subject" placeholder="{{__('messages.Holdersubject')}}">
        <div class="help-block with-errors"></div>
        <i class="las la-id-card"></i>
        </div>
        </div>
        <div class="col-lg-12 col-md-12">
        <div class="form-group">
        <textarea name="message" id="message" class="form-control" cols="30" rows="6" required data-error="Please enter your message" placeholder="{{__('messages.Holdermessage')}}"></textarea>
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