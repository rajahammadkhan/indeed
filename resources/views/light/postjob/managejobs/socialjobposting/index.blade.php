@extends('light.layouts.app')
@section('title')
    PostJob Form - {{config('app.dashboard')}}
@endsection
@section('content')
    <div class="container">
        <div class="col-lg-8 col-md-10 col-12 mx-auto">
            <form class="form-horizontal my-5" action="./modifyJob.html"  id="myform">

                <fieldset id="account_information" class="">
                    <div class="accInfoStl topAccInfo w-100 bg-white text-dark p-5 my-4">

                        <legend>Provide basic information
                        </legend>

                    </div>
                    <div class="form-group accInfoStl w-100 bg-white text-dark p-5 my-4">
                        <label for="job_title" class="col-12 control-label">Job title <span class="text-danger">
                                *</span></label>
                        <div class="col-12">
                            <input type="text" class="form-control w-100 mb-2" id="job_title" name="job_title"
                                   placeholder="">
                        </div>
                    </div>



                    <div class="form-group accInfoStl w-100 bg-white text-dark p-5 my-4">
                        <label for="job_loc" class="col-12 control-label">Where would you like to advertise this job?
                            <span class="text-danger"> *</span></label>
                        <div class="col-12">
                            <input type="text" class="form-control w-100 mb-2" id="job_loc" name="job_loc"
                                   placeholder="">
                        </div>
                    </div>
                    <div class="form-group btnz w-100 bg-white text-dark p-5 my-4">
                        <a class="btn btn-primary next sandc">Save and continue</a>
                    </div>



                </fieldset>

                <fieldset id="company_information" class="">
                    <div class="accInfoStl secAccInfo w-100 bg-white text-dark p-5 my-4">

                        <legend>Include details
                        </legend>

                    </div>
                    <div class="form-group accInfoStl typeChecks w-100 bg-white text-dark p-5 my-4">
                        <div class="">
                            <label for="job_title" class="col-12 control-label">What is the job type? <span
                                        class="text-danger">
                                    *</span></label>
                            <div class="fTime position-relative checkBoxesForm">
                                <div class="col-12 py-1">
                                    <div class="">
                                        <label for="fulltime" class="m-0">
                                            <div class="d-flex align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" focusable="false" role="img"
                                                     fill="currentColor" viewBox="0 0 20 20" aria-hidden="true"
                                                     class="hidden check">
                                                    <path
                                                            d="M17.069 5.935a.5.5 0 000-.708l-.354-.353a.5.5 0 00-.707 0l-8.483 8.483-3.533-3.532a.5.5 0 00-.707 0l-.353.353a.5.5 0 000 .707l3.532 3.533-.001.001.707.707a.499.499 0 00.71 0l.706-.707v-.001l8.483-8.483z">
                                                    </path>
                                                </svg>
                                                <div style="white-space: nowrap;  text-overflow: ellipsis;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" focusable="false" role="img"
                                                         fill="currentColor" viewBox="0 0 20 20" aria-hidden="false"
                                                         class="uncheck">
                                                        <path
                                                                d="M10.75 4.5a.5.5 0 00-.5-.5h-.5a.5.5 0 00-.5.5v4.75H4.5a.5.5 0 00-.5.5v.5a.5.5 0 00.5.5h4.75v4.75a.5.5 0 00.5.5h.5a.5.5 0 00.5-.5v-4.75h4.75a.5.5 0 00.5-.5v-.5a.5.5 0 00-.5-.5h-4.75V4.5z">
                                                        </path>
                                                    </svg>Full-time
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <input type="checkbox" class="">
                            </div>
                            <div class="pTime position-relative checkBoxesForm">
                                <div class="col-12 py-1">
                                    <div class="">
                                        <label for="fulltime" class="m-0">
                                            <div class="d-flex align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" focusable="false" role="img"
                                                     fill="currentColor" viewBox="0 0 20 20" aria-hidden="true"
                                                     class="hidden check">
                                                    <path
                                                            d="M17.069 5.935a.5.5 0 000-.708l-.354-.353a.5.5 0 00-.707 0l-8.483 8.483-3.533-3.532a.5.5 0 00-.707 0l-.353.353a.5.5 0 000 .707l3.532 3.533-.001.001.707.707a.499.499 0 00.71 0l.706-.707v-.001l8.483-8.483z">
                                                    </path>
                                                </svg>
                                                <div style="white-space: nowrap;  text-overflow: ellipsis;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" focusable="false" role="img"
                                                         fill="currentColor" viewBox="0 0 20 20" aria-hidden="false"
                                                         class="uncheck">
                                                        <path
                                                                d="M10.75 4.5a.5.5 0 00-.5-.5h-.5a.5.5 0 00-.5.5v4.75H4.5a.5.5 0 00-.5.5v.5a.5.5 0 00.5.5h4.75v4.75a.5.5 0 00.5.5h.5a.5.5 0 00.5-.5v-4.75h4.75a.5.5 0 00.5-.5v-.5a.5.5 0 00-.5-.5h-4.75V4.5z">
                                                        </path>
                                                    </svg>Part-time
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <input type="checkbox" class="">
                            </div>
                            <div class="contract position-relative checkBoxesForm">
                                <div class="col-12 py-1">
                                    <div class="">
                                        <label for="fulltime" class="m-0">
                                            <div class="d-flex align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" focusable="false" role="img"
                                                     fill="currentColor" viewBox="0 0 20 20" aria-hidden="true"
                                                     class="hidden check">
                                                    <path
                                                            d="M17.069 5.935a.5.5 0 000-.708l-.354-.353a.5.5 0 00-.707 0l-8.483 8.483-3.533-3.532a.5.5 0 00-.707 0l-.353.353a.5.5 0 000 .707l3.532 3.533-.001.001.707.707a.499.499 0 00.71 0l.706-.707v-.001l8.483-8.483z">
                                                    </path>
                                                </svg>
                                                <div style="white-space: nowrap;  text-overflow: ellipsis;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" focusable="false" role="img"
                                                         fill="currentColor" viewBox="0 0 20 20" aria-hidden="false"
                                                         class="uncheck">
                                                        <path
                                                                d="M10.75 4.5a.5.5 0 00-.5-.5h-.5a.5.5 0 00-.5.5v4.75H4.5a.5.5 0 00-.5.5v.5a.5.5 0 00.5.5h4.75v4.75a.5.5 0 00.5.5h.5a.5.5 0 00.5-.5v-4.75h4.75a.5.5 0 00.5-.5v-.5a.5.5 0 00-.5-.5h-4.75V4.5z">
                                                        </path>
                                                    </svg>Contract
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <input type="checkbox" class="">
                            </div>
                            <div class="iship position-relative checkBoxesForm">
                                <div class="col-12 py-1">
                                    <div class="">
                                        <label for="fulltime" class="m-0">
                                            <div class="d-flex align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" focusable="false" role="img"
                                                     fill="currentColor" viewBox="0 0 20 20" aria-hidden="true"
                                                     class="hidden check">
                                                    <path
                                                            d="M17.069 5.935a.5.5 0 000-.708l-.354-.353a.5.5 0 00-.707 0l-8.483 8.483-3.533-3.532a.5.5 0 00-.707 0l-.353.353a.5.5 0 000 .707l3.532 3.533-.001.001.707.707a.499.499 0 00.71 0l.706-.707v-.001l8.483-8.483z">
                                                    </path>
                                                </svg>
                                                <div style="white-space: nowrap;  text-overflow: ellipsis;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" focusable="false" role="img"
                                                         fill="currentColor" viewBox="0 0 20 20" aria-hidden="false"
                                                         class="uncheck">
                                                        <path
                                                                d="M10.75 4.5a.5.5 0 00-.5-.5h-.5a.5.5 0 00-.5.5v4.75H4.5a.5.5 0 00-.5.5v.5a.5.5 0 00.5.5h4.75v4.75a.5.5 0 00.5.5h.5a.5.5 0 00.5-.5v-4.75h4.75a.5.5 0 00.5-.5v-.5a.5.5 0 00-.5-.5h-4.75V4.5z">
                                                        </path>
                                                    </svg>Internship
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <input type="checkbox" class="">
                            </div>
                            <div class="fresher position-relative checkBoxesForm">
                                <div class="col-12 py-1">
                                    <div class="">
                                        <label for="fulltime" class="m-0">
                                            <div class="d-flex align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" focusable="false" role="img"
                                                     fill="currentColor" viewBox="0 0 20 20" aria-hidden="true"
                                                     class="hidden check">
                                                    <path
                                                            d="M17.069 5.935a.5.5 0 000-.708l-.354-.353a.5.5 0 00-.707 0l-8.483 8.483-3.533-3.532a.5.5 0 00-.707 0l-.353.353a.5.5 0 000 .707l3.532 3.533-.001.001.707.707a.499.499 0 00.71 0l.706-.707v-.001l8.483-8.483z">
                                                    </path>
                                                </svg>
                                                <div style="white-space: nowrap;  text-overflow: ellipsis;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" focusable="false" role="img"
                                                         fill="currentColor" viewBox="0 0 20 20" aria-hidden="false"
                                                         class="uncheck">
                                                        <path
                                                                d="M10.75 4.5a.5.5 0 00-.5-.5h-.5a.5.5 0 00-.5.5v4.75H4.5a.5.5 0 00-.5.5v.5a.5.5 0 00.5.5h4.75v4.75a.5.5 0 00.5.5h.5a.5.5 0 00.5-.5v-4.75h4.75a.5.5 0 00.5-.5v-.5a.5.5 0 00-.5-.5h-4.75V4.5z">
                                                        </path>
                                                    </svg>Fresher
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <input type="checkbox" class="">
                            </div>

                        </div>
                    </div>

                    <div id="">
                        <div class="form-group accInfoStl w-100 bg-white text-dark p-5 my-4" id="optQus">
                            <label for="job_title" class="col-12 control-label">Screening Questions (Optional) </label>
                            <p>You can enter up to five questions that will be asked when the candidate applies for this
                                vacancy.</p>
                            <div class="col-12">
                                <p class="mb-2 p-0">Question:</p>
                                <input type="text" class="form-control w-100 mb-2" name="optional_question"
                                       placeholder="Type your question here...">
                            </div>
                            <div id="fielda0">
                                <div class="col-12 my-3" id="">
                                    <p class="mb-2 p-0">Answers:</p>
                                    <input type="text" class="form-control w-100 mb-2" name="optional_question"
                                           placeholder="Type your question here...">
                                    <input type="text" class="form-control w-100 mb-2" name="optional_question"
                                           placeholder="Type your question here...">
                                </div>
                            </div>
                            <button id="add-more1" name="add-more" class="btn btn-primary">Add More</button>
                        </div>
                    </div>

                    <div class="form-group btnz w-100 bg-white d-flex justify-content-between text-dark p-5 my-4">
                        <a class="btn btn-primary previous sandc"><svg xmlns="http://www.w3.org/2000/svg"
                                                                       focusable="false" role="img" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"
                                                                       class=" css-xbwdtc eac13zx0">
                                <path
                                        d="M14.112 18.002c.2.2.52.204.716.008l.707-.707a.507.507 0 00-.009-.716L10.94 12l4.587-4.587c.2-.2.205-.521.01-.716l-.708-.708a.507.507 0 00-.716.01l-5.648 5.647c-.1.1-.148.234-.143.367.002.124.05.247.143.34l.001.001a.758.758 0 00.008.008l5.64 5.64z">
                                </path>
                            </svg> Back</a>
                        <a class="btn btn-primary next sandc">Save and continue</a>
                    </div>
                </fieldset>

                <fieldset id="personal_information" class="">
                    <div class="accInfoStl thrAccInfo w-100 bg-white text-dark p-5 my-4">
                        <legend>Add compensation
                        </legend>
                    </div>
                    <div class="form-group accInfoStl w-100 bg-white text-dark p-5 my-4">
                        <label for="job_title" class="col-12 control-label p-0">What is the pay? </label>
                        <div class="mainPay">
                            <!-- <div class="showPayMain"><label for="showPay" class="showPayLb">Show pay by</label>
                                <div class=" showPaySelect">
                                    <select aria-invalid="false" id="showPay" name="showPay"
                                        class="showPaySelectMain selectPkr">
                                        <option label="Range" value="RANGE">Range</option>
                                        <option label="Starting amount" value="STARTING_AT">Starting amount</option>
                                        <option label="Maximum amount" value="UP_TO">Maximum amount</option>
                                        <option label="Exact amount" value="EXACT_RATE">Exact amount</option>
                                    </select>
                                    <svg xmlns="http://www.w3.org/2000/svg" focusable="false" role="img"
                                        fill="currentColor" viewBox="0 0 24 24" class=" css-25kbax eac13zx0">
                                        <path
                                            d="M18.002 9.888c.2-.2.204-.521.008-.716l-.707-.708a.506.506 0 00-.716.01L12 13.06 7.413 8.474a.507.507 0 00-.716-.01l-.708.707a.507.507 0 00.01.717l5.647 5.648c.1.1.234.148.367.143a.491.491 0 00.34-.144h.001l.008-.008 5.64-5.64z">
                                        </path>
                                    </svg>
                                </div>
                            </div> -->


                            <div class="uptoMain upto"><label for="uptoLb" class="uptoMainLb"><span
                                            class="minSal minimumSalary">Minimum</span></label><span
                                        class=" css-1dplimc e6fjgti1"><span class="css-tm7u9k e6fjgti0"><span
                                                aria-hidden="false" id="JobSalaryInputIcon1217"
                                                class="css-1kq7m22 e1wnkr790">PKR</span></span><input id="uptoLb"
                                                                                                      name="uptoLb" autocomplete="off" class="css-1u34eqe e1jgz0i3" value=""
                                                                                                      aria-describedby="job-salary-input-error"></span></div>
                            <span class="css-1j80wc6 e1wnkr790 strat to">to</span>
                            <div class="uptoMain strat"><label for="minAmt" class="uptoMainLb"><span
                                            id="JobSalaryInputLabel1220"
                                            class="minSal minimumSalary">Maximum</span></label><span
                                        class=" css-1dplimc e6fjgti1"><span class="css-tm7u9k e6fjgti0"><span
                                                aria-hidden="false" id="JobSalaryInputIcon1219"
                                                class="css-1kq7m22 e1wnkr790">PKR</span></span><input aria-invalid="true"
                                                                                                      id="minAmt" name="minAmt"
                                                                                                      aria-labelledby="JobSalaryInputLabel1220 JobSalaryInputIcon1219"
                                                                                                      aria-required="false" data-testid="job-salary-maximum" autocomplete="off"
                                                                                                      class="css-mrb7ky e1jgz0i3" aria-describedby="job-salary-input-error"></span>
                            </div>
                            <div class="css-tl71gl e1ttgm5y0"><label for="local.temp-salary.period"
                                                                     class="showPayLb">Rate</label>
                                <div class=" showPaySelect"><select aria-invalid="false" id="local.temp-salary.period"
                                                                    name="local.temp-salary.period" class="showPaySelectMain">
                                        <option label="per hour" value="HOUR">per hour</option>
                                        <option label="per day" value="DAY">per day</option>
                                        <option label="per week" value="WEEK">per week</option>
                                        <option label="per month" value="MONTH">per month</option>
                                        <option label="per year" value="YEAR">per year</option>
                                    </select><svg xmlns="http://www.w3.org/2000/svg" focusable="false" role="img"
                                                  fill="currentColor" viewBox="0 0 24 24" class=" css-25kbax eac13zx0">
                                        <path
                                                d="M18.002 9.888c.2-.2.204-.521.008-.716l-.707-.708a.506.506 0 00-.716.01L12 13.06 7.413 8.474a.507.507 0 00-.716-.01l-.708.707a.507.507 0 00.01.717l5.647 5.648c.1.1.234.148.367.143a.491.491 0 00.34-.144h.001l.008-.008 5.64-5.64z">
                                        </path>
                                    </svg></div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group accInfoStl w-100 bg-white text-dark p-5 my-4">
                        <label for="job_loc" class="col-12 control-label">Start Date
                            <span class="text-danger"> *</span></label>
                        <div class="col-12 p-0">
                            <input type="date" min="" class="form-control w-100 mb-2" id="datefield" name="datefield"
                                   placeholder="">
                        </div>
                    </div>
                    <div class="form-group btnz w-100 bg-white d-flex justify-content-between text-dark p-5 my-4">
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

                <fieldset id="textEditorDesc" class="">
                    <div class="accInfoStl forAccInfo w-100 bg-white text-dark p-5 my-4">

                        <legend>Describe the job

                        </legend>

                    </div>
                    <div class="form-group accInfoStl w-100 bg-white text-dark p-5 my-4">
                        <label for="rec" class="col-12 control-label">Job description <span class="text-danger">
                                *</span></label>
                        <div class="col-12">
                            <div id="summernote"></div>
                        </div>
                    </div>
                    <div class="form-group accInfoStl w-100 bg-white text-dark p-5 my-4">
                        <label for="rec" class="col-12 control-label fs-2">Recruiter Details </label>
                        <div class="mainRec">
                            <div class="form-group accInfoStl w-100 bg-white text-dark my-4">
                                <label for="recName" class="col-12 control-label">Contact Name <span
                                            class="text-danger">
                                        *</span></label>
                                <div class="col-12">
                                    <input type="text" class="form-control w-100 mb-2" id="recName" name="recName"
                                           placeholder="">
                                </div>
                            </div>
                            <div class="form-group accInfoStl w-100 bg-white text-dark my-4">
                                <label for="recEmail" class="col-12 control-label">Contact Email <span
                                            class="text-danger">
                                        *</span></label>
                                <div class="col-12">
                                    <input type="text" class="form-control w-100 mb-2" id="recEmail" name="recEmail"
                                           placeholder="">
                                </div>
                            </div>
                            <div class="form-group accInfoStl w-100 bg-white text-dark my-4">
                                <label for="recTelephone" class="col-12 control-label">Contact Telephone </label>
                                <div class="col-12">
                                    <input type="text" class="form-control w-100 mb-2" id="recTelephone"
                                           name="recTelephone" placeholder="">
                                </div>
                            </div>
                            <!-- <div class="form-group accInfoStl w-100 bg-white text-dark my-4">
                                <label for="recURL" class="col-12 control-label">Video URL </label>
                                <div class="col-12">
                                    <input type="text" class="form-control w-100 mb-2" id="recURL" name="recURL"
                                        placeholder="">
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="form-group btnz w-100 bg-white d-flex justify-content-between text-dark p-5 my-4">
                        <a class="btn btn-primary previous sandc"><svg xmlns="http://www.w3.org/2000/svg"
                                                                       focusable="false" role="img" fill="currentColor" viewBox="0 0 24 24"
                                                                       class=" css-xbwdtc eac13zx0">
                                <path
                                        d="M14.112 18.002c.2.2.52.204.716.008l.707-.707a.507.507 0 00-.009-.716L10.94 12l4.587-4.587c.2-.2.205-.521.01-.716l-.708-.708a.507.507 0 00-.716.01l-5.648 5.647c-.1.1-.148.234-.143.367.002.124.05.247.143.34l.001.001a.758.758 0 00.008.008l5.64 5.64z">
                                </path>
                            </svg> Back</a>
                        <input type="submit" value="submit" class="btn btn-success next sandc">
                    </div>
                </fieldset>

            </form>
        </div>
    </div>
@endsection