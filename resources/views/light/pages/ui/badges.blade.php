@extends('light.layouts.app3')
@section('title')
    Badges - {{config('app.dashboard')}}
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">Badges</h4>
                        </li>
                        <li class="breadcrumb-item bcrumb-1">
                            <a href="../../index-2.html">
                                <i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item bcrumb-2">
                            <a href="#" onClick="return false;">UI</a>
                        </li>
                        <li class="breadcrumb-item active">Badges</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Button Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Button</strong> Examples</h2>
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
                        <div class="row clearfix">
                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                <button class="btn btn-success btn-lg btn-block waves-effect" type="button">SUCCESS
                                    <span class="badge">4</span>
                                </button>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                <button class="btn btn-primary btn-lg btn-block waves-effect" type="button">PRIMARY
                                    <span class="badge">10+</span>
                                </button>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                <button class="btn btn-danger btn-lg btn-block waves-effect" type="button">DANGER
                                    <span class="badge">8</span>
                                </button>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                <button class="btn btn-warning btn-lg btn-block waves-effect" type="button">WARNING
                                    <span class="badge">3</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Button Examples -->
        <!-- With Material Design Colors -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Button</strong> Examples With Material Design Colors</h2>
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
                        <div class="row clearfix">
                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                <button class="btn bg-green btn-lg btn-block waves-effect" type="button">GREEN
                                    <span class="badge">2</span>
                                </button>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                <button class="btn bg-blue btn-lg btn-block waves-effect" type="button">BLUE
                                    <span class="badge">10+</span>
                                </button>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                <button class="btn bg-red btn-lg btn-block waves-effect" type="button">RED
                                    <span class="badge">12</span>
                                </button>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                <button class="btn bg-orange btn-lg btn-block waves-effect" type="button">ORANGE
                                    <span class="badge">5</span>
                                </button>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                <button class="btn bg-pink btn-lg btn-block waves-effect" type="button">PINK
                                    <span class="badge">14</span>
                                </button>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                <button class="btn bg-cyan btn-lg btn-block waves-effect" type="button">CYAN
                                    <span class="badge">99+</span>
                                </button>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                <button class="btn bg-teal btn-lg btn-block waves-effect" type="button">TEAL
                                    <span class="badge">26</span>
                                </button>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                <button class="btn bg-purple btn-lg btn-block waves-effect" type="button">PURPLE
                                    <span class="badge">47</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Outline</strong> Badges Example</h2>
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
                        <div class="row clearfix">
                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                <div class="badge col-red">Badge Red</div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                <div class="badge col-purple">Badge Purple</div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                <div class="badge col-green">Badge Green</div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                <div class="badge col-indigo">Badge Indigo</div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                <div class="badge col-orange">Badge Orange</div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                <div class="badge col-cyan">Badge Cyan</div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                <div class="badge col-brown">Badge Brown</div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                <div class="badge col-deep-orange">Badge Deep Orange</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# With Material Design Colors -->
        <!-- List Example -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>List</strong> Example</h2>
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
                        <div class="list-group">
                            <a href="#" onClick="return false;" class="list-group-item">
                                <span class="badge bg-pink">14 New</span> Cras justo odio
                            </a>
                            <a href="#" onClick="return false;" class="list-group-item">
                                <span class="badge bg-cyan">99 Unread</span>Dapibus ac facilisis in
                            </a>
                            <a href="#" onClick="return false;" class="list-group-item">
                                <span class="badge bg-teal">99+</span>Morbi leo risus
                            </a>
                            <a href="#" onClick="return false;" class="list-group-item">
                                <span class="badge bg-orange">21</span>Porta ac consectetur ac
                            </a>
                            <a href="#" onClick="return false;" class="list-group-item">
                                <span class="badge bg-purple">18</span>Vestibulum at eros
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# List Example -->
    </div>
</section>
@endsection