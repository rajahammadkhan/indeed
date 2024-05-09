@extends('frontend.layouts.master')
@section('title')
    Help Center - {{ config('app.dashboard') }}
@endsection
@section('content')
    {{-- @include('light/layouts/sidebar') --}}

    <main class="bg-main">
        <section class="findJobSearched findJob rec py-5">
            <div class="container">
                <form action="#">
                    <div class="row">
                        <div class="col-md-5 my-md-0 my-2 px-2 col-12">
                            <label for="" class="active">Keywords</label>
                            <input type="text" class="form-control mb-0" placeholder="">
                        </div>
                        <div class="col-md-5 my-md-0 my-3 mt-0 px-2 col-12">
                            <label for="" class="active">Location</label>
                            <input type="text" class="form-control mb-0" placeholder="">
                        </div>
                        <div class="col-md-2 px-2 col-12 mt-auto">
                            <button type="submit" class="w-100 btn btn-primary mb-auto">Find Jobs</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-10 col-12 mx-auto">

                    <style>
                        .helpCenterBox .hdng {
                            color: #212121;
                            border-bottom: 1px solid #79a7395c;
                            padding-bottom: 10px;

                        }

                        .helpCenterBox .para {
                            color: #212121;
                            font-size: 15px !important;
                            font-weight: 500;
                            /* display: -webkit-box;
                                                    -webkit-box-orient: vertical;
                                                    -webkit-line-clamp: 1;
                                                    overflow: hidden; */
                            display: contents;
                        }

                        .helpCenterBox .btn {
                            width: 170px;
                            max-width: 170px;
                            min-width: 170px;
                        }

                        .helpCenterBox .bxcx {
                            display: flex;
                            justify-content: space-between;
                            border: 1px solid #79a7395c;
                            padding: 1.2em;
                            margin-block: 1em;
                            border-radius: 1em;
                            align-items: center
                        }
                    </style>
                    <div class="col-12 my-3">
                        <h1 class="res text-center">
                            Contact 4Fresh
                        </h1>
                        <h5 class="res text-center">
                            Search our informative Help Centre for useful advice on using 4Fresh . Can’t find what you’re
                            looking for? Complete the form below to get in touch with our team.
                        </h5>
                    </div>
                    <div class="col-12">
                        <div class="helpCenterBox p-4">
                            <h3 class="hdng">
                                Recruiters
                            </h3>
                            <div class="bxcx">
                                <p class="para">
                                    New to 4Fresh? Visit our Recruiting area for advice on posting jobs and searching CVs.
                                </p>
                                <a href="#" class="btn btn-success">Recruiting</a>
                            </div>
                            <div class="bxcx">
                                <p class="para">
                                    Need help with your existing 4 fresh account? Please visit the Client Help Centre,
                                    contact your Client Response Coordinator, or use our contact form.
                                </p>
                                <a href="#" class="btn btn-success">Client Help Center</a>
                            </div>
                        </div>
                        <div class="helpCenterBox p-4">
                            <h3 class="hdng">
                                Jobseekers
                            </h3>
                            <div class="bxcx">
                                <p class="para">
                                    Register your CV to start searching and applying to xxxxxxxx no of jobs.
                                </p>
                                <a href="#" class="btn btn-success">
                                    Register your CV</a>
                            </div>
                            <div class="bxcx">
                                <p class="para">
                                    Need a new CV? Create one in minutes with our free CV Builder.
                                </p>
                                <a href="#" class="btn btn-success">
                                    Build my CV</a>
                            </div>
                            <div class="bxcx">
                                <p class="para">
                                    For any candidate enquiries about using the 4 fresh website, please visit the 4 fresh
                                    Help Centre.



                                </p>
                                <a href="#" class="btn btn-success">
                                    4 fresh Help Centre</a>
                            </div>
                            <div class="bxcx">
                                <p class="para">
                                    If you have forgotten your password, please use our password retrieval facility.



                                </p>
                                <a href="#" class="btn btn-success">
                                    Password Retrieval</a>
                            </div>
                            <div class="bxcx">
                                <p class="para">
                                    You can change your password at any time in your candidate area.




                                </p>
                                <a href="#" class="btn btn-success">
                                    Change Password</a>
                            </div>
                            <div class="bxcx">
                                <p class="para">
                                    Create, edit or unsubscribe from our Job Alerts service.



                                </p>
                                <a href="#" class="btn btn-success">
                                    Manage Job Alerts</a>
                            </div>
                            <div class="bxcx">
                                <p class="para">
                                    Edit your profile or upload a different CV.



                                </p>
                                <a href="#" class="btn btn-success">
                                    Modify your CV</a>
                            </div>
                            <div class="bxcx">
                                <p class="para">
                                    Help with obtaining a UK work permit.



                                </p>
                                <a href="#" class="btn btn-success">
                                    UK Work Permit
                                </a>
                            </div>
                            <div class="bxcx findJob rec flex-column">
                                <h3 class="hdng border-0 pb-0 mt-0">
                                    4 fresh accepts all registrations from the UK, EU and EEA.
                                </h3>
                                <p class="para">
                                    Job applications must be made via the website, mobile app, or a partner site.
                                    <br>
                                    All the information 4fresh receives regarding vacancies is available on each job post.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
