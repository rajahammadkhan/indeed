@extends('light.layouts.app3')
@section('title')
    Basic Forms - {{config('app.dashboard')}}
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">Basic Form</h4>
                        </li>
                        <li class="breadcrumb-item bcrumb-1">
                            <a href="../../index-2.html">
                                <i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item bcrumb-2">
                            <a href="#" onClick="return false;">Forms</a>
                        </li>
                        <li class="breadcrumb-item active">Basic</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Input -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Text Item</strong>
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
                        <h2 class="card-inside-title">Rounded Corner</h2>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="loginmain">
                                    <div class="formCard">
                                        <div class="wrapper">
                                            <form>
                                                <div>
                                                    <input type="email" class="roundInput">
                                                    <label>Username</label>
                                                </div>
                                                <div>
                                                    <input type="password" class="roundInput">
                                                    <label>Password</label>
                                                </div>
                                            </form>
                                            <h2 class="card-inside-title">Square Corner Example</h2>
                                            <form>
                                                <div>
                                                    <input type="email" class="squareInput">
                                                    <label>Username</label>
                                                </div>
                                                <div>
                                                    <input type="password" class="squareInput">
                                                    <label>Password</label>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
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
                            <strong>Input</strong> Elements</h2>
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
                        <h2 class="card-inside-title">Basic Examples</h2>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Username" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="password" class="form-control" placeholder="Password" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2 class="card-inside-title">Floating Label Examples</h2>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control">
                                        <label class="form-label">Username</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" class="form-control">
                                        <label class="form-label">Password</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2 class="card-inside-title">Different Widths</h2>
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="col-sm-6" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="col-sm-6" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="col-sm-4" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="col-sm-4" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="col-sm-4" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="col-sm-3" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="col-sm-3" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="col-sm-3" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="col-sm-3" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2 class="card-inside-title">Input Status</h2>
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-line focused">
                                        <input type="text" class="form-control" value="Focused"
                                               placeholder="Statu Focused" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-line disabled">
                                        <input type="text" class="form-control" placeholder="Disabled" disabled />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2 class="card-inside-title">Character Count</h2>
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="input-field col s12">
                                    <input id="input_text" type="text" data-length="10">
                                    <label for="input_text">Input text</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-field col s12">
                                        <textarea id="textarea2" class="materialize-textarea"
                                                  data-length="120"></textarea>
                                    <label for="textarea2">Textarea</label>
                                </div>
                            </div>
                        </div>
                        <h2 class="card-inside-title">File Upload</h2>
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <form action="#">
                                    <div class="file-field input-field">
                                        <div class="btn">
                                            <span>File</span>
                                            <input type="file">
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-sm-6">
                                <form action="#">
                                    <div class="file-field input-field">
                                        <div class="btn">
                                            <span>File</span>
                                            <input type="file" multiple>
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text"
                                                   placeholder="Upload one or more files">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <h2 class="card-inside-title">Custom Error or Success Messages</h2>
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="input-field col s12">
                                    <input id="email" type="email" class="validate">
                                    <label for="email">Email</label>
                                    <span class="helper-text" data-error="Invalid Email"
                                          data-success="Valid Email">Helper
                                            text
                                        </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Input -->
        <!-- Textarea -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Textarea</strong>
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
                        <h2 class="card-inside-title">Basic Example</h2>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                            <textarea rows="4" class="form-control no-resize"
                                                      placeholder="Please type what you want..."></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2 class="card-inside-title">
                            Auto Growing Vertical Direction
                            <small>Taken from
                                <a href="https://github.com/jackmoore/autosize/tree/master"
                                   target="_blank">github.com/jackmoore/autosize/tree/master</a>
                            </small>
                        </h2>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                            <textarea rows="1" class="form-control no-resize auto-growth"
                                                      placeholder="Please type what you want... And please don't forget the ENTER key press multiple times :)"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Textarea -->
        <!-- Checkbox -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Checkbox</strong>
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
                        <h2 class="card-inside-title">Basic Examples</h2>
                        <div class="row">
                            <div class="col-sm-6 col-lg-3">
                                <div class="form-check m-l-10">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value=""> Purple
                                        <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <form action="#">
                                    <p>
                                        <label>
                                            <input type="checkbox" checked="checked" />
                                            <span>Yellow</span>
                                        </label>
                                    </p>
                                </form>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <form action="#">
                                    <p>
                                        <label>
                                            <input type="checkbox" class="filled-in" checked="checked" />
                                            <span>Filled in</span>
                                        </label>
                                    </p>
                                </form>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <form action="#">
                                    <p>
                                        <label>
                                            <input id="indeterminate-checkbox" type="checkbox" />
                                            <span>Indeterminate Style</span>
                                        </label>
                                    </p>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-lg-3">
                                <form action="#">
                                    <p>
                                        <label>
                                            <input type="checkbox" checked="checked" disabled="disabled" />
                                            <span>Green</span>
                                        </label>
                                    </p>
                                </form>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <form action="#">
                                    <p>
                                        <label>
                                            <input type="checkbox" disabled="disabled" />
                                            <span>Brown</span>
                                        </label>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Checkbox -->
        <!-- Radio -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Radio</strong>
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
                        <h2 class="card-inside-title">Basic Examples</h2>
                        <div class="row">
                            <div class="col-sm-6 col-lg-3">
                                <div class="form-check form-check-radio">
                                    <label>
                                        <input name="group1" type="radio" />
                                        <span>Radio is off</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="form-check form-check-radio">
                                    <label>
                                        <input name="group1" type="radio" checked />
                                        <span>Radio is on</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="form-check form-check-radio disabled">
                                    <label>
                                        <input name="group1" type="radio" disabled />
                                        <span>Disabled radio is off</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-lg-3">
                                <div class="form-check form-check-radio disabled">
                                    <label>
                                        <input class="with-gap" name="group3" type="radio" checked />
                                        <span>Radio With Gap</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Radio -->
        <!-- Switch Button -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Switch</strong> Button</h2>
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
                        <h2 class="card-inside-title">Basic Examples</h2>
                        <div class="demo-switch">
                            <div class="switch">
                                <label>OFF
                                    <input type="checkbox" checked>
                                    <span class="lever"></span>ON</label>
                            </div>
                            <div class="switch">
                                <label>DISABLED
                                    <input type="checkbox" disabled>
                                    <span class="lever"></span>
                                </label>
                            </div>
                        </div>
                        <h2 class="card-inside-title">
                            With Material Design Colors
                            <small>You can use material design colors which examples are
                                <code>.switch-col-pink, .switch-col-teal</code> class
                            </small>
                        </h2>
                        <div class="demo-switch">
                            <div class="row clearfix">
                                <div class="col-sm-3">
                                    <div class="demo-switch-title">RED</div>
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox" checked>
                                            <span class="lever switch-col-red"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="demo-switch-title">PINK</div>
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox" checked>
                                            <span class="lever switch-col-pink"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="demo-switch-title">PURPLE</div>
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox" checked>
                                            <span class="lever switch-col-purple"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="demo-switch-title">DEEP PURPLE</div>
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox" checked>
                                            <span class="lever switch-col-deep-purple"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="demo-switch-title">INDIGO</div>
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox" checked>
                                            <span class="lever switch-col-indigo"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="demo-switch-title">BLUE</div>
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox" checked>
                                            <span class="lever switch-col-blue"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="demo-switch-title">LIGHT BLUE</div>
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox" checked>
                                            <span class="lever switch-col-light-blue"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="demo-switch-title">CYAN</div>
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox" checked>
                                            <span class="lever switch-col-cyan"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="demo-switch-title">TEAL</div>
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox" checked>
                                            <span class="lever switch-col-teal"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="demo-switch-title">GREEN</div>
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox" checked>
                                            <span class="lever switch-col-green"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="demo-switch-title">LIGHT GREEN</div>
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox" checked>
                                            <span class="lever switch-col-light-green"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="demo-switch-title">LIME</div>
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox" checked>
                                            <span class="lever switch-col-lime"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="demo-switch-title">YELLOW</div>
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox" checked>
                                            <span class="lever switch-col-yellow"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="demo-switch-title">AMBER</div>
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox" checked>
                                            <span class="lever switch-col-amber"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="demo-switch-title">ORANGE</div>
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox" checked>
                                            <span class="lever switch-col-orange"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="demo-switch-title">DEEP ORANGE</div>
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox" checked>
                                            <span class="lever switch-col-deep-orange"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="demo-switch-title">BROWN</div>
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox" checked>
                                            <span class="lever switch-col-brown"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="demo-switch-title">GREY</div>
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox" checked>
                                            <span class="lever switch-col-grey"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="demo-switch-title">BLUE GREY</div>
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox" checked>
                                            <span class="lever switch-col-blue-grey"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="demo-switch-title">BLACK</div>
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox" checked>
                                            <span class="lever switch-col-black"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--#END# Switch Button -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Flatpicker</strong> Date &amp; TIme Picker</h2>
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
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="form-line">
                                        <label for="email_address">Date Picker</label>
                                        <input id="myDatePicker" class="flatPicker"
                                               placeholder="Please choose a date...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="form-line">
                                        <label for="email_address">Date &amp; Time Picker</label>
                                        <input id="myDateTimePicker" placeholder="Pick a date and time">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="form-line">
                                        <label for="email_address">Time Picker</label>
                                        <input id="myTimePicker" placeholder="Pick a time">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="form-line">
                                        <label for="email_address">Date Range</label>
                                        <input id="myDateRange" class="flatPicker" placeholder="Choose Date Range">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="form-line">
                                        <label for="email_address">Selecting multiple dates</label>
                                        <input id="myMultiSelectDate" placeholder="Pick Multiple Date">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="form-line">
                                        <label for="email_address">Disable Dates</label>
                                        <input id="myDisableDate" placeholder="Pick a Date">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--DateTime Picker -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Datetime</strong> Picker</h2>
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
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="datepicker form-control"
                                               placeholder="Please choose a date...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="timepicker form-control"
                                               placeholder="Please choose a time...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="datetimepicker form-control"
                                               placeholder="Please choose date & time...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--#END# DateTime Picker -->
    </div>
</section>
@endsection