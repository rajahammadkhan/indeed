@extends('light.layouts.app3')
@section('title')
    Timeline2 - {{config('app.dashboard')}}
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">Timeline 2</h4>
                        </li>
                        <li class="breadcrumb-item bcrumb-1">
                            <a href="../../index-2.html">
                                <i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item bcrumb-2">
                            <a href="#" onClick="return false;">Extra</a>
                        </li>
                        <li class="breadcrumb-item active">Timeline 2</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="header">
                    <h2>
                        <strong>Timeline 2</strong>
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
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10">
                                <ul class="left-timeline">
                                    <li>
                                        <time class="left-time" datetime="2017-11-04T18:30"><span
                                                    class="hidden">25/12/2017</span>
                                            <span class="large">Now</span></time>
                                        <div class="left-icon"><img src="../../assets/images/user/user1.jpg" alt="">
                                        </div>
                                        <div class="left-label empty"> <span>No Activity</span> </div>
                                    </li>
                                    <li>
                                        <time class="left-time" datetime="2017-11-04T03:45"><span>03:45 AM</span>
                                            <span>Today</span></time>
                                        <div class="left-icon"><img src="../../assets/images/user/user2.jpg" alt="">
                                        </div>
                                        <div class="left-label">
                                            <h2><a href="#" onClick="return false;">John Deo</a> <span>posted a
                                                        status update</span></h2>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                                                commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                                                penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                                Donec quam felis, ultricies nec, pellentesque eu, pretium quis,
                                                sem. Nulla consequat massa quis enim.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <time class="left-time" datetime="2017-11-03T13:22"><span>01:22 PM</span>
                                            <span>Yesterday</span></time>
                                        <div class="left-icon"> <img src="../../assets/images/user/user3.jpg"
                                                                     alt=""></div>
                                        <div class="left-label">
                                            <h2><a href="#" onClick="return false;">Job Meeting</a></h2>
                                            <p>You have a meeting at <strong>Laborator Office</strong> Today.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <time class="left-time" datetime="2017-10-22T12:13"><span>12:13 PM</span>
                                            <span>Two weeks ago</span></time>
                                        <div class="left-icon"><img src="../../assets/images/user/user4.jpg" alt="">
                                        </div>
                                        <div class="left-label">
                                            <h2><a href="#" onClick="return false;">Arlind Nushi</a> <span>checked
                                                        in at</span>
                                                <a href="#" onClick="return false;">New York</a></h2>
                                            <blockquote>
                                                <p class="blockquote blockquote-primary">
                                                    "It is a long established fact that a reader will be distracted
                                                    by the readable content of a page when looking at its layout."
                                                    <br>
                                                    <small>
                                                        - Isabella
                                                    </small>
                                                </p>
                                            </blockquote>
                                            <div class="row clearfix">
                                                <div class="col-lg-12">
                                                    <div class="map m-t-10">
                                                        <iframe
                                                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.91477011208!2d-74.11976308802028!3d40.69740344230033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1508039335245"></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <time class="left-time" datetime="2017-10-22T12:13"><span>12:13 PM</span>
                                            <span>Two weeks ago</span></time>
                                        <div class="left-icon"><img src="../../assets/images/user/user5.jpg" alt="">
                                        </div>
                                        <div class="left-label">
                                            <h2><a href="#" onClick="return false;">Eroll Maxhuni</a>
                                                <span>uploaded</span>
                                                4 <span>new photos to album</span> <a href="#"
                                                                                      onClick="return false;">Summer
                                                    Trip</a></h2>
                                            <blockquote>Pianoforte principles our unaffected not for astonished
                                                travelling are particular.</blockquote>
                                            <div class="row">
                                                <div class="col-lg-3 col-md-6 col-6"><a href="#"
                                                                                        onClick="return false;"><img
                                                                src="../../assets/images/user/usrbig1.jpg" alt=""
                                                                class="img-fluid img-thumbnail m-t-30"></a>
                                                </div>
                                                <div class="col-lg-3 col-md-6 col-6"><a href="#"
                                                                                        onClick="return false;">
                                                        <img src="../../assets/images/user/usrbig5.jpg" alt=""
                                                             class="img-fluid img-thumbnail m-t-30"></a>
                                                </div>
                                                <div class="col-lg-3 col-md-6 col-6"><a href="#"
                                                                                        onClick="return false;">
                                                        <img src="../../assets/images/user/usrbig6.jpg" alt=""
                                                             class="img-fluid img-thumbnail m-t-30">
                                                    </a> </div>
                                                <div class="col-lg-3 col-md-6 col-6"><a href="#"
                                                                                        onClick="return false;">
                                                        <img src="../../assets/images/user/usrbig7.jpg" alt=""
                                                             class="img-fluid img-thumbnail m-t-30">
                                                    </a> </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <time class="left-time" datetime="2017-11-03T13:22"><span>01:22 PM</span>
                                            <span>Two weeks ago</span></time>
                                        <div class="left-icon"> <img src="../../assets/images/user/user6.jpg"
                                                                     alt=""></div>
                                        <div class="left-label">
                                            <h2><a href="#" onClick="return false;">Job Meeting</a></h2>
                                            <p>You have a meeting at <strong>Laborator Office</strong> Today.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <time class="left-time" datetime="2017-10-22T12:13"><span>12:13 PM</span>
                                            <span>Month ago</span></time>
                                        <div class="left-icon"><img src="../../assets/images/user/user7.jpg" alt="">
                                        </div>
                                        <div class="left-label">
                                            <h2><a href="#" onClick="return false;">Arlind Nushi</a> <span>checked
                                                        in at</span>
                                                <a href="#" onClick="return false;">Laborator</a></h2>
                                            <blockquote>Great place, feeling like in home.</blockquote>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection