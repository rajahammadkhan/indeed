@extends('light.layouts.app3')
@section('title')
    Animations - {{config('app.dashboard')}}
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">Animations</h4>
                        </li>
                        <li class="breadcrumb-item bcrumb-1">
                            <a href="../../index-2.html">
                                <i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item bcrumb-2">
                            <a href="#" onClick="return false;">UI</a>
                        </li>
                        <li class="breadcrumb-item active">Animations</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Css</strong> Animations</h2>
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
                        <div class="col-md-3">
                            <select class="js-animations col-10" id="sel">
                                <optgroup label="Attention Seekers">
                                    <option value="bounce">bounce</option>
                                    <option value="flash">flash</option>
                                    <option value="pulse">pulse</option>
                                    <option value="rubberBand">rubberBand</option>
                                    <option value="shake">shake</option>
                                    <option value="swing">swing</option>
                                    <option value="tada">tada</option>
                                    <option value="wobble">wobble</option>
                                    <option value="jello">jello</option>
                                </optgroup>
                                <optgroup label="Bouncing Entrances">
                                    <option value="bounceIn">bounceIn</option>
                                    <option value="bounceInDown">bounceInDown</option>
                                    <option value="bounceInLeft">bounceInLeft</option>
                                    <option value="bounceInRight">bounceInRight</option>
                                    <option value="bounceInUp">bounceInUp</option>
                                </optgroup>
                                <optgroup label="Bouncing Exits">
                                    <option value="bounceOut">bounceOut</option>
                                    <option value="bounceOutDown">bounceOutDown</option>
                                    <option value="bounceOutLeft">bounceOutLeft</option>
                                    <option value="bounceOutRight">bounceOutRight</option>
                                    <option value="bounceOutUp">bounceOutUp</option>
                                </optgroup>
                                <optgroup label="Fading Entrances">
                                    <option value="fadeIn">fadeIn</option>
                                    <option value="fadeInDown">fadeInDown</option>
                                    <option value="fadeInDownBig">fadeInDownBig</option>
                                    <option value="fadeInLeft">fadeInLeft</option>
                                    <option value="fadeInLeftBig">fadeInLeftBig</option>
                                    <option value="fadeInRight">fadeInRight</option>
                                    <option value="fadeInRightBig">fadeInRightBig</option>
                                    <option value="fadeInUp">fadeInUp</option>
                                    <option value="fadeInUpBig">fadeInUpBig</option>
                                </optgroup>
                                <optgroup label="Fading Exits">
                                    <option value="fadeOut">fadeOut</option>
                                    <option value="fadeOutDown">fadeOutDown</option>
                                    <option value="fadeOutDownBig">fadeOutDownBig</option>
                                    <option value="fadeOutLeft">fadeOutLeft</option>
                                    <option value="fadeOutLeftBig">fadeOutLeftBig</option>
                                    <option value="fadeOutRight">fadeOutRight</option>
                                    <option value="fadeOutRightBig">fadeOutRightBig</option>
                                    <option value="fadeOutUp">fadeOutUp</option>
                                    <option value="fadeOutUpBig">fadeOutUpBig</option>
                                </optgroup>
                                <optgroup label="Flippers">
                                    <option value="flip">flip</option>
                                    <option value="flipInX">flipInX</option>
                                    <option value="flipInY">flipInY</option>
                                    <option value="flipOutX">flipOutX</option>
                                    <option value="flipOutY">flipOutY</option>
                                </optgroup>
                                <optgroup label="Lightspeed">
                                    <option value="lightSpeedIn">lightSpeedIn</option>
                                    <option value="lightSpeedOut">lightSpeedOut</option>
                                </optgroup>
                                <optgroup label="Rotating Entrances">
                                    <option value="rotateIn">rotateIn</option>
                                    <option value="rotateInDownLeft">rotateInDownLeft</option>
                                    <option value="rotateInDownRight">rotateInDownRight</option>
                                    <option value="rotateInUpLeft">rotateInUpLeft</option>
                                    <option value="rotateInUpRight">rotateInUpRight</option>
                                </optgroup>
                                <optgroup label="Rotating Exits">
                                    <option value="rotateOut">rotateOut</option>
                                    <option value="rotateOutDownLeft">rotateOutDownLeft</option>
                                    <option value="rotateOutDownRight">rotateOutDownRight</option>
                                    <option value="rotateOutUpLeft">rotateOutUpLeft</option>
                                    <option value="rotateOutUpRight">rotateOutUpRight</option>
                                </optgroup>
                                <optgroup label="Sliding Entrances">
                                    <option value="slideInUp">slideInUp</option>
                                    <option value="slideInDown">slideInDown</option>
                                    <option value="slideInLeft">slideInLeft</option>
                                    <option value="slideInRight">slideInRight</option>
                                </optgroup>
                                <optgroup label="Sliding Exits">
                                    <option value="slideOutUp">slideOutUp</option>
                                    <option value="slideOutDown">slideOutDown</option>
                                    <option value="slideOutLeft">slideOutLeft</option>
                                    <option value="slideOutRight">slideOutRight</option>
                                </optgroup>
                                <optgroup label="Zoom Entrances">
                                    <option value="zoomIn">zoomIn</option>
                                    <option value="zoomInDown">zoomInDown</option>
                                    <option value="zoomInLeft">zoomInLeft</option>
                                    <option value="zoomInRight">zoomInRight</option>
                                    <option value="zoomInUp">zoomInUp</option>
                                </optgroup>
                                <optgroup label="Zoom Exits">
                                    <option value="zoomOut">zoomOut</option>
                                    <option value="zoomOutDown">zoomOutDown</option>
                                    <option value="zoomOutLeft">zoomOutLeft</option>
                                    <option value="zoomOutRight">zoomOutRight</option>
                                    <option value="zoomOutUp">zoomOutUp</option>
                                </optgroup>
                                <optgroup label="Specials">
                                    <option value="hinge">hinge</option>
                                    <option value="rollIn">rollIn</option>
                                    <option value="rollOut">rollOut</option>
                                </optgroup>
                            </select>
                        </div>
                        <img src="../../assets/images/animation-bg.jpg" class="js-animating-object img-responsive"
                             alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection