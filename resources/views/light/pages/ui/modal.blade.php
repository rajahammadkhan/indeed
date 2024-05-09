@extends('light.layouts.app3')
@section('title')
    Modals  - {{config('app.dashboard')}}
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">Modals</h4>
                        </li>
                        <li class="breadcrumb-item bcrumb-1">
                            <a href="../../index-2.html">
                                <i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item bcrumb-2">
                            <a href="#" onClick="return false;">UI</a>
                        </li>
                        <li class="breadcrumb-item active">Modals</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Examples</strong>
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
                        <div class="row clearfix js-sweetalert">
                            <!-- #START# Basic Modal -->
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <p>Basic Modal Demo</p>
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#basicModal">Basic
                                    Modal</button>
                                <div class="modal fade" id="basicModal" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Content goes here..
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button"
                                                        class="btn btn-info waves-effect">Save</button>
                                                <button type="button" class="btn btn-danger waves-effect"
                                                        data-dismiss="modal">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- #END# Basic Modal -->
                            <!-- #START# Modal Form Example -->
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <p>Modal With Form</p>
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#exampleModal">Modal
                                    With Form</button>
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                     aria-labelledby="formModal" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="formModal">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <label for="email_address1">Email Address</label>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" id="email_address1"
                                                                   class="form-control"
                                                                   placeholder="Enter your email address">
                                                        </div>
                                                    </div>
                                                    <label for="password">Password</label>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="password" id="password"
                                                                   class="form-control"
                                                                   placeholder="Enter your password">
                                                        </div>
                                                    </div>
                                                    <div class="form-check m-l-10">
                                                        <label class="form-check-label"> <input
                                                                    class="form-check-input" type="checkbox" value="">
                                                            Remember Me <span class="form-check-sign"> <span
                                                                        class="check"></span>
                                                                </span>
                                                        </label>
                                                    </div>
                                                    <br>
                                                    <button type="button"
                                                            class="btn btn-primary m-t-15 waves-effect">LOGIN</button>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button"
                                                        class="btn btn-info waves-effect">Save</button>
                                                <button type="button" class="btn btn-danger waves-effect"
                                                        data-dismiss="modal">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- #END# Modal Form Example -->
                            <!-- #START# Modal Vertically Centered -->
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <p>Vertically Centered</p>
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#exampleModalCenter">Vertically
                                    Centered</button>
                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalCenterTitle">Modal title
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                ...
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button"
                                                        class="btn btn-info waves-effect">Save</button>
                                                <button type="button" class="btn btn-danger waves-effect"
                                                        data-dismiss="modal">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- #END# Modal Vertically Centered -->
                            <!-- #START# Large Modal-->
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <p>Large Modal</p>
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target=".bd-example-modal-lg">Large
                                    Modal</button>
                                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                                     aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="myLargeModalLabel">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Content goes here....
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- #END# Large Modal-->
                            <!-- #START# Small Modal -->
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <p>Small Modal</p>
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target=".bd-example-modal-sm">Small
                                    modal</button>
                                <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog"
                                     aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="mySmallModalLabel">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Content goes here....
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- #END# Small Modal -->
                            <!-- #START# Modal Using Grid-->
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <p>Modal Using Grid</p>
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#gridModal">Modal
                                    Using Grid</button>
                                <div class="modal fade" id="gridModal" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalGrid" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalGrid">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-md-4">.col-md-4</div>
                                                        <div class="col-md-4 ml-auto">.col-md-4 .ml-auto</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3 ml-auto">.col-md-3 .ml-auto</div>
                                                        <div class="col-md-2 ml-auto">.col-md-2 .ml-auto</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 ml-auto">.col-md-6 .ml-auto</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-9">
                                                            Level 1: .col-sm-9
                                                            <div class="row">
                                                                <div class="col-8 col-sm-6">
                                                                    Level 2: .col-8 .col-sm-6
                                                                </div>
                                                                <div class="col-4 col-sm-6">
                                                                    Level 2: .col-4 .col-sm-6
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button"
                                                        class="btn btn-info waves-effect">Save</button>
                                                <button type="button" class="btn btn-danger waves-effect"
                                                        data-dismiss="modal">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- #END# Modal Using Grid -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
