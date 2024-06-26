@extends('light.layouts.app3')
@section('title')
    Invoice - {{config('app.dashboard')}}
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">Invoice</h4>
                        </li>
                        <li class="breadcrumb-item bcrumb-1">
                            <a href="../../index-2.html">
                                <i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item bcrumb-2">
                            <a href="#" onClick="return false;">Extra</a>
                        </li>
                        <li class="breadcrumb-item active">Invoice</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="white-box">
                                    <h3>
                                        <b>INVOICE</b>
                                        <span class="pull-right">#345766</span>
                                    </h3>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="pull-left">
                                                <address>
                                                    <p class="font-bold">BILL FROM :</p>
                                                    <p class="text-muted">
                                                        Aditya University,
                                                        <br> Opp. Town Hall,
                                                        <br> Sardar Patel Road,
                                                        <br> Ahmedabad - 380015
                                                    </p>
                                                </address>
                                            </div>
                                            <div class="pull-right text-right">
                                                <address>
                                                    <p class="addr-font-h3 font-bold">BILL TO :</p>
                                                    <p class="font-bold addr-font-h4">Jayesh Patel</p>
                                                    <p class="text-muted m-l-30">
                                                        207, Prem Sagar Appt.,
                                                        <br> Near Income Tax Office,
                                                        <br> Ashram Road,
                                                        <br> Ahmedabad - 380057
                                                    </p>
                                                    <p class="m-t-30">
                                                        <b>Invoice Date :</b>
                                                        <i class="fa fa-calendar"></i> 14th July 2017
                                                    </p>
                                                    <p>
                                                        <b>Status :</b>
                                                        <span class="label label-success">Success</span>
                                                    </p>
                                                </address>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="table-responsive m-t-40">
                                                <table class="table table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th class="text-center">#</th>
                                                        <th class="text-center">image</th>
                                                        <th class="text-center">Description</th>
                                                        <th class="text-center">Quantity</th>
                                                        <th class="text-center">Unit Cost</th>
                                                        <th class="text-right">Total</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td class="text-center">1</td>
                                                        <td class="table-img text-center">
                                                            <img src="../../assets/images/products/p-13.jpg"
                                                                 alt="">
                                                        </td>
                                                        <td class="text-center">Lorem ipsum dolor sit amet</td>
                                                        <td class="text-center">1</td>
                                                        <td class="text-center">$100</td>
                                                        <td class="text-right">$100</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">2</td>
                                                        <td class="table-img text-center">
                                                            <img src="../../assets/images/products/p-14.jpg"
                                                                 alt="">
                                                        </td>
                                                        <td class="text-center">Consectetur adipisicing elit
                                                        </td>
                                                        <td class="text-center">3</td>
                                                        <td class="text-center">$50</td>
                                                        <td class="text-right">$150</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">3</td>
                                                        <td class="table-img text-center">
                                                            <img src="../../assets/images/products/p-15.jpg"
                                                                 alt="">
                                                        </td>
                                                        <td class="text-center">Dolorum provident rerum </td>
                                                        <td class="text-center">2</td>
                                                        <td class="text-center">$25</td>
                                                        <td class="text-right">$50</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="pull-right m-t-30 text-right">
                                                <p>Sub - Total amount: $300</p>
                                                <p>Discount : $10 </p>
                                                <p>Tax (10%) : $14 </p>
                                                <hr>
                                                <h3>
                                                    <b>Total :</b> $304</h3>
                                            </div>
                                            <div class="clearfix"></div>
                                            <hr>
                                            <div class="text-right">
                                                <button class="btn-hover btn-border-radius color-1"><i
                                                            class="fas fa-print"></i>
                                                    Print</button>
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
    </div>
</section>
@endsection