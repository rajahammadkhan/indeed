@extends('light.layouts.app3')
@section('title')
    Jquery Knob - {{config('app.dashboard')}}
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">Knob</h4>
                        </li>
                        <li class="breadcrumb-item bcrumb-1">
                            <a href="../../index-2.html">
                                <i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item bcrumb-2">
                            <a href="#" onClick="return false;">Charts</a>
                        </li>
                        <li class="breadcrumb-item active">Knob</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Basic Example -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Basic </strong>Examples</h2>
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
                            <div class="col-md-2">
                                <input type="text" class="dial" value="86" data-width="125" data-height="125"
                                       data-thickness="0.25" data-fgColor="#F44336">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="dial" value="92" data-width="125" data-height="125"
                                       data-thickness="0.25" data-fgColor="#E91E63">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="dial" value="93" data-width="125" data-height="125"
                                       data-thickness="0.25" data-fgColor="#00BCD4">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="dial" value="89" data-width="125" data-height="125"
                                       data-thickness="0.25" data-fgColor="#009688">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="dial" value="91" data-width="125" data-height="125"
                                       data-thickness="0.25" data-fgColor="#FF9800">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="dial" value="93" data-width="125" data-height="125"
                                       data-thickness="0.25" data-fgColor="#9C27B0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Example -->
        <!-- Rounded Corners -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Rounded</strong> Courner</h2>
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
                            <div class="col-md-2">
                                <input type="text" class="dial" data-linecap="round" value="42" data-width="125"
                                       data-height="125" data-thickness="0.25" data-fgColor="#F44336">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="dial" data-linecap="round" value="56" data-width="125"
                                       data-height="125" data-thickness="0.25" data-fgColor="#E91E63">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="dial" data-linecap="round" value="48" data-width="125"
                                       data-height="125" data-thickness="0.25" data-fgColor="#00BCD4">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="dial" data-linecap="round" value="65" data-width="125"
                                       data-height="125" data-thickness="0.25" data-fgColor="#009688">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="dial" data-linecap="round" value="72" data-width="125"
                                       data-height="125" data-thickness="0.25" data-fgColor="#FF9800">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="dial" data-linecap="round" value="18" data-width="125"
                                       data-height="125" data-thickness="0.25" data-fgColor="#9C27B0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Rounded Corners -->
        <!-- Different Sizes -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Different</strong> Sizes</h2>
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
                            <div class="col-md-2">
                                <input type="text" class="dial" value="86" data-width="120" data-height="120"
                                       data-thickness="0.1" data-fgColor="#F44336">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="dial" value="92" data-width="110" data-height="110"
                                       data-thickness="0.32" data-fgColor="#E91E63">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="dial" value="93" data-width="100" data-height="100"
                                       data-thickness="0.50" data-fgColor="#00BCD4">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="dial" value="89" data-width="90" data-height="90"
                                       data-thickness="0.16" data-fgColor="#009688">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="dial" value="91" data-width="80" data-height="80"
                                       data-thickness="0.2" data-fgColor="#FF9800">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="dial" value="93" data-width="70" data-height="70"
                                       data-thickness="0.12" data-fgColor="#9C27B0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Different Sizes -->
        <!-- Different Angles & Offsets -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Different</strong> Angles &amp; Offsets</h2>
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
                            <div class="col-md-2">
                                <input type="text" class="dial" value="35" data-width="125" data-height="125"
                                       data-thickness="0.25" data-angleArc="250" data-angleoffset="-125"
                                       data-fgColor="#F44336">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="dial" value="45" data-width="125" data-height="125"
                                       data-thickness="0.25" data-angleArc="250" data-angleoffset="-305"
                                       data-fgColor="#E91E63">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="dial" value="40" data-width="125" data-height="125"
                                       data-thickness="0.25" data-angleArc="250" data-angleoffset="-35"
                                       data-fgColor="#00BCD4">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="dial" value="36" data-width="125" data-height="125"
                                       data-thickness="0.25" data-angleArc="250" data-angleoffset="145"
                                       data-fgColor="#009688">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="dial" value="43" data-width="125" data-height="125"
                                       data-thickness="0.25" data-angleArc="270" data-angleoffset="-0"
                                       data-fgColor="#FF9800">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="dial" value="52" data-width="125" data-height="125"
                                       data-thickness="0.25" data-angleArc="270" data-angleoffset="90"
                                       data-fgColor="#9C27B0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Different Angles & Offsets -->
        <!-- Readonly -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Read</strong> Only</h2>
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
                            <div class="col-md-2">
                                <input type="text" class="dial" value="42" data-width="125" data-height="125"
                                       data-thickness="0.25" data-fgColor="#F44336" readonly>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="dial" value="56" data-width="125" data-height="125"
                                       data-thickness="0.25" data-fgColor="#E91E63" readonly>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="dial" value="48" data-width="125" data-height="125"
                                       data-thickness="0.25" data-fgColor="#00BCD4" readonly>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="dial" value="65" data-width="125" data-height="125"
                                       data-thickness="0.25" data-fgColor="#009688" readonly>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="dial" value="72" data-width="125" data-height="125"
                                       data-thickness="0.25" data-fgColor="#FF9800" readonly>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="dial" value="18" data-width="125" data-height="125"
                                       data-thickness="0.25" data-fgColor="#9C27B0" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Readonly -->
        <!-- Cursor Style -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Cursor</strong> Mode</h2>
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
                            <div class="col-md-2">
                                <input type="text" class="dial" value="42" data-width="125" data-height="125"
                                       data-thickness="0.25" data-cursor=true data-fgColor="#F44336">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="dial" value="56" data-width="125" data-height="125"
                                       data-thickness="0.25" data-cursor=true data-fgColor="#E91E63">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="dial" value="48" data-width="125" data-height="125"
                                       data-thickness="0.25" data-cursor=true data-fgColor="#00BCD4">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="dial" value="65" data-width="125" data-height="125"
                                       data-thickness="0.25" data-cursor=true data-fgColor="#009688">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="dial" value="72" data-width="125" data-height="125"
                                       data-thickness="0.25" data-cursor=true data-fgColor="#FF9800">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="dial" value="18" data-width="125" data-height="125"
                                       data-thickness="0.25" data-cursor=true data-fgColor="#9C27B0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Cursor Style -->
        <!-- Cursor Style -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Overloaded</strong> Mode</h2>
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
                            <div class="col-md-2">
                                <input type="text" class="knob" value="42" data-width="125" data-height="125"
                                       data-thickness="0.3" data-skin="tron" data-displayPrevious=true
                                       data-angleOffset="180" data-fgColor="#F44336">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="knob" value="88" data-width="125" data-height="125"
                                       data-thickness="0.3" data-skin="tron" data-displayPrevious=true
                                       data-fgColor="#E91E63">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="knob" value="55" data-width="125" data-height="125"
                                       data-thickness="0.2" data-skin="tron" data-displayPrevious=true
                                       data-fgColor="#00BCD4">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="knob" value="72" data-width="125" data-height="125"
                                       data-thickness="0.2" data-skin="tron" data-displayPrevious=true
                                       data-fgColor="#009688">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="knob" value="80" data-width="125" data-height="125"
                                       data-thickness="0.1" data-skin="tron" data-displayPrevious=true
                                       data-fgColor="#FF9800">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="knob" value="88" data-width="125" data-height="125"
                                       data-thickness="0.1" data-skin="tron" data-displayPrevious=true
                                       data-fgColor="#9C27B0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Cursor Style -->
    </div>
</section>
@endsection