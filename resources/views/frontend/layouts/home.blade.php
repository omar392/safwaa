@extends('frontend.layouts.master')
@section('content')
    @include('frontend.layouts.slider')
    @include('frontend.layouts.services')
<div class="about-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="about-image">
                    <img src="{{asset('frontend/img/about.png')}}" alt="Image">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="about-text">
                    <div class="section-title">
                        <span>من نحن</span>
                        <h2>مجموعة من المحامين المتميزين<span>12 عام</span>من الخبرة</h2>
                        <p>تعرف على المزيدتعرف على المزيدتعرف على المزيدتعرف على المزيدتعرف على المزيدتعرف على
                            المزيدتعرف على المزيد</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li>
                                    <i class="las la-check-square"></i>
                                    100% معدلات النجاح
                                </li>
                                <li>
                                    <i class="las la-check-square"></i>
                                    لا تحتاج الى الكثير من المصاريف من أجل الاستشارة
                                </li>
                                <li>
                                    <i class="las la-check-square"></i>
                                    نؤدى الخدمات بخبرة عالية
                                </li>
                                <li>
                                    <i class="las la-check-square"></i>
                                    متابعة مستمرة
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li>
                                    <i class="las la-check-square"></i>
                                    دعم سريع
                                </li>
                                <li>
                                    <i class="las la-check-square"></i>
                                    أداء عالى فى المحاكم
                                </li>
                                <li>
                                    <i class="las la-check-square"></i>
                                    إستشارات مجانية
                                </li>
                                <li>
                                    <i class="las la-check-square"></i>
                                    أداء سريع وكامل
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="about-btn">
                        <a href="#" class="default-btn-one">إستشارات مجانية</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="service-area pt-100 pb-70">
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
</div>
<div class="choose-area ptb-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="choose-text">
                    <div class="section-title">
                        <span>لماذا تختار الصفوة ؟</span>
                        <h2>لاننا مجموعة من المحامين المتميزين<span>12عام</span>من الخبرة</h2>
                        <p> نبحث لك عن العدالة و ما تريد تحقيقه هذا هو هدفنا نبحث لك عن العدالة و ما تريد تحقيقه هذا
                            هو هدفنا نبحث لك عن العدالة و ما تريد تحقيقه هذا هو هدفنا نبحث لك عن العدالة و ما تريد
                            تحقيقه هذا هو هدفنا</p>
                    </div>
                    <div class="choose-card">
                        <i class="las la-chart-pie"></i>
                        <h3>الخبرة الكبيرة</h3>
                        <p> نبحث لك عن العدالة و ما تريد تحقيقه هذا هو هدفنا نبحث لك عن العدالة و ما تريد تحقيقه هذا
                            هو هدفنا</p>
                    </div>
                    <div class="choose-card">
                        <i class="las la-chart-bar"></i>
                        <h3>حققنا النجاح فى الكثير من القضايا الكبيرة</h3>
                        <p> نبحث لك عن العدالة و ما تريد تحقيقه هذا هو هدفنا نبحث لك عن العدالة و ما تريد تحقيقه هذا
                            هو هدفنا</p>
                    </div>
                    <div class="choose-card">
                        <i class="las la-user-tie"></i>
                        <h3>الاداء المتميز</h3>
                        <p> نبحث لك عن العدالة و ما تريد تحقيقه هذا هو هدفنا نبحث لك عن العدالة و ما تريد تحقيقه هذا
                            هو هدفنا.</p>
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
                    <h3><span class="odometer" data-count="300"></span></h3>
                    <p>القضايا التى حلت</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="signle-fun-fact">
                    <i class="las la-gavel"></i>
                    <h3><span class="odometer" data-count="00300"></span></h3>
                    <p>قضايا كسبناها</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="signle-fun-fact">
                    <i class="las la-trophy"></i>
                    <h3><span class="odometer" data-count="00300"></span></h3>
                    <p>قضايا نأمل فى الفوز بها</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="signle-fun-fact">
                    <i class="lab la-gitkraken"></i>
                    <h3><span class="odometer" data-count="00300"></span></h3>
                    <p>أكثر 10</p>
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
            <span>أخر الاخبار</span>
            <h2>نحن نوفر لك <span>خدمة متميزة </span> بأداء عالى</h2>
        </div>
        <div class="testimonials-slider owl-carousel owl-theme">
            <div class="testimonials-slider-item">
                <div class="testimonials-img">
                    <img src="{{asset('frontend/img/case-study/case-study1.jpg')}}" alt="Image">
                </div>
                <div class="img-text">
                    <h3>إصدار تراخيص العقارات</h3>
                    <p> نبحث لك عن العدالة و ما تريد تحقيقه هذا هو هدفنا نبحث لك عن العدالة و ما تريد تحقيقه هذا هو
                        هدفنا نبحث لك عن العدالة و ما تريد تحقيقه هذا هو هدفنا نبحث لك عن العدالة و ما تريد تحقيقه
                        هذا هو هدفنا نبحث لك عن العدالة و ما تريد تحقيقه هذا هو هدفنا</p>
                    <a href="#">
                        تعرف على المزيد
                        <i class="las la-angle-double-right"></i>
                    </a>
                </div>
            </div>
            <div class="testimonials-slider-item">
                <div class="testimonials-img">
                    <img src="{{asset('frontend/img/case-study/case-study2.jpg')}}" alt="Image">
                </div>
                <div class="img-text">
                    <h3>قضايا الاموال العامة</h3>
                    <p> نبحث لك عن العدالة و ما تريد تحقيقه هذا هو هدفنا نبحث لك عن العدالة و ما تريد تحقيقه هذا هو
                        هدفنا نبحث لك عن العدالة و ما تريد تحقيقه هذا هو هدفنا</p>
                    <a href="#">
                        تعرف على المزيد
                        <i class="las la-angle-double-right"></i>
                    </a>
                </div>
            </div>
            <div class="testimonials-slider-item">
                <div class="testimonials-img">
                    <img src="{{asset('frontend/img/case-study/case-study3.jpg')}}" alt="Image">
                </div>
                <div class="img-text">
                    <h3>القضايا الجنائية</h3>
                    <p> نبحث لك عن العدالة و ما تريد تحقيقه هذا هو هدفنا نبحث لك عن العدالة و ما تريد تحقيقه هذا هو
                        هدفنا نبحث لك عن العدالة و ما تريد تحقيقه هذا هو هدفنا نبحث لك عن العدالة و ما تريد تحقيقه
                        هذا هو هدفنا</p>
                    <a href="#">
                        تعرف على المزيد
                        <i class="las la-angle-double-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="contact-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="contact-text">
                    <div class="section-title">
                        <h2>تواصل معنا فى أى وقت</h2>
                        <p>نرحب بكم وباسئلتكم فى اى وقت وهذا يسعدنانرحب بكم وباسئلتكم فى اى وقت وهذا يسعدنانرحب بكم
                            وباسئلتكم فى اى وقت وهذا يسعدنانرحب بكم وباسئلتكم فى اى وقت وهذا يسعدنا نرحب بكم
                            وباسئلتكم فى اى وقت وهذا يسعدنا</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="contact-card">
                                <span>رقم الهاتف</span>
                                <h3><a href="tel:+0123456987">01032196538</a></h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-card">
                                <span>روابط مواقع التواصل الخاصة بنا</span>
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
                    <span>تواصل معنا</span>
                    <h2>إحصل على تواصل متميز ورد مقنع وسريع</h2>
                </div>
                <div class="contact-form">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="name" required
                                        placeholder="الاسم بالكامل">
                                    <i class="las la-user"></i>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" id="email" required
                                        placeholder="البريد الالكترونى الخاص بك">
                                    <i class="las la-envelope"></i>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control" id="Phone" required
                                        placeholder="رقم الهاتف ">
                                    <i class="las la-phone"></i>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="date" name="email" class="form-control" id="date">
                                    <i class="las la-calendar"></i>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" id="message" class="form-control" cols="30" rows="6"
                                        required placeholder="أكتب رسالتك ..."></textarea>
                                    <i class="las la-sms"></i>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn-one">إرسال</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="testimonials-area ptb-100">
    <div class="container">
        <div class="section-title text-center">
            <span>أراء العملاء</span>
            <h2>أراء العملاء عنا <span>فى </span>الخدمة التى نقدمها لهم</h2>
        </div>
        <div class="testimonials-slider owl-carousel owl-theme">
            <div class="testimonials-slider-item feed-back">
                <div class="testimonials-img">
                    <img src="{{asset('frontend/img/testimonials/testimonials1.jpg')}}" alt="Image">
                    <div class="caption bottom-0">
                        <div class="caption-text">
                            <h3>عمر اشرف</h3>
                            <p>مهندس برمجيات</p>
                        </div>
                    </div>
                </div>
                <div class="img-text">
                    <p> هذه المجموعه مميزة هذه المجموعه مميزة هذه المجموعه مميزة هذه المجموعه مميزة هذه المجموعه
                        مميزة هذه المجموعه مميزة هذه المجموعه مميزة هذه المجموعه مميزة هذه المجموعه مميزة هذه
                        المجموعه مميزة هذه المجموعه مميزة </p>
                    <div class="rating">
                        <i class="las la-star"></i>
                        <i class="las la-star"></i>
                        <i class="las la-star"></i>
                        <i class="las la-star"></i>
                        <i class="las la-star"></i>
                    </div>
                </div>
            </div>
            <div class="testimonials-slider-item feed-back">
                <div class="testimonials-img">
                    <img src="{{asset('frontend/img/testimonials/testimonials2.jpg')}}" alt="Image">
                    <div class="caption bottom-0">
                        <div class="caption-text">
                            <h3>عبدالرحمن حسين</h3>
                            <p>خبير إقتصادى</p>
                        </div>
                    </div>
                </div>
                <div class="img-text">
                    <p>هذه المجموعه مميزة هذه المجموعه مميزة هذه المجموعه مميزة هذه المجموعه مميزة هذه المجموعه
                        مميزة هذه المجموعه مميزة هذه المجموعه مميزة هذه المجموعه مميزة هذه المجموعه مميزة </p>
                    <div class="rating">
                        <i class="las la-star"></i>
                        <i class="las la-star"></i>
                        <i class="las la-star"></i>
                        <i class="las la-star"></i>
                        <i class="las la-star"></i>
                    </div>
                </div>
            </div>
            <div class="testimonials-slider-item feed-back">
                <div class="testimonials-img">
                    <img src="{{asset('frontend/img/testimonials/testimonials3.jpg')}}" alt="Image">
                    <div class="caption bottom-0">
                        <div class="caption-text">
                            <h3>محمد الزهار</h3>
                            <p>رجل أعمال</p>
                        </div>
                    </div>
                </div>
                <div class="img-text">
                    <p>هذه المجموعه مميزة هذه المجموعه مميزة هذه المجموعه مميزة هذه المجموعه مميزة هذه المجموعه
                        مميزة هذه المجموعه مميزة هذه المجموعه مميزة هذه المجموعه مميزة هذه المجموعه مميزة هذه
                        المجموعه مميزة </p>
                    <div class="rating">
                        <i class="las la-star"></i>
                        <i class="las la-star"></i>
                        <i class="las la-star"></i>
                        <i class="las la-star"></i>
                        <i class="las la-star"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="attorney-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span><h5> الـشـركـاء </h5></span>
            <h2>أصحاب الخبرات لدينا مستعدون للرد على اسئلتكم واستشاراتكم القانونية</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="attorney-card">
                    <a href="attorney-details.html">
                        <img src="{{asset('frontend/img/attorney/attorney1.jpg')}}" alt="Image">
                    </a>
                    <div class="attorney-card-text">
                        <h3><a href="#">طارق الجابرى</a></h3>
                        <p>محامى بالنقض</p>
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
            <div class="col-lg-4 col-sm-6">
                <div class="attorney-card">
                    <a href="attorney-details.html">
                        <img src="{{asset('frontend/img/attorney/attorney2.jpg')}}" alt="Image">
                    </a>
                    <div class="attorney-card-text">
                        <h3><a href="#">عبدالله رشدى</a></h3>
                        <p>محامى بالاستئناف العالى ومجلس الدولة</p>
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
            <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                <div class="attorney-card">
                    <a href="attorney-details.html">
                        <img src="{{asset('frontend/img/attorney/attorney3.jpg')}}" alt="Image">
                    </a>
                    <div class="attorney-card-text">
                        <h3><a href="#">طارق الجابرى</a></h3>
                        <p>ماجستير القانون العام</p>
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
</div>
<div class="partner-area ptb-100">
    <div class="container">
        <div class="section-title text-center">
            <span><h5>عملائنا</h5></span>
            <h2>نحظى بثقة العديد من العملاء فى مختلف المجالات والقطاعات</h2>
        </div>
        <div class="partner-slider owl-carousel owl-theme">
            <div class="partner-slider-item">
                <a href="#">
                    <img src="{{asset('frontend/img/partner/partner1.png')}}" alt="logo">
                </a>
            </div>
            <div class="partner-slider-item">
                <a href="#">
                    <img src="{{asset('frontend/img/partner/partner2.png')}}" alt="logo">
                </a>
            </div>
            <div class="partner-slider-item">
                <a href="#">
                    <img src="{{asset('frontend/img/partner/partner3.png')}}" alt="logo">
                </a>
            </div>
            <div class="partner-slider-item">
                <a href="#">
                    <img src="{{asset('frontend/img/partner/partner4.png')}}" alt="logo">
                </a>
            </div>
            <div class="partner-slider-item">
                <a href="#">
                    <img src="{{asset('frontend/img/partner/partner5.png')}}" alt="logo">
                </a>
            </div>
        </div>
    </div>
</div>
<div class="blog-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span><h5>أحدث الموضوعات</h5></span>
            <h2>أكثر <span>الموضوعات</span>المرتبطه بالقانون</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="blog-card">
                    <a href="blog-details.html">
                        <img src="{{asset('frontend/img/news%26blog/blog1.jpg')}}" alt="Image">
                    </a>
                    <div class="blog-card-text">
                        <h3><a href="blog-details.html">ما يتعلق بقانون العقارات الجديد</a></h3>
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
                        <p> نبحث لك عن العدالة و ما تريد تحقيقه هذا هو هدفنا نبحث لك عن العدالة و ما تريد تحقيقه هذا
                            هو هدفنا نبحث لك عن العدالة و ما تريد تحقيقه هذا هو هدفنا نبحث لك عن العدالة و ما تريد
                            تحقيقه هذا هو هدفنا</p>
                        <a href="blog-details.html" class="read-more">
                            أقرأ المزيد <i class="las la-angle-double-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="blog-card">
                    <a href="blog-details.html">
                        <img src="{{asset('frontend/img/news%26blog/blog2.jpg')}}" alt="Image">
                    </a>
                    <div class="blog-card-text">
                        <h3><a href="blog-details.html">ما يتعلق بخصوص قانون المعاشات</a></h3>
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
                        <p> نبحث لك عن العدالة و ما تريد تحقيقه هذا هو هدفنا نبحث لك عن العدالة و ما تريد تحقيقه هذا
                            هو هدفنا نبحث لك عن العدالة و ما تريد تحقيقه هذا هو هدفنا نبحث لك عن العدالة و ما تريد
                            تحقيقه هذا هو هدفنا</p>
                        <a href="blog-details.html" class="read-more">
                            تعرف على المزيد<i class="las la-angle-double-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                <div class="blog-card">
                    <a href="blog-details.html">
                        <img src="{{asset('frontend/img/news%26blog/blog3.jpg')}}" alt="Image">
                    </a>
                    <div class="blog-card-text">
                        <h3><a href="blog-details.html">ما يتعلق بخصوص قانون الاحوال</a></h3>
                        <ul>
                            <li>
                                <i class="las la-calendar"></i>
                                24 Sep 2020
                            </li>
                            <li>
                                <i class="las la-user-alt"></i>
                                طارق الجابرى
                            </li>
                        </ul>
                        <p>تعرف على المزيد تعرف على المزيد تعرف على المزيد تعرف على المزيد تعرف على المزيد تعرف على
                            المزيد تعرف على المزيد تعرف على المزيد تعرف على المزيد </p>
                        <a href="blog-details.html" class="read-more">
                            إقرأ المزيد <i class="las la-angle-double-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection