@extends('light.layouts.app')
@section('title')
    Search CVs - {{config('app.dashboard')}}
@endsection
@section('content')
    @include('light/layouts/sidebar')
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="block-header">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Search CVs</h4>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">

                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="#" onclick="return false;" class="dropdown-toggle" data-toggle="dropdown"
                                       role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="#" onclick="return false;">Action</a>
                                        </li>
                                        <li>
                                            <a href="#" onclick="return false;">Another action</a>
                                        </li>
                                        <li>
                                            <a href="#" onclick="return false;">Something else here</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                    <div class="row w-100">
                                        <div class="col-sm-12">
                                            <table
                                                    class="table table-bordered table-striped table-hover js-basic-example dataTable"
                                                    id="DataTables_Table_0" role="grid"
                                                    aria-describedby="DataTables_Table_0_info">
                                                <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0"
                                                        aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                        aria-sort="ascending"
                                                        aria-label="Name: activate to sort column descending"
                                                        style="width: 190.65px;">Job title</th>
                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="DataTables_Table_0" rowspan="2" colspan="1"
                                                        aria-label="Position: activate to sort column ascending"
                                                        style="width: 307.263px;">Candidates</th>
                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="DataTables_Table_0" rowspan="3" colspan="1"
                                                        aria-label="Office: activate to sort column ascending"
                                                        style="width: 139.312px;">Age</th>
                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="DataTables_Table_0" rowspan="4" colspan="1"
                                                        aria-label="Age: activate to sort column ascending"
                                                        style="width: 62.9625px;">Posted by</th>
                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="DataTables_Table_0" rowspan="5" colspan="1"
                                                        aria-label="Start date: activate to sort column ascending"
                                                        style="width: 126.838px;">Job status</th>
                                                    <th class="sorting pe-0"
                                                        style="width: 94.175px;">Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">
                                                        <a href="#" class="jobTitle">Software Developer</a>
                                                        <p class="mb-0 jobInnTxt">
                                                            Karachi
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <div
                                                                class="status d-flex justify-content-evenly align-items-center">
                                                            <div class="statusMain">
                                                                <p>0</p>
                                                                <p class="mb-0">
                                                                    Active
                                                                </p>
                                                            </div>
                                                            <div class="statusMain">
                                                                <p>0</p>
                                                                <p class="mb-0">
                                                                    New
                                                                </p>
                                                            </div>
                                                            <div class="statusMain">
                                                                <p>0</p>
                                                                <p class="mb-0">
                                                                    Contacting
                                                                </p>
                                                            </div>
                                                            <div class="statusMain">
                                                                <p>0 of 2</p>
                                                                <p class="mb-0">
                                                                    Hired
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>n/a</td>
                                                    <td>n/a</td>
                                                    <td>
                                                        <div class="jobStatus">
                                                            <div class="dropdownMain py-2">
                                                                <div class="select">
                                                                    <span>Paused</span>
                                                                    <i class="fa fa-chevron-left"></i>
                                                                </div>
                                                                <input type="hidden" name="gender">
                                                                <ul class="dropdownMain-menu">
                                                                    <li id="open">Open</li>
                                                                    <li id="paused">Paused</li>
                                                                    <li id="closed">Closed</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <ul class="header-dropdown m-r--5">
                                                            <li class="dropdown text-center">
                                                                <a href="#" onclick="return false;"
                                                                   class="dropdown-toggle" data-toggle="dropdown"
                                                                   role="button" aria-haspopup="true"
                                                                   aria-expanded="false">
                                                                    <i class="material-icons">more_vert</i>
                                                                </a>
                                                                <ul class="dropdown-menu pull-right">
                                                                    <li>
                                                                        <a href="#"
                                                                           onclick="return false;">Modify</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" onclick="return false;">Another
                                                                            Modify</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"
                                                                           onclick="return false;">Something else
                                                                            here</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td class="sorting_1">
                                                        <a href="#" class="jobTitle">Software Developer</a>
                                                        <p class="mb-0 jobInnTxt">
                                                            Karachi
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <div
                                                                class="status d-flex justify-content-evenly align-items-center">
                                                            <div class="statusMain">
                                                                <p>0</p>
                                                                <p class="mb-0">
                                                                    Active
                                                                </p>
                                                            </div>
                                                            <div class="statusMain">
                                                                <p>0</p>
                                                                <p class="mb-0">
                                                                    New
                                                                </p>
                                                            </div>
                                                            <div class="statusMain">
                                                                <p>0</p>
                                                                <p class="mb-0">
                                                                    Contacting
                                                                </p>
                                                            </div>
                                                            <div class="statusMain">
                                                                <p>0 of 2</p>
                                                                <p class="mb-0">
                                                                    Hired
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>4 days</td>
                                                    <td>n/a</td>
                                                    <td>
                                                        <div class="jobStatus">
                                                            <div class="dropdownMain py-2">
                                                                <div class="select">
                                                                    <span>Open</span>
                                                                    <i class="fa fa-chevron-left"></i>
                                                                </div>
                                                                <input type="hidden" name="gender">
                                                                <ul class="dropdownMain-menu">
                                                                    <li id="open">Open</li>
                                                                    <li id="paused">Paused</li>
                                                                    <li id="closed">Closed</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <ul class="header-dropdown m-r--5">
                                                            <li class="dropdown text-center">
                                                                <a href="#" onclick="return false;"
                                                                   class="dropdown-toggle" data-toggle="dropdown"
                                                                   role="button" aria-haspopup="true"
                                                                   aria-expanded="false">
                                                                    <i class="material-icons">more_vert</i>
                                                                </a>
                                                                <ul class="dropdown-menu pull-right">
                                                                    <li>
                                                                        <a href="#"
                                                                           onclick="return false;">Modify</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" onclick="return false;">Another
                                                                            action</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"
                                                                           onclick="return false;">Something else
                                                                            here</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td class="sorting_1">
                                                        <a href="#" class="jobTitle">Software Developer</a>
                                                        <p class="mb-0 jobInnTxt">
                                                            Karachi
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <div
                                                                class="status d-flex justify-content-evenly align-items-center">
                                                            <div class="statusMain">
                                                                <p>0</p>
                                                                <p class="mb-0">
                                                                    Active
                                                                </p>
                                                            </div>
                                                            <div class="statusMain">
                                                                <p>0</p>
                                                                <p class="mb-0">
                                                                    New
                                                                </p>
                                                            </div>
                                                            <div class="statusMain">
                                                                <p>0</p>
                                                                <p class="mb-0">
                                                                    Contacting
                                                                </p>
                                                            </div>
                                                            <div class="statusMain">
                                                                <p>0 of 2</p>
                                                                <p class="mb-0">
                                                                    Hired
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>4 days</td>
                                                    <td>n/a</td>
                                                    <td>
                                                        <div class="jobStatus">
                                                            <div class="dropdownMain py-2">
                                                                <div class="select">
                                                                    <span>Open</span>
                                                                    <i class="fa fa-chevron-left"></i>
                                                                </div>
                                                                <input type="hidden" name="gender">
                                                                <ul class="dropdownMain-menu">
                                                                    <li id="open">Open</li>
                                                                    <li id="paused">Paused</li>
                                                                    <li id="closed">Closed</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <ul class="header-dropdown m-r--5">
                                                            <li class="dropdown text-center">
                                                                <a href="#" onclick="return false;"
                                                                   class="dropdown-toggle" data-toggle="dropdown"
                                                                   role="button" aria-haspopup="true"
                                                                   aria-expanded="false">
                                                                    <i class="material-icons">more_vert</i>
                                                                </a>
                                                                <ul class="dropdown-menu pull-right">
                                                                    <li>
                                                                        <a href="#"
                                                                           onclick="return false;">Action</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" onclick="return false;">Another
                                                                            action</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"
                                                                           onclick="return false;">Something else
                                                                            here</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td class="sorting_1">
                                                        <a href="#" class="jobTitle">Software Developer</a>
                                                        <p class="mb-0 jobInnTxt">
                                                            Karachi
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <div
                                                                class="status d-flex justify-content-evenly align-items-center">
                                                            <div class="statusMain">
                                                                <p>0</p>
                                                                <p class="mb-0">
                                                                    Active
                                                                </p>
                                                            </div>
                                                            <div class="statusMain">
                                                                <p>0</p>
                                                                <p class="mb-0">
                                                                    New
                                                                </p>
                                                            </div>
                                                            <div class="statusMain">
                                                                <p>0</p>
                                                                <p class="mb-0">
                                                                    Contacting
                                                                </p>
                                                            </div>
                                                            <div class="statusMain">
                                                                <p>0 of 2</p>
                                                                <p class="mb-0">
                                                                    Hired
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>4 days</td>
                                                    <td>n/a</td>
                                                    <td>
                                                        <div class="jobStatus">
                                                            <div class="dropdownMain py-2">
                                                                <div class="select">
                                                                    <span>Open</span>
                                                                    <i class="fa fa-chevron-left"></i>
                                                                </div>
                                                                <input type="hidden" name="gender">
                                                                <ul class="dropdownMain-menu">
                                                                    <li id="open">Open</li>
                                                                    <li id="paused">Paused</li>
                                                                    <li id="closed">Closed</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <ul class="header-dropdown m-r--5">
                                                            <li class="dropdown text-center">
                                                                <a href="#" onclick="return false;"
                                                                   class="dropdown-toggle" data-toggle="dropdown"
                                                                   role="button" aria-haspopup="true"
                                                                   aria-expanded="false">
                                                                    <i class="material-icons">more_vert</i>
                                                                </a>
                                                                <ul class="dropdown-menu pull-right">
                                                                    <li>
                                                                        <a href="#"
                                                                           onclick="return false;">Action</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" onclick="return false;">Another
                                                                            action</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"
                                                                           onclick="return false;">Something else
                                                                            here</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="secJob container">
            <div class="row">
                <div class="col-12 my-3">
                    <p class="para">
                        Jobs
                    </p>
                </div>
                <div class="col-12">
                    <div class="css-y408mp e37uo190">
                        <div class="css-kyg8or eu4oa1w0">
                            <span class=" css-1rizvun e6fjgti1">
                                <input placeholder="Search job titles..." class="searchInp bg-transparent">
                            </span>
                        </div>
                        <button type="button" class="css-b9ybcw e8ju0x51">
                            <svg xmlns="http://www.w3.org/2000/svg" focusable="false" role="img" fill="currentColor"
                                viewBox="0 0 24 24" class=" css-1qlrqyl eac13zx0">
                                <title>Search job titles...</title>
                                <path fill-rule="evenodd"
                                    d="M13.335 14.749a6.5 6.5 0 111.414-1.414l6.105 6.104a.5.5 0 010 .707l-.708.708a.5.5 0 01-.707 0l-6.104-6.105zM14 9.5a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="col-12 my-4">
                    <div class="row">
                        <div class="col-12 my-3">
                            <div class="job p-3 bg-white">
                                <div class="row">
                                    <div
                                        class="col-md-3 col-12 jobTxt my-auto d-flex justify-content-start align-items-center">
                                        <input type="checkbox" class="me-3">
                                        <div class="yxy ms-3">
                                            <a href="#" class="jobTitle">Software Developer</a>
                                            <p class="mb-0 jobInnTxt">
                                                Karachi
                                            </p>
                                            <p class="mb-0 jobInnTxt">
                                                Created: 27 October 2022
                                            </p>
                                        </div>
                                    </div>
                                    <div
                                        class="col-md-6 col-12 status my-auto d-flex justify-content-evenly text-center align-items-center">
                                        <div class="statusMain">
                                            <p>0</p>
                                            <p class="mb-0">
                                                Active
                                            </p>
                                        </div>
                                        <div class="statusMain">
                                            <p>0</p>
                                            <p class="mb-0">
                                                New
                                            </p>
                                        </div>
                                        <div class="statusMain">
                                            <p>0</p>
                                            <p class="mb-0">
                                                Contacting
                                            </p>
                                        </div>
                                        <div class="statusMain">
                                            <p>0 of 2</p>
                                            <p class="mb-0">
                                                Hired
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <div class="jobStatus">
                                            <span class="choose">Job status </span>
                                            <div class="dropdownMain py-2">
                                                <div class="select">
                                                    <span>Job status</span>
                                                    <i class="fa fa-chevron-left"></i>
                                                </div>
                                                <input type="hidden" name="gender">
                                                <ul class="dropdownMain-menu">
                                                    <li id="open">Open</li>
                                                    <li id="paused">Paused</li>
                                                    <li id="closed">Closed</li>
                                                </ul>
                                            </div>
                                            <span class="msg"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </section>
@endsection