@extends('management.layouts.master')
@section('title')
    Industry Edit - {{config('app.dashboard')}}
@endsection
@section('content')
    <div class="container-fluid px-4">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> Industry</h4>
                            </li>

                        </ul>
                    </div>
                </div>
                <form action="{{route('industry.update',$industry->id)}}"  method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card py-4">

                                <div class="header">
                                    <div class="row">
                                        <div class=" col-12">
                                            <label for="email_address1">   <strong> Industry Name </strong></label>
                                            <div class="form-line">
                                                <input value="{{$industry->industry_name}}" type="text" id="erp_question_text"
                                                       class="form-control" name="industry_name"
                                                       placeholder="Industry Name" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my-2">
                                        <div class="col-12">
                                            <label for="email_address1">Status </label>
                                            <select class="form-control select2" name="status" id="Quiz-type" data-placeholder="Select">
                                                <option {{$industry->status == '1' ? 'selected' : ''}}   value= 1>Publish</option>
                                                <option {{$industry->status == '0' ? 'selected' : ''}}  value= 0>draft</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="multiimage">
                                        <div class="row wow-remove my-2">
                                            <div class="col-12">
                                                <div class="main_container">
                                                    <div class="main imagebox position-relative rounded-3 overflow-hidden">
                                                        <div class="select_img d-flex justify-content-center align-items-center">
                                                            <div class="dz-message p-3 text-center">
                                                                <div class="drag-icon-cph">
                                                                    <i class="material-icons" style="font-size: 35px">touch_app</i>
                                                                </div>
                                                                <h3>Click to upload.</h3>
                                                            </div>
                                                        </div>
                                                        <input type="file" name="image" accept="image/*"
                                                               class="main_file w-100 h-100 position-absolute  opacity-0"/>
                                                        <div class="img-thumb">
                                                            @if($media == null)
                                                            @else
                                                                <img class="main_img d-block w-100 h-100 position-absolute"
                                                                     src="{{asset('images/media'.'/'.$media->image)}}"
                                                                     alt="">
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <a data-id="{{$media->id}}"
                                                       class="btn mt-3  fw-normal remove_clone border-0 shadow-none">Remove</a>

                                                </div>
                                            </div>
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
                <script>


                    $(document).ready(function () {
                        var maxField = 10; //Input fields increment limitation
                        var wrapper = $('.team_main'); //Input field wrapper
                        var fieldHTML = jQuery('.cloner .row');
                        var fieldHTML2 = '<a href="javascript:void(0);" class="remove_button btn btn-dark mx-1">Cancel</a>';
                        var x = 1; //Initial field counter is 1


                        //Once remove button is clicked
                        $(document).on('click', '.remove_clone', function (e) {
                            $(this).parents('.wow-remove').find('img').remove(); //Remove field html
                            if ($(".multiimage .row").length == 0) {
                                $('.multiimage').append($(fieldHTML).clone());

                            }

                        });
                    });


                    $(document).ready(function () {


                        //Once remove button is clicked


                        if (window.File && window.FileList && window.FileReader) {
                            $(document).on("change", '.main_file', function (e) {

                                var img = $(this).parents(".imagebox").find(".img-thumb");
                                var btn = $(this);
                                var files = e.target.files,
                                    filesLength = files.length;
                                for (var i = 0; i < filesLength; i++) {
                                    btn.parents(".main_container").find(".remove").css({display: "flex"});
                                    var f = files[i];
                                    var fileReader = new FileReader();
                                    fileReader.onload = function (e) {
                                        var file = e.target;
                                        console.log(file);
                                        $(img).html(
                                            `<img class="main_img d-block w-100 h-100 position-absolute" src="${e.target.result}">`
                                        );
                                        // $(".remove").click(function () {
                                        //     this.style.display = "none";
                                        //     $(this).parents(".main_container").find(".main_img").remove();
                                        //     file.value = "";
                                        // });
                                    };
                                    fileReader.readAsDataURL(f);
                                }
                                console.log(files);
                            });
                        } else {
                            alert("Your browser doesn't support to File API");
                        }
                    });

                </script>

@endsection

