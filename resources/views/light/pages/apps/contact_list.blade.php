@extends('light.layouts.app3')
@section('title')
    Contact List - {{config('app.dashboard')}}
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">Contact List</h4>
                        </li>
                        <li class="breadcrumb-item bcrumb-1">
                            <a href="../../index-2.html">
                                <i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item bcrumb-2">
                            <a href="#" onClick="return false;">Apps</a>
                        </li>
                        <li class="breadcrumb-item active">Contact List</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <div class="card body">
                    <div class="row">
                        <div class="contact-photo">
                            <img src="../../assets/images/usrbig.jpg" class="img-responsive" alt=""> </div>
                    </div>
                    <div class="contact-usertitle">
                        <div class="contact-usertitle-name"> Emily Smith </div>
                        <div class="contact-usertitle-job"> Engineer </div>
                    </div>
                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>All Contacts</b>
                            <a class="pull-right">1,200</a>
                        </li>
                        <li class="list-group-item">
                            Friends
                            <a class="pull-right">450</a>
                        </li>
                        <li class="list-group-item">
                            Family
                            <a class="pull-right">345</a>
                        </li>
                        <li class="list-group-item">
                            Office
                            <a class="pull-right">172</a>
                        </li>
                        <li class="list-group-item">
                            Social
                            <a class="pull-right">432</a>
                        </li>
                    </ul>
                    <div class="newLabelBtn">
                        <button type="button" class="btn btn-border-radius bg-purple waves-effect">New
                            Label</button>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                <div class="card">
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover js-basic-example contact_list">
                                <thead>
                                <tr>
                                    <th class="center">#</th>
                                    <th class="center">Image</th>
                                    <th class="center">Name</th>
                                    <th class="center">Phone</th>
                                    <th class="center">Address</th>
                                    <th class="center">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="tbl-checkbox">
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td class="table-img">
                                        <img src="../../assets/images/user/user1.jpg" alt="">
                                    </td>
                                    <td class="center">Tim Hank</td>
                                    <td class="center">
                                                <span class="phone">
                                                    <i class="material-icons">phone</i>264-625-2583</span>
                                    </td>
                                    <td class="center">
                                                <span class="phone">
                                                    <i class="material-icons">room</i>70 Bowman St. South Windsor, CT
                                                    06074</span>
                                    </td>
                                    <td class="center">
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">mode_edit</i>
                                        </button>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tbl-checkbox">
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td class="table-img">
                                        <img src="../../assets/images/user/user2.jpg" alt="">
                                    </td>
                                    <td class="center">Tim Hank</td>
                                    <td class="center">
                                                <span class="phone">
                                                    <i class="material-icons">phone</i>264-625-2583</span>
                                    </td>
                                    <td class="center">
                                                <span class="phone">
                                                    <i class="material-icons">room</i>70 Bowman St. South Windsor, CT
                                                    06074</span>
                                    </td>
                                    <td class="center">
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">mode_edit</i>
                                        </button>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tbl-checkbox">
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td class="table-img">
                                        <img src="../../assets/images/user/user3.jpg" alt="">
                                    </td>
                                    <td class="center">Tim Hank</td>
                                    <td class="center">
                                                <span class="phone">
                                                    <i class="material-icons">phone</i>264-625-2583</span>
                                    </td>
                                    <td class="center">
                                                <span class="phone">
                                                    <i class="material-icons">room</i>70 Bowman St. South Windsor, CT
                                                    06074</span>
                                    </td>
                                    <td class="center">
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">mode_edit</i>
                                        </button>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tbl-checkbox">
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td class="table-img">
                                        <img src="../../assets/images/user/user4.jpg" alt="">
                                    </td>
                                    <td class="center">Tim Hank</td>
                                    <td class="center">
                                                <span class="phone">
                                                    <i class="material-icons">phone</i>264-625-2583</span>
                                    </td>
                                    <td class="center">
                                                <span class="phone">
                                                    <i class="material-icons">room</i>70 Bowman St. South Windsor, CT
                                                    06074</span>
                                    </td>
                                    <td class="center">
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">mode_edit</i>
                                        </button>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tbl-checkbox">
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td class="table-img">
                                        <img src="../../assets/images/user/user5.jpg" alt="">
                                    </td>
                                    <td class="center">Tim Hank</td>
                                    <td class="center">
                                                <span class="phone">
                                                    <i class="material-icons">phone</i>264-625-2583</span>
                                    </td>
                                    <td class="center">
                                                <span class="phone">
                                                    <i class="material-icons">room</i>70 Bowman St. South Windsor, CT
                                                    06074</span>
                                    </td>
                                    <td class="center">
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">mode_edit</i>
                                        </button>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tbl-checkbox">
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td class="table-img">
                                        <img src="../../assets/images/user/user1.jpg" alt="">
                                    </td>
                                    <td class="center">Tim Hank</td>
                                    <td class="center">
                                                <span class="phone">
                                                    <i class="material-icons">phone</i>264-625-2583</span>
                                    </td>
                                    <td class="center">
                                                <span class="phone">
                                                    <i class="material-icons">room</i>70 Bowman St. South Windsor, CT
                                                    06074</span>
                                    </td>
                                    <td class="center">
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">mode_edit</i>
                                        </button>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tbl-checkbox">
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td class="table-img">
                                        <img src="../../assets/images/user/user2.jpg" alt="">
                                    </td>
                                    <td class="center">Tim Hank</td>
                                    <td class="center">
                                                <span class="phone">
                                                    <i class="material-icons">phone</i>264-625-2583</span>
                                    </td>
                                    <td class="center">
                                                <span class="phone">
                                                    <i class="material-icons">room</i>70 Bowman St. South Windsor, CT
                                                    06074</span>
                                    </td>
                                    <td class="center">
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">mode_edit</i>
                                        </button>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tbl-checkbox">
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td class="table-img">
                                        <img src="../../assets/images/user/user3.jpg" alt="">
                                    </td>
                                    <td class="center">Tim Hank</td>
                                    <td class="center">
                                                <span class="phone">
                                                    <i class="material-icons">phone</i>264-625-2583</span>
                                    </td>
                                    <td class="center">
                                                <span class="phone">
                                                    <i class="material-icons">room</i>70 Bowman St. South Windsor, CT
                                                    06074</span>
                                    </td>
                                    <td class="center">
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">mode_edit</i>
                                        </button>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tbl-checkbox">
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td class="table-img">
                                        <img src="../../assets/images/user/user4.jpg" alt="">
                                    </td>
                                    <td class="center">Tim Hank</td>
                                    <td class="center">
                                                <span class="phone">
                                                    <i class="material-icons">phone</i>264-625-2583</span>
                                    </td>
                                    <td class="center">
                                                <span class="phone">
                                                    <i class="material-icons">room</i>70 Bowman St. South Windsor, CT
                                                    06074</span>
                                    </td>
                                    <td class="center">
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">mode_edit</i>
                                        </button>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tbl-checkbox">
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td class="table-img">
                                        <img src="../../assets/images/user/user5.jpg" alt="">
                                    </td>
                                    <td class="center">Tim Hank</td>
                                    <td class="center">
                                                <span class="phone">
                                                    <i class="material-icons">phone</i>264-625-2583</span>
                                    </td>
                                    <td class="center">
                                                <span class="phone">
                                                    <i class="material-icons">room</i>70 Bowman St. South Windsor, CT
                                                    06074</span>
                                    </td>
                                    <td class="center">
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">mode_edit</i>
                                        </button>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tbl-checkbox">
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td class="table-img">
                                        <img src="../../assets/images/user/user1.jpg" alt="">
                                    </td>
                                    <td class="center">Tim Hank</td>
                                    <td class="center">
                                                <span class="phone">
                                                    <i class="material-icons">phone</i>264-625-2583</span>
                                    </td>
                                    <td class="center">
                                                <span class="phone">
                                                    <i class="material-icons">room</i>70 Bowman St. South Windsor, CT
                                                    06074</span>
                                    </td>
                                    <td class="center">
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">mode_edit</i>
                                        </button>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tbl-checkbox">
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td class="table-img">
                                        <img src="../../assets/images/user/user2.jpg" alt="">
                                    </td>
                                    <td class="center">Tim Hank</td>
                                    <td class="center">
                                                <span class="phone">
                                                    <i class="material-icons">phone</i>264-625-2583</span>
                                    </td>
                                    <td class="center">
                                                <span class="phone">
                                                    <i class="material-icons">room</i>70 Bowman St. South Windsor, CT
                                                    06074</span>
                                    </td>
                                    <td class="center">
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">mode_edit</i>
                                        </button>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tbl-checkbox">
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td class="table-img">
                                        <img src="../../assets/images/user/user3.jpg" alt="">
                                    </td>
                                    <td class="center">Tim Hank</td>
                                    <td class="center">
                                                <span class="phone">
                                                    <i class="material-icons">phone</i>264-625-2583</span>
                                    </td>
                                    <td class="center">
                                                <span class="phone">
                                                    <i class="material-icons">room</i>70 Bowman St. South Windsor, CT
                                                    06074</span>
                                    </td>
                                    <td class="center">
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">mode_edit</i>
                                        </button>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tbl-checkbox">
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td class="table-img">
                                        <img src="../../assets/images/user/user4.jpg" alt="">
                                    </td>
                                    <td class="center">Tim Hank</td>
                                    <td class="center">
                                                <span class="phone">
                                                    <i class="material-icons">phone</i>264-625-2583</span>
                                    </td>
                                    <td class="center">
                                                <span class="phone">
                                                    <i class="material-icons">room</i>70 Bowman St. South Windsor, CT
                                                    06074</span>
                                    </td>
                                    <td class="center">
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">mode_edit</i>
                                        </button>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tbl-checkbox">
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td class="table-img">
                                        <img src="../../assets/images/user/user5.jpg" alt="">
                                    </td>
                                    <td class="center">Tim Hank</td>
                                    <td class="center">
                                                <span class="phone">
                                                    <i class="material-icons">phone</i>264-625-2583</span>
                                    </td>
                                    <td class="center">
                                                <span class="phone">
                                                    <i class="material-icons">room</i>70 Bowman St. South Windsor, CT
                                                    06074</span>
                                    </td>
                                    <td class="center">
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
        </div>
    </div>
</section>
@endsection