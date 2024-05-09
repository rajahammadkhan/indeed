@extends('frontend.layouts.master')
@section('title')
{{$blog->title}} - {{config('app.name')}}
@endsection
@section('description')
{{--Meta Description here --}}
@endsection
@section('keywords')
{{-- Meta Keywords here --}}
@endsection
@section('content')



<div class="container main-blog">
    <div class="row my-5 blog-list-view">
        <div class="col-md-12">
            <h2 class=" fs-2 main-heading fw-sm-bold text-start text-truncate">
                {{$blog->title}}
            </h2>
            <p class="fs-6 text-muted fw-sm-bold">

                By {{$user->name}} Last Updated On {{date('M, d-Y', strtotime($blog->updated_at))}}
            </p>
            <p class="fs-6 text-signature fw-sm-bold">
                {{count($comments)}} Comments
            </p>
            <div class="fs-6 fw-sm- text-start para long-description-box">
                {!! $blog->long_description !!}
            </div>
        </div>

    </div>


</div>
</div>


@if($ThemeSettings('option-coupon-comments','on'))
@auth
<section>
    <div class="pd_comment_sec my-4 bg-black d-flex justify-content-center">
        <div class="row container">
            <div class="col-12  w-100 py-3 text-light fs-5">COMMENTS</div>
        </div>
    </div>
    <div class="p-md-5 p-2">
        {{$CommentBox('blog',$blog->id)}}
        {{$CommentList('blog',$blog->id)}}
    </div>

</section>
@endauth
@endif


@guest
<div class="container login-container my-3">
    <div class="row mx-auto">
        <div class="col-12 text-center px-0">
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
@endsection
<style>
    .long-description-box img {
        width: 100%;
        height: auto;
        object-fit: contain;
    }

    .long-description-box a {
        color: #000000 !important;
    }
</style>