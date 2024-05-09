<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
@include ('frontend/bootstrap')
<link href="{{ asset('builderAssets/vndor.css') }}" rel="stylesheet">
<link href="{{ asset('builderAssets/main.blade.php') }}" rel="stylesheet">
<nav class="navbar navbar-expand-lg bg-purp">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">4Fresh</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item mx-md-3">
                    <a class="nav-link" href="{{ url('search-job') }}">Search Jobs</a></a>
                </li>
                <li class="nav-item mx-md-3">
                    <a class="nav-link" href="{{ url('cv-builder') }}">CV
                        Builder</a></a>
                </li>
                <li class="nav-item mx-md-3">
                    <a class="nav-link"href="{{ url('job-alert') }}">Job
                        Alerts</a></a>
                </li>
                <li class="nav-item mx-md-3">
                    <a class="nav-link"href="{{ url('help-center') }}">Help Center</a></a>
                </li>
            </ul>
            <ul class="nav navbar-right">
                @guest
                    <li class="site-nav__item"><a class="site-nav__link site-nav__link--login    btn btn-light"
                            href="{{ url('login') }}" id="nav-login">Login</a></li>
                    <li class="site-nav__item"><a class="site-nav__link site-nav__link--register btn btn-success-light"
                            href="{{ url('register') }}" id="nav-signup">Register</a></li>
                @endguest
                @auth
                    <li class="site-nav__item"><a class="site-nav__link site-nav__link--register btn btn-success-light"
                            href="{{ url('dashboard') }}" id="nav-signup">My Account</a></li>
                @endauth
                <li class="site-nav__item"><a class="site-nav__link site-nav__link--login    btn btn-light"
                        href="{{ url('recruiting') }}" id="nav-login">Start Recruiting Now</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="bg-gray container">
    <div class="row article bg--light-gray">
        <div class="article__body col-md-4 col-12  py-5" style="background: white;">
            {{-- <ul class="alert alert-danger ms-0" role="alert">
            @if ($errors->any())
                <li> {{ implode('', $errors->all(':message')) }}</li>
            @endif
            </ul> --}}


            @if ($errors->any())
                <ul class="alert alert-danger ms-0 p-3 ps-5-force show_validation_errors" role="alert">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form id="form" action="{{route('resume-builder.update', $user_id) }}" name='registration' method="POST" id="parsley-div"
              >
                @csrf
                @method('PUT')  
                @foreach ($resume as $item)
                    <label for="name"> <i class="fas fa-signature"></i> Full Name</label>
                    <input class="form-control" name="name" id="name" value="{{ $item->name }}"
                        type="text" placeholder="Your Full Name" pattern="[a-zA-Z ]{3,30}" data-parsley-minwords="2"
                        minlength="3" required>

                    <label for="job"> <i class="fas fa-briefcase"></i> Desired job </label>
                    <input class="form-control" name="job" value="{{ $item->role }}" id="job"
                        type="text" placeholder="Your Desired job" minlength="3" required>

                    <div class="grid-x grid-margin-x" data-parsley-validate>
                        <div class="cell small-6">
                            <label for="email"> <i class="fas fa-at"></i> Email </label>
                            <input class="form-control" value="{{ $item->email }}" name="email"
                                data-parsley-type="email" id="email" type="email" placeholder="Your Email"
                                required>
                        </div>
                        <div class="cell small-6">
                            <label for="phone"> <i class="fas fa-phone"></i> Phone </label>
                            <input class="form-control" name="phone" value="{{ $item->phone }}" id="phone"
                                type="tel" data-parsley-length="[9, 14]" pattern="^[+]{0,1}[0-9]{1,4}[0-9]*"
                                placeholder="Your Phone Number" required>
                        </div>
                    </div>


                    <label for="web-sites"> <i class="fas fa-link"></i> Links </label>
                    <div class="grid-x " data-parsley-validate>
                        <div class="cell small-10">
                            <input class="form-control" name="website" value="{{ $item->website }}" id="web-sites"
                                type="url" placeholder="Your Site/Blog Link" required>
                        </div>
                        <div class="cell small-2">
                            <a id="button-web-sites_add" class="button expanded" ><i
                                    class="fas fa-plus-square"></i></a>
                        </div>
                    </div>


                    <label for="select-social-media"> <i class="fas fa-network-wired"></i> Social Media </label>
                    <div class="grid-x" data-parsley-validate>
                        <div class="cell small-3">
                            <select id="select-social-media" name="social-media" value="{{ $item->social }}"
                                class="fab text-dark" required>
                                <option disabled>Select</option>
                                <option {{ $item->social == 'LinkedIn' ? 'Selected' : '' }} value="LinkedIn">&#xf0e1;
                                    LinkedIn</option>
                                <option {{ $item->social == 'GitHub' ? 'Selected' : '' }} value="GitHub">&#xf09b;
                                    GitHub</option>
                                <option {{ $item->social == 'Facebook' ? 'Selected' : '' }} value="Facebook">&#xf09a;
                                    Facebook</option>
                                <option {{ $item->social == 'Twitter' ? 'Selected' : '' }} value="Twitter">&#xf099;
                                    Twitter</option>
                                <option {{ $item->social == 'GitLab' ? 'Selected' : '' }} value="GitLab">&#xf296;
                                    GitLab</option>
                                <option {{ $item->social == 'BitBucket' ? 'Selected' : '' }} value="BitBucket">
                                    &#xf171; BitBucket</option>
                                <option {{ $item->social == 'Behance' ? 'Selected' : '' }} value="Behance">&#xf1b4;
                                    Behance</option>
                                <option {{ $item->social == 'blogger' ? 'Selected' : '' }} value="blogger">&#xf37c;
                                    blogger</option>
                                <option {{ $item->social == 'Dribbble' ? 'Selected' : '' }} value="Dribbble">&#xf17d;
                                    Dribbble</option>
                                <option {{ $item->social == 'Youtube' ? 'Selected' : '' }} value="Youtube">&#xf167;
                                    Youtube</option>
                                <option {{ $item->social == 'Google' ? 'Selected' : '' }} value="Google">&#xf0d5;
                                    Google+</option>
                                <option {{ $item->social == 'Instagram' ? 'Selected' : '' }} value="Instagram">
                                    &#xf16d; Instagram</option>
                                <option {{ $item->social == 'Medium' ? 'Selected' : '' }} value="Medium">&#xf3c7;
                                    Medium</option>
                                <option {{ $item->social == 'Pinterest' ? 'Selected' : '' }} value="Pinterest">
                                    &#xf231; Pinterest</option>
                                <option {{ $item->social == 'QQ' ? 'Selected' : '' }} value="QQ">&#xf1d6; QQ
                                </option>
                                <option {{ $item->social == 'Quora' ? 'Selected' : '' }} value="Quora">&#xf2c4; Quora
                                </option>
                                <option {{ $item->social == 'Skype' ? 'Selected' : '' }} value="Skype">&#xf17e; Skype
                                </option>
                                <option {{ $item->social == 'Slack' ? 'Selected' : '' }} value="Slack">&#xf198; Slack
                                </option>
                                <option {{ $item->social == 'StackOverflow' ? 'Selected' : '' }}
                                    value="StackOverflow">&#xf16c; StackOverflow</option>
                                <option {{ $item->social == 'Telegram' ? 'Selected' : '' }} value="Telegram">&#xf3fe;
                                    Telegram</option>
                                <option {{ $item->social == 'Tumblr' ? 'Selected' : '' }} value="Tumblr">&#xf173;
                                    Tumblr</option>
                                <option {{ $item->social == 'Twitch' ? 'Selected' : '' }} value="Twitch">&#xf1e8;
                                    Twitch</option>
                                <option {{ $item->social == 'Vimeo' ? 'Selected' : '' }} value="Vimeo">&#xf40a; Vimeo
                                </option>
                            </select>
                        </div>
                        <div class="cell small-7">
                            <input class="form-control" value="{{ $item->social_url }}" name="social_url"
                                id="social-media" type="url" placeholder="Your Profile Link" required>
                        </div>
                        <div class="cell small-2">
                            <a id="button-social-media_add" class="button expanded"  ><i
                                    class="fas fa-plus-square"></i></a>
                        </div>
                    </div>
                    <label for="resume"> <i class="fas fa-pencil-alt"></i> Resume </label>
                    <textarea class="form-control" name="resume" id="resume" placeholder="Your Resume..." data-parsley-minwords="6"
                        required>{{ $item->resume_summary }}</textarea>
                @endforeach

                <div class="resume-summary"> <label for=""> Professional summary templates </label>
                    <div class="summary-main">
                        @foreach ($summary as $item)
                            @if ($item->status === '1')
                                <div class="summary-item row ">
                                    <div class="px-0 col-10">
                                        <p class="mb-0">{{ $item->summary }}</p>
                                    </div>
                                    <div class="px-0 col-2 my-auto text-end">
                                        <a class="button fillSummary">Add</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach

                    </div>
                </div>

                <ul class="tabs h-100" data-active-collapse="true" data-tabs id="collapsing-tabs">
                    <li class="tabs-title is-active"><a href="#experience" aria-selected="true"><i
                                class="fas fa-briefcase"></i> Experiences</a></li>
                    <li class="tabs-title"><a href="#project"><i class="fas fa-box-open"></i> Projects</a></li>
                    <li class="tabs-title"><a href="#education"><i class="fas fa-university"></i> Educations</a>
                    </li>
                    <li class="tabs-title"><a href="#skills"><i class="fas fa-wrench"></i> Skills</a></li>
                    <li class="tabs-title"><a href="#languages"><i class="fa fa-language"></i> Languages</a></li>
                    <li class="tabs-title"><a href="#interests"><i class="fas fa-plus"></i> Interests</a></li>
                </ul>
                <div class="tabs-content" data-tabs-content="collapsing-tabs">

                    <!-- experiences -->
                    <div class="tabs-panel is-active" id="experience">
                        @foreach ($experience as $item)
                            <!-- Role -->
                            <label> <i class="far fa-user"></i> Role
                                <input class="form-control" id="experience_role" value="{{ $item->role }}"
                                    name="experience_role" type="text" placeholder="Your Role" required>
                            </label>
                            <label> <i class="far fa-building"></i> Company
                                <input class="form-control" id="experience_company" value="{{ $item->company }}"
                                    name="experience_company" type="text" placeholder="Your Company" required>
                            </label>
                            <div class="grid-x" data-parsley-validate>
                                <div class="cell small-6">
                                    <!-- From -->
                                    <label> <i class="far fa-calendar-alt"></i> From
                                        <input class="form-control" id="experience_from"
                                            value="{{ $item->experience_from }}" name="experience_from"
                                            type="month" placeholder="From" required>
                                    </label>
                                </div>
                                <div class="cell small-6">
                                    <!-- To -->
                                    <label> <i class="far fa-calendar-alt"></i> To
                                        <input class="form-control" id="experience_to"
                                            value="{{ $item->experience_to }}" type="month" name="experience_to"
                                            placeholder="To" data-parsley-date-gt="#experience_from">
                                    </label>
                                </div>
                            </div>
                            <!-- Experience Description -->
                            <label> <i class="fas fa-tags"></i> Tags
                                <input class="form-control" type="text" id="experience_tags"
                                    value="{{ $item->tags }}" name="experience_tags"
                                    placeholder="Your Experience Tags (Tag1, Tag2, ...)">
                            </label>

                            <!-- Experience Tags -->
                            <label> <i class="fas fa-pencil-alt"></i> Description
                                <textarea class="form-control" required data-parsley-minwords="6" id="experience_description"
                                    name="experience_description" placeholder="Describe Your Experience">{{ $item->description }}</textarea>
                            </label>
                        @endforeach

                        {{-- <button id="button-experience_add" class="button expanded" type="submit"><i
                                class="fas fa-plus-square"></i></button> --}}

                    </div>

                    <!-- projects -->
                    <div class="tabs-panel" id="project">

                        @foreach ($project as $item)
                            <!-- Role -->
                            <label> <i class="fas fa-signature"></i> Name
                                <input class="form-control" id="project_name" value="{{ $item->name }}"
                                    name="project_name" type="text" placeholder="Your Project Name" required>
                            </label>

                            <label> <i class="fas fa-link"></i> Link
                                <input class="form-control" id="project_link" name="project_link"
                                    value="{{ $item->link }}" type="url" placeholder="Your Project Link">
                            </label>
                            <div class="grid-x" data-parsley-validate>
                                <div class="cell small-6">
                                    <!-- From -->
                                    <label> <i class="far fa-calendar-alt"></i> From
                                        <input class="form-control" id="project_from" name="project_from"
                                            value="{{ $item->proj_from }}" type="month" placeholder="From"
                                            required>
                                    </label>
                                </div>
                                <div class="cell small-6">
                                    <!-- To -->
                                    <label> <i class="far fa-calendar-alt"></i> To
                                        <input class="form-control" id="project_to" name="project_to"
                                            value="{{ $item->proj_to }}" type="month"
                                            data-parsley-date-gt="#project_from" placeholder="To">
                                    </label>
                                </div>
                            </div>
                            <!-- Projects Tags -->
                            <label> <i class="fas fa-tags"></i> Tags
                                <input class="form-control" type="text" id="project_tags"
                                    value="{{ $item->tags }}" name="project_tags"
                                    placeholder="Your Projects Tags (Tag1, Tag2, ...)">
                            </label>
                            <!-- Projects Description -->
                            <label> <i class="fas fa-pencil-alt"></i> Description
                                <textarea class="form-control" name="project_description" id="project_description"
                                    placeholder="Describe Your Project" required data-parsley-minwords="6">{{ $item->description }}</textarea>
                            </label>
                        @endforeach

                        {{-- <button id="button-project_add" class="button expanded" type="submit"><i
                                class="fas fa-plus-square"></i></button> --}}

                    </div>
                    <!-- educations -->
                    <div class="tabs-panel" id="education">

                        @foreach ($education as $item)
                            <!-- Role -->
                            <label> <i class="fas fa-signature"></i> Degree
                                <input class="form-control" id="education_degree" value="{{ $item->degree }}"
                                    name="education_degree" type="text" placeholder="Degree" required>
                            </label>
                            <label> <i class=" fa fa-university"></i> School
                                <input class="form-control" id="education_school" value="{{ $item->school }}"
                                    name="education_school" type="text" placeholder="School Name" required>
                            </label>
                            <div class="grid-x" data-parsley-validate>
                                <div class="cell small-6">
                                    <!-- From -->
                                    <label> <i class="far fa-calendar-alt"></i> From
                                        <input class="form-control" id="education_from"
                                            value="{{ $item->edu_from }}" name="education_from" type="month"
                                            placeholder="From" required>
                                    </label>
                                </div>
                                <div class="cell small-6">
                                    <!-- To -->
                                    <label> <i class="far fa-calendar-alt"></i> To
                                        <input class="form-control" id="education_to" value="{{ $item->edu_to }}"
                                            name="education_to" type="month" placeholder="To"
                                            data-parsley-date-gt="#education_from">
                                    </label>
                                </div>
                            </div>
                            <!-- Education Description -->
                            <label> <i class="fas fa-pencil-alt"></i> Description
                                <textarea id="education_description" name="education_description" placeholder="Describe Your Education">{{ $item->description }}</textarea>
                            </label>
                        @endforeach
                        {{-- <button id="button-education_add" class="button expanded" type="submit"><i
                                class="fas fa-plus-square"></i></button> --}} 
                    </div>
                    <!-- skills -->
                    <div class="tabs-panel" id="skills">

                        <div class="grid-x" data-parsley-validate>
                            @foreach ($skill as $item)
                                <div class="cell small-8">
                                    <input class="form-control" id="skill" name="skill"
                                        value="{{ $item->skill }}" type="text" placeholder="Your Skill"
                                        required>
                                </div>
                                <div class="cell small-4">
                                    <select name="skill_level" id="select-skill_level" required class="text-dark">
                                        <option disabled>Level</option>
                                        <option {{ $item->skill_level == '50' ? 'Selected' : '' }} value="50">
                                            Beginner</option>
                                        <option {{ $item->skill_level == '75' ? 'Selected' : '' }} value="75">
                                            Intermediate</option>
                                        <option {{ $item->skill_level == '100' ? 'Selected' : '' }} value="100">
                                            Expert</option>
                                    </select>
                                </div>
                            @endforeach

                            <a id="button-skill_add" class="button expanded" >
                                <i class="fas fa-plus-square"></i>
                            </a>
                        </div>

                    </div>

                    <!-- languages -->
                    <div class="tabs-panel" id="languages">

                        <div class="grid-x" data-parsley-validate>
                            @foreach ($language as $item)
                                <div class="cell small-8">
                                    <input class="form-control" id="language" name="language"
                                        value="{{ $item->language }}" type="text" placeholder="Your language"
                                        required>
                                </div>
                                <div class="cell small-4">
                                    <select name="language_level" id="select-language_level" required
                                        class="text-dark">
                                        <option disabled>Level</option>
                                        <option {{ $item->language_level == 'Beginner' ? 'Selected' : '' }}
                                            value="Beginner">Beginner</option>
                                        <option {{ $item->language_level == 'Conversational' ? 'Selected' : '' }}
                                            value="Conversational">Conversational</option>
                                        <option {{ $item->language_level == 'Business' ? 'Selected' : '' }}
                                            value="Business">Business </option>
                                        <option {{ $item->language_level == 'Fluent' ? 'Selected' : '' }}
                                            value="Fluent">Fluent </option>
                                    </select>
                                </div>
                            @endforeach

                        </div>
                        <a id="button-language_add" class="button expanded">
                            <i class="fas fa-plus-square"></i>
                        </a>

                    </div>

                    <!-- Interests -->
                    <div class="tabs-panel" id="interests">
                        @foreach ($interest as $item)
                            <input class="form-control" id="interest" value="{{$item->interest}}" name="interest" type="text"
                                placeholder="Your interest" required>
                        @endforeach
                        <a id="button-interest_add" class="button expanded">
                            <i class="fas fa-plus-square"></i>
                        </a>

                    </div>
                </div>
                <button class="button" id="submit" onclick="">
                    Save Changes
                </button>
            </form>
        </div>

        <div class="article__image col-md-8 col-12">
            <div class="paper cv">
                <div id="cvElement">

                    <!-- sidebar of cv -->
                    <div class="cv__sidebar">
                        {{-- <img class="thumbnail sidebar__img" src="{{ asset('builderAssets/images/user.png') }}" alt="profile."> --}}
                        <h1 id="cv__name" class="cv__title sidebar__name">Enter Your Name</h1>
                        <h2 id="cv__job" class="cv__title sidebar__job">Your Role</h2>
                        <hr>
                        <dl class="sidebar__info">
                            <dd class="cv__info">
                                <i class="fas fa-at"></i>
                                <span id="cv__email">Your Email</span>
                                <div class="btn-block">
                                    <button class="icon"><i class="fas fa-paint-brush"></i></button>
                                    <button class="icon"><i class="fas fa-trash"></i></button>
                                </div>
                            </dd>
                            <dd class="cv__info">
                                <i class="fas fa-phone"></i>
                                <span id="cv__phone">Your Phone </span>
                                <div class="btn-block">
                                    <button class="icon"><i class="fas fa-paint-brush"></i></button>
                                    <button class="icon"><i class="fas fa-trash"></i></button>
                                </div>
                            </dd>
                            <dd>
                                <div id="cv__web-sites">
                                    <div class="cv__info">
                                        <i class="fas fa-globe-europe"></i> <a href="http://sakhrihoussem.me">Your
                                            Website </a>
                                        <div class="btn-block">
                                            <button class="icon"><i class="fas fa-paint-brush"></i></button>
                                            <button class="icon"><i class="fas fa-trash"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </dd>
                            <dd id="cv__social-media">
                                <div class="cv__info">
                                    <i class="fab fa-github"></i> Your Social Links
                                    <div class="btn-block">
                                        <button class="icon"><i class="fas fa-paint-brush"></i></button>
                                        <button class="icon"><i class="fas fa-trash"></i></button>
                                    </div>
                                </div>

                            </dd>

                            <!-- skills -->
                            <dt class="sidebar__title clearfix"><i class="fas fa-wrench"></i> Skills</dt>
                            <dd id="cv__skills">
                                <div class="cv__info flex jcb aic">
                                    <span>Add Skills </span>
                                    <div class="btn-block">
                                        <button class="icon"><i class="fas fa-paint-brush"></i></button>
                                        <button class="icon"><i class="fas fa-trash"></i></button>
                                    </div>
                                    <progress class="secondary float-right" max="100" value="90"> <button
                                            class="icon"><i class="fas fa-trash"></i></button></progress>
                                </div>
                                <div class="cv__info flex jcb aic">
                                    <span>Add Skills</span>
                                    <div class="btn-block">
                                        <button class="icon"><i class="fas fa-paint-brush"></i></button>
                                        <button class="icon"><i class="fas fa-trash"></i></button>
                                    </div>
                                    <progress class="secondary float-right" max="100" value="85"></progress>
                                </div>

                                <div class="cv__info flex jcb aic">
                                    <span>Add Skills</span>
                                    <div class="btn-block ">
                                        <button class="icon"><i class="fas fa-paint-brush"></i></button>
                                        <button class="icon"><i class="fas fa-trash"></i></button>
                                    </div>
                                    <progress class="secondary float-right" max="100" value="80"></progress>
                                </div>
                            </dd>

                            <!-- languages -->
                            <dt class="sidebar__title"><i class="fas fa-language"></i> Languages</dt>
                            <dd id="cv__languages">
                                <div class="cv__info">
                                    English
                                    <div class="btn-block">
                                        <button class="icon"><i class="fas fa-paint-brush"></i></button>
                                        <button class="icon"><i class="fas fa-trash"></i></button>
                                    </div>
                                </div>
                                <div class="cv__info">
                                    French
                                    <div class="btn-block">
                                        <button class="icon"><i class="fas fa-paint-brush"></i></button>
                                        <button class="icon"><i class="fas fa-trash"></i></button>
                                    </div>
                                </div>
                                <div class="cv__info">
                                    Arabic
                                    <div class="btn-block">
                                        <button class="icon"><i class="fas fa-paint-brush"></i></button>
                                        <button class="icon"><i class="fas fa-trash"></i></button>
                                    </div>
                                </div>
                            </dd>

                            <!-- interests -->
                            <dt class="sidebar__title"><i class="fas fa-plus"></i> Interests</dt>
                            <dd id="cv__interests">
                                <div class="cv__info">
                                    Add Interest
                                    <div class="btn-block">
                                        <button class="icon"><i class="fas fa-paint-brush"></i></button>
                                        <button class="icon"><i class="fas fa-trash"></i></button>
                                    </div>
                                </div>
                                <div class="cv__info">
                                    Add Interest
                                    <div class="btn-block">
                                        <button class="icon"><i class="fas fa-paint-brush"></i></button>
                                        <button class="icon"><i class="fas fa-trash"></i></button>
                                    </div>
                                </div>
                                <div class="cv__info">
                                    Add Interest
                                    <div class="btn-block">
                                        <button class="icon"><i class="fas fa-paint-brush"></i></button>
                                        <button class="icon"><i class="fas fa-trash"></i></button>
                                    </div>
                                </div>
                            </dd>
                        </dl>
                    </div>

                    <!-- main of cv -->
                    <div class="cv__main">

                        <!-- Resume -->
                        <h1 class="main__title"><i class="fas fa-pencil-alt"></i> Summary</h1>
                        <div class="cv__info pd-3" id="cv__resume">

                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, ratione eligendi.
                            </p>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto dolor, velit sequi
                                vitae recusandae quaerat reprehenderit totam numquam perspiciatis nostrum magni
                                praesentium ullam harum molestiae vero nam aliquid mollitia aspernatur?</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, delectus?</p>

                        </div>

                        <!-- Experiences -->
                        <div id="cv__experiences">
                            <h1 class="main__title"><i class="fas fa-briefcase"></i> Experiences</h1>

                            <div class="cv__experience cv__info pd-3">
                                <h2>
                                    Add Your Experience
                                    <div class="btn-block">
                                        <button class="icon"><i class="fas fa-paint-brush"></i></button>
                                        <button class="icon"><i class="fas fa-trash"></i></button>
                                    </div>
                                    <small>Add Experience Year</small>
                                </h2>
                                <h3>Add Experience Title</h3>
                                <p>Add Experience Role</p>
                                <ul>
                                    <li>Add Your Work Experience Description
                                    </li>
                                    <li>Add Your Work Experience Description
                                    </li>
                                    <li>Add Your Work Experience Description
                                    </li>
                                    <li>Add Your Work Experience Description
                                    </li>
                                </ul>
                                <div class="tags">
                                    <span class="label">Add Roll Tag</span>
                                    <span class="label">Add Roll Tag</span>
                                    <span class="label">Add Roll Tag</span>
                                    <span class="label">Add Roll Tag</span>
                                    <span class="label">Add Roll Tag</span>
                                    <span class="label">Add Roll Tag</span>
                                </div>
                            </div>

                        </div>

                        <!-- Projects -->
                        <div id="cv__projects">
                            <h1 class="main__title"><i class="fas fa-box-open"></i> Projects</h1>

                            <div class="cv__project cv__info pd-3">
                                <h2>
                                    Add Your Projects
                                    <div class="btn-block">
                                        <button class="icon"><i class="fas fa-paint-brush"></i></button>
                                        <button class="icon"><i class="fas fa-trash"></i></button>
                                    </div>
                                    <small>Add Project Year</small>
                                </h2>
                                <p>Add Your Projects Description</p>
                                <div class="tags">
                                    <span class="label">Project Name</span>
                                    <span class="label">Project Name</span>
                                </div>
                            </div>
                            <div class="cv__project cv__info pd-3">
                                <h2>
                                    Add Your Projects
                                    <div class="btn-block">
                                        <button class="icon"><i class="fas fa-paint-brush"></i></button>
                                        <button class="icon"><i class="fas fa-trash"></i></button>
                                    </div>
                                    <small>Add Project Year</small>
                                </h2>
                                <p>Add Your Projects Description</p>
                                <div class="tags">
                                    <span class="label">Project Name</span>
                                    <span class="label">Project Name</span>
                                </div>
                            </div>


                        </div>

                        <!-- Educations -->
                        <div id="cv__educations">
                            <h1 class="main__title"><i class=" fa fa-university"></i> Educations</h1>

                            <div class="cv__education cv__info pd-3">
                                <h2>
                                    Add Education
                                    <div class="btn-block">
                                        <button class="icon"><i class="fas fa-paint-brush"></i></button>
                                        <button class="icon"><i class="fas fa-trash"></i></button>
                                    </div>
                                    <small>Add Your Education</small>
                                </h2>
                                <h3>Add Your Education Description Here</h3>
                                <p></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('builderAssets/jQ.js') }}"></script>
<script src="{{ asset('builderAssets/vendor.js') }}"></script>
<script src="{{ asset('builderAssets/script.blade.php') }}"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"> --}}
