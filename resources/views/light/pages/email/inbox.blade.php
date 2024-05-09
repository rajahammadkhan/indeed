@extends('light.layouts.app3')
@section('title')
    Inbox - {{config('app.dashboard')}}
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">Inbox</h4>
                        </li>
                        <li class="breadcrumb-item bcrumb-1">
                            <a href="../../index-2.html">
                                <i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item bcrumb-2">
                            <a href="#" onClick="return false;">Email</a>
                        </li>
                        <li class="breadcrumb-item active">Inbox</li>
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
                                    <a href="mail-inbox.html" title="Inbox">Inbox
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
                                    <th class="text-center">
                                        <label class="form-check-label">
                                            <input type="checkbox">
                                            <span class="form-check-sign"></span>
                                        </label>
                                    </th>
                                    <th colspan="3">
                                        <div class="inbox-header">
                                            <div class="mail-option no-pad-left">
                                                <div class="email-btn-group m-l-15">
                                                    <a href="#" class="col-dark-gray waves-effect m-r-20"
                                                       title="back">
                                                        <i class="material-icons">keyboard_return</i>
                                                    </a>
                                                    <a href="#" class="col-dark-gray waves-effect m-r-20"
                                                       title="Archive">
                                                        <i class="material-icons">archive</i>
                                                    </a>
                                                    <a href="#" class="col-dark-gray waves-effect m-r-20"
                                                       title="Error">
                                                        <i class="material-icons">error</i>
                                                    </a>
                                                    <a href="#" class="col-dark-gray waves-effect m-r-20"
                                                       title="Delete">
                                                        <i class="material-icons">delete</i>
                                                    </a>
                                                    <a href="#" class="col-dark-gray waves-effect m-r-20"
                                                       title="Folders">
                                                        <i class="material-icons">folder</i>
                                                    </a>
                                                    <a href="#" class="col-dark-gray waves-effect m-r-20"
                                                       title="Tag">
                                                        <i class="material-icons">local_offer</i>
                                                    </a>
                                                    <a class="dropdown-toggle waves-effect waves-effect col-dark-gray"
                                                       data-toggle="dropdown" aria-haspopup="true"
                                                       aria-expanded="true">More</a>
                                                    <ul class="dropdown-menu pull-right">
                                                        <li>
                                                            <a href="#" onClick="return false;"
                                                               class=" waves-effect waves-block">Mark
                                                                as Read</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" onClick="return false;"
                                                               class=" waves-effect waves-block">Spam</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" onClick="return false;"
                                                               class=" waves-effect waves-block">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </th>
                                    <th class="hidden-xs" colspan="2">
                                        <div class="pull-right">
                                            <div class="email-btn-group m-l-15">
                                                <a href="#" class="col-dark-gray waves-effect m-r-20"
                                                   title="back">
                                                    <i class="material-icons">navigate_before</i>
                                                </a>
                                                <a href="#" class="col-dark-gray waves-effect m-r-20"
                                                   title="Archive">
                                                    <i class="material-icons">navigate_next</i>
                                                </a>
                                            </div>
                                        </div>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="unread">
                                    <td class="tbl-checkbox">
                                        <label class="form-check-label">
                                            <input type="checkbox">
                                            <span class="form-check-sign"></span>
                                        </label>
                                    </td>
                                    <td class="hidden-xs">
                                        <i class="material-icons">star_border</i>
                                    </td>
                                    <td class="hidden-xs">Nelson Lane</td>
                                    <td class="max-texts">
                                        <a href="#">
                                            <span class="label l-bg-purple shadow-style m-r-10">Work</span>
                                            Lorem ipsum perspiciatis unde omnis iste natus</a>
                                    </td>
                                    <td class="hidden-xs">
                                        <i class="material-icons">attach_file</i>
                                    </td>
                                    <td class="text-right"> 12:30 PM </td>
                                </tr>
                                <tr class="unread">
                                    <td class="tbl-checkbox">
                                        <label class="form-check-label">
                                            <input type="checkbox">
                                            <span class="form-check-sign"></span>
                                        </label>
                                    </td>
                                    <td class="hidden-xs">
                                        <i class="material-icons text-warning">star</i>
                                    </td>
                                    <td class="hidden-xs">Kerry Mann</td>
                                    <td class="max-texts">
                                        <a href="#">Lorem ipsum perspiciatis unde omnis iste natus</a>
                                    </td>
                                    <td class="hidden-xs">
                                        <i class="material-icons">attach_file</i>
                                    </td>
                                    <td class="text-right"> May 13 </td>
                                </tr>
                                <tr class="unread">
                                    <td class="tbl-checkbox">
                                        <label class="form-check-label">
                                            <input type="checkbox">
                                            <span class="form-check-sign"></span>
                                        </label>
                                    </td>
                                    <td class="hidden-xs">
                                        <i class="material-icons">star_border</i>
                                    </td>
                                    <td class="hidden-xs">Adam Peters</td>
                                    <td class="max-texts">
                                        <a href="#">
                                            <span class="label light-green shadow-style m-r-10">Shopping</span>
                                            Lorem ipsum perspiciatis unde omnis</a>
                                    </td>
                                    <td class="hidden-xs">
                                        <i class="material-icons">attach_file</i>
                                    </td>
                                    <td class="text-right"> May 12 </td>
                                </tr>
                                <tr>
                                    <td class="tbl-checkbox">
                                        <label class="form-check-label">
                                            <input type="checkbox">
                                            <span class="form-check-sign"></span>
                                        </label>
                                    </td>
                                    <td class="hidden-xs">
                                        <i class="material-icons">star_border</i>
                                    </td>
                                    <td class="hidden-xs">Lula Reese</td>
                                    <td class="max-texts">
                                        <a href="#">
                                            <span class="label l-bg-orange shadow-style m-r-10">Family</span>
                                            Lorem ipsum perspiciatis unde omnis iste natus</a>
                                    </td>
                                    <td class="hidden-xs">
                                        <i class="material-icons">attach_file</i>
                                    </td>
                                    <td class="text-right"> May 12 </td>
                                </tr>
                                <tr>
                                    <td class="tbl-checkbox">
                                        <label class="form-check-label">
                                            <input type="checkbox">
                                            <span class="form-check-sign"></span>
                                        </label>
                                    </td>
                                    <td class="hidden-xs">
                                        <i class="material-icons">star_border</i>
                                    </td>
                                    <td class="hidden-xs">Nelson Lane</td>
                                    <td class="max-texts">
                                        <a href="#">
                                            <span class="label label-info m-r-10">Work</span>
                                            Lorem ipsum perspiciatis unde omnis iste natus</a>
                                    </td>
                                    <td class="hidden-xs">
                                        <i class="material-icons">attach_file</i>
                                    </td>
                                    <td class="text-right"> May 12 </td>
                                </tr>
                                <tr>
                                    <td class="tbl-checkbox">
                                        <label class="form-check-label">
                                            <input type="checkbox">
                                            <span class="form-check-sign"></span>
                                        </label>
                                    </td>
                                    <td class="hidden-xs">
                                        <i class="material-icons text-warning">star</i>
                                    </td>
                                    <td class="hidden-xs">Kerry Mann</td>
                                    <td class="max-texts">
                                        <a href="#">Lorem ipsum perspiciatis unde omnis iste natus</a>
                                    </td>
                                    <td class="hidden-xs">
                                        <i class="material-icons">attach_file</i>
                                    </td>
                                    <td class="text-right"> May 11 </td>
                                </tr>
                                <tr>
                                    <td class="tbl-checkbox">
                                        <label class="form-check-label">
                                            <input type="checkbox">
                                            <span class="form-check-sign"></span>
                                        </label>
                                    </td>
                                    <td class="hidden-xs">
                                        <i class="material-icons">star_border</i>
                                    </td>
                                    <td class="hidden-xs">Adam Peters</td>
                                    <td class="max-texts">
                                        <a href="#">
                                            <span class="label l-bg-cyan shadow-style m-r-10">Office</span>
                                            Lorem ipsum perspiciatis unde omnis iste natus</a>
                                    </td>
                                    <td class="hidden-xs">
                                        <i class="material-icons">attach_file</i>
                                    </td>
                                    <td class="text-right"> May 11 </td>
                                </tr>
                                <tr>
                                    <td class="tbl-checkbox">
                                        <label class="form-check-label">
                                            <input type="checkbox">
                                            <span class="form-check-sign"></span>
                                        </label>
                                    </td>
                                    <td class="hidden-xs">
                                        <i class="material-icons">star_border</i>
                                    </td>
                                    <td class="hidden-xs">Lula Reese</td>
                                    <td class="max-texts">
                                        <a href="#">
                                            <span class="label label-warning m-r-10">Work</span>
                                            Lorem ipsum perspiciatis unde omnis iste natus</a>
                                    </td>
                                    <td class="hidden-xs">
                                        <i class="material-icons">attach_file</i>
                                    </td>
                                    <td class="text-right"> May 11 </td>
                                </tr>
                                <tr>
                                    <td class="tbl-checkbox">
                                        <label class="form-check-label">
                                            <input type="checkbox">
                                            <span class="form-check-sign"></span>
                                        </label>
                                    </td>
                                    <td class="hidden-xs">
                                        <i class="material-icons">star_border</i>
                                    </td>
                                    <td class="hidden-xs">Nelson Lane</td>
                                    <td class="max-texts">
                                        <a href="#">
                                            <span class="label label-info m-r-10">Work</span>
                                            Lorem ipsum perspiciatis unde omnis iste natus</a>
                                    </td>
                                    <td class="hidden-xs">
                                        <i class="material-icons">attach_file</i>
                                    </td>
                                    <td class="text-right"> May 10 </td>
                                </tr>
                                <tr>
                                    <td class="tbl-checkbox">
                                        <label class="form-check-label">
                                            <input type="checkbox">
                                            <span class="form-check-sign"></span>
                                        </label>
                                    </td>
                                    <td class="hidden-xs">
                                        <i class="material-icons text-warning">star</i>
                                    </td>
                                    <td class="hidden-xs">Kerry Mann</td>
                                    <td class="max-texts">
                                        <a href="#">Lorem ipsum perspiciatis unde omnis iste natus</a>
                                    </td>
                                    <td class="hidden-xs">
                                        <i class="material-icons">attach_file</i>
                                    </td>
                                    <td class="text-right"> May 10 </td>
                                </tr>
                                <tr>
                                    <td class="tbl-checkbox">
                                        <label class="form-check-label">
                                            <input type="checkbox">
                                            <span class="form-check-sign"></span>
                                        </label>
                                    </td>
                                    <td class="hidden-xs">
                                        <i class="material-icons">star_border</i>
                                    </td>
                                    <td class="hidden-xs">Adam Peters</td>
                                    <td class="max-texts">
                                        <a href="#">
                                            <span class="label light-green shadow-style m-r-10">Shopping</span>
                                            Lorem ipsum perspiciatis unde omnis</a>
                                    </td>
                                    <td class="hidden-xs">
                                        <i class="material-icons">attach_file</i>
                                    </td>
                                    <td class="text-right"> May 10 </td>
                                </tr>
                                <tr>
                                    <td class="tbl-checkbox">
                                        <label class="form-check-label">
                                            <input type="checkbox">
                                            <span class="form-check-sign"></span>
                                        </label>
                                    </td>
                                    <td class="hidden-xs">
                                        <i class="material-icons">star_border</i>
                                    </td>
                                    <td class="hidden-xs">Lula Reese</td>
                                    <td class="max-texts">
                                        <a href="#">
                                            <span class="label label-warning m-r-10">Work</span>
                                            Lorem ipsum perspiciatis unde omnis iste natus</a>
                                    </td>
                                    <td class="hidden-xs">
                                        <i class="material-icons">attach_file</i>
                                    </td>
                                    <td class="text-right"> May 09 </td>
                                </tr>
                                <tr>
                                    <td class="tbl-checkbox">
                                        <label class="form-check-label">
                                            <input type="checkbox">
                                            <span class="form-check-sign"></span>
                                        </label>
                                    </td>
                                    <td class="hidden-xs">
                                        <i class="material-icons">star_border</i>
                                    </td>
                                    <td class="hidden-xs">Nelson Lane</td>
                                    <td class="max-texts">
                                        <a href="#">
                                            <span class="label label-info m-r-10">Work</span>
                                            Lorem ipsum perspiciatis unde omnis iste natus</a>
                                    </td>
                                    <td class="hidden-xs">
                                        <i class="material-icons">attach_file</i>
                                    </td>
                                    <td class="text-right"> May 09 </td>
                                </tr>
                                <tr>
                                    <td class="tbl-checkbox">
                                        <label class="form-check-label">
                                            <input type="checkbox">
                                            <span class="form-check-sign"></span>
                                        </label>
                                    </td>
                                    <td class="hidden-xs">
                                        <i class="material-icons text-warning">star</i>
                                    </td>
                                    <td class="hidden-xs">Kerry Mann</td>
                                    <td class="max-texts">
                                        <a href="#">Lorem ipsum perspiciatis unde omnis iste natus</a>
                                    </td>
                                    <td class="hidden-xs">
                                        <i class="material-icons">attach_file</i>
                                    </td>
                                    <td class="text-right"> May 09 </td>
                                </tr>
                                <tr>
                                    <td class="tbl-checkbox">
                                        <label class="form-check-label">
                                            <input type="checkbox">
                                            <span class="form-check-sign"></span>
                                        </label>
                                    </td>
                                    <td class="hidden-xs">
                                        <i class="material-icons">star_border</i>
                                    </td>
                                    <td class="hidden-xs">Adam Peters</td>
                                    <td class="max-texts">
                                        <a href="#">
                                            <span class="label label-success m-r-10">Shopping</span>
                                            Lorem ipsum perspiciatis unde omnis</a>
                                    </td>
                                    <td class="hidden-xs">
                                        <i class="material-icons">attach_file</i>
                                    </td>
                                    <td class="text-right"> May 09 </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-sm-7 ">
                                <p class="p-15">Showing 1 - 15 of 200</p>
                            </div>
                            <div class="col-sm-5 text-right">
                                <div class="pull-right p-15">
                                    <button type="button" class="btn btn-primary">
                                        <i class="material-icons">navigate_before</i>
                                    </button>
                                    <button type="button" class="btn btn-primary">
                                        <i class="material-icons">navigate_next</i>
                                    </button>
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