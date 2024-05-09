@extends('frontend.layouts.master')
@section('title')
    Applied Job Form - {{ config('app.dashboard') }}
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

        .main_file {
            height: 100% !important;
            top: 0;
            opacity: 0;
        }
    </style>
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
         .main_file {
             height: 100%!important;
             top: 0;
             opacity: 0;
         }
    </style><style>

.main_img {
    top: 0;
    left: 0;
    z-index: inherit;
    object-fit: contain;
    background: white;
}

.select_img {
    /* width: 300px; */
    height: 300px;
    background: #eee !important;
}

.select_img .select_btn {
    padding: 3px 7px;
    border-radius: 7px;
    background-color: #3b589d1c;
    color: #3b589d;
    font-size: 14px;
    font-weight: 600;
}

.main_file {
    top: 0;
    left: 0;
    z-index: 5;
    opacity: 0 !important;
    background:  transparent;
}


.main {
    transition: .3s;
    border: 2px dotted #8f8f8f82;
    width: 100%;
}

.main:hover {
    border-radius: 7px;
    border: 2px dotted #3b589d;
    background-color: #3b589d0e;
}

.remove {
    display: none;
}

</style>
    <section class="bg-main">
        <div class="container ">
            <div class="row">
                <div class="col-lg-8 col-md-10 col-12 mx-auto">
                    <form action="{{ route('applied-job.store') }}" method="POST" enctype="multipart/form-data" id="myform">
                        @csrf
                        <fieldset id="account_information" class="">


                            <div class="form-group ms-0 accInfoStl topAccInfo w-100 bg-white text-dark p-5 my-4">
                                <legend> Apply to Early stage startup
                                </legend>
                            </div>
                            <div class="form-group ms-0 accInfoStl w-100 bg-white text-dark p-5 my-4">
                                <label for="email_address1">{{$user->name}}
                                </label>
                                <label for="email_address1"> Software Engineer C++ / Java
                                </label>
                                <label for="email_address1"> Karachi
                                </label>

                            </div>
                            <div class="form-group ms-0 accInfoStl w-100 bg-white text-dark p-5 my-4">
                                <label for="email_address1">Email address
                                    <span class="text-danger"> *</span></label>
                                <select class="form-control select2"name="user_email" id="">
                                    <option value="{{$user->email}}">
                                        {{$user->email}}</option>
                                </select>
                            </div>
                            <div class="form-group ms-0 accInfoStl w-100 bg-white text-dark p-5 my-4">
                                <label for="email_address1">Phone country code
                                    <span class="text-danger"> *</span></label>
                                <select class="form-control select2" name="country_code" id="">
                                    <option selected disabled>Select an option</option>
                                    <option value="Afghanistan(+93)">Afghanistan (+93)</option>
                                    <option value="Australia(+61)">Australia (+61)</option>
                                    <option value="Canada(+1)">Canada (+1)</option>
                                    <option value="China(+86)">China (+86)</option>
                                    <option value="India(+91)">India (+91)</option>
                                    <option value="Indonesia(+62)">Indonesia (+62)</option>
                                    <option value="Iran(+98)">Iran (+98)</option>
                                    <option value="Iraq(+964)">Iraq (+964)</option>
                                    <option value="Pakistan(+92)">Pakistan (+92)</option>
                                    <option value="Zimbabwe(+263)">Zimbabwe (+263)</option>
                                </select>
                            </div>
                            <div class="form-group ms-0 accInfoStl w-100 bg-white text-dark p-5 my-4">
                                <label for="job_title" class="col-12 control-label">Mobile phone number <span
                                        class="text-danger">
                                        *</span></label>
                                <div class="col-12">
                                    <input type="text" class="form-control w-100 mb-2" id="job_title" name="mobile_phone"
                                        placeholder="">
                                </div>
                            </div>
                            <div
                                class="form-group d-flex justify-content-between align-items-center ms-0 btnz w-100 bg-white text-dark p-5 my-4 accInfoStl ">
                                <div class="jobs-easy-apply-footer__info">
                                    <p class="t-12 t-black--light">
                                        Submitting this application won’t change your LinkedIn profile.
                                    </p>
                                    <p class="t-12 t-black--light mt1">
                                        Application powered by LinkedIn | <a href="/help/linkedin/answer/71792?lang=en_US"
                                            target="_blank" rel="noopener noreferrer" class="link-without-visited-state"
                                            data-control-name="help_center_unify"
                                            aria-label="Visit help center to know more"
                                            data-test-easy-apply-footer-ats-help="true">Help Center</a>
                                    </p>
                                </div>
                                <a class="btn btn-primary next sandc">Next</a>
                            </div>
                        </fieldset>
                        <fieldset id="company_information" class="">
                            <div class="form-group ms-0 accInfoStl topAccInfo w-100 bg-white text-dark p-5 my-4">
                                <legend> Apply to Early stage startup
                                </legend>
                            </div>
                            <div class="form-group ms-0 w-100 bg-white text-dark p-5 my-4">
                                <h6>Resume *</h6>
                                <label for="" class="col-12 control-label">
                                    Be sure to include an updated resume*<span class="text-dark">
                                        *</span></label>
                                <div class="multiimage">
                                    <div class="row wow-remove my-2 mx-auto w-100">
                                        <div class="col-12">
                                            <div class="main_container">
                                                <div class="main imagebox position-relative rounded-3 overflow-hidden">
                                                    <div
                                                        class="select_img d-flex justify-content-center align-items-center">
                                                        <div class="dz-message p-3 text-center">
                                                            <div class="drag-icon-cph">
                                                                <i class="material-icons"
                                                                    style="font-size: 35px">touch_app</i>
                                                            </div>
                                                            <h3>Click to upload.</h3>
                                                        </div>
                                                    </div>
                                                    <input type="file" accept="application/pdf,application/vnd.ms-excel" name="document_pdf"
                                                        class="main_file w-100 h-100 form-control position-absolute  opacity-0">
                                                    <div class="img-thumb">
                                                    </div>
                                                </div>
                                                <a class="btn mt-3 btn-primary fw-normal remove_clone border-0 shadow-none">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="form-group ms-0 btnz w-100 bg-white d-flex justify-content-between accInfoStl align-items-center text-dark p-5 my-4">
                                <div class="jobs-easy-apply-footer__info">
                                    <p class="t-12 t-black--light">
                                        Submitting this application won’t change your LinkedIn profile.
                                    </p>
                                    <p class="t-12 t-black--light mt1">
                                        Application powered by LinkedIn | <a href="/help/linkedin/answer/71792?lang=en_US"
                                            target="_blank" rel="noopener noreferrer" class="link-without-visited-state"
                                            data-control-name="help_center_unify"
                                            aria-label="Visit help center to know more"
                                            data-test-easy-apply-footer-ats-help="true">Help Center</a>
                                    </p>
                                </div>
                                <a class="btn btn-primary previous sandc"><svg xmlns="http://www.w3.org/2000/svg"
                                        focusable="false" role="img" fill="currentColor" viewBox="0 0 24 24"
                                        aria-hidden="true" class=" css-xbwdtc eac13zx0">
                                        <path
                                            d="M14.112 18.002c.2.2.52.204.716.008l.707-.707a.507.507 0 00-.009-.716L10.94 12l4.587-4.587c.2-.2.205-.521.01-.716l-.708-.708a.507.507 0 00-.716.01l-5.648 5.647c-.1.1-.148.234-.143.367.002.124.05.247.143.34l.001.001a.758.758 0 00.008.008l5.64 5.64z">
                                        </path>
                                    </svg> Back</a>
                                <a class="btn btn-primary next sandc">Next</a>
                            </div>
                        </fieldset>
                        <fieldset id="personal_information" class="">

                            <div class="form-group ms-0 accInfoStl topAccInfo w-100 bg-white text-dark p-5 my-4">
                                <legend> Apply to Early stage startup
                                </legend>
                            </div>
                            <div class="form-group ms-0 accInfoStl w-100 bg-white text-dark p-5 my-4">
                                <h6><b>Additional Questions</b></h6>
                                <label for="job_title" class="col-12 control-label">How many years of work experience do
                                    you have with WordPress?<span class="text-danger">
                                        *</span></label>
                                <div class="col-12">
                                    <input type="text" class="form-control w-100 mb-2" id="job_title"
                                        name="additional_question" placeholder="">
                                </div>
                            </div>
                            <div class="form-group ms-0 accInfoStl w-100 bg-white text-dark p-5 my-4">
                                <label for="job_title" class="col-12 control-label">What is your level of proficiency in
                                    English?<span class="text-danger">
                                        *</span></label>
                                <div class="col-12">
                                    <select id="" name="proficiency_level" class="form-control"
                                        aria-describedby="urn:li:fs_easyApplyFormElement:(urn:li:fs_normalized_jobPosting:3324912958,72799189,multipleChoice)-error-message"
                                        data-test-fb-dropdown-select="">
                                        <option selected disabled>Select an option</option>
                                        <option value="None">None</option>
                                        <option value="Conversational">Conversational</option>
                                        <option value="Professional">Professional</option>
                                        <option value="Native or bilingual">Native or bilingual</option>
                                    </select>
                                </div>
                            </div>
                            <div
                                class="form-group ms-0 btnz w-100 bg-white d-flex justify-content-between align-items-center accInfoStl  text-dark p-5 my-4">
                                <div class="jobs-easy-apply-footer__info">
                                    <p class="t-12 t-black--light">
                                        Submitting this application won’t change your LinkedIn profile.
                                    </p>
                                    <p class="t-12 t-black--light mt1">
                                        Application powered by LinkedIn | <a href="/help/linkedin/answer/71792?lang=en_US"
                                            target="_blank" rel="noopener noreferrer" class="link-without-visited-state"
                                            data-control-name="help_center_unify"
                                            aria-label="Visit help center to know more"
                                            data-test-easy-apply-footer-ats-help="true">Help Center</a>
                                    </p>
                                </div>
                                <a class="btn btn-primary previous sandc">
                                    <svg xmlns="http://www.w3.org/2000/svg" focusable="false" role="img"
                                        fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"
                                        class=" css-xbwdtc eac13zx0">
                                        <path
                                            d="M14.112 18.002c.2.2.52.204.716.008l.707-.707a.507.507 0 00-.009-.716L10.94 12l4.587-4.587c.2-.2.205-.521.01-.716l-.708-.708a.507.507 0 00-.716.01l-5.648 5.647c-.1.1-.148.234-.143.367.002.124.05.247.143.34l.001.001a.758.758 0 00.008.008l5.64 5.64z">
                                        </path>
                                    </svg> Back</a>
                                <a><input type="submit" value="Save" class="btn btn-primary next sandc"></a>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <div class="d-none  cloner" style="display:none;">
        <div class="row wow-remove">
            <div class="col">
                <div class="main_container m-3">
                    <div class="main imagebox position-relative rounded-3 overflow-hidden">
                        <div class="select_img d-flex justify-content-center align-items-center">
                            <div class="dz-message p-3 text-center">
                                <div class="drag-icon-cph">
                                    <i class="material-icons" style="font-size: 35px">touch_app</i>
                                </div>
                                <h3>Click to upload.</h3>

                            </div>
                        </div>
                        <input type="file" name="document_pdf"
                            class="main_file w-100 h-100 form-control position-absolute  opacity-0" />
                        <div class="img-thumb">
                        </div>
                    </div>
                    <a class="btn mt-3  fw-normal remove_clone border-0 shadow-none">Remove</a>
                </div>
            </div>

        </div>
    </div>
    <script>
        $(document).ready(function() {
            var maxField = 10; //Input fields increment limitation
            var addButton = $('.add_clone'); //Add button selector
            var wrapper = $('.team_main'); //Input field wrapper
            var fieldHTML = jQuery('.cloner .row');
            var fieldHTML2 = '<a href="javascript:void(0);" class="remove_button btn btn-dark mx-1">Cancel</a>';
            var x = 1; //Initial field counter is 1

            //Once add button is clicked
            $(document).on('click', '.add_clone', function() {
                var wow = $(this);
                //Check maximum number of input fields
                if (x < maxField) {
                    x++;
                    $(wow).parents('.multiimage').append($(fieldHTML).clone());
                }
            });
            //Once remove button is clicked
            $(document).on('click', '.remove_clone', function(e) {

                $(this).parents('.wow-remove').remove(); //Remove field html
                if ($(".multiimage .row").length == 0) {
                    $('.multiimage').append($(fieldHTML).clone());

                }

            });
        });


        $(document).ready(function() {


            //Once remove button is clicked




            if (window.File && window.FileList && window.FileReader) {
                $(document).on("change", '.main_file', function(e) {

                    var img = $(this).parents(".imagebox").find(".img-thumb");
                    var btn = $(this);
                    var files = e.target.files,
                        filesLength = files.length;
                    for (var i = 0; i < filesLength; i++) {
                        btn.parents(".main_container").find(".remove").css({
                            display: "flex"
                        });
                        var f = files[i];
                        var fileReader = new FileReader();
                        fileReader.onload = function(e) {
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
