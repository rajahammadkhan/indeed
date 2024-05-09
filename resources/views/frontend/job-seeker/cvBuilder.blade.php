@extends('frontend.layouts.master')
@section('title')
    Dashboard - {{config('app.dashboard')}}
@endsection
@section('content')
<section class="bg-main">
<section class="findJob pt-5 rec">
    <div class="container">
        <form action="./candidateSearched.html">
            <div class="row">
                <div class="col-md-6 col-12 my-auto py-5">
                    <h1 class="res text-start">
                        Free CV Builder

                    </h1>
                    <h5 class="res fw-light text-start my-4">
                        Need a CV? Create your own on the go and start applying to jobs in minutes.


                    </h5>
                    <a href="{{url('resume-builder')}}" class="btn btn-primary my-3 ">Build my CV</a>
                </div>
                <div class="col-md-6 col-12 my-auto text-end">
                    <img src="{{asset('indeed/images/cv.png')}}" alt="home" class="w-100">

                </div>

            </div>
        </form>
    </div>
</section>
<div class="container mt-5 py-5">
    <div class="row">
        <div class="col-md-6 col-12 my-4">
            <h2 class="text-dark">
                How CV Builder works
            </h2>
            <div class="crdz row">
                <div class="col-sm-6 col-12">
                    <div class="crdd d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="smSvg" width="65" height="65"
                             viewBox="0 0 65 65">
                            <defs>
                                <clipPath id="a">
                                    <path data-name="Rectangle 1677" fill="none" d="M0 0h55v54.81H0z" />
                                </clipPath>
                            </defs>
                            <g data-name="Group 1729" transform="translate(-84 -723)">
                                <circle data-name="Ellipse 2933" cx="32.5" cy="32.5" r="32.5"
                                        transform="translate(84 723)" fill="#4488d5" />
                                <g data-name="Group 1704">
                                    <g data-name="Group 1703" transform="translate(89 727)" clip-path="url(#a)">
                                        <path data-name="Path 8336"
                                              d="M54.18 49.32c0 2.58-2.63 4.67-5.88 4.67H19.5c-3.25 0-5.88-2.1-5.88-4.67V5.48c0-2.57 2.63-4.66 5.88-4.66H48.3c3.25 0 5.88 2.09 5.88 4.67Z"
                                              fill="#fff" />
                                        <path data-name="Path 8337"
                                              d="M48.3 54.8H19.49c-3.7 0-6.7-2.45-6.7-5.48V5.49c0-3.03 3-5.49 6.7-5.49H48.3C52 0 55 2.46 55 5.49v43.83c0 3.03-3 5.49-6.7 5.49M19.49 1.64c-2.79 0-5.06 1.73-5.06 3.84v43.84c0 2.12 2.27 3.84 5.06 3.84H48.3c2.79 0 5.06-1.72 5.06-3.84V5.49c0-2.12-2.27-3.85-5.06-3.85Z"
                                              fill="#2874bb" />
                                        <path data-name="Path 8338"
                                              d="M37.6 6.66h-7.33a.82.82 0 1 1 0-1.64h7.34a.82.82 0 1 1 0 1.64"
                                              fill="#2874bb" />
                                        <path data-name="Path 8339"
                                              d="M33.9 52.02a3.4 3.4 0 1 1 3.27-3.4 3.33 3.33 0 0 1-3.26 3.4m0-5.14a1.75 1.75 0 1 0 1.61 1.75 1.69 1.69 0 0 0-1.61-1.75"
                                              fill="#2874bb" />
                                        <path data-name="Path 8340"
                                              d="m44.48 24.26-1.5-1.32-6.17-5.44a1.58 1.58 0 0 0-2.22.14l-5.34 6.06a6.05 6.05 0 0 0-.73-.04 5.1 5.1 0 1 0 0 10.21 8.4 8.4 0 0 0 1.3-.13l3.55 3.12a1.58 1.58 0 0 0 2.23-.14l9.02-10.24a1.58 1.58 0 0 0-.14-2.22m-14.14 8.31a1.87 1.87 0 0 1-.3.21 2.38 2.38 0 0 1-.23.12 3.36 3.36 0 0 1-1.5.2 4.35 4.35 0 0 1-1.09-.2h-.02a4.33 4.33 0 0 1 1.32-8.47 3.45 3.45 0 0 1 1.53.28 1.02 1.02 0 0 1 .62.91 1.14 1.14 0 0 1-.1.41c-.24.62-1.04.55-1.42.48a4.47 4.47 0 0 0-.63-.08 2.33 2.33 0 0 0-2.33 2.33 2.33 2.33 0 0 0 3.24 2.16.98.98 0 0 1 1.22.51.87.87 0 0 1 .1.43.97.97 0 0 1-.34.65s-.05.05-.07.06m8.7-6.77-3.1 6.77a.95.95 0 0 1-.83.55h-.1a.95.95 0 0 1-.82-.56l-3.02-6.77a.95.95 0 1 1 1.72-.78l2.19 4.88L37.32 25a.95.95 0 1 1 1.72.8"
                                              fill="#1c518b" />
                                        <rect data-name="Rectangle 1676" width="22.66" height="37.42" rx="3.99"
                                              transform="translate(.82 16.56)" fill="#fff" />
                                        <path data-name="Path 8341"
                                              d="M20.2 54.8H4.1A4.11 4.11 0 0 1 0 50.7V19.84a4.11 4.11 0 0 1 4.1-4.1h16.1a4.11 4.11 0 0 1 4.1 4.1V50.7a4.11 4.11 0 0 1-4.1 4.1M4.1 17.39a2.46 2.46 0 0 0-2.46 2.46V50.7a2.46 2.46 0 0 0 2.47 2.46H20.2a2.46 2.46 0 0 0 2.46-2.46V19.84a2.46 2.46 0 0 0-2.46-2.46Z"
                                              fill="#2874bb" />
                                        <path data-name="Path 8342"
                                              d="M14.9 20.91H9.45a.82.82 0 1 1 0-1.64h5.45a.82.82 0 1 1 0 1.64"
                                              fill="#2874bb" />
                                        <path data-name="Path 8343"
                                              d="M12.15 52.84a2.63 2.63 0 1 1 2.63-2.63 2.63 2.63 0 0 1-2.63 2.63m0-3.62a.99.99 0 1 0 .99 1 .99.99 0 0 0-.99-1"
                                              fill="#2874bb" />
                                        <path data-name="Path 8344"
                                              d="m20.36 32.94-1.2-1.06-4.93-4.34a1.26 1.26 0 0 0-1.78.11L8.2 32.5a4.83 4.83 0 0 0-.59-.03 4.08 4.08 0 1 0 0 8.16 6.67 6.67 0 0 0 1.05-.1l2.83 2.5a1.26 1.26 0 0 0 1.78-.12l7.2-8.19a1.26 1.26 0 0 0-.1-1.77m-11.3 6.64a1.5 1.5 0 0 1-.24.17 1.58 1.58 0 0 1-.19.09 2.66 2.66 0 0 1-1.2.16 3.45 3.45 0 0 1-.86-.16h-.02a3.46 3.46 0 0 1 1.06-6.76 2.75 2.75 0 0 1 1.22.22.82.82 0 0 1 .49.73.92.92 0 0 1-.07.33c-.2.49-.84.44-1.14.38a3.63 3.63 0 0 0-.5-.07 1.86 1.86 0 0 0-1.87 1.86 1.87 1.87 0 0 0 2.59 1.73.78.78 0 0 1 .97.4.7.7 0 0 1 .09.35.78.78 0 0 1-.27.52l-.06.05M16 34.17l-2.47 5.4a.76.76 0 0 1-.66.45h-.08a.76.76 0 0 1-.65-.45l-2.43-5.4a.76.76 0 0 1 1.38-.63l1.75 3.9 1.79-3.9a.76.76 0 0 1 1.38.63"
                                              fill="#1c518b" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <div class="cntnt ms-3">
                            <h5 class="text-dark">
                                Build your CV

                            </h5>
                            <h6 class="text-dark fw-light mb-0">
                                on a mobile, tablet or desktop device


                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-12">
                    <div class="crdd d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="smSvg" width="65" height="65"
                             viewBox="0 0 65 65">
                            <defs>
                                <clipPath id="a">
                                    <path data-name="Rectangle 1679" fill="none" d="M0 0h55v55.65H0z" />
                                </clipPath>
                            </defs>
                            <g data-name="Group 1732" transform="translate(-84 -828)">
                                <circle data-name="Ellipse 2934" cx="32.5" cy="32.5" r="32.5"
                                        transform="translate(84 828)" fill="#4488d5" />
                                <g data-name="Group 1708">
                                    <g data-name="Group 1707" transform="translate(93.72 832)" clip-path="url(#a)">
                                        <path data-name="Path 8355"
                                              d="M43.85 54.83H3.16a2.35 2.35 0 0 1-2.33-2.35V3.17A2.35 2.35 0 0 1 3.16.82h40.7a2.35 2.35 0 0 1 2.33 2.33v49.32a2.35 2.35 0 0 1-2.34 2.35"
                                              fill="#fff" />
                                        <path data-name="Path 8356"
                                              d="M43.85 55.65H3.17A3.17 3.17 0 0 1 0 52.48V3.17A3.17 3.17 0 0 1 3.17 0h40.69a3.17 3.17 0 0 1 3.16 3.17v49.31a3.17 3.17 0 0 1-3.17 3.17m-40.68-54a1.52 1.52 0 0 0-1.52 1.52v49.31A1.52 1.52 0 0 0 3.17 54h40.69a1.52 1.52 0 0 0 1.51-1.51V3.16a1.52 1.52 0 0 0-1.51-1.52Z"
                                              fill="#2874bb" />
                                        <path data-name="Path 8357"
                                              d="m44.03 47.63 6.7 6.67a1.63 1.63 0 0 0 2.3.09l.7-.7a1.63 1.63 0 0 0-.08-2.3l-5.07-5.08-1.6-1.58"
                                              fill="#3298d1" />
                                        <path data-name="Path 8358"
                                              d="M51.96 55.64a2.57 2.57 0 0 1-1.8-.75l-6.7-6.68 1.16-1.17 6.7 6.68a.8.8 0 0 0 1.13.08l.7-.7a.68.68 0 0 0 .2-.52.92.92 0 0 0-.28-.6l-4.49-4.5-2.17-2.17 1.16-1.17 1 1h.01l5.66 5.66a2.57 2.57 0 0 1 .76 1.72 2.32 2.32 0 0 1-.68 1.75l-.7.7a2.32 2.32 0 0 1-1.66.67"
                                              fill="#2874bb" />
                                        <path data-name="Path 8359"
                                              d="M45.66 31.24a10.5 10.5 0 1 0 0 14.85 10.43 10.43 0 0 0 0-14.85m-2.75 12.1a6.61 6.61 0 1 1 1.93-4.67 6.57 6.57 0 0 1-1.93 4.67"
                                              fill="#fff" />
                                        <path data-name="Path 8360"
                                              d="M10.34 14.54a3.96 3.96 0 0 1 2.27.67.5.5 0 0 1 .12.76l-.25.4a.47.47 0 0 1-.74.15 2.68 2.68 0 0 0-1.32-.4 1.88 1.88 0 0 0-2 2.02 1.98 1.98 0 0 0 2 2.13 2.57 2.57 0 0 0 1.45-.5.48.48 0 0 1 .76.1l.28.38a.51.51 0 0 1-.1.77 4 4 0 0 1-2.47.84 3.52 3.52 0 0 1-3.71-3.67 3.57 3.57 0 0 1 3.71-3.65"
                                              fill="#2674bb" />
                                        <path data-name="Path 8361"
                                              d="M13.32 15.28c-.13-.37.04-.62.44-.62h.74a.57.57 0 0 1 .62.46l1.1 3.57c.15.44.28 1.14.28 1.14h.01s.13-.7.27-1.14l1.13-3.57a.57.57 0 0 1 .61-.46h.72c.4 0 .57.25.44.62l-2.12 6.02a.6.6 0 0 1-.62.43h-.87a.6.6 0 0 1-.62-.43Z"
                                              fill="#2674bb" />
                                        <path data-name="Path 8362"
                                              d="M26.6 31.56H7.31a.83.83 0 0 1 0-1.65h19.27a.83.83 0 0 1 0 1.65"
                                              fill="#2874bb" />
                                        <path data-name="Path 8363"
                                              d="M30.67 37.13H7.31a.83.83 0 1 1 0-1.65h23.36a.83.83 0 1 1 0 1.65"
                                              fill="#2874bb" />
                                        <path data-name="Path 8364"
                                              d="M22.53 42.7H7.3a.83.83 0 0 1 0-1.66h15.22a.83.83 0 0 1 0 1.65"
                                              fill="#2874bb" />
                                        <path data-name="Path 8365"
                                              d="M26.6 48.26H7.31a.83.83 0 1 1 0-1.65h19.27a.83.83 0 1 1 0 1.65"
                                              fill="#2874bb" />
                                        <path data-name="Path 8366"
                                              d="M45.66 31.24a10.5 10.5 0 1 0 0 14.85 10.43 10.43 0 0 0 0-14.85m-2.75 12.1a6.61 6.61 0 1 1 1.93-4.67 6.57 6.57 0 0 1-1.93 4.67"
                                              fill="#fff" />
                                        <path data-name="Path 8367"
                                              d="M38.23 50a11.33 11.33 0 1 1 8.01-3.32 11.25 11.25 0 0 1-8 3.31m0-21a9.67 9.67 0 1 0 6.83 2.84 9.6 9.6 0 0 0-6.84-2.84m0 17.11a7.44 7.44 0 1 1 5.26-2.18 7.38 7.38 0 0 1-5.26 2.18m0-13.22a5.79 5.79 0 1 0 4.1 1.7 5.74 5.74 0 0 0-4.1-1.7"
                                              fill="#2874bb" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <div class="cntnt ms-3">
                            <h5 class="text-dark">
                                Customise your CV

                            </h5>
                            <h6 class="text-dark fw-light mb-0">
                                with pre-written summaries and responsibilities




                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-12">
                    <div class="crdd d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="smSvg" width="65" height="65"
                             viewBox="0 0 65 65">
                            <defs>
                                <clipPath id="a">
                                    <path data-name="Rectangle 1679" fill="none" d="M0 0h55v55.65H0z" />
                                </clipPath>
                            </defs>
                            <g data-name="Group 1732" transform="translate(-84 -828)">
                                <circle data-name="Ellipse 2934" cx="32.5" cy="32.5" r="32.5"
                                        transform="translate(84 828)" fill="#4488d5" />
                                <g data-name="Group 1708">
                                    <g data-name="Group 1707" transform="translate(93.72 832)" clip-path="url(#a)">
                                        <path data-name="Path 8355"
                                              d="M43.85 54.83H3.16a2.35 2.35 0 0 1-2.33-2.35V3.17A2.35 2.35 0 0 1 3.16.82h40.7a2.35 2.35 0 0 1 2.33 2.33v49.32a2.35 2.35 0 0 1-2.34 2.35"
                                              fill="#fff" />
                                        <path data-name="Path 8356"
                                              d="M43.85 55.65H3.17A3.17 3.17 0 0 1 0 52.48V3.17A3.17 3.17 0 0 1 3.17 0h40.69a3.17 3.17 0 0 1 3.16 3.17v49.31a3.17 3.17 0 0 1-3.17 3.17m-40.68-54a1.52 1.52 0 0 0-1.52 1.52v49.31A1.52 1.52 0 0 0 3.17 54h40.69a1.52 1.52 0 0 0 1.51-1.51V3.16a1.52 1.52 0 0 0-1.51-1.52Z"
                                              fill="#2874bb" />
                                        <path data-name="Path 8357"
                                              d="m44.03 47.63 6.7 6.67a1.63 1.63 0 0 0 2.3.09l.7-.7a1.63 1.63 0 0 0-.08-2.3l-5.07-5.08-1.6-1.58"
                                              fill="#3298d1" />
                                        <path data-name="Path 8358"
                                              d="M51.96 55.64a2.57 2.57 0 0 1-1.8-.75l-6.7-6.68 1.16-1.17 6.7 6.68a.8.8 0 0 0 1.13.08l.7-.7a.68.68 0 0 0 .2-.52.92.92 0 0 0-.28-.6l-4.49-4.5-2.17-2.17 1.16-1.17 1 1h.01l5.66 5.66a2.57 2.57 0 0 1 .76 1.72 2.32 2.32 0 0 1-.68 1.75l-.7.7a2.32 2.32 0 0 1-1.66.67"
                                              fill="#2874bb" />
                                        <path data-name="Path 8359"
                                              d="M45.66 31.24a10.5 10.5 0 1 0 0 14.85 10.43 10.43 0 0 0 0-14.85m-2.75 12.1a6.61 6.61 0 1 1 1.93-4.67 6.57 6.57 0 0 1-1.93 4.67"
                                              fill="#fff" />
                                        <path data-name="Path 8360"
                                              d="M10.34 14.54a3.96 3.96 0 0 1 2.27.67.5.5 0 0 1 .12.76l-.25.4a.47.47 0 0 1-.74.15 2.68 2.68 0 0 0-1.32-.4 1.88 1.88 0 0 0-2 2.02 1.98 1.98 0 0 0 2 2.13 2.57 2.57 0 0 0 1.45-.5.48.48 0 0 1 .76.1l.28.38a.51.51 0 0 1-.1.77 4 4 0 0 1-2.47.84 3.52 3.52 0 0 1-3.71-3.67 3.57 3.57 0 0 1 3.71-3.65"
                                              fill="#2674bb" />
                                        <path data-name="Path 8361"
                                              d="M13.32 15.28c-.13-.37.04-.62.44-.62h.74a.57.57 0 0 1 .62.46l1.1 3.57c.15.44.28 1.14.28 1.14h.01s.13-.7.27-1.14l1.13-3.57a.57.57 0 0 1 .61-.46h.72c.4 0 .57.25.44.62l-2.12 6.02a.6.6 0 0 1-.62.43h-.87a.6.6 0 0 1-.62-.43Z"
                                              fill="#2674bb" />
                                        <path data-name="Path 8362"
                                              d="M26.6 31.56H7.31a.83.83 0 0 1 0-1.65h19.27a.83.83 0 0 1 0 1.65"
                                              fill="#2874bb" />
                                        <path data-name="Path 8363"
                                              d="M30.67 37.13H7.31a.83.83 0 1 1 0-1.65h23.36a.83.83 0 1 1 0 1.65"
                                              fill="#2874bb" />
                                        <path data-name="Path 8364"
                                              d="M22.53 42.7H7.3a.83.83 0 0 1 0-1.66h15.22a.83.83 0 0 1 0 1.65"
                                              fill="#2874bb" />
                                        <path data-name="Path 8365"
                                              d="M26.6 48.26H7.31a.83.83 0 1 1 0-1.65h19.27a.83.83 0 1 1 0 1.65"
                                              fill="#2874bb" />
                                        <path data-name="Path 8366"
                                              d="M45.66 31.24a10.5 10.5 0 1 0 0 14.85 10.43 10.43 0 0 0 0-14.85m-2.75 12.1a6.61 6.61 0 1 1 1.93-4.67 6.57 6.57 0 0 1-1.93 4.67"
                                              fill="#fff" />
                                        <path data-name="Path 8367"
                                              d="M38.23 50a11.33 11.33 0 1 1 8.01-3.32 11.25 11.25 0 0 1-8 3.31m0-21a9.67 9.67 0 1 0 6.83 2.84 9.6 9.6 0 0 0-6.84-2.84m0 17.11a7.44 7.44 0 1 1 5.26-2.18 7.38 7.38 0 0 1-5.26 2.18m0-13.22a5.79 5.79 0 1 0 4.1 1.7 5.74 5.74 0 0 0-4.1-1.7"
                                              fill="#2874bb" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <div class="cntnt ms-3">
                            <h5 class="text-dark">
                                Preview your CV

                            </h5>
                            <h6 class="text-dark fw-light mb-0">
                                every step of the way



                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-12">
                    <div class="crdd d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="smSvg" width="65" height="65"
                             viewBox="0 0 65 65">
                            <defs>
                                <clipPath id="a">
                                    <path data-name="Rectangle 1682" fill="none" d="M0 0h48.32v60.35H0z" />
                                </clipPath>
                            </defs>
                            <g data-name="Group 1731" transform="translate(-363 -828)">
                                <circle data-name="Ellipse 2936" cx="32.5" cy="32.5" r="32.5"
                                        transform="translate(363 828)" fill="#4488d5" />
                                <g data-name="Group 1714">
                                    <g data-name="Group 1713" transform="translate(373 832)" clip-path="url(#a)">
                                        <path data-name="Path 8388"
                                              d="M44.97 56.22H3.25a2.4 2.4 0 0 1-2.4-2.4V3.25a2.4 2.4 0 0 1 2.4-2.4h41.72a2.4 2.4 0 0 1 2.4 2.4v50.57a2.4 2.4 0 0 1-2.4 2.4"
                                              fill="#fff" />
                                        <path data-name="Path 8389"
                                              d="M44.97 57.07H3.25A3.25 3.25 0 0 1 0 53.82V3.25A3.25 3.25 0 0 1 3.25 0h41.72a3.25 3.25 0 0 1 3.25 3.25v50.57a3.25 3.25 0 0 1-3.25 3.25M3.25 1.69a1.55 1.55 0 0 0-1.56 1.56v50.57a1.55 1.55 0 0 0 1.56 1.55h41.72a1.55 1.55 0 0 0 1.56-1.55V3.25a1.55 1.55 0 0 0-1.56-1.56Z"
                                              fill="#2874bb" />
                                        <path data-name="Path 8390"
                                              d="M39.04 59.5a2.19 2.19 0 0 1-1.73-.82l-6.35-8a1.52 1.52 0 0 1-.2-1.63 2.1 2.1 0 0 1 1.92-1.08h3.38V37.2a1.57 1.57 0 0 1 1.6-1.55h2.75a1.58 1.58 0 0 1 1.6 1.55v10.75h3.38a2.1 2.1 0 0 1 1.93 1.09 1.52 1.52 0 0 1-.2 1.63l-6.36 8a2.19 2.19 0 0 1-1.73.82"
                                              fill="#5ba632" />
                                        <path data-name="Path 8391"
                                              d="M40.41 36.51a.73.73 0 0 1 .76.7v11.6h4.22c.95 0 1.54.75 1.07 1.34l-6.35 8a1.39 1.39 0 0 1-2.14 0l-6.35-8c-.47-.6.12-1.34 1.07-1.34h4.22v-11.6a.72.72 0 0 1 .75-.7Zm0-1.7h-2.75a2.42 2.42 0 0 0-2.44 2.4v9.9h-2.53A2.95 2.95 0 0 0 30 48.69a2.38 2.38 0 0 0 .3 2.53l6.36 8a3.08 3.08 0 0 0 4.78 0l6.36-8a2.38 2.38 0 0 0 .3-2.53 2.95 2.95 0 0 0-2.7-1.56h-2.54v-9.9a2.42 2.42 0 0 0-2.45-2.4"
                                              fill="#2874bb" />
                                        <path data-name="Path 8392"
                                              d="M10.64 14.92a4.06 4.06 0 0 1 2.33.69.52.52 0 0 1 .12.77l-.25.42a.48.48 0 0 1-.77.15 2.75 2.75 0 0 0-1.35-.4 1.93 1.93 0 0 0-2.05 2.06 2.03 2.03 0 0 0 2.05 2.19 2.64 2.64 0 0 0 1.49-.52.5.5 0 0 1 .78.1l.28.4a.53.53 0 0 1-.09.78 4.1 4.1 0 0 1-2.54.86 3.6 3.6 0 0 1-3.8-3.77 3.66 3.66 0 0 1 3.8-3.73"
                                              fill="#2674bb" />
                                        <path data-name="Path 8393"
                                              d="M13.7 15.68c-.14-.39.03-.64.45-.64h.76a.59.59 0 0 1 .63.47l1.14 3.66c.14.46.27 1.17.27 1.17h.02s.13-.71.28-1.17l1.15-3.66a.59.59 0 0 1 .63-.47h.73c.42 0 .6.25.46.64l-2.17 6.17a.62.62 0 0 1-.64.45h-.9a.61.61 0 0 1-.63-.45Z"
                                              fill="#2674bb" />
                                        <path data-name="Path 8394"
                                              d="M27.27 32.37H7.5a.85.85 0 0 1 0-1.7h19.77a.85.85 0 0 1 0 1.7"
                                              fill="#2874bb" />
                                        <path data-name="Path 8395"
                                              d="M31.45 38.07H7.5a.85.85 0 1 1 0-1.69h23.95a.85.85 0 1 1 0 1.7"
                                              fill="#2874bb" />
                                        <path data-name="Path 8396"
                                              d="M23.1 43.78H7.5a.85.85 0 1 1 0-1.69h15.6a.85.85 0 1 1 0 1.7"
                                              fill="#2874bb" />
                                        <path data-name="Path 8397"
                                              d="M27.27 49.5H7.5a.85.85 0 0 1 0-1.7h19.77a.85.85 0 0 1 0 1.7"
                                              fill="#2874bb" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <div class="cntnt ms-3">
                            <h5 class="text-dark">
                                Download your CV

                            </h5>
                            <h6 class="text-dark fw-light mb-0">
                                and apply to jobs anywhere
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-12 my-4">
            <div class="cvb-video">
                <div class="video-wrapper">
                    <iframe title="Learn more about CV Builder and how it works" class="video"
                            src="https://player.vimeo.com/video/642333129?h=ce8cf60272&amp;title=0&amp;byline=0&amp;portrait=0"
                            frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="  py-5 bg-white">
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h2 class="text-dark mb-3 text-center">
                    Find out why job seekers love CV Builder...

                </h2>
            </div>
            <div class="col-12 my-4">
                <div class="owl-carousel owl-theme" id="withloop">
                    <div class="item">
                        <a href="#" class="text-center"> <img src="../../assets/images/slid1.png" alt=""
                                                              class="w-75 mx-auto"></a>
                    </div>
                    <div class="item">
                        <a href="#" class="text-center"> <img src="../../assets/images/slid2.png" alt=""
                                                              class="w-75 mx-auto"></a>
                    </div>
                    <div class="item">
                        <a href="#" class="text-center"> <img src="../../assets/images/slid3.png" alt=""
                                                              class="w-75 mx-auto"></a>
                    </div>
                    <div class="item">
                        <a href="#" class="text-center"> <img src="../../assets/images/slid4.png" alt=""
                                                              class="w-75 mx-auto"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="py-5 bg-main blockbdr">
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h2 class="text-dark mb-3 text-center">
                    Seeking advice on applying to jobs?

                </h2>
                <h5 class="text-dark mb-3 text-center fw-light">
                    Be sure to read our helpful tips and advice
                </h5>
            </div>
            <div class="col-md-4 col-sm-6 col-12 my-3">
                <img src="https://www.cv-library.co.uk/assets/images/candidate/cv-builder/blog-personal-profile.75e48131b191fdc3d479099006e3b185.jpg"
                     alt="" class="rounded-2 crdMdImg">
                <div class="titl my-3">

                    <a href="" class="fs-4">How to write a personal profile for your CV in 2022</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-12 my-3">
                <img src="https://www.cv-library.co.uk/career-advice/wp-content/uploads/2019/08/The-dangers-of-lying-in-your-CV.jpg"
                     alt="" class="rounded-2 crdMdImg">
                <div class="titl my-3">

                    <a href="" class="fs-4">The dangers of lying in your CV</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-12 my-3">
                <img src="https://www.cv-library.co.uk/career-advice/wp-content/uploads/2020/04/how-to-deal-with-cv-rejection.png"
                     alt="" class="rounded-2 crdMdImg">
                <div class="titl my-3">

                    <a href="" class="fs-4">6 effective tips to deal with CV rejection</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-12 my-3">
                <img src="https://www.cv-library.co.uk/assets/images/candidate/cv-builder/cv-cliches-and-buzzwords.c5cbb6d55833678e30dec35a59cf54bb.jpg"
                     alt="" class="rounded-2 crdMdImg">
                <div class="titl my-3">

                    <a href="" class="fs-4">CV clichés and buzzwords: What they are and how to avoid them</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-12 my-3">
                <img src="https://www.cv-library.co.uk/assets/images/candidate/cv-builder/re-purpose-your-cv.1224e4f4495987a83f395d59de47bf63.jpg"
                     alt="" class="rounded-2 crdMdImg">
                <div class="titl my-3">

                    <a href="" class="fs-4">How to re-purpose your CV for a new sector</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-12 my-3">
                <img src="https://www.cv-library.co.uk/assets/images/candidate/cv-builder/what-hobbies-and-interests-should-you-include.1414c398f2677c720d0df21ea05be6b5.jpg"
                     alt="" class="rounded-2 crdMdImg">
                <div class="titl my-3">

                    <a href="" class="fs-4">What hobbies and interests should I add to my CV?</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-purp py-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h2 class="text-white">
                    Build your CV and start applying for 232,913 jobs today!
                </h2>
                <a href="{{url('resume-builder')}}" class="mt-4 btn btn-success">Build my CV</a>
            </div>
        </div>
    </div>
</div>
<div class="bg-white blockbdr py-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h2 class="text-dark">
                    CV Builder FAQs

                </h2>
            </div>
            <div class="col-12 text-start mt-3">
                <div class="panel-group" id="accordion_1" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-primary">
                        <div class="panel-heading" role="tab" id="headingOne_1">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion_1"
                                   href="#collapseOne_1" aria-expanded="false" aria-controls="collapseOne_1"
                                   class="collapsed">
                                    Can I use CV Builder for free?

                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne_1" class="panel-collapse in collapse" role="tabpanel"
                             aria-labelledby="headingOne_1" style="">
                            <div class="panel-body"> CV Builder is 100% free for all users. Simply visit <a
                                        href="#"> www.cv-library.co.uk/cv-builder</a> and get started today.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-primary">
                        <div class="panel-heading" role="tab" id="headingTwo_1">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1"
                                   href="#collapseTwo_1" aria-expanded="false" aria-controls="collapseTwo_1">
                                    How do I edit my CV?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo_1" class="panel-collapse collapse" role="tabpanel"
                             aria-labelledby="headingTwo_1">
                            <div class="panel-body">

                                Once you've completed your CV, we will automatically create a CV-Library account for
                                you and your login details will be emailed to you. Simply login and edit your CV at
                                any time.
                                <br>
                                If you already have a CV-Library account your new CV will be added to it, for you to
                                edit at any time.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-primary">
                        <div class="panel-heading" role="tab" id="headingThree_1">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1"
                                   href="#collapseThree_1" aria-expanded="false" aria-controls="collapseThree_1">
                                    Can I build my CV from my smartphone?

                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree_1" class="panel-collapse collapse" role="tabpanel"
                             aria-labelledby="headingThree_1">
                            <div class="panel-body">
                                Yes, you can use CV Builder from any device, including your PC, laptop, tablet or
                                smartphone.

                            </div>
                        </div>
                    </div>
                    <div class="panel panel-primary">
                        <div class="panel-heading" role="tab" id="headingThree_2">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1"
                                   href="#collapseThree_2" aria-expanded="false" aria-controls="collapseThree_2">
                                    Can I delete my CV?

                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree_2" class="panel-collapse collapse" role="tabpanel"
                             aria-labelledby="headingThree_2">
                            <div class="panel-body">
                                Yes, once you've found your ideal job you may wish to remove your CV. You can do so
                                by clicking here and then logging into your CV-Library account. You will then be
                                asked to enter your password again to authorise the deletion.

                            </div>
                        </div>
                    </div>
                    <div class="panel panel-primary">
                        <div class="panel-heading" role="tab" id="headingThree_3">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1"
                                   href="#collapseThree_3" aria-expanded="false" aria-controls="collapseThree_3">
                                    How is my CV sent to me?

                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree_3" class="panel-collapse collapse" role="tabpanel"
                             aria-labelledby="headingThree_3">
                            <div class="panel-body">
                                Once you've added all your details and you're happy with your CV, we will ask for
                                your email address and your CV will be emailed to you in minutes.

                            </div>
                        </div>
                    </div>
                    <div class="panel panel-primary">
                        <div class="panel-heading" role="tab" id="headingThree_4">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1"
                                   href="#collapseThree_4" aria-expanded="false" aria-controls="collapseThree_4">
                                    What format will my CV be in?

                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree_4" class="panel-collapse collapse" role="tabpanel"
                             aria-labelledby="headingThree_4">
                            <div class="panel-body">
                                Your CV will be emailed to you as a PDF.

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
