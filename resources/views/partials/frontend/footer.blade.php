<!-- Footer Start -->
<footer class="andro_footer light-overlay light-overlay-2 bg-cover bg-center" style="background-image:url(frontend/img/footer.jpg)">
    <!-- Top Footer -->
    <div class="container">
        <div class="andro_footer-top">
            <div class="andro_footer-logo">
                <img src="{{ asset('frontend/img/logo.png') }}" alt="logo">
            </div>
            <div class="andro_footer-buttons">
                <a href="#"> <img src="{{ asset('frontend/img/android.png') }}" alt="download it on the app store"></a>
                <a href="#"> <img src="{{ asset('frontend/img/ios.png') }}" alt="download it on the app store"></a>
            </div>
        </div>
    </div>
    <!-- Middle Footer -->
    <div class="andro_footer-middle">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 footer-widget">
                    <h5 class="widget-title">Information</h5>
                    <ul>
                        <li> <a href="{{route('home')}}">Home</a> </li>
                        <li> <a href="{{route('wishlist.index')}}">Wishlist</a> </li>
                        <li> <a href="{{route('shop.index')}}">Shop</a> </li>
                        <li> <a href="{{ route('contact.index') }}">Contact Us</a> </li>
                    </ul>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 footer-widget">
                    <h5 class="widget-title">Top Categories</h5>
                    <ul>
                    @foreach($shop_categories_menu as $global_category)
                        <li> <a href="{{ route('shop.index', $global_category->slug) }}">{{ $global_category->name }}</a> </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 footer-widget">
                    <h5 class="widget-title">Others</h5>
                    <ul>
                        <li> <a href="{{route('checkout.index')}}">Checkout</a> </li>
                        <li> <a href="{{ route('cart.index') }}">Cart</a> </li>
                        <li> <a href="{{route('shop.index')}}">Product</a> </li>
                    </ul>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 footer-widget">
                    <h5 class="widget-title">Social Media</h5>
                    <ul class="social-media">
                        <li> <a href="#" class="facebook"> <i class="fab fa-facebook-f"></i> </a> </li>
                        <li> <a href="#" class="pinterest"> <i class="fab fa-pinterest-p"></i> </a> </li>
                        <li> <a href="#" class="google"> <i class="fab fa-google"></i> </a> </li>
                        <li> <a href="#" class="twitter"> <i class="fab fa-twitter"></i> </a> </li>
                    </ul>
                    <div class="andro_footer-offer">
                        <p>Signup and get exclusive offers and coupon codes</p>
                        @guest
                        @if (route('register'))
                        <a href="{{ route('register') }}" class="andro_btn-custom btn-sm shadow-none">Sign Up</a>
                        @endif
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom -->
    <div class="andro_footer-bottom">
        <div class="container">
            <ul>
                <li> <a href="{{ route('page.show', 'privacy-policy') }}">Privacy Policy</a> </li>
                <li> <a href="{{ route('page.show', 'privacy-policy') }}">Refund Policy</a> </li>
                <li> <a href="{{ route('page.show', 'privacy-policy') }}">Cookie Policy</a> </li>
                <li> <a href="{{ route('page.show', 'privacy-policy') }}">Terms & Conditions</a> </li>
            </ul>
            <div class="andro_footer-copyright">
                <p> Copyright © <script>
                        document.write(new Date().getFullYear())
                    </script> <a href="#">Kigali Drinkies</a> All Rights Reserved. </p>
                <a href="#" class="andro_back-to-top">Back to top <i class="fas fa-chevron-up"></i> </a>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->