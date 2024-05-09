@extends('light.layouts.app3')
@section('title')
    Portfolio - {{config('app.dashboard')}}
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">Portfolio</h4>
                        </li>
                        <li class="breadcrumb-item bcrumb-1">
                            <a href="../../index-2.html">
                                <i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item bcrumb-2">
                            <a href="#" onClick="return false;">Apps</a>
                        </li>
                        <li class="breadcrumb-item active">Portfolio</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="body">
                        <div class="bootstrap snippet">
                            <section id="portfolio" class="gray-bg padding-top-bottom">
                                <!--==== Portfolio Filters ====-->
                                <div class="categories">
                                    <ul>
                                        <li class="active">
                                            <a href="#" data-filter="*">All Categories</a>
                                        </li>
                                        <li>
                                            <a href="#" data-filter=".web-design">Web Design</a>
                                        </li>
                                        <li>
                                            <a href="#" data-filter=".apps">Apps</a>
                                        </li>
                                        <li>
                                            <a href="#" data-filter=".psd">PSD</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- ======= Portfolio items ===-->
                                <div class="projects-container scrollimation in">
                                    <div class="row">
                                        <article class="col-md-4 col-sm-6 portfolio-item web-design apps psd">
                                            <div class="portfolio-thumb in">
                                                <a href="#" class="main-link">
                                                    <img class="img-responsive img-center"
                                                         src="../../assets/images/posts/post4.jpg" alt="">
                                                    <span class="project-title">Title 1</span>
                                                    <span class="overlay-mask"></span>
                                                </a>
                                                <a class="enlarge cboxElement" href="#" title="Bills Project"><i
                                                            class="fa fa-expand fa-fw"></i></a>
                                                <a class="link" href="#"><i class="fa fa-eye fa-fw"></i></a>
                                            </div>
                                        </article>
                                        <article class="col-md-4 col-sm-6 portfolio-item apps">
                                            <div class="portfolio-thumb in">
                                                <a href="#" class="main-link">
                                                    <img class="img-responsive img-center"
                                                         src="../../assets/images/posts/post5.jpg" alt="">
                                                    <span class="project-title">Title 2</span>
                                                    <span class="overlay-mask"></span>
                                                </a>
                                                <a class="link centered" href="#"><i class="fa fa-eye fa-fw"></i></a>
                                            </div>
                                        </article>
                                        <article class="col-md-4 col-sm-6 portfolio-item web-design psd">
                                            <div class="portfolio-thumb in">
                                                <a href="#" class="main-link">
                                                    <img class="img-responsive img-center"
                                                         src="../../assets/images/posts/post6.jpg" alt="">
                                                    <span class="project-title">Title 3</span>
                                                    <span class="overlay-mask"></span>
                                                </a>
                                                <a class="enlarge centered cboxElement" href="#"
                                                   title="Get Colored"><i class="fa fa-expand fa-fw"></i></a>
                                            </div>
                                        </article>
                                        <article class="col-md-4 col-sm-6 portfolio-item apps">
                                            <div class="portfolio-thumb in">
                                                <a href="#" class="main-link">
                                                    <img class="img-responsive img-center"
                                                         src="../../assets/images/posts/post7.jpg" alt="">
                                                    <span class="project-title">Title 4</span>
                                                    <span class="overlay-mask"></span>
                                                </a>
                                                <a class="enlarge cboxElement" href="#" title="Holiday Selector"><i
                                                            class="fa fa-expand fa-fw"></i></a>
                                                <a class="link" href="#"><i class="fa fa-eye fa-fw"></i></a>
                                            </div>
                                        </article>
                                        <article class="col-md-4 col-sm-6 portfolio-item web-design psd">
                                            <div class="portfolio-thumb in">
                                                <a href="#" class="main-link">
                                                    <img class="img-responsive img-center"
                                                         src="../../assets/images/posts/post8.jpg" alt="">
                                                    <span class="project-title">Title 5</span>
                                                    <span class="overlay-mask"></span>
                                                </a>
                                                <a class="enlarge cboxElement" href="#" title="Scavenger Hunt"><i
                                                            class="fa fa-expand fa-fw"></i></a>
                                                <a class="link" href="#"><i class="fa fa-eye fa-fw"></i></a>
                                            </div>
                                        </article>
                                        <article class="col-md-4 col-sm-6 portfolio-item web-design apps">
                                            <div class="portfolio-thumb in">
                                                <a href="#" class="main-link">
                                                    <img class="img-responsive img-center"
                                                         src="../../assets/images/posts/post9.jpg" alt="">
                                                    <span class="project-title">Title 6</span>
                                                    <span class="overlay-mask"></span>
                                                </a>
                                                <a class="enlarge cboxElement" href="#" title="Sonor"><i
                                                            class="fa fa-expand fa-fw"></i></a>
                                                <a class="link" href="#"><i class="fa fa-eye fa-fw"></i></a>
                                            </div>
                                        </article>
                                        <article class="col-md-4 col-sm-6 portfolio-item web-design apps psd">
                                            <div class="portfolio-thumb in">
                                                <a href="#" class="main-link">
                                                    <img class="img-responsive img-center"
                                                         src="../../assets/images/posts/post11.jpg" alt="">
                                                    <span class="project-title">Title 7</span>
                                                    <span class="overlay-mask"></span>
                                                </a>
                                                <a class="enlarge cboxElement" href="#" title="Bills Project"><i
                                                            class="fa fa-expand fa-fw"></i></a>
                                                <a class="link" href="#"><i class="fa fa-eye fa-fw"></i></a>
                                            </div>
                                        </article>
                                        <article class="col-md-4 col-sm-6 portfolio-item apps">
                                            <div class="portfolio-thumb in">
                                                <a href="#" class="main-link">
                                                    <img class="img-responsive img-center"
                                                         src="../../assets/images/posts/post12.jpg" alt="">
                                                    <span class="project-title">Title 8</span>
                                                    <span class="overlay-mask"></span>
                                                </a>
                                                <a class="link centered" href="#"><i class="fa fa-eye fa-fw"></i></a>
                                            </div>
                                        </article>
                                        <article class="col-md-4 col-sm-6 portfolio-item web-design psd">
                                            <div class="portfolio-thumb in">
                                                <a href="#" class="main-link">
                                                    <img class="img-responsive img-center"
                                                         src="../../assets/images/posts/post13.jpg" alt="">
                                                    <span class="project-title">Title 9</span>
                                                    <span class="overlay-mask"></span>
                                                </a>
                                                <a class="enlarge centered cboxElement" href="#"
                                                   title="Get Colored"><i class="fa fa-expand fa-fw"></i></a>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Browser Usage -->
        </div>
    </div>
</section>
@endsection