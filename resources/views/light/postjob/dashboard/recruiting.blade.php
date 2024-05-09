@extends('light.layouts.app')
@section('title')
    Modify Job - {{config('app.dashboard')}}
@endsection
@section('content')
    @include('light/layouts/sidebar')
    <section class="content">
        <section class="findJob py-5 mb-5 rec">
            <div class="container">
                <div class="row">
                    <div class="col-12 my-3">
                        <h1 class="res text-center">
                            Search our CV Database & Advertise Jobs today
                        </h1>
                    </div>
                    <div class="col-12">
                        <div class="row justify-content-center">
                            <div class="col-sm-6 col-12  my-md-auto my-3 ms-auto">
                                <div class="row w-100 mx-auto bg-main rounded-2 text-dark p-4 crdTrans shadow">
                                    <div class="col-md-9 col-8">
                                        <div class="">
                                            <h2 class="text-dark">
                                                Advertise Jobs
                                            </h2>
                                            <p class="text-dark my-3">
                                                Post your job for 28 days and receive applications straight to your inbox
                                            </p>
                                            <p class="text-dark fw-bold">
                                                Advertise to 18 million candidates
                                            </p>
                                            <button class="btn btn-primary">
                                                Advertise now
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-4">
                                        <div class="mainCrdTopCrv position-absolute p-2 text-center">
                                            <h6 class="text-dark"><strike>£149</strike></h6>
                                            <h3 class="text-dark">£75</h3>
                                            <h6 class="text-dark">+VAT</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-12  my-md-auto my-3 me-auto">
                                <div class="row w-100 mx-auto bg-main rounded-2 text-dark p-4 crdTrans shadow">
                                    <div class="col-md-9 col-8">
                                        <div class="">
                                            <h2 class="text-dark">
                                                Advertise Jobs
                                            </h2>
                                            <p class="text-dark my-3">
                                                Post your job for 28 days and receive applications straight to your inbox
                                            </p>
                                            <p class="text-dark fw-bold">
                                                Advertise to 18 million candidates
                                            </p>
                                            <button class="btn btn-primary">
                                                Advertise now
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-4">
                                        <div class="mainCrdTopCrv position-absolute p-2 text-center">
                                            <h6 class="text-dark"><strike>£299</strike></h6>
                                            <h3 class="text-dark">£199</h3>
                                            <h6 class="text-dark">+VAT</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-12 mx-auto my-md-5 my-3">
                        <div class="row bg-main mx-auto rounded-2 w-100 p-3">
                            <div class="col-md-8 col-12">
                                <div class="help">
                                    <h4 class="text-dark">
                                        For Hiring Packages, call 01252 810995
                                    </h4>
                                    <h6 class="text-dark fw-light">
                                        We'll build a customised hiring solution, tailored to your needs


                                    </h6>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 my-auto text-end">
                                <button class="btn btn-success">Enquire now</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mx-auto my-md-3 my-3">
                        <div class="row w-100 mx-auto">
                            <div class="col-md-2 col-sm-4 col-6 my-md-1 my-3">
                                <img src="https://www.cv-library.co.uk/assets/images/cvdb/recruiter-logo-hsamuel-02b5226371360e0275d4f13f83ece8815e7bdf8ede1490d65d422df82806624c.png"
                                     alt="img" class="invImg w-100">
                            </div>
                            <div class="col-md-2 col-sm-4 col-6 my-md-1 my-3">
                                <img src="https://www.cv-library.co.uk/assets/images/cvdb/recruiter-logo-ageuk-a53ca9638ac354bf92b2b232fa152d02c27da7f7039d77f7b0c9a2adf8cf3e76.png"
                                     alt="img" class="invImg w-100">
                            </div>
                            <div class="col-md-2 col-sm-4 col-6 my-md-1 my-3">
                                <img src="https://www.cv-library.co.uk/assets/images/cvdb/recruiter-logo-santander-f659555a421297ba335663130e4ad48ba3135e38001f02b02f2d592de2d009af.png"
                                     alt="img" class="invImg w-100">
                            </div>
                            <div class="col-md-2 col-sm-4 col-6 my-md-1 my-3">
                                <img src="https://www.cv-library.co.uk/assets/images/cvdb/recruiter-logo-claires-d511000b291ac0c5ead0a9b0c95763753c2e0c1a21caf9dd6090256ca37e02b2.png"
                                     alt="img" class="invImg w-100">
                            </div>
                            <div class="col-md-2 col-sm-4 col-6 my-md-1 my-3">
                                <img src="https://www.cv-library.co.uk/assets/images/cvdb/recruiter-logo-hsbc-23d74e1234f9f1c4fafdd6badfd35e7f79f4173928a182c88e29a92623cd8c11.png"
                                     alt="img" class="invImg w-100">
                            </div>
                            <div class="col-md-2 col-sm-4 col-6 my-md-1 my-3">
                                <img src="https://www.cv-library.co.uk/assets/images/cvdb/recruiter-logo-lloyds-a52ba46bbc81f0889ad22cf128ee03d1fa30e237a17647d3a98563f8679492d9.png"
                                     alt="img" class="invImg w-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container my-5 py-5">
            <div class="row">
                <div class="col-md-6 col-12 text-center">
                    <h2 class="text-dark">
                        How many candidates on our database match your criteria?
                    </h2>
                    <div class="downs my-4">

                        <div class="dropdownMain h-auto py-2">
                            <div class="select">
                                <span>All Industries</span>
                                <i class="fa fa-chevron-left"></i>
                            </div>
                            <input type="hidden" name="gender">
                            <ul class="dropdownMain-menu">
                                <li id="Accountancy">Accountancy</li>
                                <li id="Advertisment">Advertisment</li>
                            </ul>
                        </div>
                        <div class="dropdownMain h-auto py-2">
                            <div class="select">
                                <span>All Locations</span>
                                <i class="fa fa-chevron-left"></i>
                            </div>
                            <input type="hidden" name="gender">
                            <ul class="dropdownMain-menu">
                                <li id="England">England</li>
                                <li id="London">London</li>
                            </ul>
                        </div>
                    </div>
                    <h2 class="text-dark">
                        18,220,807 candidates in all regions
                    </h2>
                    <h5 class="fw-light text-dark">
                        477,203 have updated their CV in the last 2 months
                    </h5>

                </div>
                <div class="col-md-6 col-12 text-center">
                    <h2 class=" text-dark">
                        Best rating in the industry
                    </h2>
                    <div class="sect mx-auto my-4 text-start" style="max-width: 254px;">
                        <svg role="img" aria-labelledby="trustpilotLogo" viewBox="0 0 126 31"
                             xmlns="http://www.w3.org/2000/svg" style="width: 100%;max-width: 140px; left: 0; top: 0;">
                            <title id="trustpilotLogo">Trustpilot</title>
                            <path class="tp-logo__text"
                                  d="M33.074774 11.07005H45.81806v2.364196h-5.010656v13.290316h-2.755306V13.434246h-4.988435V11.07005h.01111zm12.198892 4.319629h2.355341v2.187433h.04444c.077771-.309334.222203-.60762.433295-.894859.211092-.287239.466624-.56343.766597-.79543.299972-.243048.633276-.430858.999909-.585525.366633-.14362.744377-.220953 1.12212-.220953.288863 0 .499955.011047.611056.022095.1111.011048.222202.033143.344413.04419v2.408387c-.177762-.033143-.355523-.055238-.544395-.077333-.188872-.022096-.366633-.033143-.544395-.033143-.422184 0-.822148.08838-1.199891.254096-.377744.165714-.699936.41981-.977689.740192-.277753.331429-.499955.729144-.666606 1.21524-.166652.486097-.244422 1.03848-.244422 1.668195v5.39125h-2.510883V15.38968h.01111zm18.220567 11.334883H61.02779v-1.579813h-.04444c-.311083.574477-.766597 1.02743-1.377653 1.369908-.611055.342477-1.233221.51924-1.866497.51924-1.499864 0-2.588654-.364573-3.25526-1.104765-.666606-.740193-.999909-1.856005-.999909-3.347437V15.38968h2.510883v6.948968c0 .994288.188872 1.701337.577725 2.1101.377744.408763.922139.618668 1.610965.618668.533285 0 .96658-.077333 1.322102-.243048.355524-.165714.644386-.37562.855478-.65181.222202-.265144.377744-.596574.477735-.972194.09999-.37562.144431-.784382.144431-1.226288v-6.573349h2.510883v11.323836zm4.27739-3.634675c.07777.729144.355522 1.237336.833257 1.535623.488844.287238 1.06657.441905 1.744286.441905.233312 0 .499954-.022095.799927-.055238.299973-.033143.588836-.110476.844368-.209905.266642-.099429.477734-.254096.655496-.452954.166652-.198857.244422-.452953.233312-.773335-.01111-.320381-.133321-.585525-.355523-.784382-.222202-.209906-.499955-.364573-.844368-.497144-.344413-.121525-.733267-.232-1.17767-.320382-.444405-.088381-.888809-.18781-1.344323-.287239-.466624-.099429-.922138-.232-1.355432-.37562-.433294-.14362-.822148-.342477-1.166561-.596573-.344413-.243048-.622166-.56343-.822148-.950097-.211092-.386668-.311083-.861716-.311083-1.436194 0-.618668.155542-1.12686.455515-1.54667.299972-.41981.688826-.75124 1.14434-1.005336.466624-.254095.97769-.430858 1.544304-.541334.566615-.099429 1.11101-.154667 1.622075-.154667.588836 0 1.15545.066286 1.688736.18781.533285.121524 1.02213.320381 1.455423.60762.433294.276191.788817.640764 1.07768 1.08267.288863.441905.466624.98324.544395 1.612955h-2.621984c-.122211-.596572-.388854-1.005335-.822148-1.204193-.433294-.209905-.933248-.309334-1.488753-.309334-.177762 0-.388854.011048-.633276.04419-.244422.033144-.466624.088382-.688826.165715-.211092.077334-.388854.198858-.544395.353525-.144432.154667-.222203.353525-.222203.60762 0 .309335.111101.552383.322193.740193.211092.18781.488845.342477.833258.475048.344413.121524.733267.232 1.177671.320382.444404.088381.899918.18781 1.366542.287239.455515.099429.899919.232 1.344323.37562.444404.14362.833257.342477 1.17767.596573.344414.254095.622166.56343.833258.93905.211092.37562.322193.850668.322193 1.40305 0 .673906-.155541 1.237336-.466624 1.712385-.311083.464001-.711047.850669-1.199891 1.137907-.488845.28724-1.04435.508192-1.644295.640764-.599946.132572-1.199891.198857-1.788727.198857-.722156 0-1.388762-.077333-1.999818-.243048-.611056-.165714-1.14434-.408763-1.588745-.729144-.444404-.33143-.799927-.740192-1.05546-1.226289-.255532-.486096-.388853-1.071621-.411073-1.745528h2.533103v-.022095zm8.288135-7.700208h1.899828v-3.402675h2.510883v3.402675h2.26646v1.867052h-2.26646v6.054109c0 .265143.01111.486096.03333.684954.02222.18781.07777.353524.155542.486096.07777.132572.199981.232.366633.298287.166651.066285.377743.099428.666606.099428.177762 0 .355523 0 .533285-.011047.177762-.011048.355523-.033143.533285-.077334v1.933338c-.277753.033143-.555505.055238-.811038.088381-.266642.033143-.533285.04419-.811037.04419-.666606 0-1.199891-.066285-1.599855-.18781-.399963-.121523-.722156-.309333-.944358-.552381-.233313-.243049-.377744-.541335-.466625-.905907-.07777-.364573-.13332-.784383-.144431-1.248384v-6.683825h-1.899827v-1.889147h-.02222zm8.454788 0h2.377562V16.9253h.04444c.355523-.662858.844368-1.12686 1.477644-1.414098.633276-.287239 1.310992-.430858 2.055369-.430858.899918 0 1.677625.154667 2.344231.475048.666606.309335 1.222111.740193 1.666515 1.292575.444405.552382.766597 1.193145.9888 1.92229.222202.729145.333303 1.513527.333303 2.3421 0 .762288-.099991 1.50248-.299973 2.20953-.199982.718096-.499955 1.347812-.899918 1.900194-.399964.552383-.911029.98324-1.533194 1.31467-.622166.33143-1.344323.497144-2.18869.497144-.366634 0-.733267-.033143-1.0999-.099429-.366634-.066286-.722157-.176762-1.05546-.320381-.333303-.14362-.655496-.33143-.933249-.56343-.288863-.232-.522175-.497144-.722157-.79543h-.04444v5.656393h-2.510883V15.38968zm8.77698 5.67849c0-.508193-.06666-1.005337-.199981-1.491433-.133321-.486096-.333303-.905907-.599946-1.281527-.266642-.37562-.599945-.673906-.988799-.894859-.399963-.220953-.855478-.342477-1.366542-.342477-1.05546 0-1.855387.364572-2.388672 1.093717-.533285.729144-.799928 1.701337-.799928 2.916578 0 .574478.066661 1.104764.211092 1.59086.144432.486097.344414.905908.633276 1.259432.277753.353525.611056.629716.99991.828574.388853.209905.844367.309334 1.355432.309334.577725 0 1.05546-.121524 1.455423-.353525.399964-.232.722157-.541335.97769-.905907.255531-.37562.444403-.79543.555504-1.270479.099991-.475049.155542-.961145.155542-1.458289zm4.432931-9.99812h2.510883v2.364197h-2.510883V11.07005zm0 4.31963h2.510883v11.334883h-2.510883V15.389679zm4.755124-4.31963h2.510883v15.654513h-2.510883V11.07005zm10.210184 15.963847c-.911029 0-1.722066-.154667-2.433113-.452953-.711046-.298287-1.310992-.718097-1.810946-1.237337-.488845-.530287-.866588-1.160002-1.12212-1.889147-.255533-.729144-.388854-1.535622-.388854-2.408386 0-.861716.133321-1.657147.388853-2.386291.255533-.729145.633276-1.35886 1.12212-1.889148.488845-.530287 1.0999-.93905 1.810947-1.237336.711047-.298286 1.522084-.452953 2.433113-.452953.911028 0 1.722066.154667 2.433112.452953.711047.298287 1.310992.718097 1.810947 1.237336.488844.530287.866588 1.160003 1.12212 1.889148.255532.729144.388854 1.524575.388854 2.38629 0 .872765-.133322 1.679243-.388854 2.408387-.255532.729145-.633276 1.35886-1.12212 1.889147-.488845.530287-1.0999.93905-1.810947 1.237337-.711046.298286-1.522084.452953-2.433112.452953zm0-1.977528c.555505 0 1.04435-.121524 1.455423-.353525.411074-.232.744377-.541335 1.01102-.916954.266642-.37562.455513-.806478.588835-1.281527.12221-.475049.188872-.961145.188872-1.45829 0-.486096-.066661-.961144-.188872-1.44724-.122211-.486097-.322193-.905907-.588836-1.281527-.266642-.37562-.599945-.673907-1.011019-.905907-.411074-.232-.899918-.353525-1.455423-.353525-.555505 0-1.04435.121524-1.455424.353525-.411073.232-.744376.541334-1.011019.905907-.266642.37562-.455514.79543-.588835 1.281526-.122211.486097-.188872.961145-.188872 1.447242 0 .497144.06666.98324.188872 1.458289.12221.475049.322193.905907.588835 1.281527.266643.37562.599946.684954 1.01102.916954.411073.243048.899918.353525 1.455423.353525zm6.4883-9.66669h1.899827v-3.402674h2.510883v3.402675h2.26646v1.867052h-2.26646v6.054109c0 .265143.01111.486096.03333.684954.02222.18781.07777.353524.155541.486096.077771.132572.199982.232.366634.298287.166651.066285.377743.099428.666606.099428.177762 0 .355523 0 .533285-.011047.177762-.011048.355523-.033143.533285-.077334v1.933338c-.277753.033143-.555505.055238-.811038.088381-.266642.033143-.533285.04419-.811037.04419-.666606 0-1.199891-.066285-1.599855-.18781-.399963-.121523-.722156-.309333-.944358-.552381-.233313-.243049-.377744-.541335-.466625-.905907-.07777-.364573-.133321-.784383-.144431-1.248384v-6.683825h-1.899827v-1.889147h-.02222z"
                                  fill="#191919"></path>
                            <path class="tp-logo__star" fill="#00B67A"
                                  d="M30.141707 11.07005H18.63164L15.076408.177071l-3.566342 10.892977L0 11.059002l9.321376 6.739063-3.566343 10.88193 9.321375-6.728016 9.310266 6.728016-3.555233-10.88193 9.310266-6.728016z">
                            </path>
                            <path class="tp-logo__star-notch" fill="#005128"
                                  d="M21.631369 20.26169l-.799928-2.463625-5.755033 4.153914z"></path>
                        </svg>
                        <div class="my-3">
                            <div class="tp-stars tp-stars--5">
                                <div
                                        style="position: relative; height: 0; width: 100%; padding: 0; padding-bottom: 18.326693227091635%;">

                                    <svg role="img" aria-labelledby="starRating" viewBox="0 0 251 46"
                                         xmlns="http://www.w3.org/2000/svg"
                                         style="position: absolute; height: 100%; width: 100%; left: 0; top: 0;">
                                        <title id="starRating" lang="en">4.8 out of five star rating on Trustpilot</title>
                                        <g class="tp-star">
                                            <path class="tp-star__canvas" fill="#00b67a" d="M0 46.330002h46.375586V0H0z">
                                            </path>
                                            <path class="tp-star__shape"
                                                  d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z"
                                                  fill="#FFF"></path>
                                        </g>
                                        <g class="tp-star">
                                            <path class="tp-star__canvas" fill="#00b67a"
                                                  d="M51.24816 46.330002h46.375587V0H51.248161z"></path>
                                            <path class="tp-star__canvas--half" fill="#00b67a"
                                                  d="M51.24816 46.330002h23.187793V0H51.248161z"></path>
                                            <path class="tp-star__shape"
                                                  d="M74.990978 31.32991L81.150908 30 84 39l-9.660206-7.202786L64.30279 39l3.895636-11.840666L58 19.841466h12.605577L74.499595 8l3.895637 11.841466H91L74.990978 31.329909z"
                                                  fill="#FFF"></path>
                                        </g>
                                        <g class="tp-star">
                                            <path class="tp-star__canvas" fill="#00b67a"
                                                  d="M102.532209 46.330002h46.375586V0h-46.375586z"></path>
                                            <path class="tp-star__canvas--half" fill="#00b67a"
                                                  d="M102.532209 46.330002h23.187793V0h-23.187793z"></path>
                                            <path class="tp-star__shape"
                                                  d="M142.066994 19.711433L115.763298 38.80065l3.838215-11.797827-10.047304-7.291391h12.418975l3.837418-11.798624 3.837417 11.798624h12.418975zM125.81156 31.510075l7.183595-1.509576 2.862113 8.800152-10.045708-7.290576z"
                                                  fill="#FFF"></path>
                                        </g>
                                        <g class="tp-star">
                                            <path class="tp-star__canvas" fill="#00b67a"
                                                  d="M153.815458 46.330002h46.375586V0h-46.375586z"></path>
                                            <path class="tp-star__canvas--half" fill="#00b67a"
                                                  d="M153.815458 46.330002h23.187793V0h-23.187793z"></path>
                                            <path class="tp-star__shape"
                                                  d="M193.348355 19.711433L167.045457 38.80065l3.837417-11.797827-10.047303-7.291391h12.418974l3.837418-11.798624 3.837418 11.798624h12.418974zM177.09292 31.510075l7.183595-1.509576 2.862114 8.800152-10.045709-7.290576z"
                                                  fill="#FFF"></path>
                                        </g>
                                        <g class="tp-star">
                                            <path class="tp-star__canvas" fill="#00b67a"
                                                  d="M205.064416 46.330002h46.375587V0h-46.375587z"></path>
                                            <path class="tp-star__canvas--half" fill="#00b67a"
                                                  d="M205.064416 46.330002h23.187793V0h-23.187793z"></path>
                                            <path class="tp-star__shape"
                                                  d="M244.597022 19.711433l-26.3029 19.089218 3.837419-11.797827-10.047304-7.291391h12.418974l3.837418-11.798624 3.837418 11.798624h12.418975zm-16.255436 11.798642l7.183595-1.509576 2.862114 8.800152-10.045709-7.290576z"
                                                  fill="#FFF"></path>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <h6 class="text-dark">
                            <span class="fw-light"> TrustScore</span> 4.8 | 2,225 <span class="fw-light"> reviews</span>
                        </h6>
                    </div>
                    <h5 class="fw-light text-dark">
                        We are the UK's most trusted job board - outperforming all of our competitors!
                    </h5>
                </div>
            </div>
        </div>
        <div class="bg-white blockbdr py-5 my-5">
            <div class="container">
                <div class="row text-center">
                    <div class="col-12">
                        <h2 class="text-dark">
                            Simple and effective recruitment solutions for everyone
                        </h2>
                        <h5 class="text-dark fw-light my-3">
                            CV-Library's versatile hiring products and straightforward recruitment solutions are designed to
                            benefit businesses of all sizes.
                            We focus on delivering quality job applications and growing our CV Database.
                        </h5>
                        <h5 class="text-dark fw-light my-3">
                            CV-Library is ideal for…
                        </h5>
                        <div class="row w-100">
                            <div class="col-md-3 col-sm-6 col-6 my-3">
                                <img src="https://www.cv-library.co.uk/assets/images/icons/recruitment-agencies-791ab9e6beb395857934b87bc989c48bbcc0430df4f15169d07543168673ce45.svg"
                                     alt="social" class="simple-solution__icon">
                                <h4 class="text-dark">
                                    Recruitment agencies
                                </h4>
                            </div>
                            <div class="col-md-3 col-sm-6 col-6 my-3">
                                <img src="https://www.cv-library.co.uk/assets/images/icons/direct-employers-1b99424dfd9ce65e6974171a780ff1d6b9bc5718ff9f91c79be7316aa97d2c03.svg"
                                     alt="social" class="simple-solution__icon">
                                <h4 class="text-dark">
                                    Direct employers
                                </h4>
                            </div>
                            <div class="col-md-3 col-sm-6 col-6 my-3">
                                <img src="https://www.cv-library.co.uk/assets/images/icons/speakerphone-7fbca526210c0561f862815dc6379f35895cf760e0820bb59faca695b8976890.svg"
                                     alt="social" class="simple-solution__icon">
                                <h4 class="text-dark">
                                    Advertising agencies
                                </h4>
                            </div>
                            <div class="col-md-3 col-sm-6 col-6 my-3">
                                <img src="https://www.cv-library.co.uk/assets/images/icons/corporates-7cb959388d3f20994f3beddb6868bb42b6f200978ced491d3f5df0456af0413a.svg"
                                     alt="social" class="simple-solution__icon">
                                <h4 class="text-dark">
                                    Corporates </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-main py-5 my-5">
            <div class="container">
                <div class="row text-center align-items-center justify-content-center">
                    <h2 class="text-dark my-3">
                        Why CV-Library?

                    </h2>
                    <h5 class="fw-light text-dark my-4">
                        Take a closer look at the recruitment products we provide, from job adverts and CV database access,
                        to targeted email campaigns.
                    </h5>
                    <iframe width="100%" height="400px" class="mt-4" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                    </iframe>
                </div>
            </div>
        </div>
        <div class="bg-white blockbdr py-5 my-5">
            <div class="container">
                <div class="row text-center justify-content-center">
                    <div class="col-12">

                        <h2 class="text-dark my-3 ">
                            Benefits of recruiting with CV-Library
                        </h2>
                        <div class="row w-100">
                            <div class="col-md-6 col-12 my-3 ">
                                <div class="row w-100 h-100 mx-auto bg-main p-3 mainbdr">
                                    <div class="col-md-4 col-12 my-auto">
                                        <img src="
                                https://www.cv-library.co.uk/assets/images/icons/job-apply-d84e86089bcef40c39e258a41ab130fb10ee910485f0959df10d97151f0184d6.svg"
                                             alt="" class="simple-solution__icon">
                                    </div>
                                    <div class="col-md-8 col-12">
                                        <h4 class="text-dark text-start my-3 ">
                                            3 million monthly job applications
                                        </h4>
                                        <h6 class="text-dark text-start fw-light">
                                            Generate applications fast from our highly active candidate database


                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 my-3 ">
                                <div class="row w-100 h-100 mx-auto bg-main p-3 mainbdr">
                                    <div class="col-md-4 col-12 my-auto">
                                        <img src="
                                https://www.cv-library.co.uk/assets/images/icons/social-networks-0618289913454b97e6ea325d9aa6ef5412a369f08f1a89cadd945375e3b7dded.svg"
                                             alt="" class="simple-solution__icon">
                                    </div>
                                    <div class="col-md-8 col-12">
                                        <h4 class="text-dark text-start my-3 ">
                                            Access 18 million CVs

                                        </h4>
                                        <h6 class="text-dark text-start fw-light">
                                            360,000 new & updated CVs registered every month from candidates in all sectors
                                            nationwide



                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 my-3 ">
                                <div class="row w-100 h-100 mx-auto bg-main p-3 mainbdr">
                                    <div class="col-md-4 col-12 my-auto">
                                        <img src="
                                https://www.cv-library.co.uk/assets/images/icons/customer-service-6bf128c6d880d125201170224b5cf98ee73bf43f1e8b2e174f0791252480ceb7.svg"
                                             alt="" class="simple-solution__icon">
                                    </div>
                                    <div class="col-md-8 col-12">
                                        <h4 class="text-dark text-start my-3 ">
                                            Dedicated account management

                                        </h4>
                                        <h6 class="text-dark text-start fw-light">
                                            Benefit from continued support from our team throughout your hiring campaign



                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 my-3 ">
                                <div class="row w-100 h-100 mx-auto bg-main p-3 mainbdr">
                                    <div class="col-md-4 col-12 my-auto">
                                        <img src="
                                https://www.cv-library.co.uk/assets/images/icons/award-df9c60f3289ae59305b0a490c54d0f98b2500b8ae6126ea770660f855c991604.svg"
                                             alt="" class="simple-solution__icon">
                                    </div>
                                    <div class="col-md-8 col-12">
                                        <h4 class="text-dark text-start my-3 ">
                                            We're the UK's #1 job board

                                        </h4>
                                        <h6 class="text-dark text-start fw-light">
                                            Employers say they fill more jobs with CV-Library than any other job board



                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2 class="text-dark my-3 mt-5">
                            Reach the best candidates

                        </h2>
                        <h5 class="text-dark fw-light my-3">
                            Our unique network is home to 800+ specially selected UK job sites.
                            All jobs posted on CV-Library are advertised on all relevant Group and partner sites, at no
                            extra
                            cost!
                        </h5>
                        <h5 class="text-dark fw-light my-3">
                            Reach more candidates and receive more job applications!
                        </h5>
                        <div class="tbs">
                            <div class="body">
                                <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                    <li role="presentation" class="w-50">
                                        <a href="#cvLib" data-toggle="tab" class="show">The CV-Library Group</a>
                                    </li>
                                    <li role="presentation" class="w-50">
                                        <a href="#exPart" data-toggle="tab" class="active">Our exclusive partnerships</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in" id="cvLib">
                                        <div class="row">
                                            <div class="col-12 mx-auto my-md-3 my-3">
                                                <div class="row w-100 mx-auto align-items-center">
                                                    <div class="col-md-3 col-sm-4 col-6 my-md-1 my-3">
                                                        <img src="https://www.cv-library.co.uk/assets/images/cvlibrary-ie/cv-library-ie-logo-blue-31082a6a91e6ebb44d8d4df5b9b52dc487cfebaa422176d4b2c7709381d1994d.svg"
                                                             alt="img" class="simple-solution__icon w-100">
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 col-6 my-md-1 my-3">
                                                        <img src="https://www.cv-library.co.uk/assets/images/british-jobs-logo-rgb-blue-34ab4dc21c0f68dd2bcd64b73e8a01ec29da23be3d2ffae08faf1a4f92e8c89a.svg"
                                                             alt="img" class="simple-solution__icon w-100">
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 col-6 my-md-1 my-3">
                                                        <img src="https://www.cv-library.co.uk/assets/images/sales-jobs/sales-jobs-logo-blue-07bbf00505d415f8847bd3da63568ed32c3495870deb101a439de8da4e854331.svg"
                                                             alt="img" class="simple-solution__icon w-100">
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 col-6 my-md-1 my-3">
                                                        <img src="https://www.cv-library.co.uk/assets/images/it-jobs/it-jobs-logo-3d6d2ca5159199d234ce1c66f2d5a6c638a7c161715d568201ca40296b7d4f69.svg"
                                                             alt="img" class="simple-solution__icon w-100">
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 col-6 my-md-1 my-3">
                                                        <img src="https://www.cv-library.co.uk/assets/images/scotland-jobs/scotland-jobs-logo-98a503498dd6585daf3f56b9d59966223c429484e3d3f9abbd7406643e413804.svg"
                                                             alt="img" class="simple-solution__icon w-100">
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 col-6 my-md-1 my-3">
                                                        <img src="https://www.cv-library.co.uk/assets/images/marketing-jobs/marketing-jobs-logo-color-73a1261a12c469f9bed9f0178d457b8cd4809a88200e825f2b5c4d8c8cf5493b.svg"
                                                             alt="img" class="simple-solution__icon w-100">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade active show" id="exPart">
                                        <img src="https://www.cv-library.co.uk/assets/images/cvdb/cvdb-cvdatabase-partnerships-2861df3c1189f5a1b7dadf3a6188fd541c7a313301a53f7bbd8e07f558d4f300.png"
                                             alt="" class="w-100">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-main py-5 my-5 ">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="text-dark">
                            Our award-winning CV Database
                        </h2>
                        <h5 class="text-dark my-4 fw-light">
                            Take control of your recruitment strategy with access to our CV Database. Create and save
                            searches, view unlimited CVs and invite your shortlist of candidates to apply to your jobs and
                            set up video interviews. Over 360,000 new and updated CVs are uploaded every month.
                        </h5>
                        <button class="btn-primary btn">
                            Search our CV Database
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white pt-5 my-5 blockbdr">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="text-dark">
                            Maximising candidate traffic
                        </h2>
                        <h5 class="text-dark my-4 fw-light">
                            We invest in our brand to deliver fresh talent to you

                        </h5>
                        <div class="reach">
                            <div class="reach__copy bg-color-blue">
                                <h3 class="color-white">Painting the UK blue</h3>
                                <h4 class="fw-light">We target candidates in commuter hot spots in over <span
                                            class="reach__locations text--bold">250</span> locations nationwide</h4>
                                <a class="btn btn-light mt-3" href="/advertising-reach">Learn more </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 my-5">
                        <div class="row w-100 text-center">
                            <div class="col-md-4 col-sm-12 col-12 my-3">
                                <img src="https://www.cv-library.co.uk/assets/images/icons/network-7bc23bad3b911d897bc8d7dbda8fb4fec33964b62623d5cebc757aef35a173db.svg"
                                     alt="social" class="simple-solution__icon">
                                <h4 class="text-dark my-3">
                                    Network

                                </h4>
                                <h6 class="fw-light text-dark">
                                    The CV-Library Group and our Partner sites drive candidates to your vacancies from
                                    across the web


                                </h6>
                            </div>
                            <div class="col-md-4 col-sm-12 col-12 my-3">
                                <img src="https://www.cv-library.co.uk/assets/images/icons/google-fcd8fb998d4f41f03645cf2d758511c08041c02db175ebf88249df361567a2c6.svg"
                                     alt="social" class="simple-solution__icon">
                                <h4 class="text-dark my-3">
                                    The Google Partnership

                                </h4>
                                <h6 class="fw-light text-dark">
                                    Thanks to our partnership, jobs posted on CV-Library appear on Google's Search Index


                                </h6>
                            </div>
                            <div class="col-md-4 col-sm-12 col-12 my-3">
                                <img src="https://www.cv-library.co.uk/assets/images/icons/online-79541be8db86a601fe1a5ae107963f922a203d4e4f15aac3db7ce8f8787a2ec7.svg"
                                     alt="social" class="simple-solution__icon">
                                <h4 class="text-dark my-3">
                                    Online presence

                                </h4>
                                <h6 class="fw-light text-dark">
                                    Our strategically placed online banners and adverts reach millions of candidates



                                </h6>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="container-fluid px-0">
                <div class="row--p60 bg-color-blue-lite align-center awards">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-12 my-4">

                                <section class="section-col-2 section-col-2--bd">
                                    <h2 class="text--bold color-white">Recruiters vote us the #1 <span class="no-wrap">job
                                        board!</span></h2>
                                    <h5 class="my-3 fw-light">We work hard to ensure that our clients can place candidates
                                        quickly and efficiently. With
                                        <span class="no-wrap">CV-Library</span>, you receive:
                                    </h5>
                                    <ul>
                                        <li>More interviews</li>
                                        <li>More applications</li>
                                        <li>More hires</li>
                                    </ul>
                                    <a class="btn btn-light" href="">View full survey results</a>
                                </section>
                            </div>
                            <div class="col-lg-6 col-12 my-4">
                                <section class="section-col-2 section-col-2--bd">
                                    <h2 class="text--bold color-white">Awards and recognition</h2>
                                    <p class="section-col-3 award"><span class="award__amount text--semibold">152</span>
                                        Nominations
                                    </p>
                                    <p class="section-col-3 award award--large"><span
                                                class="award__amount text--semibold">65</span>
                                        Award wins</p>
                                    <p class="section-col-3 award"><span class="award__amount text--semibold">16</span>
                                        Highly
                                        Commended</p>
                                    <a class="btn btn-light" href="">View all awards</a>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-main py-5 my-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 my-4">
                        <h2 class="text-dark">
                            Benefits of recruiting with CV-Library

                        </h2>
                    </div>
                    <div class="col-12">
                        <div class="row w-100">
                            <div class="col-md-4 text-center col-12 my-3 ">
                                <div class="row w-100 h-100 mx-auto bg-white p-3 mainbdr">
                                    <div class="col-12 my-auto">
                                        <img src="
                                    https://www.cv-library.co.uk/assets/images/cvdb/logos/swissport-logo-8f68738f33c4efff98f4327a8c9e6279ef49e1f9b3fed695265836622d670764.png"
                                             alt="" class="w-100">
                                    </div>
                                    <div class="col-12 text-center">
                                        <h4 class="text-dark my-3 ">
                                            Swissport
                                        </h4>
                                        <h6 class="text-dark fw-light">
                                            <i>
                                                "We have used CV-Library this year after switching the bulk of our Job Board
                                                budget from one of their competitors. Our ROI compared to our previous Job
                                                Board has been significant. We now utilise this extremely useful resource,
                                                not just for advertising our vacancies, but to enhance our Employer Brand."
                                            </i>

                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center col-12 my-3 ">
                                <div class="row w-100 h-100 mx-auto bg-white p-3 mainbdr">
                                    <div class="col-12 my-auto">
                                        <img src="
                                    https://www.cv-library.co.uk/assets/images/cvdb/office-angels-logo-48efd74a9a2f9a169013134ae22bd4f2b6bd909a4777db618297a524786d4646.png"
                                             alt="" class="w-100">
                                    </div>
                                    <div class="col-12 text-center">
                                        <h4 class="text-dark my-3 ">
                                            Office Angels

                                        </h4>
                                        <h6 class="text-dark fw-light">
                                            <i>
                                                "I had never used CV-Library before, but now I couldn't live without it! It
                                                always delivers the best candidates. We now fill the majority of our
                                                vacancies through CV-Library and we couldn't do without it."


                                            </i>

                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center col-12 my-3 ">
                                <div class="row w-100 h-100 mx-auto bg-white p-3 mainbdr">
                                    <div class="col-12 my-auto">
                                        <img src="
                                    https://www.cv-library.co.uk/assets/images/cvdb/logos/kerry-foods-logo-2021cfc38e03ec11006656e2f83a1b069463a206f5529795c77f5ae4733ffc30.jpg"
                                             alt="" class="w-100">
                                    </div>
                                    <div class="col-12 text-center">
                                        <h4 class="text-dark my-3 ">
                                            Kerry Foods

                                        </h4>
                                        <h6 class="text-dark fw-light">
                                            <i>
                                                "As a reactive solution CV-Library is a must! It's easy to use and is packed
                                                full of detail on quality candidates. During my time as a recruiter over 25%
                                                of my hires have come CV-Library; from support level roles to senior
                                                managers! It is the best platform to source for quality CVs with pace - I
                                                could never be without it!"


                                            </i>

                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection