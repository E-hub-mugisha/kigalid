<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }} | @yield('title', 'Kigali Drinkies')</title>
    <meta name="description" content="">
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins/ion.rangeSlider.min.css') }}">
    <!-- Icon Fonts -->
    <link rel="stylesheet" href="{{ asset('frontend/fonts/flaticon/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/fonts/font-awesome/css/all.min.css') }}">
    <!-- Automobile Style sheet -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    
    
    <livewire:styles/>
    @yield('style')
</head>
<body>
    @include('partials.frontend.header')   

    

    @yield('content')

    @include('partials.frontend.footer')

    <livewire:scripts/>
    <script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
    <x-livewire-alert::flash />
    <x-livewire-alert::scripts />

    <!-- new js -->

    <script src="{{ asset('frontend/js/plugins/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/waypoint.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/jquery.slimScroll.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/imagesloaded.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/jquery.steps.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/jquery.zoom.min.js') }}"></script>
    <!-- Automobile Scripts -->
    <script src="{{ asset('frontend/js/main-new.js') }}"></script>
    <!-- end  -->

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/jquery-1.12.0.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/js/ajax-mail.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/alert-message.js') }}"></script>
    <script src="{{ url('https://kit.fontawesome.com/8003f9e0e2.js') }}" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            let bloodhound = new Bloodhound({
                datumTokenizer: Bloodhound.tokenizers.whitespace,
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                remote: {
                    url: '{{url("search")}}?productName=%QUERY%', //'/user/find?q=%QUERY%',
                    wildcard: '%QUERY%'
                },
            });

            $('#search').typeahead({
                hint: true,
                highlight: true,
                minLength: 1
            }, {
                name: 'products',
                source: bloodhound,
                limit: 10,
                display: function(data) {
                    return data.name  //Input value to be set when you select a suggestion.
                },
                templates: {
                    empty: [
                        '<div class="list-group-item">There are no matching search results</div>'
                    ],
                    header: [
                        '<div class="list-group search-results-dropdown">'
                    ],
                    suggestion: function(data) {
                        return '<div style="font-weight:normal; width:100%" class="list-group-item"><a href="{{url('product')}}/'+data.slug+'">' + data.name + '</a></div></div>'
                    }
                }
            });
        });
    </script>
    @yield('script')
</body>
</html>
