<div class="main-slider-sec">
    <div class="main-slider">
        @foreach(\App\Models\Slider::all() as $sliders)
        @foreach(\App\Models\Coupon::all() as $coupons)
        <div class="slide-item">
            <img src="{{ asset('storage/storage/images/sliders/' . $sliders->cover) }}" class="img-fluid" alt="">
            {{ $coupons->code }}
        </div>
        @endforeach
        @endforeach
        <!-- <div class="slide-item">
            <img src="{{ asset('frontend/img/h2-banner-2.jpg') }}" class="img-fluid" alt="">
        </div>
        <div class="slide-item">
            <img src="{{ asset('frontend/img/h2-banner-3.jpg') }}" class="img-fluid" alt="">
        </div> -->
    </div>
</div>