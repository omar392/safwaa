@extends('frontend.layouts.master')
@section('content')
    @include('frontend.layouts.slider')
    @include('frontend.layouts.services')
<div class="about-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="about-image">
                    <img src="{{asset('frontend/img/contact-bg.jpg')}}" style="height: 500px;" alt="Image">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="about-text">
                    <div class="section-title">
                        <span>{{__('messages.Who We Are')}}</span>
                        <h3>{{__('messages.Safwa Defention')}}</h3>
                    </div>
                    @foreach ($services as $service)
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li>
                                    <i class="las la-check-square"></i>
                                    {{$service->description}}
                                </li>
                            </ul>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <div class="service-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span>خدماتنا</span>
            <h2>نحن نوفر لك <span>أعلى الخدمات</span>بأداء متميز وفريد</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="service-card">
                    <a href="service-details.html">
                        <img src="{{asset('frontend/img/services/service1.jpg')}}" alt="Image">
                    </a>
                    <div class="service-text">
                        <i class="las la-city"></i>
                        <h3><a href="service-details.html"> القانون <span>المدنى</span></a></h3>
                        <p> نبحث لك عن العدالة و ما تريد تحقيقه هذا هو هدفنا نبحث لك عن العدالة و ما تريد تحقيقه هذا
                            هو هدفنا نبحث لك عن العدالة و ما تريد تحقيقه هذا هو هدفنا نبحث لك عن العدالة و ما تريد
                            تحقيقه هذا هو هدفنا</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="service-card">
                    <a href="service-details.html">
                        <img src="{{asset('frontend/img/services/service2.jpg')}}" alt="Image">
                    </a>
                    <div class="service-text">
                        <i class="las la-users"></i>
                        <h3><a href="service-details.html"> قانون <span> الاسرة </span></a></h3>
                        <p> نبحث لك عن العدالة و ما تريد تحقيقه هذا هو هدفنا نبحث لك عن العدالة و ما تريد تحقيقه هذا
                            هو هدفنا نبحث لك عن العدالة و ما تريد تحقيقه هذا هو هدفنا نبحث لك عن العدالة و ما تريد
                            تحقيقه هذا هو هدفنا</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="service-card">
                    <a href="service-details.html">
                        <img src="{{asset('frontend/img/services/service3.jpg')}}" alt="Image">
                    </a>
                    <div class="service-text">
                        <i class="las la-user"></i>
                        <h3><a href="service-details.html"> قانون <span> الاقتصاد </span></a></h3>
                        <p> نبحث لك عن العدالة و ما تريد تحقيقه هذا هو هدفنا نبحث لك عن العدالة و ما تريد تحقيقه هذا
                            هو هدفنا نبحث لك عن العدالة و ما تريد تحقيقه هذا هو هدفنا نبحث لك عن العدالة و ما تريد
                            تحقيقه هذا هو هدفنا</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="service-card">
                    <a href="service-details.html">
                        <img src="{{asset('frontend/img/services/service4.jpg')}}" alt="Image">
                    </a>
                    <div class="service-text">
                        <i class="las la-broadcast-tower"></i>
                        <h3><a href="service-details.html"> قانون <span>العقوبات</span></a></h3>
                        <p> نبحث لك عن العدالة و ما تريد تحقيقه هذا هو هدفنا نبحث لك عن العدالة و ما تريد تحقيقه هذا
                            هو هدفنا نبحث لك عن العدالة و ما تريد تحقيقه هذا هو هدفنا نبحث لك عن العدالة و ما تريد
                            تحقيقه هذا هو هدفنا نبحث لك عن العدالة و ما تريد تحقيقه هذا هو هدفنا</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="service-card">
                    <a href="service-details.html">
                        <img src="{{asset('frontend/img/services/service5.jpg')}}" alt="Image">
                    </a>
                    <div class="service-text">
                        <i class="las la-balance-scale"></i>
                        <h3><a href="service-details.html">قانون<span> الاستثمار </span></a></h3>
                        <p> نبحث لك عن العدالة و ما تريد تحقيقه هذا هو هدفنا نبحث لك عن العدالة و ما تريد تحقيقه هذا
                            هو هدفنا نبحث لك عن العدالة و ما تريد تحقيقه هذا هو هدفنا نبحث لك عن العدالة و ما تريد
                            تحقيقه هذا هو هدفنا</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="service-card">
                    <a href="service-details.html">
                        <img src="{{asset('frontend/img/services/service6.jpg')}}" alt="Image">
                    </a>
                    <div class="service-text">
                        <i class="las la-balance-scale-right"></i>
                        <h3><a href="service-details.html"> قانون <span>التعليم</span></a></h3>
                        <p> نبحث لك عن العدالة و ما تريد تحقيقه هذا هو هدفنا نبحث لك عن العدالة و ما تريد تحقيقه هذا
                            هو هدفنا نبحث لك عن العدالة و ما تريد تحقيقه هذا هو هدفنا نبحث لك عن العدالة و ما تريد
                            تحقيقه هذا هو هدفنا</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="choose-area ptb-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="choose-text">
                    <div class="section-title">
                        <span>{{__('messages.Why')}}</span>
                        <h3><span>{{__('messages.Safwa Defention')}}</span></h3>
                    </div>
                    <div class="choose-card">
                        <i class="las la-chart-pie"></i>
                        <h3>{{__('messages.Exp')}}</h3>
                        <p>{{__('messages.Why Exp')}}</p>
                    </div>
                    <div class="choose-card">
                        <i class="las la-chart-bar"></i>
                        <h3>{{__('messages.Performance')}}</h3>
                        <p>{{__('messages.Performance Det')}}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="choose-img">
                    <div class="d-table">
                        <div class="d-table-cell">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="fun-facts-area pb-70">
    <div class="container">
        <div class="fun-facts-shape top">
            <img src="{{asset('frontend/img/shape.png')}}" class="shape1" alt="Shape">
            <img src="{{asset('frontend/img/shape.png')}}" class="shape2" alt="Shape">
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="signle-fun-fact">
                    <i class="las la-balance-scale"></i>
                    <h3><span>{{$isues->solved}}</span></h3>
                    <p>{{__('messages.Customer Num')}}</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="signle-fun-fact">
                    <i class="las la-gavel"></i>
                    <h3><span>{{$isues->waited}}</span></h3>
                    <p>{{__('messages.Team Num')}}</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="signle-fun-fact">
                    <i class="las la-trophy"></i>
                    <h3><span>{{$isues->studied}}</span></h3>
                    <p>{{__('messages.Branches Num')}}</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="signle-fun-fact">
                    <i class="lab la-gitkraken"></i>
                    <h3><span>{{$isues->losed}}</span></h3>
                    <p>{{__('messages.Years Exp')}}</p>
                </div>
            </div>
        </div>
        <div class="fun-facts-shape bottom">
            <img src="{{asset('frontend/img/shape.png')}}" class="shape1" alt="Shape">
            <img src="{{asset('frontend/img/shape.png')}}" class="shape2" alt="Shape">
        </div>
    </div>
