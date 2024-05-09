@if($ThemeSettings('option-coupon-view','list'))
<?php
$image = isset($coupons['media'][0]->image) ? $coupons['media'][0]->image : 'galleryimage.png';
?>

<div class="col-12 p-0">
    <div class="main-list-card shadow">
        <div class="my-sm-2 my-1 px-3 py-md-3 px-md-3 py-2">
            <div class="row align-items-center">
                <div class="col-lg-2 col-md-2 col-3 cpnDcImg d-flex align-items-center justify-content-center">
                    <div class="listViewBanner p-2">
                        <!-- <div class="bannerImgTop position-relative">
                            <img src="{{asset('frontend/img/listViewBannerTop.png')}}" class="w-100" alt="">
                            <div class="bannerTxt text-center">
                                <h3 class="mb-0 fw-bold text-white">
                                    $15
                                </h3>
                                <p class="mb-0 text-uppercase text-white">
                                    off
                                </p>
                            </div>
                        </div>
                        <div class="bannerImgTop position-relative">
                            <img src="{{asset('frontend/img/listViewBannerBottom.png')}}" class="w-100" alt="">
                            <div class="bannerTxt text-center">
                                <p class="mb-0 text-uppercase text-white">
                                    coupons
                                </p>
                            </div>
                        </div> -->

                        <img src="{{asset('images/media/'.$image)}}" class="w-100 h-100" alt="{{$coupons['basic']->title.' '.$coupons['basic']->coupon_type.rand(10,120000)}} ">
                    </div>
                </div>
                <div class=" col-lg-10 col-md-10 col-9">
                    <div class="row">
                        <div class="col-lg-9 col-md-8">

                            <div class="card-txt h-100 d-flex justify-content-between flex-column">
                                <a class="text-black" href="{{url('single-coupons',$coupons['basic']->slug)}}">
                                    <h4 class="heading">
                                        {{ $coupons['basic']->title }}
                                    </h4>
                                </a>
                                <p class="para text-muted d-flex align-items-center">
                                    <strike class="text-black"> ${{$coupons['basic']->regular_price}}</strike>
                                    @if($coupons['basic']->discount != null )
                                    <span class="tag mb-0 text-white rounded-pill mx-2">

                                        -{{$coupons['basic']->discount}}%

                                    </span>
                                    @endif
                                    <!-- @if($coupons['basic']->discount != null ) -->
                                    <span class="priz fs-5">
                                        ${{$coupons['basic']->compare_price}}
                                        <!-- -{{$coupons['basic']->discount}}% -->
                                    </span>
                                    <!-- @endif -->
                                </p>
                                <div class="sec d-flex justify-content-between align-items-baseline">
                                    <p class="para mb-0">

                                        <!-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="36" height="36" viewBox="0 0 7410 3900">
                                            <rect width="7410" height="3900" fill="#b22234" />
                                            <path d="M0,450H7410m0,600H0m0,600H7410m0,600H0m0,600H7410m0,600H0" stroke="#fff" stroke-width="300" />
                                            <rect width="2964" height="2100" fill="#3c3b6e" />
                                            <g fill="#fff">
                                                <g id="s18">
                                                    <g id="s9">
                                                        <g id="s5">
                                                            <g id="s4">
                                                                <path id="s" d="M247,90 317.534230,307.082039 132.873218,172.917961H361.126782L176.465770,307.082039z" />
                                                                <use xlink:href="#s" y="420" />
                                                                <use xlink:href="#s" y="840" />
                                                                <use xlink:href="#s" y="1260" />
                                                            </g>
                                                            <use xlink:href="#s" y="1680" />
                                                        </g>
                                                        <use xlink:href="#s4" x="247" y="210" />
                                                    </g>
                                                    <use xlink:href="#s9" x="494" />
                                                </g>
                                                <use xlink:href="#s18" x="988" />
                                                <use xlink:href="#s9" x="1976" />
                                                <use xlink:href="#s5" x="2470" />
                                            </g>
                                        </svg> -->
                                        <img width="20px" src="{{asset('flags/'.strtolower($SelectedCountry()->iso).'.svg')}}" alt="{{$SelectedCountry()->iso}}">

                                        <span class="mx-2 "> {{$coupons['category']->title}}</span> Fullfilled By
                                        Amazon
                                    </p>
                                    <!-- <div class="btns">
                                                        <button class="main-btn rounded-pill">Promo
                                                            Code</button>
                                                        <button class="main-btn-outlined rounded-pill">Great
                                                            Value</button>
                                                    </div> -->
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-4 col-6 mt-2 ms-auto d-flex">
                            <div class=" d-flex cpnDcImg w-100">
                                <div class="getCode w-100 position-relative d-flex justify-content-center align-items-center">
                                    <a href="#" class="   getCodeCouponTopLayer position-absolute" data-coupon-code="Hello">
                                        <img src="{{asset('frontend/img/getcode.png')}}" alt="getCoupon" class="w-100 position-relative" style="z-index: 8;">
                                        <!-- <div class="getCodeCouponTopLayerTxt text-uppercase text-white fw-bold text-dark" style="z-index: 10;">
                                            Get Code</div> -->
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endif