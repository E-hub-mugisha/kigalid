@extends('layouts.app')
@section('title', 'Registration')
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

                <h2>Register</h2>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <input id="first_name" type="text" class="form-control form-control-lg" name="first_name" value="{{ old('first_name') }}" placeholder="First Name">
                                @error('first_name')<span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <input id="last_name" type="text" class="form-control form-control-lg" name="last_name" value="{{ old('last_name') }}" placeholder="Last Name">
                                @error('last_name')<span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <input id="username" type="text" class="form-control form-control-lg" name="username" value="{{ old('username') }}" placeholder="Username">
                                @error('username')<span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input id="email" type="email" class="form-control form-control-lg" value="{{ old('email') }}" name="email" placeholder="Enter your Email">
                                @error('email')<span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input id="phone" type="text" class="form-control form-control-lg" name="phone" placeholder="Enter your Phone Number">
                                @error('phone')<span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <input id="password" type="password" class="form-control form-control-lg" name="password" placeholder="Enter your password">
                                @error('password')<span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" placeholder="Confirm Password">
                                @error('password-confirm')<span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="custom-control-label text-small" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="andro_btn-custom">
                            {{ __('Register') }}
                        </button>
                    </div>
                    <div class="form-group">
                        @if(Route::has('login'))
                        Already have an account?<a href="{{ route('login') }}">
                             {{ __('Login here!') }}
                        </a>
                        @endif
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>


@endsection