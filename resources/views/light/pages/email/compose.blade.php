@extends('light.layouts.app3')
@section('title')
    Compose - {{config('app.dashboard')}}
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">Compose</h4>
                        </li>
                        <li class="breadcrumb-item bcrumb-1">
                            <a href="../../index-2.html">
                                <i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item bcrumb-2">
                            <a href="#" onClick="return false;">Email</a>
                        </li>
                        <li class="breadcrumb-item active">Compose</li>
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
                        <div class="inbox-center table-responsive">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th colspan="1">
                                        <div class="inbox-header">
                                            Compose New Message
                                        </div>
                                    </th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <form class="composeForm">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" id="email_address" class="form-control"
                                                   placeholder="TO">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" id="subject" class="form-control"
                                                   placeholder="Subject">
                                        </div>
                                    </div>
                                    <textarea id="ckeditor">
                            	</textarea>
                                    <div class="compose-editor m-t-20">
                                        <div id="summernote"></div>
                                        <input type="file" class="default" multiple>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-12">
                                <div class="m-l-25 m-b-20">
                                    <button type="button"
                                            class="btn btn-info btn-border-radius waves-effect">Send</button>
                                    <button type="button"
                                            class="btn btn-danger btn-border-radius waves-effect">Discard</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection