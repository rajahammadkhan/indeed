@extends('frontend.layouts.master')
@section('title')
    Contact - {{config('app.name')}}
@endsection
@section('description')
    {{--Meta Description here --}}
@endsection
@section('keywords')
    {{--   Meta Keywords here --}}
@endsection
@section('content')
<style>
    /*.contact_main {*/
    /*    background-image: linear-gradient(180deg, #38c4ca 50%, white 50%);*/
    /*}*/

    .contact_main .form input {
        width: 100%;
        border: none;
        height: 60px;
        margin-bottom: 15px;
        padding-left: 25px;
        background-color: #ffffff;
        outline: none;
        color: #ffffff;
        -webkit-box-shadow: 0 0 7px 0 rgb(0 0 0 / 20%);
        box-shadow: 0 0 7px 0 rgb(0 0 0 / 20%);
    }
    .contact_main .form label{
        font-weight: 500;
        color: #777;
        margin: 5px 0;
    }
    .submit{
        font-weight: 500;
        font-size: 20px;
    }

</style>

<div class="container-fluid">
    <div class="row shadow-sm">
        <div class="col-md-12 py-3">
            <h1 class="text-uppercase text-black m-0">Contact Us</h1>
        </div>
    </div>
</div>
    <div class="container contact_main  px-md-5 mb-4">
        <div class="row">
            <div class="col-md-9 mx-auto py-5">
                <div class="form row bg-second pt-5  mx-0 shadow-sm rounded-4 text-center">
                    <h1 class="fs-1 fw-sm-bold text-black mb-2 text-uppercase" >
                        @if(request()->is('contact'))
                            NEED HELP WITH SOMETHING?
                        @else
                            Advertising Opportunity
                        @endif
                    </h1>
                    <p class="fs-6 fw-normal text-black">
                        Please Fill the form below and we'll get back to you as soon as possible. Thank You
                    </p>
                    <div class="col-lg-12 col-md-12 col-sm-12 p-md-5 p-3">
                        @include('frontend/layouts/error')
                        <form id="contact-form" action="{{url('post-contact')}}" method="post" enctype="multipart/form-data" action=""
                              class="atf-contact-form form">
                            @csrf
                            <div data-aos="fade-up">
                                <label for="name">Your Name:</label>
                                <input name="name" id="name" placeholder="Your Name"  class="text-dark rounded-pill" type="text" required   />
                            </div>
                            <div data-aos="fade-up">
                                <label for="email">E-Mail Address:</label>
                                <input name="email" id="email" placeholder="Your E-Mail Address" class="text-dark rounded-pill" type="email" required   />
                            </div>
                            <div data-aos="fade-up">
                                <label for="txt">Subject:</label>
                                <input name="subject" placeholder="Subject" id="txt" class="text-dark rounded-pill" type="text" required   />
                            </div>
                            <div data-aos="fade-up shadow-md">
                                <label for="msg">Message:</label>
                                <textarea name="message"  placeholder="Message" id="msg"
                                          class="p-4 form-control rounded-4 shadow border-0 border border-muted" required
                                          style="resize: none;" id="form-contact-message" rows="5" name="message"
                                ></textarea>
                            </div>
                            <div data-aos="fade-up" class="d-flex justify-content-center">
                                <button type="submit"
                                        class="btn read-more-cta px-5 py-2 fs-5 text-uppercase my-4 bg-signature">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
{{--                    <div class="col-lg-6 col-md-6 col-sm-12 mt-auto pe-0 contact-ig">--}}

{{--@if(request()->is('contact'))--}}
{{--                        <img src="{{asset('frontend/img/vector.png')}}" class="w-100" alt="Contact Us ">--}}

{{--                        @else--}}
{{--                            <img src="{{asset('frontend/img/advertising.png')}}" class="w-100" alt="Contact Us ">--}}

{{--                        @endif--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>



@endsection


<style>
    label{
        display: none !important;
    }
</style>
