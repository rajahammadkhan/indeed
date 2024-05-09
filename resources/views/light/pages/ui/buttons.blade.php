@extends('light.layouts.app3')
@section('title')
    Buttons - {{config('app.dashboard')}}
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">Buttons</h4>
                        </li>
                        <li class="breadcrumb-item bcrumb-1">
                            <a href="../../index-2.html">
                                <i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item bcrumb-2">
                            <a href="#" onClick="return false;">UI</a>
                        </li>
                        <li class="breadcrumb-item active">Buttons</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Bootstrap Default Buttons -->
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Colorful</strong> Buttons</h2>
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
                        <div class="button-demo">
                            <button class="btn-hover color-1">BUTTON</button>
                            <button class="btn-hover color-2">BUTTON</button>
                            <button class="btn-hover color-3">BUTTON</button>
                            <button class="btn-hover color-4">BUTTON</button>
                            <button class="btn-hover color-5">BUTTON</button>
                            <button class="btn-hover color-6">BUTTON</button>
                            <button class="btn-hover color-7">BUTTON</button>
                            <button class="btn-hover color-8">BUTTON</button>
                            <button class="btn-hover color-9">BUTTON</button>
                            <button class="btn-hover color-10">BUTTON</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Colorful</strong> Rounded Buttons</h2>
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
                        <div class="button-demo">
                            <button class="btn-hover btn-border-radius color-1">BUTTON</button>
                            <button class="btn-hover btn-border-radius color-2">BUTTON</button>
                            <button class="btn-hover btn-border-radius color-3">BUTTON</button>
                            <button class="btn-hover btn-border-radius color-4">BUTTON</button>
                            <button class="btn-hover btn-border-radius color-5">BUTTON</button>
                            <button class="btn-hover btn-border-radius color-6">BUTTON</button>
                            <button class="btn-hover btn-border-radius color-7">BUTTON</button>
                            <button class="btn-hover btn-border-radius color-8">BUTTON</button>
                            <button class="btn-hover btn-border-radius color-9">BUTTON</button>
                            <button class="btn-hover btn-border-radius color-10">BUTTON</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Default</strong> Buttons</h2>
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
                        <div class="button-demo">
                            <button type="button" class="btn btn-default waves-effect">Default</button>
                            <button type="button" class="btn btn-primary waves-effect">Primary</button>
                            <button type="button" class="btn btn-success waves-effect">Success</button>
                            <button type="button" class="btn btn-info waves-effect">Info</button>
                            <button type="button" class="btn btn-warning waves-effect">Warning</button>
                            <button type="button" class="btn btn-danger waves-effect">Danger</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Rounded</strong> Buttons</h2>
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
                        <div class="button-demo">
                            <button type="button"
                                    class="btn btn-default btn-border-radius waves-effect">Default</button>
                            <button type="button"
                                    class="btn btn-primary btn-border-radius waves-effect">Primary</button>
                            <button type="button"
                                    class="btn btn-success btn-border-radius waves-effect">Success</button>
                            <button type="button" class="btn btn-info btn-border-radius waves-effect">Info</button>
                            <button type="button"
                                    class="btn btn-warning btn-border-radius waves-effect">Warning</button>
                            <button type="button"
                                    class="btn btn-danger btn-border-radius waves-effect">Danger</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Bootstrap Default Buttons -->
        <!-- #START# Disable Buttons -->
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Disable</strong> Buttons</h2>
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
                        <div class="button-demo">
                            <button type="button" class="btn btn-default waves-effect"
                                    disabled="disabled">Default</button>
                            <button type="button" class="btn btn-primary waves-effect"
                                    disabled="disabled">Primary</button>
                            <button type="button" class="btn btn-success waves-effect"
                                    disabled="disabled">Success</button>
                            <button type="button" class="btn btn-info waves-effect"
                                    disabled="disabled">Info</button>
                            <button type="button" class="btn btn-warning waves-effect"
                                    disabled="disabled">Warning</button>
                            <button type="button" class="btn btn-danger waves-effect"
                                    disabled="disabled">Danger</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Disable</strong> Rounded Buttons</h2>
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
                        <div class="button-demo">
                            <button type="button" class="btn btn-default btn-border-radius waves-effect"
                                    disabled="disabled">Default</button>
                            <button type="button" class="btn btn-primary btn-border-radius waves-effect"
                                    disabled="disabled">Primary</button>
                            <button type="button" class="btn btn-success btn-border-radius waves-effect"
                                    disabled="disabled">Success</button>
                            <button type="button" class="btn btn-info btn-border-radius waves-effect"
                                    disabled="disabled">Info</button>
                            <button type="button" class="btn btn-warning btn-border-radius waves-effect"
                                    disabled="disabled">Warning</button>
                            <button type="button" class="btn btn-danger btn-border-radius waves-effect"
                                    disabled="disabled">Danger</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Disable Buttons -->
        <!-- Bootstrap Default Buttons -->
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Outline</strong> Buttons</h2>
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
                        <div class="button-demo">
                            <button type="button" class="btn btn-outline-default">Default</button>
                            <button type="button" class="btn btn-outline-primary">Primary</button>
                            <button type="button" class="btn btn-outline-success">Success</button>
                            <button type="button" class="btn btn-outline-info">Info</button>
                            <button type="button" class="btn btn-outline-warning">Warning</button>
                            <button type="button" class="btn btn-outline-danger">Danger</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Rounded</strong> Outline Buttons</h2>
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
                        <div class="button-demo">
                            <button type="button" class="btn btn-outline-default btn-border-radius">Default</button>
                            <button type="button" class="btn btn-outline-primary btn-border-radius">Primary</button>
                            <button type="button" class="btn btn-outline-success btn-border-radius">Success</button>
                            <button type="button" class="btn btn-outline-info btn-border-radius">Info</button>
                            <button type="button" class="btn btn-outline-warning btn-border-radius">Warning</button>
                            <button type="button" class="btn btn-outline-danger btn-border-radius">Danger</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Bootstrap Default Buttons -->
        <!-- #START# Buttons with color options -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Buttons</strong> With Color Options</h2>
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
                        <div class="button-demo">
                            <button type="button" class="btn bg-red waves-effect">RED</button>
                            <button type="button" class="btn bg-pink waves-effect">PINK</button>
                            <button type="button" class="btn bg-purple waves-effect">PURPLE</button>
                            <button type="button" class="btn bg-deep-purple waves-effect">DEEP PURPLE</button>
                            <button type="button" class="btn bg-indigo waves-effect">INDIGO</button>
                            <button type="button" class="btn bg-blue waves-effect">BLUE</button>
                            <button type="button" class="btn bg-light-blue waves-effect">LIGHT BLUE</button>
                            <button type="button" class="btn bg-cyan waves-effect">CYAN</button>
                            <button type="button" class="btn bg-teal waves-effect">TEAL</button>
                            <button type="button" class="btn bg-green waves-effect">GREEN</button>
                            <button type="button" class="btn bg-light-green waves-effect">LIGHT GREEN</button>
                            <button type="button" class="btn bg-lime waves-effect">LIME</button>
                            <button type="button" class="btn bg-yellow waves-effect">YELLOW</button>
                            <button type="button" class="btn bg-amber waves-effect">AMBER</button>
                            <button type="button" class="btn bg-orange waves-effect">ORANGE</button>
                            <button type="button" class="btn bg-deep-orange waves-effect">DEEP ORANGE</button>
                            <button type="button" class="btn bg-brown waves-effect">BROWN</button>
                            <button type="button" class="btn bg-grey waves-effect">GREY</button>
                            <button type="button" class="btn bg-blue-grey waves-effect">BLUE GREY</button>
                            <button type="button" class="btn bg-black waves-effect waves-light">BLACK</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Buttons with color options -->
        <!-- Icon Buttons -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Icon</strong> Buttons</h2>
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
                        <div class="icon-button-demo">
                            <button type="button" class="btn btn-default waves-effect">
                                <i class="material-icons">extension</i>
                            </button>
                            <button type="button" class="btn btn-default waves-effect">
                                <i class="material-icons">home</i>
                            </button>
                            <button type="button" class="btn btn-default waves-effect">
                                <i class="material-icons">lock</i>
                            </button>
                            <button type="button" class="btn btn-default waves-effect">
                                <i class="material-icons">perm_scan_wifi</i>
                            </button>
                            <button type="button" class="btn btn-default waves-effect">
                                <i class="material-icons">flight_takeoff</i>
                            </button>
                            <button type="button" class="btn btn-default waves-effect">
                                <i class="material-icons">print</i>
                            </button>
                            <button type="button" class="btn btn-default waves-effect">
                                <i class="material-icons">report_problem</i>
                            </button>
                            <button type="button" class="btn btn-default waves-effect">
                                <i class="material-icons">search</i>
                            </button>
                            <button type="button" class="btn btn-default waves-effect">
                                <i class="material-icons">settings</i>
                            </button>
                            <button type="button" class="btn btn-default waves-effect">
                                <i class="material-icons">verified_user</i>
                            </button>
                            <button type="button" class="btn btn-default waves-effect">
                                <i class="material-icons">mic</i>
                            </button>
                            <button type="button" class="btn btn-default waves-effect">
                                <i class="material-icons">call_missed_outgoing</i>
                            </button>
                            <button type="button" class="btn btn-default waves-effect">
                                <i class="material-icons">forum</i>
                            </button>
                            <button type="button" class="btn btn-default waves-effect">
                                <i class="material-icons">email</i>
                            </button>
                            <button type="button" class="btn btn-default waves-effect">
                                <i class="material-icons">chat</i>
                            </button>
                            <button type="button" class="btn btn-default waves-effect">
                                <i class="material-icons">vpn_key</i>
                            </button>
                            <button type="button" class="btn btn-default waves-effect">
                                <i class="material-icons">content_cut</i>
                            </button>
                            <button type="button" class="btn btn-default waves-effect">
                                <i class="material-icons">drafts</i>
                            </button>
                            <button type="button" class="btn btn-default waves-effect">
                                <i class="material-icons">save</i>
                            </button>
                            <button type="button" class="btn btn-default waves-effect">
                                <i class="material-icons">weekend</i>
                            </button>
                            <button type="button" class="btn btn-default waves-effect">
                                <i class="material-icons">access_alarm</i>
                            </button>
                            <button type="button" class="btn btn-default waves-effect">
                                <i class="material-icons">location_searching</i>
                            </button>
                            <button type="button" class="btn btn-default waves-effect">
                                <i class="material-icons">merge_type</i>
                            </button>
                            <button type="button" class="btn btn-default waves-effect">
                                <i class="material-icons">publish</i>
                            </button>
                        </div>
                        <div class="icon-button-demo">
                            <button type="button" class="btn btn-primary waves-effect">
                                <i class="material-icons">extension</i>
                            </button>
                            <button type="button" class="btn btn-success waves-effect">
                                <i class="material-icons">home</i>
                            </button>
                            <button type="button" class="btn btn-info waves-effect">
                                <i class="material-icons">lock</i>
                            </button>
                            <button type="button" class="btn btn-warning waves-effect">
                                <i class="material-icons">perm_scan_wifi</i>
                            </button>
                            <button type="button" class="btn btn-danger waves-effect">
                                <i class="material-icons">flight_takeoff</i>
                            </button>
                            <button type="button" class="btn bg-red waves-effect">
                                <i class="material-icons">print</i>
                            </button>
                            <button type="button" class="btn bg-pink waves-effect">
                                <i class="material-icons">report_problem</i>
                            </button>
                            <button type="button" class="btn bg-purple waves-effect">
                                <i class="material-icons">search</i>
                            </button>
                            <button type="button" class="btn bg-deep-purple waves-effect">
                                <i class="material-icons">settings</i>
                            </button>
                            <button type="button" class="btn bg-blue waves-effect">
                                <i class="material-icons">verified_user</i>
                            </button>
                            <button type="button" class="btn bg-light-blue waves-effect">
                                <i class="material-icons">mic</i>
                            </button>
                            <button type="button" class="btn bg-cyan waves-effect">
                                <i class="material-icons">call_missed_outgoing</i>
                            </button>
                            <button type="button" class="btn bg-teal waves-effect">
                                <i class="material-icons">forum</i>
                            </button>
                            <button type="button" class="btn bg-green waves-effect">
                                <i class="material-icons">email</i>
                            </button>
                            <button type="button" class="btn bg-light-green waves-effect">
                                <i class="material-icons">chat</i>
                            </button>
                            <button type="button" class="btn bg-lime waves-effect">
                                <i class="material-icons">vpn_key</i>
                            </button>
                            <button type="button" class="btn bg-yellow waves-effect">
                                <i class="material-icons">content_cut</i>
                            </button>
                            <button type="button" class="btn bg-amber waves-effect">
                                <i class="material-icons">drafts</i>
                            </button>
                            <button type="button" class="btn bg-orange waves-effect">
                                <i class="material-icons">save</i>
                            </button>
                            <button type="button" class="btn bg-deep-orange waves-effect">
                                <i class="material-icons">weekend</i>
                            </button>
                            <button type="button" class="btn bg-brown waves-effect">
                                <i class="material-icons">access_alarm</i>
                            </button>
                            <button type="button" class="btn bg-grey waves-effect">
                                <i class="material-icons">location_searching</i>
                            </button>
                            <button type="button" class="btn bg-blue-grey waves-effect">
                                <i class="material-icons">merge_type</i>
                            </button>
                            <button type="button" class="btn bg-black waves-effect waves-light">
                                <i class="material-icons">publish</i>
                            </button>
                        </div>
                        <div class="icon-button-demo m-t-25">
                            <button type="button"
                                    class="btn btn-default btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">extension</i>
                            </button>
                            <button type="button"
                                    class="btn btn-default btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">home</i>
                            </button>
                            <button type="button"
                                    class="btn btn-default btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">lock</i>
                            </button>
                            <button type="button"
                                    class="btn btn-default btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">perm_scan_wifi</i>
                            </button>
                            <button type="button"
                                    class="btn btn-default btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">flight_takeoff</i>
                            </button>
                            <button type="button"
                                    class="btn btn-default btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">print</i>
                            </button>
                            <button type="button"
                                    class="btn btn-default btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">report_problem</i>
                            </button>
                            <button type="button"
                                    class="btn btn-default btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">search</i>
                            </button>
                            <button type="button"
                                    class="btn btn-default btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">settings</i>
                            </button>
                            <button type="button"
                                    class="btn btn-default btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">trending_up</i>
                            </button>
                            <button type="button"
                                    class="btn btn-default btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">verified_user</i>
                            </button>
                            <button type="button"
                                    class="btn btn-default btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">mic</i>
                            </button>
                            <button type="button"
                                    class="btn btn-default btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">call_missed_outgoing</i>
                            </button>
                            <button type="button"
                                    class="btn btn-default btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">forum</i>
                            </button>
                            <button type="button"
                                    class="btn btn-default btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">email</i>
                            </button>
                            <button type="button"
                                    class="btn btn-default btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">chat</i>
                            </button>
                            <button type="button"
                                    class="btn btn-default btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">vpn_key</i>
                            </button>
                            <button type="button"
                                    class="btn btn-default btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">content_cut</i>
                            </button>
                            <button type="button"
                                    class="btn btn-default btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">drafts</i>
                            </button>
                            <button type="button"
                                    class="btn btn-default btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">save</i>
                            </button>
                            <button type="button"
                                    class="btn btn-default btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">weekend</i>
                            </button>
                            <button type="button"
                                    class="btn btn-default btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">access_alarm</i>
                            </button>
                            <button type="button"
                                    class="btn btn-default btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">location_searching</i>
                            </button>
                            <button type="button"
                                    class="btn btn-default btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">merge_type</i>
                            </button>
                            <button type="button"
                                    class="btn btn-default btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">publish</i>
                            </button>
                        </div>
                        <div class="icon-button-demo">
                            <button type="button"
                                    class="btn btn-primary btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">extension</i>
                            </button>
                            <button type="button"
                                    class="btn btn-success btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">home</i>
                            </button>
                            <button type="button"
                                    class="btn btn-info btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">lock</i>
                            </button>
                            <button type="button"
                                    class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">perm_scan_wifi</i>
                            </button>
                            <button type="button"
                                    class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">flight_takeoff</i>
                            </button>
                            <button type="button"
                                    class="btn bg-red btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">print</i>
                            </button>
                            <button type="button"
                                    class="btn bg-pink btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">report_problem</i>
                            </button>
                            <button type="button"
                                    class="btn bg-purple btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">search</i>
                            </button>
                            <button type="button"
                                    class="btn bg-deep-purple btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">settings</i>
                            </button>
                            <button type="button"
                                    class="btn bg-indigo btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">trending_up</i>
                            </button>
                            <button type="button"
                                    class="btn bg-blue btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">verified_user</i>
                            </button>
                            <button type="button"
                                    class="btn bg-light-blue btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">mic</i>
                            </button>
                            <button type="button"
                                    class="btn bg-cyan btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">call_missed_outgoing</i>
                            </button>
                            <button type="button"
                                    class="btn bg-teal btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">forum</i>
                            </button>
                            <button type="button"
                                    class="btn bg-green btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">email</i>
                            </button>
                            <button type="button"
                                    class="btn bg-light-green btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">chat</i>
                            </button>
                            <button type="button"
                                    class="btn bg-lime btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">vpn_key</i>
                            </button>
                            <button type="button"
                                    class="btn bg-yellow btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">content_cut</i>
                            </button>
                            <button type="button"
                                    class="btn bg-amber btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">drafts</i>
                            </button>
                            <button type="button"
                                    class="btn bg-orange btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">save</i>
                            </button>
                            <button type="button"
                                    class="btn bg-deep-orange btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">weekend</i>
                            </button>
                            <button type="button"
                                    class="btn bg-brown btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">access_alarm</i>
                            </button>
                            <button type="button"
                                    class="btn bg-grey btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">location_searching</i>
                            </button>
                            <button type="button"
                                    class="btn bg-blue-grey btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">merge_type</i>
                            </button>
                            <button type="button"
                                    class="btn bg-black btn-circle waves-effect waves-circle waves-float waves-light">
                                <i class="material-icons">publish</i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Icon Buttons -->
        <!-- Icon & Text Buttons -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Icon</strong> &amp; Text Buttons</h2>
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
                        <div class="icon-and-text-button-demo">
                            <button type="button" class="btn btn-primary waves-effect">
                                <i class="material-icons">extension</i>
                                <span>EXTENSION</span>
                            </button>
                            <button type="button" class="btn btn-success waves-effect">
                                <i class="material-icons">home</i>
                                <span>HOME</span>
                            </button>
                            <button type="button" class="btn btn-info waves-effect">
                                <i class="material-icons">lock</i>
                                <span>LOCK</span>
                            </button>
                            <button type="button" class="btn btn-warning waves-effect">
                                <i class="material-icons">perm_scan_wifi</i>
                                <span>SCAN WIFI</span>
                            </button>
                            <button type="button" class="btn btn-danger waves-effect">
                                <i class="material-icons">flight_takeoff</i>
                                <span>TAKE OFF</span>
                            </button>
                            <button type="button" class="btn bg-red waves-effect">
                                <i class="material-icons">print</i>
                                <span>PRINT...</span>
                            </button>
                            <button type="button" class="btn bg-pink waves-effect">
                                <i class="material-icons">report_problem</i>
                                <span>REPORT ISSUE</span>
                            </button>
                            <button type="button" class="btn bg-purple waves-effect">
                                <i class="material-icons">search</i>
                                <span>SEARCH</span>
                            </button>
                            <button type="button" class="btn bg-deep-purple waves-effect">
                                <i class="material-icons">settings</i>
                                <span>SETTINGS</span>
                            </button>
                            <button type="button" class="btn bg-indigo waves-effect">
                                <i class="material-icons">trending_up</i>
                                <span>TRENDING UP</span>
                            </button>
                            <button type="button" class="btn bg-blue waves-effect">
                                <i class="material-icons">verified_user</i>
                                <span>VERIFIED USER</span>
                            </button>
                            <button type="button" class="btn bg-light-blue waves-effect">
                                <i class="material-icons">mic</i>
                                <span>MIC</span>
                            </button>
                            <button type="button" class="btn bg-teal waves-effect">
                                <i class="material-icons">forum</i>
                                <span>FORUM</span>
                            </button>
                            <button type="button" class="btn bg-green waves-effect">
                                <i class="material-icons">email</i>
                                <span>EMAIL</span>
                            </button>
                            <button type="button" class="btn bg-light-green waves-effect">
                                <i class="material-icons">chat</i>
                                <span>CHAT</span>
                            </button>
                            <button type="button" class="btn bg-lime waves-effect">
                                <i class="material-icons">vpn_key</i>
                                <span>VPN KEY</span>
                            </button>
                            <button type="button" class="btn bg-amber waves-effect">
                                <i class="material-icons">drafts</i>
                                <span>DRAFTS</span>
                            </button>
                            <button type="button" class="btn bg-orange waves-effect">
                                <i class="material-icons">save</i>
                                <span>SAVE</span>
                            </button>
                            <button type="button" class="btn bg-deep-orange waves-effect">
                                <i class="material-icons">weekend</i>
                                <span>WEEKEND</span>
                            </button>
                            <button type="button" class="btn bg-brown waves-effect">
                                <i class="material-icons">access_alarm</i>
                                <span>ALARM</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Icon & Text Buttons -->
        <!-- Button Groups -->
        <div class="block-header">
            <h2>
                BUTTON GROUPS
            </h2>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Basic</strong> Buttons</h2>
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
                        <div class="demo-button-groups">
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-default waves-effect">LEFT</button>
                                <button type="button" class="btn btn-default waves-effect">MIDDLE</button>
                                <button type="button" class="btn btn-default waves-effect">RIGHT</button>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-primary waves-effect">LEFT</button>
                                <button type="button" class="btn btn-primary waves-effect">MIDDLE</button>
                                <button type="button" class="btn btn-primary waves-effect">RIGHT</button>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-success waves-effect">LEFT</button>
                                <button type="button" class="btn btn-success waves-effect">MIDDLE</button>
                                <button type="button" class="btn btn-success waves-effect">RIGHT</button>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-info waves-effect">LEFT</button>
                                <button type="button" class="btn btn-info waves-effect">MIDDLE</button>
                                <button type="button" class="btn btn-info waves-effect">RIGHT</button>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-warning waves-effect">LEFT</button>
                                <button type="button" class="btn btn-warning waves-effect">MIDDLE</button>
                                <button type="button" class="btn btn-warning waves-effect">RIGHT</button>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-danger waves-effect">LEFT</button>
                                <button type="button" class="btn btn-danger waves-effect">MIDDLE</button>
                                <button type="button" class="btn btn-danger waves-effect">RIGHT</button>
                            </div>
                        </div>
                        <h2 class="card-inside-title">
                            With Material Design Colors
                        </h2>
                        <div class="demo-button-groups">
                            <div class="btn-group" role="group">
                                <button type="button" class="btn bg-pink waves-effect waves-light">LEFT</button>
                                <button type="button" class="btn bg-pink waves-effect waves-light">MIDDLE</button>
                                <button type="button" class="btn bg-pink waves-effect waves-light">RIGHT</button>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn bg-cyan waves-effect">LEFT</button>
                                <button type="button" class="btn bg-cyan waves-effect">MIDDLE</button>
                                <button type="button" class="btn bg-cyan waves-effect">RIGHT</button>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn bg-teal waves-effect">LEFT</button>
                                <button type="button" class="btn bg-teal waves-effect">MIDDLE</button>
                                <button type="button" class="btn bg-teal waves-effect">RIGHT</button>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn bg-orange waves-effect">LEFT</button>
                                <button type="button" class="btn bg-orange waves-effect">MIDDLE</button>
                                <button type="button" class="btn bg-orange waves-effect">RIGHT</button>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn bg-purple waves-effect waves-light">LEFT</button>
                                <button type="button" class="btn bg-purple waves-effect waves-light">MIDDLE</button>
                                <button type="button" class="btn bg-purple waves-effect waves-light">RIGHT</button>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn bg-blue-grey waves-effect">LEFT</button>
                                <button type="button" class="btn bg-blue-grey waves-effect">MIDDLE</button>
                                <button type="button" class="btn bg-blue-grey waves-effect">RIGHT</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Button</strong> Toolbar</h2>
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
                        <div class="demo-button-toolbar clearfix">
                            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group" role="group" aria-label="First group">
                                    <button type="button" class="btn btn-default waves-effect">1</button>
                                    <button type="button" class="btn btn-default waves-effect">2</button>
                                    <button type="button" class="btn btn-default waves-effect">3</button>
                                    <button type="button" class="btn btn-default waves-effect">4</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Second group">
                                    <button type="button" class="btn btn-default waves-effect">5</button>
                                    <button type="button" class="btn btn-default waves-effect">6</button>
                                    <button type="button" class="btn btn-default waves-effect">7</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Third group">
                                    <button type="button" class="btn btn-default waves-effect">8</button>
                                </div>
                            </div>
                            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group" role="group" aria-label="First group">
                                    <button type="button" class="btn btn-primary waves-effect">1</button>
                                    <button type="button" class="btn btn-primary waves-effect">2</button>
                                    <button type="button" class="btn btn-primary waves-effect">3</button>
                                    <button type="button" class="btn btn-primary waves-effect">4</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Second group">
                                    <button type="button" class="btn btn-primary waves-effect">5</button>
                                    <button type="button" class="btn btn-primary waves-effect">6</button>
                                    <button type="button" class="btn btn-primary waves-effect">7</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Third group">
                                    <button type="button" class="btn btn-primary waves-effect">8</button>
                                </div>
                            </div>
                            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group" role="group" aria-label="First group">
                                    <button type="button" class="btn btn-success waves-effect">1</button>
                                    <button type="button" class="btn btn-success waves-effect">2</button>
                                    <button type="button" class="btn btn-success waves-effect">3</button>
                                    <button type="button" class="btn btn-success waves-effect">4</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Second group">
                                    <button type="button" class="btn btn-success waves-effect">5</button>
                                    <button type="button" class="btn btn-success waves-effect">6</button>
                                    <button type="button" class="btn btn-success waves-effect">7</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Third group">
                                    <button type="button" class="btn btn-success waves-effect">8</button>
                                </div>
                            </div>
                            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group" role="group" aria-label="First group">
                                    <button type="button" class="btn btn-info waves-effect">1</button>
                                    <button type="button" class="btn btn-info waves-effect">2</button>
                                    <button type="button" class="btn btn-info waves-effect">3</button>
                                    <button type="button" class="btn btn-info waves-effect">4</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Second group">
                                    <button type="button" class="btn btn-info waves-effect">5</button>
                                    <button type="button" class="btn btn-info waves-effect">6</button>
                                    <button type="button" class="btn btn-info waves-effect">7</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Third group">
                                    <button type="button" class="btn btn-info waves-effect">8</button>
                                </div>
                            </div>
                            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group" role="group" aria-label="First group">
                                    <button type="button" class="btn btn-warning waves-effect">1</button>
                                    <button type="button" class="btn btn-warning waves-effect">2</button>
                                    <button type="button" class="btn btn-warning waves-effect">3</button>
                                    <button type="button" class="btn btn-warning waves-effect">4</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Second group">
                                    <button type="button" class="btn btn-warning waves-effect">5</button>
                                    <button type="button" class="btn btn-warning waves-effect">6</button>
                                    <button type="button" class="btn btn-warning waves-effect">7</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Third group">
                                    <button type="button" class="btn btn-warning waves-effect">8</button>
                                </div>
                            </div>
                        </div>
                        <h2 class="card-inside-title">
                            With Material Design Colors
                        </h2>
                        <div class="demo-button-toolbar clearfix">
                            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group" role="group" aria-label="First group">
                                    <button type="button" class="btn bg-pink waves-effect">1</button>
                                    <button type="button" class="btn bg-pink waves-effect">2</button>
                                    <button type="button" class="btn bg-pink waves-effect">3</button>
                                    <button type="button" class="btn bg-pink waves-effect">4</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Second group">
                                    <button type="button" class="btn bg-pink waves-effect">5</button>
                                    <button type="button" class="btn bg-pink waves-effect">6</button>
                                    <button type="button" class="btn bg-pink waves-effect">7</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Third group">
                                    <button type="button" class="btn bg-pink waves-effect">8</button>
                                </div>
                            </div>
                            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group" role="group" aria-label="First group">
                                    <button type="button" class="btn bg-cyan waves-effect">1</button>
                                    <button type="button" class="btn bg-cyan waves-effect">2</button>
                                    <button type="button" class="btn bg-cyan waves-effect">3</button>
                                    <button type="button" class="btn bg-cyan waves-effect">4</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Second group">
                                    <button type="button" class="btn bg-cyan waves-effect">5</button>
                                    <button type="button" class="btn bg-cyan waves-effect">6</button>
                                    <button type="button" class="btn bg-cyan waves-effect">7</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Third group">
                                    <button type="button" class="btn bg-cyan waves-effect">8</button>
                                </div>
                            </div>
                            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group" role="group" aria-label="First group">
                                    <button type="button" class="btn bg-teal waves-effect">1</button>
                                    <button type="button" class="btn bg-teal waves-effect">2</button>
                                    <button type="button" class="btn bg-teal waves-effect">3</button>
                                    <button type="button" class="btn bg-teal waves-effect">4</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Second group">
                                    <button type="button" class="btn bg-teal waves-effect">5</button>
                                    <button type="button" class="btn bg-teal waves-effect">6</button>
                                    <button type="button" class="btn bg-teal waves-effect">7</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Third group">
                                    <button type="button" class="btn bg-teal waves-effect">8</button>
                                </div>
                            </div>
                            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group" role="group" aria-label="First group">
                                    <button type="button" class="btn bg-orange waves-effect">1</button>
                                    <button type="button" class="btn bg-orange waves-effect">2</button>
                                    <button type="button" class="btn bg-orange waves-effect">3</button>
                                    <button type="button" class="btn bg-orange waves-effect">4</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Second group">
                                    <button type="button" class="btn bg-orange waves-effect">5</button>
                                    <button type="button" class="btn bg-orange waves-effect">6</button>
                                    <button type="button" class="btn bg-orange waves-effect">7</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Third group">
                                    <button type="button" class="btn bg-orange waves-effect">8</button>
                                </div>
                            </div>
                            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group" role="group" aria-label="First group">
                                    <button type="button" class="btn bg-purple waves-effect">1</button>
                                    <button type="button" class="btn bg-purple waves-effect">2</button>
                                    <button type="button" class="btn bg-purple waves-effect">3</button>
                                    <button type="button" class="btn bg-purple waves-effect">4</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Second group">
                                    <button type="button" class="btn bg-purple waves-effect">5</button>
                                    <button type="button" class="btn bg-purple waves-effect">6</button>
                                    <button type="button" class="btn bg-purple waves-effect">7</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Third group">
                                    <button type="button" class="btn bg-purple waves-effect">8</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Nesting</strong>
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
                        <div class="demo-button-nesting">
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-default waves-effect">1</button>
                                <button type="button" class="btn btn-default waves-effect">2</button>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-default waves-effect dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#" onClick="return false;">Dropdown link</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">Dropdown link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-primary waves-effect">1</button>
                                <button type="button" class="btn btn-primary waves-effect">2</button>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-primary waves-effect dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#" onClick="return false;">Dropdown link</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">Dropdown link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-success waves-effect">1</button>
                                <button type="button" class="btn btn-success waves-effect">2</button>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-success waves-effect dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#" onClick="return false;">Dropdown link</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">Dropdown link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-info waves-effect">1</button>
                                <button type="button" class="btn btn-info waves-effect">2</button>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-info waves-effect dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#" onClick="return false;">Dropdown link</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">Dropdown link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-warning waves-effect">1</button>
                                <button type="button" class="btn btn-warning waves-effect">2</button>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-warning waves-effect dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#" onClick="return false;">Dropdown link</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">Dropdown link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-danger waves-effect">1</button>
                                <button type="button" class="btn btn-danger waves-effect">2</button>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-danger waves-effect dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#" onClick="return false;">Dropdown link</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">Dropdown link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <h2 class="card-inside-title">
                            With Material Design Colors
                        </h2>
                        <div class="demo-button-nesting">
                            <div class="btn-group" role="group">
                                <button type="button" class="btn bg-pink waves-effect">1</button>
                                <button type="button" class="btn bg-pink waves-effect">2</button>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn bg-pink waves-effect dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#" onClick="return false;">Dropdown link</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">Dropdown link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn bg-cyan waves-effect">1</button>
                                <button type="button" class="btn bg-cyan waves-effect">2</button>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn bg-cyan waves-effect dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#" onClick="return false;">Dropdown link</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">Dropdown link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn bg-teal waves-effect">1</button>
                                <button type="button" class="btn bg-teal waves-effect">2</button>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn bg-teal waves-effect dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#" onClick="return false;">Dropdown link</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">Dropdown link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn bg-orange waves-effect">1</button>
                                <button type="button" class="btn bg-orange waves-effect">2</button>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn bg-orange waves-effect dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#" onClick="return false;">Dropdown link</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">Dropdown link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn bg-purple waves-effect">1</button>
                                <button type="button" class="btn bg-purple waves-effect">2</button>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn bg-purple waves-effect dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#" onClick="return false;">Dropdown link</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">Dropdown link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn bg-blue-grey waves-effect">1</button>
                                <button type="button" class="btn bg-blue-grey waves-effect">2</button>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn bg-blue-grey waves-effect dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#" onClick="return false;">Dropdown link</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">Dropdown link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Vertical</strong> Variation</h2>
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
                        <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                            <button type="button" class="btn bg-pink waves-effect">Button</button>
                            <button type="button" class="btn bg-cyan waves-effect">Button</button>
                            <div class="btn-group" role="group">
                                <button id="btnGroupVerticalDrop1" type="button"
                                        class="btn bg-teal waves-effect dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    Dropdown
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                    <li>
                                        <a href="#" onClick="return false;">Dropdown link</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Dropdown link</a>
                                    </li>
                                </ul>
                            </div>
                            <button type="button" class="btn bg-orange waves-effect">Button</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Justified</strong> Button Groups</h2>
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
                        <div class="btn-group btn-group-justified" role="group" aria-label="Justified button group">
                            <a href="#" onClick="return false;" class="btn bg-pink waves-effect"
                               role="button">LEFT</a>
                            <a href="#" onClick="return false;" class="btn bg-pink waves-effect"
                               role="button">MIDDLE</a>
                            <a href="#" onClick="return false;" class="btn bg-pink waves-effect"
                               role="button">RIGHT</a>
                        </div>
                        <div class="btn-group btn-group-justified m-t-25 m-b-15" role="group"
                             aria-label="Justified button group with nested dropdown">
                            <a href="#" onClick="return false;" class="btn bg-pink waves-effect"
                               role="button">LEFT</a>
                            <a href="#" onClick="return false;" class="btn bg-pink waves-effect"
                               role="button">MIDDLE</a>
                            <div class="btn-group" role="group">
                                <a href="#" onClick="return false;" class="btn bg-pink dropdown-toggle"
                                   data-toggle="dropdown" role="button" aria-haspopup="true"
                                   aria-expanded="false">Dropdown
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#" onClick="return false;">Action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Another action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Something else here</a>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                        <a href="#" onClick="return false;">Separated link</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Button Groups -->
        <!-- Button Dropdowns -->
        <div class="block-header">
            <h2>
                BUTTON DROPDOWNS
            </h2>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Single</strong> Button Dropdowns</h2>
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
                        <div class="demo-single-button-dropdowns">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    DEFAULT
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#" onClick="return false;">Action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Another action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Something else here</a>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                        <a href="#" onClick="return false;">Separated link</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    PRIMARY
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#" onClick="return false;">Action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Another action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Something else here</a>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                        <a href="#" onClick="return false;">Separated link</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    SUCCESS
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#" onClick="return false;">Action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Another action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Something else here</a>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                        <a href="#" onClick="return false;">Separated link</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    INFO
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#" onClick="return false;">Action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Another action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Something else here</a>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                        <a href="#" onClick="return false;">Separated link</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    WARNING
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#" onClick="return false;">Action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Another action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Something else here</a>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                        <a href="#" onClick="return false;">Separated link</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <h2 class="card-inside-title">
                            With Material Design Colors
                        </h2>
                        <div class="demo-single-button-dropdowns">
                            <div class="btn-group">
                                <button type="button" class="btn bg-pink dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    PINK
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#" onClick="return false;">Action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Another action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Something else here</a>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                        <a href="#" onClick="return false;">Separated link</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn bg-cyan dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    CYAN
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#" onClick="return false;">Action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Another action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Something else here</a>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                        <a href="#" onClick="return false;">Separated link</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn bg-teal dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    TEAL
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#" onClick="return false;">Action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Another action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Something else here</a>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                        <a href="#" onClick="return false;">Separated link</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn bg-orange dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    ORANGE
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#" onClick="return false;">Action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Another action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Something else here</a>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                        <a href="#" onClick="return false;">Separated link</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn bg-purple dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    PURPLE
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#" onClick="return false;">Action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Another action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Something else here</a>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                        <a href="#" onClick="return false;">Separated link</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Splite</strong> Button Dropdowns</h2>
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
                        <div class="demo-splite-button-dropdowns">
                            <div class="btn-group m-b-10">
                                <button type="button" class="btn btn-default waves-effect">DEFAULT</button>
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="btn-toggle-dropdown">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#" onClick="return false;">Action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Another action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Something else here</a>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                        <a href="#" onClick="return false;">Separated link</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="btn-group m-b-10">
                                <button type="button" class="btn btn-primary waves-effect">PRIMARY</button>
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="btn-toggle-dropdown">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#" onClick="return false;">Action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Another action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Something else here</a>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                        <a href="#" onClick="return false;">Separated link</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="btn-group m-b-10">
                                <button type="button" class="btn btn-success waves-effect">SUCCESS</button>
                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="btn-toggle-dropdown">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#" onClick="return false;">Action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Another action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Something else here</a>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                        <a href="#" onClick="return false;">Separated link</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="btn-group m-b-10">
                                <button type="button" class="btn btn-info waves-effect">INFO</button>
                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="btn-toggle-dropdown">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#" onClick="return false;">Action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Another action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Something else here</a>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                        <a href="#" onClick="return false;">Separated link</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-warning waves-effect">WARNING</button>
                                <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="btn-toggle-dropdown">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#" onClick="return false;">Action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Another action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Something else here</a>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                        <a href="#" onClick="return false;">Separated link</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <h2 class="card-inside-title">
                            With Material Design Colors
                        </h2>
                        <div class="demo-splite-button-dropdowns">
                            <div class="btn-group m-b-10">
                                <button type="button" class="btn bg-pink waves-effect">PINK</button>
                                <button type="button" class="btn bg-pink dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="btn-toggle-dropdown">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#" onClick="return false;">Action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Another action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Something else here</a>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                        <a href="#" onClick="return false;">Separated link</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="btn-group m-b-10">
                                <button type="button" class="btn bg-cyan waves-effect">CYAN</button>
                                <button type="button" class="btn bg-cyan dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="btn-toggle-dropdown">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#" onClick="return false;">Action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Another action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Something else here</a>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                        <a href="#" onClick="return false;">Separated link</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="btn-group m-b-10">
                                <button type="button" class="btn bg-teal waves-effect">TEAL</button>
                                <button type="button" class="btn bg-teal dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="btn-toggle-dropdown">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#" onClick="return false;">Action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Another action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Something else here</a>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                        <a href="#" onClick="return false;">Separated link</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="btn-group m-b-10">
                                <button type="button" class="btn bg-orange waves-effect">ORANGE</button>
                                <button type="button" class="btn bg-orange dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="btn-toggle-dropdown">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#" onClick="return false;">Action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Another action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Something else here</a>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                        <a href="#" onClick="return false;">Separated link</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="btn-group m-b-10">
                                <button type="button" class="btn bg-purple waves-effect">PURPLE</button>
                                <button type="button" class="btn bg-purple dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="btn-toggle-dropdown">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#" onClick="return false;">Action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Another action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Something else here</a>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                        <a href="#" onClick="return false;">Separated link</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Button Dropdowns -->
    </div>
</section>
@endsection