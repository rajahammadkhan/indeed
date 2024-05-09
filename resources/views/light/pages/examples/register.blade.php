@extends('light.layouts.app')
@section('title')
    Register - {{config('app.dashboard')}}
@endsection
@section('content')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form">
					<span class="login100-form-title p-b-45">
						Register
					</span>

                <div class="wrap-input100 validate-input" data-validate="Username is required">
                    <input class="input100" type="text" name="username">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Username</span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter valid email address">
                    <input class="input100" type="text" name="email">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Email</span>
                </div>


                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="pass">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Password</span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="conpass">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Confirm Password</span>
                </div>

                <div class="flex-sb-m w-full p-t-15 p-b-20">

                    <div>
                        <a href="login.html" class="txt1">
                            Already Registered?
                        </a>
                    </div>
                </div>


                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Register
                    </button>
                </div>

                <div class="text-center p-t-45 p-b-20">
						<span class="txt2">
							or sign up using
						</span>
                </div>

                <div class="login100-form-social flex-c-m">
                    <a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    <a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
            </form>

            <div class="login100-more" style="background-image: url('../../assets/images/pages/bg-02.png');">
            </div>
        </div>
    </div>
@endsection