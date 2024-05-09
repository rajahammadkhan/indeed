@extends('light.layouts.app3')
@section('title')
    Form Wizard - {{config('app.dashboard')}}
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">Form Wizard</h4>
                        </li>
                        <li class="breadcrumb-item bcrumb-1">
                            <a href="../../index-2.html">
                                <i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item bcrumb-2">
                            <a href="#" onClick="return false;">Forms</a>
                        </li>
                        <li class="breadcrumb-item active">Wizard</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Basic Example | Horizontal Layout -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Horizontal</strong> Layout</h2>
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
                        <div id="wizard_horizontal">
                            <h2>First Step</h2>
                            <section>
                                <p>In to am attended desirous raptures declared diverted confined at. Collected
                                    instantly
                                    remaining up certainly to necessary as. Over walk dull into son boy door went
                                    new.
                                    At or happiness commanded daughters as. Is handsome an declared at received in
                                    extended
                                    vicinity subjects. Into miss on he over been late pain an. Only week bore boy
                                    what
                                    fat case left use. Match round scale now sex style far times. Your me past an
                                    much.
                                </p>
                            </section>
                            <h2>Second Step</h2>
                            <section>
                                <p>New the her nor case that lady paid read. Invitation friendship travelling eat
                                    everything
                                    the out two. Shy you who scarcely expenses debating hastened resolved. Always
                                    polite
                                    moment on is warmth spirit it to hearts. Downs those still witty an balls so
                                    chief
                                    so. Moment an little remain no up lively no. Way brought may off our regular
                                    country
                                    towards adapted cheered.</p>
                            </section>
                            <h2>Third Step</h2>
                            <section>
                                <p>Husbands ask repeated resolved but laughter debating. She end cordial visitor
                                    noisier
                                    fat subject general picture. Or if offering confined entrance no. Nay rapturous
                                    him
                                    see something residence. Highly talked do so vulgar. Her use behaved spirits
                                    and
                                    natural attempt say feeling. Exquisite mr incommode immediate he something
                                    ourselves
                                    it of. Law conduct yet chiefly beloved examine village proceed.</p>
                            </section>
                            <h2>Forth Step</h2>
                            <section>
                                <p>An country demesne message it. Bachelor domestic extended doubtful as concerns
                                    at. Morning
                                    prudent removal an letters by. On could my in order never it. Or excited
                                    certain
                                    sixteen it to parties colonel. Depending conveying direction has led immediate.
                                    Law
                                    gate her well bed life feet seen rent. On nature or no except it sussex.</p>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Example | Horizontal Layout -->
        <!-- Basic Example | Vertical Layout -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Vertical</strong> Layout</h2>
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
                        <div id="wizard_vertical">
                            <h2>First Step</h2>
                            <section>
                                <p>In to am attended desirous raptures declared diverted confined at. Collected
                                    instantly
                                    remaining up certainly to necessary as. Over walk dull into son boy door went
                                    new.
                                    At or happiness commanded daughters as. Is handsome an declared at received in
                                    extended
                                    vicinity subjects. Into miss on he over been late pain an. Only week bore boy
                                    what
                                    fat case left use. Match round scale now sex style far times. Your me past an
                                    much.
                                </p>
                            </section>
                            <h2>Second Step</h2>
                            <section>
                                <p>New the her nor case that lady paid read. Invitation friendship travelling eat
                                    everything
                                    the out two. Shy you who scarcely expenses debating hastened resolved. Always
                                    polite
                                    moment on is warmth spirit it to hearts. Downs those still witty an balls so
                                    chief
                                    so. Moment an little remain no up lively no. Way brought may off our regular
                                    country
                                    towards adapted cheered.
                                </p>
                            </section>
                            <h2>Third Step</h2>
                            <section>
                                <p>Husbands ask repeated resolved but laughter debating. She end cordial visitor
                                    noisier
                                    fat subject general picture. Or if offering confined entrance no. Nay rapturous
                                    him
                                    see something residence. Highly talked do so vulgar. Her use behaved spirits
                                    and
                                    natural attempt say feeling. Exquisite mr incommode immediate he something
                                    ourselves
                                    it of. Law conduct yet chiefly beloved examine village proceed.
                                </p>
                            </section>
                            <h2>Forth Step</h2>
                            <section>
                                <p>An country demesne message it. Bachelor domestic extended doubtful as concerns
                                    at. Morning
                                    prudent removal an letters by. On could my in order never it. Or excited
                                    certain
                                    sixteen it to parties colonel. Depending conveying direction has led immediate.
                                    Law
                                    gate her well bed life feet seen rent. On nature or no except it sussex.
                                </p>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Example | Vertical Layout -->
        <!-- Advanced Form Example With Validation -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Advance</strong> Form With Validation</h2>
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
                        <form id="wizard_with_validation" method="POST">
                            <h3>Account Information</h3>
                            <fieldset>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="username"
                                               placeholder="Username*" required>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" class="form-control" name="password" id="password"
                                               placeholder="Password*" required>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" class="form-control" name="confirm"
                                               placeholder="Confirm Password*" required>
                                    </div>
                                </div>
                            </fieldset>
                            <h3>Profile Information</h3>
                            <fieldset>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="name" class="form-control"
                                               placeholder="First Name*" required>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="surname" class="form-control"
                                               placeholder="Last Name*" required>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="email" name="email" class="form-control" placeholder="Email*"
                                               required>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                            <textarea name="address" cols="30" rows="3" class="form-control no-resize"
                                                      placeholder="Address*" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input min="18" type="number" name="age" class="form-control"
                                               placeholder="Age*" required>
                                    </div>
                                    <div class="help-info">The warning step will show up if age is less than 18
                                    </div>
                                </div>
                            </fieldset>
                            <h3>Terms &amp; Conditions - Finish</h3>
                            <fieldset>
                                <div class="form-check m-l-10">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" id="acceptTerms-2"
                                               name="acceptTerms" required> I agree with the Terms and Conditions.
                                        <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                    </label>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Advanced Form Example With Validation -->
    </div>
</section>
@endsection