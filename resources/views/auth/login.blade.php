@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div> -->
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100  p-b-20">

            <form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
                <!-- <span class="login100-form-title p-b-70">
                {{ __('Login') }}
                </span> -->
                <span class="login100-form-avatar">
                    <img src="{{ asset('assets/login/images/icons/1.png') }}" alt="AVATAR">
                </span>
                @csrf

                    <!-- <form method="POST" action="{{ route('login') }}"> -->
                        

                        <!-- <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->

                        <div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter Email Address">
                            <input class="input100 @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus type="email" name="email">
                            <span class="focus-input100" data-placeholder="Email"></span>
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
                            <input class="input100 @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="current-password">
                            <span class="focus-input100" data-placeholder="Password"></span>
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>


                        <!-- <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->

                        <!-- <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> -->

                        <!-- <div class="row mb-0"> -->

                        <div class="container-login100-form-btn">
                            <button type="submit" class="login100-form-btn">
                            {{ __('Login') }}
                            </button>
                        </div>
                    <!-- <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button> -->

                        @if (Route::has('password.request'))
                            <!-- <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a> -->
                        
                            <ul class="login-more p-t-50">
                                <li class="m-b-8">
                                    <span class="txt1">
                                        Forgot
                                    </span>

                                    <a href="{{ route('password.request') }}" class="txt2">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                </li>
                        @endif

                            <!-- <li>
                                <span class="txt1">
                                    Don’t have an account?
                                </span>

                                <a href="#" class="txt2">
                                    Sign up
                                </a>
                            </li>-->
                            </ul> 
                            <!-- </div> -->
                        <!-- </div> -->
                    <!-- </form> -->
                </form>
        </div>
    </div>
</div>
                
            <!-- </div>
        </div>
    </div>
</div> -->
           


	<div id="dropDownSelect1"></div>
@endsection

