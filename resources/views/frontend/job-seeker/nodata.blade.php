@extends('frontend.layouts.master')
@section('title')
    Searched Job - {{ config('app.dashboard') }}
@endsection
@section('content')
    {{-- @include('light/layouts/sidebar') --}}

    <section class="bg-main">
        <section class="findJobSearched bg-white py-5 findJob rec">
            <div class="container">
                <form action="{{url('searched-job')}}">
                    <div class="row">
                        <div class="col-md-5 my-md-0 my-2 px-2 col-12">
                            <label for="">Keywords</label>
                            <input type="text" class="form-control mb-0" placeholder="" value="software developer">
                        </div>
                        <div class="col-md-5 my-md-0 my-3 mt-0 px-2 col-12">
                            <label for="">Location</label>
                            <input type="text" class="form-control mb-0" placeholder="" value="Bristol (County)">
                        </div>
                        <div class="col-md-2 px-2 col-12 mt-auto">
                            <button type="submit" class="w-100 btn btn-primary mb-auto">Find Jobs</button>
                        </div>
                    </div>
                </form>
                <div class="row mt-3">
                    <div class="col-md-2 my-md-0 my-2 px-2 col-12">
                        <div class="dropdownMain form-control activeFilter h-100">
                            <div class="select d-flex justify-content-between align-items-center h-100">
                                <span>up to 15 miles</span>
                                <button class="removeBtn border-0">
                                    <i class="text-white fa fa-times"></i>
                                </button>
                            </div>
                            <input type="hidden" name="gender">
                            <ul class="dropdownMain-menu">
                                <li id="open">up to 50 miles</li>
                                <li id="paused">up to 100 miles</li>
                                <li id="closed">up to 500 miles</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 my-md-0 my-2 px-2 col-12">
                        <div class="unactiveSearched w-100 h-100 d-flex justify-content-between align-items-center">
                            <label class="m-0 py-0">Distance </label>
                            <button class="removeBtn border-0">
                                <i class="text-white fa fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-2 my-md-0 my-2 px-2 col-12">
                        <div class="dropdownMain form-control activeFilter h-100">
                            <div class="select d-flex justify-content-between align-items-center h-100">
                                <span>up to $50000</span>
                                <button class="removeBtn border-0">
                                    <i class="text-white fa fa-times"></i>
                                </button>
                            </div>
                            <input type="hidden" name="gender">
                            <ul class="dropdownMain-menu">
                                <li id="open">up to $1000</li>
                                <li id="paused">up to $10000</li>
                                <li id="closed">up to $50000</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 my-md-0 my-2 px-2 col-12">
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
                    <div class="col-md-2 my-md-0 my-2 px-2 col-12">
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
                </div>
            </div>
        </section>
        <section class="popularJobs my-4">
            <div class="container">
                <div class="row">
                    <div class="text-center col-12">
                        <p class="para">
                          <b>Oops! No Jobs Found Related to This Industry</b>
                        </p>
                    </div>
                    <div class="col-12 my-3">
                        <div class="items d-flex justify-content-between">

                            <div class="d-fsdlex align-items-center ms-0 mx-3">
                                <label class="mb-0 me-2" for="">Results per page:</label>
                                <div class="dropdownMain form-control filerSearched">
                                    <div class="select">
                                        <span>25</span>
                                        <i class="fa fa-chevron-left"></i>
                                    </div>
                                    <input type="hidden" name="gender">
                                    <ul class="dropdownMain-menu">
                                        <li id="open">50</li>
                                        <li id="paused">75</li>
                                        <li id="closed">100</li>
                                    </ul>
                                </div>

                            </div>
                            <div class="d-fsdlex align-items-center mx-3">
                                <label class="mb-0 me-2" for="">Sort by:</label>
                                <div class="dropdownMain form-control filerSearched">
                                    <div class="select">
                                        <span>Most Relevent</span>
                                        <i class="fa fa-chevron-left"></i>
                                    </div>
                                    <input type="hidden" name="gender">
                                    <ul class="dropdownMain-menu">
                                        <li id="open">Most Recent</li>
                                        <li id="paused">Distance</li>
                                        <li id="closed">Salary (High -> Low)</li>
                                        <li id="closed">Salary (Low -> High)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
