@extends('frontend.layouts.master')
@section('title')
    Search Job - {{ config('app.dashboard') }}
@endsection
@section('content')
    {{-- @include('light/layouts/sidebar') --}}

    <main class="bg-main">
        <section class="findJob py-5 rec">
            <div class="container">
                {{--        <form action="./searchedJob.html"> --}}
                <div class="row">
                    <div class="col-12 my-3">
                        <h1 class="res">
                            Search <a href="#"> 23,326</a> Jobs
                        </h1>
                    </div>
                    <div class="col-md-5 my-md-0 my-2 col-12">
                        <label for="">Keyword / Job Title / Job Ref</label>
                        <input type="text" id="searchKeyword" class="form-control" placeholder="e.g. procurement">
                    </div>
                    {{-- <div class="col-md-5 my-md-0 my-2 col-12">
                        <label for="">Location</label>
                        <input type="text" class="form-control" placeholder="e.g. town or postcode">
                    </div> --}}

                    <div class="col-md-5 my-md-0 my-2 col-12 search-city-container">
                        <label for="">Location</label>
                        <input type="text" name="cities" id="cities" class="form-control mb-0"
                            placeholder="e.g. kent">
                        <div class="suggestions">
                            <ul></ul>
                        </div>
                    </div>

                    <div class="col-md-2 my-md-0 my-2 col-12">
                        <label class="choose py-0">Distance </label>
                        <div class="dropdownMain form-control">
                            <div class="select">
                                <span>up to 15 miles</span>
                                <i class="fa fa-chevron-left"></i>
                            </div>
                            <input type="hidden" name="gender">
                            <ul class="dropdownMain-menu">
                                <li id="open">up to 5 miles</li>
                                <li id="open">up to 10 miles</li>
                                <li id="open">up to 15 miles</li>
                                <li id="open">up to 20 miles</li>
                                <li id="open">up to 25 miles</li>
                                <li id="open">up to 30 miles</li>
                                <li id="open">up to 40 miles</li>
                                <li id="open">up to 45 miles</li>
                                <li id="open">up to 50+ miles</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 mt-md-3">
                        <div class="row">
                            <div class="col-lg-2 col-md-3 my-md-0 my-2 col-12">
                                <label for="">Salary Min</label>
                                <input type="text" class="form-control mb-0" placeholder="e.g. $30,000">
                            </div>
                            <div class="col-lg-2 col-md-3 my-md-0 my-2 col-12">
                                <label for="">Salary Max</label>
                                <input type="text" class="form-control mb-0" placeholder="e.g. $35,000">
                            </div>
                            <div class="col-lg-3 col-md-3 my-md-0 my-2 col-12">
                                <label class="choose py-0">Salary Type </label>
                                <div class="dropdownMain form-control">
                                    <div class="select">
                                        <span>Per annum</span>
                                        <i class="fa fa-chevron-left"></i>
                                    </div>
                                    <input type="hidden" name="gender">
                                    <ul class="dropdownMain-menu">
                                        <li id="open">Per hour</li>
                                        <li id="paused">Per day</li>
                                        <li id="closed">Per week</li>
                                        <li id="closed">Per month</li>
                                        <li id="closed">Per annum</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 my-md-0 my-2 col-12">
                                <label class="choose py-0">Posted in the </label>
                                <div class="dropdownMain form-control">
                                    <div class="select">
                                        <span>Last 14 days</span>
                                        <i class="fa fa-chevron-left"></i>
                                    </div>
                                    <input type="hidden" name="gender">
                                    <ul class="dropdownMain-menu">
                                        <li id="open">last 7 days</li>
                                        <li id="paused">last 14 days</li>
                                        <li id="closed">last 30 days</li>
                                        <li id="closed">last 2 months</li>
                                        <li id="closed">last 3 months</li>
                                        <li id="closed">last 6 months</li>
                                        <li id="closed">last 9 months</li>
                                        <li id="closed">last 12 months</li>
                                    </ul>
                                </div>
                            </div>
                            <div
                                class="col-lg-2 d-flex justify-content-center align-items-end col-md-3 my-md-0 my-3 col-12">
                                <a href="{{ url('searched-job') }}" class="w-100"><button type="submit"
                                        class="w-100 btn btn-primary">Find Jobs</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                {{--        </form> --}}
            </div>
        </section>

        <section class="popularJobs my-4">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="para">
                            Popular industries
                        </p>
                    </div>
                    <div class="col-12 my-3">
                        <div class="row">
                            @foreach($industry as $search)
                            <div class="col-lg-3 col-md-4 col-xs-6 col-12 my-3" data-filter-item data-filter-name="{{strtolower($search->industry_name)}}">
                                @if($search->image!= null)
                                    @php $image = '/'.$search->image @endphp
                                @else
                                    @php $image = 'galleryimage.png' @endphp
                                @endif
                                <img style="" src="{{asset('images/media'.'/'.$image)}}" alt="industries Images" class="indusImg">
                                <div class="contnt my-3">
                                    <a href="{{route('search-job.show',$search->id)}}" class=" fs-4" >{{$search->industry_name}}</a>
                                </div>
                            </div>
                            @endforeach
{{--                            <div class="col-lg-3 col-md-4 col-xs-6 col-12 my-3">--}}
{{--                                <img src="{{ asset('indeed/images/card2.jpg') }}" alt="industries Images" class="indusImg">--}}
{{--                                <div class="contnt my-3">--}}
{{--                                    <a href="#" class=" fs-4">Cleaning</a>--}}
{{--                                    <a href="#" class=" fs-5">All Cleaning Job Titles</a>--}}
{{--                                    <a href="#" class=" fs-5">By location</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-3 col-md-4 col-xs-6 col-12 my-3">--}}
{{--                                <img src="{{ asset('indeed/images/card3.jpg') }}" alt="industries Images"--}}
{{--                                    class="indusImg">--}}
{{--                                <div class="contnt my-3">--}}
{{--                                    <a href="#" class=" fs-4">Construction</a>--}}
{{--                                    <a href="#" class=" fs-5">All Construction Job Titles</a>--}}
{{--                                    <a href="#" class=" fs-5">By location</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-3 col-md-4 col-xs-6 col-12 my-3">--}}
{{--                                <img src="{{ asset('indeed/images/card4.jpg') }}" alt="industries Images"--}}
{{--                                    class="indusImg">--}}
{{--                                <div class="contnt my-3">--}}
{{--                                    <a href="#" class=" fs-4">Customer Services</a>--}}
{{--                                    <a href="#" class=" fs-5">All Customer Services Job Titles</a>--}}
{{--                                    <a href="#" class=" fs-5">By location</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-3 col-md-4 col-xs-6 col-12 my-3">--}}
{{--                                <img src="{{ asset('indeed/images/card5.jpg') }}" alt="industries Images"--}}
{{--                                    class="indusImg">--}}
{{--                                <div class="contnt my-3">--}}
{{--                                    <a href="#" class=" fs-4">Education</a>--}}
{{--                                    <a href="#" class=" fs-5">All Education Job Titles</a>--}}
{{--                                    <a href="#" class=" fs-5">By location</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-3 col-md-4 col-xs-6 col-12 my-3">--}}
{{--                                <img src="{{ asset('indeed/images/card6.jpg') }}" alt="industries Images"--}}
{{--                                    class="indusImg">--}}
{{--                                <div class="contnt my-3">--}}
{{--                                    <a href="#" class=" fs-4">Environmental</a>--}}
{{--                                    <a href="#" class=" fs-5">All Environmental Job Titles</a>--}}
{{--                                    <a href="#" class=" fs-5">By location</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-3 col-md-4 col-xs-6 col-12 my-3">--}}
{{--                                <img src="{{ asset('indeed/images/card7.jpg') }}" alt="industries Images"--}}
{{--                                    class="indusImg">--}}
{{--                                <div class="contnt my-3">--}}
{{--                                    <a href="#" class=" fs-4">Hospitality</a>--}}
{{--                                    <a href="#" class=" fs-5">All Hospitality Job Titles</a>--}}
{{--                                    <a href="#" class=" fs-5">By location</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-3 col-md-4 col-xs-6 col-12 my-3">--}}
{{--                                <img src="{{ asset('indeed/images/card8.jpg') }}" alt="industries Images"--}}
{{--                                    class="indusImg">--}}
{{--                                <div class="contnt my-3">--}}
{{--                                    <a href="#" class=" fs-4">IT</a>--}}
{{--                                    <a href="#" class=" fs-5">All IT Job Titles</a>--}}
{{--                                    <a href="#" class=" fs-5">By location</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-3 col-md-4 col-xs-6 col-12 my-3">--}}
{{--                                <img src="{{ asset('indeed/images/card9.jpg') }}" alt="industries Images"--}}
{{--                                    class="indusImg">--}}
{{--                                <div class="contnt my-3">--}}
{{--                                    <a href="#" class=" fs-4">IT</a>--}}
{{--                                    <a href="#" class=" fs-5">All IT Job Titles</a>--}}
{{--                                    <a href="#" class=" fs-5">By location</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-3 col-md-4 col-xs-6 col-12 my-3">--}}
{{--                                <img src="{{ asset('indeed/images/card10.jpg') }}" alt="industries Images"--}}
{{--                                    class="indusImg">--}}
{{--                                <div class="contnt my-3">--}}
{{--                                    <a href="#" class=" fs-4">Marketing</a>--}}
{{--                                    <a href="#" class=" fs-5">All Marketing Job Titles</a>--}}
{{--                                    <a href="#" class=" fs-5">By location</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-3 col-md-4 col-xs-6 col-12 my-3">--}}
{{--                                <img src="{{ asset('indeed/images/card11.jpg') }}" alt="industries Images"--}}
{{--                                    class="indusImg">--}}
{{--                                <div class="contnt my-3">--}}
{{--                                    <a href="#" class=" fs-4">Retail</a>--}}
{{--                                    <a href="#" class=" fs-5">All Retail Job Titles</a>--}}
{{--                                    <a href="#" class=" fs-5">By location</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-3 col-md-4 col-xs-6 col-12 my-3">--}}
{{--                                <img src="{{ asset('indeed/images/card12.jpg') }}" alt="industries Images"--}}
{{--                                    class="indusImg">--}}
{{--                                <div class="contnt my-3">--}}
{{--                                    <a href="#" class=" fs-4">Sales</a>--}}
{{--                                    <a href="#" class=" fs-5">All Sales Job Titles</a>--}}
{{--                                    <a href="#" class=" fs-5">By location</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
{{--    <script>--}}
{{--        $('#searchKeyword').on('keyup', function() {--}}
{{--        var searchVal = $(this).val().toLowerCase();--}}
{{--        var filterItems = $('[data-filter-item]');--}}
{{--    --}}
{{--        if ( searchVal != '' ) {--}}
{{--            filterItems.addClass('hidden');--}}
{{--            $('[data-filter-item][data-filter-name*="' + searchVal.toLowerCase() + '"]').removeClass('hidden');--}}
{{--        } else {--}}
{{--            filterItems.removeClass('hidden');--}}
{{--        }--}}
{{--    });--}}
{{--    </script>--}}
     <script>
        const input = document.querySelector('#cities');
        const suggestions = document.querySelector('.suggestions ul');

        const cities = ["Bath",
            "Birmingham",
            "Bradford",
            "Brighton & Hove",
            "Bristol",
            "Cambridge",
            "Canterbury",
            "Carlisle",
            "Chelmsford",
            "Chester",
            "Chichester",
            "Coventry",
            "Derby",
            "Durham",
            "Ely",
            "Exeter",
            "Gloucester",
            "Hereford",
            "Kingston upon Hull",
            "Lancaster",
            "Leeds",
            "Leicester",
            "Lichfield",
            "Lincoln",
            "Liverpool",
            "London",
            "Manchester",
            "Newcastle upon Tyne",
            "Norwich",
            "Nottingham",
            "Oxford",
            "Peterborough",
            "Plymouth",
            "Portsmouth",
            "Preston",
            "Ripon",
            "Salford",
            "Salisbury",
            "Sheffield",
            "Southampton",
            "St Albans",
            "Stoke-on-Trent",
            "Sunderland",
            "Truro",
            "Wakefield",
            "Wells",
            "Westminster",
            "Winchester",
            "Wolverhampton",
            "Worcester",
            "York",
            "Armagh",
            "Belfast",
            "Londonderry",
            "Lisburn",
            "Newry",
            "Aberdeen",
            "Dundee",
            "Edinburgh",
            "Glasgow",
            "Inverness",
            "Perth",
            "Stirling",
            "Bangor",
            "Cardiff",
            "Newport",
            "St. Asaph",
            "St. David's",
            "Swansea",
        ];

        function search(str) {
            let results = [];
            const val = str.toLowerCase();

            for (i = 0; i < cities.length; i++) {
                if (cities[i].toLowerCase().indexOf(val) > -1) {
                    results.push(cities[i]);
                }
            }

            return results;
        }

        function searchHandler(e) {
            const inputVal = e.currentTarget.value;
            let results = [];
            if (inputVal.length > 0) {
                results = search(inputVal);
            }
            showSuggestions(results, inputVal);
        }

        function showSuggestions(results, inputVal) {

            suggestions.innerHTML = '';

            if (results.length > 0) {
                for (i = 0; i < results.length; i++) {
                    let item = results[i];
                    // Highlights only the first match
                    // TODO: highlight all matches
                    const match = item.match(new RegExp(inputVal, 'i'));
                    item = item.replace(match[0], `<strong>${match[0]}</strong>`);
                    suggestions.innerHTML += `<li>${item}</li>`;
                }
                suggestions.classList.add('has-suggestions');
            } else {
                results = [];
                suggestions.innerHTML = '';
                suggestions.classList.remove('has-suggestions');
            }
        }

        function useSuggestion(e) {
            input.value = e.target.innerText;
            input.focus();
            suggestions.innerHTML = '';
            suggestions.classList.remove('has-suggestions');
        }

        input.addEventListener('keyup', searchHandler);
        suggestions.addEventListener('click', useSuggestion);
</script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script>
        $("#search").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $(".column-blog").filter(function() {
                $(this).toggle($(this).find('.parawf').text().toLowerCase().indexOf(value) > -1)
            });
        });
</script>
@endsection
