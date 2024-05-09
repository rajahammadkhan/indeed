@extends('frontend.layouts.master')
@section('title')
    PostJob Form - {{ config('app.dashboard') }}
@endsection
@section('content')
    <style xmlns="http://www.w3.org/1999/html">
        .form-horizontal .control-label {

            text-align: left !important;
        }

        [type="checkbox"]:not(:checked),
        [type="checkbox"]:checked {
            position: absolute;
            opacity: 0;
            pointer-events: none;
        }

        .socialPP {
            gap: 12px;
        }

        .socialBtns {
            text-align: center;
            background: #79a739;
            color: white;
            border-radius: 12px;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            padding: 0.75em;
        }

        .socialBtns:hover i {
            color: white
        }

        .socialBtns i {
            font-size: 32px;
        }
    </style>
    <section class="bg-main">



        <div class="container">
            <div class="row singleJobs bg-white">
                <div class="col-md-3 d-none d-md-block">
                    <div class="row w-100 mx-auto">
                        <div class="col-12 my-4">
                            <h4 class="para">
                                Similar Jobs
                            </h4>
                        </div>
                        <div class="col-12 similarJobsSingle p-3">
                            <a href="#" class="tt">
                                Software Developer
                            </a>
                            <p class="loc text-dark mb-0 ">
                                Moreton
                            </p>
                        </div>

                    </div>
                </div>
                <div class="col-md-9 col-12 jobTt pb-5">
                    <div class="row">
                        <div class="col-12">

                            <h3 class="para d-flex align-items-center text-dark my-3">
                                <i class="material-icons me-2">info_outline</i>Please review this job before posting!
                            </h3>
                            <div class="jobDetails my-4">
                                <div class="row">
                                    <div class="col-md-8 col-12">
                                        <h3 class="para">
                                            {{$post_job['job_title']}}
                                        </h3>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="apply text-end"><a href="{{route('modify-job.show',$post_job->id)}}" class="btn btn-primary">Edit Details</a></div>
                                    </div>
                                </div>
                                <h5 class=" text-dark my-3 mb-4">
                                    Job Type: {{$post_job['job']->job_name}}
                                </h5>
                                <h5 class=" text-dark my-3 mb-4">
                                    Industry: {{$post_job['industry']->industry_name}}
                                </h5>
                                <h5 class=" text-dark my-3 mb-4">
                                    Department: {{$post_job['depart']->depart_name}}
                                </h5>
                                <h5 class=" text-dark my-3 mb-4">
                                    Location: {{$post_job['location']->location_name}}
                                </h5>
                                <h5 class=" text-dark my-3 mb-4">
                                    Post Code: {{$post_job['postcode']}}
                                </h5>
{{--                                <h5 class=" text-dark my-3 mb-4">--}}
{{--                                    Salary: {{$post_job['postcode']}}--}}
{{--                                </h5>--}}
                                <h5 class="  text-dark my-3 mb-4">
                                    Start Date: {{$post_job['start_date']}}
                                </h5>
                            </div>
                            <div class="jobDescr">
                                <h4 class="text-dark">
                                    Job Description:
                                </h4>
                                <h5 class="text-dark desc">
                                    {!!$post_job['job_description']!!}
                                </h5>
                                <div class="btnz nuxt d-flex justify-content-between w-100 align-items-center mt-4">
                                        <form action="{{route('post-job.update',$post_job['id'])}}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <label>
                                                <input type="checkbox" name="agreed" value="1" required>
                                                <span style="font-size: 13px; text-transform: capitalize;">Yes I read this job i confirmed</span>
                                            </label>
                                                 <div class="btnz nuxt d-flex justify-content-between w-100 align-items-center mt-4" >
                                                <div class="apply"><button type="submit" class="btn btn-primary">Post Now</button></div>
                                            </div>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>


</section>
@endsection
