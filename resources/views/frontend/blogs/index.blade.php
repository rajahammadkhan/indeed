@extends('frontend.layouts.master')
@section('title')
Blog - {{config('app.name')}}
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
            <h1 class="text-uppercase text-black m-0">Blogs</h1>
        </div>
    </div>
</div>
<div class="container main-blog">
    <div class="row py-5">
        <div class="col-md-8">
            @if($blogs != null)
            @foreach($blogs as $blog)
            {{-- @dd($blog['id'])--}}
            @include('frontend/snippets/blog-list')
            @include('frontend/snippets/blog-grid')

            @endforeach
            @else
            <h5 class="py-5"> No Blogs Found</h5>
            @endif
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-dark border-bottom border-2">
                        TOP CATEGORIES
                    </h2>
                    <div class="row">
                        <div class="col-lg-6 col-md-12 my-2 d-flex">
                            <a href="#" class="topCateg text-center px-4 py-3 w-100 rounded-pill active"><i class="fa-solid me-2 fa-key"></i> Accessories </a>
                        </div>
                        <div class="col-lg-6 col-md-12 my-2 d-flex">
                            <a href="#" class="topCateg text-center px-4 py-3 w-100 rounded-pill"><i class="fa-solid me-2 fa-paintbrush"></i>Beauty </a>
                        </div>
                        <div class="col-lg-6 col-md-12 my-2 d-flex">
                            <a href="#" class="topCateg text-center px-4 py-3 w-100 rounded-pill"><i class="fa-solid me-2 fa-car"></i> Automotive </a>
                        </div>
                        <div class="col-lg-6 col-md-12 my-2 d-flex">
                            <a href="#" class="topCateg text-center px-4 py-3 w-100 rounded-pill"><i class="fa-solid me-2 fa-book"></i>Books / Media </a>
                        </div>
{{--                        <div class="col-12 text-center pt-4">--}}
{{--                            <a href="#" class="topCateg text-center px-4 py-2 w-100 rounded-pill active">View All </a>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection
