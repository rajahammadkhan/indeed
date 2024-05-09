@extends('light.layouts.app3')
@section('title')
    Support - {{config('app.dashboard')}}
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">Support</h4>
                        </li>
                        <li class="breadcrumb-item bcrumb-1">
                            <a href="../../index-2.html">
                                <i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item bcrumb-2">
                            <a href="#" onClick="return false;">Apps</a>
                        </li>
                        <li class="breadcrumb-item active">Support</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Support</strong> Tickets
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
                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="support-box text-center l-bg-red">
                                    <div class="icon m-b-10">
                                        <div class="chart chart-bar">6,4,8,6,8,10,5,6,7,9,5,6,4,8,6,8,10,5,6,7,9,5
                                        </div>
                                    </div>
                                    <div class="text m-b-10">Total Ticket</div>
                                    <h3 class="m-b-0">1512
                                        <i class="material-icons">trending_up</i>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="support-box text-center l-bg-cyan">
                                    <div class="icon m-b-10">
                                        <span class="chart chart-line">9,4,6,5,6,4,7,3</span>
                                    </div>
                                    <div class="text m-b-10">Reply</div>
                                    <h3 class="m-b-0">1236
                                        <i class="material-icons">trending_up</i>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="support-box text-center l-bg-orange">
                                    <div class="icon m-b-10">
                                        <div class="chart chart-pie">30, 35, 25, 8</div>
                                    </div>
                                    <div class="text m-b-10">Resolve</div>
                                    <h3 class="m-b-0">1107
                                        <i class="material-icons">trending_down</i>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="support-box text-center green">
                                    <div class="icon m-b-10">
                                        <div class="chart chart-bar">
                                            4,6,-3,-1,2,-2,4,3,6,7,-2,3,4,6,-3,-1,2,-2,4,3,6,7,-2,3</div>
                                    </div>
                                    <div class="text m-b-10">Pending</div>
                                    <h3 class="m-b-0">167
                                        <i class="material-icons">trending_down</i>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="tableExport"
                                   class="display table table-hover table-checkable order-column width-per-100">
                                <thead>
                                <tr>
                                    <th class="center">User</th>
                                    <th class="center">Opened By</th>
                                    <th class="center">Email</th>
                                    <th class="center">Subject</th>
                                    <th class="center">Status</th>
                                    <th class="center">Assign To</th>
                                    <th class="center">Date</th>
                                    <th class="center">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="table-img center">
                                        <img src="../../assets/images/user/user1.jpg" alt="">
                                    </td>
                                    <td class="center">Jens Brincker</td>
                                    <td class="center">test@example.com</td>
                                    <td class="center">Image not Proper</td>
                                    <td class="center">
                                        <div class="badge col-green">Closed</div>
                                    </td>
                                    <td class="center">John Doe</td>
                                    <td class="center">27/05/2016</td>
                                    <td class="center">
                                        <a href="#" class="btn btn-tbl-edit">
                                            <i class="material-icons">create</i>
                                        </a>
                                        <a href="#" class="btn btn-tbl-delete">
                                            <i class="material-icons">delete_forever</i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-img center">
                                        <img src="../../assets/images/user/user2.jpg" alt="">
                                    </td>
                                    <td class="center">Jens Brincker</td>
                                    <td class="center">test@example.com</td>
                                    <td class="center">Image not Proper</td>
                                    <td class="center">
                                        <div class="badge col-red">Open</div>
                                    </td>
                                    <td class="center">John Doe</td>
                                    <td class="center">27/05/2016</td>
                                    <td class="center">
                                        <a href="#" class="btn btn-tbl-edit">
                                            <i class="material-icons">create</i>
                                        </a>
                                        <a href="#" class="btn btn-tbl-delete">
                                            <i class="material-icons">delete_forever</i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-img center">
                                        <img src="../../assets/images/user/user3.jpg" alt="">
                                    </td>
                                    <td class="center">Jens Brincker</td>
                                    <td class="center">test@example.com</td>
                                    <td class="center">Image not Proper</td>
                                    <td class="center">
                                        <div class="badge col-purple">Pending</div>
                                    </td>
                                    <td class="center">John Doe</td>
                                    <td class="center">27/05/2016</td>
                                    <td class="center">
                                        <a href="#" class="btn btn-tbl-edit">
                                            <i class="material-icons">create</i>
                                        </a>
                                        <a href="#" class="btn btn-tbl-delete">
                                            <i class="material-icons">delete_forever</i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-img center">
                                        <img src="../../assets/images/user/user4.jpg" alt="">
                                    </td>
                                    <td class="center">Jens Brincker</td>
                                    <td class="center">test@example.com</td>
                                    <td class="center">Image not Proper</td>
                                    <td class="center">
                                        <div class="badge col-green">Closed</div>
                                    </td>
                                    <td class="center">John Doe</td>
                                    <td class="center">27/05/2016</td>
                                    <td class="center">
                                        <a href="#" class="btn btn-tbl-edit">
                                            <i class="material-icons">create</i>
                                        </a>
                                        <a href="#" class="btn btn-tbl-delete">
                                            <i class="material-icons">delete_forever</i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-img center">
                                        <img src="../../assets/images/user/user5.jpg" alt="">
                                    </td>
                                    <td class="center">Jens Brincker</td>
                                    <td class="center">test@example.com</td>
                                    <td class="center">Image not Proper</td>
                                    <td class="center">
                                        <div class="badge col-red">Open</div>
                                    </td>
                                    <td class="center">John Doe</td>
                                    <td class="center">27/05/2016</td>
                                    <td class="center">
                                        <a href="#" class="btn btn-tbl-edit">
                                            <i class="material-icons">create</i>
                                        </a>
                                        <a href="#" class="btn btn-tbl-delete">
                                            <i class="material-icons">delete_forever</i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-img center">
                                        <img src="../../assets/images/user/user6.jpg" alt="">
                                    </td>
                                    <td class="center">Jens Brincker</td>
                                    <td class="center">test@example.com</td>
                                    <td class="center">Image not Proper</td>
                                    <td class="center">
                                        <div class="badge col-green">Closed</div>
                                    </td>
                                    <td class="center">John Doe</td>
                                    <td class="center">27/05/2016</td>
                                    <td class="center">
                                        <a href="#" class="btn btn-tbl-edit">
                                            <i class="material-icons">create</i>
                                        </a>
                                        <a href="#" class="btn btn-tbl-delete">
                                            <i class="material-icons">delete_forever</i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-img center">
                                        <img src="../../assets/images/user/user7.jpg" alt="">
                                    </td>
                                    <td class="center">Jens Brincker</td>
                                    <td class="center">test@example.com</td>
                                    <td class="center">Image not Proper</td>
                                    <td class="center">
                                        <div class="badge col-red">Open</div>
                                    </td>
                                    <td class="center">John Doe</td>
                                    <td class="center">27/05/2016</td>
                                    <td class="center">
                                        <a href="#" class="btn btn-tbl-edit">
                                            <i class="material-icons">create</i>
                                        </a>
                                        <a href="#" class="btn btn-tbl-delete">
                                            <i class="material-icons">delete_forever</i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-img center">
                                        <img src="../../assets/images/user/user8.jpg" alt="">
                                    </td>
                                    <td class="center">Jens Brincker</td>
                                    <td class="center">test@example.com</td>
                                    <td class="center">Image not Proper</td>
                                    <td class="center">
                                        <div class="badge col-purple">Pending</div>
                                    </td>
                                    <td class="center">John Doe</td>
                                    <td class="center">27/05/2016</td>
                                    <td class="center">
                                        <a href="#" class="btn btn-tbl-edit">
                                            <i class="material-icons">create</i>
                                        </a>
                                        <a href="#" class="btn btn-tbl-delete">
                                            <i class="material-icons">delete_forever</i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-img center">
                                        <img src="../../assets/images/user/user9.jpg" alt="">
                                    </td>
                                    <td class="center">Jens Brincker</td>
                                    <td class="center">test@example.com</td>
                                    <td class="center">Image not Proper</td>
                                    <td class="center">
                                        <div class="badge col-green">Closed</div>
                                    </td>
                                    <td class="center">John Doe</td>
                                    <td class="center">27/05/2016</td>
                                    <td class="center">
                                        <a href="#" class="btn btn-tbl-edit">
                                            <i class="material-icons">create</i>
                                        </a>
                                        <a href="#" class="btn btn-tbl-delete">
                                            <i class="material-icons">delete_forever</i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-img center">
                                        <img src="../../assets/images/user/user10.jpg" alt="">
                                    </td>
                                    <td class="center">Jens Brincker</td>
                                    <td class="center">test@example.com</td>
                                    <td class="center">Image not Proper</td>
                                    <td class="center">
                                        <div class="badge col-red">Open</div>
                                    </td>
                                    <td class="center">John Doe</td>
                                    <td class="center">27/05/2016</td>
                                    <td class="center">
                                        <a href="#" class="btn btn-tbl-edit">
                                            <i class="material-icons">create</i>
                                        </a>
                                        <a href="#" class="btn btn-tbl-delete">
                                            <i class="material-icons">delete_forever</i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-img center">
                                        <img src="../../assets/images/user/user6.jpg" alt="">
                                    </td>
                                    <td class="center">Jens Brincker</td>
                                    <td class="center">test@example.com</td>
                                    <td class="center">Image not Proper</td>
                                    <td class="center">
                                        <div class="badge col-red">Open</div>
                                    </td>
                                    <td class="center">John Doe</td>
                                    <td class="center">27/05/2016</td>
                                    <td class="center">
                                        <a href="#" class="btn btn-tbl-edit">
                                            <i class="material-icons">create</i>
                                        </a>
                                        <a href="#" class="btn btn-tbl-delete">
                                            <i class="material-icons">delete_forever</i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-img center">
                                        <img src="../../assets/images/user/user5.jpg" alt="">
                                    </td>
                                    <td class="center">Jens Brincker</td>
                                    <td class="center">test@example.com</td>
                                    <td class="center">Image not Proper</td>
                                    <td class="center">
                                        <div class="badge col-green">Closed</div>
                                    </td>
                                    <td class="center">John Doe</td>
                                    <td class="center">27/05/2016</td>
                                    <td class="center">
                                        <a href="#" class="btn btn-tbl-edit">
                                            <i class="material-icons">create</i>
                                        </a>
                                        <a href="#" class="btn btn-tbl-delete">
                                            <i class="material-icons">delete_forever</i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-img center">
                                        <img src="../../assets/images/user/user4.jpg" alt="">
                                    </td>
                                    <td class="center">Jens Brincker</td>
                                    <td class="center">test@example.com</td>
                                    <td class="center">Image not Proper</td>
                                    <td class="center">
                                        <div class="badge col-red">Open</div>
                                    </td>
                                    <td class="center">John Doe</td>
                                    <td class="center">27/05/2016</td>
                                    <td class="center">
                                        <a href="#" class="btn btn-tbl-edit">
                                            <i class="material-icons">create</i>
                                        </a>
                                        <a href="#" class="btn btn-tbl-delete">
                                            <i class="material-icons">delete_forever</i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-img center">
                                        <img src="../../assets/images/user/user3.jpg" alt="">
                                    </td>
                                    <td class="center">Jens Brincker</td>
                                    <td class="center">test@example.com</td>
                                    <td class="center">Image not Proper</td>
                                    <td class="center">
                                        <div class="badge col-purple">Pending</div>
                                    </td>
                                    <td class="center">John Doe</td>
                                    <td class="center">27/05/2016</td>
                                    <td class="center">
                                        <a href="#" class="btn btn-tbl-edit">
                                            <i class="material-icons">create</i>
                                        </a>
                                        <a href="#" class="btn btn-tbl-delete">
                                            <i class="material-icons">delete_forever</i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-img center">
                                        <img src="../../assets/images/user/user2.jpg" alt="">
                                    </td>
                                    <td class="center">Jens Brincker</td>
                                    <td class="center">test@example.com</td>
                                    <td class="center">Image not Proper</td>
                                    <td class="center">
                                        <div class="badge col-green">Closed</div>
                                    </td>
                                    <td class="center">John Doe</td>
                                    <td class="center">27/05/2016</td>
                                    <td class="center">
                                        <a href="#" class="btn btn-tbl-edit">
                                            <i class="material-icons">create</i>
                                        </a>
                                        <a href="#" class="btn btn-tbl-delete">
                                            <i class="material-icons">delete_forever</i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-img center">
                                        <img src="../../assets/images/user/user1.jpg" alt="">
                                    </td>
                                    <td class="center">Jens Brincker</td>
                                    <td class="center">test@example.com</td>
                                    <td class="center">Image not Proper</td>
                                    <td class="center">
                                        <div class="badge col-red">Open</div>
                                    </td>
                                    <td class="center">John Doe</td>
                                    <td class="center">27/05/2016</td>
                                    <td class="center">
                                        <a href="#" class="btn btn-tbl-edit">
                                            <i class="material-icons">create</i>
                                        </a>
                                        <a href="#" class="btn btn-tbl-delete">
                                            <i class="material-icons">delete_forever</i>
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th class="center">User</th>
                                    <th class="center">Opened By</th>
                                    <th class="center">Email</th>
                                    <th class="center">Subject</th>
                                    <th class="center">Status</th>
                                    <th class="center">Assign To</th>
                                    <th class="center">Date</th>
                                    <th class="center">Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection