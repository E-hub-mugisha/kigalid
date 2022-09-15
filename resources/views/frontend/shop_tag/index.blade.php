@extends('layouts.app')
@section('title', 'Shop '.$slug)
@section('content')

<!-- Subheader Start -->
<div class="andro_subheader pattern-bg primary-bg">
    <div class="container">
        <div class="andro_subheader-inner">
            <h1>@yield('title')</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Shop</a></li>
                    <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Subheader End -->
<!-- Products Start -->
<div class="section">
    <div class="andro_section-fw">

        <div class="row">
            <div class="col-lg-9">
                <livewire:frontend.product.shop-products-tag-component :slug="$slug" />
            </div>
            <!-- Sidebar Start -->
            <div class="col-lg-3">
                @include('partials.frontend.shop.sidebar')
            </div>

        </div>
    </div>
</div>
@endsection