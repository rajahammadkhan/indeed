@extends('frontend.layouts.master')
@section('title')
    EDIT PostJob Form - {{ config('app.dashboard') }}
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

        .main_img {
            object-fit: contain;
            top: 0;
            left: 0;
        }

        .main_file {
            top: 0;
            left: 0;
            opacity: 0;
            z-index: 2;
        }
    </style>
    <section class="bg-main">
        <div class="container ">
            <div class="row">
                <div class="col-lg-8 col-md-10 col-12 mx-auto">
                    <form action="" method="POST" enctype="multipart/form-data" id="myform">
                        @csrf
                        @method('PUT')
                        <fieldset id="account_information" class="">
                            <div class="form-group ms-0 accInfoStl topAccInfo w-100 bg-white text-dark p-5 my-4">

                                <legend>Provide basic information
                                </legend>

                            </div>
                            <div class="form-group ms-0 accInfoStl w-100 bg-white text-dark p-5 my-4">
                                <label for="email_address1">Status
                                    <span class="text-danger"> *</span></label>
                                <select class="form-control select2" name="status" id="Quiz-type"
                                        data-placeholder="Select">
                                    <option {{ $post_job->status == 1 ? 'Selected' : '' }}  value=1>Publish</option>
                                    <option {{ $post_job->status == 0 ? 'Selected' : '' }}  value=0>draft</option>
                                </select>
                            </div>
                            <div class="form-group ms-0 accInfoStl w-100 bg-white text-dark p-5 my-4">
                                <label for="job_title" class="col-12 control-label">Job title <span class="text-danger">
                                        *</span></label>
                                <div class="col-12">
                                    <input type="text" class="form-control w-100 mb-2" value="{{$post_job->job_title}}"
                                           id="job_title" name="job_title"
                                           placeholder="">
                                </div>
                            </div>

                            <div class="form-group ms-0 accInfoStl w-100 bg-white text-dark p-5 my-4">
                                <label for="job_loc" class="col-12 control-label">Job Status
                                    <span class="text-danger"> *</span></label>
                                <div class="col-12">
                                    <select name="job_status" class="dropdownMain-menu" style="display: none;">
                                        <option {{ $post_job->job_status == 'Paused' ? 'Selected' : '' }} value="Paused">
                                            Paused
                                        </option>
                                        <option {{ $post_job->job_status == 'Open' ? 'Selected' : '' }} value="Open">
                                            Open
                                        </option>
                                        <option {{ $post_job->job_status == 'Closed' ? 'Selected' : '' }} value="Closed">
                                            Closed
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group ms-0 accInfoStl w-100 bg-white text-dark p-5 my-4">
                                <label for="job_loc" class="col-12 control-label">Job Type
                                    <span class="text-danger"> *</span></label>
                                <div class="col-12">
                                    <select name="job_type_id" class="dropdownMain-menu" style="display: none;">
                                        @foreach($job_type as $job)
                                            <option {{$post_job->job_type_id===$job->id?'selected':''}} value="{{$job->job_type_id}}">{{$job->job_name}}</option>
                                        @endforeach
                                    </select>
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

                            <div class="form-group ms-0 accInfoStl w-100 bg-white text-dark p-5 my-4">
                                <label for="job_loc" class="col-12 control-label">Industry
                                    <span class="text-danger"> *</span></label>
                                <div class="col-12">
                                    <select name="industry_id" class="dropdownMain-menu" style="display: none;">
                                        @foreach($industry as $indus)
                                            <option {{$post_job->industry_id===$indus->id?'selected':''}} value="{{$indus->industry_id}}">{{$indus->industry_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group ms-0 accInfoStl w-100 bg-white text-dark p-5 my-4">
                                <label for="job_loc" class="col-12 control-label">Department
                                    <span class="text-danger"> *</span></label>
                                <div class="col-12">
                                    <select name="department_id" class="dropdownMain-menu" style="display: none;">
                                        @foreach($department as $depart)
                                            <option {{$post_job->department_id===$depart->id?'selected':''}} value="{{$depart->department_id}}">{{$depart->depart_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group ms-0 accInfoStl w-100 bg-white text-dark p-5 my-4">
                                <label for="job_loc" class="col-12 control-label">Location
                                    <span class="text-danger"> *</span></label>
                                <div class="col-12">
                                    <select name="location_id" class="dropdownMain-menu" style="display: none;">
                                        @foreach($location as $locat)
                                            <option {{$post_job->location_id===$locat->id?'selected':''}} value="{{$locat->location_id}}">{{$locat->location_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group ms-0 accInfoStl w-100 bg-white text-dark p-5 my-4">
                                <label for="job_loc" class="col-12 control-label">Postcode
                                    <span class="text-danger"> *</span></label>
                                <div class="col-12">


                                    <input type="text" class="form-control w-100 mb-2" id="loc_postcode"
                                           name="postcode" value="{{$post_job->postcode}}"
                                           placeholder="Location and Postcode">
                                </div>
                            </div>
                            <div class="form-group ms-0 accInfoStl w-100 bg-white text-dark p-5 my-4">
                                <div class="col-12">
                                    <label>
                                        <input type="checkbox"
                                               {{$post_job->advertise_job=='1'?'checked':''}} name="advertise_job"
                                               value="1">
                                        <span style="font-size: 13px; text-transform: capitalize;">advertise jobs to EU
                                            candidates with right to work in the UK</span>
                                    </label>
                                </div>
                            </div>
                            <div
                                    class="form-group ms-0 btnz w-100 bg-white d-flex justify-content-between text-dark p-5 my-4">
                                <a class="btn btn-primary previous sandc">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         focusable="false" role="img" fill="currentColor" viewBox="0 0 24 24"
                                         aria-hidden="true" class=" css-xbwdtc eac13zx0">
                                        <path
                                                d="M14.112 18.002c.2.2.52.204.716.008l.707-.707a.507.507 0 00-.009-.716L10.94 12l4.587-4.587c.2-.2.205-.521.01-.716l-.708-.708a.507.507 0 00-.716.01l-5.648 5.647c-.1.1-.148.234-.143.367.002.124.05.247.143.34l.001.001a.758.758 0 00.008.008l5.64 5.64z">
                                        </path>
                                    </svg>
                                    Back</a>
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
                                                        class="css-1kq7m22 e1wnkr790">USD</span></span><input
                                                    type="number"
                                                    id="uptoLb" value="{{$post_job->minimum_pay}}" name="minimum_pay"
                                                    autocomplete="off"
                                                    class="css-1u34eqe e1jgz0i3" value=""
                                                    aria-describedby="job-salary-input-error"></span></div>
                                    <span class="css-1j80wc6 e1wnkr790 strat to">to</span>
                                    <div class="uptoMain strat"><label for="minAmt" class="uptoMainLb"><span
                                                    id="JobSalaryInputLabel1220"
                                                    class="minSal minimumSalary">Maximum</span></label><span
                                                class=" css-1dplimc e6fjgti1"><span class="css-tm7u9k e6fjgti0"><span
                                                        aria-hidden="false" id="JobSalaryInputIcon1219"
                                                        class="css-1kq7m22 e1wnkr790">USD</span></span><input
                                                    type="number" value="{{$post_job->maximum_pay}}"
                                                    aria-invalid="true" id="minAmt" name="maximum_pay"
                                                    aria-labelledby="JobSalaryInputLabel1220 JobSalaryInputIcon1219"
                                                    aria-required="false" data-testid="job-salary-maximum"
                                                    autocomplete="off"
                                                    class="css-mrb7ky e1jgz0i3"
                                                    aria-describedby="job-salary-input-error"></span>
                                    </div>
                                    <div class="css-tl71gl e1ttgm5y0"><label for="local.temp-salary.period"
                                                                             class="showPayLb">Rate</label>
                                        <div class=" showPaySelect"><select aria-invalid="false"
                                                                            id="local.temp-salary.period"
                                                                            name="pay_rate" class="showPaySelectMain">
                                                <option {{$post_job->pay_rate=='per hour'?'selected':''}} label="per hour"
                                                        value="per hour">per hour
                                                </option>
                                                <option {{$post_job->pay_rate=='per day'?'selected':''}} label="per day"
                                                        value="per day">per day
                                                </option>
                                                <option {{$post_job->pay_rate=='per week'?'selected':''}} label="per week"
                                                        value="per week">per week
                                                </option>
                                                <option {{$post_job->pay_rate=='per month'?'selected':''}} label="per month"
                                                        value="per month">per c
                                                </option>
                                                <option {{$post_job->pay_rate=='per year'?'selected':''}} label="per year"
                                                        value="per year">per year
                                                </option>
                                            </select>
                                            <svg xmlns="http://www.w3.org/2000/svg" focusable="false"
                                                 role="img" fill="currentColor" viewBox="0 0 24 24"
                                                 class=" css-25kbax eac13zx0">
                                                <path
                                                        d="M18.002 9.888c.2-.2.204-.521.008-.716l-.707-.708a.506.506 0 00-.716.01L12 13.06 7.413 8.474a.507.507 0 00-.716-.01l-.708.707a.507.507 0 00.01.717l5.647 5.648c.1.1.234.148.367.143a.491.491 0 00.34-.144h.001l.008-.008 5.64-5.64z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group ms-0 accInfoStl w-100 bg-white text-dark p-5 my-4">
                                <label for="job_loc" class="col-12 control-label">Start Date
                                    <span class="text-danger"> *</span></label>
                                <div class="col-12 p-0">
                                    <input type="date" min="" class="form-control w-100 mb-2" id="datefield"
                                           name="start_date" value="{{$post_job->start_date}}" placeholder="">
                                </div>
                            </div>
                            <div
                                    class="form-group ms-0 btnz w-100 bg-white d-flex justify-content-between text-dark p-5 my-4">
                                <a class="btn btn-primary previous sandc">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         focusable="false" role="img" fill="currentColor" viewBox="0 0 24 24"
                                         class=" css-xbwdtc eac13zx0">
                                        <path
                                                d="M14.112 18.002c.2.2.52.204.716.008l.707-.707a.507.507 0 00-.009-.716L10.94 12l4.587-4.587c.2-.2.205-.521.01-.716l-.708-.708a.507.507 0 00-.716.01l-5.648 5.647c-.1.1-.148.234-.143.367.002.124.05.247.143.34l.001.001a.758.758 0 00.008.008l5.64 5.64z">
                                        </path>
                                    </svg>
                                    Back</a>
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
                                    <textarea name="job_description"
                                              id="summernote">{{$post_job->job_description}} </textarea>
                                    {{--<input id="summernote" name="job_description"
                                              value="{{$post_job->job_description}}" >--}}

                                </div>
                            </div>
                            <div class="form-group ms-0 accInfoStl w-100 bg-white text-dark p-5 my-4">
                                <label class="col-12 control-label">Job Post Image<span
                                            class="text-danger">
                                        </span></label>
                                {{--                                <div class="row image-box">--}}
                                {{--                                    <div class="col">--}}
                                {{--                                        <div class="main_container m-3">--}}
                                {{--                                            <div class="main imagebox position-relative rounded-3 overflow-hidden">--}}
                                {{--                                                <div class="select_img d-flex justify-content-center align-items-center">--}}
                                {{--                                                    <div class="dz-message p-3 text-center">--}}
                                {{--                                                        <div class="drag-icon-cph">--}}
                                {{--                                                            <i class="material-icons"--}}
                                {{--                                                               style="font-size: 35px">touch_app</i>--}}
                                {{--                                                        </div>--}}
                                {{--                                                        <h3>Click to upload.</h3>--}}
                                {{--                                                    </div>--}}
                                {{--                                                </div>--}}
                                {{--                                                <input type="file" name="image" accept=".jpg,.gif,.png,.webp"--}}
                                {{--                                                       class="main_file w-100 h-100 position-absolute  opacity-0"/>--}}
                                {{--                                                <div class="img-thumb">--}}
                                {{--                                                    @if($media == null)--}}
                                {{--                                                    @else--}}
                                {{--                                                        <img class="main_img d-block w-100 h-100 position-absolute"--}}
                                {{--                                                             src="{{asset('images/media'.'/'.$media->image)}}" alt="">--}}
                                {{--                                                    @endif--}}
                                {{--                                                </div>--}}

                                {{--                                            </div>--}}
                                {{--                                            @if($media == null)--}}

                                {{--                                            @else--}}
                                {{--                                                <a class="btn mt-3 remove_clone fw-normal border-0 shadow-none"--}}
                                {{--                                                   data-id="{{$media->id}}">Remove</a>--}}
                                {{--                                            @endif--}}

                                {{--                                        </div>--}}
                                {{--                                    </div>--}}

                                {{--                                </div>--}}


                                <div class="multiimage">
                                    <div class="row wow-remove my-2">
                                        <div class="col-12">
                                            <div class="main_container">
                                                <div class="main imagebox position-relative rounded-3 overflow-hidden">
                                                    <div class="select_img d-flex justify-content-center align-items-center">
                                                        <div class="dz-message p-3 text-center">
                                                            <div class="drag-icon-cph">
                                                                <i class="material-icons" style="font-size: 35px">touch_app</i>
                                                            </div>
                                                            <h3>Click to upload.</h3>
                                                        </div>
                                                    </div>
                                                    <input type="file" name="image" accept="image/*"
                                                           class="main_file w-100 h-100 position-absolute  opacity-0"/>
                                                    <div class="img-thumb">
                                                        @if($media == null)
                                                        @else
                                                            <img class="main_img d-block w-100 h-100 position-absolute"
                                                                 src="{{asset('images/media'.'/'.$media->image)}}"
                                                                 alt="">
                                                        @endif
                                                    </div>
                                                </div>
                                                <a data-id="{{$media->id}}"
                                                   class="btn mt-3  fw-normal remove_clone border-0 shadow-none">Remove</a>

                                            </div>
                                        </div>
                                    </div>
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
                                           placeholder="Type your question here..."
                                           value="{{$post_job->screening_question}}">
                                </div>
                                <div id="fielda0">
                                    <div class="col-12 my-3" id="">
                                        <p class="mb-2 p-0">Answers:</p>

                                        @foreach(json_decode($post_job->question_answer) as $val)
                                            <input type="text" class="form-control w-100 mb-2" value="{{$val}}"
                                                   name="question_answer[]"
                                                   placeholder="Type your question here...">
                                        @endforeach


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
                                    <a href="//facebook.com" class="socialBtns w-25"><i
                                                class="fab fa-twitter-square"></i>
                                        <p class="text-white ms-2 mb-0">Twitter</p>
                                    </a>
                                    <a href="//facebook.com" class="socialBtns w-25"><i class="fab fa-instagram"></i>
                                        <p class="text-white ms-2 mb-0">Instagram</p>
                                    </a>
                                </div>
                            </div>
                            <div
                                    class="form-group ms-0 btnz w-100 bg-white d-flex justify-content-between text-dark p-5 my-4">
                                <a class="btn btn-primary previous sandc">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         focusable="false" role="img" fill="currentColor" viewBox="0 0 24 24"
                                         class=" css-xbwdtc eac13zx0">
                                        <path
                                                d="M14.112 18.002c.2.2.52.204.716.008l.707-.707a.507.507 0 00-.009-.716L10.94 12l4.587-4.587c.2-.2.205-.521.01-.716l-.708-.708a.507.507 0 00-.716.01l-5.648 5.647c-.1.1-.148.234-.143.367.002.124.05.247.143.34l.001.001a.758.758 0 00.008.008l5.64 5.64z">
                                        </path>
                                    </svg>
                                    Back</a>
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
    <script>


        $(document).ready(function () {
            var maxField = 10; //Input fields increment limitation
            var wrapper = $('.team_main'); //Input field wrapper
            var fieldHTML = jQuery('.cloner .row');
            var fieldHTML2 = '<a href="javascript:void(0);" class="remove_button btn btn-dark mx-1">Cancel</a>';
            var x = 1; //Initial field counter is 1


            //Once remove button is clicked
            $(document).on('click', '.remove_clone', function (e) {
                $(this).parents('.wow-remove').find('img').remove(); //Remove field html
                if ($(".multiimage .row").length == 0) {
                    $('.multiimage').append($(fieldHTML).clone());

                }

            });
        });


        $(document).ready(function () {


            //Once remove button is clicked


            if (window.File && window.FileList && window.FileReader) {
                $(document).on("change", '.main_file', function (e) {

                    var img = $(this).parents(".imagebox").find(".img-thumb");
                    var btn = $(this);
                    var files = e.target.files,
                        filesLength = files.length;
                    for (var i = 0; i < filesLength; i++) {
                        btn.parents(".main_container").find(".remove").css({display: "flex"});
                        var f = files[i];
                        var fileReader = new FileReader();
                        fileReader.onload = function (e) {
                            var file = e.target;
                            console.log(file);
                            $(img).html(
                                `<img class="main_img d-block w-100 h-100 position-absolute" src="${e.target.result}">`
                            );
                            // $(".remove").click(function () {
                            //     this.style.display = "none";
                            //     $(this).parents(".main_container").find(".main_img").remove();
                            //     file.value = "";
                            // });
                        };
                        fileReader.readAsDataURL(f);
                    }
                    console.log(files);
                });
            } else {
                alert("Your browser doesn't support to File API");
            }
        });

    </script>
@endsection