</div>
<div class="testimonials-area case-study-area ptb-100">
    <div class="container">
        <div class="section-title text-center">
            <span> {{__('messages.New News')}}</span>
            <h2>{{__('messages.News Message')}}</h2>
        </div>
        <div class="testimonials-slider owl-carousel owl-theme">
            @foreach ($news as $new)
            <div class="testimonials-slider-item">
                <div class="testimonials-img">
                    <img src="{{asset('frontend/img/toto.jfif')}}" alt="Image">
                </div>
                <div class="img-text">
                    <h3>{{$new->title}}</h3>
                    <p>{{$new->description}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="testimonials-area ptb-100">
    <div class="container">
        <div class="section-title text-center">
            <span>{{__('messages.Customer')}}</span>
            <h3>{{__('messages.Customer Say')}}</h3>
        </div>
        <div class="testimonials-slider owl-carousel owl-theme">
            @foreach ($tells as $tell)
            <div class="testimonials-slider-item feed-back">
                <div class="testimonials-img" style="width: 500px;hight: 500px;">
                    <img src="{{asset('upload/customer_logo/'.$tell->image)}}"  alt="Image">

                    <div class="caption bottom-0">
                        <div class="caption-text">
                            <h3>{{$tell->name}}</h3>
                            <p>{{$tell->work}}</p>
                        </div>
                    </div>
                </div>
                <div class="img-text">
                    <p>{{$tell->description}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="attorney-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span><h5>{{__('messages.Partners')}}</h5></span>
            <h2>{{__('messages.Partners Role')}}</h2>
        </div>
        <div class="row">
            {{--  --}}
            @foreach ($members as $member)
            <div class="col-lg-4 col-sm-6">
                <div class="attorney-card">
                    <a href="attorney-details.html">
                        <img src="{{asset('upload/slider_images/'.$member->image)}}" alt="Image" style="width: 300px;hight: 200px;" class="center" >                    </a>
                    <div class="attorney-card-text">
                        <h3><a href="#">{{$member->name}}</a></h3>
                        <p>{{$member->degree}}</p>
                    </div>
                </div>
            </div>
            @endforeach
            {{--  --}}
        </div>
    </div>
</div>
<div class="partner-area ptb-100">
    <div class="container">
        <div class="section-title text-center">
            <span><h5>{{__('messages.Clintes')}}</h5></span>
            <h2>{{__('messages.Clintes Role')}}</h2>
        </div>
        <div class="partner-slider owl-carousel owl-theme">
            
            @foreach ($customers as $customer)
             
            <div class="partner-slider-item">
                <a>
                    <img src="{{asset('upload/customer_logo/'.$customer->customer_logo)}}" style="width: 350px;hight: 300px;" alt="Image"  class="center" >
                </a>
                <h5> <span style="color: rgb(17, 15, 15);"> {{$customer->name}} </span> </h5>
            </div>
              
            @endforeach
           
        </div>
    </div>
</div>
@endsection