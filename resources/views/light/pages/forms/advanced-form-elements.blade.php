@extends('light.layouts.app3')
@section('title')
    Advanced - {{config('app.dashboard')}}
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">Advance Form</h4>
                        </li>
                        <li class="breadcrumb-item bcrumb-1">
                            <a href="../../index-2.html">
                                <i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item bcrumb-2">
                            <a href="#" onClick="return false;">Forms</a>
                        </li>
                        <li class="breadcrumb-item active">Advance</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Color Pickers -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Color</strong> Picker</h2>
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
                            <div class="col-md-6">
                                <b>HEX CODE</b>
                                <div class="input-group colorpicker">
                                    <div class="form-line">
                                        <input type="text" class="form-control" value="#00AABB">
                                    </div>
                                    <span class="input-group-addon">
                                            <i></i>
                                        </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <b>RGB(A) CODE</b>
                                <div class="input-group colorpicker">
                                    <div class="form-line">
                                        <input type="text" class="form-control" value="rgba(0,0,0,0.7)">
                                    </div>
                                    <span class="input-group-addon">
                                            <i></i>
                                        </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Color Pickers -->
        <!-- File Upload | Drag & Drop OR With Click & Choose -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>File</strong> Upload</h2>
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
                        <form action="http://www.radixtouch.in/" id="frmFileUpload" class="dropzone" method="post"
                              enctype="multipart/form-data">
                            <div class="dz-message">
                                <div class="drag-icon-cph">
                                    <i class="material-icons">touch_app</i>
                                </div>
                                <h3>Drop files here or click to upload.</h3>
                                <em>(This is just a demo dropzone. Selected files are
                                    <strong>not</strong> actually uploaded.)
                                </em>
                            </div>
                            <div class="fallback">
                                <input name="file" type="file" multiple />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# File Upload | Drag & Drop OR With Click & Choose -->
        <!-- Masked Input -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Masked</strong> Input</h2>
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
                        <div class="demo-masked-input">
                            <div class="row clearfix">
                                <div class="col-md-3">
                                    <b>Date</b>
                                    <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">date_range</i>
                                            </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date"
                                                   placeholder="Ex: 30/07/2016">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <b>Time (24 hour)</b>
                                    <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">access_time</i>
                                            </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control time24" placeholder="Ex: 23:59">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <b>Time (12 hour)</b>
                                    <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">access_time</i>
                                            </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control time12"
                                                   placeholder="Ex: 11:59 pm">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <b>Date Time</b>
                                    <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">date_range</i>
                                            </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control datetime"
                                                   placeholder="Ex: 30/07/2016 23:59">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <b>Mobile Phone Number</b>
                                    <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">phone_iphone</i>
                                            </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control mobile-phone-number"
                                                   placeholder="Ex: +00 (000) 000-00-00">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <b>Phone Number</b>
                                    <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">phone</i>
                                            </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control mobile-phone-number"
                                                   placeholder="Ex: +00 (000) 000-00-00">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <b>Money (Dollar)</b>
                                    <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">attach_money</i>
                                            </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control money-dollar"
                                                   placeholder="Ex: 99,99 $">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <b>Money (Euro)</b>
                                    <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">euro_symbol</i>
                                            </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control money-euro"
                                                   placeholder="Ex: 99,99 €">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <b>IP Address</b>
                                    <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">computer</i>
                                            </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control ip"
                                                   placeholder="Ex: 255.255.255.255">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <b>Credit Card</b>
                                    <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">credit_card</i>
                                            </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control credit-card"
                                                   placeholder="Ex: 0000 0000 0000 0000">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <b>Email Address</b>
                                    <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">email</i>
                                            </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control email"
                                                   placeholder="Ex: example@example.com">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <b>Serial Key</b>
                                    <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">vpn_key</i>
                                            </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control key"
                                                   placeholder="Ex: XXX0-XXXX-XX00-0XXX">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Masked Input -->
        <!-- Input Group -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Input</strong> Group</h2>
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
                        <h2 class="card-inside-title">With Icon</h2>
                        <div class="row clearfix">
                            <div class="col-md-4">
                                <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control date" placeholder="Username">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control date" placeholder="Message">
                                    </div>
                                    <span class="input-group-addon">
                                            <i class="material-icons">send</i>
                                        </span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control date"
                                               placeholder="Recipient's username">
                                    </div>
                                    <span class="input-group-addon">
                                            <i class="material-icons">send</i>
                                        </span>
                                </div>
                            </div>
                        </div>
                        <h2 class="card-inside-title">With Text</h2>
                        <div class="row clearfix">
                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon">@</span>
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Username">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Recipient's username">
                                    </div>
                                    <span class="input-group-addon">@example.com</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon">$</span>
                                    <div class="form-line">
                                        <input type="text" class="form-control date">
                                    </div>
                                    <span class="input-group-addon">.00</span>
                                </div>
                            </div>
                        </div>
                        <h2 class="card-inside-title">
                            Different Sizes
                            <small>You can use the
                                <code>.input-group-sm, .input-group-lg</code> classes for sizing.
                            </small>
                        </h2>
                        <div class="row clearfix">
                            <div class="col-md-4">
                                <p>
                                    <b>Input Group Large</b>
                                </p>
                                <div class="input-group input-group-lg">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Username">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <p>
                                    <b>Input Group Default</b>
                                </p>
                                <div class="input-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Message">
                                    </div>
                                    <span class="input-group-addon">
                                            <i class="material-icons">send</i>
                                        </span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <p>
                                    <b>Input Group Small</b>
                                </p>
                                <div class="input-group input-group-sm">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Recipient's username">
                                    </div>
                                    <span class="input-group-addon">
                                            <i class="material-icons">send</i>
                                        </span>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-4">
                                <div class="input-group input-group-lg">
                                    <span class="input-group-addon">@</span>
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Username">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Recipient's username">
                                    </div>
                                    <span class="input-group-addon">@example.com</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon">$</span>
                                    <div class="form-line">
                                        <input type="text" class="form-control">
                                    </div>
                                    <span class="input-group-addon">.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Input Group -->
        <div class="row clearfix">
            <!-- Spinners -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Spinner</strong>
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
                        <div class="row clearfix">
                            <div class="col-md-6">
                                <div class="input-group spinner" data-trigger="spinner">
                                    <div class="form-line">
                                        <input type="text" class="form-control text-center" value="1"
                                               data-rule="quantity">
                                    </div>
                                    <span class="input-group-addon">
                                            <a href="javascript:;" class="spin-up" data-spin="up">
                                                <i class="material-icons">keyboard_arrow_up</i>
                                            </a>
                                            <a href="javascript:;" class="spin-down" data-spin="down">
                                                <i class="material-icons">keyboard_arrow_down</i>
                                            </a>
                                        </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group spinner" data-trigger="spinner">
                                    <div class="form-line">
                                        <input type="text" class="form-control text-center" value="1"
                                               data-rule="currency">
                                    </div>
                                    <span class="input-group-addon">
                                            <a href="javascript:;" class="spin-up" data-spin="up">
                                                <i class="material-icons">keyboard_arrow_up</i>
                                            </a>
                                            <a href="javascript:;" class="spin-down" data-spin="down">
                                                <i class="material-icons">keyboard_arrow_down</i>
                                            </a>
                                        </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Spinners -->
            <!-- Tags Input -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Tags</strong> Input</h2>
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
                        <div class="form-group demo-tagsinput-area">
                            <div class="form-line">
                                <input type="text" class="form-control" data-role="tagsinput"
                                       value="Amsterdam,Washington,Sydney,Beijing,Cairo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Tags Input -->
        </div>
        <!-- Advanced Select -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Materialize</strong> Select</h2>
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
                            <div class="col-md-3">
                                <div class="input-field col s12">
                                    <select>
                                        <option value="" disabled selected>Choose your option</option>
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                    </select>
                                    <label>Materialize Select</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="input-field col s12">
                                    <select>
                                        <optgroup label="team 1">
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                        </optgroup>
                                        <optgroup label="team 2">
                                            <option value="3">Option 3</option>
                                            <option value="4">Option 4</option>
                                        </optgroup>
                                    </select>
                                    <label>Optgroups</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="input-field col s12">
                                    <select multiple>
                                        <option value="" disabled selected>Choose your option</option>
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                    </select>
                                    <label>Materialize Multiple Select</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="input-field col s12">
                                    <select class="icons">
                                        <option value="" disabled selected>Choose your option</option>
                                        <option value="" data-icon="../../assets/images/user/user1.jpg">example 1
                                        </option>
                                        <option value="" data-icon="../../assets/images/user/user2.jpg">example 2
                                        </option>
                                        <option value="" data-icon="../../assets/images/user/user3.jpg">example 3
                                        </option>
                                    </select>
                                    <label>Images in select</label>
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
                            <strong>Select2</strong> Select Item</h2>
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
                            <div class="col-md-3">
                                <p>
                                    <b>Basic</b>
                                </p>
                                <div class="form-group default-select select2Style">
                                    <select class="form-control select2" data-placeholder="Select">
                                        <option></option>
                                        <option>India</option>
                                        <option>Australia</option>
                                        <option>USA</option>
                                        <option>Poland</option>
                                        <option>Afghanistan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <p>
                                    <b>With OptGroups</b>
                                </p>
                                <div class="form-group default-select select2Style">
                                    <select class="form-control select2" data-placeholder="Select">
                                        <option></option>
                                        <optgroup label="Europe">
                                            <option>Poland</option>
                                            <option>Ireland</option>
                                            <option>Kosovo</option>
                                        </optgroup>
                                        <optgroup label="Asia">
                                            <option>India</option>
                                            <option>Sri Lanka</option>
                                            <option>Afghanistan</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <p>
                                    <b>Multi Select</b>
                                </p>
                                <div class="form-group default-select select2Style">
                                    <select class="form-control select2" multiple="" data-placeholder="Select">
                                        <option>India</option>
                                        <option>Australia</option>
                                        <option>USA</option>
                                        <option>Poland</option>
                                        <option>Afghanistan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <p>
                                    <b>Multi Select With Limit</b>
                                </p>
                                <div class="form-group default-select select2Style">
                                    <select class="select2 form-control" multiple="multiple"
                                            id="select2-max-length">
                                        <optgroup label="Europe">
                                            <option>Poland</option>
                                            <option>Ireland</option>
                                            <option>Kosovo</option>
                                        </optgroup>
                                        <optgroup label="Asia">
                                            <option>India</option>
                                            <option>Sri Lanka</option>
                                            <option>Afghanistan</option>
                                        </optgroup>
                                        <optgroup label="Africa">
                                            <option>Algeria</option>
                                            <option>Mauritania</option>
                                            <option>Zimbabwe</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-3">
                                <p>
                                    <b>Hiding Search Element</b>
                                </p>
                                <div class="form-group default-select select2Style">
                                    <select class="form-control" id="select2-search-hide">
                                        <optgroup label="Europe">
                                            <option>Poland</option>
                                            <option>Ireland</option>
                                            <option>Kosovo</option>
                                        </optgroup>
                                        <optgroup label="Asia">
                                            <option>India</option>
                                            <option>Sri Lanka</option>
                                            <option>Afghanistan</option>
                                        </optgroup>
                                        <optgroup label="Africa">
                                            <option>Algeria</option>
                                            <option>Mauritania</option>
                                            <option>Zimbabwe</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <p>
                                    <b>RTL support with multiSelect</b>
                                </p>
                                <div class="form-group default-select select2Style">
                                    <select class="form-control" id="select2-rtl-multiple" multiple="multiple">
                                        <optgroup label="Europe">
                                            <option>Poland</option>
                                            <option>Ireland</option>
                                            <option>Kosovo</option>
                                        </optgroup>
                                        <optgroup label="Asia">
                                            <option>India</option>
                                            <option>Sri Lanka</option>
                                            <option>Afghanistan</option>
                                        </optgroup>
                                        <optgroup label="Africa">
                                            <option>Algeria</option>
                                            <option>Mauritania</option>
                                            <option>Zimbabwe</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <p>
                                    <b>selected menu</b>
                                </p>
                                <div class="form-group default-select select2Style">
                                    <select class="form-control select2" data-placeholder="Select">
                                        <option></option>
                                        <option>India</option>
                                        <option selected>Sri Lanka</option>
                                        <option>Afghanistan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <p>
                                    <b>Disabled Select2</b>
                                </p>
                                <div class="form-group default-select select2Style">
                                    <select class="select2 form-control" disabled>
                                        <optgroup label="Europe">
                                            <option>Poland</option>
                                            <option>Ireland</option>
                                            <option>Kosovo</option>
                                        </optgroup>
                                        <optgroup label="Asia">
                                            <option>India</option>
                                            <option>Sri Lanka</option>
                                            <option>Afghanistan</option>
                                        </optgroup>
                                        <optgroup label="Africa">
                                            <option>Algeria</option>
                                            <option>Mauritania</option>
                                            <option>Zimbabwe</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Advanced Select -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Custom</strong> Select</h2>
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
                            <div class="col-md-3">
                                <p>
                                    <b>Basic</b>
                                </p>
                                <div class="form-group default-select">
                                    <select class="form-control ">
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                        <option>Option 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <p>
                                    <b>With OptGroups</b>
                                </p>
                                <div class="form-group default-select">
                                    <select class="form-control">
                                        <optgroup label="Basic">
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                            <option>Option 4</option>
                                            <option>Option 5</option>
                                        </optgroup>
                                        <optgroup label="Advance">
                                            <option>Option 6</option>
                                            <option>Option 7</option>
                                            <option>Option 8</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection