<header class="header-area">
    <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-6">
                    <ul class="left-info">
                        <li>
                            <a href="https://{{$emails->gmail}}">
                                <i class="las la-envelope"></i>
                                {{$emails->gmail}}
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-whatsapp fa_custom fa-3x"></i>
                                {{$emails->whats_app_num}}
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <ul class="right-info">
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
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li class="heder-btn">
                            <a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">{{ $properties['native'] }}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar-area">
        <div class="atorn-responsive-nav">
            <div class="container">
                <div class="atorn-responsive-menu">
                    <div class="logo">
                        <a href="index.html">
                            <img src="{{asset('frontend/img/toto.jfif')}}" style="width: 100px;" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="atorn-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="index.html">
                        <img src="{{asset('frontend/img/toto.jfif')}}" height="300px" width="100px" alt="logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="{{route('fronts.index')}}" class="nav-link active">
                                    {{__('messages.Home')}} 
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('fronts.aboutus')}}" class="nav-link">
                                    {{__('messages.About Us')}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    {{__('messages.Fast Pages')}}  <i class="las la-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{route('fronts.team')}}" class="nav-link">{{__('messages.Our Team')}}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('fronts.gallery')}}" class="nav-link">{{__('messages.Gallery')}}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('fronts.questions')}}" class="nav-link">{{__('messages.Famous Questions')}}</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('fronts.services')}}" class="nav-link">
                                    {{__('messages.Services')}} 
                                </a>
                            </li>
                            
                            <li class="nav-item">
                                <a href="{{route('fronts.blog')}}" class="nav-link">
                                    {{__('messages.Blog')}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('fronts.contactus')}}" class="nav-link">{{__('messages.Contact Us')}}</a>
                            </li>
{{--                             
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="nav-link search-box">
                                    <i class="las la-search"></i>
                                </a>
                            </li> --}}
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<div class="search-overlay">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="search-overlay-layer"></div>
            <div class="search-overlay-layer"></div>
            <div class="search-overlay-layer"></div>
            <div class="search-overlay-close">
                <span class="search-overlay-close-line"></span>
                <span class="search-overlay-close-line"></span>
            </div>
            <div class="search-overlay-form">
                <form>
                    <input type="text" class="input-search" placeholder="Search here...">
                    <button type="submit"><i class='las la-search'></i></button>
                </form>
            </div>
        </div>
    </div>
</div>