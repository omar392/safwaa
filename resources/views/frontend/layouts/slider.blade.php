<div class="hero-slider owl-carousel owl-theme">
    @foreach ($sliders as $slider)
    <div class="hero-slider-item item-bg1" style="background-image:url({{asset('upload/slider_images/'.$slider->image)}})">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="slider-content">
                        <h1>الصفوة || Al-Safwa</h1>
                        <p>{{$slider->slider}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
   @endforeach
</div>