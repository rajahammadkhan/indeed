@extends('light.layouts.app3')
@section('title')
    ApexChart - {{config('app.dashboard')}}
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">ApexChart</h4>
                        </li>
                        <li class="breadcrumb-item bcrumb-1">
                            <a href="../../index-2.html">
                                <i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item bcrumb-2">
                            <a href="#" onClick="return false;">Charts</a>
                        </li>
                        <li class="breadcrumb-item active">ApexChart</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Bar</strong> Chart</h2>
                    </div>
                    <div class="body">
                        <div class="recent-report__chart">
                            <div id="chart1"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Bar</strong> Chart</h2>
                    </div>
                    <div class="body">
                        <div class="recent-report__chart">
                            <div id="chart2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Line</strong> Chart</h2>
                    </div>
                    <div class="body">
                        <div class="recent-report__chart">
                            <div id="chart3"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Line</strong> Chart</h2>
                    </div>
                    <div class="body">
                        <div class="recent-report__chart">
                            <div id="chart4"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Line &amp; Column</strong> Chart</h2>
                    </div>
                    <div class="body">
                        <div class="recent-report__chart">
                            <div id="chart5"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Area</strong> Chart</h2>
                    </div>
                    <div class="body">
                        <div class="recent-report__chart">
                            <div id="chart6"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Pie</strong> Chart</h2>
                    </div>
                    <div class="body">
                        <div class="recent-report__chart">
                            <div id="chart7"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Pie</strong> Chart</h2>
                    </div>
                    <div class="body">
                        <div class="recent-report__chart">
                            <div id="chart8"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection