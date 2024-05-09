@extends('frontend.layouts.master')
@section('title')
    Register - {{ config('app.dashboard') }}
@endsection
@section('content')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    {{-- <link href="{{asset('indeed/css/registercss.css')}}" rel="stylesheet" id="bootstrap-css"> --}}
    @include('frontend/logincss')
    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="{{ asset('management/images/loading.png') }}" alt="" />
                <h1><b>4Fresh</b></h1>
                <a href="{{ url('login') }}"><input type="submit" name="" value="Login" /></a><br />
            </div>
            <div class="col-md-9 register-right">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                            aria-controls="home" aria-selected="true">Employee</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">Recruiters</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Apply as a Employee</h3>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <input type="hidden" name="user_type" value="candidate">
                            <div class="row register-form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="name" type="text" placeholder="First Name *"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" required name="last_name" placeholder="Last Name *" />
                                    </div>
                                    <div class="form-group">
                                        <input id="password" type="password" placeholder="Password *"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input id="password-confirm" placeholder="{{ __('Confirm Password') }}" type="password"
                                               class="py-2 text-white bg-transparent form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                    <div class="form-group">
                                        <div class="maxl">
                                            <label class="radio inline">
                                                <input type="radio" name="gender" value="male" checked>
                                                <span> Male </span>
                                            </label>
                                            <label class="radio inline">
                                                <input type="radio" name="gender" value="female">
                                                <span>Female </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="email" type="email" placeholder="Your Email *"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="text" minlength="10" maxlength="10" name="phone_number"
                                            class="form-control" required placeholder="Your Phone *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="security_question" required>
                                            <option class="hidden" selected disabled>Please select your Security Question
                                            </option>
                                            <option name="birthdate">What is your Birthdate?</option>
                                            <option name="phone_no">What is Your old Phone Number</option>
                                            <option name="pet_name">What is your Pet Name?</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="answer" required class="form-control" placeholder="Enter Your Answer *"
                                            value="" />
                                    </div>
                                    <input type="submit" class="btnRegister" value="Register" />
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h3 class="register-heading">Apply as a Recruiters</h3>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="name" type="text" placeholder="First Name *"
                                           class="form-control @error('name') is-invalid @enderror" name="name"
                                           value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="last_name" placeholder="Last Name *"
                                        value="" required />
                                </div>
                                <div class="form-group">
                                    <input id="email" type="email" placeholder="Your Email *"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" maxlength="10" minlength="10" class="form-control"
                                        placeholder="Phone *" name="phone_number" required value="" />
                                </div>


                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="password" type="password" placeholder="Password *"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="new-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <input id="password-confirm" placeholder="{{ __('Confirm Password') }}" type="password"
                                               class="py-2 text-white bg-transparent form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="security_question" required>
                                        <option class="hidden" selected disabled>Please select your Security Question
                                        </option>
                                        <option name="birthdate">What is your Birthdate?</option>
                                        <option name="phone_no">What is Your old Phone Number</option>
                                        <option name="pet_name">What is your Pet Name?</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="answer" required class="form-control" placeholder="`Answer *" value="" />
                                </div>
                                <input type="submit" class="btnRegister" value="Register" />
                            </div>
                        </div></form>
                </div>
            </div>
        </div>
    </div>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
@endsection

{{-- <div class="container h-100 py-5"> --}}
{{-- <div class="row justify-content-center h-100 align-items-center"> --}}
{{-- <div class="col-md-5"> --}}
{{-- <div class="card shadow border-0"> --}}
{{-- <div class="card-header">{{ __('Register') }}</div> --}}
{{-- <h4 class="text-black text-center text-uppercase fw-bold py-4">Create  your account</h4> --}}

{{-- <div class="card-body"> --}}
{{-- <form method="POST" action="{{ route('register') }}"> --}}
{{-- @csrf --}}

{{-- <div class="row mb-3"> --}}
{{-- <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label> --}}

{{-- <div class="col-md-12"> --}}
{{-- <input id="name" type="text" placeholder="Enter Your Name" class="py-3 form-control text-dark rounded-pill @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus> --}}

{{-- @error('name') --}}
{{-- <span class="invalid-feedback" role="alert"> --}}
{{-- <strong>{{ $message }}</strong> --}}
{{-- </span> --}}
{{-- @enderror --}}
{{-- </div> --}}
{{-- </div> --}}

{{-- <div class="row mb-3"> --}}
{{-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> --}}

{{-- <div class="col-md-12"> --}}
{{-- <input id="email" type="email" placeholder="Enter Your Email Address" class="py-3 form-control text-dark rounded-pill @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"> --}}

{{-- @error('email') --}}
{{-- <span class="invalid-feedback" role="alert"> --}}
{{-- <strong>{{ $message }}</strong> --}}
{{-- </span> --}}
{{-- @enderror --}}
{{-- </div> --}}
{{-- </div> --}}

{{-- <div class="row mb-3"> --}}
{{-- <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> --}}

{{-- <div class="col-md-12"> --}}
{{-- <input id="password" type="password"  placeholder="Password"  class="py-3 form-control text-dark rounded-pill @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"> --}}

{{-- @error('password') --}}
{{-- <span class="invalid-feedback" role="alert"> --}}
{{-- <strong>{{ $message }}</strong> --}}
{{-- </span> --}}
{{-- @enderror --}}
{{-- </div> --}}
{{-- </div> --}}

{{-- <div class="row mb-3"> --}}
{{-- <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label> --}}

{{-- <div class="col-md-12"> --}}
{{-- <input id="password-confirm" type="password" placeholder="Confirm Password" class="py-3 form-control text-dark rounded-pill" name="password_confirmation" required autocomplete="new-password"> --}}
{{-- </div> --}}
{{-- </div> --}}

{{-- <div class="row mb-0"> --}}
{{-- <div class="col-md-12"> --}}
{{-- <button type="submit" class="btn read-more-cta px-4 bg-signature py-2 fs-5 text-uppercase my-4 w-100 " > --}}
{{-- {{ __('Register') }} --}}
{{-- </button> --}}
{{-- </div> --}}
{{-- </div> --}}
{{-- </form> --}}
{{-- </div> --}}
{{-- </div> --}}
{{-- </div> --}}
{{-- </div> --}}
{{-- </div> --}}
