@extends('light.layouts.app3')
@section('title')
    Waves - {{config('app.dashboard')}}
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">Waves</h4>
                        </li>
                        <li class="breadcrumb-item bcrumb-1">
                            <a href="../../index-2.html">
                                <i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item bcrumb-2">
                            <a href="#" onClick="return false;">UI</a>
                        </li>
                        <li class="breadcrumb-item active">Waves</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <!-- Color Variations -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Color</strong> Variations</h2>
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
                        <ul class="list-group">
                            <li class="list-group-item clearfix">
                                Default
                                <a href="#" onClick="return false;"
                                   class="btn btn-default waves-effect pull-right">CLICK
                                    ME</a>
                            </li>
                            <li class="list-group-item clearfix">
                                <code>waves-light</code>
                                <a href="#" onClick="return false;"
                                   class="btn bg-blue waves-effect waves-light pull-right">CLICK
                                    ME</a>
                            </li>
                            <li class="list-group-item clearfix">
                                <code>waves-red</code>
                                <a href="#" onClick="return false;"
                                   class="btn btn-default waves-effect waves-red pull-right">CLICK
                                    ME</a>
                            </li>
                            <li class="list-group-item clearfix">
                                <code>waves-pink</code>
                                <a href="#" onClick="return false;"
                                   class="btn btn-default waves-effect waves-pink pull-right">CLICK
                                    ME</a>
                            </li>
                            <li class="list-group-item clearfix">
                                <code>waves-purple</code>
                                <a href="#" onClick="return false;"
                                   class="btn btn-default waves-effect waves-purple pull-right">CLICK
                                    ME</a>
                            </li>
                            <li class="list-group-item clearfix">
                                <code>waves-deep-purple</code>
                                <a href="#" onClick="return false;"
                                   class="btn btn-default waves-effect waves-deep-purple pull-right">CLICK
                                    ME</a>
                            </li>
                            <li class="list-group-item clearfix">
                                <code>waves-indigo</code>
                                <a href="#" onClick="return false;"
                                   class="btn btn-default waves-effect waves-indigo pull-right">CLICK
                                    ME</a>
                            </li>
                            <li class="list-group-item clearfix">
                                <code>waves-blue</code>
                                <a href="#" onClick="return false;"
                                   class="btn btn-default waves-effect waves-blue pull-right">CLICK
                                    ME</a>
                            </li>
                            <li class="list-group-item clearfix">
                                <code>waves-light-blue</code>
                                <a href="#" onClick="return false;"
                                   class="btn btn-default waves-effect waves-light-blue pull-right">CLICK
                                    ME</a>
                            </li>
                            <li class="list-group-item clearfix">
                                <code>waves-cyan</code>
                                <a href="#" onClick="return false;"
                                   class="btn btn-default waves-effect waves-cyan pull-right">CLICK
                                    ME</a>
                            </li>
                            <li class="list-group-item clearfix">
                                <code>waves-teal</code>
                                <a href="#" onClick="return false;"
                                   class="btn btn-default waves-effect waves-teal pull-right">CLICK
                                    ME</a>
                            </li>
                            <li class="list-group-item clearfix">
                                <code>waves-green</code>
                                <a href="#" onClick="return false;"
                                   class="btn btn-default waves-effect waves-green pull-right">CLICK
                                    ME</a>
                            </li>
                            <li class="list-group-item clearfix">
                                <code>waves-light-green</code>
                                <a href="#" onClick="return false;"
                                   class="btn btn-default waves-effect waves-light-green pull-right">CLICK
                                    ME</a>
                            </li>
                            <li class="list-group-item clearfix">
                                <code>waves-lime</code>
                                <a href="#" onClick="return false;"
                                   class="btn btn-default waves-effect waves-lime pull-right">CLICK
                                    ME</a>
                            </li>
                            <li class="list-group-item clearfix">
                                <code>waves-yellow</code>
                                <a href="#" onClick="return false;"
                                   class="btn btn-default waves-effect waves-yellow pull-right">CLICK
                                    ME</a>
                            </li>
                            <li class="list-group-item clearfix">
                                <code>waves-amber</code>
                                <a href="#" onClick="return false;"
                                   class="btn btn-default waves-effect waves-amber pull-right">CLICK
                                    ME</a>
                            </li>
                            <li class="list-group-item clearfix">
                                <code>waves-orange</code>
                                <a href="#" onClick="return false;"
                                   class="btn btn-default waves-effect waves-orange pull-right">CLICK
                                    ME</a>
                            </li>
                            <li class="list-group-item clearfix">
                                <code>waves-deep-orange</code>
                                <a href="#" onClick="return false;"
                                   class="btn btn-default waves-effect waves-deep-orange pull-right">CLICK
                                    ME</a>
                            </li>
                            <li class="list-group-item clearfix">
                                <code>waves-brown</code>
                                <a href="#" onClick="return false;"
                                   class="btn btn-default waves-effect waves-brown pull-right">CLICK
                                    ME</a>
                            </li>
                            <li class="list-group-item clearfix">
                                <code>waves-grey</code>
                                <a href="#" onClick="return false;"
                                   class="btn btn-default waves-effect waves-grey pull-right">CLICK
                                    ME</a>
                            </li>
                            <li class="list-group-item clearfix">
                                <code>waves-blue-grey</code>
                                <a href="#" onClick="return false;"
                                   class="btn btn-default waves-effect waves-blue-grey pull-right">CLICK
                                    ME</a>
                            </li>
                            <li class="list-group-item clearfix">
                                <code>waves-black</code>
                                <a href="#" onClick="return false;"
                                   class="btn btn-default waves-effect waves-black pull-right">CLICK
                                    ME</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #END# Color Variations -->
            <!-- Circle -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Circle</strong>
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
                        <ul class="list-group">
                            <li class="list-group-item clearfix">
                                Default
                                <button type="button"
                                        class="btn btn-default btn-circle waves-effect waves-circle waves-float pull-right">
                                    <i class="material-icons">report_problem</i>
                                </button>
                            </li>
                            <li class="list-group-item clearfix">
                                <code>waves-light</code>
                                <button type="button"
                                        class="btn bg-blue btn-circle waves-effect waves-circle waves-light waves-float pull-right">
                                    <i class="material-icons">verified_user</i>
                                </button>
                            </li>
                            <li class="list-group-item clearfix">
                                <code>waves-red</code>
                                <button type="button"
                                        class="btn btn-default btn-circle waves-effect waves-red waves-circle waves-float pull-right">
                                    <i class="material-icons">extension</i>
                                </button>
                            </li>
                            <li class="list-group-item clearfix">
                                <code>waves-pink</code>
                                <button type="button"
                                        class="btn btn-default btn-circle waves-effect waves-pink waves-circle waves-float pull-right">
                                    <i class="material-icons">lock</i>
                                </button>
                            </li>
                            <li class="list-group-item clearfix">
                                <code>waves-purple</code>
                                <button type="button"
                                        class="btn btn-default btn-circle waves-effect waves-purple waves-circle waves-float pull-right">
                                    <i class="material-icons">perm_scan_wifi</i>
                                </button>
                            </li>
                            <li class="list-group-item clearfix">
                                <code>waves-deep-purple</code>
                                <button type="button"
                                        class="btn btn-default btn-circle waves-effect waves-deep-purple waves-circle waves-float pull-right">
                                    <i class="material-icons">flight_takeoff</i>
                                </button>
                            </li>
                            <li class="list-group-item clearfix">
                                <code>waves-indigo</code>
                                <button type="button"
                                        class="btn btn-default btn-circle waves-effect waves-indigo waves-circle waves-float pull-right">
                                    <i class="material-icons">print</i>
                                </button>
                            </li>
                            <li class="list-group-item clearfix">
                                <code>waves-blue</code>
                                <button type="button"
                                        class="btn btn-default btn-circle waves-effect waves-blue waves-circle waves-float pull-right">
                                    <i class="material-icons">search</i>
                                </button>
                            </li>
                            <li class="list-group-item clearfix">
                                <code>waves-light-blue</code>
                                <button type="button"
                                        class="btn btn-default btn-circle waves-effect waves-light-blue waves-circle waves-float pull-right">
                                    <i class="material-icons">settings</i>
                                </button>
                            </li>
                            <li class="list-group-item clearfix">
                                <code>waves-cyan</code>
                                <button type="button"
                                        class="btn btn-default btn-circle waves-effect waves-cyan waves-circle waves-float pull-right">
                                    <i class="material-icons">trending_up</i>
                                </button>
                            </li>
                            <li class="list-group-item clearfix">
                                <code>waves-teal</code>
                                <button type="button"
                                        class="btn btn-default btn-circle waves-effect waves-teal waves-circle waves-float pull-right">
                                    <i class="material-icons">mic</i>
                                </button>
                            </li>
                            <li class="list-group-item clearfix">
                                <code>waves-green</code>
                                <button type="button"
                                        class="btn btn-default btn-circle waves-effect waves-green waves-circle waves-float pull-right">
                                    <i class="material-icons">forum</i>
                                </button>
                            </li>
                            <li class="list-group-item clearfix">
                                <code>waves-light-green</code>
                                <button type="button"
                                        class="btn btn-default btn-circle waves-effect waves-light-green waves-circle waves-float pull-right">
                                    <i class="material-icons">email</i>
                                </button>
                            </li>
                            <li class="list-group-item clearfix">
                                <code>waves-lime</code>
                                <button type="button"
                                        class="btn btn-default btn-circle waves-effect waves-lime waves-circle waves-float pull-right">
                                    <i class="material-icons">chat</i>
                                </button>
                            </li>
                            <li class="list-group-item clearfix">
                                <code>waves-yellow</code>
                                <button type="button"
                                        class="btn btn-default btn-circle waves-effect waves-yellow waves-circle waves-float pull-right">
                                    <i class="material-icons">vpn_key</i>
                                </button>
                            </li>
                            <li class="list-group-item clearfix">
                                <code>waves-amber</code>
                                <button type="button"
                                        class="btn btn-default btn-circle waves-effect waves-amber waves-circle waves-float pull-right">
                                    <i class="material-icons">content_cut</i>
                                </button>
                            </li>
                            <li class="list-group-item clearfix">
                                <code>waves-orange</code>
                                <button type="button"
                                        class="btn btn-default btn-circle waves-effect waves-orange waves-circle waves-float pull-right">
                                    <i class="material-icons">drafts</i>
                                </button>
                            </li>
                            <li class="list-group-item clearfix">
                                <code>waves-deep-orange</code>
                                <button type="button"
                                        class="btn btn-default btn-circle waves-effect waves-deep-orange waves-circle waves-float pull-right">
                                    <i class="material-icons">save</i>
                                </button>
                            </li>
                            <li class="list-group-item clearfix">
                                <code>waves-brown</code>
                                <button type="button"
                                        class="btn btn-default btn-circle waves-effect waves-brown waves-circle waves-float pull-right">
                                    <i class="material-icons">weekend</i>
                                </button>
                            </li>
                            <li class="list-group-item clearfix">
                                <code>waves-grey</code>
                                <button type="button"
                                        class="btn btn-default btn-circle waves-effect waves-grey waves-circle waves-float pull-right">
                                    <i class="material-icons">access_alarm</i>
                                </button>
                            </li>
                            <li class="list-group-item clearfix">
                                <code>waves-blue-grey</code>
                                <button type="button"
                                        class="btn btn-default btn-circle waves-effect waves-blue-grey waves-circle waves-float pull-right">
                                    <i class="material-icons">location_searching</i>
                                </button>
                            </li>
                            <li class="list-group-item clearfix">
                                <code>waves-black</code>
                                <button type="button"
                                        class="btn btn-default btn-circle waves-effect waves-black waves-circle waves-float pull-right">
                                    <i class="material-icons">publish</i>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #END# Circle -->
        </div>
    </div>
</section>
@endsection