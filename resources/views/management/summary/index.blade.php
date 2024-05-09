@extends('management.layouts.master')
@section('title')
    Department - {{ config('app.dashboard') }}
@endsection
@section('content')
    <div class="container-fluid px-4">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> Summary</h4>
                            </li>
                        </ul>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="text-align: end">
                        <a href="{{ url('manage-summary/create') }}" type="button" class="btn btn-primary"> Add Summary
                        </a>
                    </div>
                </div>

                <div class="card">
                    <div class="header">
                        <div class="body table-responsive">
                            <table class="table" id="">
                                <thead>
                                    <tr>
                                        <th class="col-lg-8">Summary</th>
                                        <th class="col-lg-1 text-center">Status</th>
                                        <th class="col-lg-1 text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($summary as $item)
                                        <tr>
                                            {{-- @if ($item->status === '1') --}}
                                            <td>
                                                <p class="text-dark mb-0 text-truncate-3">
                                                    {{ $item->summary }}
                                                </p>
                                                
                                            </td>

                                            {{-- @endif --}}

                                            <td class="text-center">
                                                <div class="switch">
                                                    <label>
                                                        <input type="checkbox" {{ $item->status === '1' ? 'checked' : '' }}
                                                            value="{{ url('manage-summary/edit-status') }}/{{ $item->status === '1' ? '0' : '1' }}/{{ $item->id }}"
                                                            onchange="changeIsActive(event)">
                                                        <span class="lever switch-col-light-green"></span>
                                                    </label>
                                                </div>
                                            </td>

                                            <td class="text-center">  
                                                <div class="d-block">
                                                    
                                                    <button type="button" class="btn bg-red btn-circle" data-toggle="modal"
                                                        data-target="#basicModal{{ $item->id }}">   <i class="material-icons" href="">delete</i></button>
                                                    <div class="modal fade" id="basicModal{{ $item->id }}" tabindex="-1" role="dialog"
                                                        aria-labelledby="exampleModalLabel{{ $item->id }}" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel{{ $item->id }}">Are You Sure</h5>
                                                                    <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Do You Really Want To Delete This Summary?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <a href="{{ url('manage-summary/delete-summary') }}/{{ $item->id }}"
                                                                        class="btn btn-info waves-effect">Delete</a>
                                                                    <button type="button" class="btn btn-danger waves-effect"
                                                                        data-dismiss="modal">Cancel</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <a class="btn bg-blue btn-circle"
                                                    href="{{ url('manage-summary/edit-summary') }}/{{ $item->id }}">
                                                    <i class="material-icons" href="">edit</i>
                                                </a>
                                            </td>

                                        </tr>
                                        <script>
                                            function changeIsActive(e) {
                                                window.location.href = e.target.value;
                                            }
                                        </script>
                                    @endforeach
                                   
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
