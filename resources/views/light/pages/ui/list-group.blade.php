@extends('light.layouts.app3')
@section('title')
    List Group - {{config('app.dashboard')}}
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">List Group</h4>
                        </li>
                        <li class="breadcrumb-item bcrumb-1">
                            <a href="../../index-2.html">
                                <i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item bcrumb-2">
                            <a href="#" onClick="return false;">UI</a>
                        </li>
                        <li class="breadcrumb-item active">List Group</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <!-- Basic Examples -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Basic</strong> Examples</h2>
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
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                            <li class="list-group-item">Porta ac consectetur ac</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
            <!-- Badges -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Badges</strong>
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
                            <li class="list-group-item">Cras justo odio
                                <span class="badge bg-pink">14 new</span>
                            </li>
                            <li class="list-group-item">Dapibus ac facilisis in
                                <span class="badge bg-cyan">99 read</span>
                            </li>
                            <li class="list-group-item">Morbi leo risus
                                <span class="badge bg-teal">99+</span>
                            </li>
                            <li class="list-group-item">Porta ac consectetur ac
                                <span class="badge bg-orange">21</span>
                            </li>
                            <li class="list-group-item">Vestibulum at eros
                                <span class="badge bg-purple">18</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #END# Badges -->
        </div>
        <div class="row clearfix">
            <!-- Linked Items -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Linked</strong> Items</h2>
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
                            <a href="#" onClick="return false;" class="list-group-item active">
                                Cras justo odio
                            </a>
                            <a href="#" onClick="return false;" class="list-group-item">Dapibus ac facilisis in</a>
                            <a href="#" onClick="return false;" class="list-group-item">Morbi leo risus</a>
                            <a href="#" onClick="return false;" class="list-group-item">Porta ac consectetur ac</a>
                            <a href="#" onClick="return false;" class="list-group-item">Vestibulum at eros</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Linked Items -->
            <!-- Button Items -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Button</strong> Items</h2>
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
                            <button type="button" class="list-group-item">Cras justo odio</button>
                            <button type="button" class="list-group-item">Dapibus ac facilisis in</button>
                            <button type="button" class="list-group-item">Morbi leo risus</button>
                            <button type="button" class="list-group-item">Porta ac consectetur ac</button>
                            <button type="button" class="list-group-item">Vestibulum at eros</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Button Items -->
        </div>
        <!-- Disabled Items -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Disabled</strong> Items</h2>
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
                            <a href="#" onClick="return false;" class="list-group-item disabled">
                                Cras justo odio
                            </a>
                            <a href="#" onClick="return false;" class="list-group-item">Dapibus ac facilisis in</a>
                            <a href="#" onClick="return false;" class="list-group-item">Morbi leo risus</a>
                            <a href="#" onClick="return false;" class="list-group-item">Porta ac consectetur ac</a>
                            <a href="#" onClick="return false;" class="list-group-item">Vestibulum at eros</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Disabled Items -->
        <div class="row clearfix">
            <!-- Contextal Classes -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Contextual</strong> Classes</h2>
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
                            <li class="list-group-item list-group-item-success">Dapibus ac facilisis in</li>
                            <li class="list-group-item list-group-item-info">Cras sit amet nibh libero</li>
                            <li class="list-group-item list-group-item-warning">Porta ac consectetur ac</li>
                            <li class="list-group-item list-group-item-danger">Vestibulum at eros</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #END# Contextal Classes -->
            <!-- Contextual Classes With Linked Items -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Contextual</strong> Classes With Linked Items</h2>
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
                            <a href="#" onClick="return false;"
                               class="list-group-item list-group-item-success">Dapibus
                                ac facilisis in</a>
                            <a href="#" onClick="return false;" class="list-group-item list-group-item-info">Cras
                                sit
                                amet nibh libero</a>
                            <a href="#" onClick="return false;"
                               class="list-group-item list-group-item-warning">Porta ac
                                consectetur ac</a>
                            <a href="#" onClick="return false;"
                               class="list-group-item list-group-item-danger">Vestibulum
                                at eros</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Contextual Classes With Linked Items -->
        </div>
        <div class="row clearfix">
            <!-- Colorful Items With Material Design Colors -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Colorful</strong> Items With Material Design Colors</h2>
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
                            <li class="list-group-item list-group-bg-pink">Dapibus ac facilisis in</li>
                            <li class="list-group-item list-group-bg-cyan">Cras sit amet nibh libero</li>
                            <li class="list-group-item list-group-bg-teal">Porta ac consectetur ac</li>
                            <li class="list-group-item list-group-bg-orange">Vestibulum at eros</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #END# Colorful Items With Material Design Colors -->
            <!-- Custom Content -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Custom</strong> Content</h2>
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
                            <a href="#" onClick="return false;" class="list-group-item list-group-bg-pink">Dapibus
                                ac
                                facilisis in</a>
                            <a href="#" onClick="return false;" class="list-group-item list-group-bg-cyan">Cras sit
                                amet
                                nibh libero</a>
                            <a href="#" onClick="return false;" class="list-group-item list-group-bg-teal">Porta ac
                                consectetur ac</a>
                            <a href="#" onClick="return false;"
                               class="list-group-item list-group-bg-orange">Vestibulum
                                at eros</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Custom Content -->
        </div>
        <!-- Contextual Classes With Linked Items -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Contextual</strong> Classes With Linked Items</h2>
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
                            <a href="#" onClick="return false;" class="list-group-item active">
                                <h4 class="list-group-item-heading">List group item heading</h4>
                                <p class="list-group-item-text">
                                    Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit
                                    mediocritatem an. Pri ut tation electram moderatius.
                                    Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent
                                    aliquid
                                    pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere
                                    gubergren
                                    sadipscing mel.
                                </p>
                            </a>
                            <a href="#" onClick="return false;" class="list-group-item">
                                <h4 class="list-group-item-heading">List group item heading</h4>
                                <p class="list-group-item-text">
                                    Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit
                                    mediocritatem an. Pri ut tation electram moderatius.
                                    Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent
                                    aliquid
                                    pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere
                                    gubergren
                                    sadipscing mel.
                                </p>
                            </a>
                            <a href="#" onClick="return false;" class="list-group-item">
                                <h4 class="list-group-item-heading">List group item heading</h4>
                                <p class="list-group-item-text">
                                    Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit
                                    mediocritatem an. Pri ut tation electram moderatius.
                                    Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent
                                    aliquid
                                    pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere
                                    gubergren
                                    sadipscing mel.
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Contextual Classes With Linked Items -->
    </div>
</section>
@endsection

