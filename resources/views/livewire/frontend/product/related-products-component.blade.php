<!-- Related Products Start -->
<div class="section pt-0 andro_related-posts">
    <div class="container">

        <div class="section-title flex-title">
            <h4 class="title">Related Products</h4>
            <div class="andro_arrows">
                <i class="fa fa-arrow-left slick-arrow slider-prev"></i>
                <i class="fa fa-arrow-right slick-arrow slider-next"></i>
            </div>
        </div>

        <div class="andro_related-posts-slider">

            @forelse($relatedProducts as $product)
            <!-- Product Start -->
            <div class="andro_product andro_product-has-controls andro_product-has-buttons">
                <div class="andro_product-badge andro_badge-featured">
                    <i class="fa fa-star"></i>
                    <span>Featured</span>
                </div>
                <div class="andro_product-thumb">
                    <a href="product-single.html">
                        @if($product->firstMedia)
                        <img src="{{ asset('storage/storage/images/products/' . $product->firstMedia->file_name ) }}" alt="{{ $product->name }}">
                        @else
                        <img src="{{ asset('img/no-img.png' ) }}" alt="">
                        @endif
                    </a>
                </div>
                <div class="andro_product-body">
                    <h5 class="andro_product-title"> <a href="{{route('product.show', $product->slug)}}">{{ $product->name }}</a> </h5>
                    <div class="andro_product-price">
                        <span>${{ $product->price }}</span>
                    </div>
                    <div class="andro_rating-wrapper">
                        <div class="andro_rating">
                            <i class="fa fa-star active"></i>
                            <i class="fa fa-star active"></i>
                            <i class="fa fa-star active"></i>
                            <i class="fa fa-star active"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <span>4 Stars</span>
                    </div>
                </div>
                <div class="andro_product-footer">
                    <div class="andro_product-buttons">
                        <a wire:click.prevent="addToCart('{{ $product->id }}')" class="andro_btn-custom primary">Add To Cart</a>
                        <a wire:click.prevent="addToWishList('{{ $product->id }}')" class="andro_btn-custom light">Wishlist</a>
                    </div>
                </div>
            </div>
            <!-- Product End -->
            @empty
            <p>No products found.</p>
            @endforelse
        </div>
    </div>
</div>
<!-- Related Products End -->