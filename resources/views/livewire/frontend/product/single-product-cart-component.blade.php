<form class="andro_product-atc-form">
    <div class="qty-outter">
        <a wire:click="addToCart()" class="andro_btn-custom">Add to cart</a>
        <a wire:click="addToWishList()" class="andro_btn-custom">Wishlist</a>
        <div class="qty">
            <span wire:click="decreaseQuantity()" class="qty-subtract"><i class="fa fa-minus"></i></span>
            <input type="text" name="qty" value="{{ $quantity }}">
            <span wire:click="increaseQuantity()" class="qty-add"><i class="fa fa-plus"></i></span>
        </div>
    </div>
</form>