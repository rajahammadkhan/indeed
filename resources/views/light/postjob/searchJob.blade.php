@extends('light.layouts.app')
@section('title')
    SearchJob - {{config('app.dashboard')}}
@endsection
@section('content')

<section class="findJob py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 my-3">
                <h1 class="res">
                    Search <a href="#"> 23,326</a> Jobs
                </h1>
            </div>
            <div class="col-md-5 col-12">
                <label for="">Keyword / Job Title / Job Ref</label>
                <input type="text" class="form-control" placeholder="e.g. Warehouse operative">
            </div>
            <div class="col-md-5 col-12">
                <label for="">Location</label>
                <input type="text" class="form-control" placeholder="e.g. town or postcode">
            </div>
            <div class="col-md-2 col-12">
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
            <div class="col-12 mt-3">
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-12">
                        <label for="">Salary Min</label>
                        <input type="text" class="form-control mb-0" placeholder="e.g. $30,000">
                    </div>
                    <div class="col-lg-2 col-md-3 col-12">
                        <label for="">Salary Max</label>
                        <input type="text" class="form-control mb-0" placeholder="e.g. $35,000">
                    </div>
                    <div class="col-lg-3 col-md-3 col-12">
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
                    <div class="col-lg-3 col-md-3 col-12">
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
                    <div class="col-lg-2 d-flex justify-content-center align-items-end col-md-3 col-12">
                        <button type="submit" class="w-100 btn btn-primary">Find Jobs</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection