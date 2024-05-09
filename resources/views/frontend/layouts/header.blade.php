<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>4fresh Web Application</title>
    <link rel="icon" href="{{ asset('indeed/images/favicon.ico') }}" type="image/x-icon">
    {{-- <link href="{{ asset('indeed/css/app.min.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('indeed/css/style.css') }}" rel="stylesheet" />
    {{-- <link href="{{ asset('indeed/css/styles/all-themes.css') }}" rel="stylesheet" /> --}}
    {{-- <link href="{{ asset('indeed/css/styles/main.css') }}" rel="stylesheet" /> --}}
    @include ('frontend/bootstrap')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css">

    {{--    <link href="{{asset('indeed/css/styles/main.css')}}" rel="stylesheet" />--}}

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    @include ('frontend/again')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        .bg-purp {
            background: #79a739 !important;
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
            background-position: center;
            filter: brightness(58) saturate(0);
            background-size: 100%;
        }

        .navbar.navbar-expand-lg.bg-purp>.container-fluid {
            display: flex !important;
            justify-content: space-between;
        }

        .navbar.navbar-expand-lg.bg-purp>.container-fluid::before,
        .navbar.navbar-expand-lg.bg-purp>.container-fluid::after {
            display: none !important;
        }

        nav.navbar button:focus {
            outline: 0;
            background-color: transparent !important;
        }

        nav.navbar button.navbar-toggler {
            margin-right: 30px;
        }

        nav.navbar.navbar-expand-lg.bg-purp {
            border-radius: 0px !important;
        }

        a {
            color: #79a739;
            text-decoration: none;
        }

        @media (min-width: 768px) {
            .navbar-collapse.collapse {
                display: flex !important;
                justify-content: space-between;
            }
        }

        @media (max-width: 768px) {
            nav.navbar.navbar-expand-lg.bg-purp .navbar-collapse.collapse.show {
                padding-bottom: 1em !important;
            }

            .navbar-nav.me-auto.mb-2.mb-lg-0 {
                margin-inline: 16px !important;
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
            <a class="navbar-brand" href="{{url('/')}}">4Fresh</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link active" href="{{ url('dashboard') }}">Home</a>--}}
{{--                    </li>--}}
                    <li class="nav-item mx-md-3">
                        <a class="nav-link" href="{{ url('search-job') }}">Search Jobs</a></a>
                    </li>
                    <li class="nav-item mx-md-3">
                        <a class="nav-link" href="{{ url('cv-builder') }}">CV
                            Builder</a></a>
                    </li>
                    <li class="nav-item mx-md-3">
                        <a class="nav-link"href="{{ url('job-alert') }}">Job
                            Alerts</a></a>
                    </li>
                    <li class="nav-item mx-md-3">
                        <a class="nav-link"href="{{ url('help-center') }}">Help Center</a></a>
                    </li>
                </ul>
                <ul class="nav navbar-right">
                    @guest
                    <li class="site-nav__item"><a class="site-nav__link site-nav__link--login    btn btn-light"
                            href="{{ url('login') }}" id="nav-login">Login</a></li>
                    <li class="site-nav__item"><a class="site-nav__link site-nav__link--register btn btn-success-light"
                            href="{{ url('register') }}" id="nav-signup">Register</a></li>
                    @endguest
                    @auth
                            <li class="site-nav__item"><a class="site-nav__link site-nav__link--register btn btn-success-light"
                                                          href="{{ url('dashboard') }}" id="nav-signup">My Account</a></li>
                        @endauth
                        <li class="site-nav__item"><a class="site-nav__link site-nav__link--login    btn btn-light"
                                                  href="{{ url('recruiting') }}" id="nav-login">Start Recruiting Now</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
