<div>

    <div class="andro_shop-global">
        <p>Showing <b>{{ $products->firstItem() }}- {{ $products->lastItem() }}</b> of <b>{{ $products->total() }}</b> products </p>
        <div wire:ignore class="shop-selector">
            <select wire:model="sortingBy" class="form-control" name="orderby">
                <option value="default">Default sorting</option>
                <option value="popularity">Popularity</option>
                <option value="low-high">Price: Low to High</option>
                <option value="high-low">Price: High to Low</option>
            </select>
        </div>
    </div>
    <div class="row masonry">
        @forelse($products as $product)
        <div class="col-lg-4 col-xl-3 col-md-6 masonry-item">
            <div class="product-fruit-wrapper mb-60 andro_product andro_product-minimal andro_product-has-controls andro_product-has-buttons">
                <div class="andro_product-badge andro_badge-featured">
                    @if($product->tags->count() > 0)
                    @foreach($product->tags as $tag)
                    <a href="{{ route('shop.tag', $tag->slug) }}">
                        <i class="fa fa-tag"></i>{{ $tag->name }}
                        <span>{{ $loop->last ? '' : ',' }}</span>
                    </a>
                    @endforeach
                    @endif

                </div>
                <div class="product-fruit-img andro_product-thumb">
                    @if($product->firstMedia)
                    <img src="{{ asset('storage/storage/images/products/' . $product->firstMedia->file_name ) }}" alt="{{ $product->name }}">
                    @else
                    <img src="{{ asset('img/cartwhite.png' ) }}" alt="">
                    @endif
                </div>
                <div class="product-fruit-content text-center">
                    <h4 class="andro_product-title">
                        <a href="{{route('product.show', $product->slug)}}">{{ $product->name }}</a>
                    </h4>
                </div>
                <div class="andro_product-footer">
                    <div class="andro_product-price">
                        <span>${{ $product->price }}</span>
                    </div>
                    <div class="product-furit-action andro_product-buttons">
                        <a wire:click.prevent="addToCart('{{ $product->id }}')" class="andro_btn-custom furit-animate-left" title="Add To Cart">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                        <a wire:click.prevent="addToWishList('{{ $product->id }}')" class="andro_btn-custom furit-animate-right" title="Wishlist">
                            <i class="fas fa-heart"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <p>No products found.</p>
        @endforelse
    </div>
    <div class="d-flex justify-content-center">
        {!! $products->appends(request()->all())->onEachSide(1)->links() !!}
    </div>
</div>