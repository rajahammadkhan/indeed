@extends('management.layouts.master')
@section('title')
    Location Edit - {{config('app.dashboard')}}
@endsection
@section('content')
    <div class="container-fluid px-4">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> Location</h4>
                            </li>

                        </ul>
                    </div>
                </div>
                <form action="{{route('location.update',$location->id)}}"  method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card py-4">

                                <div class="header">
                                    <div class="row">
                                        <div class=" col-12">
                                            <label for="email_address1">   <strong> Location Name </strong></label>
                                            <div class="form-line">
                                                <input value="{{$location->location_name}}" type="text" id="erp_question_text"
                                                       class="form-control" name="location_name"
                                                       placeholder="Location Name" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my-2">
                                        <div class="col-12">
                                            <label for="email_address1">Status </label>
                                            <select class="form-control select2" name="status" id="Quiz-type" data-placeholder="Select">
                                                <option {{$location->status == '1' ? 'selected' : ''}}   value= 1>Publish</option>
                                                <option {{$location->status == '0' ? 'selected' : ''}}  value= 0>draft</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row my-3">
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary  my-2 float-right">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
@endsection

