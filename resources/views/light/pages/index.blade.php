<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Lorax - Bootstrap 4 Admin Dashboard Template</title>
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link href="assets/css/app.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/styles/all-themes.css" rel="stylesheet" />
</head>

<body class="light">
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30">
            <img class="loading-img-spin" src="assets/images/loading.png" width="20" height="20" alt="admin">
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
            <a class="navbar-brand" href="index-2.html">
                <img src="assets/images/logo.png" alt="" />
                <span class="logo-name">Lorax</span>
            </a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="pull-left">
                <li>
                    <a href="#" onClick="return false;" class="sidemenu-collapse">
                        <svg class="openNavorNot" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px"
                             width="20px" height="20px" viewBox="0 0 120 120" enable-background="new 0 0 120 120"
                             xml:space="preserve">
                                <polygon points="0.233,106.52 60,3 119.768,106.52 "></polygon>
                            </svg>
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <!-- Full Screen Button -->
                <li class="fullscreen">
                    <a href="javascript:;" class="fullscreen-btn">
                        <i class="fas fa-expand"></i>
                    </a>
                </li>
                <!-- #END# Full Screen Button -->
                <!-- #START# Notifications-->
                <li class="dropdown">
                    <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown"
                       role="button">
                        <i class="far fa-bell"></i>
                        <span class="label-count bg-orange"></span>
                    </a>
                    <ul class="dropdown-menu pullDown">
                        <li class="header">NOTIFICATIONS</li>
                        <li class="body">
                            <ul class="menu">
                                <li>
                                    <a href="#" onClick="return false;">
                                            <span class="table-img msg-user">
                                                <img src="assets/images/user/user1.jpg" alt="">
                                            </span>
                                        <span class="menu-info">
                                                <span class="menu-title">Sarah Smith</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 14 mins ago
                                                </span>
                                                <span class="menu-desc">Please check your email.</span>
                                            </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onClick="return false;">
                                            <span class="table-img msg-user">
                                                <img src="assets/images/user/user2.jpg" alt="">
                                            </span>
                                        <span class="menu-info">
                                                <span class="menu-title">Airi Satou</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 22 mins ago
                                                </span>
                                                <span class="menu-desc">Please check your email.</span>
                                            </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onClick="return false;">
                                            <span class="table-img msg-user">
                                                <img src="assets/images/user/user3.jpg" alt="">
                                            </span>
                                        <span class="menu-info">
                                                <span class="menu-title">John Doe</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </span>
                                                <span class="menu-desc">Please check your email.</span>
                                            </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onClick="return false;">
                                            <span class="table-img msg-user">
                                                <img src="assets/images/user/user4.jpg" alt="">
                                            </span>
                                        <span class="menu-info">
                                                <span class="menu-title">Ashton Cox</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 2 hours ago
                                                </span>
                                                <span class="menu-desc">Please check your email.</span>
                                            </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onClick="return false;">
                                            <span class="table-img msg-user">
                                                <img src="assets/images/user/user5.jpg" alt="">
                                            </span>
                                        <span class="menu-info">
                                                <span class="menu-title">Cara Stevens</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 4 hours ago
                                                </span>
                                                <span class="menu-desc">Please check your email.</span>
                                            </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onClick="return false;">
                                            <span class="table-img msg-user">
                                                <img src="assets/images/user/user6.jpg" alt="">
                                            </span>
                                        <span class="menu-info">
                                                <span class="menu-title">Charde Marshall</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </span>
                                                <span class="menu-desc">Please check your email.</span>
                                            </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onClick="return false;">
                                            <span class="table-img msg-user">
                                                <img src="assets/images/user/user7.jpg" alt="">
                                            </span>
                                        <span class="menu-info">
                                                <span class="menu-title">John Doe</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> Yesterday
                                                </span>
                                                <span class="menu-desc">Please check your email.</span>
                                            </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="#" onClick="return false;">View All Notifications</a>
                        </li>
                    </ul>
                </li>
                <!-- #END# Notifications-->
                <li class="dropdown user_profile">
                    <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown"
                       role="button">
                        <img src="assets/images/user.jpg" width="32" height="32" alt="User">
                    </a>
                    <ul class="dropdown-menu pullDown">
                        <li class="body">
                            <ul class="user_dw_menu">
                                <li>
                                    <a href="#" onClick="return false;">
                                        <i class="material-icons">person</i>Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onClick="return false;">
                                        <i class="material-icons">feedback</i>Feedback
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onClick="return false;">
                                        <i class="material-icons">help</i>Help
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onClick="return false;">
                                        <i class="material-icons">power_settings_new</i>Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- #END# Tasks -->
                <li class="pull-right">
                    <a href="#" onClick="return false;" class="js-right-sidebar" data-close="true">
                        <i class="fas fa-cog"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div>
    <aside id="leftsidebar" class="sidebar">
        <div class="menu">
            <ul class="list">
                <li class="position-relative active postaNewJob">
                    <a href="./page/postJob/postJobForm.html" class="">
                        <i class="fas fa-plus text-white"></i>
                        <span>Post a job</span>
                    </a>
                </li>
                <li class="position-relative active">
                    <a href="index-2.html" onClick="return false;" class="menu-toggle">
                        <span>Home</span>
                    </a>
                </li>
                <li class="position-relative">
                    <a href="#" onClick="return false;" class="menu-toggle">
                        <i class="fab fa-google-play"></i>
                        <span>Manage Jobs</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="./page/postJob/postJobForm.html">Post Job Now</a>
                        </li>
                        <li>
                            <a href="./page/postJob/modifyJob.html">Modify/Delete Jobs</a>
                        </li>
                        <li>
                            <a href="#">Current Jobs</a>
                        </li>
                        <li>
                            <a href="#">Job Application</a>
                        </li>
                        <li>
                            <a href="#">Manage Job Templates</a>
                        </li>
                        <li>
                            <a href="#">Social Job Posting</a>
                        </li>
                        <li>
                            <a href="#">Nation/Regionwide Jobs</a>
                        </li>
                    </ul>
                </li>
                <li class="position-relative">
                    <a href="#" onClick="return false;" class="menu-toggle">
                        <i class="fas fa-mail-bulk"></i>
                        <span>Search CVs</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="pages/email/inbox.html">Search CVs</a>
                        </li>
                        <li>
                            <a href="pages/email/compose.html">Recent CVs</a>
                        </li>
                        <li>
                            <a href="pages/email/view-mail.html">Saved CVs</a>
                        </li>
                        <li>
                            <a href="#">Saved Searches</a>
                        </li>
                        <li>
                            <a href="#">Recently Viewed CVs</a>
                        </li>
                        <li>
                            <a href="#">CV Notes</a>
                        </li>
                        <li>
                            <a href="#">Removed CVs</a>
                        </li>
                        <li>
                            <a href="#">Popular Searches</a>
                        </li>
                    </ul>
                </li>

                <li class="position-relative">
                    <a href="#" onClick="return false;" class="menu-toggle">
                        <i class="fas fa-shopping-cart"></i>
                        <span>CV Watchdogs</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="pages/ecommerce/products.html">Watchdogs Control Panel</a>
                        </li>
                        <li>
                            <a href="pages/ecommerce/product-detail.html">Create Watchdogs</a>
                        </li>
                        <li>
                            <a href="pages/ecommerce/cart.html">Modify Watchdogs</a>
                        </li>
                        <li>
                            <a href="pages/ecommerce/product-list.html">Watchdogs Sent</a>
                        </li>
                        <li>
                            <a href="pages/ecommerce/invoice.html">Reactive Watchdogs</a>
                        </li>
                    </ul>
                </li>
                <li class="position-relative">
                    <a href="pages/widgets/widget.html">
                        <i class="fas fa-braille"></i>
                        <span>Projects</span>
                    </a>
                </li>
                <li class="position-relative">
                    <a href="pages/examples/profile.html">
                        <i class="fas fa-braille"></i>
                        <span>Profile</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <aside id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs tab-nav-right" role="tablist">
            <li role="presentation">
                <a href="#skins" data-toggle="tab" class="active">SKINS</a>
            </li>
            <li role="presentation">
                <a href="#settings" data-toggle="tab">SETTINGS</a>
            </li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane in active in active stretchLeft" id="skins">
                <div class="demo-skin">
                    <div class="rightSetting">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list list-unstyled m-t-20">
                            <li>
                                <div class="form-check">
                                    <div class="form-check m-l-10">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" value="" checked> Save
                                            History
                                            <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <div class="form-check m-l-10">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" value="" checked> Show
                                            Status
                                            <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <div class="form-check m-l-10">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" value="" checked> Auto
                                            Submit Issue
                                            <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <div class="form-check m-l-10">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" value="" checked> Show
                                            Status To All
                                            <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="rightSetting">
                        <p>SIDEBAR MENU COLORS</p>
                        <button type="button"
                                class="btn btn-sidebar-light btn-border-radius p-l-20 p-r-20">Light</button>
                        <button type="button"
                                class="btn btn-sidebar-dark btn-default btn-border-radius p-l-20 p-r-20">Dark</button>
                    </div>
                    <div class="rightSetting">
                        <p>THEME COLORS</p>
                        <button type="button"
                                class="btn btn-theme-light btn-border-radius p-l-20 p-r-20">Light</button>
                        <button type="button"
                                class="btn btn-theme-dark btn-default btn-border-radius p-l-20 p-r-20">Dark</button>
                    </div>
                    <div class="rightSetting">
                        <p>SKINS</p>
                        <ul class="demo-choose-skin choose-theme list-unstyled">
                            <li data-theme="black" class="actived">
                                <div class="black-theme"></div>
                            </li>
                            <li data-theme="white">
                                <div class="white-theme white-theme-border"></div>
                            </li>
                            <li data-theme="purple">
                                <div class="purple-theme"></div>
                            </li>
                            <li data-theme="blue">
                                <div class="blue-theme"></div>
                            </li>
                            <li data-theme="cyan">
                                <div class="cyan-theme"></div>
                            </li>
                            <li data-theme="green">
                                <div class="green-theme"></div>
                            </li>
                            <li data-theme="orange">
                                <div class="orange-theme"></div>
                            </li>
                        </ul>
                    </div>
                    <div class="rightSetting">
                        <p>Disk Space</p>
                        <div class="sidebar-progress">
                            <div class="progress m-t-20">
                                <div class="progress-bar l-bg-cyan shadow-style width-per-45" role="progressbar"
                                     aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="progress-description">
                                    <small>26% remaining</small>
                                </span>
                        </div>
                    </div>
                    <div class="rightSetting">
                        <p>Server Load</p>
                        <div class="sidebar-progress">
                            <div class="progress m-t-20">
                                <div class="progress-bar l-bg-orange shadow-style width-per-63" role="progressbar"
                                     aria-valuenow="63" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="progress-description">
                                    <small>Highly Loaded</small>
                                </span>
                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane stretchRight" id="settings">
                <div class="demo-settings">
                    <p>GENERAL SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Report Panel Usage</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever switch-col-green"></span>
                                </label>
                            </div>
                        </li>
                        <li>
                            <span>Email Redirect</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox">
                                    <span class="lever switch-col-blue"></span>
                                </label>
                            </div>
                        </li>
                    </ul>
                    <p>SYSTEM SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Notifications</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever switch-col-purple"></span>
                                </label>
                            </div>
                        </li>
                        <li>
                            <span>Auto Updates</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever switch-col-cyan"></span>
                                </label>
                            </div>
                        </li>
                    </ul>
                    <p>ACCOUNT SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Offline</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever switch-col-red"></span>
                                </label>
                            </div>
                        </li>
                        <li>
                            <span>Location Permission</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox">
                                    <span class="lever switch-col-lime"></span>
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </aside>
    <!-- #END# Right Sidebar -->
