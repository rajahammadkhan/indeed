<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>4fresh Web Application</title>
    <link rel="icon" href="{{ asset('indeed/images/favicon.ico') }}" type="image/x-icon">
    <link href="{{ asset('indeed/css/app.min.css') }}" rel="stylesheet">
    <link href="{{ asset('indeed/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('indeed/css/styles/all-themes.css') }}" rel="stylesheet" />
    <link href="{{ asset('indeed/css/styles/main.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        .bg-purp {
            background: #6a3fb8 !important;
        }

        .navbar {
            margin-bottom: 0px !important;
        }

        .navbar-brand {
            width: unset !important;
        }

        nav .collapse.navbar-collapse {
            height: 100% !important;
        }

        .navbar-nav>li>a {
            margin-top: 0px !important;
            margin-left: 0px !important;
        }

        .site-nav__link {
            padding: 10px 12px !important
        }

        nav .btn:hover {
            background-color: #eee !important;
            color: #212121
        }

        .collapse.navbar-collapse a.nav-link {
            font-size: 13px !important;
        }

        .collapse.navbar-collapse a.nav-link:hover {
            color: #ccc;
        }

        .collapse.navbar-collapse::before,
        .collapse.navbar-collapse::after {
            display: none !important;
        }

        .navbar-toggler-icon {
            display: inline-block;
            width: 1.5em;
            height: 1.5em;
            vertical-align: middle;
            background-image: url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'><path stroke='rgba%280, 240,250, 1' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/></svg>");
            background-repeat: no-repeat;
            background-position: center;filter: brightness(58) saturate(0);
            background-size: 100%;
        }

        @media (min-width: 768px) {
            .navbar-collapse.collapse {
                display: flex !important;
                justify-content: space-between;
            }
        }
    </style>
</head>

<body class="light jobPostPage">
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30">
                <img class="loading-img-spin" src="{{ asset('indeed/images/loading.png') }}" width="20"
                    height="20" alt="admin">
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <div class="overlay"></div>
    <nav class="navbar navbar-expand-lg bg-purp">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Lorax</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('dashboard') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('candidate-search') }}">Search Jobs</a></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('cv-builder') }}">CV
                            Builder</a></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"href="{{ url('job-alert') }}">Job
                            Alerts</a></a>
                    </li>
                </ul>
                <ul class="nav navbar-right">
                    <li class="site-nav__item"><a class="site-nav__link site-nav__link--login    btn btn-light"
                            href="{{ url('login') }}" id="nav-login">Login</a></li>
                    <li class="site-nav__item"><a class="site-nav__link site-nav__link--register btn btn-success"
                            href="{{ url('register') }}" id="nav-signup">Register</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="findJob py-5 rec">
        <div class="container">
            <form action="#">
                <div class="row">
                    <div class="col-md-6 col-12 my-3">
                        <img src="{{ asset('indeed/images/logofull.png') }}" alt="home" class="hom">
                    </div>
                    <div class="col-md-6 col-12 my-auto">
                        <h1 class="res text-end">
                            Search jobs in your area
                        </h1>
                        <h3 class="res fw-light text-end">
                            230,722 jobs from 10,418 companies
                        </h3>

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
                                <div class="dropdownMain form-control" tabindex="1">
                                    <div class="select">
                                        <span>up to 15 miles</span>
                                        <i class="fa fa-chevron-left"></i>
                                    </div>
                                    <input type="hidden" name="gender">
                                    <ul class="dropdownMain-menu" style="display: none;">
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
        <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <div class="body">
                        <ul class="nav nav-tabs tab-nav-right" role="tablist">
                            <li role="presentation" class="w-25 text-center">
                                <a href="#home" data-toggle="tab" class="active show"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                        x="0" y="0" viewBox="0 0 107.5 107.5"
                                        xml:space="preserve">
                                        <style>
                                            .st0 {
                                                fill: #6a3fb8
                                            }
                                        </style>
                                        <path class="st0" d="M39 40l-1 2 1 1h29l1-1-1-2H39z" />
                                        <path class="st0"
                                            d="M75 26h-9l-4-2h-3c-1-2-3-3-5-3s-4 1-5 3h-4l-3 2h-9c-3 0-5 2-5 5v51c0 3 2 5 5 5h42c2 0 5-2 5-5V31c0-3-2-5-5-5zm-29 2h5l2-2 1-1 1 1 2 2h5v3H46v-3zm29 54H33V31h8c0 2 2 4 4 4h17c2 0 4-2 4-4h9v51z" />
                                        <path class="st0"
                                            d="M68 50H39l-1 2 1 2h29l1-2-1-2zM68 61H39l-1 1 1 2h29l1-1-1-2zM68 71H39l-1 2 1 2h29l1-2-1-2z" />
                                    </svg>Jobs by Industry</a>
                            </li>
                            <li role="presentation" class="w-25 text-center">
                                <a href="#profile" data-toggle="tab"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="30" height="30" viewBox="0 0 107.5 107.5">
                                        <path
                                            d="M54 21c-14 0-25 11-25 24 0 12 18 35 24 42h2c5-7 23-30 23-42 0-13-11-24-24-24zm11 24a11 11 0 11-22 0 11 11 0 0122 0z"
                                            fill="#6a3fb8" />
                                    </svg>Jobs by Location</a>
                            </li>
                            <li role="presentation" class="w-25 text-center">
                                <a href="#messages" data-toggle="tab"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="30" height="30" viewBox="0 0 107.5 107.5">
                                        <path
                                            d="M89 46l-1-1H62l-8-24h-1l-8 25H19l21 16-8 24v1h1l21-15 20 15h1v-1l-8-24 21-16h1z"
                                            fill="#6a3fb8" />
                                    </svg>Popular Jobs</a>
                            </li>
                            <li role="presentation" class="w-25 text-center">
                                <a href="#setting" data-toggle="tab"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="30" height="30" x="0" y="0"
                                        viewBox="0 0 107.5 107.5" xml:space="preserve">
                                        <style>
                                            .st0 {
                                                fill: #6a3fb8
                                            }
                                        </style>
                                        <path class="st0"
                                            d="M82 37H60V26c0-3-3-5-6-5H26c-3 0-6 2-6 5v55c0 3 3 6 6 6h56c3 0 5-3 5-6V43c0-3-2-6-5-6zM50 81h-7V70h-6v11H26V27h28v54h-4zm31 0H60V43h21v38z" />
                                        <path class="st0"
                                            d="M32 49h6v7h-6zM41 49h6v7h-6zM32 58h6v7h-6zM41 58h6v7h-6zM71 50h7v6h-7zM71 58h7v7h-7zM71 67h7v7h-7zM63 50h6v6h-6zM63 58h6v7h-6zM63 67h6v7h-6zM32 40h6v7h-6zM41 40h6v7h-6zM32 31h6v7h-6zM41 31h6v7h-6z" />
                                    </svg> Jobs by Company</a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active show" id="home">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6 col-6">
                                        <a href="#" class="d-block my-2">Accountancy & Accounting</a>
                                        <a href="#" class="d-block my-2">Banking</a>
                                        <a href="#" class="d-block my-2">Customer Services</a>
                                        <a href="#" class="d-block my-2">Environmental</a>
                                        <a href="#" class="d-block my-2">IT</a>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-6">
                                        <a href="#" class="d-block my-2">Admin & Administration</a>
                                        <a href="#" class="d-block my-2">Charity & Volunteer</a>
                                        <a href="#" class="d-block my-2">Design</a>
                                        <a href="#" class="d-block my-2">Finance</a>
                                        <a href="#" class="d-block my-2">Legal</a>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-6 d-md-block d-none">
                                        <a href="#" class="d-block my-2">Automotive</a>
                                        <a href="#" class="d-block my-2">Cleaning</a>
                                        <a href="#" class="d-block my-2">Education</a>
                                        <a href="#" class="d-block my-2">Health Care</a>
                                        <a href="#" class="d-block my-2">Leisure & Sports</a>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-6 d-md-block d-none">
                                        <a href="#" class="d-block my-2">Aviation</a>
                                        <a href="#" class="d-block my-2">Banking</a>
                                        <a href="#" class="d-block my-2">Customer Services</a>
                                        <a href="#" class="d-block my-2">Environmental</a>
                                        <a href="#" class="d-block my-2">IT</a>
                                    </div>
                                </div>

                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6 col-6">
                                        <a href="#" class="d-block my-2">Accountancy & Accounting</a>
                                        <a href="#" class="d-block my-2">Banking</a>
                                        <a href="#" class="d-block my-2">Customer Services</a>
                                        <a href="#" class="d-block my-2">Environmental</a>
                                        <a href="#" class="d-block my-2">IT</a>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-6  ">
                                        <a href="#" class="d-block my-2">Admin & Administration</a>
                                        <a href="#" class="d-block my-2">Charity & Volunteer</a>
                                        <a href="#" class="d-block my-2">Design</a>
                                        <a href="#" class="d-block my-2">Finance</a>
                                        <a href="#" class="d-block my-2">Legal</a>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-6 d-md-block d-none">
                                        <a href="#" class="d-block my-2">Automotive</a>
                                        <a href="#" class="d-block my-2">Cleaning</a>
                                        <a href="#" class="d-block my-2">Education</a>
                                        <a href="#" class="d-block my-2">Health Care</a>
                                        <a href="#" class="d-block my-2">Leisure & Sports</a>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-6 d-md-block d-none">
                                        <a href="#" class="d-block my-2">Aviation</a>
                                        <a href="#" class="d-block my-2">Banking</a>
                                        <a href="#" class="d-block my-2">Customer Services</a>
                                        <a href="#" class="d-block my-2">Environmental</a>
                                        <a href="#" class="d-block my-2">IT</a>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="messages">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6 col-6">
                                        <a href="#" class="d-block my-2">Accountancy & Accounting</a>
                                        <a href="#" class="d-block my-2">Banking</a>
                                        <a href="#" class="d-block my-2">Customer Services</a>
                                        <a href="#" class="d-block my-2">Environmental</a>
                                        <a href="#" class="d-block my-2">IT</a>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-6 ">
                                        <a href="#" class="d-block my-2">Admin & Administration</a>
                                        <a href="#" class="d-block my-2">Charity & Volunteer</a>
                                        <a href="#" class="d-block my-2">Design</a>
                                        <a href="#" class="d-block my-2">Finance</a>
                                        <a href="#" class="d-block my-2">Legal</a>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-6 d-md-block d-none">
                                        <a href="#" class="d-block my-2">Automotive</a>
                                        <a href="#" class="d-block my-2">Cleaning</a>
                                        <a href="#" class="d-block my-2">Education</a>
                                        <a href="#" class="d-block my-2">Health Care</a>
                                        <a href="#" class="d-block my-2">Leisure & Sports</a>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-6 d-md-block d-none">
                                        <a href="#" class="d-block my-2">Aviation</a>
                                        <a href="#" class="d-block my-2">Banking</a>
                                        <a href="#" class="d-block my-2">Customer Services</a>
                                        <a href="#" class="d-block my-2">Environmental</a>
                                        <a href="#" class="d-block my-2">IT</a>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="setting">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6 col-6">
                                        <a href="#" class="d-block my-2">Accountancy & Accounting</a>
                                        <a href="#" class="d-block my-2">Banking</a>
                                        <a href="#" class="d-block my-2">Customer Services</a>
                                        <a href="#" class="d-block my-2">Environmental</a>
                                        <a href="#" class="d-block my-2">IT</a>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-6">
                                        <a href="#" class="d-block my-2">Admin & Administration</a>
                                        <a href="#" class="d-block my-2">Charity & Volunteer</a>
                                        <a href="#" class="d-block my-2">Design</a>
                                        <a href="#" class="d-block my-2">Finance</a>
                                        <a href="#" class="d-block my-2">Legal</a>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-6  d-md-block d-none">
                                        <a href="#" class="d-block my-2">Automotive</a>
                                        <a href="#" class="d-block my-2">Cleaning</a>
                                        <a href="#" class="d-block my-2">Education</a>
                                        <a href="#" class="d-block my-2">Health Care</a>
                                        <a href="#" class="d-block my-2">Leisure & Sports</a>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-6  d-md-block d-none">
                                        <a href="#" class="d-block my-2">Aviation</a>
                                        <a href="#" class="d-block my-2">Banking</a>
                                        <a href="#" class="d-block my-2">Customer Services</a>
                                        <a href="#" class="d-block my-2">Environmental</a>
                                        <a href="#" class="d-block my-2">IT</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="bg-white py-5">
        <div class="container">
            <div class="row clearfix">
                <div class="col-12 mb-4 text-center">
                    <h2 class="text-dark">
                        Featured recruiters and employers
                    </h2>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="owl-carousel owl-theme homeSlider" id="withloop">
                        <div class="item">
                            <a href="#"> <img
                                    src="https://www.cv-library.co.uk/logo/featured/30ad80548fa94ee4b078eb136c05653b"
                                    alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#"> <img
                                    src="https://www.cv-library.co.uk/logo/featured/7bad7667eff54819afe14e7d53fc1321"
                                    alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#"> <img
                                    src="https://www.cv-library.co.uk/logo/featured/1d6fa769bfb348a7b991639943021611"
                                    alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#"> <img
                                    src="https://www.cv-library.co.uk/logo/featured/f47bb5d4903f4d31a920e58b11d3bb10"
                                    alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#"> <img
                                    src="https://www.cv-library.co.uk/logo/featured/b76aee7c42724a1cb8c41fe3f49107b5"
                                    alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#"> <img
                                    src="https://www.cv-library.co.uk/logo/featured/52b629344aea415bb88da945657895c2"
                                    alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#"> <img
                                    src="https://www.cv-library.co.uk/logo/featured/3a9447671e344183a7f68a667b937996"
                                    alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#"> <img
                                    src="https://www.cv-library.co.uk/logo/featured/2b97a2fecb5143dea9d5037361634d4c"
                                    alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6 text-center col-12 my-3 ">
                    <div class="row w-100 h-100 mx-auto bg-white p-3 mainbdr">
                        <div class="col-12 my-auto">
                            <img src="
                            https://www.cv-library.co.uk/assets/images/eotm-pertemps-cae12ed3e5d67b8e32c4e0942adeaf7a0b98a2168218f47c25fc55dab596f98a.png"
                                alt="" width="160" height="70" class="mb-4">
                        </div>
                        <div class="col-12 text-center">
                            <h4 class="text-dark my-3 ">
                                Pertemps are recruiting!

                            </h4>
                            <h6 class="text-dark fw-light">
                                We've got your next job.



                            </h6>
                            <a href="#" class="mt-4 btn btn-primary">Click to view our vacancies</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 text-center col-12 my-3 ">
                    <div class="row w-100 h-100 mx-auto bg-white p-3 mainbdr">
                        <div class="col-12 my-auto">
                            <img src="
                            https://www.cv-library.co.uk/assets/images/eotm-morrisons-c3e1b03cb260bf7d5ef34124b42fa3ee427691da61b94873dab5e3d4d2a2d059.png"
                                alt="" width="160" height="70" class="mb-4">
                        </div>
                        <div class="col-12 text-center">
                            <h4 class="text-dark my-3 ">
                                Employer of the month

                            </h4>
                            <h6 class="text-dark fw-light">
                                We're hiring this Christmas in our Manufacturing and Logistics teams


                            </h6>
                            <a href="#" class="mt-4 btn btn-primary">Apply to #MakeGoodThingsHappen</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-main py-5">
        <div class="container">
            <div class="row text-center align-items-center justify-content-center">
                <h2 class="text-dark my-3">
                    The UK's favourite job board

                </h2>
                <h5 class="fw-light text-dark my-4">
                    CV-Library is the UK's largest independent job board, with 230,722 live vacancies from all
                    industries nationwide available to search! Register your CV to start applying today. With simple
                    search tools and instant job matches delivered to your inbox, it's never been easier to land a new
                    job with CV-Library.


                </h5>

            </div>
            <div class="row my-4">
                <div class="col-md-4 col-12 my-3">

                    <div class="card d-flex justify-content-between h-100">
                        <div class="header pb-0">
                            <img src="https://www.cv-library.co.uk/assets/images/cvlibrary-uk/home/module-job-alerts-c771a40a64b8a3863d86b2dcfa63530ff263517b9a14c2f228d4b393ba1e3cfc.png"
                                alt="" class="crdImgMain">
                        </div>
                        <div class="body h-50">
                            <h4 class="text-dark mb-4 crdHdng">

                                Job Alerts
                            </h4>
                            <h6 class="text-dark fw-light">

                                Get the latest jobs sent directly to your inbox with CV-Library.co.uk's Job Alerts.
                            </h6>
                            <a href="#" class="mt-4 btn btn-primary">Get Job Alerts</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12 my-3">

                    <div class="card d-flex justify-content-between h-100">
                        <div class="header pb-0">
                            <img src="https://www.cv-library.co.uk/assets/images/cvlibrary-uk/home/module-company-az-399468657cbbfa919f627a8e8f245f872963baf761cb6da5d7e6c552a79217e8.png"
                                alt="" class="crdImgMain">
                        </div>
                        <div class="body h-50">
                            <h4 class="text-dark mb-4 crdHdng">

                                Company A-Z

                            </h4>
                            <h6 class="text-dark fw-light">

                                Search our directory of employers and recruitment agencies by popularity, sector and
                                location.


                            </h6>
                            <a href="#" class="mt-4 btn btn-primary">Search Companies</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12 my-3">

                    <div class="card d-flex justify-content-between h-100">
                        <div class="header pb-0">
                            <img src="https://www.cv-library.co.uk/assets/images/cvlibrary-uk/home/module-career-advice-6d6a5d5283927239eb7ad7233d1382f21d964b8c76822badba735c2792f504c0.png"
                                alt="" class="crdImgMain">
                        </div>
                        <div class="body h-50">
                            <h4 class="text-dark mb-4 crdHdng">

                                Career Advice

                            </h4>
                            <h6 class="text-dark fw-light">

                                Career tips, including salary guides, tax calculators and interview advice, helping you
                                get your next job.

                            </h6>
                            <a href="#" class="mt-4 btn btn-primary">Read our Advice</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="hp-register" class="container">
        <div class="row">
            <div class="col-md-8 col-12">
                <div class="register--left">
                    <h4 class="hp-title">Register your CV</h4>
                    <h6 class="hp-copy fw-light">Upload your CV today to be headhunted by <a href="#"
                            class="text-light">10,418 companies</a>, and
                        apply to <a href="#" class="text-light">230,722 jobs</a> with 1-click apply.</h6>
                </div>
                <a href="#" class="btn btn-success mt-3">Register now</a>
            </div>
            <div class="col-md-4 col-0 d-md-block d-none">
                <img class="register--right" alt="" width="280" height="158"
                    src="//cv-library.co.uk/assets/images/home/hp-register-barney-5217b18608996b105a3fc9ee0377ef7416bcaea53808cedd7862dd036ec2c7b1.png">

            </div>
        </div>
    </section>
    <section class="container-fluid px-0 bg-main">
        <div class="row px-5">
            <div class="col-md-8 col-12 my-auto">
                <div class="register--left">
                    <h4 class="hp-title text-dark">Recruiting?
                    </h4>
                    <h6 class="hp-copy fw-light text-dark">Advertise your jobs to millions of monthly users and search
                        18 million CVs in our database.

                    </h6>
                </div>
                <a href="#" class="btn btn-success mt-3">Start Recruiting Now</a>
            </div>
            <div class="col-md-4 col-0 d-md-block d-none">
                <img class=" h-100"
                    src="https://www.cv-library.co.uk/assets/images/home/find-your-perfect-candidate-6dc54e959f9430905b05d79ec145fe4a5f651125cbd085988b7f8e0481d5f192.svg">

            </div>
        </div>
    </section>
    <footer class="text-center text-lg-start bg-white text-muted pt-3">
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <div class="row mt-3">
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>4fresh
                        </h6>
                        <p>
                            Here you can use rows and columns to organize your footer content. Lorem ipsum
                            dolor sit amet, consectetur adipisicing elit.
                        </p>
                    </div>
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">
                            Products
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Angular</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">React</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Vue</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Laravel</a>
                        </p>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">
                            Useful links
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Pricing</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Settings</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Orders</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Help</a>
                        </p>
                    </div>
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            info@example.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                        <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
                    </div>
                </div>
            </div>
        </section>
    </footer>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>
<script src="{{ asset('indeed/js/app.min.js') }}"></script>
<script src="{{ asset('indeed/js/job.js') }}"></script>
<script src="{{ asset('indeed/js/chart.min.js') }}"></script>
<script src="{{ asset('indeed/js/admin.js') }}"></script>
<script src="{{ asset('indeed/js/jquery.js') }}"></script>
<script src="{{ asset('indeed/js/pages/index.js') }}"></script>
<script src="{{ asset('indeed/js/pages/charts/jquery-knob.js') }}"></script>
<script src="{{ asset('indeed/js/pages/sparkline/sparkline-data.js') }}"></script>
<script src="{{ asset('indeed/js/pages/medias/carousel.js') }}"></script>
<script src="{{ asset('indeed/js/jobPost.js') }}"></script>
<script src="{{ asset('indeed/js/validations.js') }}"></script>
</body>
