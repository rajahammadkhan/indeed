@extends('frontend.layouts.master')
@section('title')
    PostJob Form - {{ config('app.dashboard') }}
@endsection
@section('content')
    <style>
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
        <div class="container ">
            <div class="row">
                <div class="col-lg-8 col-md-10 col-12 mx-auto">
                    <form action="{{ route('post-job.store') }}" method="POST" enctype="multipart/form-data" id="myform">
                        @csrf
                        <fieldset id="account_information" class="">
                            <div class="form-group ms-0 accInfoStl topAccInfo w-100 bg-white text-dark p-5 my-4">

                                <legend>Provide basic information
                                </legend>

                            </div>
                            <div class="form-group ms-0 accInfoStl w-100 bg-white text-dark p-5 my-4">
                                <label for="job_title" class="col-12 control-label">Job title <span class="text-danger">
                                        *</span></label>
                                <div class="col-12">
                                    <input type="text" class="form-control w-100 mb-2" id="job_title" name="job_title"
                                        placeholder="">
                                </div>
                            </div>



                            <div class="form-group ms-0 accInfoStl w-100 bg-white text-dark p-5 my-4">
                                <label for="job_loc" class="col-12 control-label">Job Type
                                    <span class="text-danger"> *</span></label>
                                <div class="col-12">
                                    {{-- <input type="text" class="form-control w-100 mb-2" id="job_loc" name="advertise_job"
                                         placeholder=""> --}}
                                    <div class="dropdownMain form-control w-100 mb-2" tabindex="1">
                                        <div class="select">
                                            <span>Permanent</span>
                                            <i class="fa fa-chevron-left"></i>
                                        </div>
                                        <input type="hidden" name="job_type">
                                        <ul class="dropdownMain-menu" style="display: none;">
                                            <li value="permanent">Permanent</li>
                                            <li value="contract">Contract</li>
                                            <li value="temporary">Temporary</li>
                                            <li value="part/time">Part/Time</li>
                                            <li value="apprentice">Apprentice</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ms-0 btnz w-100 bg-white text-dark p-5 my-4">
                                <a class="btn btn-primary next sandc">Save and continue</a>
                            </div>



                        </fieldset>
                        <fieldset id="company_information" class="">
                            <div class="form-group ms-0  accInfoStl secAccInfo w-100 bg-white text-dark p-5 my-4">

                                <legend>Include details
                                </legend>

                            </div>
                            {{-- <div class="form-group ms-0 accInfoStl typeChecks w-100 bg-white text-dark p-5 my-4">
                                <div class="">
                                    <label for="job_title" class="col-12 control-label">What is the job type? <span
                                            class="text-danger">
                                            *</span></label>
                                    <div class="fTime position-relative checkBoxesForm">
                                        <div class="col-12 py-1">
                                            <div class="">
                                                <label for="fulltime" class="m-0">
                                                    <div class="d-flex align-items-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" focusable="false"
                                                            role="img" fill="currentColor" viewBox="0 0 20 20"
                                                            aria-hidden="true" class="hidden check">
                                                            <path
                                                                d="M17.069 5.935a.5.5 0 000-.708l-.354-.353a.5.5 0 00-.707 0l-8.483 8.483-3.533-3.532a.5.5 0 00-.707 0l-.353.353a.5.5 0 000 .707l3.532 3.533-.001.001.707.707a.499.499 0 00.71 0l.706-.707v-.001l8.483-8.483z">
                                                            </path>
                                                        </svg>
                                                        <div style="white-space: nowrap;  text-overflow: ellipsis;">
                                                            <svg xmlns="http://www.w3.org/2000/svg" focusable="false"
                                                                role="img" fill="currentColor" viewBox="0 0 20 20"
                                                                aria-hidden="false" class="uncheck">
                                                                <path
                                                                    d="M10.75 4.5a.5.5 0 00-.5-.5h-.5a.5.5 0 00-.5.5v4.75H4.5a.5.5 0 00-.5.5v.5a.5.5 0 00.5.5h4.75v4.75a.5.5 0 00.5.5h.5a.5.5 0 00.5-.5v-4.75h4.75a.5.5 0 00.5-.5v-.5a.5.5 0 00-.5-.5h-4.75V4.5z">
                                                                </path>
                                                            </svg>Full-time
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <input type="checkbox" class="" name="job_type[]" value="full_time">
                                    </div>
                                    <div class="pTime position-relative checkBoxesForm">
                                        <div class="col-12 py-1">
                                            <div class="">
                                                <label for="fulltime" class="m-0">
                                                    <div class="d-flex align-items-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" focusable="false"
                                                            role="img" fill="currentColor" viewBox="0 0 20 20"
                                                            aria-hidden="true" class="hidden check">
                                                            <path
                                                                d="M17.069 5.935a.5.5 0 000-.708l-.354-.353a.5.5 0 00-.707 0l-8.483 8.483-3.533-3.532a.5.5 0 00-.707 0l-.353.353a.5.5 0 000 .707l3.532 3.533-.001.001.707.707a.499.499 0 00.71 0l.706-.707v-.001l8.483-8.483z">
                                                            </path>
                                                        </svg>
                                                        <div style="white-space: nowrap;  text-overflow: ellipsis;">
                                                            <svg xmlns="http://www.w3.org/2000/svg" focusable="false"
                                                                role="img" fill="currentColor" viewBox="0 0 20 20"
                                                                aria-hidden="false" class="uncheck">
                                                                <path
                                                                    d="M10.75 4.5a.5.5 0 00-.5-.5h-.5a.5.5 0 00-.5.5v4.75H4.5a.5.5 0 00-.5.5v.5a.5.5 0 00.5.5h4.75v4.75a.5.5 0 00.5.5h.5a.5.5 0 00.5-.5v-4.75h4.75a.5.5 0 00.5-.5v-.5a.5.5 0 00-.5-.5h-4.75V4.5z">
                                                                </path>
                                                            </svg>Part-time
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <input type="checkbox" class="" name="job_type[]" value="part_time">
                                    </div>
                                    <div class="contract position-relative checkBoxesForm">
                                        <div class="col-12 py-1">
                                            <div class="">
                                                <label for="fulltime" class="m-0">
                                                    <div class="d-flex align-items-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" focusable="false"
                                                            role="img" fill="currentColor" viewBox="0 0 20 20"
                                                            aria-hidden="true" class="hidden check">
                                                            <path
                                                                d="M17.069 5.935a.5.5 0 000-.708l-.354-.353a.5.5 0 00-.707 0l-8.483 8.483-3.533-3.532a.5.5 0 00-.707 0l-.353.353a.5.5 0 000 .707l3.532 3.533-.001.001.707.707a.499.499 0 00.71 0l.706-.707v-.001l8.483-8.483z">
                                                            </path>
                                                        </svg>
                                                        <div style="white-space: nowrap;  text-overflow: ellipsis;">
                                                            <svg xmlns="http://www.w3.org/2000/svg" focusable="false"
                                                                role="img" fill="currentColor" viewBox="0 0 20 20"
                                                                aria-hidden="false" class="uncheck">
                                                                <path
                                                                    d="M10.75 4.5a.5.5 0 00-.5-.5h-.5a.5.5 0 00-.5.5v4.75H4.5a.5.5 0 00-.5.5v.5a.5.5 0 00.5.5h4.75v4.75a.5.5 0 00.5.5h.5a.5.5 0 00.5-.5v-4.75h4.75a.5.5 0 00.5-.5v-.5a.5.5 0 00-.5-.5h-4.75V4.5z">
                                                                </path>
                                                            </svg>Contract
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <input type="checkbox" class="" name="job_type[]" value="contract">
                                    </div>
                                    <div class="iship position-relative checkBoxesForm">
                                        <div class="col-12 py-1">
                                            <div class="">
                                                <label for="fulltime" class="m-0">
                                                    <div class="d-flex align-items-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" focusable="false"
                                                            role="img" fill="currentColor" viewBox="0 0 20 20"
                                                            aria-hidden="true" class="hidden check">
                                                            <path
                                                                d="M17.069 5.935a.5.5 0 000-.708l-.354-.353a.5.5 0 00-.707 0l-8.483 8.483-3.533-3.532a.5.5 0 00-.707 0l-.353.353a.5.5 0 000 .707l3.532 3.533-.001.001.707.707a.499.499 0 00.71 0l.706-.707v-.001l8.483-8.483z">
                                                            </path>
                                                        </svg>
                                                        <div style="white-space: nowrap;  text-overflow: ellipsis;">
                                                            <svg xmlns="http://www.w3.org/2000/svg" focusable="false"
                                                                role="img" fill="currentColor" viewBox="0 0 20 20"
                                                                aria-hidden="false" class="uncheck">
                                                                <path
                                                                    d="M10.75 4.5a.5.5 0 00-.5-.5h-.5a.5.5 0 00-.5.5v4.75H4.5a.5.5 0 00-.5.5v.5a.5.5 0 00.5.5h4.75v4.75a.5.5 0 00.5.5h.5a.5.5 0 00.5-.5v-4.75h4.75a.5.5 0 00.5-.5v-.5a.5.5 0 00-.5-.5h-4.75V4.5z">
                                                                </path>
                                                            </svg>Internship
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <input type="checkbox" class="" name="job_type[]" value="internship">
                                    </div>
                                    <div class="fresher position-relative checkBoxesForm">
                                        <div class="col-12 py-1">
                                            <div class="">
                                                <label for="fulltime" class="m-0">
                                                    <div class="d-flex align-items-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" focusable="false"
                                                            role="img" fill="currentColor" viewBox="0 0 20 20"
                                                            aria-hidden="true" class="hidden check">
                                                            <path
                                                                d="M17.069 5.935a.5.5 0 000-.708l-.354-.353a.5.5 0 00-.707 0l-8.483 8.483-3.533-3.532a.5.5 0 00-.707 0l-.353.353a.5.5 0 000 .707l3.532 3.533-.001.001.707.707a.499.499 0 00.71 0l.706-.707v-.001l8.483-8.483z">
                                                            </path>
                                                        </svg>
                                                        <div style="white-space: nowrap;  text-overflow: ellipsis;">
                                                            <svg xmlns="http://www.w3.org/2000/svg" focusable="false"
                                                                role="img" fill="currentColor" viewBox="0 0 20 20"
                                                                aria-hidden="false" class="uncheck">
                                                                <path
                                                                    d="M10.75 4.5a.5.5 0 00-.5-.5h-.5a.5.5 0 00-.5.5v4.75H4.5a.5.5 0 00-.5.5v.5a.5.5 0 00.5.5h4.75v4.75a.5.5 0 00.5.5h.5a.5.5 0 00.5-.5v-4.75h4.75a.5.5 0 00.5-.5v-.5a.5.5 0 00-.5-.5h-4.75V4.5z">
                                                                </path>
                                                            </svg>Fresher
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <input type="checkbox" class="" name="job_type[]" value="fresher">
                                    </div>

                                </div>
                            </div> --}}


                            <div class="form-group ms-0 accInfoStl w-100 bg-white text-dark p-5 my-4">
                                <label for="job_loc" class="col-12 control-label">Industry
                                    <span class="text-danger"> *</span></label>
                                <div class="col-12">
                                    {{-- <input type="text" class="form-control w-100 mb-2" id="job_loc" name="advertise_job"
                                         placeholder=""> --}}
                                    <div class="dropdownMain form-control w-100 mb-2" tabindex="1">
                                        <div class="select">
                                            <span>Agriculture</span>
                                            <i class="fa fa-chevron-left"></i>
                                        </div>
                                        <input type="hidden" name="gender">
                                        <ul class="dropdownMain-menu" style="display: none;">
                                            <li id="fresh_produce">Fresh Produce</li>
                                            <li id="Agriculture">Agriculture</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ms-0 accInfoStl w-100 bg-white text-dark p-5 my-4">
                                <label for="job_loc" class="col-12 control-label">Department
                                    <span class="text-danger"> *</span></label>
                                <div class="col-12">

                                    <div class="dropdownMain form-control w-100 mb-2" tabindex="1">
                                        <div class="select">
                                            <span>Operations</span>
                                            <i class="fa fa-chevron-left"></i>
                                        </div>
                                        <input type="hidden" name="gender">
                                        <ul class="dropdownMain-menu" style="display: none;">
                                            <li id="paused">Operations</li>
                                            <li id="paused">Sales</li>
                                            <li id="paused">Procurement</li>
                                            <li id="paused">Supply Chain</li>
                                            <li id="paused">Buyers</li>
                                            <li id="paused">Directors</li>
                                            <li id="paused">Products</li>
                                            <li id="paused">Technical</li>
                                            <li id="paused">Quality</li>
                                            <li id="paused">Compliance</li>
                                            <li id="paused">Health & Safety</li>
                                            <li id="paused">Finance</li>
                                            <li id="paused">Engineering</li>
                                            <li id="paused">Commercial</li>
                                            <li id="paused">Technologists</li>
                                            <li id="paused">IT</li>
                                            <li id="paused">Food Scientists</li>
                                            <li id="paused">HR</li>
                                            <li id="paused">Agronomists</li>
                                            <li id="paused">Farm Managers</li>
                                            <li id="paused">Traders</li>
                                            <li id="paused">Rural Surveyors</li>
                                            <li id="paused">Estate Managers</li>
                                            <li id="paused">Land Agents</li>
                                            <li id="paused">Farming</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ms-0 accInfoStl w-100 bg-white text-dark p-5 my-4">
                                <label for="job_loc" class="col-12 control-label">Location
                                    <span class="text-danger"> *</span></label>
                                <div class="col-12">

                                    <div class="dropdownMain form-control w-100 mb-2" tabindex="1">
                                        <div class="select">
                                            <span>Nationwide</span>
                                            <i class="fa fa-chevron-left"></i>
                                        </div>
                                        <input type="hidden" name="gender">
                                        <ul class="dropdownMain-menu" style="display: none;">
                                            <li id="paused">Nationwide</li>
                                            <li id="paused">Remote</li>
                                            <li id="paused">Non UK</li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ms-0 accInfoStl w-100 bg-white text-dark p-5 my-4">
                                <label for="job_loc" class="col-12 control-label">Postcode
                                    <span class="text-danger"> *</span></label>
                                <div class="col-12">


                                    <input type="text" class="form-control w-100 mb-2" id="loc_postcode"
                                        name="loc_postcode" placeholder="Location and Postcode">
                                </div>
                            </div>
                            <div class="form-group ms-0 accInfoStl w-100 bg-white text-dark p-5 my-4">
                                <div class="col-12">
                                    <label>
                                        <input type="checkbox" checked="checked">
                                        <span style="font-size: 13px; text-transform: capitalize;">advertise jobs to EU
                                            candidates with right to work in the UK</span>
                                    </label>
                                </div>
                            </div>

                            {{-- <div id="">
                                <div class="form-group ms-0 accInfoStl w-100 bg-white text-dark p-5 my-4" id="optQus">
                                    <label for="job_title" class="col-12 control-label">Screening Questions (Optional)
                                    </label>
                                    <p>You can enter up to five questions that will be asked when the candidate applies for
                                        this
                                        vacancy.</p>
                                    <div class="col-12">
                                        <p class="mb-2 p-0">Question:</p>
                                        <input type="text" class="form-control w-100 mb-2" name="screening_question"
                                            placeholder="Type your question here...">
                                    </div>
                                    <div id="fielda0">
                                        <div class="col-12 my-3" id="">
                                            <p class="mb-2 p-0">Answers:</p>
                                            <input type="text" class="form-control w-100 mb-2"
                                                name="question_answer[]" placeholder="Type your question here...">
                                            <input type="text" class="form-control w-100 mb-2"
                                                name="question_answer[]" placeholder="Type your question here...">
                                        </div>
                                    </div>
                                    <button id="add-more1" name="add-more" class="btn btn-primary">Add More</button>
                                </div>
                            </div> --}}

                            <div
                                class="form-group ms-0 btnz w-100 bg-white d-flex justify-content-between text-dark p-5 my-4">
                                <a class="btn btn-primary previous sandc"><svg xmlns="http://www.w3.org/2000/svg"
                                        focusable="false" role="img" fill="currentColor" viewBox="0 0 24 24"
                                        aria-hidden="true" class=" css-xbwdtc eac13zx0">
                                        <path
                                            d="M14.112 18.002c.2.2.52.204.716.008l.707-.707a.507.507 0 00-.009-.716L10.94 12l4.587-4.587c.2-.2.205-.521.01-.716l-.708-.708a.507.507 0 00-.716.01l-5.648 5.647c-.1.1-.148.234-.143.367.002.124.05.247.143.34l.001.001a.758.758 0 00.008.008l5.64 5.64z">
                                        </path>
                                    </svg> Back</a>
                                <a class="btn btn-primary next sandc">Save and continue</a>
                            </div>
                        </fieldset>
                        <fieldset id="personal_information" class="">
                            <div class="form-group ms-0  accInfoStl thrAccInfo w-100 bg-white text-dark p-5 my-4">
                                <legend>Add compensation
                                </legend>
                            </div>
                            <div class="form-group ms-0 accInfoStl w-100 bg-white text-dark p-5 my-4">
                                <label for="job_title" class="col-12 control-label p-0">What is the pay? </label>
                                <div class="mainPay">
                                    <div class="uptoMain upto"><label for="uptoLb" class="uptoMainLb"><span
                                                class="minSal minimumSalary">Minimum</span></label><span
                                            class=" css-1dplimc e6fjgti1"><span class="css-tm7u9k e6fjgti0"><span
                                                    aria-hidden="false" id="JobSalaryInputIcon1217"
                                                    class="css-1kq7m22 e1wnkr790">USD</span></span><input type="number"
                                                id="uptoLb" name="minimum_pay" autocomplete="off"
                                                class="css-1u34eqe e1jgz0i3" value=""
                                                aria-describedby="job-salary-input-error"></span></div>
                                    <span class="css-1j80wc6 e1wnkr790 strat to">to</span>
                                    <div class="uptoMain strat"><label for="minAmt" class="uptoMainLb"><span
                                                id="JobSalaryInputLabel1220"
                                                class="minSal minimumSalary">Maximum</span></label><span
                                            class=" css-1dplimc e6fjgti1"><span class="css-tm7u9k e6fjgti0"><span
                                                    aria-hidden="false" id="JobSalaryInputIcon1219"
                                                    class="css-1kq7m22 e1wnkr790">USD</span></span><input type="number"
                                                aria-invalid="true" id="minAmt" name="maximum_pay"
                                                aria-labelledby="JobSalaryInputLabel1220 JobSalaryInputIcon1219"
                                                aria-required="false" data-testid="job-salary-maximum" autocomplete="off"
                                                class="css-mrb7ky e1jgz0i3"
                                                aria-describedby="job-salary-input-error"></span>
                                    </div>
                                    <div class="css-tl71gl e1ttgm5y0"><label for="local.temp-salary.period"
                                            class="showPayLb">Rate</label>
                                        <div class=" showPaySelect"><select aria-invalid="false"
                                                id="local.temp-salary.period" name="pay_rate" class="showPaySelectMain">
                                                <option label="per hour" value="per_hour">per hour</option>
                                                <option label="per day" value="per_day">per day</option>
                                                <option label="per week" value="per_week">per week</option>
                                                <option label="per month" value="per_week">per c</option>
                                                <option label="per year" value="per_year">per year</option>
                                            </select><svg xmlns="http://www.w3.org/2000/svg" focusable="false"
                                                role="img" fill="currentColor" viewBox="0 0 24 24"
                                                class=" css-25kbax eac13zx0">
                                                <path
                                                    d="M18.002 9.888c.2-.2.204-.521.008-.716l-.707-.708a.506.506 0 00-.716.01L12 13.06 7.413 8.474a.507.507 0 00-.716-.01l-.708.707a.507.507 0 00.01.717l5.647 5.648c.1.1.234.148.367.143a.491.491 0 00.34-.144h.001l.008-.008 5.64-5.64z">
                                                </path>
                                            </svg></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group ms-0 accInfoStl w-100 bg-white text-dark p-5 my-4">
                                <label for="job_loc" class="col-12 control-label">Start Date
                                    <span class="text-danger"> *</span></label>
                                <div class="col-12 p-0">
                                    <input type="date" min="" class="form-control w-100 mb-2" id="datefield"
                                        name="start_date" placeholder="">
                                </div>
                            </div>
                            <div
                                class="form-group ms-0 btnz w-100 bg-white d-flex justify-content-between text-dark p-5 my-4">
                                <a class="btn btn-primary previous sandc"><svg xmlns="http://www.w3.org/2000/svg"
                                        focusable="false" role="img" fill="currentColor" viewBox="0 0 24 24"
                                        class=" css-xbwdtc eac13zx0">
                                        <path
                                            d="M14.112 18.002c.2.2.52.204.716.008l.707-.707a.507.507 0 00-.009-.716L10.94 12l4.587-4.587c.2-.2.205-.521.01-.716l-.708-.708a.507.507 0 00-.716.01l-5.648 5.647c-.1.1-.148.234-.143.367.002.124.05.247.143.34l.001.001a.758.758 0 00.008.008l5.64 5.64z">
                                        </path>
                                    </svg> Back</a>
                                <a class="btn btn-primary next sandc">Save and continue</a>
                            </div>
                        </fieldset>
                        <fieldset id="textEditorDesc" class="text-start">
                            <div class="form-group ms-0  accInfoStl forAccInfo w-100 bg-white text-dark p-5 my-4">

                                <legend>Describe the job

                                </legend>

                            </div>
                            <div class="form-group ms-0 accInfoStl w-100 bg-white text-dark p-5 my-4">
                                <label for="rec" class="col-12 control-label">Job description <span
                                        class="text-danger">
                                        *</span></label>
                                <div class="col-12">
                                    <div id="summernote" name="job_description"></div>
                                </div>
                            </div>
                            <div class="form-group ms-0 accInfoStl w-100 bg-white text-dark p-5 my-4" id="optQus">
                                <label for="job_title" class="col-12 control-label">Screening Questions (Optional)
                                </label>
                                <p>You can enter up to five questions that will be asked when the candidate applies for
                                    this
                                    vacancy.</p>
                                <div class="col-12">
                                    <p class="mb-2 p-0">Question:</p>
                                    <input type="text" class="form-control w-100 mb-2" name="screening_question"
                                        placeholder="Type your question here...">
                                </div>
                                <div id="fielda0">
                                    <div class="col-12 my-3" id="">
                                        <p class="mb-2 p-0">Answers:</p>
                                        <input type="text" class="form-control w-100 mb-2" name="question_answer[]"
                                            placeholder="Type your question here...">
                                        <input type="text" class="form-control w-100 mb-2" name="question_answer[]"
                                            placeholder="Type your question here...">
                                    </div>
                                </div>
                                <button id="add-more1" name="add-more" class="btn btn-primary">Add More</button>
                            </div>
                            <div class="form-group ms-0 accInfoStl w-100 bg-white text-dark p-5 my-4">
                                <label for="rec" class="col-12 control-label">Social Media Posting <span
                                        class="text-danger">
                                        *</span></label>
                                <div class="col-12 d-flex socialPP">
                                    <a href="//facebook.com" class="socialBtns w-25"><i class="fab fa-linkedin"></i>
                                        <p class="text-white ms-2 mb-0">Linkedin</p>
                                    </a>
                                    <a href="//facebook.com" class="socialBtns w-25"><i class="fab fa-facebook"></i>
                                        <p class="text-white ms-2 mb-0">Facebook</p>
                                    </a>
                                    <a href="//facebook.com" class="socialBtns w-25"><i class="fab fa-twitter-square"></i>
                                        <p class="text-white ms-2 mb-0">Twitter</p>
                                    </a>
                                    <a href="//facebook.com" class="socialBtns w-25"><i class="fab fa-instagram"></i>
                                        <p class="text-white ms-2 mb-0">Instagram</p>
                                    </a>
                                </div>
                            </div>

                            {{-- <div class="form-group ms-0 accInfoStl w-100 bg-white text-dark p-5 my-4">
                                <label for="rec" class="col-12 control-label fs-2">Recruiter Details </label>
                                <div class="mainRec">
                                    <div class="form-group ms-0 accInfoStl w-100 bg-white text-dark my-4">
                                        <label for="recName" class="col-12 control-label">Contact Name <span
                                                class="text-danger">
                                                *</span></label>
                                        <div class="col-12">
                                            <input type="text" class="form-control w-100 mb-2" id="recName"
                                                name="contact_name" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group ms-0 accInfoStl w-100 bg-white text-dark my-4">
                                        <label for="recEmail" class="col-12 control-label">Contact Email <span
                                                class="text-danger">
                                                *</span></label>
                                        <div class="col-12">
                                            <input type="text" class="form-control w-100 mb-2" id="recEmail"
                                                name="contact_email" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group ms-0 accInfoStl w-100 bg-white text-dark my-4">
                                        <label for="recTelephone" class="col-12 control-label">Contact Telephone </label>
                                        <div class="col-12">
                                            <input type="text" class="form-control w-100 mb-2" id="recTelephone"
                                                name="contact_telephone" placeholder="">
                                        </div>
                                    </div>
                                    
                                </div>
                            </div> --}}
                            <div
                                class="form-group ms-0 btnz w-100 bg-white d-flex justify-content-between text-dark p-5 my-4">
                                <a class="btn btn-primary previous sandc"><svg xmlns="http://www.w3.org/2000/svg"
                                        focusable="false" role="img" fill="currentColor" viewBox="0 0 24 24"
                                        class=" css-xbwdtc eac13zx0">
                                        <path
                                            d="M14.112 18.002c.2.2.52.204.716.008l.707-.707a.507.507 0 00-.009-.716L10.94 12l4.587-4.587c.2-.2.205-.521.01-.716l-.708-.708a.507.507 0 00-.716.01l-5.648 5.647c-.1.1-.148.234-.143.367.002.124.05.247.143.34l.001.001a.758.758 0 00.008.008l5.64 5.64z">
                                        </path>
                                    </svg> Back</a>
                                <div class="nxt">

                                    <button class="btn btn-success mx-3">Save the job as a template</button>
                                    <input type="submit" value="submit" class="btn btn-success next sandc">
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
