{{--@dd($coupon->title)--}}
<div class="sec_product container my-4">
    <div class="row">
        <div class="col-lg-5 col-md-4 col-sm-12 mb-md-4 mb-0">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
            {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">--}}
            {{-- <script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>--}}


            <div class="main">
                @if($media->isNOtEmpty())
                <div class="sliderpdMain slider-for" data-aos="fade-up">
                    @foreach($media as $image)
                    <div class="">
                        <a href="{{asset('images/media/'.$image->image)}}" data-fancybox="group">
                            <img class="w-100" src="{{asset('images/media/'.$image->image)}}" alt="{{$coupon->slug}}">
                        </a>
                    </div>
                    @endforeach
                </div>
                <div class="sliderpdBot slider-nav mt-3 mb-1" data-aos="fade-up">
                    @foreach($media as $image)
                    <div>
                        <img class="w-100" src="{{asset('images/media/'.$image->image)}}" alt="{{$coupon->slug}}">
                    </div>
                    @endforeach
                </div>
            </div>


            <script>
                $(function() {
                    $('.slider-for').slick({
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: true,
                        fade: true,
                        infinite: false,
                        asNavFor: '.slider-nav'
                    });
                    $('.slider-nav').slick({
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        asNavFor: '.slider-for',
                        dots: false,
                        infinite: false,
                        focusOnSelect: true
                    });

                    $('a[data-slide]').click(function(e) {
                        e.preventDefault();
                        var slideno = $(this).data('slide');
                        $('.slider-nav').slick('slickGoTo', slideno - 1);
                    });
                })
            </script>

            @else
            <img src="{{asset('images/media/galleryimage.png')}}" alt="{{$coupon->slug}}" class="w-100 px-4">

            @endif
        </div>

        {{-- <div class="col-lg-4 col-md-4 col-sm-12 ">--}}
        {{-- <img src="{{asset('images/media/'.$media[0]->image)}}" alt="" class="w-100 px-4">--}}
        {{-- </div>--}}
        <div class="col-lg-7 col-md-8 col-sm-12">
            <p class="expiry my-2 fw-normal text-muted fs-6">
                Listing Expires in
                <span class="text-danger fw-bold">
                    @php
                    $start_date = date('Y-m-d');
                    $expiry_date = date('Y-m-d' ,strtotime($coupon->expiry_date));
                    $diff =Carbon\Carbon::parse($start_date)->diffInDays($expiry_date);
                    @endphp
                    {{$diff}} Days
                </span>
            </p>
            <p class=" fs-2 fw-sm-bold">
                {{$coupon->title}}
            </p>

            <div class="row">
                <div class="col-md-12 pd-foot">
                    <div class="sec d-md-flex">
                        <div class="pe-2 py-2 my-2 fw-normal text-muted"><img width="30px" src="{{$country}}" alt="{{$country}}"> {{$category->title}}</div>
                        <div class="shadow mx-2 my-2 px-2 py-2 text-muted rounded-pill fw-normal">{{$coupon->fullfilled == 1 ? 'Fullfilled By ' : '' }} {{$store->title}}</div>
                    </div>
                </div>
                <div class="col-12 pd-foot">
                    <div class="pd-content pt-3">
                        <p class="price mb-0 d-flex align-items-center" style="gap:10px;">
                            <span class="old_price fs-5 fw-normal text-muted">
                                <strike>
                                    ${{$coupon->compare_price}}
                                </strike>
                            </span>
                            <span class="badge bg-signature px-3 py-2 rounded-pill {{$coupon->discount == null ? 'd-none' : ''}}">
                                -{{$coupon->discount}}%
                            </span>
                            <span class="fs-4 fw-bold text-signature">
                                $ {{$coupon->regular_price}}
                            </span>
                        </p>
                    </div>
                </div>
                {{-- <div class="col-md-6">--}}
                {{-- <div class="shadow px-4 py-2 text-purp rounded-pill fw-sm-bold">{{$coupon->discount}}% off
            </div>--}}
            {{-- </div>--}}
        </div>
        <div class="row align-items-center mt-3">
            <div class="col-md-8 col-12 d-flex align-items-center">
                @if($coupon->coupon_type == 'coupon')
                <!-- <a href="{{url('get-code',base64_encode($coupon->id))}}" class="rounded-0 bg-signature py-3 w-50 d-block text-center fw-sm-bold text-light fs-5 border-0" data-toggle="tooltip" data-placement="bottom" title="Vouch It">GET
                    COUPON</a> -->

                <div class="getCode d-flex justify-content-center align-items-center" style="width: 164px;">
                    <a href="{{url('get-code',base64_encode($coupon->id))}}" data-toggle="tooltip" data-placement="bottom" title="Vouch It">
                        <img src="{{asset('frontend/img/getcoupon.png')}}" alt="getCoupon" class="w-100 position-relative" style="z-index: 8;">
                    </a>
                </div>
                @else
                <!-- <a href="{{$coupon->affiliate_url}}" class="rounded-0 bg-signature py-3 w-50 d-block text-center fw-sm-bold text-light fs-5 border-0" data-toggle="tooltip" data-placement="bottom" title="Vouch It">GET
                    Deal</a>  -->

                <div class="getCode d-flex justify-content-center align-items-center" style="width: 164px;">
                    <a href="{{$coupon->affiliate_url}}" class="" title="Vouch It" data-toggle="tooltip" data-placement="bottom" data-coupon-code="Hello">
                        <img src="{{asset('frontend/img/getcoupon.png')}}" alt="getCoupon" class="w-100 position-relative" style="z-index: 8;">
                    </a>
                </div>
                @endif
                {{$Snippet('social-sharing')}}

                {{-- <div class="social_profile ms-3 my-0">--}}
                {{-- <ul>--}}
                {{-- <li><a target="_blank" href="https://www.instagram.com//?https://eliteblue.net/Clients/viys/coupon/"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>--}}
                {{-- <li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{url()->current()}}"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>--}}
                {{-- <li><a target="_blank" href="https://api.whatsapp.com/?{{url()->current()}}"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>--}}
                {{-- </ul>--}}
                {{-- </div>--}}
            </div>

            <div class="col-md-4 col-12 d-inline-flex justify-content-end">
                {{$WishList('coupon',$coupon->id)}}
                {{$LikeWidget('coupon',$coupon->id)}}

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <hr>
                <p class="fs-6 text-muted fw-normal">
                    The descriptions and pictures of products on <span class="fw-bold text-capitalize">{{config('app.name')}}</span> are for reference only. Please fully view the product listing on
                    {{$store->title}} before purchasing.
                </p>
                <hr>
                <p class="fs-6 mb-0 fw-bold">
                    About the Product
                </p>
                <div class="fs-6 text-muted fw-normal long-description my-3">
                    {!! $coupon->long_description !!}
                </div>
                <div class="sec d-flex">
                    <a class="readmore shadow mb-3 px-5 fw-sm-bold py-2 text-dark rounded-pill">
                        Read More
                    </a>
                </div>
            </div>
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
        {{$CommentBox('coupon',$coupon->id)}}
        {{$CommentList('coupon',$coupon->id)}}
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

<script>
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
    $('.readmore').on('click', function() {

        $('.long-description').toggleClass('show');

        if ($('.long-description').hasClass('show')) {
            console.log($('.long-description').hasClass('show'));
            $('.readmore').text('Read Less');
        } else {
            $('.readmore').text('Read More');
        }

        // var text = $(this).text();
        // $(this).text(text == "More" ? "Less" : "More");
    })
</script>