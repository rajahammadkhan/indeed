@extends('light.layouts.app')
@section('title')
    500 - {{config('app.dashboard')}}
@endsection
@section('content')
<div class="limiter">
    <div class="container-login100 page-background">
        <div class="wrap-login100">
            <form class="login100-form validate-form">
					<span class="login100-form-logo">
						<img alt="" src="../../assets/images/loading.png">
					</span>
                <span class="form404-title p-b-34 p-t-27">
						Error 500
					</span>
                <div class="text-center">
                    <p class="txt1 p-b-20">
                        Oops, Something went wrong. Please try after some times.
                    </p>
                </div>
                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Go to home page
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