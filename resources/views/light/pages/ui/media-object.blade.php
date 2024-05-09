@extends('light.layouts.app3')
@section('title')
    Media Object - {{config('app.dashboard')}}
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">Media Object</h4>
                        </li>
                        <li class="breadcrumb-item bcrumb-1">
                            <a href="../../index-2.html">
                                <i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item bcrumb-2">
                            <a href="#" onClick="return false;">UI</a>
                        </li>
                        <li class="breadcrumb-item active">Media Object</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Default Media -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Default</strong> Media</h2>
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
                        <div class="media">
                            <div class="media-left">
                                <a href="#" onClick="return false;">
                                    <img class="media-object" src="../../assets/images/media.png" alt="" width="64"
                                         height="64">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Media heading</h4> Cras sit amet nibh libero, in gravida
                                nulla. Nulla vel metus scelerisque
                                ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus
                                viverra
                                turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue
                                felis
                                in faucibus.
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="../../assets/images/media.png" alt="" width="64"
                                         height="64">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Media heading</h4> Cras sit amet nibh libero, in gravida
                                nulla. Nulla vel metus scelerisque
                                ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus
                                viverra
                                turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue
                                felis
                                in faucibus.
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object" src="../../assets/images/media.png" alt=""
                                                 width="64" height="64">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Nested media heading</h4> Cras sit amet nibh
                                        libero, in gravida nulla. Nulla
                                        vel metus scelerisque ante sollicitudin commodo. Cras purus odio,
                                        vestibulum
                                        in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
                                        vulputate
                                        fringilla. Donec lacinia congue felis in faucibus.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-body">
                                <h4 class="media-heading">Media heading</h4> Cras sit amet nibh libero, in gravida
                                nulla. Nulla vel metus scelerisque
                                ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus
                                viverra
                                turpis.
                            </div>
                            <div class="media-right">
                                <a href="#">
                                    <img class="media-object" src="../../assets/images/media.png" alt="" width="64"
                                         height="64">
                                </a>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="../../assets/images/media.png" alt="" width="64"
                                         height="64">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Media heading</h4> Cras sit amet nibh libero, in gravida
                                nulla. Nulla vel metus scelerisque
                                ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus
                                viverra
                                turpis.
                            </div>
                            <div class="media-right">
                                <a href="#">
                                    <img class="media-object" src="../../assets/images/media.png" alt="" width="64"
                                         height="64">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Default Media -->
        <!-- Media Alignment -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Media</strong> Alignment</h2>
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
                        <div class="bs-example" data-example-id="media-alignment">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#" onClick="return false;">
                                        <img class="media-object" src="../../assets/images/media.png" alt=""
                                             width="64" height="64">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Top aligned media</h4>
                                    <p>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                                        ante sollicitudin commodo. Cras purus odio, vestibulum
                                        in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
                                        vulputate
                                        fringilla. Donec lacinia congue felis in faucibus.
                                    </p>
                                    <p>
                                        Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo.
                                        Cum sociis natoque penatibus et magnis dis parturient
                                        montes, nascetur ridiculus mus.
                                    </p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left media-middle">
                                    <a href="#" onClick="return false;">
                                        <img class="media-object" src="../../assets/images/media.png" alt=""
                                             width="64" height="64">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Middle aligned media</h4>
                                    <p>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                                        ante sollicitudin commodo. Cras purus odio, vestibulum
                                        in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
                                        vulputate
                                        fringilla. Donec lacinia congue felis in faucibus.
                                    </p>
                                    <p>
                                        Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo.
                                        Cum sociis natoque penatibus et magnis dis parturient
                                        montes, nascetur ridiculus mus.
                                    </p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left media-bottom">
                                    <a href="#" onClick="return false;">
                                        <img class="media-object" src="../../assets/images/media.png" alt=""
                                             width="64" height="64">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Bottom aligned media</h4>
                                    <p>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                                        ante sollicitudin commodo. Cras purus odio, vestibulum
                                        in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
                                        vulputate
                                        fringilla. Donec lacinia congue felis in faucibus.
                                    </p>
                                    <p>
                                        Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo.
                                        Cum sociis natoque penatibus et magnis dis parturient
                                        montes, nascetur ridiculus mus.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Media Alignment -->
    </div>
</section>
@endsection
