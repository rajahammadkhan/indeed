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
    {{--    <link href="{{asset('indeed/css/styles/all-themes.css')}}" rel="stylesheet" /> --}}
    <link href="{{ asset('indeed/css/styles/main.css') }}" rel="stylesheet" />
</head>

<body class="light">
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
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="#" onClick="return false;" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="#" onClick="return false;" class="bars"></a>
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('indeed/images/logo.png') }}" alt="" />
                    <span class="logo-name">4fresh</span>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="pull-left">
                    <li>
                        <a href="#" onClick="return false;" class="sidemenu-collapse">
                            <svg class="openNavorNot" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px"
                                y="0px" width="20px" height="20px" viewBox="0 0 120 120"
                                enable-background="new 0 0 120 120" xml:space="preserve">
                                <polygon points="0.233,106.52 60,3 119.768,106.52 "></polygon>
                            </svg>
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <form class="m-0" method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="route('logout')" class="btn btn-success d-flex my-4" style="gap: 6px;"
                                onclick="event.preventDefault();
                                this.closest('form').submit();">
                                <i class="material-icons">power_settings_new</i>Logout
                            </a>
                        </form>
                    </li>
                    {{-- <li class="dropdown user_profile">
                        <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown"
                            role="button">
                            <img src="{{ asset('indeed/images/user.jpg') }}" width="32" height="32"
                                alt="User">
                        </a>
                        <ul class="dropdown-menu pullDown">
                            <li class="body">
                                <ul class="user_dw_menu">
                                    <li>
                                        <a href="{{ url('profile') }}" onClick="return false;">
                                            <i class="material-icons">person</i>Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('dashboard') }}" onClick="return false;">
                                            <i class="material-icons">dashboard</i>Dashboard
                                        </a>
                                    </li>
                                    <li>
                                        <form class="m-0" method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <a href="route('logout')"
                                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                <i class="material-icons">power_settings_new</i>Logout


                                            </a>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>  --}}
                </ul>
            </div>
        </div>
    </nav>
