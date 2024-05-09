@extends('light.layouts.app3')
@section('title')
    Pricing - {{config('app.dashboard')}}
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">Pricing</h4>
                        </li>
                        <li class="breadcrumb-item bcrumb-1">
                            <a href="../../index-2.html">
                                <i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item bcrumb-2">
                            <a href="#" onClick="return false;">Extra</a>
                        </li>
                        <li class="breadcrumb-item active">Pricing</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="header">
                    <h2>
                        <strong>Pricing</strong> Page</h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown"
                               role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <a href="#" onClick="return false;" class=" waves-effect waves-block">Action</a>
                                </li>
                                <li>
                                    <a href="#" onClick="return false;" class=" waves-effect waves-block">Another
                                        action</a>
                                </li>
                                <li>
                                    <a href="#" onClick="return false;" class=" waves-effect waves-block">Something
                                        else
                                        here</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <div class="demo">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3 col-sm-6">
                                    <div class="pricingTable">
                                        <div class="pricingTable-header">
                                            <i class="material-icons">brightness_medium</i>
                                            <div class="price-value"> $10.00
                                                <span class="month">per month</span>
                                            </div>
                                        </div>
                                        <h3 class="heading">Standard</h3>
                                        <div class="pricing-content">
                                            <ul>
                                                <li>
                                                    <b>50GB</b> Disk Space</li>
                                                <li>
                                                    <b>50</b> Email Accounts</li>
                                                <li>
                                                    <b>50GB</b> Monthly Bandwidth</li>
                                                <li>
                                                    <b>10</b> subdomains</li>
                                                <li>
                                                    <b>15</b> Domains</li>
                                            </ul>
                                        </div>
                                        <div class="pricingTable-signup">
                                            <a href="#">sign up</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="pricingTable greenColor">
                                        <div class="pricingTable-header">
                                            <i class="material-icons">local_mall</i>
                                            <div class="price-value"> $20.00
                                                <span class="month">per month</span>
                                            </div>
                                        </div>
                                        <h3 class="heading">Business</h3>
                                        <div class="pricing-content">
                                            <ul>
                                                <li>
                                                    <b>60GB</b> Disk Space</li>
                                                <li>
                                                    <b>60</b> Email Accounts</li>
                                                <li>
                                                    <b>60GB</b> Monthly Bandwidth</li>
                                                <li>
                                                    <b>15</b> subdomains</li>
                                                <li>
                                                    <b>20</b> Domains</li>
                                            </ul>
                                        </div>
                                        <div class="pricingTable-signup">
                                            <a href="#">sign up</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="pricingTable blueColor">
                                        <div class="pricingTable-header">
                                            <i class="material-icons">spa</i>
                                            <div class="price-value"> $30.00
                                                <span class="month">per month</span>
                                            </div>
                                        </div>
                                        <h3 class="heading">PREMIUM</h3>
                                        <div class="pricing-content">
                                            <ul>
                                                <li>
                                                    <b>70GB</b> Disk Space</li>
                                                <li>
                                                    <b>70</b> Email Accounts</li>
                                                <li>
                                                    <b>70GB</b> Monthly Bandwidth</li>
                                                <li>
                                                    <b>20</b> subdomains</li>
                                                <li>
                                                    <b>25</b> Domains</li>
                                            </ul>
                                        </div>
                                        <div class="pricingTable-signup">
                                            <a href="#">sign up</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="pricingTable redColor">
                                        <div class="pricingTable-header">
                                            <i class="material-icons">filter_vintage</i>
                                            <div class="price-value"> $40.00
                                                <span class="month">per month</span>
                                            </div>
                                        </div>
                                        <h3 class="heading">EXTRA</h3>
                                        <div class="pricing-content">
                                            <ul>
                                                <li>
                                                    <b>80GB</b> Disk Space</li>
                                                <li>
                                                    <b>80</b> Email Accounts</li>
                                                <li>
                                                    <b>80GB</b> Monthly Bandwidth</li>
                                                <li>
                                                    <b>20</b> subdomains</li>
                                                <li>
                                                    <b>35</b> Domains</li>
                                            </ul>
                                        </div>
                                        <div class="pricingTable-signup">
                                            <a href="#">sign up</a>
                                        </div>
                                    </div>
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