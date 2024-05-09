@extends('light.layouts.app3')
@section('title')
    Labels - {{config('app.dashboard')}}
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">Labels</h4>
                        </li>
                        <li class="breadcrumb-item bcrumb-1">
                            <a href="../../index-2.html">
                                <i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item bcrumb-2">
                            <a href="#" onClick="return false;">UI</a>
                        </li>
                        <li class="breadcrumb-item active">Labels</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Labels -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Labels</strong>
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
                        <span class="label label-default">Default</span>
                        <span class="label label-primary">Primary</span>
                        <span class="label label-success">Success</span>
                        <span class="label label-info">Info</span>
                        <span class="label label-warning">Warning</span>
                        <span class="label label-danger">Danger</span>
                        <hr>
                        <h1 class="m-b-20">Example heading
                            <span class="label label-danger">New</span>
                        </h1>
                        <h2 class="m-b-20">Example heading
                            <span class="label label-warning">New</span>
                        </h2>
                        <h3 class="m-b-20">Example heading
                            <span class="label label-info">New</span>
                        </h3>
                        <h4 class="m-b-20">Example heading
                            <span class="label label-success">New</span>
                        </h4>
                        <h5 class="m-b-20">Example heading
                            <span class="label label-primary">New</span>
                        </h5>
                        <h6 class="m-b-20">Example heading
                            <span class="label label-default">New</span>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Labels -->
        <!-- Labels With Material Design Colors -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Labels</strong> With Material Design Colors</h2>
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
                        <span class="label bg-red m-b-10">Red</span>
                        <span class="label bg-pink m-b-10">Pink</span>
                        <span class="label bg-purple m-b-10">Purple</span>
                        <span class="label bg-deep-purple m-b-10">Deep Purple</span>
                        <span class="label bg-indigo m-b-10">Indigo</span>
                        <span class="label bg-blue m-b-10">Blue</span>
                        <span class="label bg-light-blue m-b-10">Light Blue</span>
                        <span class="label bg-cyan m-b-10">Cyan</span>
                        <span class="label bg-teal m-b-10">Teal</span>
                        <span class="label bg-green m-b-10">Green</span>
                        <span class="label bg-light-green m-b-10">Light Green</span>
                        <span class="label bg-lime m-b-10">Lime</span>
                        <span class="label bg-yellow m-b-10">Yellow</span>
                        <span class="label bg-amber m-b-10">Amber</span>
                        <span class="label bg-orange m-b-10">Orange</span>
                        <span class="label bg-deep-orange m-b-10">Deep Orange</span>
                        <span class="label bg-brown m-b-10">Brown</span>
                        <span class="label bg-grey m-b-10">Grey</span>
                        <span class="label bg-blue-grey m-b-10">Blue Grey</span>
                        <span class="label bg-black m-b-10">Black</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Labels With Material Design Colors -->
    </div>
</section>
@endsection
