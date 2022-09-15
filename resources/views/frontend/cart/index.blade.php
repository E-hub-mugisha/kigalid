@extends('layouts.app')
@section('title', 'Cart')
@section('content')
<!-- Subheader Start -->
<div class="andro_subheader pattern-bg primary-bg">
    <div class="container">
        <div class="andro_subheader-inner">
            <h1>Cart</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Shop</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Cart</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Subheader End -->

<!--Cart Start -->
<div class="section">
    <div class="container">
        <div class="row">
            <!-- Cart Table Start -->
            <table class="col-lg-8 andro_responsive-table">
                <thead>
                    <tr>
                        <th class="remove-item"></th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach(Cart::instance('default')->content() as $item)
                    <livewire:frontend.cart.cart-item-component :item="$item->rowId" :key="$item->rowId" />
                    @endforeach
                    <livewire:frontend.message.cart-not-found-component />

                </tbody>
            </table>
            <!-- Cart Table End -->
            <div class="col-lg-4">
            <livewire:frontend.cart.cart-total-component/>
            </div>
        </div>
    </div>
</div>
<!-- Cart End -->

@endsection