</div>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">Dashboard</h4>
                        </li>
                        <li class="breadcrumb-item bcrumb-1">
                            <a href="index-2.html">
                                <i class="fas fa-home"></i> Homee</a>
                        </li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Widgets -->
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="counter-box text-center white">
                    <div class="text font-17 m-b-5">Total Income</div>
                    <h3 class="m-b-10">$758t
                        <i class="material-icons col-green">trending_up</i>
                    </h3>
                    <div class="icon">
                        <div class="chart chart-bar"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="counter-box text-center white">
                    <div class="text font-17 m-b-5">Orders Received</div>
                    <h3 class="m-b-10">1025
                        <i class="material-icons col-red">trending_down</i>
                    </h3>
                    <div class="icon">
                        <span class="chart chart-line"></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="counter-box text-center white">
                    <div class="text font-17 m-b-5">Total Sales</div>
                    <h3 class="m-b-10">956
                        <i class="material-icons col-green">trending_up</i>
                    </h3>
                    <div class="icon">
                        <div class="chart chart-pie"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="counter-box text-center white">
                    <div class="text font-17 m-b-5">Total Active Users</div>
                    <h3 class="m-b-10">214
                        <i class="material-icons col-red">trending_down</i>
                    </h3>
                    <div class="icon">
                        <div class="chart" id="liveChart">Loading..</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Widgets -->
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Recent</strong> Report
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown"
                                   role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="#" onClick="return false;">Action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Another action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Something else here</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="card">
                            <div class="chart-box-left">
                                <div class="chart-note">
                                    <span class="dot dot-product"></span>
                                    <span>products</span>
                                </div>
                                <div class="chart-note mr-0">
                                    <span class="dot dot-service"></span>
                                    <span>services</span>
                                </div>
                            </div>
                            <!-- Canvas for Chart.js -->
                            <canvas id="chartReport1"></canvas>
                            <!-- Custom Axis -->
                            <div class="axisData">
                                <div class="tick">
                                    MON <span class="value productValue">24</span> <span
                                            class="value serviceValue">20</span>
                                </div>
                                <div class="tick">
                                    TUE <span class="value productValue">18</span> <span
                                            class="value serviceValue">22</span>
                                </div>
                                <div class="tick">
                                    WED <span class="value productValue">16</span> <span
                                            class="value serviceValue">30</span>
                                </div>
                                <div class="tick">
                                    THU <span class="value productValue">18</span> <span
                                            class="value serviceValue">22</span>
                                </div>
                                <div class="tick">
                                    FRI <span class="value productValue">24</span> <span
                                            class="value serviceValue">18</span>
                                </div>
                                <div class="tick">
                                    SAT <span class="value productValue">36</span> <span
                                            class="value serviceValue">22</span>
                                </div>
                                <div class="tick">
                                    SUN <span class="value productValue">28</span> <span
                                            class="value serviceValue">30</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Recent</strong> Report
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown"
                                   role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="#" onClick="return false;">Action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Another action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Something else here</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="card">
                            <div class="chart-box-left">
                                <div class="chart-note">
                                    <span class="dot dot-product"></span>
                                    <span>products</span>
                                </div>
                                <div class="chart-note mr-0">
                                    <span class="dot dot-service"></span>
                                    <span>services</span>
                                </div>
                            </div>
                            <!-- Canvas for Chart.js -->
                            <canvas id="chartReport2"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <!-- Task Info -->
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Clients</strong> Details
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown"
                                   role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="#" onClick="return false;">Action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Another action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Something else here</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="tableBody">
                        <div class="table-responsive">
                            <table class="table table-hover dashboard-task-infos">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Project Name</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="table-img">
                                        <img src="assets/images/user/user1.jpg" alt="">
                                    </td>
                                    <td>John Doe</td>
                                    <td>xyz@email.com</td>
                                    <td>
                                        <span class="label bg-green shadow-style">Active</span>
                                    </td>
                                    <td>ERP System</td>
                                    <td>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">mode_edit</i>
                                        </button>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-img">
                                        <img src="assets/images/user/user2.jpg" alt="">
                                    </td>
                                    <td>Sarah Smith</td>
                                    <td>xyz@email.com</td>
                                    <td>
                                        <span class="label bg-red shadow-style">Inactive</span>
                                    </td>
                                    <td>Abc Website</td>
                                    <td>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">mode_edit</i>
                                        </button>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-img">
                                        <img src="assets/images/user/user3.jpg" alt="">
                                    </td>
                                    <td>Airi Satou</td>
                                    <td>xyz@email.com</td>
                                    <td>
                                        <span class="label bg-green shadow-style">Active</span>
                                    </td>
                                    <td>Android App</td>
                                    <td>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">mode_edit</i>
                                        </button>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-img">
                                        <img src="assets/images/user/user4.jpg" alt="">
                                    </td>
                                    <td>Angelica Ramos</td>
                                    <td>xyz@email.com</td>
                                    <td>
                                        <span class="label bg-green shadow-style">Active</span>
                                    </td>
                                    <td>Ios App</td>
                                    <td>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">mode_edit</i>
                                        </button>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-img">
                                        <img src="assets/images/user/user5.jpg" alt="">
                                    </td>
                                    <td>Ashton Cox</td>
                                    <td>xyz@email.com</td>
                                    <td>
                                        <span class="label bg-red shadow-style">Inactive</span>
                                    </td>
                                    <td>Java Website</td>
                                    <td>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">mode_edit</i>
                                        </button>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-img">
                                        <img src="assets/images/user/user6.jpg" alt="">
                                    </td>
                                    <td>Cara Stevens</td>
                                    <td>xyz@email.com</td>
                                    <td>
                                        <span class="label bg-green shadow-style">Active</span>
                                    </td>
                                    <td>Desktop App</td>
                                    <td>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">mode_edit</i>
                                        </button>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Task Info -->
            <!-- Browser Usage -->
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>New </strong>Projects
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown"
                                   role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="#" onClick="return false;">Action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Another action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Something else here</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div id="new-orders" class="media-list position-relative">
                            <div class="table-responsive">
                                <table id="new-orders-table" class="table table-hover table-xl mb-0">
                                    <thead>
                                    <tr>
                                        <th class="border-top-0">Product</th>
                                        <th class="border-top-0">Employees</th>
                                        <th class="border-top-0">Cost</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-truncate">iPhone X</td>
                                        <td class="text-truncate">
                                            <ul class="list-unstyled order-list">
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle"
                                                         src="assets/images/user/user1.jpg" alt="user">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle"
                                                         src="assets/images/user/user2.jpg" alt="user">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle"
                                                         src="assets/images/user/user3.jpg" alt="user">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <span class="badge">+4</span>
                                                </li>
                                            </ul>
                                        </td>
                                        <td class="text-truncate">$8999</td>
                                    </tr>
                                    <tr>
                                        <td class="text-truncate">Pixel 2</td>
                                        <td class="text-truncate">
                                            <ul class="list-unstyled order-list">
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle"
                                                         src="assets/images/user/user1.jpg" alt="user">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle"
                                                         src="assets/images/user/user2.jpg" alt="user">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle"
                                                         src="assets/images/user/user3.jpg" alt="user">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <span class="badge">+4</span>
                                                </li>
                                            </ul>
                                        </td>
                                        <td class="text-truncate">$5550</td>
                                    </tr>
                                    <tr>
                                        <td class="text-truncate">OnePlus</td>
                                        <td class="text-truncate">
                                            <ul class="list-unstyled order-list">
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle"
                                                         src="assets/images/user/user1.jpg" alt="user">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle"
                                                         src="assets/images/user/user2.jpg" alt="user">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle"
                                                         src="assets/images/user/user3.jpg" alt="user">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <span class="badge">+4</span>
                                                </li>
                                            </ul>
                                        </td>
                                        <td class="text-truncate">$9000</td>
                                    </tr>
                                    <tr>
                                        <td class="text-truncate">Galaxy</td>
                                        <td class="text-truncate">
                                            <ul class="list-unstyled order-list">
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle"
                                                         src="assets/images/user/user1.jpg" alt="user">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle"
                                                         src="assets/images/user/user2.jpg" alt="user">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle"
                                                         src="assets/images/user/user3.jpg" alt="user">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <span class="badge">+4</span>
                                                </li>
                                            </ul>
                                        </td>
                                        <td class="text-truncate">$7500</td>
                                    </tr>
                                    <tr>
                                        <td class="text-truncate">Moto Z2</td>
                                        <td class="text-truncate">
                                            <ul class="list-unstyled order-list">
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle"
                                                         src="assets/images/user/user1.jpg" alt="user">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle"
                                                         src="assets/images/user/user2.jpg" alt="user">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle"
                                                         src="assets/images/user/user3.jpg" alt="user">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <span class="badge">+4</span>
                                                </li>
                                            </ul>
                                        </td>
                                        <td class="text-truncate">$8500</td>
                                    </tr>
                                    <tr>
                                        <td class="text-truncate">iPhone X</td>
                                        <td class="text-truncate">
                                            <ul class="list-unstyled order-list">
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle"
                                                         src="assets/images/user/user1.jpg" alt="user">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle"
                                                         src="assets/images/user/user2.jpg" alt="user">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle"
                                                         src="assets/images/user/user3.jpg" alt="user">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <span class="badge">+4</span>
                                                </li>
                                            </ul>
                                        </td>
                                        <td class="text-truncate">$8999</td>
                                    </tr>
                                    <tr>
                                        <td class="text-truncate">iPhone X</td>
                                        <td class="text-truncate">
                                            <ul class="list-unstyled order-list">
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle"
                                                         src="assets/images/user/user1.jpg" alt="user">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle"
                                                         src="assets/images/user/user2.jpg" alt="user">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle"
                                                         src="assets/images/user/user3.jpg" alt="user">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <span class="badge">+4</span>
                                                </li>
                                            </ul>
                                        </td>
                                        <td class="text-truncate">$8999</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Browser Usage -->
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="box-part text-center">
                    <i class="fab fa-twitter fa-3x col-blue"></i>
                    <div class="title p-t-15">
                        <h3>Twitter</h3>
                    </div>
                    <div class="text p-b-10">
                            <span>Lorem ipsum dolor sit amet, id quo eruditi
                                eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui
                                ad.</span>
                    </div>
                    <a href="#">Learn More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="box-part text-center">
                    <i class="fab fa-instagram fa-3x col-red"></i>
                    <div class="title p-t-15">
                        <h3>Instagram</h3>
                    </div>
                    <div class="text p-b-10">
                            <span>Lorem ipsum dolor sit amet, id quo eruditi
                                eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui
                                ad.</span>
                    </div>
                    <a href="#">Learn More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="box-part text-center">
                    <i class="fab fa-facebook-f fa-3x col-blue"></i>
                    <div class="title p-t-15">
                        <h3>Facebook</h3>
                    </div>
                    <div class="text p-b-10">
                            <span>Lorem ipsum dolor sit amet, id quo eruditi
                                eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui
                                ad.</span>
                    </div>
                    <a href="#">Learn More</a>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Earning</strong> Source
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown"
                                   role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="#" onClick="return false;">Action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Another action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Something else here</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="totalEarning">
                            <h2>$90,808</h2>
                        </div>
                        <div class="p-t-10">
                            <span class="pull-left progress-label">envato.com</span>
                            <span class="pull-right progress-percent label label-info m-b-5">17%</span>
                        </div>
                        <div class="earningProgress">
                            <div class="progress shadow-style">
                                <div class="progress-bar l-bg-green width-per-17" role="progressbar"
                                     aria-valuenow="17" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="p-t-10">
                            <span class="pull-left progress-label">google.com</span>
                            <span class="pull-right progress-percent label label-danger m-b-5">27%</span>
                        </div>
                        <div class="earningProgress">
                            <div class="progress shadow-style">
                                <div class="progress-bar l-bg-purple width-per-27" role="progressbar"
                                     aria-valuenow="27" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="p-t-10">
                            <span class="pull-left progress-label">yahoo.com</span>
                            <span class="pull-right progress-percent label label-primary m-b-5">25%</span>
                        </div>
                        <div class="earningProgress">
                            <div class="progress shadow-style">
                                <div class="progress-bar l-bg-orange width-per-25" role="progressbar"
                                     aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="p-t-10">
                            <span class="pull-left progress-label">store</span>
                            <span class="pull-right progress-percent label label-success m-b-5">18%</span>
                        </div>
                        <div class="earningProgress">
                            <div class="progress shadow-style">
                                <div class="progress-bar l-bg-cyan width-per-18" role="progressbar"
                                     aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="p-t-10">
                            <span class="pull-left progress-label">Others</span>
                            <span class="pull-right progress-percent label label-warning m-b-5">13%</span>
                        </div>
                        <div class="earningProgress">
                            <div class="progress shadow-style">
                                <div class="progress-bar l-bg-red width-per-13" role="progressbar"
                                     aria-valuenow="13" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Customer Review -->
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Customer</strong> Review
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown"
                                   role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="#" onClick="return false;">Action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Another action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Something else here</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="review-block">
                            <div class="row">
                                <div class="review-img">
                                    <img src="assets/images/user/user1.jpg" alt="">
                                </div>
                                <div class="col">
                                    <h6 class="m-b-15">Alis Smith
                                        <span class="float-right m-r-10 text-muted"> a week ago
                                            </span>
                                    </h6>
                                    <i class="material-icons col-green">star</i>
                                    <i class="material-icons col-green">star</i>
                                    <i class="material-icons col-green">star</i>
                                    <i class="material-icons col-green">star_half</i>
                                    <i class="material-icons col-green">star_border</i>
                                    <p class="m-t-15 m-b-15">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Etiam vel rutrum ex, at
                                        ornare mi. In quis scelerisque dui, eget rhoncus orci. Fusce et sodales
                                        ipsum.
                                        Nam id nunc euismod, aliquet arcu quis, mattis nisi.
                                    </p>
                                    <a href="#!">
                                        <i class="material-icons m-r-10">thumb_up</i>
                                    </a>
                                    <a href="#!">
                                        <i class="material-icons m-r-10 col-red">thumb_down</i>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="review-img">
                                    <img src="assets/images/user/user2.jpg" alt="">
                                </div>
                                <div class="col">
                                    <h6 class="m-b-15">John Dio
                                        <span class="float-right m-r-10 text-muted"> a week ago
                                            </span>
                                    </h6>
                                    <i class="material-icons col-red">star</i>
                                    <i class="material-icons col-red">star_half</i>
                                    <i class="material-icons col-red">star_border</i>
                                    <i class="material-icons col-red">star_border</i>
                                    <i class="material-icons col-red">star_border</i>
                                    <p class="m-t-15 m-b-15">Nam quis ligula est. Nunc sed risus non
                                        turpis tristique tempor. Ut sollicitudin
                                        faucibus magna nec gravida. Suspendisse ullamcorper justo vel porta
                                        imperdiet.
                                        Nunc nec ipsum vel augue placerat faucibus. </p>
                                    <a href="#!">
                                        <i class="material-icons m-r-10">thumb_up</i>
                                    </a>
                                    <a href="#!">
                                        <i class="material-icons m-r-10 col-red">thumb_down</i>
                                    </a>
                                </div>
                            </div>
                            <div class="text-center  m-b-5">
                                <a href="#!" class="b-b-primary text-primary">View all Customer Reviews</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Customer Review -->
        </div>
    </div>
</section>
<script src="assets/js/app.min.js"></script>
<script src="assets/js/chart.min.js"></script>
<script src="assets/js/admin.js"></script>
<script src="assets/js/pages/index.js"></script>
<script src="assets/js/pages/charts/jquery-knob.js"></script>
<script src="assets/js/pages/sparkline/sparkline-data.js"></script>
<script src="assets/js/pages/medias/carousel.js"></script>
</body>