<tr x-data="{ show: true }" x-show="show">
    <td class="remove">
        <a wire:click.prevent="removeFromCart('{{ $cartItem->rowId }}')" x-on:click="show = false" style="cursor: pointer;">
            <button type="button" class="close-btn close-danger remove-from-cart">
                <span></span>
                <span></span>
            </button>
        </a>

    </td>
    <td data-title="Product">
        <div class="andro_cart-product-wrapper">
            @if($cartItem->model->firstMedia)
            <img src="{{ asset('storage/storage/images/products/' . $cartItem->model->firstMedia->file_name) }}" alt="{{ $cartItem->model->name }}" width="70" />
            @else
            <img src="{{ asset('img/no-img.png') }}" alt="{{ $cartItem->model->name }}" width="70" />
            @endif
            <div class="andro_cart-product-body">
                <h6> <a href="{{ route('product.show', $cartItem->model->slug) }}">{{ $cartItem->model->name }}</a> </h6>
                <p>{{ $itemQuantity }} Product</p>
            </div>
        </div>
    </td>
    <td data-title="Price"> <strong>${{ $cartItem->model->price }}</strong> </td>
    <td class="quantity" data-title="Quantity">
        <span class="text-uppercase text-gray headings-font-family"></span>
        <a wire:click.prevent="decreaseQuantity('{{ $cartItem->rowId }}')" style="cursor: pointer;">
            <i class="fas fa-caret-left"></i>
        </a>
        <span class="text-center">{{ $itemQuantity }}</span>
        <a wire:click.prevent="increaseQuantity('{{ $cartItem->rowId }}', '{{ $cartItem->id }}')" style="cursor: pointer;">
            <i class="fas fa-caret-right"></i>
        </a>
    </td>
    <td data-title="Total"> <strong>${{ ($cartItem->model->price) * ($cartItem->qty) }}</strong> </td>
</tr>