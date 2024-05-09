@extends('frontend.layouts.master')
@section('title')
    Applied Job Form - {{ config('app.dashboard') }}
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

                            <div class="jobDetails my-4">
                                <div class="row">
                                    <div class="col-12 my-3">
                                        <h2 class="text-dark">
                                            Apply Job Title
                                        </h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-12">
                                        <h3 class="para">
                                            Contact info
                                        </h3>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="apply text-end"><a href="#" class="btn btn-primary">Edit
                                                Details</a></div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group ms-0 accInfoStl w-100 bg-white text-dark my-4">
                                            <label for="email_address1">{{$user->name}}
                                            </label>
                                            <label for="email_address1"> Software Engineer C++ / Java
                                            </label>
                                            <label for="email_address1"> Karachi
                                            </label>
                                        </div>

                                        <h5 class="text-dark my-3 mb-4">
                                           <b> Email Address </b>
                                        </h5>
                                        <p class="text-dark mb-5">
                                            {{$appliedJob->user_email}}
                                        </p>
                                        <h5 class=" text-dark my-3 mb-4">
                                            <b>Contry Code</b>
                                        </h5>
                                        <p class="text-dark mb-5">
                                            {{$appliedJob->country_code}}
                                        </p>
                                        <h5 class=" text-dark my-3 mb-4">
                                            <b>Phone Number</b>
                                        </h5>
                                        <p class="text-dark mb-5">
                                            {{$appliedJob->mobile_phone}}
                                        </p>
                                    </div>
                                </div>
                                <div class="row jobDescr">
                                    <div class="col-md-8 col-12">
                                        <h3 class="para">
                                            Resume
                                        </h3>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="apply text-end"><a href="#" class="btn btn-primary">Edit
                                                Details</a></div>
                                    </div>
                                    <div class="col-12">

                                        <h5 class=" text-dark my-3 mb-5">
                                            Be sure to include an updated resume
                                        </h5>
                                        @if($appliedJob->document_pdf!= null)
                                            @php $document = $appliedJob->document_pdf @endphp
                                        @else
                                            @php $document = '1648647499314.pdf' @endphp
                                        @endif
                                        <a href="{{asset('indeed/document'.'/'.$document)}}" target="_BLANK"><i class="far fa-file-code fa-lg"></i>Click here to open the file</a>
                                    </div>
                                </div>
                                <div class="row jobDescr my-4">
                                    <div class="col-md-8 col-12">
                                        <h3 class="para">
                                            Additional Questions

                                        </h3>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="apply text-end"><a href="#" class="btn btn-primary">Edit
                                                Details</a></div>
                                    </div>
                                    <div class="col-12">

                                        <h5 class=" text-dark my-3 mb-4">
                                            <b>How many years of work experience do you have with WordPress?</b>
                                        </h5>
                                        <p class="text-dark my-4 mb-5">
                                            {{$appliedJob->additional_question}}
                                        </p>
                                        <h5 class=" text-dark my-3 mb-4">
                                            <b>How many years of work experience do you have with PHP/JavaScript/HTML?</b>
                                        </h5>
                                        <p class="text-dark my-4 mb-5">
                                            {{$appliedJob->proficiency_level}}
                                        </p>

                                    </div>
                                </div>
                            </div>
                            <div class="jobDescr">

                                <div class="btnz nuxt d-flex justify-content-between w-100 align-items-center mt-4">
                                    <form action="{{route('applied-job.update',$appliedJob->id)}}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <label>
                                            <input type="checkbox" name="agreed" value="1" required>
                                            <span style="font-size: 13px; text-transform: capitalize;">Follow Job title to
                                                stay up to date with their page.</span>
                                            <h5 class="text-dark">
                                                We will automatically save your answers and resume to pre-fill future applications and improve your experience on LinkedIn. Learn more. You can control this in your Application Settings.
                                                Application powered by LinkedIn | Help Center
                                            </h5>
                                        </label>
                                        <div class="btnz nuxt d-flex justify-content-between w-100 align-items-center mt-4">
                                            <div class="apply"><button type="submit" class="btn btn-primary">Apply
                                                    Now</button></div>
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
