@extends('frontend.layouts.master')
@section('title')
    {{ config('app.name') }} : 4Fresh
@endsection
@section('description')
    {{-- Meta Description here --}}
@endsection
@section('keywords')
    {{-- Meta Keywords here --}}
@endsection
@section('content')
    <style>
        .search-city-container {
            width: 400px;
            position: relative;
        }

        .search-city-container input,
        .search-city-container .suggestions {
            width: 95%;
        }

        @media (min-width: 786px) {

            .search-city-container input,
            .search-city-container .suggestions {
                width: 87%;
            }

        }

        .search-city-container input {
            background: rgba(255, 255, 255, 0.2);
            height: 60px;
            padding: 0 10px;
        }

        .search-city-container .suggestions {
            position: absolute;
            top: 60px;
            z-index: 1;
            background: white;
        }

        .search-city-container .suggestions ul {
            display: none;
            list-style-type: none;
            padding: 0;
            margin: 0;
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, .2);
            max-height: 200px;
            overflow-y: auto;
        }

        .search-city-container .suggestions ul.has-suggestions {
            display: block;
        }

        .search-city-container .suggestions ul li {
            padding: 10px;
            cursor: pointer;
            background: rgba(255, 255, 255, 0.2);
            color: #555
        }

        .search-city-container .suggestions ul li:hover {
            background-color: #94b961;
            color: white;
        }

        .search-city-container .suggestions input {
            border-bottom: 2px solid #94b961;
        }

        .search-city-container .suggestions ul::-webkit-scrollbar {
            background-color: #dbe7cf;
            width: 2px;
        }

        .search-city-container .suggestions ul::-webkit-scrollbar-thumb {
            background-color: #79a739;
            width: 2px;
        }

        button.viewallcities.btn.w-100.my-2 {
            background: #94b961;
            /* border-radius: 0px!important; */
            box-shadow: none;
            color: white;
        }
    </style>
    <section class="findJob py-5 rec">
        <div class="container">
            <form action="#">
                <div class="row">
                    <div class="col-md-6 col-12 my-3">
                        {{--                        <img src="{{asset('indeed/images/logofull.png')}}" alt="home" class="hom"> --}}
                        <h1 style="color:#79a739"><b>4Fresh</b></h1>
                    </div>
                    <div class="col-md-6 col-12 my-auto">
                        <h1 class="res text-end">
                            Search jobs in your area
                        </h1>
                        <h3 class="res fw-light text-end">
                            230,722 jobs from 10,418 companies
                        </h3>

                    </div>
                    <div class="col-12 mt-md-3">
                        <div class="row">
                            <div class="col-lg-2 col-md-3 my-md-0 my-2 col-12">
                                <label for="">Keyword</label>
                                <input type="text" class="form-control mb-0" placeholder="e.g. procurement">
                            </div>
                            <div class="col-lg-2 col-md-3 my-md-0 my-2 col-12 search-city-container">
                                <label for="">Location</label>
                                <input type="text" name="cities" id="cities" class="form-control mb-0"
                                    placeholder="e.g. kent">
                                <div class="suggestions">
                                    <ul></ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 my-md-0 my-2 col-12">
                                <label class="choose py-0">Within (Miles)</label>
                                <div class="dropdownMain form-control" tabindex="1">
                                    <div class="select">
                                        <span>up to 15 miles</span>
                                        <i class="fa fa-chevron-left"></i>
                                    </div>
                                    <input type="hidden" name="gender">
                                    <ul class="dropdownMain-menu" style="display: none;">
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
                            <div class="col-lg-3 col-md-3 my-md-0 my-2 col-12">
                                <label class="choose py-0">Submitted Since </label>
                                <div class="dropdownMain form-control">
                                    <div class="select">
                                        <span>last 24 hours</span>
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
                                <button type="submit" class="w-100 btn btn-primary">View Results</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <div class="body">
                        <ul class="nav nav-tabs tab-nav-right" role="tablist">
                            <li role="presentation" class="w-25 text-center">
                                <a href="#home" data-toggle="tab" class="active show"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="30" height="30" x="0"
                                        y="0" viewBox="0 0 107.5 107.5" xml:space="preserve">
                                        <style>
                                            .st0 {
                                                fill: #79a739
                                            }
                                        </style>
                                        <path class="st0" d="M39 40l-1 2 1 1h29l1-1-1-2H39z" />
                                        <path class="st0"
                                            d="M75 26h-9l-4-2h-3c-1-2-3-3-5-3s-4 1-5 3h-4l-3 2h-9c-3 0-5 2-5 5v51c0 3 2 5 5 5h42c2 0 5-2 5-5V31c0-3-2-5-5-5zm-29 2h5l2-2 1-1 1 1 2 2h5v3H46v-3zm29 54H33V31h8c0 2 2 4 4 4h17c2 0 4-2 4-4h9v51z" />
                                        <path class="st0"
                                            d="M68 50H39l-1 2 1 2h29l1-2-1-2zM68 61H39l-1 1 1 2h29l1-1-1-2zM68 71H39l-1 2 1 2h29l1-2-1-2z" />
                                    </svg>Jobs by Industry</a>
                            </li>
                            <li role="presentation" class="w-25 text-center">
                                <a href="#profile" data-toggle="tab"><svg xmlns="http://www.w3.org/2000/svg" width="30"
                                        height="30" viewBox="0 0 107.5 107.5">
                                        <path
                                            d="M54 21c-14 0-25 11-25 24 0 12 18 35 24 42h2c5-7 23-30 23-42 0-13-11-24-24-24zm11 24a11 11 0 11-22 0 11 11 0 0122 0z"
                                            fill="#79a739" />
                                    </svg>Jobs by Location</a>
                            </li>
                            <li role="presentation" class="w-25 text-center">
                                <a href="#messages" data-toggle="tab"><svg xmlns="http://www.w3.org/2000/svg" width="30"
                                        height="30" viewBox="0 0 107.5 107.5">
                                        <path
                                            d="M89 46l-1-1H62l-8-24h-1l-8 25H19l21 16-8 24v1h1l21-15 20 15h1v-1l-8-24 21-16h1z"
                                            fill="#79a739" />
                                    </svg>Popular Jobs</a>
                            </li>
                            <li role="presentation" class="w-25 text-center">
                                <a href="#setting" data-toggle="tab"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="30" height="30" x="0" y="0"
                                        viewBox="0 0 107.5 107.5" xml:space="preserve">
                                        <style>
                                            .st0 {
                                                fill: #79a739
                                            }
                                        </style>
                                        <path class="st0"
                                            d="M82 37H60V26c0-3-3-5-6-5H26c-3 0-6 2-6 5v55c0 3 3 6 6 6h56c3 0 5-3 5-6V43c0-3-2-6-5-6zM50 81h-7V70h-6v11H26V27h28v54h-4zm31 0H60V43h21v38z" />
                                        <path class="st0"
                                            d="M32 49h6v7h-6zM41 49h6v7h-6zM32 58h6v7h-6zM41 58h6v7h-6zM71 50h7v6h-7zM71 58h7v7h-7zM71 67h7v7h-7zM63 50h6v6h-6zM63 58h6v7h-6zM63 67h6v7h-6zM32 40h6v7h-6zM41 40h6v7h-6zM32 31h6v7h-6zM41 31h6v7h-6z" />
                                    </svg> Jobs by Department</a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active show" id="home">
                                <div class="row">
                                    @foreach($industry as $indus)
                                    <div class="col-md-3 col-sm-6 col-6">
                                        <a href="{{route('search-job.show',$indus->id)}}" class="d-block my-2">{{$indus->industry_name}}</a>
                                    </div>
                                    @endforeach
                                </div>

                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                <div class="row">
                                    @foreach($location as $locat)
                                    <div class="col-md-3 col-sm-6 col-6">
                                        <a href="#" class="d-block my-2">{{$locat->location_name}}</a>
                                    </div>
                                    @endforeach
                                    <div class="col-12">
                                        <div class="row">

                                            <div id="toggleableCities" class="w-100" style="display: none">

                                                @foreach($location as $locat)
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <a href="#" class="d-block my-2">{{$locat->location_name}}</a>
                                                </div>
                                                @endforeach
                                            </div>
                                            <div class="col-12">
                                                <button class="viewallcities btn w-100 my-2"
                                                    onclick="toggleAllCities()">View All Cities</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script>
                                const toggleAllCities = () => {
                                    // $(".viewallcities").html(($(".viewallcities").html() === "View All Cities" ? $(".viewallcities").html(
                                    //     "Close All Cities") : $(".viewallcities").html("View All Cities")));
                                    $('#toggleableCities').slideToggle('slow');
                                }
                            </script>
                            <div role="tabpanel" class="tab-pane fade" id="messages">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6 col-6">
                                        <a href="#" class="d-block my-2">Accountancy & Accounting</a>
                                        <a href="#" class="d-block my-2">Banking</a>
                                        <a href="#" class="d-block my-2">Customer Services</a>
                                        <a href="#" class="d-block my-2">Environmental</a>
                                        <a href="#" class="d-block my-2">IT</a>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-6 ">
                                        <a href="#" class="d-block my-2">Admin & Administration</a>
                                        <a href="#" class="d-block my-2">Charity & Volunteer</a>
                                        <a href="#" class="d-block my-2">Design</a>
                                        <a href="#" class="d-block my-2">Finance</a>
                                        <a href="#" class="d-block my-2">Legal</a>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-6 d-md-block d-none">
                                        <a href="#" class="d-block my-2">Automotive</a>
                                        <a href="#" class="d-block my-2">Cleaning</a>
                                        <a href="#" class="d-block my-2">Education</a>
                                        <a href="#" class="d-block my-2">Health Care</a>
                                        <a href="#" class="d-block my-2">Leisure & Sports</a>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-6 d-md-block d-none">
                                        <a href="#" class="d-block my-2">Aviation</a>
                                        <a href="#" class="d-block my-2">Banking</a>
                                        <a href="#" class="d-block my-2">Customer Services</a>
                                        <a href="#" class="d-block my-2">Environmental</a>
                                        <a href="#" class="d-block my-2">IT</a>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="setting">
                                <div class="row">
                                    @foreach($department as $depart)
                                    <div class="col-md-3 col-sm-6 col-6">
                                        <a href="#" class="d-block my-2">{{$depart->depart_name}}</a>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="bg-white py-5">
        <div class="container">
            <div class="row clearfix">
                <div class="col-12 mb-4 text-center">
                    <h2 class="text-dark">
                        Featured recruiters and employers
                    </h2>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="owl-carousel owl-theme homeSlider" id="withloop">
                        <div class="item">
                            <a href="#"> <img
                                    src="https://www.cv-library.co.uk/logo/featured/30ad80548fa94ee4b078eb136c05653b"
                                    alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#"> <img
                                    src="https://www.cv-library.co.uk/logo/featured/7bad7667eff54819afe14e7d53fc1321"
                                    alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#"> <img
                                    src="https://www.cv-library.co.uk/logo/featured/1d6fa769bfb348a7b991639943021611"
                                    alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#"> <img
                                    src="https://www.cv-library.co.uk/logo/featured/f47bb5d4903f4d31a920e58b11d3bb10"
                                    alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#"> <img
                                    src="https://www.cv-library.co.uk/logo/featured/b76aee7c42724a1cb8c41fe3f49107b5"
                                    alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#"> <img
                                    src="https://www.cv-library.co.uk/logo/featured/52b629344aea415bb88da945657895c2"
                                    alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#"> <img
                                    src="https://www.cv-library.co.uk/logo/featured/3a9447671e344183a7f68a667b937996"
                                    alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#"> <img
                                    src="https://www.cv-library.co.uk/logo/featured/2b97a2fecb5143dea9d5037361634d4c"
                                    alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6 text-center col-12 my-3 ">
                    <div class="row w-100 h-100 mx-auto bg-white p-3 mainbdr">
                        <div class="col-12 my-auto">
                            <img src="
                            https://www.cv-library.co.uk/assets/images/eotm-pertemps-cae12ed3e5d67b8e32c4e0942adeaf7a0b98a2168218f47c25fc55dab596f98a.png"
                                alt="" width="160" height="70" class="mb-4">
                        </div>
                        <div class="col-12 text-center">
                            <h4 class="text-dark my-3 ">
                                Pertemps are recruiting!

                            </h4>
                            <h6 class="text-dark fw-light">
                                We've got your next job.



                            </h6>
                            <a href="https://www.pertemps.co.uk/" class="mt-4 btn btn-primary">Click to view our vacancies</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 text-center col-12 my-3 ">
                    <div class="row w-100 h-100 mx-auto bg-white p-3 mainbdr">
                        <div class="col-12 my-auto">
                            <img src="
                            https://www.cv-library.co.uk/assets/images/eotm-morrisons-c3e1b03cb260bf7d5ef34124b42fa3ee427691da61b94873dab5e3d4d2a2d059.png"
                                alt="" width="160" height="70" class="mb-4">
                        </div>
                        <div class="col-12 text-center">
                            <h4 class="text-dark my-3 ">
                                Employer of the month

                            </h4>
                            <h6 class="text-dark fw-light">
                                We're hiring this Christmas in our Manufacturing and Logistics teams


                            </h6>
                            <a href="#" class="mt-4 btn btn-primary">Apply to #MakeGoodThingsHappen</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-main py-5">
        <div class="container">
            <div class="row text-center align-items-center justify-content-center">
                <h2 class="text-dark my-3">
                    The UK's favourite job board

                </h2>
                <h5 class="fw-light text-dark my-4">
                    CV-Library is the UK's largest independent job board, with 230,722 live vacancies from all
                    industries nationwide available to search! Register your CV to start applying today. With simple
                    search tools and instant job matches delivered to your inbox, it's never been easier to land a new
                    job with CV-Library.


                </h5>

            </div>
            <div class="row my-4">
                <div class="col-md-4 col-12 my-3">

                    <div class="card d-flex justify-content-between h-100">
                        <div class="header pb-0">
                            <img style="" src="https://www.cv-library.co.uk/assets/images/cvlibrary-uk/home/module-job-alerts-c771a40a64b8a3863d86b2dcfa63530ff263517b9a14c2f228d4b393ba1e3cfc.png"  alt="" class="crdImgMain">
                        </div>
                        <div class="body h-50">
                            <h4 class="text-dark mb-4 crdHdng">
                                Job Alerts
                            </h4>
                            <h6 class="text-dark fw-light">
                                Get the latest jobs sent directly to your inbox with CV-Library.co.uk's Job Alerts.
                            </h6>
                            <a href="#" class="mt-4 btn btn-primary">Get Job Alerts</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-12 my-3">

                    <div class="card d-flex justify-content-between h-100">
                        <div class="header pb-0">
                            <img src="https://www.cv-library.co.uk/assets/images/cvlibrary-uk/home/module-company-az-399468657cbbfa919f627a8e8f245f872963baf761cb6da5d7e6c552a79217e8.png"
                                alt="" class="crdImgMain">
                        </div>
                        <div class="body h-50">
                            <h4 class="text-dark mb-4 crdHdng">

                                Company A-Z

                            </h4>
                            <h6 class="text-dark fw-light">

                                Search our directory of employers and recruitment agencies by popularity, sector and
                                location.


                            </h6>
                            <a href="#" class="mt-4 btn btn-primary">Search Companies</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12 my-3">

                    <div class="card d-flex justify-content-between h-100">
                        <div class="header pb-0">
                            <img src="https://www.cv-library.co.uk/assets/images/cvlibrary-uk/home/module-career-advice-6d6a5d5283927239eb7ad7233d1382f21d964b8c76822badba735c2792f504c0.png"
                                alt="" class="crdImgMain">
                        </div>
                        <div class="body h-50">
                            <h4 class="text-dark mb-4 crdHdng">

                                Career Advice

                            </h4>
                            <h6 class="text-dark fw-light">

                                Career tips, including salary guides, tax calculators and interview advice, helping you
                                get your next job.

                            </h6>
                            <a href="#" class="mt-4 btn btn-primary">Read our Advice</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="hp-register" class="container">
        <div class="row">
            <div class="col-md-8 col-12">
                <div class="register--left">
                    <h4 class="hp-title">Register your CV</h4>
                    <h6 class="hp-copy fw-light">Upload your CV today to be headhunted by <a href="#"
                            class="text-light">10,418 companies</a>, and
                        apply to <a href="#" class="text-light">230,722 jobs</a> with 1-click apply.</h6>
                </div>
                <a href="#" class="btn btn-success mt-3">Register now</a>
            </div>
            <div class="col-md-4 col-0 d-md-block d-none">
                <img class="register--right" alt="" width="280" height="158"
                    src="//cv-library.co.uk/assets/images/home/hp-register-barney-5217b18608996b105a3fc9ee0377ef7416bcaea53808cedd7862dd036ec2c7b1.png">

            </div>
        </div>
    </section>
    <section class="container-fluid px-0 bg-main">
        <div class="row px-5">
            <div class="col-md-8 col-12 my-auto">
                <div class="register--left">
                    <h4 class="hp-title text-dark">Recruiting?
                    </h4>
                    <h6 class="hp-copy fw-light text-dark">Advertise your jobs to millions of monthly users and search 18
                        million CVs in our database.

                    </h6>
                </div>
                <a href="{{ url('recruiting') }}" class="btn btn-success mt-3">Start Recruiting Now</a>
            </div>
            <div class="col-md-4 col-0 d-md-block d-none">
                <img class=" h-100"
                    src="https://www.cv-library.co.uk/assets/images/home/find-your-perfect-candidate-6dc54e959f9430905b05d79ec145fe4a5f651125cbd085988b7f8e0481d5f192.svg">

            </div>
        </div>
    </section>
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
@endsection
