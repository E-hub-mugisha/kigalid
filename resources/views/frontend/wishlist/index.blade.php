@extends('layouts.app')
@section('title', 'Wishlist')
@section('content')

<!-- Subheader Start -->
<div class="andro_subheader pattern-bg primary-bg">
    <div class="container">
        <div class="andro_subheader-inner">
            <h1>Wishlist</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Shop</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Subheader End -->

<!-- Wishlist Start -->
<div class="section">
    <div class="container">

        <!-- Wishlist Table Start -->
        <table class="andro_responsive-table">
            <thead>
                <tr>
                    <th class="remove-item"></th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach(Cart::instance('wishlist')->content() as $item)
                <livewire:frontend.wishlist.wishlist-item-component :item="$item->rowId" :key="$item->rowId" />
                @endforeach
                <livewire:frontend.message.wishlist-not-found-component />

            </tbody>
        </table>
        <!-- Wishlist Table End -->

        <!-- Share Wishlist Start -->
        <div class="text-center">
            <h5>Share Your Wishlist</h5>
            <div class="andro_post-share">
                <ul class="andro_sm justify-content-center">
                    <li> <a href="#" data-toggle="tooltip" title="" data-original-title="Share on Facebook"> <i class="fab fa-facebook-f"></i> </a> </li>
                    <li> <a href="#" data-toggle="tooltip" title="" data-original-title="Share on Twitter"> <i class="fab fa-twitter"></i> </a> </li>
                    <li> <a href="#" data-toggle="tooltip" title="" data-original-title="Share on Linkedin"> <i class="fab fa-linkedin-in"></i> </a> </li>
                </ul>
            </div>
        </div>
        <!-- Share Wishlist End -->

    </div>
</div>
<!--  Wishlist End -->

@endsection