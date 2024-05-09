@extends('frontend.layouts.master')
@section('title')
    Collections - {{config('app.name')}}
@endsection
@section('description')
    {{--Meta Description here --}}
@endsection
@section('keywords')
    {{-- Meta Keywords here --}}
@endsection
@section('content')

    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-md-12 px-3 shadow-sm">
                <h1 class="text-uppercase text-black m-0 p-3">Browse Your Coupon By Store</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-3">
            <div class="col-12">
                <div class="navSec">
                    <div class="items">
                        <div class="itm">
                            <a href="#a" class="mb-0 filteredLinks">A</a>
                        </div>
                        <div class="itm">
                            <a href="#b" class="mb-0 filteredLinks">b</a>
                        </div>
                        <div class="itm">
                            <a href="#c" class="mb-0 filteredLinks">c</a>
                        </div>
                        <div class="itm">
                            <a href="#d" class="mb-0 filteredLinks">d</a>
                        </div>
                        <div class="itm">
                            <a href="#e" class="mb-0 filteredLinks">e</a>
                        </div>
                        <div class="itm">
                            <a href="#f" class="mb-0 filteredLinks">f</a>
                        </div>
                        <div class="itm">
                            <a href="#g" class="mb-0 filteredLinks">g</a>
                        </div>
                        <div class="itm">
                            <a href="#h" class="mb-0 filteredLinks">h</a>
                        </div>
                        <div class="itm">
                            <a href="#i" class="mb-0 filteredLinks">i</a>
                        </div>
                        <div class="itm">
                            <a href="#j" class="mb-0 filteredLinks">j</a>
                        </div>
                        <div class="itm">
                            <a href="#k" class="mb-0 filteredLinks">k</a>
                        </div>
                        <div class="itm">
                            <a href="#l" class="mb-0 filteredLinks">l</a>
                        </div>
                        <div class="itm">
                            <a href="#m" class="mb-0 filteredLinks">m</a>
                        </div>
                        <div class="itm">
                            <a href="#n" class="mb-0 filteredLinks">n</a>
                        </div>
                        <div class="itm">
                            <a href="#o" class="mb-0 filteredLinks">o</a>
                        </div>
                        <div class="itm">
                            <a href="#p" class="mb-0 filteredLinks">p</a>
                        </div>
                        <div class="itm">
                            <a href="#q" class="mb-0 filteredLinks">q</a>
                        </div>
                        <div class="itm">
                            <a href="#r" class="mb-0 filteredLinks">r</a>
                        </div>
                        <div class="itm">
                            <a href="#s" class="mb-0 filteredLinks">s</a>
                        </div>
                        <div class="itm">
                            <a href="#t" class="mb-0 filteredLinks">t</a>
                        </div>
                        <div class="itm">
                            <a href="#u" class="mb-0 filteredLinks">u</a>
                        </div>
                        <div class="itm">
                            <a href="#v" class="mb-0 filteredLinks">v</a>
                        </div>
                        <div class="itm">
                            <a href="#w" class="mb-0 filteredLinks">w</a>
                        </div>
                        <div class="itm">
                            <a href="#x" class="mb-0 filteredLinks">x</a>
                        </div>
                        <div class="itm">
                            <a href="#y" class="mb-0 filteredLinks">y</a>
                        </div>
                        <div class="itm">
                            <a href="#z" class="mb-0 filteredLinks">z</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 my-3">
                <div class="row">
                    @if (!empty($stores))
                        <?php


                        foreach ( $stores as $post ) {


                            $name =  $post->title;
                            $char = $name[0];

                            if ( ! isset( $sorted[ $char ] ) ) {
                                $sorted[ $char ] = array();
                            }

                            $sorted[ $char ][] = $post; // Or, whatever you want to output.
                        }

                        // Sort alphabetically by character.
                        ksort( $sorted );
                        //
                        // Set attendees list which we return.
                        $attendees_list = '';

                        ?>
                        @foreach ( $sorted as $character => $attendees )
                            <div class="col-12 text-center my-2">
                                <div class="row" id="{{strtolower(ucfirst($character))}}">
                                    <div class="col-12">
                                        <div class="link mb-3">
                                            <div class="navSecLink d-flex justify-content-center align-items-center ">
                                                <div class="items">
                                                    <div class="itm">
                                                        <p class="mb-0 ">{{ucfirst($character)}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{--//Get first letter (A, B, C, or D and so on)--}}
                                    @foreach ( $attendees as $attendee )
                                        <div class="col-xl-2 col-lg-2 col-md-1half col-xs-4 col-4 px-1">
                                            <div class=" top-cards active rounded-4 brdMain overflow-hidden flex-column my-2 filteredItem" id="filteredItem">
                                                <div class="img h-75 w-100 overflow-hidden">
                                                    <img alt="{{$attendee->title}}" src="{{asset('images/media/'.$attendee->image)}}" class="w-100 h-100">
                                                </div>
                                                <div class="txt">
                                                    <p class="mb-0">{{$attendee->title}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>

{{--    <script>--}}
{{--        $('.filteredLinks').each(function(i, obj) {--}}
{{--            $(obj).attr("href", `#filteredLink${i}`);--}}
{{--            console.log($(this).attr("href"));--}}
{{--        });--}}
{{--        $('.filteredLinksActive').each(function(i, obj) {--}}
{{--            $(obj).attr("id", `filteredLink${i}`);--}}
{{--            console.log($(this).attr("id"));--}}
{{--        });--}}
{{--    </script>--}}

@endsection
