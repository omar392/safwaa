<footer class="footer-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-sm-3">
                <div class="footer-widget">
                    <div class="logo">
                        <img src="{{asset('frontend/img/favicon.png')}}"  alt="logo">
                    </div>
                    <h3>{{__('messages.Safwa')}}</h3>
                    <p>{{__('messages.Safwa Defention')}}</p>
                    <ul class="footer-socials">
                        <li>
                            <a href="https://{{$emails->facebook}}" target="_blank">
                                <i class="lab la-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://{{$emails->twitter}}" target="_blank">
                                <i class="lab la-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://{{$emails->inestgram}}" target="_blank">
                                <i class="lab la-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://{{$emails->gmail}}" target="_blank">
                                <i class="las la-sms"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-sm-3">
                <div class="footer-widget">
                    <h3>{{__('messages.Fast Pages')}}</h3>
                    <ul class="footer-text">
                        <li>
                            <a href="{{route('fronts.index')}}">
                                <i class="las la-star"></i>
                                {{__('messages.Home')}} 
                            </a>
                        </li>
                        <li>
                            <a href="{{route('fronts.aboutus')}}">
                                <i class="las la-star"></i>
                                {{__('messages.About Us')}}
                            </a>
                        </li>
                        <li>
                            <a href="{{route('fronts.services')}}">
                                <i class="las la-star"></i>
                                {{__('messages.Services')}} 
                            </a>
                        </li>
                        <li>
                            <a href="{{route('fronts.blog')}}">
                                <i class="las la-star"></i>
                                {{__('messages.Blog')}}
                            </a>
                        </li>
                        <li>
                            <a href="{{route('fronts.contactus')}}">
                                <i class="las la-star"></i>
                                {{__('messages.Contact Us')}}
                            </a>
                        </li>
                        <li>
                            <a href="{{route('fronts.team')}}">
                                <i class="las la-star"></i>
                                {{__('messages.Our Team')}} 
                            </a>
                        </li>
                        <li>
                            <a href="{{route('fronts.gallery')}}">
                                <i class="las la-star"></i>
                                {{__('messages.Gallery')}}
                            </a>
                        </li>
                        <li>
                            <a href="{{route('fronts.questions')}}">
                                <i class="las la-star"></i>
                                {{__('messages.Famous Questions')}}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            {{-- <div class="col-lg-2 col-sm-6">
                <div class="footer-widget pl-50">
                    <h3>الخدمات</h3>
                    <ul class="footer-text">
                        <li>
                            <a href="#">
                                <i class="las la-star"></i>
                                قانون العقوبات
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="las la-star"></i>
                                قانون الاسرة
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="las la-star"></i>
                                القانون المدنى
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="las la-star"></i>
                                قانون التعليم
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="las la-star"></i>
                                قانون الاقتصاد
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="las la-star"></i>
                                قانون الاستثمار
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="las la-star"></i>
                                القانون الجنائى
                            </a>
                        </li>
                    </ul>
                </div>
            </div> --}}
            <div class="col-lg-3 col-sm-3">
                <div class="footer-widget">
                    <h3>{{__('messages.Contacts')}}</h3>
                    <ul class="info-list">
                        <li>
                            <i class="las la-phone"></i>
                            {{-- <i class="las la-battery-three-quarters"></i> --}}
                            <a href="tel:{{$emails->whats_app_num}}">{{$emails->whats_app_num}}</a>
                        </li>
                        <li>
                            <a href="https://{{$emails->gmail}}">
                                <i class="las la-envelope"></i>
                                {{$emails->gmail}}
                            </a>
                        </li>
                        <li>
                            <a href="https://www.google.com/maps/dir/31.0759904,31.4798942/30.0550448,31.3468266/@30.5611103,31.9370336,9z/data=!3m1!4b1!4m4!4m3!1m1!4e1!1m0" target="_blank">
                                <i class="las la-map-marker-alt"></i>
                            </a>
                            {{__('messages.Address')}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="footer-bottom">
    <div class="container">
        <p>Copyright @2021 <a href="https://www.facebook.com/profile.php?id=100002626340909">omar asharf</a></p>
    </div>
</div>
<div class="go-top">
    <i class="las la-hand-point-up"></i>
</div>