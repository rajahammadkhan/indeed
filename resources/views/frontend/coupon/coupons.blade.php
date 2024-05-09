@extends('frontend.layouts.master')
@section('title')
All Coupons - {{config('app.name')}}
@endsection
@section('description')
{{--Meta Description here --}}
@endsection
@section('keywords')
{{-- Meta Keywords here --}}
@endsection
@section('content')
<div class="container-fluid">
    <div class="row shadow-sm">
        <div class="col-md-12 py-3">
            <h1 class="text-uppercase text-black m-0">All Coupons</h1>
        </div>
    </div>
</div>
<div class="container sec-2 pt-4">
    <div class="row my-4">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row w-100 mx-auto under">
                <div class="col-lg-3 col-md-12 col-sm-12 mb-3 px-md-3 px-0">
                    <div class=" shadow border-0 rounded-4 my-1 ">
                        {{$Snippet('advanced-filter','coupon')}}
                    </div>
                </div>
                <div class="col-lg-9 col-md-12 col-sm-12">

                    <div class="row aj-data">
                        {{
                             $Coupons(
                             ['limit'=>0,
                                 'paginate'=>false,
                                 'col'=>'2half',
                                 'coupon_type'=>'coupon',]
                                 )
                             }}
                    </div>
                </div>

            </div>
        </div>

        {{-- <div class="col-12 mx-auto text-center my-3">--}}
        {{-- <button class="custom_btn">VIEW ALL</button>--}}
        {{-- </div>--}}
    </div>
</div>

@endsection