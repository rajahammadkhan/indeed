@extends('light.layouts.app3')
@section('title')
    Timeline - {{config('app.dashboard')}}
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">Timeline</h4>
                        </li>
                        <li class="breadcrumb-item bcrumb-1">
                            <a href="../../index-2.html">
                                <i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item bcrumb-2">
                            <a href="#" onClick="return false;">Extra</a>
                        </li>
                        <li class="breadcrumb-item active">Timeline</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="header">
                    <h2>
                        <strong>Timeline</strong>
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
                    <section id="cd-timeline" class="cd-container">
                        <div class="cd-timeline-block">
                            <div class="cd-timeline-img cd-picture">
                                <img src="../../assets/images/user/user1.jpg" alt="User">
                            </div>
                            <!-- cd-timeline-img -->
                            <div class="cd-timeline-content">
                                <h2 class="timelineLabelColor">
                                    <strong>John Doe</strong> posted a status update</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum
                                    provident
                                    rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde?</p>
                                <a href="#0" class="cd-read-more">Read more</a>
                                <span class="cd-date">Jan 14</span>
                            </div>
                            <!-- cd-timeline-content -->
                        </div>
                        <!-- cd-timeline-block -->
                        <div class="cd-timeline-block">
                            <div class="cd-timeline-img cd-movie">
                                <img src="../../assets/images/user/user2.jpg" alt="User">
                            </div>
                            <!-- cd-timeline-img -->
                            <div class="cd-timeline-content">
                                <h2 class="timelineLabelColor">
                                    <strong>New Message</strong> From Priyanka</h2>
                                <p>Hiii... Please share your location.</p>
                            </div>
                            <!-- cd-timeline-content -->
                        </div>
                        <!-- cd-timeline-block -->
                        <div class="cd-timeline-block">
                            <div class="cd-timeline-img cd-picture">
                                <img src="../../assets/images/user/user3.jpg" alt="User">
                            </div>
                            <!-- cd-timeline-img -->
                            <div class="cd-timeline-content">
                                <h2 class="timelineLabelColor">
                                    <strong>Mark Clerk</strong> share location</h2>
                                <div class="col-lg-12">
                                    <div class="map m-t-10">
                                        <iframe
                                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.2798893698!2d-74.25986762659859!3d40.697670067978756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1520161357422"></iframe>
                                    </div>
                                </div>
                                <span class="cd-date">Jan 14</span>
                            </div>
                            <!-- cd-timeline-content -->
                        </div>
                        <!-- cd-timeline-block -->
                        <div class="cd-timeline-block">
                            <div class="cd-timeline-img cd-location">
                                <img src="../../assets/images/user/user4.jpg" alt="User">
                            </div>
                            <!-- cd-timeline-img -->
                            <div class="cd-timeline-content">
                                <h2 class="timelineLabelColor">
                                    <strong>Shela James</strong> added 3 photos</h2>
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-6">
                                        <a href="#" onClick="return false;">
                                            <img src="../../assets/images/image-gallery/3.jpg" alt=""
                                                 class="img-fluid img-thumbnail m-t-30">
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-6">
                                        <a href="#" onClick="return false;">
                                            <img src="../../assets/images/image-gallery/4.jpg" alt=""
                                                 class="img-fluid img-thumbnail m-t-30">
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-6">
                                        <a href="#" onClick="return false;">
                                            <img src="../../assets/images/image-gallery/5.jpg" alt=""
                                                 class="img-fluid img-thumbnail m-t-30">
                                        </a>
                                    </div>
                                </div>
                                <span class="cd-date">Feb 14</span>
                            </div>
                            <!-- cd-timeline-content -->
                        </div>
                        <!-- cd-timeline-block -->
                        <div class="cd-timeline-block">
                            <div class="cd-timeline-img cd-location">
                                <img src="../../assets/images/user/user5.jpg" alt="User">
                            </div>
                            <!-- cd-timeline-img -->
                            <div class="cd-timeline-content">
                                <h2 class="timelineLabelColor">
                                    <strong>Jayna Patil</strong> commented on photos</h2>
                                <p>Nice Click !!!</p>
                                <span class="cd-date">Feb 18</span>
                            </div>
                            <!-- cd-timeline-content -->
                        </div>
                        <!-- cd-timeline-block -->
                        <div class="cd-timeline-block">
                            <div class="cd-timeline-img cd-picture">
                                <img src="../../assets/images/user/user6.jpg" alt="User">
                            </div>
                            <!-- cd-timeline-img -->
                            <div class="cd-timeline-content">
                                <h2 class="timelineLabelColor">
                                    <strong>John Doe</strong> posted a status update</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum
                                    provident
                                    rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde?</p>
                                <a href="#0" class="cd-read-more">Read more</a>
                                <span class="cd-date">Jan 14</span>
                            </div>
                            <!-- cd-timeline-content -->
                        </div>
                        <!-- cd-timeline-block -->
                        <div class="cd-timeline-block">
                            <div class="cd-timeline-img cd-movie">
                                <img src="../../assets/images/user/user7.jpg" alt="User">
                            </div>
                            <!-- cd-timeline-img -->
                            <div class="cd-timeline-content">
                                <h2 class="timelineLabelColor">
                                    <strong>Mark Clerk</strong> share location</h2>
                                <div class="col-lg-12">
                                    <div class="map m-t-10">
                                        <iframe
                                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.2798893698!2d-74.25986762659859!3d40.697670067978756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1520161357422"></iframe>
                                    </div>
                                </div>
                                <span class="cd-date">Jan 18</span>
                            </div>
                            <!-- cd-timeline-content -->
                        </div>
                        <!-- cd-timeline-block -->
                        <div class="cd-timeline-block">
                            <div class="cd-timeline-img cd-picture">
                                <img src="../../assets/images/user/user8.jpg" alt="User">
                            </div>
                            <!-- cd-timeline-img -->
                            <div class="cd-timeline-content">
                                <h2 class="timelineLabelColor">
                                    <strong>John Doe</strong> posted a status update</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum
                                    provident
                                    rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde?</p>
                                <a href="#0" class="cd-read-more">Read more</a>
                                <span class="cd-date">Jan 24</span>
                            </div>
                            <!-- cd-timeline-content -->
                        </div>
                        <!-- cd-timeline-block -->
                        <div class="cd-timeline-block">
                            <div class="cd-timeline-img cd-location">
                                <img src="../../assets/images/user/user9.jpg" alt="User">
                            </div>
                            <!-- cd-timeline-img -->
                            <div class="cd-timeline-content">
                                <h2 class="timelineLabelColor">
                                    <strong>Shela James</strong> added 3 photos</h2>
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-6">
                                        <a href="#" onClick="return false;">
                                            <img src="../../assets/images/image-gallery/3.jpg" alt=""
                                                 class="img-fluid img-thumbnail m-t-30">
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-6">
                                        <a href="#" onClick="return false;">
                                            <img src="../../assets/images/image-gallery/4.jpg" alt=""
                                                 class="img-fluid img-thumbnail m-t-30">
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-6">
                                        <a href="#" onClick="return false;">
                                            <img src="../../assets/images/image-gallery/5.jpg" alt=""
                                                 class="img-fluid img-thumbnail m-t-30">
                                        </a>
                                    </div>
                                </div>
                                <span class="cd-date">Feb 14</span>
                            </div>
                            <!-- cd-timeline-content -->
                        </div>
                        <!-- cd-timeline-block -->
                    </section>
                    <!-- cd-timeline -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection