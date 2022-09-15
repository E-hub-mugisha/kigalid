<!-- Aside (Right Panel) -->
<aside class="andro_aside andro_aside-right">
    <div class="sidebar">
        <!-- Popular Categories Start -->
        <div class="sidebar-widget widget-categories-icons">
            <h5 class="widget-title">Popular Categories</h5>
            <div class="row">
                @foreach($shop_categories_menu as $global_category)

                <div class="col-lg-6">
                    <div class="andro_icon-block text-center has-link">
                        <a href="{{ route('shop.index', $global_category->slug) }}">
                            <i class="flaticon-wine-2"></i>
                            <h5>{{ $global_category->name }}</h5>
                        </a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
        <!-- Popular Categories End -->
        <!-- Popular Tags Start -->
        <div class="sidebar-widget">
            <h5 class="widget-title">Popular Tags</h5>
            <div class="tagcloud">
                <a href="#">Wine Service </a>
                <a href="#">Bottles</a>
                <a href="#">White Wine Service</a>
                <a href="#">Rose Wine</a>
                <a href="#">Lcoal Wine</a>
                <a href="#">Springs </a>
                <a href="#">Fiber</a>
                <a href="#">Red Wine</a>
                <a href="#">Horns</a>
                <a href="#">New Wine </a>
                <a href="#">Winnery </a>
            </div>
        </div>
        <!-- Popular Tags End -->
    </div>
</aside>
<div class="andro_aside-overlay aside-trigger-right"></div>
<!-- Aside (Mobile Navigation) -->
<aside class="andro_aside andro_aside-left">
    <a class="navbar-brand" href="{{route('home')}}"> <img src="{{asset('frontend/img/logo.png') }}" alt="logo"> </a>
    <ul>
        <li class="menu-item menu-item-has-children">
            <a href="{{route('home')}}">Home</a>
        </li>
        <li class="menu-item menu-item-has-children">
            <a href="javascript:void(0);">Categories</a>
            <ul class="sub-menu">
                @foreach($shop_categories_menu as $global_category)
                <li class="menu-item"> <a href="{{ route('shop.index', $global_category->slug) }}">{{ $global_category->name }}</a> </li>
                @endforeach
            </ul>
        </li>
        <li class="menu-item menu-item-has-children">
            <a href="javascript:void(0);">Pages</a>
            <ul class="sub-menu">
                @include('partials.frontend.pages')
            </ul>
        </li>
        <li class="menu-item menu-item-has-children">
            <a href="{{route('shop.index')}}">Products</a>
        </li>
        <li class="menu-item"> <a href="{{route('contact.index')}}">Contact Us</a> </li>
    </ul>
</aside>
<div class="andro_aside-overlay aside-trigger-left"></div>
<!-- Header Start -->
<header class="andro_header header-1 can-sticky">
    <!-- Topheader Start -->
    <div class="andro_header-top">
        <div class="container">
            <div class="andro_header-top-inner">
                <ul class="andro_header-top-sm andro_sm">
                    <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a> </li>
                    <li> <a href="#"> <i class="fab fa-twitter"></i> </a> </li>
                    <li> <a href="#"> <i class="fab fa-linkedin-in"></i> </a> </li>
                    <li> <a href="#"> <i class="fab fa-youtube"></i> </a> </li>
                </ul>
                <ul class="andro_header-top-links">
                    <li class="menu-item">
                        <!-- notification -->
                    </li>
                    @guest
                    <li class="menu-item"><a href="{{route('login')}}">Login</a></li>
                    <li class="menu-item"><a href="{{route('register')}}">Register</a></li>
                    @else
                    <li class="menu-item menu-item-has-children">
                        <a href="javascript:void(0);"> <span class="andro_current-currency-text">My Account</span> </a>
                        <ul class="sub-menu sub-menu-left">
                            @role('admin')
                            <li>
                                <a href="{{ route('admin.index') }}" style="color: #578a01;">
                                    Administration
                                </a>
                                @endrole
                                @auth
                            <li><a href="{{ route('user.dashboard') }}" style="color: #578a01;">Dashboard</a>
                            </li>
                            @endauth
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="color: #578a01;">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </div>
    <!-- Topheader End -->
    <!-- Middle Header Start -->
    <div class="andro_header-middle">
        <div class="container">
            <nav class="navbar">
                <!-- Logo -->
                <a class="navbar-brand" href="{{route('home')}}"> <img src="{{asset('frontend/img/logo.png') }}" alt="logo"> </a>
                <!-- Search Form -->
                <div class="andro_search-adv">
                    <form method="post">
                        <div class="andro_search-adv-cats">
                            <span>All Categories</span>
                        </div>
                        <div class="andro_search-adv-input">
                            <input id="search" type="text" class="form-control" value="{{ old('keyword', request()->keyword) }}" placeholder="Search for product...">
                            <button type="submit" name="button"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
                <div class="andro_header-controls">
                    <ul class="andro_header-controls-inner">
                        <livewire:frontend.header.wishlist-component />
                        <livewire:frontend.header.cart-component />

                    </ul>
                    <!-- Toggler -->
                    <div class="aside-toggler aside-trigger-left">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Middle Header End -->
    <!-- Bottom Header Start -->
    <div class="andro_header-bottom">
        <div class="container">
            <div class="andro_header-bottom-inner">
                <!-- Menu -->
                <ul class="navbar-nav">
                    <li class="menu-item menu-item-has-children">
                        <a href="{{route('home')}}">Home</a>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="javascript:void(0);">Categories</a>
                        <ul class="sub-menu">
                            @foreach($shop_categories_menu as $global_category)
                            <li class="menu-item"> <a href="{{ route('shop.index', $global_category->slug) }}">{{ $global_category->name }}</a> </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children mega-menu-wrapper">
                        <a href="{{route('shop.index')}}">Products</a>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="#">Pages</a>
                        <ul class="sub-menu">
                            @include('partials.frontend.pages')
                        </ul>
                    </li>

                    <li class="menu-item"> <a href="{{route('contact.index')}}">Contact Us</a> </li>
                </ul>
                <!-- Side navigation toggle -->
                <div class="aside-toggler aside-trigger-right desktop-toggler">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
    <!-- Bottom Header End -->
</header>
<!-- Header End -->