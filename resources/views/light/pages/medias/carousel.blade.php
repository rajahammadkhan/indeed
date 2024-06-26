@extends('light.layouts.app3')
@section('title')
    Carousel - {{config('app.dashboard')}}
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">Carousel</h4>
                        </li>
                        <li class="breadcrumb-item bcrumb-1">
                            <a href="../../index-2.html">
                                <i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item bcrumb-2">
                            <a href="#" onClick="return false;">Medias</a>
                        </li>
                        <li class="breadcrumb-item active">Carousel</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <!-- Basic Example -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Basic</strong> Example</h2>
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
                        <div class="owl-carousel owl-theme" id="basic_demo">
                            <div class="item">
                                <img src="../../assets/images/image-gallery/1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="../../assets/images/image-gallery/2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="../../assets/images/image-gallery/3.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="../../assets/images/image-gallery/4.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="../../assets/images/image-gallery/5.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="../../assets/images/image-gallery/6.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="../../assets/images/image-gallery/7.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="../../assets/images/image-gallery/8.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Example -->
        </div>
        <div class="row clearfix">
            <!-- Single Slide -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Single</strong> Slide Animation</h2>
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
                        <div class="owl-carousel owl-theme" id="single_slide">
                            <div class="item">
                                <img src="../../assets/images/image-gallery/1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="../../assets/images/image-gallery/2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="../../assets/images/image-gallery/3.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="../../assets/images/image-gallery/4.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="../../assets/images/image-gallery/5.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Single Slide -->
            <!-- Single Slide with autoplay -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Single</strong> Slide Autoplay</h2>
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
                        <div class="owl-carousel owl-theme" id="single_slide_autoplay">
                            <div class="item">
                                <img src="../../assets/images/image-gallery/1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="../../assets/images/image-gallery/2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="../../assets/images/image-gallery/3.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="../../assets/images/image-gallery/4.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="../../assets/images/image-gallery/5.jpg" alt="">
                            </div>
                        </div>
                        <div class="owl-btns">
                            <div class="owl-play play">Play</div>
                            <div class="owl-stop stop">Stop</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Single Slide with autoplay -->
        </div>
        <div class="row clearfix">
            <!-- Center with loop -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Center</strong> With Loop</h2>
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
                        <div class="owl-carousel owl-theme" id="withloop">
                            <div class="item">
                                <img src="../../assets/images/image-gallery/1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="../../assets/images/image-gallery/2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="../../assets/images/image-gallery/3.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="../../assets/images/image-gallery/4.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="../../assets/images/image-gallery/5.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="../../assets/images/image-gallery/6.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="../../assets/images/image-gallery/7.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="../../assets/images/image-gallery/8.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Center with loop -->
        </div>
        <div class="row clearfix">
            <!-- Center without loop -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Center</strong> Without Loop</h2>
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
                        <div class="owl-carousel owl-theme" id="nonloop">
                            <div class="item">
                                <img src="../../assets/images/image-gallery/1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="../../assets/images/image-gallery/2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="../../assets/images/image-gallery/3.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="../../assets/images/image-gallery/4.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="../../assets/images/image-gallery/5.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="../../assets/images/image-gallery/6.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="../../assets/images/image-gallery/7.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="../../assets/images/image-gallery/8.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Center without loop -->
        </div>
    </div>
</section>
@endsection