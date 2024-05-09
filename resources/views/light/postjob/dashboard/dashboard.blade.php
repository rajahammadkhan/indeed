@extends('light.layouts.app')
@section('title')
    Dashboard - {{config('app.dashboard')}}
@endsection
@section('content')

    <section class="content">
        <div class="container-faluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Dashboard</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="{{url('home')}}">
                                    <i class="fas fa-home"></i> Home</a>
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
                        <h3 class="m-b-10">$758
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
                                            <img  src="asset{{('indeed/images/user/user3.jpg')}}" alt="">
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
                                            <img src="asset{{('indeed/images/user/user2.jpg')}}" alt="">
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
                                            <img src="asset{{('indeed/images/user/user3.jpg')}}" alt="">
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
                                            <img src="asset{{('indeed/images/user/user4.jpg')}}" alt="">
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
                                            <img src="asset{{('indeed/images/user/user5.jpg')}}" alt="">
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
                                            <img src="asset{{('indeed/images/user/user6.jpg')}}" alt="">
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
                                                             src="asset{{('indeed/images/user/user1.jpg')}}" alt="user">
                                                    </li>
                                                    <li class="avatar avatar-sm">
                                                        <img class="rounded-circle"
                                                             src="asset{{('indeed/images/user/user2.jpg')}}" alt="user">
                                                    </li>
                                                    <li class="avatar avatar-sm">
                                                        <img class="rounded-circle"
                                                             src="asset{{('indeed/images/user/user3.jpg')}}" alt="user">
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
                                                             src="asset{{('indeed/images/user/user1.jpg')}}" alt="user">
                                                    </li>
                                                    <li class="avatar avatar-sm">
                                                        <img class="rounded-circle"
                                                             src="asset{{('indeed/images/user/user2.jpg')}}" alt="user">
                                                    </li>
                                                    <li class="avatar avatar-sm">
                                                        <img class="rounded-circle"
                                                             src="asset{{('indeed/images/user/user3.jpg')}}" alt="user">
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
                                                             src="asset{{('indeed/images/user/user1.jpg')}}" alt="user">
                                                    </li>
                                                    <li class="avatar avatar-sm">
                                                        <img class="rounded-circle"
                                                             src="asset{{('indeed/images/user/user2.jpg')}}" alt="user">
                                                    </li>
                                                    <li class="avatar avatar-sm">
                                                        <img class="rounded-circle"
                                                             src="asset{{('indeed/images/user/user3.jpg')}}" alt="user">
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
                                                             src="asset{{('indeed/images/user/user1.jpg')}}" alt="user">
                                                    </li>
                                                    <li class="avatar avatar-sm">
                                                        <img class="rounded-circle"
                                                             src="asset{{('indeed/images/user/user2.jpg')}}" alt="user">
                                                    </li>
                                                    <li class="avatar avatar-sm">
                                                        <img class="rounded-circle"
                                                             src="asset{{('indeed/images/user/user3.jpg')}}" alt="user">
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
                                                             src="asset{{('indeed/images/user/user1.jpg')}}" alt="user">
                                                    </li>
                                                    <li class="avatar avatar-sm">
                                                        <img class="rounded-circle"
                                                             src="asset{{('indeed/images/user/user2.jpg')}}" alt="user">
                                                    </li>
                                                    <li class="avatar avatar-sm">
                                                        <img class="rounded-circle"
                                                             src="asset{{('indeed/images/user/user3.jpg')}}" alt="user">
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
                                                             src="asset{{('indeed/images/user/user1.jpg')}}" alt="user">
                                                    </li>
                                                    <li class="avatar avatar-sm">
                                                        <img class="rounded-circle"
                                                             src="asset{{('indeed/images/user/user2.jpg')}}" alt="user">
                                                    </li>
                                                    <li class="avatar avatar-sm">
                                                        <img class="rounded-circle"
                                                             src="asset{{('indeed/images/user/user3.jpg')}}" alt="user">
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
                                                             src="asset{{('indeed/images/user/user1.jpg')}}" alt="user">
                                                    </li>
                                                    <li class="avatar avatar-sm">
                                                        <img class="rounded-circle"
                                                             src="asset{{('indeed/images/user/user2.jpg')}}" alt="user">
                                                    </li>
                                                    <li class="avatar avatar-sm">
                                                        <img class="rounded-circle"
                                                             src="asset{{('indeed/images/user/user3.jpg')}}" alt="user">
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
                                        <img  src="asset{{('indeed/images/user/user1.jpg')}}" alt="">

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
                                        <img  src="asset{{('indeed/images/user/user2.jpg')}}" alt="">
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
@endsection