@extends('light.layouts.app')
@section('title')
    Dashboard - {{config('app.dashboard')}}
@endsection
@section('content')
<section class="content">
<section class="findJob pt-5 rec">
    <div class="container">
        <form action="./candidateSearched.html">
            <div class="row">
                <div class="col-md-8 col-12 my-auto py-5">
                    <h1 class="res text-start">
                        Never miss an opportunity with Job Alerts

                    </h1>
                    <h5 class="res fw-light text-start my-4">
                        Stay on top of your job search and always be sure you are the first to know about new roles.



                    </h5>
                    <h6 class="res fw-light text-start my-4">
                        Already registered? <a href="#" class=" my-3 ">View my Job Alerts</a>
                    </h6>
                </div>
                <div class="col-md-4 col-12 my-auto text-start">
                    <div class="jbe-form-container card shadow p-4">
                        <form action="#" method="post" id="create-jbe">
                            <h2 class="mb-3">Create Job Alert</h2>
                            <div class="itm my-2">

                                <label class="" for="keywords">Keywords/Job Title</label>
                                <input class="form-control spellcheck" id="keywords" name="q"
                                       placeholder="e.g. Sales" autocomplete="off">
                            </div>
                            <div class="itm my-2">

                                <label class=" mt20" for="location">Location</label>
                                <input class="form-control autocomplete ui-autocomplete-input" id="location"
                                       name="geo" placeholder="e.g. town or postcode" autocomplete="off">
                            </div>

                            <div class="itm my-2">
                                <label class="" for="email">Email Address</label>
                                <input placeholder="name@youremail.co.uk" class="form-control" type="email"
                                       id="email" name="email" required="">
                            </div>


                            <input class="btn btn-success mb-4" type="submit" id="create-jbe-submit"
                                   value="Create Job Alert">

                            <p class="text--small mt20">By creating a job alert with CV-Library you agree to our <a
                                        href="">Privacy Policy</a> and <a href="">Terms &amp;
                                    Conditions</a></p>
                        </form>
                    </div>

                </div>

            </div>
        </form>
    </div>
</section>
<div class="container mt-5 py-5">
    <div class="row">
        <div class="col-md-6 col-12 mb-5 mt-md-auto mt-5">
            <div class="jbe-video-col">
                <div class="jbe-video-wrapper">
                    <iframe src="https://player.vimeo.com/video/642333129?h=ce8cf60272&title=0&byline=0&portrait=0" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen="" title="Job Alerts" class="jbe-video"></iframe>
                </div>
                <h6 class="text-dark">Great companies like these are hiring on <span>CV-Library</span></h6>
                <img src="https://www.cv-library.co.uk/assets/images/jbe-companies-1955cb7154c6b214ba90714c5dfcbff81569f747e0dcd968b4400fc5e16fc0cb.png" alt="Great companies hiring on CV-Library">
            </div>
        </div>
        <div class="col-md-6 col-12 my-4">
            <h2 class="text-dark mb-5">
                Why Setup Job Alerts?

            </h2>
            <div class="itm my-4">
                <h4 class="text-dark mb-3">
                    Get jobs straight to your email inbox

                </h4>
                <h5 class="text-dark fw-light mb-2">
                    Keep up-to-date with the latest jobs matching your criteria. Our alerts are easy to review on all devices, including desktop, mobile and email.


                </h5>
            </div>
            <div class="itm my-4">
                <h4 class="text-dark mb-3">
                    Be the first to apply

                </h4>
                <h5 class="text-dark fw-light mb-2">
                    Stay ahead of the competition and be the first to apply to jobs on CV-Library. You can apply in seconds with our powerful 1-Click apply process.



                </h5>
            </div>
            <div class="itm my-4">
                <h4 class="text-dark mb-3">
                    Quick & easy setup
                </h4>
                <h5 class="text-dark fw-light mb-2">
                    It takes less than one minute to create a Job Alert on CV-Library. You can manage your alerts at any time and ensure you find the right jobs with ease.

                </h5>
            </div>
            <div class="itm my-4">
                <h4 class="text-dark mb-3">
                    Create up to 20 alerts

                </h4>
                <h5 class="text-dark fw-light mb-2">
                    Create multiple alerts to receive the jobs you want. Keep an eye on different locations, job titles and industries, so you never miss a job again.



                </h5>
            </div>
        </div>
    </div>
</div>
</section>
@endsection