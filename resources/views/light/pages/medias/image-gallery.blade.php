@extends('light.layouts.app3')
@section('title')
    Image Gallery - {{config('app.dashboard')}}
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">
        <!-- Image Gallery -->
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">Gallery</h4>
                        </li>
                        <li class="breadcrumb-item bcrumb-1">
                            <a href="../../index-2.html">
                                <i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item bcrumb-2">
                            <a href="#" onClick="return false;">Medias</a>
                        </li>
                        <li class="breadcrumb-item active">Gallery</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Gallery</strong>
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
                        <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <a href="../../assets/images/image-gallery/1.jpg" data-sub-html="Demo Description">
                                    <img class="img-responsive thumbnail"
                                         src="../../assets/images/image-gallery/thumb/thumb-1.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <a href="../../assets/images/image-gallery/2.jpg" data-sub-html="Demo Description">
                                    <img class="img-responsive thumbnail"
                                         src="../../assets/images/image-gallery/thumb/thumb-2.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <a href="../../assets/images/image-gallery/3.jpg" data-sub-html="Demo Description">
                                    <img class="img-responsive thumbnail"
                                         src="../../assets/images/image-gallery/thumb/thumb-3.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <a href="../../assets/images/image-gallery/4.jpg" data-sub-html="Demo Description">
                                    <img class="img-responsive thumbnail"
                                         src="../../assets/images/image-gallery/thumb/thumb-4.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <a href="../../assets/images/image-gallery/5.jpg" data-sub-html="Demo Description">
                                    <img class="img-responsive thumbnail"
                                         src="../../assets/images/image-gallery/thumb/thumb-5.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <a href="../../assets/images/image-gallery/6.jpg" data-sub-html="Demo Description">
                                    <img class="img-responsive thumbnail"
                                         src="../../assets/images/image-gallery/thumb/thumb-6.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <a href="../../assets/images/image-gallery/7.jpg" data-sub-html="Demo Description">
                                    <img class="img-responsive thumbnail"
                                         src="../../assets/images/image-gallery/thumb/thumb-7.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <a href="../../assets/images/image-gallery/8.jpg" data-sub-html="Demo Description">
                                    <img class="img-responsive thumbnail"
                                         src="../../assets/images/image-gallery/thumb/thumb-8.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <a href="../../assets/images/image-gallery/9.jpg" data-sub-html="Demo Description">
                                    <img class="img-responsive thumbnail"
                                         src="../../assets/images/image-gallery/thumb/thumb-9.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <a href="../../assets/images/image-gallery/10.jpg" data-sub-html="Demo Description">
                                    <img class="img-responsive thumbnail"
                                         src="../../assets/images/image-gallery/thumb/thumb-10.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <a href="../../assets/images/image-gallery/11.jpg" data-sub-html="Demo Description">
                                    <img class="img-responsive thumbnail"
                                         src="../../assets/images/image-gallery/thumb/thumb-11.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <a href="../../assets/images/image-gallery/12.jpg" data-sub-html="Demo Description">
                                    <img class="img-responsive thumbnail"
                                         src="../../assets/images/image-gallery/thumb/thumb-12.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <a href="../../assets/images/image-gallery/13.jpg" data-sub-html="Demo Description">
                                    <img class="img-responsive thumbnail"
                                         src="../../assets/images/image-gallery/thumb/thumb-13.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <a href="../../assets/images/image-gallery/14.jpg" data-sub-html="Demo Description">
                                    <img class="img-responsive thumbnail"
                                         src="../../assets/images/image-gallery/thumb/thumb-14.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <a href="../../assets/images/image-gallery/15.jpg" data-sub-html="Demo Description">
                                    <img class="img-responsive thumbnail"
                                         src="../../assets/images/image-gallery/thumb/thumb-15.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <a href="../../assets/images/image-gallery/16.jpg" data-sub-html="Demo Description">
                                    <img class="img-responsive thumbnail"
                                         src="../../assets/images/image-gallery/thumb/thumb-16.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <a href="../../assets/images/image-gallery/17.jpg" data-sub-html="Demo Description">
                                    <img class="img-responsive thumbnail"
                                         src="../../assets/images/image-gallery/thumb/thumb-17.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <a href="../../assets/images/image-gallery/18.jpg" data-sub-html="Demo Description">
                                    <img class="img-responsive thumbnail"
                                         src="../../assets/images/image-gallery/thumb/thumb-18.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <a href="../../assets/images/image-gallery/19.jpg" data-sub-html="Demo Description">
                                    <img class="img-responsive thumbnail"
                                         src="../../assets/images/image-gallery/thumb/thumb-19.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <a href="../../assets/images/image-gallery/20.jpg" data-sub-html="Demo Description">
                                    <img class="img-responsive thumbnail"
                                         src="../../assets/images/image-gallery/thumb/thumb-20.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection