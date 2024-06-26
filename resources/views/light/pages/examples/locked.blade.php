@extends('light.layouts.app')
@section('title')
    Locked - {{config('app.dashboard')}}
@endsection
@section('content')
<div class="limiter">
    <div class="container-login100 page-background">
        <div class="wrap-login100">
            <form class="login100-form validate-form">
                <div class="login100-form-logo">
                    <div class="image">
                        <img src="../../assets/images/usrbig.jpg" alt="User">
                    </div>
                </div>
                <span class="login100-form-title p-b-34 p-t-27">
						Emily Smith
					</span>
                <div class="text-center">
                    <p class="txt1 p-b-20">
                        Locked
                    </p>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" type="password" name="pass" placeholder="Password">
                    <i class="material-icons focus-input1001">lock</i>
                </div>
                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Log In
                    </button>
                </div>
                <div class="text-center p-t-50">
                    <a class="txt1" href="login2.html">
                        Need Help?
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

