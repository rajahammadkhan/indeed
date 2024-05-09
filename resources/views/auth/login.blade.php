{{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@include(''); --}}
@extends('frontend.layouts.master')
@section('title')
    Login - {{ config('app.dashboard') }}
@endsection
@section('content') 

    @include('frontend/logincss')
    <div class="limiter">
        <div class="container-login100 page-background">
            <div class="wrap-login100">
                <form class="login100-form validate-form"  method="POST" action="{{ route('login') }}">
                    @csrf
                    <span class="login100-form-logo">
                        <img alt="" src="{{ asset('management/images/loading.png') }}">
                    </span>
                    <span class="login100-form-title p-b-34 p-t-27">
                        Log in
                    </span>
                    <div class="wrap-input100 validate-input" data-validate="Enter username">
                        <input class="input100 @error('email') is-invalid @enderror" required type="email" name="email"  autocomplete="off"
                            value="{{ old('email') }}" placeholder="Username">
                        <i class="material-icons focus-input1001">Person</i>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100 has-val @error('password') is-invalid @enderror" required type="password"  autocomplete="off"
                            name="password" placeholder="Password">
                        <i class="material-icons focus-input1001">lock</i>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="contact100-form-checkbox">
                        <div class="form-check d-flex justify-content-center">
                            <label class="form-check-label ps-0">
                                <input class="form-check-input" type="checkbox" value=""> Remember me
                                <span class="form-check-sign ps-0">
                                    <span class="check"></span>
                                </span>
                            </label>
                        </div>
                    </div>
                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Login
                        </button>
                    </div>
                    <div class="text-center p-t-50">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="ForgetPwd txt1" value="Login">Forget
                                Password?</a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

{{-- <div class="container login-container">
    <div class="row justify-content-center h-100 align-items-center">
        <div class="col-md-6 login-form-2" style="background: #6a3fb8 !important;">
            <h4 class="text-white text-center text-uppercase fw-bold py-4">Login your account</h4>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <input id="email" type="email" placeholder="Enter your enter"
                        class="form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" required autocomplete="email" autocomplete="off">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <input id="password" type="password" placeholder="Enter your password"
                        class="form-control @error('password') is-invalid @enderror" name="password" required
                        autocomplete="current-password" autocomplete="off">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div>
                        <div class="form-group mt-4">
                            <input type="submit" class="btn btn-success" value="Login" />
                        </div>
                        <div class="form-group">
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="ForgetPwd" value="Login">Forget
                                    Password?</a>
                            @endif
                        </div>
            </form>
        </div>
    </div>
</div> --}}
{{-- <div class="container h-100 py-5"> --}}
{{--    <div class="row justify-content-center h-100 align-items-center"> --}}
{{--        <div class="col-md-5"> --}}
{{--            <div class="card shadow border-0"> --}}
{{--                <div class="card-header">{{ __('Login') }}</div> --}}

{{--                <div class="card-body"> --}}
{{--                    <h4 class="text-black text-center text-uppercase fw-bold py-4">Login  your account</h4> --}}
{{--                    <form method="POST" action="{{ route('login') }}"> --}}
{{--                        @csrf --}}

{{--                        <div class="row mb-3"> --}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> --}}

{{--                            <div class="col-md-12"> --}}
{{--                                <input id="email" type="email" placeholder="Enter your enter" class="py-3 form-control text-dark rounded-pill @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"  autocomplete="off"> --}}

{{--                                @error('email') --}}
{{--                                    <span class="invalid-feedback" role="alert"> --}}
{{--                                        <strong>{{ $message }}</strong> --}}
{{--                                    </span> --}}
{{--                                @enderror --}}
{{--                            </div> --}}
{{--                        </div> --}}

{{--                        <div class="row mb-3"> --}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> --}}

{{--                            <div class="col-md-12"> --}}
{{--                                <input id="password" type="password" placeholder="Enter your password" class="py-3 text-dark rounded-pill form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" autocomplete="off"> --}}

{{--                                @error('password') --}}
{{--                                    <span class="invalid-feedback" role="alert"> --}}
{{--                                        <strong>{{ $message }}</strong> --}}
{{--                                    </span> --}}
{{--                                @enderror --}}
{{--                            </div> --}}
{{--                        </div> --}}

{{--                        <div class="row my-3"> --}}
{{--                            <div class="col-md-6 d-flex align-items-center"> --}}
{{--                                <div class="form-check"> --}}
{{--                                    <label class="d-flex"> --}}
{{--                                        <input type="checkbox" class="filled-in"  name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} > --}}
{{--                                        <span>{{ __('Remember Me') }}</span> --}}
{{--                                    </label> --}}

{{--                                </div> --}}
{{--                            </div> --}}
{{--                            <div class="col-md-6 d-flex align-items-center"> --}}
{{--                                @if (Route::has('password.request')) --}}
{{--                                    <a class="btn btn-link text-decoration-none text-black " href="{{ route('password.request') }}"> --}}
{{--                                        {{ __('Forgot Your Password?') }} --}}
{{--                                    </a> --}}
{{--                                @endif --}}
{{--                            </div> --}}
{{--                        </div> --}}

{{--                        <div class="row mb-0"> --}}
{{--                            <div class="col-md=12 "> --}}
{{--                                <button type="submit" class="btn read-more-cta bg-signature px-4 py-2 fs-5 text-uppercase my-4 w-100 " > --}}
{{--                                    {{ __('Login') }} --}}
{{--                                </button> --}}


{{--                            </div> --}}
{{--                        </div> --}}
{{--                    </form> --}}
{{--                </div> --}}
{{--            </div> --}}
{{--        </div> --}}
{{--    </div> --}}
{{-- </div> --}}
