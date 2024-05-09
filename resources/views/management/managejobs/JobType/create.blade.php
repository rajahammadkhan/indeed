@extends('management.layouts.master')
@section('title')
    JobType Create - {{config('app.dashboard')}}
@endsection
@section('content')
    <div class="container-fluid px-4">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> JobType</h4>
                            </li>

                        </ul>
                    </div>
                </div>
                <form action="{{route('job-type.store')}}"  method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card py-4">

                                <div class="header">
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="email_address1"> <strong> Job Type </strong></label>
                                            <div class="form-line">
                                                <input value="{{old('job_name') }}" type="text" id="erp_question_text"
                                                       class="form-control" name="job_name"
                                                       placeholder="Job Type" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my-2">
                                        <div class=" col-12">
                                            <label for="email_address1">Status </label>
                                            <select class="form-control select2" name="status" id="Quiz-type" data-placeholder="Select">
                                                <option {{ old('status') == 1 ? 'Selected' : '' }}  value= 1>Publish</option>
                                                <option {{ old('status') == 0 ? 'Selected' : '' }}  value= 0>draft</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 my-3">
                                            <button type="submit" class="btn btn-primary  my-2 float-right">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
@endsection

