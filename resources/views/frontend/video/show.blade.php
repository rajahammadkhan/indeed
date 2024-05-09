@extends('frontend.layouts.master')
@section('title')
Contact - {{config('app.name')}}
@endsection
@section('description')
{{$seo->meta_description}}
@endsection
@section('keywords')
{{$seo->meta_keywords}}
{{-- Meta Keywords here --}}
@endsection
@section('content')
<div class="container-fluid">
    <div class="row shadow-sm">
        <div class="col-md-12 py-3">
            <h1 class="text-uppercase text-black m-0">{{$video->title}}</h1>
        </div>
    </div>
</div>
<div class="main_videos container my-4">
    <div class="row">
        <div class="col-lg-11 col-md-11 col-sm-12 col-12 my-2 card_pp mx-auto">
            <div class="card p-4 border-0 shadow">
                <video class="" width="100%" controls>
                    <source src=" {{asset('media/videos/'.$video->video)}}" type="video/mp4">
                    <source src="mov_bbb.ogg" type="video/ogg">
                    Your browser does not support HTML video.
                </video>
                <div class="row w-100 mx-auto">
                    <div class="col-6 p-2">
                        <div class="one d-flex me-2 align-items-center">
                            <img style="filter: invert(1);" src="{{asset('frontend/img/Icon awesome-eye.png')}}" class="w-16" alt="eye">
                            <p class="mb-0 mx-1 " style="font-size: 13px;">
                                29.5k
                            </p>
                        </div>

                    </div>
                    <div class="col-6 d-flex justify-content-end align-items-center">
                        {{$LikeWidget('video',$video->id)}}
                    </div>

                </div>

                <div class="row w-100 mx-auto">
                    <div class="col-6 p-2">
                        <div class="custom-dropdown-area UserProfile">
                            <div class="User-avtar d-flex align-items-center">
                                <img style="box-shadow: none; filter: unset" src="{{asset('/images/profile/'.$video['user']->image)}}" class="shadow rounded-circle">
                                <h6 class="user_name px-3 mb-0">
                                    {{$video['user']->name}}
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <h4 class="mt-2">{{$video->title}}</h4>




            </div>
        </div>
        <!-- <div class="col-lg-3 col-md-3 col-sm-12 col-12 my-2 card_pp">
            <div class="card py-4 shadow border-0">

            </div>
        </div> -->
    </div>
</div>

@if($ThemeSettings('option-coupon-comments','on'))
@auth
<section>
    <div class="pd_comment_sec my-4 bg-signature d-flex justify-content-center">
        <div class="row container">
            <div class="col-12  w-100 py-3 text-light fs-5">COMMENTS</div>
        </div>
    </div>
    {{$CommentBox('video',$video->id)}}
    {{$CommentList('video',$video->id)}}
</section>
@endauth
@endif
@guest
<div class="container login-container my-3">

    <div class="row mx-auto">
        <div class="col-md-11 text-center mx-auto px-0">
            <div class="shadow py-md-3 py-3 px-md-4 px-1 d-flex justify-content-center rounded-5">
                <div class="row w-100">
                    <div class="col-lg-2 px-0 col-md-2 col-12 left-content d-flex justify-content-center align-items-center">
                        <div class="img">
                            <img style="height:80px;width: 120px;object-fit: contain;" src="https://eliteblue.net/affiliate/public/frontend/img/discount-space-logo.png" alt="Discount Space">
                        </div>
                    </div>
                    <div class="col-lg-6 px-0 col-md-6 col-12 left-content d-flex justify-content-center align-items-center">
                        <p class="fs-6 mb-0 mx-md-4 mx-2">
                            <a href="https://eliteblue.net/affiliate/public/login">Log in</a> or
                            <a href="https://eliteblue.net/affiliate/public/register">Sign up</a> for a <span class="text-uppercase">Discount Space</span> account to post comment.
                        </p>
                    </div>
                    <div class="right-content col-lg-4 px-0 col-md-4 col-12 d-flex justify-content-center align-items-center mt-md-0 mt-2">
                        <div class="btns d-flex">
                            <div class="login mx-1">
                                <a href="https://eliteblue.net/affiliate/public/login" class="login_btn btn shadow-none border-0 outline-none px-3 py-2 rounded-pill">Log
                                    in</a>
                            </div>
                            <div class="signup">
                                <a href="https://eliteblue.net/affiliate/public/register" class="signup_btn btn shadow-none border-0 outline-none px-3 py-2 rounded-pill">Sign
                                    up</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endguest
<style>
    .fs-14 {
        font-size: 14px;
    }
</style>
@endsection