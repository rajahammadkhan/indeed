@extends('light.layouts.app3')
@section('title')
    Faqs - {{config('app.dashboard')}}
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">Faqs</h4>
                        </li>
                        <li class="breadcrumb-item bcrumb-1">
                            <a href="../../index-2.html">
                                <i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item bcrumb-2">
                            <a href="#" onClick="return false;">Extra</a>
                        </li>
                        <li class="breadcrumb-item active">Faqs</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <!-- Basic Examples -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>FAQs</strong>
                            <small>Find your solutions from here.</small>
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
                        <div class="row clearfix">
                            <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
                                <div class="panel-group" id="accordion_1" role="tablist"
                                     aria-multiselectable="true">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading" role="tab" id="headingOne_1">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion_1"
                                                   href="#collapseOne_1" aria-expanded="true"
                                                   aria-controls="collapseOne_1">
                                                    Q1. Anim pariatur cliche reprehenderit?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne_1" class="panel-collapse collapse in show"
                                             role="tabpanel" aria-labelledby="headingOne_1">
                                            <div class="panel-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                                laborum
                                                eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                                squid
                                                single origin coffee nulla assumenda shoreditchet. Nihil anim
                                                keffiyeh
                                                helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                                proident.
                                                Ad vegan excepteur butcher vice lomo. Nihil anim keffiyeh
                                                helvetica,
                                                craft beer labore wes anderson cred nesciunt sapiente.
                                            </div>
                                            <div class="p-l-20 p-b-20">
                                                <button type="button"
                                                        class="btn btn-success btn-circle waves-effect waves-circle waves-float">
                                                    <i class="material-icons">thumb_up</i>
                                                </button>
                                                <button type="button"
                                                        class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                                    <i class="material-icons">thumb_down</i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-primary">
                                        <div class="panel-heading" role="tab" id="headingThree_11">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse"
                                                   data-parent="#accordion_1" href="#collapseThree_2"
                                                   aria-expanded="false" aria-controls="collapseThree_1">
                                                    Q2. It has survived not only five centuries, but also the leap
                                                    into?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree_2" class="panel-collapse collapse" role="tabpanel"
                                             aria-labelledby="headingThree_1">
                                            <div class="panel-body">
                                                Completed my graduation in Arts from the well known and renowned
                                                institution of India – SARDAR PATEL ARTS COLLEGE, BARODA
                                                in 2000-01, which was affiliated to M.S. University. I ranker in
                                                University
                                                exams from the same university from 1996-01.
                                            </div>
                                            <div class="p-l-20 p-b-20">
                                                <button type="button"
                                                        class="btn btn-success btn-circle waves-effect waves-circle waves-float">
                                                    <i class="material-icons">thumb_up</i>
                                                </button>
                                                <button type="button"
                                                        class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                                    <i class="material-icons">thumb_down</i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-primary">
                                        <div class="panel-heading" role="tab" id="headingThree_1">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse"
                                                   data-parent="#accordion_1" href="#collapseThree_1"
                                                   aria-expanded="false" aria-controls="collapseThree_1">
                                                    Q3. Worked as Professor and Head of the department at Sarda
                                                    Collage?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree_1" class="panel-collapse collapse" role="tabpanel"
                                             aria-labelledby="headingThree_1">
                                            <div class="panel-body">
                                                Completed my graduation in Arts from the well known and renowned
                                                institution of India – SARDAR PATEL ARTS COLLEGE, BARODA
                                                in 2000-01, which was affiliated to M.S. University. I ranker in
                                                University
                                                exams from the same university from 1996-01.
                                            </div>
                                            <div class="p-l-20 p-b-20">
                                                <button type="button"
                                                        class="btn btn-success btn-circle waves-effect waves-circle waves-float">
                                                    <i class="material-icons">thumb_up</i>
                                                </button>
                                                <button type="button"
                                                        class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                                    <i class="material-icons">thumb_down</i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-primary">
                                        <div class="panel-heading" role="tab" id="headingOne_11">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion_1"
                                                   href="#collapseOne_3" aria-expanded="true"
                                                   aria-controls="collapseOne_3">
                                                    Q4. It has survived not only five centuries, but also the leap
                                                    into?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne_3" class="panel-collapse collapse " role="tabpanel"
                                             aria-labelledby="headingOne_1">
                                            <div class="panel-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                                laborum
                                                eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                                squid
                                                single origin coffee nulla assumenda shoreditchet. Nihil anim
                                                keffiyeh
                                                helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                                proident.
                                                Ad vegan excepteur butcher vice lomo. Nihil anim keffiyeh
                                                helvetica,
                                                craft beer labore wes anderson cred nesciunt sapiente.
                                            </div>
                                            <div class="p-l-20 p-b-20">
                                                <button type="button"
                                                        class="btn btn-success btn-circle waves-effect waves-circle waves-float">
                                                    <i class="material-icons">thumb_up</i>
                                                </button>
                                                <button type="button"
                                                        class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                                    <i class="material-icons">thumb_down</i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-primary">
                                        <div class="panel-heading" role="tab" id="headingTwo_1">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse"
                                                   data-parent="#accordion_1" href="#collapseOne_4"
                                                   aria-expanded="false" aria-controls="collapseOne_4">
                                                    Q5. Worked as Professor and Head of the department?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne_4" class="panel-collapse collapse" role="tabpanel"
                                             aria-labelledby="headingTwo_1">
                                            <div class="panel-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                                laborum
                                                eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                                squid
                                                single origin coffee nulla assumenda shoreditchet. Nihil anim
                                                keffiyeh
                                                helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                                proident.
                                                Ad vegan excepteur butcher vice lomo. Nihil anim keffiyeh
                                                helvetica,
                                                craft beer labore wes anderson cred nesciunt sapiente.
                                            </div>
                                            <div class="p-l-20 p-b-20">
                                                <button type="button"
                                                        class="btn btn-success btn-circle waves-effect waves-circle waves-float">
                                                    <i class="material-icons">thumb_up</i>
                                                </button>
                                                <button type="button"
                                                        class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                                    <i class="material-icons">thumb_down</i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-primary">
                                        <div class="panel-heading" role="tab" id="headingTwo_11">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse"
                                                   data-parent="#accordion_1" href="#collapseOne_5"
                                                   aria-expanded="false" aria-controls="collapseOne_5">
                                                    Q6. It has survived not only five centuries, but also the leap
                                                    into?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne_5" class="panel-collapse collapse" role="tabpanel"
                                             aria-labelledby="headingTwo_1">
                                            <div class="panel-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                                laborum
                                                eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                                squid
                                                single origin coffee nulla assumenda shoreditchet. Nihil anim
                                                keffiyeh
                                                helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                                proident.
                                                Ad vegan excepteur butcher vice lomo. Nihil anim keffiyeh
                                                helvetica,
                                                craft beer labore wes anderson cred nesciunt sapiente.
                                            </div>
                                            <div class="p-l-20 p-b-20">
                                                <button type="button"
                                                        class="btn btn-success btn-circle waves-effect waves-circle waves-float">
                                                    <i class="material-icons">thumb_up</i>
                                                </button>
                                                <button type="button"
                                                        class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                                    <i class="material-icons">thumb_down</i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-primary">
                                        <div class="panel-heading" role="tab" id="headingTwo_12">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse"
                                                   data-parent="#accordion_1" href="#collapseOne_6"
                                                   aria-expanded="false" aria-controls="collapseOne_6">
                                                    Q7. Completed my graduation in Arts from the well known?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne_6" class="panel-collapse collapse" role="tabpanel"
                                             aria-labelledby="headingTwo_1">
                                            <div class="panel-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                                laborum
                                                eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                                squid
                                                single origin coffee nulla assumenda shoreditchet. Nihil anim
                                                keffiyeh
                                                helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                                proident.
                                                Ad vegan excepteur butcher vice lomo. Nihil anim keffiyeh
                                                helvetica,
                                                craft beer labore wes anderson cred nesciunt sapiente.
                                            </div>
                                            <div class="p-l-20 p-b-20">
                                                <button type="button"
                                                        class="btn btn-success btn-circle waves-effect waves-circle waves-float">
                                                    <i class="material-icons">thumb_up</i>
                                                </button>
                                                <button type="button"
                                                        class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                                    <i class="material-icons">thumb_down</i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
        </div>
    </div>
</section>
@endsection