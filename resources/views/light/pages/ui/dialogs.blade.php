@extends('light.layouts.app3')
@section('title')
    Dialogs - {{config('app.dashboard')}}
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">Dialogs</h4>
                        </li>
                        <li class="breadcrumb-item bcrumb-1">
                            <a href="../../index-2.html">
                                <i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item bcrumb-2">
                            <a href="#" onClick="return false;">UI</a>
                        </li>
                        <li class="breadcrumb-item active">Dialogs</li>
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
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <p>A basic message</p>
                                <button class="btn btn-primary waves-effect" data-type="basic">CLICK ME</button>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <p>A title with a text under</p>
                                <button class="btn btn-primary waves-effect" data-type="with-title">CLICK
                                    ME</button>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <p>A success message!</p>
                                <button class="btn btn-primary waves-effect" data-type="success">CLICK ME</button>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <p>A warning message, with a function attached to the
                                    <b>Confirm</b> button...</p>
                                <button class="btn btn-primary waves-effect" data-type="confirm">CLICK ME</button>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <p>... and by passing a parameter, you can execute something else for
                                    <b>Cancel</b>.</p>
                                <button class="btn btn-primary waves-effect" data-type="cancel">CLICK ME</button>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <p>A message with a custom icon</p>
                                <button class="btn btn-primary waves-effect" data-type="with-custom-icon">CLICK
                                    ME</button>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <p>An HTML message</p>
                                <button class="btn btn-primary waves-effect" data-type="html-message">CLICK
                                    ME</button>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <p>A message with auto close timer</p>
                                <button class="btn btn-primary waves-effect" data-type="autoclose-timer">CLICK
                                    ME</button>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <p>A replacement for the
                                    <b>prompt</b> function</p>
                                <button class="btn btn-primary waves-effect" data-type="prompt">CLICK ME</button>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <p>With a loader (for AJAX request for example)</p>
                                <button class="btn btn-primary waves-effect" data-type="ajax-loader">CLICK
                                    ME</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
