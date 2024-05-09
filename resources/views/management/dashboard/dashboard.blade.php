@extends('light.layouts.app')
@section('title')
    Dashboard - {{ config('app.dashboard') }}
@endsection
@section('content')
    <style>
        .itm .itmImg img {
            width: 36px;
            margin-right: 10px;
        }

        .itm .itmEnd .btn {
            width: 158px;
        }

        .fs-1 {
            font-size: 32px;
        }

        .fs-2 {
            font-size: 24px;

        }

        .fs-3 {
            font-size: 20.8px;

        }

        .fs-4 {
            font-size: 16px;

        }

        .fs-5 {
            font-size: 12.8px;

        }

        .fs-6 {
            font-size: 11.2px;

        }

        .bdrfour {
            border: 1px solid #dfdfdf;
        }

        .w-33 {
            width: 33.3333%;
        }

        .text-success {
            color: #79a739 !important;
        }

        .recProfileImage {
            border-radius: 50%;
            border: 2px solid #79a739;
            width: 108px;
            height: 108px;
            object-fit: cover;
            max-width: 200px;
            position: relative;
        }

        .proImage::after {
            content: "72%";
            position: absolute;
            left: -12px;
            bottom: -12px;
            font-size: 14px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            border: 2px solid #79a739;
            width: 52px;
            height: 52px;
            background: #79a739;
            color: white;
        }

        .proImage {
            position: absolute;
            top: 50%;
            right: 8%;
            transform: translateY(-64%);
        }

        .nav-tabs li a.active {
            color: #fff !important;
            background: #79a739;
            border-radius: 12px;
        }

        .nav-tabs li a.active:hover {
            color: #fff !important;
            background-color: #79a739c4 !important;
            border-radius: 12px;
        }

        .nav-tabs li a.active:hover,
        .nav-tabs li a.active:active,
        .nav-tabs li a.active:focus {
            background-color: #79a739 !important;

        }

        .nav-tabs li a.active:before {
            display: none
        }

        .nav-tabs {
            border-bottom: none !important;
        }
    </style>
    <section class="content">
        <div class="container-faluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Dashboard</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="{{ url('home') }}">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Manage</strong> Jobs
                            </h2>

                        </div>
                        <div class="sect pb-4">
                            <div class="itm px-4 py-3 d-flex justify-content-between align-items-center">
                                <div class="itmStart">
                                    <div class="itmImg d-inline"><img src="https://i.ibb.co/nmS3DB9/postjob.png"
                                            class="d-inline" alt="item"></div>
                                    <p class="text-dark d-inline" style="font-size: 16px; user-select: none">Post a Job</p>
                                </div>
                                <div class="itmEnd">
                                    <a href="https://eliteblue.net/Clients/indeed/public/post-job"
                                        class="btn btn-success text-uppercase">post a Job</a>
                                </div>
                            </div>
                            <div class="itm px-4 py-3 d-flex justify-content-between align-items-center">
                                <div class="itmStart">
                                    <div class="itmImg d-inline"><img src="https://i.ibb.co/4fcX3sk/settings.png"
                                            class="d-inline" alt="item"></div>
                                    <p class="text-dark d-inline" style="font-size: 16px; user-select: none">Modify/Delete
                                        Job</p>
                                </div>
                                <div class="itmEnd">
                                    <a href="https://eliteblue.net/Clients/indeed/public/modify-job"
                                        class="btn btn-success text-uppercase">Modify Job</a>
                                </div>
                            </div>
                            <div class="itm px-4 py-3 d-flex justify-content-between align-items-center">
                                <div class="itmStart">
                                    <div class="itmImg d-inline"><img src="https://i.ibb.co/C8bfGNf/update.png"
                                            class="d-inline" alt="item"></div>
                                    <p class="text-dark d-inline" style="font-size: 16px; user-select: none">Restore Job</p>
                                </div>
                                <div class="itmEnd">
                                    <a href="https://eliteblue.net/Clients/indeed/public/post-job"
                                        class="btn btn-success text-uppercase">Restore Job</a>
                                </div>
                            </div>
                            <div class="itm px-4 py-3 d-flex justify-content-between align-items-center">
                                <div class="itmStart">
                                    <div class="itmImg d-inline"><img src="https://i.ibb.co/51D87gj/check.png"
                                            class="d-inline" alt="item"></div>
                                    <p class="text-dark d-inline" style="font-size: 16px; user-select: none">Expiring Jobs
                                    </p>
                                </div>
                                <div class="itmEnd">
                                    <a href="https://eliteblue.net/Clients/indeed/public/post-job"
                                        class="btn btn-success text-uppercase">Expiring Jobs</a>
                                </div>
                            </div>
                            <div class="itm px-4 py-3 d-flex justify-content-between align-items-center">
                                <div class="itmStart">
                                    <div class="itmImg d-inline"><img src="https://i.ibb.co/HPBGPK7/pen.png"
                                            class="d-inline" alt="item"></div>
                                    <p class="text-dark d-inline" style="font-size: 16px; user-select: none">Manage Job
                                        Templates</p>
                                </div>
                                <div class="itmEnd">
                                    <a href="https://eliteblue.net/Clients/indeed/public/post-job"
                                        class="btn btn-success text-uppercase">Edit Templates</a>
                                </div>
                            </div>
                            <div class="itm px-4 py-3 d-flex justify-content-between align-items-center">
                                <div class="itmStart">
                                    <div class="itmImg d-inline"><img src="https://i.ibb.co/mhP4BY8/social.png"
                                            class="d-inline" alt="item"></div>
                                    <p class="text-dark d-inline" style="font-size: 16px; user-select: none">Social Job
                                        Posting</p>
                                </div>
                                <div class="itmEnd">
                                    <a href="https://eliteblue.net/Clients/indeed/public/post-job"
                                        class="btn btn-success text-uppercase">Connect Now</a>
                                </div>
                            </div>
                            <div class="itm px-4 py-3 d-flex justify-content-between align-items-center">
                                <div class="itmStart">
                                    <div class="itmImg d-inline"><img src="https://i.ibb.co/bX1b3cM/network.png"
                                            class="d-inline" alt="item"></div>
                                    <p class="text-dark d-inline" style="font-size: 16px; user-select: none">Display Jobs on
                                        Your Site</p>
                                </div>
                                <div class="itmEnd">
                                    <a href="https://eliteblue.net/Clients/indeed/public/post-job"
                                        class="btn btn-success text-uppercase">display job</a>
                                </div>
                            </div>
                            <div class="itm px-4 py-3 d-flex justify-content-between align-items-center">
                                <div class="itmStart">
                                    <div class="itmImg d-inline"><img src="https://i.ibb.co/QkftSwW/qr.png" class="d-inline"
                                            alt="item"></div>
                                    <p class="text-dark d-inline" style="font-size: 16px; user-select: none">We're Hiring
                                        Poster</p>
                                </div>
                                <div class="itmEnd">
                                    <a href="https://eliteblue.net/Clients/indeed/public/post-job"
                                        class="btn btn-success text-uppercase">we're hiring</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
                <!-- Browser Usage -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="body">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                        <li role="presentation" class="w-50 text-center">
                                            <a href="#home" data-toggle="tab" class="show active">Your Activity</a>
                                        </li>
                                        <li role="presentation" class="w-50 text-center">
                                            <a href="#profile" data-toggle="tab" class="">Account's Activity</a>
                                        </li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active show" id="home">
                                            <div class="sect ">
                                                <p class="text-dark fs-4 fw-bold">Your Activity</p>
                                                <div class="itemz d-flex">
                                                    <div
                                                        class="bdrfour p-3 w-33 d-flex flex-column justify-content-center align-items-center">
                                                        <p class="d-block text-success fs-2 mb-0">7</p>
                                                        <p class="d-inline text-dark fs-5 mb-0">Live Jobs</p>
                                                    </div>
                                                    <div
                                                        class="bdrfour p-3 w-33 d-flex flex-column justify-content-center align-items-center">
                                                        <p class="d-block text-success fs-2 mb-0">7,232</p>
                                                        <p class="d-inline text-dark fs-5 mb-0">Jobs Views</p>
                                                    </div>
                                                    <div
                                                        class="bdrfour p-3 w-33 d-flex flex-column justify-content-center align-items-center">
                                                        <p class="d-block text-success fs-2 mb-0">4,728</p>
                                                        <p class="d-inline text-dark fs-5 mb-0">Applications</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sect mt-3">
                                                <p class="text-dark fs-4 fw-bold">Account Credits</p>
                                                <div class="itemz d-flex">
                                                    <div
                                                        class="bdrfour p-3 w-100 d-flex justify-content-between align-items-center">
                                                        <p class="d-inline text-dark fs-4 mb-0">Credits Remaining</p>
                                                        <p class="d-block text-success fs-2 mb-0">7</p>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="sect mt-3">
                                                <div class="itemz d-flex">
                                                    <div
                                                        class="bdrfour p-3 w-100 d-flex justify-content-center flex-column align-items-center">
                                                        <p class="d-inline text-dark fs-4 mb-0">Credits Allocation</p>
                                                        <p class="d-block text-success fs-4 mb-0">+7 Credits on day 25 each
                                                            month
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="profile">
                                            <div class="sect ">
                                                <p class="text-dark fs-4 fw-bold">Account's Activity</p>
                                                <div class="itemz d-flex">
                                                    <div
                                                        class="bdrfour p-3 w-33 d-flex flex-column justify-content-center align-items-center">
                                                        <p class="d-block text-success fs-2 mb-0">12</p>
                                                        <p class="d-inline text-dark fs-5 mb-0">Live Jobs</p>
                                                    </div>
                                                    <div
                                                        class="bdrfour p-3 w-33 d-flex flex-column justify-content-center align-items-center">
                                                        <p class="d-block text-success fs-2 mb-0">2,232</p>
                                                        <p class="d-inline text-dark fs-5 mb-0">Jobs Views</p>
                                                    </div>
                                                    <div
                                                        class="bdrfour p-3 w-33 d-flex flex-column justify-content-center align-items-center">
                                                        <p class="d-block text-success fs-2 mb-0">478</p>
                                                        <p class="d-inline text-dark fs-5 mb-0">Applications</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sect mt-3">
                                                <p class="text-dark fs-4 fw-bold">Account Credits</p>
                                                <div class="itemz d-flex">
                                                    <div
                                                        class="bdrfour p-3 w-100 d-flex justify-content-between align-items-center">
                                                        <p class="d-inline text-dark fs-4 mb-0">Credits Remaining</p>
                                                        <p class="d-block text-success fs-2 mb-0">7</p>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="sect mt-3">
                                                <div class="itemz d-flex">
                                                    <div
                                                        class="bdrfour p-3 w-100 d-flex justify-content-center flex-column align-items-center">
                                                        <p class="d-inline text-dark fs-4 mb-0">Credits Allocation</p>
                                                        <p class="d-block text-success fs-4 mb-0">+7 Credits on day 25 each
                                                            month
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <div class="header">
                                    <h2>
                                        <strong>Your Recruiter Profile</strong>
                                    </h2>

                                </div>
                                <div class="body pt-0">
                                    <div class="row">
                                        <div class="col-8">
                                            <p class="text-success mb-0 fs-4">
                                                Ruth Counsell
                                            </p>
                                            <p class="text-dark mb-0 fs-5">
                                                Director
                                            </p>
                                            <a href="#" class="btn btn-success mt-3">Edit Recruiter Profile</a>
                                        </div>
                                        <div class="col-4">
                                            <div class="proImage">
                                                <img src="https://img.a.transfermarkt.technology/portrait/big/88103-1540568385.jpg?lm=1"
                                                    alt="recruiter profile" class="recProfileImage">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <div class="header">
                                    <h2>
                                        <strong>Company Profile</strong>
                                    </h2>
                                </div>
                                <div class="body pt-0">
                                    <div class="fullImg w-100 p-2 bdrfour text-center">
                                        <img src="https://i.ibb.co/4mVSzx7/Untitled.jpg" draggable="false"
                                            alt="company profile">
                                    </div>
                                    <a href="#" class="btn btn-success my-3">Edit Profile</a>
                                    <a href="#" class="btn btn-success my-3">View Your Job Page</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
