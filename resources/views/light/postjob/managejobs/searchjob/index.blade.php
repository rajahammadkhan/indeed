@extends('light.layouts.app')
@section('title')
    Search Job - {{config('app.dashboard')}}
@endsection
@section('content')
@include('light/layouts/sidebar')
<section class="content">

<section class="findJob py-5">
    <div class="container">
{{--        <form action="./searchedJob.html">--}}
            <div class="row">
                <div class="col-12 my-3">
                    <h1 class="res">
                        Search <a href="#"> 23,326</a> Jobs
                    </h1>
                </div>
                <div class="col-md-5 my-md-0 my-2 col-12">
                    <label for="">Keyword / Job Title / Job Ref</label>
                    <input type="text" class="form-control" placeholder="e.g. Warehouse operative">
                </div>
                <div class="col-md-5 my-md-0 my-2 col-12">
                    <label for="">Location</label>
                    <input type="text" class="form-control" placeholder="e.g. town or postcode">
                </div>
                <div class="col-md-2 my-md-0 my-2 col-12">
                    <label class="choose py-0">Distance </label>
                    <div class="dropdownMain form-control">
                        <div class="select">
                            <span>up to 15 miles</span>
                            <i class="fa fa-chevron-left"></i>
                        </div>
                        <input type="hidden" name="gender">
                        <ul class="dropdownMain-menu">
                            <li id="open">up to 50 miles</li>
                            <li id="paused">up to 100 miles</li>
                            <li id="closed">up to 500 miles</li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 mt-md-3">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 my-md-0 my-2 col-12">
                            <label for="">Salary Min</label>
                            <input type="text" class="form-control mb-0" placeholder="e.g. $30,000">
                        </div>
                        <div class="col-lg-2 col-md-3 my-md-0 my-2 col-12">
                            <label for="">Salary Max</label>
                            <input type="text" class="form-control mb-0" placeholder="e.g. $35,000">
                        </div>
                        <div class="col-lg-3 col-md-3 my-md-0 my-2 col-12">
                            <label class="choose py-0">Salary Type </label>
                            <div class="dropdownMain form-control">
                                <div class="select">
                                    <span>Per annum</span>
                                    <i class="fa fa-chevron-left"></i>
                                </div>
                                <input type="hidden" name="gender">
                                <ul class="dropdownMain-menu">
                                    <li id="open">Per hour</li>
                                    <li id="paused">Per day</li>
                                    <li id="closed">Per week</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 my-md-0 my-2 col-12">
                            <label class="choose py-0">Posted in the </label>
                            <div class="dropdownMain form-control">
                                <div class="select">
                                    <span>Last 28 days</span>
                                    <i class="fa fa-chevron-left"></i>
                                </div>
                                <input type="hidden" name="gender">
                                <ul class="dropdownMain-menu">
                                    <li id="open">last hour</li>
                                    <li id="paused">last day</li>
                                    <li id="closed">last week</li>
                                </ul>
                            </div>
                        </div>
                        <div
                                class="col-lg-2 d-flex justify-content-center align-items-end col-md-3 my-md-0 my-3 col-12">
                            <a href="{{url('searched_job')}}"><button type="submit" class="w-100 btn btn-primary">Find Jobs</button></a>
                        </div>
                    </div>
                </div>
            </div>
{{--        </form>--}}
    </div>
</section>

<section class="popularJobs my-4">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="para">
                    Popular industries
                </p>
            </div>
            <div class="col-12 my-3">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-xs-6 col-12 my-3">
                        <img src="{{asset('indeed/images/card1.jpg')}}" alt="industries Images" class="indusImg">
                        <div class="contnt my-3">
                            <a href="#" class=" fs-4">Admin & Administration</a>
                            <a href="#" class=" fs-5">All Admin & Administration Job Titles</a>
                            <a href="#" class=" fs-5">By location</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6 col-12 my-3">
                        <img src="{{asset('indeed/images/card2.jpg')}}" alt="industries Images" class="indusImg">
                        <div class="contnt my-3">
                            <a href="#" class=" fs-4">Cleaning</a>
                            <a href="#" class=" fs-5">All Cleaning Job Titles</a>
                            <a href="#" class=" fs-5">By location</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6 col-12 my-3">
                        <img src="{{asset('indeed/images/card3.jpg')}}" alt="industries Images" class="indusImg">
                        <div class="contnt my-3">
                            <a href="#" class=" fs-4">Construction</a>
                            <a href="#" class=" fs-5">All Construction Job Titles</a>
                            <a href="#" class=" fs-5">By location</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6 col-12 my-3">
                        <img src="{{asset('indeed/images/card4.jpg')}}" alt="industries Images" class="indusImg">
                        <div class="contnt my-3">
                            <a href="#" class=" fs-4">Customer Services</a>
                            <a href="#" class=" fs-5">All Customer Services Job Titles</a>
                            <a href="#" class=" fs-5">By location</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6 col-12 my-3">
                        <img src="{{asset('indeed/images/card5.jpg')}}" alt="industries Images" class="indusImg">
                        <div class="contnt my-3">
                            <a href="#" class=" fs-4">Education</a>
                            <a href="#" class=" fs-5">All Education Job Titles</a>
                            <a href="#" class=" fs-5">By location</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6 col-12 my-3">
                        <img src="{{asset('indeed/images/card6.jpg')}}" alt="industries Images" class="indusImg">
                        <div class="contnt my-3">
                            <a href="#" class=" fs-4">Environmental</a>
                            <a href="#" class=" fs-5">All Environmental Job Titles</a>
                            <a href="#" class=" fs-5">By location</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6 col-12 my-3">
                        <img src="{{asset('indeed/images/card7.jpg')}}" alt="industries Images" class="indusImg">
                        <div class="contnt my-3">
                            <a href="#" class=" fs-4">Hospitality</a>
                            <a href="#" class=" fs-5">All Hospitality Job Titles</a>
                            <a href="#" class=" fs-5">By location</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6 col-12 my-3">
                        <img src="{{asset('indeed/images/card8.jpg')}}" alt="industries Images" class="indusImg">
                        <div class="contnt my-3">
                            <a href="#" class=" fs-4">IT</a>
                            <a href="#" class=" fs-5">All IT Job Titles</a>
                            <a href="#" class=" fs-5">By location</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6 col-12 my-3">
                        <img src="{{asset('indeed/images/card9.jpg')}}" alt="industries Images" class="indusImg">
                        <div class="contnt my-3">
                            <a href="#" class=" fs-4">IT</a>
                            <a href="#" class=" fs-5">All IT Job Titles</a>
                            <a href="#" class=" fs-5">By location</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6 col-12 my-3">
                        <img src="{{asset('indeed/images/card10.jpg')}}" alt="industries Images" class="indusImg">
                        <div class="contnt my-3">
                            <a href="#" class=" fs-4">Marketing</a>
                            <a href="#" class=" fs-5">All Marketing Job Titles</a>
                            <a href="#" class=" fs-5">By location</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6 col-12 my-3">
                        <img src="{{asset('indeed/images/card11.jpg')}}" alt="industries Images" class="indusImg">
                        <div class="contnt my-3">
                            <a href="#" class=" fs-4">Retail</a>
                            <a href="#" class=" fs-5">All Retail Job Titles</a>
                            <a href="#" class=" fs-5">By location</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6 col-12 my-3">
                        <img src="{{asset('indeed/images/card12.jpg')}}" alt="industries Images" class="indusImg">
                        <div class="contnt my-3">
                            <a href="#" class=" fs-4">Sales</a>
                            <a href="#" class=" fs-5">All Sales Job Titles</a>
                            <a href="#" class=" fs-5">By location</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</section>
@endsection