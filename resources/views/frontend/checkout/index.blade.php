@extends('layouts.app')
@section('title', 'Checkout')
@section('content')
<!-- Subheader Start -->
<div class="andro_subheader pattern-bg primary-bg">
    <div class="container">
        <div class="andro_subheader-inner">
            <h1>Checkout</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Shop</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Subheader End -->
<!-- Checkout Start -->
<div class="section">
    <div class="container">
        <div id="success" style="display: none" class="col-md-8 text-center h3 p-4 bg-success text-light rounded">
            The purchase was completed successfully
        </div>
        <livewire:frontend.checkout.checkout-component />

    </div>
</div>
@endsection







</div>
</div>
<!-- Checkout End -->