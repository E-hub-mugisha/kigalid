@extends('layouts.app')
@section('title', 'Login')
@section('content')

<div class="section">
    <div class="imgs-wrapper">
        <img src="{{ asset('frontend/img/products/1.png') }}" alt="veg" class="d-none d-lg-block">
        <img src="{{ asset('frontend/img/products/14.png') }}" alt="veg" class="d-none d-lg-block">
    </div>
    <div class="container">
        <div class="andro_auth-wrapper">

            <div class="andro_auth-description bg-cover bg-center dark-overlay dark-overlay-2" style="background-image: url('{{ asset('frontend/img/auth.jpg') }}')">
                <div class="andro_auth-description-inner">
                    <i class="flaticon-wine-bottle-2"></i>
                    <h2>Welcome Back!</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
            <div class="andro_auth-form">

                <h2>Log in</h2>

                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" value="{{ old('username') }}" placeholder="Username">
                        @error('username')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <input id="pass" type="password" class="form-control" name="password" placeholder="password">
                        @error('password')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <label class="show">Show password</label>
                    <label class="hide"></label>
                    
                    <div class="form-group mt-2">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                    <button type="submit" class="andro_btn-custom primary">Login</button>

                    <div class="andro_auth-seperator">
                        <span>OR</span>
                    </div>

                    <div class="andro_social-login">
                        <a href="{{ route('social_login', 'facebook') }}" class="andro_social-login-btn facebook">
                            <i class="fab fa-facebook-f"></i> Continue with Facebook
                        </a>
                        {{-- <a href="{{ route('social_login', 'twitter') }}" class="btn btn-block" style="background-color: #1DA1F2; color: #FFFFFF">--}}
                        {{-- Login with Twitter--}}
                        {{-- </a>--}}
                        {{-- <a href="{{ route('social_login', 'google') }}" class="btn btn-block" style="border-color: #1877F2; color: black">--}}
                        {{-- Login with Google--}}
                        {{-- </a>--}}
                    </div>
                    <div class="form-group row mb-0">
                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                    </div>

                    <p>Don't have an account? <a href="{{route('register') }}">Create One</a> </p>

                </form>
            </div>

        </div>
    </div>
</div>

@endsection

@section('script')
<script>
    $('.show').click(function() {
        $(this).text('')
        $(':password').attr('type', 'text')
        $('.hide').text('Hide password')
    });

    $('.hide').click(function() {
        $(this).text('');
        $('#pass').attr('type', 'password')
        $('.show').text('Show password')
    });
</script>

{{-- <script>--}}
{{-- let vm = new Vue({--}}
{{-- el: "#login-form",--}}
{{-- data: {--}}
{{-- fieldType: "password",--}}
{{-- },--}}
{{-- methods: {--}}
{{-- switchField() {--}}
{{-- this.fieldType = this.fieldType === "password" ? "text" : "password";--}}
{{-- }--}}
{{-- },--}}
{{-- });--}}
{{-- </script>--}}
@endsection



