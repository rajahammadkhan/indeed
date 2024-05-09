@extends('frontend.layouts.master')
@section('title')
    Applied Job Form - {{ config('app.dashboard') }}
@endsection
@section('content')
    <style>
        .form-horizontal .control-label {

            text-align: left !important;
        }

        [type="checkbox"]:not(:checked),
        [type="checkbox"]:checked {
            position: absolute;
            opacity: 0;
            pointer-events: none;
        }

        .socialPP {
            gap: 12px;
        }

        .socialBtns {
            text-align: center;
            background: #79a739;
            color: white;
            border-radius: 12px;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            padding: 0.75em;
        }

        .socialBtns:hover i {
            color: white
        }

        .socialBtns i {
            font-size: 32px;
        }

        .main_file {
            height: 100% !important;
            top: 0;
            opacity: 0;
        }
    </style>
    <style>
        .form-horizontal .control-label {

            text-align: left !important;
        }

        [type="checkbox"]:not(:checked),
        [type="checkbox"]:checked {
            position: absolute;
            opacity: 0;
            pointer-events: none;
        }

        .socialPP {
            gap: 12px;
        }

        .socialBtns {
            text-align: center;
            background: #79a739;
            color: white;
            border-radius: 12px;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            padding: 0.75em;
        }

        .socialBtns:hover i {
            color: white
        }

        .socialBtns i {
            font-size: 32px;
        }

        .main_file {
            height: 100% !important;
            top: 0;
            opacity: 0;
        }
    </style>
    <style>
        .main_img {
            top: 0;
            left: 0;
            z-index: inherit;
            object-fit: contain;
            background: white;
        }

        .select_img {
            /* width: 300px; */
            height: 300px;
            background: #eee !important;
        }

        .select_img .select_btn {
            padding: 3px 7px;
            border-radius: 7px;
            background-color: #3b589d1c;
            color: #3b589d;
            font-size: 14px;
            font-weight: 600;
        }

        .main_file {
            top: 0;
            left: 0;
            z-index: 5;
            opacity: 0 !important;
            background: transparent;
        }


        .main {
            transition: .3s;
            border: 2px dotted #8f8f8f82;
            width: 100%;
        }

        .main:hover {
            border-radius: 7px;
            border: 2px dotted #3b589d;
            background-color: #3b589d0e;
        }

        .remove {
            display: none;
        }
    </style>
    <section class="bg-main">
        <div class="container ">
            <div class="row">
                <div class="col-lg-8 col-md-10 col-12 mx-auto">
                    <form action="{{ url('manage-summary/store') }}" method="POST">
                        @csrf
                        @method('post')
                        <fieldset id="account_information" class="">
                            <div class="form-group ms-0 accInfoStl topAccInfo w-100 bg-white text-dark p-5 my-4">
                                <legend> Edit Summary
                                </legend>
                            </div>
                            <div class="form-group ms-0 accInfoStl w-100 bg-white text-dark p-5 my-4">
                                <label for="email_address1">Summary </label>
                                <input type="hidden" name="id" value="" placeholder="" />
                                <textarea class="form-control" name="summary" placeholder="Enter Summary..."></textarea>
                            </div>
                            <div class="form-group ms-0 accInfoStl w-100 bg-white text-dark p-5 my-4">
                                <label for="email_address1">Status </label>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox" id="status" value="0" name="status">
                                        <span class="lever switch-col-light-green"></span>
                                    </label>
                                </div>
                            </div>

                            <div
                                class="form-group d-flex justify-content-between align-items-center ms-0 btnz w-100 bg-white text-dark p-5 my-4 accInfoStl ">
                                <button type="submit" class="btn btn-primary next sandc">Save</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script>
        $('#status').on('change', function() {
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
    </script>
@endsection
