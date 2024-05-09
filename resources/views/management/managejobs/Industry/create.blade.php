@extends('management.layouts.master')
@section('title')
    Industry Create - {{config('app.dashboard')}}
@endsection
@section('content')
    <style>
    .main_file {
        height: 100%!important;
    }</style>
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
                <form action="{{route('industry.store')}}"  method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card py-4">

                                <div class="header">
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="email_address1"> <strong> Industry Name </strong></label>
                                            <div class="form-line">
                                                <input value="{{old('industry_name') }}" type="text" id="erp_question_text"
                                                       class="form-control" name="industry_name"
                                                       placeholder="Industry Name" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my-2">
                                        <div class=" col-12">
                                            <label for="Quiz-type"><strong> Status </strong> </label>
                                            <select class="form-control select2" name="status" id="Quiz-type" data-placeholder="Select">
                                                <option {{ old('status') == 1 ? 'Selected' : '' }}  value= 1>Publish</option>
                                                <option {{ old('status') == 0 ? 'Selected' : '' }}  value= 0>draft</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="multiimage">
                                        <div class="row wow-remove my-2">
                                            <div class="col-12">
                                                <div class="main_container">
                                                    <label><strong> Image </strong> </label>
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
                                                               class="main_file w-100 h-100 form-control position-absolute  opacity-0" />
                                                        <div class="img-thumb">
                                                        </div>
                                                    </div>
                                                    <a class="btn mt-3  fw-normal remove_clone border-0 shadow-none">Remove</a>

                                                </div>
                                            </div>
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

    <div class="d-none  cloner" style="display:none;">
        <div class="row wow-remove">
            <div class="col">
                <div class="main_container m-3">
                    <div class="main imagebox position-relative rounded-3 overflow-hidden">
                        <div class="select_img d-flex justify-content-center align-items-center">
                            <div class="dz-message p-3 text-center">
                                <div class="drag-icon-cph">
                                    <i class="material-icons" style="font-size: 35px">touch_app</i>
                                </div>
                                <h3>Click to upload.</h3>

                            </div>
                        </div>
                        <input type="file" name="image"
                               class="main_file w-100 h-100 form-control position-absolute  opacity-0" />
                        <div class="img-thumb">
                        </div>
                    </div>
                    <a class="btn mt-3  fw-normal remove_clone border-0 shadow-none">Remove</a>
                </div>
            </div>

        </div>
 </div>



<script>
        $(document).ready(function () {
            var maxField = 10; //Input fields increment limitation
            var addButton = $('.add_clone'); //Add button selector
            var wrapper = $('.team_main'); //Input field wrapper
            var fieldHTML = jQuery('.cloner .row');
            var fieldHTML2 = '<a href="javascript:void(0);" class="remove_button btn btn-dark mx-1">Cancel</a>';
            var x = 1; //Initial field counter is 1

            //Once add button is clicked
            $(document).on('click','.add_clone',function () {
                var wow = $(this);
                //Check maximum number of input fields
                if (x < maxField) {
                    x++;
                    $(wow).parents('.multiimage').append($(fieldHTML).clone());
                }
            });
            //Once remove button is clicked
            $(document).on('click', '.remove_clone', function (e) {

                $(this).parents('.wow-remove').remove(); //Remove field html
                if($(".multiimage .row").length == 0 ){
                    $('.multiimage').append($(fieldHTML).clone());

                }

            });
        });

</script>
<script>

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#imageResult')
                        .attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        $(function () {
            $('#upload').on('change', function () {
                readURL(input);
            });
        });

        /*  ==========================================
            SHOW UPLOADED IMAGE NAME
        * ========================================== */
        var input = document.getElementById( 'upload' );
        var infoArea = document.getElementById( 'upload-label' );

        input.addEventListener( 'change', showFileName );
        function showFileName( event ) {
            var input = event.srcElement;
            var fileName = input.files[0].name;
            infoArea.textContent = 'File name: ' + fileName;
        }

</script>
@endsection

