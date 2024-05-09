@extends('frontend.layouts.master')
@section('title')
    Home - ONTHE VOUCH
@endsection
@section('description')
    {{--Meta Description here --}}
@endsection
@section('keywords')
    {{--   Meta Keywords here --}}
@endsection
@section('content')


    <div class="container md-shadow rounded-4 my-5 ">
        <div class="row p-3">
            @include('frontend.dashboard.userSidebar')
{{--@dd($data)--}}
            <div class="col-md-9">

                <div class="row">

                @foreach($data as $reaction)
                        <div class="col-md-4">
                        <div class="product main p-3 product-item shadow position-relative active" data-type="coupon"
                             data-id="MQ==">


                            <div class="pd-img text-center">
{{--                                @foreach($media as $row)--}}

                                @if($reaction['media']->image != null)

                                    <img
                                        src="{{asset('images/media'.'/'.$reaction['media']->image)}}"
                                        class="w-75" alt="">

                                    @else
                                        <img
                                                src="{{asset('images/noimg.jpg')}}"
                                                class="w-75" alt=" {{$reaction->title}}">
                                    @endif
                            </div>


                            <div class="pd-content py-3">
                                <p class="fs-6 fw-bold text-purp">
                                        {{$reaction['title']}}
                                </p>
                                <p class="price mb-0">
                            <span class="old_price pe-2 text-muted">
                            <strike>
                            ${{$reaction['compare_price']}}
                            </strike>
                            </span>
                                    <span class="fs-6 fw-bold text-purp">

                            ${{$reaction['regular_price']}}
                            </span>
                                                            </p>
                            </div>
                            <div class="pd-foot">
                                <p class="expiry mb-0 text-muted fw-sm-bold">
                                    Listing Expires in
                                    <span class="text-danger fw-bold">
                                       @php
                                           $start_date = date('Y-m-d');
                                           $expiry_date = date('Y-m-d' ,strtotime($reaction['expiry_date']));
                                           $diff =Carbon\Carbon::parse($start_date)->diffInDays($expiry_date);
                                       @endphp
                                        {{$diff}}
                                    </span>
                                </p>

                            </div>
                            <div class="overlay-pd text-right p-3">
                                <div class="row d-flex align-items-center">
                                    <div class="col-8">
                                        <a href="" class="btn btn-light">Get Coupon</a>
                                    </div>
                                    <div class="col-4 d-flex justify-content-end">
                                        {{$WishList('coupon',$reaction['id'])}}
                                    </div>
                                </div>
                                <div class="row d-flex align-items-center h-100 justify-content-center">
                                    <div class="col-12 text-center">
                                        <a href="https://eliteblue.net/Clients/viys/coupon/public/coupons/hiyato-mens-belt-leather-belt-for-business-and-leisure-adjustable-belt-comfortable-and-practical-design"
                                           class="btn text-white">View Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach

                </div>


            </div>

        </div>
    </div>

@endsection
