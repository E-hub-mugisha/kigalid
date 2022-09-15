    @if($cartTotal != 0)
    <div class="section-title">
        <h4 class="title">Cart Total</h4>
    </div>

    <table>
        <tbody>
            <tr>
                <th>Subtotal</th>
                <td>${{ $cartSubTotal }}</td>
            </tr>
            @if(session()->has('coupon'))
            <tr>
                Discount
                <th>({{ getNumbersOfCart()->get('discountCode') }})</th>
                <td>${{ $cartDiscount }}</td>
            </tr>
            @endif
            @if(session()->has('shipping'))
            <tr>
                Shipping
                <th>({{ getNumbersOfCart()->get('shippingCode') }})</th>
                <td>${{ $cartShipping }}</td>
            </tr>
            @endif
            <tr>
                <th>Tax (5%)</th>
                <td>${{ $cartTax }}</td>
            </tr>
            <tr>
                <th>Total</th>
                <td> <b>${{ $cartTotal }}</b> </td>
            </tr>
        </tbody>
    </table>

    <!-- Coupon Code Start -->
    <div class="form-group mb-0">
        <div class="input-group mb-0">
            @if(!session()->has('coupon'))
            <form wire:submit.prevent="applyDiscount()">
                <input type="text" wire:model="couponCode" class="form-control input-text" placeholder="Coupon code" required>
                <div class="input-group-append">
                    <button class="andro_btn-custom shadow-none" type="submit">Apply</button>
                </div>
            </form>
            @endif
            @if(session()->has('coupon'))
            <input type="button" wire:click.prevent="removeCoupon()" class="button" value="Remove coupon">
            @endif
        </div>
    </div>
    @endif
    <!-- Coupon Code End -->
    <livewire:frontend.button.proceed-checkout-button-component />