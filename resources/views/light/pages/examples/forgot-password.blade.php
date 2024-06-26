@extends('light.layouts.app')
@section('title')
    Forget Password - {{config('app.dashboard')}}
@endsection
@section('content')
<div class="limiter">
    <div class="container-login100 page-background">
        <div class="wrap-login100">
            <form class="login100-form validate-form">
					<span class="login100-form-logo">
						<img alt="" src="../../assets/images/loading.png">
					</span>
                <span class="login100-form-title p-b-34 p-t-27">
						Reset Password
					</span>
                <div class="text-center">
                    <p class="txt1 p-b-20">
                        Enter your registered email address.
                    </p>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Enter email">
                    <input class="input100" type="text" name="username" placeholder="Email">
                    <i class="material-icons focus-input1001">email</i>
                </div>
                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Reset My Password
                    </button>
                </div>
                <div class="text-center p-t-50">
                    <a class="txt1" href="login2.html">
                        Login?
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection