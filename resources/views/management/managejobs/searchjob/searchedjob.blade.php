@extends('light.layouts.app')
@section('title')
    Searched Job - {{config('app.dashboard')}}
@endsection
@section('content')
@include('light/layouts/sidebar')
    <section class="content">
        <section class="findJobSearched bg-white py-5">
            <div class="container">
                <form action="/">
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
                    <div class="col-12">
                        <p class="para">
                            Software Developer jobs in Bristol (County)
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
                    <div class="col-12 my-3">
                        <div class="findJobCard  bg-white p-3">
                            <div class="row">
                                <div class="col-sm-3 col-12 my-auto">
                                    <img src="https://www.cv-library.co.uk/logo/big/1ca367eff940423abc0127cd548e970a"
                                         alt="findJobImg" class="w-100 findJobImg" draggable="false">
                                </div>
                                <div class="col-sm-9 col-12">
                                    <a href="{{url('single-job')}}" class="para findJobTitle"> <span class="findJobMatchKeyword">
                                        Software
                                    </span>
                                        Engineer C++ / Java</a>
                                    <div class="posted">
                                        <h6 class="text-dark">Posted 4 days ago by<a href="#"> Endeavour Recruitment</a>
                                        </h6>
                                    </div>
                                    <div class="dtss my-3">
                                        <div class="salary">
                                            <h6 class="text-dark"><span class="fw-light"> Salary:</span>
                                                £1 - £75/hour + Company Benefits</h6>
                                        </div>
                                        <div class="location">
                                            <h6 class="text-dark"><span class="fw-light"> Location:</span>
                                                Bristol, City of Bristol</h6>
                                        </div>
                                        <div class="jobtype">
                                            <h6 class="text-dark"> <span class="fw-light"> Job Type:</span>
                                                Contract</h6>
                                        </div>
                                    </div>
                                    <div class="jobDescription">
                                        <h5 class="text-dark findJobDecs">
                                            <span class="findJobMatchKeyword"> Software </span>Engineer C++ / Java. 6 Month
                                            contract, could be extended. Up to £56.21 Per Hour PAYE. Up To £75 Per Hour Pay
                                            To Umbrella Company. JOB LOCATION Bristol. Overview of department. Endeavour
                                            Recruitment in conjunction with their well respected client are offering an
                                            opportunity for that
                                        </h5>
                                    </div>
                                    <div class="applyNow mt-4">
                                        <button class="btn-success btn">
                                            Apply Now
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 my-3">
                        <div class="findJobCard  bg-white p-3">
                            <div class="row">
                                <div class="col-sm-3 col-12 my-auto">
                                    <img src="https://www.cv-library.co.uk/logo/big/3540c55c9d424f349a4402693b5fff66"
                                         alt="findJobImg" class="w-100 findJobImg" draggable="false">
                                </div>
                                <div class="col-sm-9 col-12">
                                    <a href="{{url('single_job')}}" class="para findJobTitle">Trainee <span
                                                class="findJobMatchKeyword">
                                        Software
                                        Developer</span>
                                        Course</a>
                                    <div class="posted">
                                        <h6 class="text-dark">Posted 6 hours ago by <a href="#"> Hatch</a></h6>
                                    </div>
                                    <div class="dtss my-3">

                                        <div class="location">
                                            <h6 class="text-dark"><span class="fw-light"> Location:</span>
                                                Nationwide</h6>
                                        </div>
                                        <div class="jobtype">
                                            <h6 class="text-dark"> <span class="fw-light"> Job Type:</span>
                                                Apprenticeship, Contract, Part Time, Permanent, Temporary</h6>
                                        </div>
                                    </div>
                                    <div class="jobDescription">
                                        <h5 class="text-dark findJobDecs">
                                            Train to be a Software Developer. Whether you're looking to start a new career
                                            in Software, or accelerate an existing one, Hatch can support you at any stage
                                            of your career journey through our award-winning learning pathways coupled with
                                            dedicated career and employment
                                            Train to be a Software Developer. Whether you're looking to start a new career
                                            in Software, or accelerate an existing one, Hatch can support you at any stage
                                            of your career journey through our award-winning learning pathways coupled with
                                            dedicated career and employment
                                        </h5>
                                    </div>
                                    <div class="applyNow mt-4">
                                        <button class="btn-success btn">
                                            Apply Now
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 my-3">
                        <div class="findJobCard  bg-white p-3">
                            <div class="row">
                                <div class="col-sm-3 col-12 my-auto">
                                    <img src="https://www.cv-library.co.uk/logo/big/d24ea1e27bbf4a728cf7cbb19a8bb50b"
                                         alt="findJobImg" class="w-100 findJobImg" draggable="false">
                                </div>
                                <div class="col-sm-9 col-12">
                                    <a href="{{url('single_job')}}" class="para findJobTitle">Renewable Energy and Carbon Advisory Senior
                                        Consultant
                                        Course</a>
                                    <div class="posted">
                                        <h6 class="text-dark">Posted 04/10/2022 by <a href="#"> Schneider Electric</a></h6>
                                    </div>
                                    <div class="dtss my-3">

                                        <div class="location">
                                            <h6 class="text-dark"><span class="fw-light"> Location:</span>
                                                United Kingdom</h6>
                                        </div>
                                        <div class="jobtype">
                                            <h6 class="text-dark"> <span class="fw-light"> Job Type:</span>
                                                Permanent </h6>
                                        </div>
                                    </div>
                                    <div class="jobDescription">
                                        <h5 class="text-dark findJobDecs">
                                            Train to be a Software Developer. Whether you're looking to start a new career
                                            in Software, or accelerate an existing one, Hatch can support you at any stage
                                            of your career journey through our award-winning learning pathways coupled with
                                            dedicated career and employment
                                            Train to be a Software Developer. Whether you're looking to start a new career
                                            in Software, or accelerate an existing one, Hatch can support you at any stage
                                            of your career journey through our award-winning learning pathways coupled with
                                            dedicated career and employment
                                        </h5>
                                    </div>
                                    <div class="applyNow mt-4">
                                        <button class="btn-success btn">
                                            Apply Now
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection