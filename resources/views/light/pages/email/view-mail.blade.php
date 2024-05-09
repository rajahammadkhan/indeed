@extends('light.layouts.app3')
@section('title')
    View Mail - {{config('app.dashboard')}}
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">View Mail</h4>
                        </li>
                        <li class="breadcrumb-item bcrumb-1">
                            <a href="../../index-2.html">
                                <i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item bcrumb-2">
                            <a href="#" onClick="return false;">Email</a>
                        </li>
                        <li class="breadcrumb-item active">View Mail</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <div class="card">
                    <div class="body">
                        <div id="mail-nav">
                            <button type="button" class="btn btn-success waves-effect m-b-15">COMPOSE</button>
                            <ul class="" id="mail-folders">
                                <li class="active">
                                    <a href="inbox.html" title="Inbox">Inbox
                                        <span class="pull-right badge bg-orange">6</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" title="Sent">Sent</a>
                                </li>
                                <li>
                                    <a href="javascript:;" title="Draft">Draft</a>
                                </li>
                                <li>
                                    <a href="javascript:;" title="Bin">Bin</a>
                                </li>
                                <li>
                                    <a href="javascript:;" title="Important">Important</a>
                                </li>
                                <li>
                                    <a href="javascript:;" title="Starred">Starred</a>
                                </li>
                            </ul>
                            <h5 class="b-b p-10 text-strong">Labels</h5>
                            <ul class="" id="mail-labels">
                                <li>
                                    <a href="javascript:;">
                                        <i class="material-icons col-red">local_offer</i>Family</a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <i class="material-icons col-blue">local_offer</i>Work</a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <i class="material-icons col-orange">local_offer</i>Shop</a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <i class="material-icons col-cyan">local_offer</i>Themeforest</a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <i class="material-icons col-blue-grey">local_offer</i>Google</a>
                                </li>
                            </ul>
                            <h5 class="b-b p-10 text-strong">Online</h5>
                            <ul class="online-user" id="online-offline">
                                <li>
                                    <a href="javascript:;">
                                        <i class="material-icons col-green"
                                           title="Online">brightness_1</i>Sachin</a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <i class="material-icons col-indigo" title="Off Line">brightness_1</i>John
                                        Smith
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <i class="material-icons col-orange" title="Away">brightness_1</i>Askay</a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <i class="material-icons col-indigo"
                                           title="Off Line">brightness_1</i>Dhavan</a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <i class="material-icons col-indigo"
                                           title="Off Line">brightness_1</i>Lee</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                <div class="card">
                    <div class="boxs mail_listing">
                        <div class="inbox-body no-pad">
                            <section class="mail-list">
                                <div class="mail-sender">
                                    <div class="mail-heading">
                                        <h4 class="vew-mail-header">
                                            <b>Hi Dear, How are you?</b>
                                        </h4>
                                    </div>
                                    <hr>
                                    <div class="media">
                                        <a href="#" class="table-img m-r-15">
                                            <img alt="" src="../../assets/images/user/user2.jpg">
                                        </a>
                                        <div class="media-body">
                                            <span class="date pull-right">4:15AM 04 April 2017</span>
                                            <h4 class="text-primary">Sarah Smith</h4>
                                            <small class="text-muted">From: sarah@example.com</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="view-mail">
                                    <p>Donec ultrices faucibus rutrum. Phasellus sodales vulputate urna, vel
                                        accumsan augue
                                        egestas ac. Donec vitae leo at sem lobortis porttitor eu consequat risus.
                                        Mauris
                                        sed congue orci. Donec ultrices faucibus rutrum. Phasellus sodales
                                        vulputate urna,
                                        vel accumsan augue egestas ac. Donec vitae leo at sem lobortis porttitor eu
                                        consequat
                                        risus. Mauris sed congue orci. Donec ultrices faucibus rutrum. Phasellus
                                        sodales
                                        vulputate urna, vel accumsan augue egestas ac. Donec vitae leo at sem
                                        lobortis porttitor
                                        eu consequat risus. Mauris sed congue orci.</p>
                                    <p>
                                        Porttitor eu consequat risus.
                                        <a href="#">Mauris sed congue orci. Donec ultrices faucibus rutrum</a>.
                                        Phasellus sodales vulputate
                                        urna, vel accumsan augue egestas ac. Donec vitae leo at sem lobortis
                                        porttitor eu
                                        consequat risus. Mauris sed congue orci. Donec ultrices faucibus rutrum.
                                        Phasellus
                                        sodales vulputate urna, vel accumsan augue egestas ac. Donec vitae leo at
                                        sem lobortis
                                        porttitor eu consequat risus. Mauris sed congue orci.
                                    </p>
                                    <p>
                                        Sodales
                                        <a href="#">vulputate urna, vel accumsan augue egestas ac</a>. Donec vitae
                                        leo at sem lobortis
                                        porttitor eu consequat risus. Mauris sed congue orci. Donec ultrices
                                        faucibus rutrum.
                                        Phasellus sodales vulputate urna, vel accumsan augue egestas ac. Donec
                                        vitae leo
                                        at sem lobortis porttitor eu consequat risus. Mauris sed congue orci.
                                    </p>
                                </div>
                                <div class="attachment-mail">
                                    <p>
                                            <span>
                                                <i class="fa fa-paperclip"></i> 3 attachments — </span>
                                        <a href="#">Download all attachments</a> |
                                        <a href="#">View all images</a>
                                    </p>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <a href="#">
                                                <img class="img-thumbnail img-responsive" alt="attachment"
                                                     src="../../assets/images/user/usrbig2.jpg">
                                            </a>
                                            <a class="name" href="#"> IMG_001.jpg
                                                <span>20KB</span>
                                            </a>
                                        </div>
                                        <div class="col-md-2">
                                            <a href="#">
                                                <img class="img-thumbnail img-responsive" alt="attachment"
                                                     src="../../assets/images/user/usrbig1.jpg">
                                            </a>
                                            <a class="name" href="#"> IMG_002.jpg
                                                <span>22KB</span>
                                            </a>
                                        </div>
                                        <div class="col-md-2">
                                            <a href="#">
                                                <img class="img-thumbnail img-responsive" alt="attachment"
                                                     src="../../assets/images/user/usrbig3.jpg">
                                            </a>
                                            <a class="name" href="#"> IMG_003.jpg
                                                <span>28KB</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="replyBox m-t-20">
                                    <p class="p-b-20">click here to
                                        <a href="#">Reply</a> or
                                        <a href="#">Forward</a>
                                    </p>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection