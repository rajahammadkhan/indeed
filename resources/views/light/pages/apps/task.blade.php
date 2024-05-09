@extends('light.layouts.app3')
@section('title')
    Task - {{config('app.dashboard')}}
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">Task Bar</h4>
                        </li>
                        <li class="breadcrumb-item bcrumb-1">
                            <a href="../../index-2.html">
                                <i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item bcrumb-2">
                            <a href="#" onClick="return false;">Apps</a>
                        </li>
                        <li class="breadcrumb-item active">Task Bar</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Add</strong> New Task</h2>
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
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="name" class="form-control" />
                                        <label class="form-label">Task Name</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="desc" class="form-control" />
                                        <label class="form-label">Task Description</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="deadline" class="datepicker form-control"
                                               placeholder="Task Deadline" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                <div class="col-lg-8">
                                    <button class="btn btn-default submit">Add Task</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row taskbar">
            <div class="col">
                <h4 class="task-header"><i class="fas fa-calendar-check"></i> Tasks</h4>
                <div class="drag-1" id="1">
                    <div class="box">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-check">
                                    <div class="form-check m-l-10">
                                        <label class="form-check-label">
                                            <input class="form-check-input checkbox checkbox1" type="checkbox">
                                            <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-2 p-t-10"><span class='task-name'>Create Website</span>
                                </div>
                                <span class='task-desc'>Use HTML5, CSS3, jQuery,and Bootstrap 3</span>
                            </div>
                            <div class="card-footer">
                                <div class="progress shadow-style">
                                    <div class="progress-bar l-bg-purple width-per-40" role="progressbar"
                                         aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div>Task Status</div>
                            </div>
                            <div class="card-footer">
                                <div class="avatar-image avatar-image--loaded mr-2">
                                    <div class="avatar avatar--md avatar-image__image">
                                        <div class="avatar__content"><img src="../../assets/images/user/user2.jpg"
                                                                          alt=""></div>
                                    </div>
                                </div>
                                <div class="avatar-image avatar-image--loaded mr-2">
                                    <div class="avatar avatar--md avatar-image__image">
                                        <div class="avatar__content"><img src="../../assets/images/user/user5.jpg"
                                                                          alt=""></div>
                                    </div>
                                </div>
                                <div class="avatar-image avatar-image--loaded mr-2">
                                    <div class="avatar avatar--md avatar-image__image">
                                        <div class="avatar__content"><img src="../../assets/images/user/user11.jpg"
                                                                          alt=""></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer"><span class='pull-right'> DEADLINE:
                                        September 20, 2015</span>
                                <span class="datetime"></span>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-check">
                                    <div class="form-check m-l-10">
                                        <label class="form-check-label">
                                            <input class="form-check-input checkbox checkbox1" type="checkbox">
                                            <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-2 p-t-10"><span class='task-name'>Create Website</span>
                                </div>
                                <span class='task-desc'>Use HTML5, CSS3, jQuery,and Bootstrap 3</span>
                            </div>
                            <div class="card-footer">
                                <div class="progress shadow-style">
                                    <div class="progress-bar l-bg-orange width-per-80" role="progressbar"
                                         aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div>Task Status</div>
                            </div>
                            <div class="card-footer">
                                <div class="avatar-image avatar-image--loaded mr-2">
                                    <div class="avatar avatar--md avatar-image__image">
                                        <div class="avatar__content"><img src="../../assets/images/user/user9.jpg"
                                                                          alt=""></div>
                                    </div>
                                </div>
                                <div class="avatar-image avatar-image--loaded mr-2">
                                    <div class="avatar avatar--md avatar-image__image">
                                        <div class="avatar__content"><img src="../../assets/images/user/user3.jpg"
                                                                          alt=""></div>
                                    </div>
                                </div>
                                <div class="avatar-image avatar-image--loaded mr-2">
                                    <div class="avatar avatar--md avatar-image__image">
                                        <div class="avatar__content"><img src="../../assets/images/user/user2.jpg"
                                                                          alt=""></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer"><span class='pull-right'> DEADLINE:
                                        September 20, 2015</span>
                                <span class="datetime"></span>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-check">
                                    <div class="form-check m-l-10">
                                        <label class="form-check-label">
                                            <input class="form-check-input checkbox checkbox1" type="checkbox">
                                            <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-2 p-t-10"><span class='task-name'>Create Website</span>
                                </div>
                                <span class='task-desc'>Use HTML5, CSS3, jQuery,and Bootstrap 3</span>
                            </div>
                            <div class="card-footer">
                                <div class="progress shadow-style">
                                    <div class="progress-bar l-bg-cyan width-per-50" role="progressbar"
                                         aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div>Task Status</div>
                            </div>
                            <div class="card-footer">
                                <div class="avatar-image avatar-image--loaded mr-2">
                                    <div class="avatar avatar--md avatar-image__image">
                                        <div class="avatar__content"><img src="../../assets/images/user/user7.jpg"
                                                                          alt=""></div>
                                    </div>
                                </div>
                                <div class="avatar-image avatar-image--loaded mr-2">
                                    <div class="avatar avatar--md avatar-image__image">
                                        <div class="avatar__content"><img src="../../assets/images/user/user5.jpg"
                                                                          alt=""></div>
                                    </div>
                                </div>
                                <div class="avatar-image avatar-image--loaded mr-2">
                                    <div class="avatar avatar--md avatar-image__image">
                                        <div class="avatar__content"><img src="../../assets/images/user/user10.jpg"
                                                                          alt=""></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer"><span class='pull-right'> DEADLINE:
                                        September 20, 2015</span>
                                <span class="datetime"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <h4 class="task-header"><i class="fab fa-product-hunt"></i> Process</h4>
                <div class="drag-2 bg" id="2">
                    <div class="box">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-check">
                                    <div class="form-check m-l-10">
                                        <label class="form-check-label">
                                            <input class="form-check-input checkbox checkbox1" type="checkbox">
                                            <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-2 p-t-10"><span class='task-name'>Create Website</span>
                                </div>
                                <span class='task-desc'>Use HTML5, CSS3, jQuery,and Bootstrap 3</span>
                            </div>
                            <div class="card-footer">
                                <div class="progress shadow-style">
                                    <div class="progress-bar l-bg-green width-per-30" role="progressbar"
                                         aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div>Task Status</div>
                            </div>
                            <div class="card-footer">
                                <div class="avatar-image avatar-image--loaded mr-2">
                                    <div class="avatar avatar--md avatar-image__image">
                                        <div class="avatar__content"><img src="../../assets/images/user/user5.jpg"
                                                                          alt=""></div>
                                    </div>
                                </div>
                                <div class="avatar-image avatar-image--loaded mr-2">
                                    <div class="avatar avatar--md avatar-image__image">
                                        <div class="avatar__content"><img src="../../assets/images/user/user3.jpg"
                                                                          alt=""></div>
                                    </div>
                                </div>
                                <div class="avatar-image avatar-image--loaded mr-2">
                                    <div class="avatar avatar--md avatar-image__image">
                                        <div class="avatar__content"><img src="../../assets/images/user/user1.jpg"
                                                                          alt=""></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer"><span class='pull-right'> DEADLINE:
                                        September 20, 2015</span>
                                <span class="datetime"></span>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-check">
                                    <div class="form-check m-l-10">
                                        <label class="form-check-label">
                                            <input class="form-check-input checkbox checkbox1" type="checkbox">
                                            <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-2 p-t-10"><span class='task-name'>Create Website</span>
                                </div>
                                <span class='task-desc'>Use HTML5, CSS3, jQuery,and Bootstrap 3</span>
                            </div>
                            <div class="card-footer">
                                <div class="progress shadow-style">
                                    <div class="progress-bar l-bg-red width-per-58" role="progressbar"
                                         aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div>Task Status</div>
                            </div>
                            <div class="card-footer">
                                <div class="avatar-image avatar-image--loaded mr-2">
                                    <div class="avatar avatar--md avatar-image__image">
                                        <div class="avatar__content"><img src="../../assets/images/user/user11.jpg"
                                                                          alt=""></div>
                                    </div>
                                </div>
                                <div class="avatar-image avatar-image--loaded mr-2">
                                    <div class="avatar avatar--md avatar-image__image">
                                        <div class="avatar__content"><img src="../../assets/images/user/user9.jpg"
                                                                          alt=""></div>
                                    </div>
                                </div>
                                <div class="avatar-image avatar-image--loaded mr-2">
                                    <div class="avatar avatar--md avatar-image__image">
                                        <div class="avatar__content"><img src="../../assets/images/user/user6.jpg"
                                                                          alt=""></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer"><span class='pull-right'> DEADLINE:
                                        September 20, 2015</span>
                                <span class="datetime"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <h4 class="task-header"><i class="fas fa-search"></i> Review</h4>
                <div class="drag-3 bg" id="3">
                    <div class="box">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-check">
                                    <div class="form-check m-l-10">
                                        <label class="form-check-label">
                                            <input class="form-check-input checkbox checkbox1" type="checkbox">
                                            <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-2 p-t-10"><span class='task-name'>Create Website</span>
                                </div>
                                <span class='task-desc'>Use HTML5, CSS3, jQuery,and Bootstrap 3</span>
                            </div>
                            <div class="card-footer">
                                <div class="progress shadow-style">
                                    <div class="progress-bar l-bg-purple width-per-88" role="progressbar"
                                         aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div>Task Status</div>
                            </div>
                            <div class="card-footer">
                                <div class="avatar-image avatar-image--loaded mr-2">
                                    <div class="avatar avatar--md avatar-image__image">
                                        <div class="avatar__content"><img src="../../assets/images/user/user9.jpg"
                                                                          alt=""></div>
                                    </div>
                                </div>
                                <div class="avatar-image avatar-image--loaded mr-2">
                                    <div class="avatar avatar--md avatar-image__image">
                                        <div class="avatar__content"><img src="../../assets/images/user/user8.jpg"
                                                                          alt=""></div>
                                    </div>
                                </div>
                                <div class="avatar-image avatar-image--loaded mr-2">
                                    <div class="avatar avatar--md avatar-image__image">
                                        <div class="avatar__content"><img src="../../assets/images/user/user7.jpg"
                                                                          alt=""></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer"><span class='pull-right'> DEADLINE:
                                        September 20, 2015</span>
                                <span class="datetime"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <h4 class="task-header"><i class="fas fa-search"></i> Test</h4>
                <div class="drag-4 bg" id="4">
                    <div class="box">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-check">
                                    <div class="form-check m-l-10">
                                        <label class="form-check-label">
                                            <input class="form-check-input checkbox checkbox1" type="checkbox">
                                            <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-2 p-t-10"><span class='task-name'>Create Website</span>
                                </div>
                                <span class='task-desc'>Use HTML5, CSS3, jQuery,and Bootstrap 3</span>
                            </div>
                            <div class="card-footer">
                                <div class="progress shadow-style">
                                    <div class="progress-bar l-bg-red width-per-40" role="progressbar"
                                         aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div>Task Status</div>
                            </div>
                            <div class="card-footer">
                                <div class="avatar-image avatar-image--loaded mr-2">
                                    <div class="avatar avatar--md avatar-image__image">
                                        <div class="avatar__content"><img src="../../assets/images/user/user4.jpg"
                                                                          alt=""></div>
                                    </div>
                                </div>
                                <div class="avatar-image avatar-image--loaded mr-2">
                                    <div class="avatar avatar--md avatar-image__image">
                                        <div class="avatar__content"><img src="../../assets/images/user/user5.jpg"
                                                                          alt=""></div>
                                    </div>
                                </div>
                                <div class="avatar-image avatar-image--loaded mr-2">
                                    <div class="avatar avatar--md avatar-image__image">
                                        <div class="avatar__content"><img src="../../assets/images/user/user6.jpg"
                                                                          alt=""></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer"><span class='pull-right'> DEADLINE:
                                        September 20, 2015</span>
                                <span class="datetime"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <h4 class="task-header"><i class="far fa-thumbs-up"></i> Completed</h4>
                <div class="drag-5 bg done" id="5">
                    <div class="box box2">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-check">
                                    <div class="form-check m-l-10">
                                        <label class="form-check-label">
                                            <input class="form-check-input checkbox checkbox1" type="checkbox">
                                            <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-2 p-t-10"><span class='task-name'>Create Website</span>
                                </div>
                                <span class='task-desc'>Use HTML5, CSS3, jQuery,and Bootstrap 3</span>
                            </div>
                            <div class="card-footer">
                                <div class="progress shadow-style">
                                    <div class="progress-bar l-bg-cyan width-per-68" role="progressbar"
                                         aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div>Task Status</div>
                            </div>
                            <div class="card-footer">
                                <div class="avatar-image avatar-image--loaded mr-2">
                                    <div class="avatar avatar--md avatar-image__image">
                                        <div class="avatar__content"><img src="../../assets/images/user/user3.jpg"
                                                                          alt=""></div>
                                    </div>
                                </div>
                                <div class="avatar-image avatar-image--loaded mr-2">
                                    <div class="avatar avatar--md avatar-image__image">
                                        <div class="avatar__content"><img src="../../assets/images/user/user2.jpg"
                                                                          alt=""></div>
                                    </div>
                                </div>
                                <div class="avatar-image avatar-image--loaded mr-2">
                                    <div class="avatar avatar--md avatar-image__image">
                                        <div class="avatar__content"><img src="../../assets/images/user/user1.jpg"
                                                                          alt=""></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer"><span class='pull-right'> DEADLINE:
                                        September 20, 2015</span>
                                <span class="datetime"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Activity</strong></h2>
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
                        <div class=" pad move p-t-10">
                            <div class="col ">
                                <button type="button"
                                        class="btn btn-info btn-border-radius waves-effect toProg">Move
                                    Selected to Progress</button>
                                <button type="button"
                                        class="btn btn-success btn-border-radius waves-effect toProgress">Move
                                    all to Progress</button>
                            </div>
                            <div class="col">
                                <button type="button" class="btn btn-info btn-border-radius waves-effect toRev">Move
                                    Selected to Review</button>
                                <button type="button"
                                        class="btn btn-success btn-border-radius waves-effect toReview">Move
                                    all to Review</button>
                            </div>
                            <div class="col">
                                <button type="button"
                                        class="btn btn-info btn-border-radius waves-effect toRevi">Move
                                    Selected to Reviesed</button>
                                <button type="button"
                                        class="btn btn-success btn-border-radius waves-effect toRevised">Move
                                    all to Test</button>
                            </div>
                            <div class="col">
                                <button type="button" class="btn btn-info btn-border-radius waves-effect toDo">Move
                                    Selected to Review</button>
                                <button type="button"
                                        class="btn btn-success btn-border-radius waves-effect toDone">Move
                                    all to Done</button>
                            </div>
                            <div class="col">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection