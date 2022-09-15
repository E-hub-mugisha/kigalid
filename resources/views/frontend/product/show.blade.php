@extends('layouts.app')
@section('title', $product->name)
@section('content')
<!-- Subheader Start -->
<div class="andro_subheader pattern-bg primary-bg">
    <div class="container">
        <div class="andro_subheader-inner">
            <h1>Product Details</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Product</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Subheader End -->

<!-- Product Content Start -->
<div class="section">
    <div class="container">

        <div class="row">
            <div class="col-md-5">
                @if($product->media_count)
                <div class="andro_product-single-thumb">
                    @foreach ($product->media as $media)
                    <div class="tab-pane {{ $loop->index == 0 ? 'active' : '' }} show fade" id="pro-details{{ $loop->index }}" role="tabpanel">
                        <div class="easyzoom easyzoom--overlay">
                            @if($product->media)
                            <a href="{{ asset('storage/storage/images/products/' . $media->file_name ) }}">
                                <img src="{{ asset('storage/storage/images/products/' . $media->file_name ) }}" alt="{{ $product->name }}">
                            </a>
                            @else
                            <img src="{{ asset('img/no-img.png' ) }}" alt="{{ $product->name }}">
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Pagination Start -->
                <div class="andro_single-pagination" role=tablist>
                    @foreach ($product->media as $media)
                    <div class="andro_single-pagination-item andro_single-pagination-prev">
                        <a class="{{ $loop->index == 0 ? 'active' : '' }} mr-12" href="#pro-details{{ $loop->index }}" data-toggle="tab" role="tab" aria-selected="true">
                            <div class="andro_single-pagination-thumb">
                                <img style="width: 90px;" src="{{ asset('storage/storage/images/products/' . $media->file_name ) }}" alt="{{ $product->name }}">
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                @else
                <div class="andro_product-single-thumb">
                    <img src="{{ asset('frontend/img/products/9.png' ) }}" alt="{{ $product->name }}">
                </div>
                @endif

            </div>
            <div class="col-md-7">

                <div class="andro_product-single-content">

                    <div class="andro_rating-wrapper">
                        <div class="andro_rating">
                            @if($product->approved_reviews_avg_rating)
                            @for($i = 0; $i < 5; $i++) <span class="stars-active">
                                <i class="{{ round($product->approved_reviews_avg_rating) <= $i ? 'far' : 'fas' }} fa-star"></i>
                                </span>
                                @endfor
                                @else
                                @for($i = 0; $i < 5; $i++) <i class="far fa-star"></i>
                                    @endfor
                                    @endif
                        </div>
                        <span>{{ $product->approved_reviews_count }} Stars</span>
                    </div>

                    <h3>{{ $product->name }}</h3>

                    <div class="andro_product-price">
                        <span>${{ $product->price }}</span>
                    </div>

                    <p class="andro_product-excerpt">{!! $product->description !!}</p>

                    <livewire:frontend.product.single-product-cart-component :product="$product" />
                    <ul class="andro_product-meta">
                        <li>
                            <span>Categories: </span>
                            <div class="andro_product-meta-item">
                                <a href="{{ route('shop.index', $product->category->slug) }}">{{ $product->category->name }}</a>
                            </div>
                        </li>
                        <li>
                            <span>Tags: </span>
                            <div class="andro_product-meta-item">
                                <a href="#">@if($product->tags->count() > 0)
                                    @foreach($product->tags as $tag)
                                    {{ $tag->name }}
                                    <span>{{ $loop->last ? '' : ',' }}</span>
                                    @endforeach
                                    @endif</a>
                            </div>
                        </li>
                    </ul>

                    <div class="andro_product-single-controls andro_post-share">
                        <ul class="andro_sm">
                            <h3>Share: &nbsp;</h3>@include('partials.frontend.shareBtn')
                        </ul>
                    </div>

                </div>

            </div>
        </div>

    </div>
</div>
<!-- Product Content End -->

<!-- Additional Information Start -->
<div class="section pt-0">
    <div class="container">
        <div class="andro_product-additional-info">
            <div class="row">

                <div class="col-lg-4">
                    <ul class="nav andro_sticky-section" id="bordered-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="tab-product-desc-tab" data-toggle="pill" href="#tab-product-desc" role="tab" aria-controls="tab-product-desc" aria-selected="true">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tab-product-reviews-tab" data-toggle="pill" href="#tab-product-reviews" role="tab" aria-controls="tab-product-reviews" aria-selected="false">Reviews ({{ $product->approved_reviews_count }})</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-8">
                    <div class="tab-content" id="bordered-tabContent">
                        <div class="tab-pane fade show active" id="tab-product-desc" role="tabpanel" aria-labelledby="tab-product-desc-tab">
                            <h4>Description</h4>
                            {!! $product->details !!}
                        </div>

                        <div class="tab-pane fade" id="tab-product-reviews" role="tabpanel" aria-labelledby="tab-product-reviews-tab">
                            <h4>Leave a Review</h4>

                            <livewire:frontend.product.single-product-review-component :product="$product" />

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
<!-- Additional Information End -->

<livewire:frontend.product.related-products-component :relatedProducts="$relatedProducts" />

@endsection