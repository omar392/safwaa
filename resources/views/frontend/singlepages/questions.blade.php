@extends('frontend.layouts.master')
@section('content')
<div class="page-banner bg-1">
    <div class="d-table">
    <div class="d-table-cell">
    <div class="container">
    <div class="page-content">
    <h2>{{__('messages.Famous Questions')}}</h2>
    <ul>
    <li><a href="#">{{__('messages.Home')}} <i class="las la-angle-right"></i></a></li>
    <li>{{__('messages.Famous Questions')}}</li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    
    <div class="faq-area ptb-100">
    <div class="container">
    <div class="row align-items-center">
    <div class="col-lg-7 col-md-12">
    <div class="faq-accordion">
    <ul class="accordion">

@foreach ($questions as $question)
    
    <li class="accordion-item">
    <a class="accordion-title active" href="javascript:void(0)">
    <i class="las la-plus"></i>
   {{$question->question_en}}
    </a>
    <p class="accordion-content show">{{$question->answer_en}}</p>
    </li>

    @endforeach

    </ul>
    </div>
    </div>
    <div class="col-lg-5 col-md-12">
    <div class="faq-image">
    <img src="{{asset('frontend/img/progress-bg.jpg')}}" alt="image">
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection