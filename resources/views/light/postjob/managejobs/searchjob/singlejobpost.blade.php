@extends('light.layouts.app')
@section('title')
    Single Job Post - {{config('app.dashboard')}}
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
                            <input type="text" class="form-control mb-0" placeholder="">
                        </div>
                        <div class="col-md-5 my-md-0 my-3 mt-0 px-2 col-12">
                            <label for="">Location</label>
                            <input type="text" class="form-control mb-0" placeholder="">
                        </div>
                        <div class="col-md-2 px-2 col-12 mt-auto">
                            <button type="submit" class="w-100 btn btn-primary mb-auto">Find Jobs</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>

        <section>
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
                                    Trainee Software Developer
                                </a>
                                <p class="loc text-dark mb-0 ">
                                    Moreton
                                </p>
                            </div>
                            <div class="col-12 similarJobsSingle p-3">
                                <a href="#" class="tt">
                                    Trainee Software Developer
                                </a>
                                <p class="loc text-dark mb-0 ">
                                    Landrake
                                </p>
                            </div>

                            <div class="col-12 similarJobsSingle p-3">
                                <a href="#" class="tt">
                                    Trainee Software Developer
                                </a>
                                <p class="loc text-dark mb-0 ">
                                    London
                                </p>
                            </div>

                            <div class="col-12 similarJobsSingle p-3">
                                <a href="#" class="tt">
                                    Trainee Software Developer
                                </a>
                                <p class="loc text-dark mb-0 ">
                                    Keelby
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-12 jobTt pb-5">
                        <div class="row">
                            <div class="col-12">
                                <img draggable="false"
                                     src="{{asset('indeed/images/cv-l-ad-banner-1.png')}}"
                                     alt="jobImage" class="w-100">
                                <div class="jobDetails my-4">
                                    <p class="para">
                                        Trainee Software Developer Course
                                    </p>
                                    <h6 class="text-dark">
                                        Posted by <a href="#"> Hatch</a>
                                    </h6>
                                    <h6 class="loc text-dark my-3 mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="11.25" height="15"
                                             viewBox="0 0 11.25 15">
                                            <path id="Path_674" data-name="Path 674"
                                                  d="M7.625,15S13.25,9.669,13.25,5.625A5.625,5.625,0,0,0,2,5.625C2,9.669,7.625,15,7.625,15Zm0-6.562A2.812,2.812,0,1,0,4.813,5.625,2.812,2.812,0,0,0,7.625,8.437Z"
                                                  transform="translate(-2)" fill-rule="evenodd" />
                                        </svg> Nationwide
                                    </h6>
                                </div>
                                <div class="jobDescr">
                                    <h4 class="text-dark">
                                        Train to be a Software Developer
                                    </h4>
                                    <h5 class="text-dark desc">
                                        Whether you’re looking to start a new career in Software, or accelerate an existing
                                        one, Hatch can support you at any stage of your career journey through our
                                        award-winning learning pathways coupled with dedicated career and employment
                                        support. This Software Development course is designed to get you role-ready if
                                        you’re considering a career in software or programming. This is a training course
                                        which leads to employment opportunities upon completion. Fees apply.
                                        <br>
                                        <br>
                                        As a global society, we average up to 11 hours of screen time per day. During the
                                        pandemic, this climbed as high as 19 hours per day. From managing money online, to
                                        streaming, to food delivery apps, software powers everything we do on our screens.
                                        <br>
                                        <br>
                                        Because of this, businesses rely increasingly on software development to maintain
                                        their competitive edge. In the UK alone, it’s estimated that another 1.5million
                                        Software Developers will be required over the next 2-years to keep pace with
                                        employer demand. Be one of the next to hit the market.
                                    </h5>
                                    <h4 class="text-dark my-4">
                                        Through this course you will gain:
                                    </h4>
                                    <ul class="ps-3 text-dark jobReqs my-4">
                                        <li>Microsoft Software Fundamentals: Develop your understanding of core programming,
                                            object-ori-ented programming, general software development, web applications,
                                            desktop applications and da-tabases.
                                        </li>
                                        <li>CIW Advanced HTML5 and CSS3 Specialist: Gain hands on experience in fundamental
                                            HTML and CSS practice, JavaScript characteristics and web and app design.
                                        </li>
                                        <li>Microsoft Python: Develop a standalone language in this course. Once you
                                            complete this course, you’ll have the knowledge of using Python for data
                                            structure, functions and classes, input and out-puts, and object-oriented
                                            programming.
                                        </li>
                                        <li>Oracle OCA Java SE 8 Programmer: Learn the syntax and structure that surrounds
                                            Java programming language to create Java applications - master data types,
                                            operators and decision control structures.
                                        </li>
                                        <li>in database work. Cover all fundamental aspects of Java programming and
                                            demonstrate your skills to your employer that you are proficient in Java
                                            technologies and use industry standard best practices.
                                        </li>
                                        <li>Beginning C# 7 Programming: Gain knowledge of C# programming, including the
                                            concepts such as desktop, cloud, and cross-platform programming, making use of
                                            data sources. Also understand the basic and advanced concepts of C# programming
                                            and provide hands-on learning with the real-world scenarios.
                                        </li>
                                    </ul>
                                    <div class="apply"><button class="btn btn-primary">Apply Now</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-none d-md-block"></div>
                    <div class="col-md-9 col-12">
                        <div class="row">
                            <div class="col-md-4 col-12 jobTtBtns d-flex">
                                <a href="#" class="fs-4 w-100 h-100 p-2 text-center"><svg class="me-2"
                                                                                          xmlns="http://www.w3.org/2000/svg" width="20" height="28" viewBox="0 0 30 28">
                                        <path
                                                d="M25.1 5.1a6.3 6.3 0 0 0-8.9-.3l-.3.3-1 1-.8-1a6.3 6.3 0 0 0-8.9-.3l-.3.3a7 7 0 0 0 0 9.5l2.5 2.6 7.6 7.9 4.6-4.8 2.6-2.7 2.9-3a7 7 0 0 0 0-9.5z"
                                                fill="#663bb43b" stroke="#" stroke-width="3" stroke-miterlimit="10" />
                                    </svg>Save
                                </a>
                            </div>
                            <div class="col-md-4 col-12 jobTtBtns d-flex">
                                <a href="#" class="fs-4 w-100 h-100 p-2 text-center">
                                    <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="20" height="28"
                                         viewBox="0 0 15 15" fill="none">
                                        <path
                                                d="M3.5 12.5H1.5C0.947715 12.5 0.5 12.0523 0.5 11.5V7.5C0.5 6.94772 0.947715 6.5 1.5 6.5H13.5C14.0523 6.5 14.5 6.94772 14.5 7.5V11.5C14.5 12.0523 14.0523 12.5 13.5 12.5H11.5M3.5 6.5V1.5C3.5 0.947715 3.94772 0.5 4.5 0.5H10.5C11.0523 0.5 11.5 0.947715 11.5 1.5V6.5M3.5 10.5H11.5V14.5H3.5V10.5Z"
                                                stroke="#663bb43b" />
                                    </svg>Print
                                </a>
                            </div>
                            <div class="col-md-4 col-12 jobTtBtns d-flex">
                                <a href="#" class="fs-4 w-100 h-100 p-2 text-center">
                                    <svg class="me-2" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px"
                                         y="0px" viewBox="0 0 496.158 496.158" width="20" height="28"
                                         style="enable-background:new 0 0 496.158 496.158;" xml:space="preserve">
                                    <path style="fill: #663bb43b;"
                                          d="M0,248.085C0,111.064,111.07,0.003,248.076,0.003c137.012,0,248.082,111.061,248.082,248.082  c0,137.002-111.07,248.07-248.082,248.07C111.07,496.155,0,385.087,0,248.085z" />
                                        <g>
                                            <circle style="fill:#FFFFFF;" cx="146.489" cy="248.969" r="53.807" />
                                            <circle style="fill:#FFFFFF;" cx="310.749" cy="153.319" r="53.807" />
                                            <circle style="fill:#FFFFFF;" cx="310.749" cy="342.839" r="53.807" />

                                            <rect x="214.155" y="104.29"
                                                  transform="matrix(-0.5032 -0.8642 0.8642 -0.5032 171.424 497.1939)"
                                                  style="fill:#FFFFFF;" width="28.933" height="190.068" />

                                            <rect x="133.608" y="280.528"
                                                  transform="matrix(-0.8642 -0.5032 0.5032 -0.8642 277.774 664.974)"
                                                  style="fill:#FFFFFF;" width="190.068" height="28.933" />
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                </svg>Share
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-none d-md-block"></div>
                    <div class="col-md-9 col-12">
                        <div class="row">
                            <div class="col-12 createJobAlert p-3 text-center my-4">
                                <h4 class="text-dark">
                                    Create new Job Alert
                                </h4>
                                <h6 class="text-dark">
                                    Create a new Job Alert to make sure you see the best new jobs first!
                                </h6>
                                <div class="createJobAlertFields d-flex align-items-end justify-content-center">
                                    <div class="w-20">
                                        <label for="">Keywords/Job Title
                                        </label>
                                        <input type="text" class="form-control mb-0" placeholder=""
                                               value="trainee software developer course">
                                    </div>
                                    <div class="w-20">
                                        <label for="">Location</label>
                                        <input type="text" class="form-control mb-0" placeholder="">
                                    </div>

                                    <div class="w-20">
                                        <label class="choose py-0">Distance </label>
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
                                    <div class="w-auto">
                                        <button type="submit" class="w-100 btn btn-primary mb-auto">Create Alert</button>
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