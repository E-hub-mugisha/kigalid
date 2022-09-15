<tr x-data="{ show: true }" x-show="show">
    <td class="remove">
        <a class="close-btn close-danger remove-from-cart" wire:click.prevent="removeFromWishlist('{{ $wishlistItem->rowId }}')" x-on:click="show = false" style="cursor: pointer;">
            <span></span>
            <span></span>
        </a>
    </td>
    <td data-title="Product">
        <div class="andro_cart-product-wrapper">
            @if($wishlistItem->model->firstMedia)
            <a href="{{ route('product.show', $wishlistItem->model->slug) }}">
                <img src="{{ asset('storage/images/products/' . $wishlistItem->model->firstMedia->file_name) }}" alt="{{ $wishlistItem->model->name }}" width="70">
            </a>
            @else
            <img src="{{ asset('img/no-img.png') }}" alt="{{ $wishlistItem->model->name }}" width="70" />
            @endif
            <div class="andro_cart-product-body">
                <h6> <a href="{{ route('product.show', $wishlistItem->model->slug) }}">{{ $wishlistItem->model->name }}</a> </h6>

            </div>
        </div>
    </td>
    <td data-title="Availability">
        <span class="andro_product-stock instock">In Stock</span>
    </td>
    <td data-title="Total"> <strong>${{ $wishlistItem->model->price }}</strong> </td>
    <td data-title="Actions">
        <a wire:click="moveToCart('{{ $wishlistItem->rowId }}')" class="andro_btn-custom btn-sm shadow-none" x-on:click="show = false" style="cursor: pointer;" class="text-primary">
            move to cart
        </a>
    </td>
</tr>