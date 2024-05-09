@extends('light.layouts.app3')
@section('title')
    Dashboard3 - {{config('app.dashboard')}}
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">Dashboard 3</h4>
                        </li>
                        <li class="breadcrumb-item bcrumb-1">
                            <a href="{{url('dashboard3')}}">
                                <i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item active">Dashboard 3</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="support-box text-center bg-green">
                    <div class="icon m-b-10">
                        <div class="chart chart-bar"></div>
                    </div>
                    <div class="text m-b-10">Total Income</div>
                    <h3 class="m-b-0">$1512
                        <i class="material-icons">trending_up</i>
                    </h3>
                    <small class="displayblock">21% Higher Than Average </small>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="support-box text-center bg-orange">
                    <div class="icon m-b-10">
                        <span class="chart chart-line"></span>
                    </div>
                    <div class="text m-b-10">Orders Received</div>
                    <h3 class="m-b-0">1236
                        <i class="material-icons">trending_up</i>
                    </h3>
                    <small class="displayblock">13% Highr Than Average </small>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="support-box text-center bg-cyan">
                    <div class="icon m-b-10">
                        <div class="chart chart-pie"></div>
                    </div>
                    <div class="text m-b-10">Total Sales</div>
                    <h3 class="m-b-0">1107
                        <i class="material-icons">trending_down</i>
                    </h3>
                    <small class="displayblock">34% Lower Than Average </small>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="support-box text-center bg-purple">
                    <div class="icon m-b-10">
                        <div class="chart chart-bar"></div>
                    </div>
                    <div class="text m-b-10">Total Active Users</div>
                    <h3 class="m-b-0">167
                        <i class="material-icons">trending_down</i>
                    </h3>
                    <small class="displayblock">06% Lower Than Average </small>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Recent</strong> Report</h2>
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
                        <div class="recent-report__chart">
                            <canvas id="line-chart2"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Recent</strong> Report</h2>
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
                        <div class="recent-report__chart">
                            <canvas id="radar-chart"></canvas>
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
                            <strong>Clients</strong> Details</h2>
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
                                        <img src="asset{{('indeed/images/user/user1.jpg')}}" alt="">
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
                            <strong>New </strong>Projects</h2>
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
                                                         src="asset{{('indeed/images/user/user1.jpg')}}" alt="user">                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle"
                                                         src="asset{{('indeed/images/user/user2.jpg')}}" alt="user">                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle"
                                                         src="asset{{('indeed/images/user/user3.jpg')}}" alt="user">                                                </li>
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
                                                         src="asset{{('indeed/images/user/user1.jpg')}}" alt="user">                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle"
                                                         src="asset{{('indeed/images/user/user2.jpg')}}" alt="user">                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle"
                                                         src="asset{{('indeed/images/user/user3.jpg')}}" alt="user">                                                </li>
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
                                                         src="asset{{('indeed/images/user/user1.jpg')}}" alt="user">                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle"
                                                         src="asset{{('indeed/images/user/user2.jpg')}}" alt="user">                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle"
                                                         src="asset{{('indeed/images/user/user3.jpg')}}" alt="user">                                                </li>
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
                                                         src="asset{{('indeed/images/user/user1.jpg')}}" alt="user">                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle"
                                                         src="asset{{('indeed/images/user/user2.jpg')}}" alt="user">                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle"
                                                         src="asset{{('indeed/images/user/user3.jpg')}}" alt="user">                                                </li>
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
            <!-- Activity -->
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="header">
                        <h2>Activity</h2>
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
                        <div class="assign-style">
                            <ul class="feedBody">
                                <li class="active-feed">
                                    <div class="feed-user-img">
                                        <img src="asset{{('indeed/images/user/user1.jpg')}}" class="img-radius "
                                             alt="User-Profile-Image">
                                    </div>
                                    <h6>
                                        <span class="feedLblStyle lblFileStyle">File</span> Sarah Smith
                                        <small class="text-muted">6 hours ago</small>
                                    </h6>
                                    <p class="m-b-15 m-t-15">
                                        hii John, I have upload doc related to task.
                                    </p>
                                </li>
                                <li class="diactive-feed">
                                    <div class="feed-user-img">
                                        <img src="asset{{('indeed/images/user/user2.jpg')}}" class="img-radius "
                                             alt="User-Profile-Image">
                                    </div>
                                    <h6>
                                        <span class="feedLblStyle lblTaskStyle">Task </span> Jalpa Joshi
                                        <small class="text-muted">5 hours ago
                                        </small>
                                    </h6>
                                    <p class="m-b-15 m-t-15">
                                        Please do as specify. Let me know if you have any query.
                                    </p>
                                </li>
                                <li class="diactive-feed">
                                    <div class="feed-user-img">
                                        <img src="../../assets/images/user/user3.jpg" class="img-radius "
                                             alt="User-Profile-Image">
                                    </div>
                                    <h6>
                                        <span class="feedLblStyle lblCommentStyle">comment</span> Lina Smith
                                        <small class="text-muted">6 hours ago</small>
                                    </h6>
                                    <p class="m-b-15 m-t-15">
                                        Hey, How are you??
                                    </p>
                                </li>
                                <li class="active-feed">
                                    <div class="feed-user-img">
                                        <img src="../../assets/images/user/user4.jpg" class="img-radius "
                                             alt="User-Profile-Image">
                                    </div>
                                    <h6>
                                        <span class="feedLblStyle lblReplyStyle">Reply</span> Jacob Ryan
                                        <small class="text-muted">7 hours ago</small>
                                    </h6>
                                    <p class="m-b-15 m-t-15">
                                        I am fine. You??
                                    </p>
                                </li>
                                <li class="active-feed">
                                    <div class="feed-user-img">
                                        <img src="../../assets/images/user/user5.jpg" class="img-radius "
                                             alt="User-Profile-Image">
                                    </div>
                                    <h6>
                                        <span class="feedLblStyle lblFileStyle">File</span> Sarah Smith
                                        <small class="text-muted">6 hours ago</small>
                                    </h6>
                                    <p class="m-b-15 m-t-15">
                                        hii John, I have upload doc related to task.
                                    </p>
                                </li>
                                <li class="diactive-feed">
                                    <div class="feed-user-img">
                                        <img src="../../assets/images/user/user6.jpg" class="img-radius "
                                             alt="User-Profile-Image">
                                    </div>
                                    <h6>
                                        <span class="feedLblStyle lblTaskStyle">Task </span> Jalpa Joshi
                                        <small class="text-muted">5 hours ago
                                        </small>
                                    </h6>
                                    <p class="m-b-15 m-t-15">
                                        Please do as specify. Let me know if you have any query.
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Activity -->
            <!-- TODO List -->
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Todo</strong> List</h2>
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
                        <ul class="to-do-list ui-sortable" id="sortable-todo">
                            <li class="clearfix">
                                <div class="form-check m-l-10">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value=""> Add salary
                                        details in system
                                        <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                    </label>
                                </div>
                                <div class="todo-actionlist pull-right clearfix">
                                    <a href="#" class="todo-remove">
                                        <i class="material-icons">clear</i>
                                    </a>
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="form-check m-l-10">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value=""> Announcement for
                                        holiday
                                        <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                    </label>
                                </div>
                                <div class="todo-actionlist pull-right clearfix">
                                    <a href="#" class="todo-remove">
                                        <i class="material-icons">clear</i>
                                    </a>
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="form-check m-l-10">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value=""> call bus driver
                                        <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                    </label>
                                </div>
                                <div class="todo-actionlist pull-right clearfix">
                                    <a href="#" class="todo-remove">
                                        <i class="material-icons">clear</i>
                                    </a>
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="form-check m-l-10">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value=""> Office picnic
                                        <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                    </label>
                                </div>
                                <div class="todo-actionlist pull-right clearfix">
                                    <a href="#" class="todo-remove">
                                        <i class="material-icons">clear</i>
                                    </a>
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="form-check m-l-10">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value=""> Add salary
                                        details in system
                                        <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                    </label>
                                </div>
                                <div class="todo-actionlist pull-right clearfix">
                                    <a href="#" class="todo-remove">
                                        <i class="material-icons">clear</i>
                                    </a>
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="form-check m-l-10">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value=""> Announcement for
                                        holiday
                                        <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                    </label>
                                </div>
                                <div class="todo-actionlist pull-right clearfix">
                                    <a href="#" class="todo-remove">
                                        <i class="material-icons">clear</i>
                                    </a>
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="form-check m-l-10">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value=""> call bus driver
                                        <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                    </label>
                                </div>
                                <div class="todo-actionlist pull-right clearfix">
                                    <a href="#" class="todo-remove">
                                        <i class="material-icons">clear</i>
                                    </a>
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="form-check m-l-10">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value=""> Add salary
                                        details in system
                                        <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                    </label>
                                </div>
                                <div class="todo-actionlist pull-right clearfix">
                                    <a href="#" class="todo-remove">
                                        <i class="material-icons">clear</i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #END# TODO List -->
        </div>
    </div>
</section>
@endsection