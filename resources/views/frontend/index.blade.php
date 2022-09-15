@extends('layouts.app')
@section('title', 'Homepage')
@section('content')

@include('partials.frontend.sliders')

<!-- Category Megamenu & Banner start -->
<div class="section">
    <div class="container">
        <div class="row">
            <!-- Menu Start -->
            <div class="col-lg-3">
                <div class="andro_category-mm">
                    <div class="andro_category-mm-header">
                        <h6> <i class="fas fa-th-large"></i> Categories</h6>
                    </div>
                    <div class="andro_category-mm-body">
                        <ul>
                            <!-- Level 1 -->
                            @foreach($shop_categories_menu as $global_category)
                            <li class="andro_category-mm-item andro_category-mm-item-has-children">
                                <a href="{{ route('shop.index', $global_category->slug) }}"> {{ $global_category->name }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Menu End -->
            <!-- Banner Start -->
            <div class="col-lg-9">
                <div class="andro_flex-menu">
                    <ul>
                        <li class="menu-item"> <a href="#">Products Production</a> </li>
                    </ul>
                </div>
                <div  class=" banner-1">
    <div class="andro_banner-slider">
    @foreach($shop_categories_menu as $global_category)
    <div class="andro_icon-block bg-cover dark-overlay dark-overlay-2 bg-center" style="background-image: url(storage/storage/images/categories/{{ $global_category->cover }} )">
                    <i class="text-white flaticon-wine-bottles-1"></i>
                    <a href="{{ route('shop.index', $global_category->slug) }}"><h5 class="text-white"> {{ $global_category->name }}</h5></a>
                    <!-- <p class="text-white">Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
                </div>
        @endforeach

    </div>
</div>
            </div>
            <!-- Banner End -->
        </div>
    </div>
</div>
<!-- Category Megamenu & Banner end -->

<!-- Icons Start -->
<div class="section section-padding pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="andro_icon-block bg-cover dark-overlay dark-overlay-2 bg-center" style="background-image: url(frontend/img/icons/1.jpg)">
                    <i class="text-white flaticon-wine-bottles-1"></i>
                    <h5 class="text-white">Guaranteed Rose Wine</h5>
                    <p class="text-white">Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="andro_icon-block bg-cover dark-overlay dark-overlay-2 bg-center" style="background-image: url(frontend/img/icons/2.jpg)">
                    <i class="text-white flaticon-wine-bottles-2"></i>
                    <h5 class="text-white">Daily Winnery</h5>
                    <p class="text-white">Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="andro_icon-block bg-cover dark-overlay dark-overlay-2 bg-center" style="background-image: url(frontend/img/icons/3.jpg)">
                    <i class="text-white flaticon-wine-bottles-3"></i>
                    <h5 class="text-white">Cheap & Wine Service</h5>
                    <p class="text-white">Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Icons End -->
<!-- Products Start -->
<div class="section pt-0 andro_fresh-arrivals">
    <div class="container">
        <div class="section-title flex-title">
            <h4 class="title">Beers</h4>
            <div class="andro_arrows">
                <i class="fa fa-arrow-left slick-arrow slider-prev"></i>
                <i class="fa fa-arrow-right slick-arrow slider-next"></i>
            </div>
        </div>
        <div class="andro_fresh-arrivals-slider">
        <livewire:frontend.product.top-trending-products />
        </div>
    </div>
</div>
<!-- Products End -->
<!-- Products Start -->
<div class="section pt-0 andro_fresh-arrivals">
    <div class="container">
        <div class="section-title flex-title">
            <h4 class="title">WINES</h4>
            <div class="andro_arrows">
                <i class="fa fa-arrow-left slick-arrow slider-prev"></i>
                <i class="fa fa-arrow-right slick-arrow slider-next"></i>
            </div>
        </div>
        <div class="andro_fresh-arrivals-slider">
            <livewire:frontend.product.wines-product />
        </div>
    </div>
</div>
<!-- Products End -->
<!-- Featured Products Start -->
<div class="section pt-0 andro_fresh-arrivals">
    <div class="container">
        <div class="section-title flex-title">
            <h4 class="title">fresh drinks</h4>
            <div class="andro_arrows">
                <i class="fa fa-arrow-left slick-arrow slider-prev"></i>
                <i class="fa fa-arrow-right slick-arrow slider-next"></i>
            </div>
        </div>
        <div class="andro_fresh-arrivals-slider">
            <livewire:frontend.product.fresh-drinks />
        </div>
    </div>
</div>
<!-- Featured Products End -->
<!-- Call to action Start -->
<div class="section pt-0">
    <div class="container">
        <div class="andro_cta-notice secondary-bg pattern-bg">
            <div class="andro_cta-notice-inner">
                <h3 class="text-white">Buy Today and Get 20% Off</h3>
                <p class="text-white">Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.</p>
                <a href="#" class="andro_btn-custom light">Shop Now</a>
            </div>
        </div>
    </div>
</div>
<!-- Call to action End -->
<!-- Top Picks Start -->

<!-- Top Picks End -->
<!-- Blog Posts Start -->

<!-- Blog Posts End -->
<!-- Instagram Start -->
<div class="row no-gutters">
    <div class="col-lg-4 secondary-bg pattern-bg">
        <div class="andro_instagram">
            <h3 class="text-white">Follow Us On Instagram</h3>
            <a href="#" class="andro_btn-custom light">Follow Us</a>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="row no-gutters">
            <div class="col-lg-4 col-md-4 col-sm-4 col-6 p-0">
                <a href="#" class="andro_ig-item">
                    <img src="{{ asset('frontend/img/ig/1.jpg') }}" alt="ig">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-6 p-0">
                <a href="#" class="andro_ig-item">
                    <img src="{{ asset('frontend/img/ig/2.jpg') }}" alt="ig">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-6 p-0">
                <a href="#" class="andro_ig-item">
                    <img src="{{ asset('frontend/img/ig/3.jpg') }}" alt="ig">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-6 p-0">
                <a href="#" class="andro_ig-item">
                    <img src="{{ asset('frontend/img/ig/4.jpg') }}" alt="ig">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-6 p-0">
                <a href="#" class="andro_ig-item">
                    <img src="{{ asset('frontend/img/ig/5.jpg') }}" alt="ig">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-6 p-0">
                <a href="#" class="andro_ig-item">
                    <img src="{{ asset('frontend/img/ig/6.jpg') }}" alt="ig">
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Instagram End -->
<div class="andro_newsletter-form newsletter-2 primary-bg rounded-0 section">
    <div class="container text-center">
        <h3 class="text-white">Stay Tuned for Updates</h3>
        <p class="text-white">Get exclusive weekly deals with our newsletter subscription</p>
        <form method="post">
            <div class="form-group">
                <input type="email" class="form-control" name="newsletter_email" placeholder="Email Address" value="">
                <button type="submit" class="andro_btn-custom secondary btn-block" name="button">Join Newsletter</button>
            </div>
        </form>
    </div>
</div>
@endsection