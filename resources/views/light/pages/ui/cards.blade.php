@extends('light.layouts.app3')
@section('title')
    Cards - {{config('app.dashboard')}}
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">Cards</h4>
                        </li>
                        <li class="breadcrumb-item bcrumb-1">
                            <a href="../../index-2.html">
                                <i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item bcrumb-2">
                            <a href="#" onClick="return false;">UI</a>
                        </li>
                        <li class="breadcrumb-item active">Cards</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Basic Card -->
        <div class="row clearfix">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Basic Card Title
                            <small>Description text here...</small>
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
                        Quis pharetra a pharetra fames blandit. Risus faucibus velit Risus imperdiet mattis neque
                        volutpat, etiam lacinia netus dictum
                        magnis per facilisi sociosqu. Volutpat. Ridiculus nostra.
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Basic Card Title
                            <small>Description text here...</small>
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li>
                                <a href="#" onClick="return false;">
                                    <i class="material-icons">mic</i>
                                </a>
                            </li>
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
                        Quis pharetra a pharetra fames blandit. Risus faucibus velit Risus imperdiet mattis neque
                        volutpat, etiam lacinia netus dictum
                        magnis per facilisi sociosqu. Volutpat. Ridiculus nostra.
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Basic Card Title
                            <small>Description text here...</small>
                        </h2>
                        <ul class="header-dropdown m-r-0">
                            <li>
                                <a href="#" onClick="return false;">
                                    <i class="material-icons">info_outline</i>
                                </a>
                            </li>
                            <li>
                                <a href="#" onClick="return false;">
                                    <i class="material-icons">help_outline</i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        Quis pharetra a pharetra fames blandit. Risus faucibus velit Risus imperdiet mattis neque
                        volutpat, etiam lacinia netus dictum
                        magnis per facilisi sociosqu. Volutpat. Ridiculus nostra.
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Card -->
        <!-- Basic Card - With Colored -->
        <div class="row clearfix">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="header bg-red">
                        <h2>
                            Red - Title
                            <small>Description text here...</small>
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
                        Quis pharetra a pharetra fames blandit. Risus faucibus velit Risus imperdiet mattis neque
                        volutpat, etiam lacinia netus dictum
                        magnis per facilisi sociosqu. Volutpat. Ridiculus nostra.
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="header bg-cyan">
                        <h2>
                            Cyan - Title
                            <small>Description text here...</small>
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li>
                                <a href="#" onClick="return false;">
                                    <i class="material-icons">mic</i>
                                </a>
                            </li>
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
                        Quis pharetra a pharetra fames blandit. Risus faucibus velit Risus imperdiet mattis neque
                        volutpat, etiam lacinia netus dictum
                        magnis per facilisi sociosqu. Volutpat. Ridiculus nostra.
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="header bg-green">
                        <h2>
                            Green - Title
                            <small>Description text here...</small>
                        </h2>
                        <ul class="header-dropdown m-r-0">
                            <li>
                                <a href="#" onClick="return false;">
                                    <i class="material-icons">info_outline</i>
                                </a>
                            </li>
                            <li>
                                <a href="#" onClick="return false;">
                                    <i class="material-icons">help_outline</i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        Quis pharetra a pharetra fames blandit. Risus faucibus velit Risus imperdiet mattis neque
                        volutpat, etiam lacinia netus dictum
                        magnis per facilisi sociosqu. Volutpat. Ridiculus nostra.
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Card - With Colored -->
        <!-- Basic Card - With Loading -->
        <div class="block-header">
            <h2>
                Card With Loading
            </h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Basic Card Title
                            <small>Description text here...</small>
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li>
                                <a href="#" onClick="return false;" data-toggle="cardloading"
                                   data-loading-effect="timer">
                                    <i class="material-icons">loop</i>
                                </a>
                            </li>
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
                        Quis pharetra a pharetra fames blandit. Risus faucibus velit Risus imperdiet mattis neque
                        volutpat, etiam lacinia netus dictum
                        magnis per facilisi sociosqu. Volutpat. Ridiculus nostra.
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Basic Card Title
                            <small>Description text here...</small>
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li>
                                <a href="#" onClick="return false;" data-toggle="cardloading"
                                   data-loading-effect="ios">
                                    <i class="material-icons">loop</i>
                                </a>
                            </li>
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
                        Quis pharetra a pharetra fames blandit. Risus faucibus velit Risus imperdiet mattis neque
                        volutpat, etiam lacinia netus dictum
                        magnis per facilisi sociosqu. Volutpat. Ridiculus nostra.
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Basic Card Title
                            <small>Description text here...</small>
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li>
                                <a href="#" onClick="return false;" data-toggle="cardloading"
                                   data-loading-effect="pulse">
                                    <i class="material-icons">loop</i>
                                </a>
                            </li>
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
                        Quis pharetra a pharetra fames blandit. Risus faucibus velit Risus imperdiet mattis neque
                        volutpat, etiam lacinia netus dictum
                        magnis per facilisi sociosqu. Volutpat. Ridiculus nostra.
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Card - With Loading -->
        <!-- Colored Card - With Loading -->
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="header bg-light-blue">
                        <h2>
                            Light Blue - Title
                            <small>Description text here...</small>
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li>
                                <a href="#" onClick="return false;" data-toggle="cardloading"
                                   data-loading-effect="timer" data-loading-color="lightBlue">
                                    <i class="material-icons">loop</i>
                                </a>
                            </li>
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
                        Quis pharetra a pharetra fames blandit. Risus faucibus velit Risus imperdiet mattis neque
                        volutpat, etiam lacinia netus dictum
                        magnis per facilisi sociosqu. Volutpat. Ridiculus nostra.
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="header bg-light-green">
                        <h2>
                            Light Green - Title
                            <small>Description text here...</small>
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li>
                                <a href="#" onClick="return false;" data-toggle="cardloading"
                                   data-loading-effect="rotation" data-loading-color="lightGreen">
                                    <i class="material-icons">loop</i>
                                </a>
                            </li>
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
                        Quis pharetra a pharetra fames blandit. Risus faucibus velit Risus imperdiet mattis neque
                        volutpat, etiam lacinia netus dictum
                        magnis per facilisi sociosqu. Volutpat. Ridiculus nostra.
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="header bg-amber">
                        <h2>
                            Amber - Title
                            <small>Description text here...</small>
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li>
                                <a href="#" onClick="return false;" data-toggle="cardloading"
                                   data-loading-effect="pulse" data-loading-color="amber">
                                    <i class="material-icons">loop</i>
                                </a>
                            </li>
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
                        Quis pharetra a pharetra fames blandit. Risus faucibus velit Risus imperdiet mattis neque
                        volutpat, etiam lacinia netus dictum
                        magnis per facilisi sociosqu. Volutpat. Ridiculus nostra.
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Colored Card - With Loading -->
        <div class="block-header">
            <h2>No Header Cards</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="body bg-red">
                        Quis pharetra a pharetra fames blandit. Risus faucibus velit Risus imperdiet mattis neque
                        volutpat, etiam lacinia netus dictum
                        magnis per facilisi sociosqu. Volutpat. Ridiculus nostra.
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="body bg-cyan">
                        Quis pharetra a pharetra fames blandit. Risus faucibus velit Risus imperdiet mattis neque
                        volutpat, etiam lacinia netus dictum
                        magnis per facilisi sociosqu. Volutpat. Ridiculus nostra.
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="body bg-green">
                        Quis pharetra a pharetra fames blandit. Risus faucibus velit Risus imperdiet mattis neque
                        volutpat, etiam lacinia netus dictum
                        magnis per facilisi sociosqu. Volutpat. Ridiculus nostra.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection