@forelse($products as $product)
<!-- Product Start -->
<div class="andro_product andro_product-has-controls andro_product-has-buttons">
    <div class="andro_product-badge andro_badge-featured">
        <i class="fa fa-star"></i>
        <span>Featured</span>
    </div>
    <div class="andro_product-thumb">
        <a href="{{route('product.show', $product->slug)}}">
            @if($product->firstMedia)
            <img src="{{ asset('storage/storage/images/products/' . $product->firstMedia->file_name ) }}" alt="{{ $product->name }}">
            @else
            <img src="{{ asset('img/cartwhite.png' ) }}" alt="">
            @endif
        </a>
    </div>
    <div class="andro_product-body">
        <h5 class="andro_product-title"> <a href="{{route('product.show', $product->slug)}}">{{ $product->name }}</a> </h5>
        <div class="andro_product-price">
            <span>${{ $product->price }}</span>
        </div>
        <p>Cras ultricies ligula sed magna dictum porta. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
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
            <a wire:click.prevent="addToWishList('{{ $product->id }}')" class="andro_btn-custom light">Add To Wishlist</a>
        </div>
    </div>
</div>
<!-- Product End -->
@empty
<p>No products found.</p>
@endforelse