@extends('light.layouts.app')
@section('title')
    Searched Job - {{config('app.dashboard')}}
@endsection
@section('content')
    @include('light/layouts/sidebar')
    <section class="content">
        <section class="findJob py-5">
            <div class="container">
                <form action="/">
                    <div class="row">
                        <div class="col-12 my-3">
                            <h1 class="res">
                                Search <a href="#"> 23,326</a> Jobs
                            </h1>
                        </div>
                        <div class="col-12 mt-md-3">
                            <div class="row">
                                <div class="col-lg-2 col-md-3 my-md-0 my-2 col-12">
                                    <label for="">Keyword</label>
                                    <input type="text" class="form-control mb-0" placeholder="e.g. $30,000">
                                </div>
                                <div class="col-lg-2 col-md-3 my-md-0 my-2 col-12">
                                    <label for="">Location</label>
                                    <input type="text" class="form-control mb-0" placeholder="e.g. $35,000">
                                </div>
                                <div class="col-lg-3 col-md-3 my-md-0 my-2 col-12">
                                    <label class="choose py-0">Within (Miles)</label>
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
                                <div class="col-lg-3 col-md-3 my-md-0 my-2 col-12">
                                    <label class="choose py-0">Submitted Since </label>
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
                                    <button type="submit" class="w-100 btn btn-primary">View Results</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row singleJobs bg-white">

                    <div class="col-md-9 col-12 jobTt py-3">
                        <div class="row">
                            <div class="col-12 my-2">
                                <div class="recruiterSearched p-3">
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-between">
                                            <p class="para">
                                                John Wick
                                            </p>
                                            <div class="right d-flex align-items-center">
                                                <div class="form-check mb-0">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        Select:<span class="form-check-sign"> <span class="check"></span>
                                                    </span>
                                                    </label>
                                                </div>
                                                <button class="btn btn-success">View CV</button>
                                            </div>

                                        </div>
                                    </div>
                                    <h6 class="text-dark">
                                        Posted by <a href="#"> John</a>
                                    </h6>
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="dtss my-3">
                                                <div class="location">
                                                    <h6 class="text-dark fw-light"><span class="fw-bold"> Location:</span>
                                                        Gotham City </h6>
                                                </div>
                                                <div class="salary">
                                                    <h6 class="text-dark fw-light"><span class="fw-bold"> Salary:</span>
                                                        £1 - £75/hour + Company Benefits</h6>
                                                </div>
                                                <div class="jobtype">
                                                    <h6 class="text-dark fw-light"> <span class="fw-bold"> Job Type:</span>
                                                        Contract</h6>
                                                </div>
                                                <div class="jobtype">
                                                    <h6 class="text-dark fw-light"> <span class="fw-bold"> Job Title:</span>
                                                        Programme Manager</h6>
                                                </div>
                                                <div class="dtAvail">
                                                    <h6 class="text-dark fw-light"> <span class="fw-bold"> Date
                                                        Available:</span>
                                                        10/08/23</h6>
                                                </div>
                                                <div class="distance">
                                                    <h6 class="text-dark fw-light"> <span class="fw-bold">Willing to
                                                        Travel:</span>
                                                        125 Miles</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12 text-end my-auto">
                                            <img draggable="false"
                                                 src="https://static01.nyt.com/images/2019/05/18/arts/johnwick-anatomy/johnwick-anatomy-square640-v3.jpg"
                                                 alt="candImg" class="recCandImg">
                                        </div>
                                    </div>
                                    <h6 class="text-dark">
                                    <span class="text-success">
                                        100%
                                    </span> Match Profile/CV
                                    </h6>
                                    <h6 class="fw-light text-dark my-3">
                                        <span class="fw-bold">Skills: </span>
                                        A Professional Hitman. As a global society, we average up to 11 hours of screen time
                                        per day. During the
                                        pandemic, this climbed as high as 19 hours per day. From managing money online, to
                                        streaming, to food delivery apps, software powers everything we do on our screens.
                                    </h6>
                                    <h6 class="fw-light text-dark mt-3">
                                        <span class="fw-bold">CV Keywords: </span>
                                        As a global society, we average up to 11 hours of screen time per day. During the
                                        pandemic, this climbed as high as 19 hours per day. From managing money online, to
                                        streaming, to food delivery apps, software powers everything we do on our screens.
                                    </h6>
                                </div>
                            </div>
                            <div class="col-12 my-2">
                                <div class="recruiterSearched p-3">
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-between">
                                            <p class="para">
                                                John Wick
                                            </p>
                                            <div class="right d-flex align-items-center">
                                                <div class="form-check mb-0">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        Select:<span class="form-check-sign"> <span class="check"></span>
                                                    </span>
                                                    </label>
                                                </div>
                                                <button class="btn btn-success">View CV</button>
                                            </div>

                                        </div>
                                    </div>
                                    <h6 class="text-dark">
                                        Posted by <a href="#"> John</a>
                                    </h6>
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="dtss my-3">
                                                <div class="location">
                                                    <h6 class="text-dark fw-light"><span class="fw-bold"> Location:</span>
                                                        Gotham City </h6>
                                                </div>
                                                <div class="salary">
                                                    <h6 class="text-dark fw-light"><span class="fw-bold"> Salary:</span>
                                                        £1 - £75/hour + Company Benefits</h6>
                                                </div>
                                                <div class="jobtype">
                                                    <h6 class="text-dark fw-light"> <span class="fw-bold"> Job Type:</span>
                                                        Contract</h6>
                                                </div>
                                                <div class="jobtype">
                                                    <h6 class="text-dark fw-light"> <span class="fw-bold"> Job Title:</span>
                                                        Programme Manager</h6>
                                                </div>
                                                <div class="dtAvail">
                                                    <h6 class="text-dark fw-light"> <span class="fw-bold"> Date
                                                        Available:</span>
                                                        10/08/23</h6>
                                                </div>
                                                <div class="distance">
                                                    <h6 class="text-dark fw-light"> <span class="fw-bold">Willing to
                                                        Travel:</span>
                                                        125 Miles</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12 text-end my-auto">
                                            <img draggable="false"
                                                 src="https://static01.nyt.com/images/2019/05/18/arts/johnwick-anatomy/johnwick-anatomy-square640-v3.jpg"
                                                 alt="candImg" class="recCandImg">
                                        </div>
                                    </div>
                                    <h6 class="text-dark">
                                    <span class="text-success">
                                        100%
                                    </span> Match Profile/CV
                                    </h6>
                                    <h6 class="fw-light text-dark my-3">
                                        <span class="fw-bold">Skills: </span>
                                        A Professional Hitman. As a global society, we average up to 11 hours of screen time
                                        per day. During the
                                        pandemic, this climbed as high as 19 hours per day. From managing money online, to
                                        streaming, to food delivery apps, software powers everything we do on our screens.
                                    </h6>
                                    <h6 class="fw-light text-dark mt-3">
                                        <span class="fw-bold">CV Keywords: </span>
                                        As a global society, we average up to 11 hours of screen time per day. During the
                                        pandemic, this climbed as high as 19 hours per day. From managing money online, to
                                        streaming, to food delivery apps, software powers everything we do on our screens.
                                    </h6>
                                </div>
                            </div>
                            <div class="col-12 my-2">
                                <div class="recruiterSearched p-3">
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-between">
                                            <p class="para">
                                                John Wick
                                            </p>
                                            <div class="right d-flex align-items-center">
                                                <div class="form-check mb-0">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        Select:<span class="form-check-sign"> <span class="check"></span>
                                                    </span>
                                                    </label>
                                                </div>
                                                <button class="btn btn-success">View CV</button>
                                            </div>

                                        </div>
                                    </div>
                                    <h6 class="text-dark">
                                        Posted by <a href="#"> John</a>
                                    </h6>
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="dtss my-3">
                                                <div class="location">
                                                    <h6 class="text-dark fw-light"><span class="fw-bold"> Location:</span>
                                                        Gotham City </h6>
                                                </div>
                                                <div class="salary">
                                                    <h6 class="text-dark fw-light"><span class="fw-bold"> Salary:</span>
                                                        £1 - £75/hour + Company Benefits</h6>
                                                </div>
                                                <div class="jobtype">
                                                    <h6 class="text-dark fw-light"> <span class="fw-bold"> Job Type:</span>
                                                        Contract</h6>
                                                </div>
                                                <div class="jobtype">
                                                    <h6 class="text-dark fw-light"> <span class="fw-bold"> Job Title:</span>
                                                        Programme Manager</h6>
                                                </div>
                                                <div class="dtAvail">
                                                    <h6 class="text-dark fw-light"> <span class="fw-bold"> Date
                                                        Available:</span>
                                                        10/08/23</h6>
                                                </div>
                                                <div class="distance">
                                                    <h6 class="text-dark fw-light"> <span class="fw-bold">Willing to
                                                        Travel:</span>
                                                        125 Miles</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12 text-end my-auto">
                                            <img draggable="false"
                                                 src="https://static01.nyt.com/images/2019/05/18/arts/johnwick-anatomy/johnwick-anatomy-square640-v3.jpg"
                                                 alt="candImg" class="recCandImg">
                                        </div>
                                    </div>
                                    <h6 class="text-dark">
                                    <span class="text-success">
                                        100%
                                    </span> Match Profile/CV
                                    </h6>
                                    <h6 class="fw-light text-dark my-3">
                                        <span class="fw-bold">Skills: </span>
                                        A Professional Hitman. As a global society, we average up to 11 hours of screen time
                                        per day. During the
                                        pandemic, this climbed as high as 19 hours per day. From managing money online, to
                                        streaming, to food delivery apps, software powers everything we do on our screens.
                                    </h6>
                                    <h6 class="fw-light text-dark mt-3">
                                        <span class="fw-bold">CV Keywords: </span>
                                        As a global society, we average up to 11 hours of screen time per day. During the
                                        pandemic, this climbed as high as 19 hours per day. From managing money online, to
                                        streaming, to food delivery apps, software powers everything we do on our screens.
                                    </h6>
                                </div>
                            </div>
                            <div class="col-12 my-2">
                                <div class="recruiterSearched p-3">
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-between">
                                            <p class="para">
                                                John Wick
                                            </p>
                                            <div class="right d-flex align-items-center">
                                                <div class="form-check mb-0">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        Select:<span class="form-check-sign"> <span class="check"></span>
                                                    </span>
                                                    </label>
                                                </div>
                                                <button class="btn btn-success">View CV</button>
                                            </div>

                                        </div>
                                    </div>
                                    <h6 class="text-dark">
                                        Posted by <a href="#"> John</a>
                                    </h6>
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="dtss my-3">
                                                <div class="location">
                                                    <h6 class="text-dark fw-light"><span class="fw-bold"> Location:</span>
                                                        Gotham City </h6>
                                                </div>
                                                <div class="salary">
                                                    <h6 class="text-dark fw-light"><span class="fw-bold"> Salary:</span>
                                                        £1 - £75/hour + Company Benefits</h6>
                                                </div>
                                                <div class="jobtype">
                                                    <h6 class="text-dark fw-light"> <span class="fw-bold"> Job Type:</span>
                                                        Contract</h6>
                                                </div>
                                                <div class="jobtype">
                                                    <h6 class="text-dark fw-light"> <span class="fw-bold"> Job Title:</span>
                                                        Programme Manager</h6>
                                                </div>
                                                <div class="dtAvail">
                                                    <h6 class="text-dark fw-light"> <span class="fw-bold"> Date
                                                        Available:</span>
                                                        10/08/23</h6>
                                                </div>
                                                <div class="distance">
                                                    <h6 class="text-dark fw-light"> <span class="fw-bold">Willing to
                                                        Travel:</span>
                                                        125 Miles</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12 text-end my-auto">
                                            <img draggable="false"
                                                 src="https://static01.nyt.com/images/2019/05/18/arts/johnwick-anatomy/johnwick-anatomy-square640-v3.jpg"
                                                 alt="candImg" class="recCandImg">
                                        </div>
                                    </div>
                                    <h6 class="text-dark">
                                    <span class="text-success">
                                        100%
                                    </span> Match Profile/CV
                                    </h6>
                                    <h6 class="fw-light text-dark my-3">
                                        <span class="fw-bold">Skills: </span>
                                        A Professional Hitman. As a global society, we average up to 11 hours of screen time
                                        per day. During the
                                        pandemic, this climbed as high as 19 hours per day. From managing money online, to
                                        streaming, to food delivery apps, software powers everything we do on our screens.
                                    </h6>
                                    <h6 class="fw-light text-dark mt-3">
                                        <span class="fw-bold">CV Keywords: </span>
                                        As a global society, we average up to 11 hours of screen time per day. During the
                                        pandemic, this climbed as high as 19 hours per day. From managing money online, to
                                        streaming, to food delivery apps, software powers everything we do on our screens.
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-none d-md-block">
                        <div class="row w-100 mx-auto">
                            <div class="col-12 my-4">
                                <h4 class="para">
                                    Actions
                                </h4>
                            </div>
                            <div class="col-12 similarJobsSingle p-3">
                                <a href="#" class="tt">
                                    Save this search
                                </a>
                            </div>
                            <div class="col-12 similarJobsSingle p-3">
                                <a href="#" class="tt selectedContact" data-toggle="modal" data-target="#exampleModal">
                                    Contact selected candidates
                                </a>
                            </div>

                            <div class="col-12 similarJobsSingle p-3">
                                <a href="#" class="tt">
                                    Email selected cvs to me
                                </a>
                            </div>

                            <div class="col-12 similarJobsSingle p-3">
                                <a href="#" class="tt">
                                    Save selected CVs
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection