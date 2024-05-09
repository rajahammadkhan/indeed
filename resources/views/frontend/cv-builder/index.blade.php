 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
     integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
 @include ('frontend/bootstrap')
 <link href="{{ asset('builderAssets/vndor.css') }}" rel="stylesheet">
 <link href="{{ asset('builderAssets/main.blade.php') }}" rel="stylesheet">
 <nav class="navbar navbar-expand-lg bg-purp">
     <div class="container-fluid">
         <a class="navbar-brand" href="{{ url('/') }}">4Fresh</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
             data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
             aria-label="Toggle navigation">
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
             <form id="form" action="{{ url('resume-builder') }}" method="POST"
                 data-parsley-trigger="focusin focusout keypress" id="parsley-div" name="registration">
                 @csrf
                 <label for="name"> <i class="fas fa-signature"></i> Full Name</label>
                 <input class="form-control" name="name" id="name" type="text" placeholder="Your Full Name"
                     pattern="[a-zA-Z ]{3,30}" data-parsley-minwords="2" minlength="3" required>

                 <label for="job"> <i class="fas fa-briefcase"></i> Desired job </label>
                 <input class="form-control" name="job" id="job" type="text" placeholder="Your Desired job"
                     minlength="3" required>

                 <div class="grid-x grid-margin-x" data-parsley-validate>
                     <div class="cell small-6">
                         <label for="email"> <i class="fas fa-at"></i> Email </label>
                         <input class="form-control" name="email" data-parsley-type="email"
                             onkeyup="updateData(this.value, '#cv__email')" id="email" type="email"
                             placeholder="Your Email" required>
                     </div>

                     <div class="cell small-6">
                         <label for="phone"> <i class="fas fa-phone"></i> Phone </label>
                         <input class="form-control" onkeyup="updateData(this.value, '#cv__phone')" name="phone"
                             id="phone" type="tel" data-parsley-length="[9, 14]"
                             pattern="^[+]{0,1}[0-9]{1,4}[0-9]*" placeholder="Your Phone Number" required>
                     </div>
                 </div>


                 <label for="web-sites"> <i class="fas fa-link"></i> Links </label>
                 <div class="grid-x " data-parsley-validate>
                     <div class="cell small-12">
                         <input class="form-control" name="website" id="web-sites" type="url"
                             placeholder="Your Site/Blog Link" onkeyup="updateData(this.value, '#cv__web-sites')"
                             required>
                     </div>
                     {{-- <div class="cell small-2">
                         <button id="button-website_add" class="button expanded" type="submit"><i
                                 class="fas fa-plus-square"></i></button>
                     </div> --}}
                 </div>


                 {{-- <label for="select-social-media"> <i class="fas fa-network-wired"></i> Social Media </label>
                 <div class="grid-x" data-parsley-validate>
                     <div class="cell small-3">
                         <select id="select-social-media" name="social-media" class="fab" required>
                             <option value="" selected disabled>Select</option>
                             <option value="&#xf0e1; LinkedIn">&#xf0e1; LinkedIn</option>
                             <option value="&#xf09b; GitHub">&#xf09b; GitHub</option>
                             <option value="&#xf09a; Facebook">&#xf09a; Facebook</option>
                             <option value="&#xf099; Twitter">&#xf099; Twitter</option>
                             <option value="&#xf296; GitLab">&#xf296; GitLab</option>
                             <option value="&#xf171; BitBucket">&#xf171; BitBucket</option>
                             <option value="&#xf1b4; Behance">&#xf1b4; Behance</option>
                             <option value="&#xf37c; blogger">&#xf37c; blogger</option>
                             <option value="&#xf17d; Dribbble">&#xf17d; Dribbble</option>
                             <option value="&#xf167; Youtube">&#xf167; Youtube</option>
                             <option value="&#xf0d5; Google">&#xf0d5; Google+</option>
                             <option value="&#xf16d; Instagram">&#xf16d; Instagram</option>
                             <option value="&#xf3c7; Medium">&#xf3c7; Medium</option>
                             <option value="&#xf231; Pinterest">&#xf231; Pinterest</option>
                             <option value="&#xf1d6; QQ">&#xf1d6; QQ</option>
                             <option value="&#xf2c4; Quora">&#xf2c4; Quora</option>
                             <option value="&#xf17e; Skype">&#xf17e; Skype</option>
                             <option value="&#xf198; Slack">&#xf198; Slack</option>
                             <option value="&#xf16c; StackOverflow">&#xf16c; StackOverflow</option>
                             <option value="&#xf3fe; Telegram">&#xf3fe; Telegram</option>
                             <option value="&#xf173; Tumblr">&#xf173; Tumblr</option>
                             <option value="&#xf1e8; Twitch">&#xf1e8; Twitch</option>
                             <option value="&#xf40a; Vimeo">&#xf40a; Vimeo</option>
                         </select>
                     </div>
                     <div class="cell small-7">
                         <input class="form-control" id="social-media" type="url" name="social_url"
                             placeholder="Your Profile Link" required>
                     </div>
                     <div class="cell small-2">
                         <a id="button-social-media_add" class="button expanded"><i
                                 class="fas fa-plus-square"></i></a>
                     </div>
                 </div> --}}
                 <label for="resume"> <i class="fas fa-pencil-alt"></i> Resume </label>
                 <textarea class="form-control" name="resume" id="resume" placeholder="Your Resume..." data-parsley-minwords="6"
                     value="Hello, World" required></textarea>

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

                 <script src="{{ asset('builderAssets/jQ.js') }}"></script>

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
                     <div class="experienceParent">

                         <div class="tabs-panel is-active " id="experience">
                             <div class="mainSection">
                                 <div class="experience cloneable" data-element-id="1">
                                     <!-- Role -->
                                     <label> <i class="far fa-user"></i> Role
                                         <input class="form-control" id="experience_role" name="experience_role"
                                             onkeyup="updateDataByParent(this.value, this.parentNode.parentNode, '.exp_role')"
                                             type="text" placeholder="Your Role" required>
                                     </label>
                                     <label> <i class="far fa-building"></i> Company
                                         <input class="form-control" id="experience_company"
                                             name="experience_company"
                                             onkeyup="updateDataByParent(this.value, this.parentNode.parentNode, '.exp_title')"
                                             type="text" placeholder="Your Company" required>
                                     </label>
                                     <div class="grid-x" data-parsley-validate>
                                         <div class="cell small-6">
                                             <!-- From -->
                                             <label> <i class="far fa-calendar-alt"></i> From
                                                 <input class="form-control" id="experience_from"
                                                     onchange="updateDataByParent(this.value, this.parentNode.parentNode.parentNode.parentNode, '.exp_from')"
                                                     name="experience_from" type="month" placeholder="From"
                                                     required>
                                             </label>
                                         </div>
                                         <div class="cell small-6">
                                             <!-- To -->
                                             <label> <i class="far fa-calendar-alt"></i> To
                                                 <input class="form-control" id="experience_to"
                                                     onchange="updateDataByParent(this.value, this.parentNode.parentNode.parentNode.parentNode, '.exp_to')"
                                                     type="month" name="experience_to" placeholder="To"
                                                     data-parsley-date-gt="#experience_from">
                                             </label>
                                         </div>
                                     </div>
                                     <!-- Experience Description -->
                                     <label> <i class="fas fa-tags"></i> Tags
                                         <input class="form-control taggs" type="text" id="experience_tags"
                                             name="experience_tags"
                                             placeholder="Your Experience Tags (Tag1, Tag2, ...)">
                                         <a id="button-tags_add" class="button w-auto"
                                             onclick="addTags(this.parentNode.parentNode)">
                                             Add Tags
                                         </a>
                                     </label>

                                     <!-- Experience Tags -->
                                     <label> <i class="fas fa-pencil-alt"></i> Description
                                         <textarea class="form-control" required data-parsley-minwords="6" id="experience_description"
                                             onkeyup="updateDataByParent(this.value, this.parentNode.parentNode, '.mainExperience ul')"
                                             name="experience_description" placeholder="Describe Your Experience"></textarea>
                                     </label>
                                 </div>
                             </div>
                             <a id="button-experience_add" class="button expanded"
                                 onclick="addSec(`.experienceParent`, `.cv__experienceMain`)"><i
                                     class="fas fa-plus-square"></i></a>
                         </div>
                     </div>

                     <!-- projects -->
                     <div class="experienceParent projectParent ">

                         <div class="tabs-panel" id="project">
                             <div class="mainSection">
                                 <div class="experience cloneable" data-element-id="1">
                                     <!-- Role -->
                                     <label> <i class="fas fa-signature"></i> Name
                                         <input class="form-control" id="project_name" name="project_name"
                                             onkeyup="updateProjectDataByParent(this.value, this.parentNode.parentNode, '.proj_role')"
                                             type="text" placeholder="Your Project Name" required>
                                     </label>

                                     <label> <i class="fas fa-link"></i> Link
                                         <input class="form-control" id="project_link" name="project_link"
                                             onkeyup="updateProjectDataByParent(this.value, this.parentNode.parentNode, '.project_links')"
                                             type="url" placeholder="Your Project Link">
                                     </label>
                                     <div class="grid-x" data-parsley-validate>
                                         <div class="cell small-6">
                                             <!-- From -->
                                             <label> <i class="far fa-calendar-alt"></i> From
                                                 <input class="form-control" id="project_from" name="project_from"
                                                     onchange="updateProjectDataByParent(this.value, this.parentNode.parentNode.parentNode.parentNode, '.project_from')"
                                                     type="month" placeholder="From" required>
                                             </label>
                                         </div>
                                         <div class="cell small-6">
                                             <!-- To -->
                                             <label> <i class="far fa-calendar-alt"></i> To
                                                 <input class="form-control" id="project_to" name="project_to"
                                                     type="month" data-parsley-date-gt="#project_from"
                                                     onchange="updateProjectDataByParent(this.value, this.parentNode.parentNode.parentNode.parentNode, '.project_to')"
                                                     placeholder="To">
                                             </label>
                                         </div>
                                     </div>
                                     <!-- Projects Tags -->
                                     <label> <i class="fas fa-tags"></i> Tags
                                         <input class="form-control taggs" type="text" id="project_tags"
                                             name="project_tags" placeholder="Your Projects Tags (Tag1, Tag2, ...)">
                                         <a id="button-tags_add_pg" class="button w-auto"
                                             onclick="addProjectTags(this.parentNode.parentNode)">
                                             Add Tags</a>
                                     </label>
                                     <!-- Projects Description -->
                                     <label> <i class="fas fa-pencil-alt"></i> Description
                                         <textarea class="form-control" name="project_description" id="project_description"
                                             onkeyup="updateProjectDataByParent(this.value, this.parentNode.parentNode, '.project_decs')"
                                             placeholder="Describe Your Project" required data-parsley-minwords="6"></textarea>
                                     </label>


                                 </div>
                             </div>
                             <a id="button-experience_add" class="button expanded"
                                 onclick="addSec(`.projectParent`, `.cv__projectMain`)"><i
                                     class="fas fa-plus-square"></i></a>
                         </div>
                     </div>
                     <!-- educations -->
                     <div class="tabs-panel" id="education">

                         <!-- Role -->
                         <label> <i class="fas fa-signature"></i> Degree
                             <input class="form-control" id="education_degree" name="education_degree"
                                 onkeyup="updateData(this.value, '.edu_school')" type="text" placeholder="Degree"
                                 required>
                         </label>
                         <label> <i class=" fa fa-university"></i> School
                             <input class="form-control" id="education_school" name="education_school"
                                 onkeyup="updateData(this.value, '.edu_degree')" type="text"
                                 placeholder="School Name" required>
                         </label>
                         <div class="grid-x" data-parsley-validate>
                             <div class="cell small-6">
                                 <!-- From -->
                                 <label> <i class="far fa-calendar-alt"></i> From
                                     <input class="form-control" id="education_from" name="education_from"
                                         onchange="updateData(this.value, '.edu_from')" type="month"
                                         placeholder="From" required>
                                 </label>
                             </div>
                             <div class="cell small-6">
                                 <!-- To -->
                                 <label> <i class="far fa-calendar-alt"></i> To
                                     <input class="form-control" id="education_to" name="education_to"
                                         onchange="updateData(this.value, '.edu_to')" type="month" placeholder="To"
                                         data-parsley-date-gt="#education_from">
                                 </label>
                             </div>
                         </div>
                         <!-- Education Description -->
                         <label> <i class="fas fa-pencil-alt"></i> Description
                             <textarea id="education_description" name="education_description" onkeyup="updateData(this.value, '.edu_desc')"
                                 placeholder="Describe Your Education"></textarea>
                         </label>

                     </div>
                     <!-- skills -->
                     <div class="tabs-panel" id="skills">

                         <div class="grid-x" data-parsley-validate>
                             <div class="cell small-12" id="mainSkills">
                                 <input class="form-control skillsMain" id="" name="skill" type="text"
                                     placeholder="Your Skill" required>
                             </div>
                             {{-- <div class="cell small-4">
                                 <select name="skill_level" id="select-skill_level" required>
                                     <option disabled selected>Level</option>
                                     <option value="50">Beginner</option>
                                     <option value="75">Intermediate</option>
                                     <option value="100">Expert</option>
                                 </select>
                             </div> --}}
                             <a id="button-skill_add"
                                 onclick="addAnotherSkill('.skillsMain', '#mainSkills', '.skillMain', '#cv__skills')"
                                 class="button expanded">
                                 <i class="fas fa-plus-square"></i>
                             </a>
                         </div>
                     </div>

                     <!-- languages -->
                     <div class="tabs-panel" id="languages">

                         <div class="grid-x" data-parsley-validate>
                             <div class="cell small-12" id="mainLanguages">
                                 <input class="form-control languagesMain" id="" name="language"
                                     type="text" placeholder="Your language" required>
                             </div>
                             {{-- <div class="cell small-4">
                                 <select name="language_level" id="select-language_level" required>
                                     <option disabled selected>Level</option>
                                     <option value="Beginner">Beginner</option>
                                     <option value="Conversational">Conversational</option>
                                     <option value="Business">Business </option>
                                     <option value="Fluent">Fluent </option>
                                 </select>
                             </div> --}}
                         </div>
                         <a id="button-language_add" class="button expanded"
                             onclick="addAnotherSkill('.languagesMain', '#mainLanguages', '.langMain', '#cv__languages')">
                             <i class="fas fa-plus-square"></i>
                         </a>

                     </div>
                     <div class="tabs-panel" id="interests">

                         <div class="grid-x" data-parsley-validate>
                             <div class="cell small-12" id="mainInterest">
                                 <input class="form-control interestMain" id="" name="interest"
                                     type="text" placeholder="Your interest" required>
                             </div>
                             {{-- <div class="cell small-4">
                                 <select name="language_level" id="select-language_level" required>
                                     <option disabled selected>Level</option>
                                     <option value="Beginner">Beginner</option>
                                     <option value="Conversational">Conversational</option>
                                     <option value="Business">Business </option>
                                     <option value="Fluent">Fluent </option>
                                 </select>
                             </div> --}}
                         </div>
                         <a id="button-interest_add" class="button expanded"
                             onclick="addAnotherSkill('.interestMain', '#mainInterest', '.intMain', '#cv__interests')">
                             <i class="fas fa-plus-square"></i>
                         </a>

                     </div>

                     <!-- Interests -->
                     {{-- <div class="tabs-panel" id="interests">

                         <button id="button-interest_add" class="button expanded" type="submit">
                             <i class="fas fa-plus-square"></i>
                         </button>

                     </div> --}}
                 </div>
                 <button class="button" type="submit">
                     Create Resume
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
                                         <i class="fas fa-globe-europe"></i> <span>Your
                                             Website </span>
                                         <div class="btn-block">
                                             <button class="icon"><i class="fas fa-paint-brush"></i></button>
                                             <button class="icon"><i class="fas fa-trash"></i></button>
                                         </div>
                                     </div>
                                 </div>
                             </dd>
                             {{-- <dd id="cv__social-media">
                                 <div class="cv__info">
                                     <i class="fab fa-github"></i> Your Social Links
                                     <div class="btn-block">
                                         <button class="icon"><i class="fas fa-paint-brush"></i></button>
                                         <button class="icon"><i class="fas fa-trash"></i></button>
                                     </div>
                                 </div>

                             </dd> --}}

                             <!-- skills -->
                             <dt class="sidebar__title clearfix"><i class="fas fa-wrench"></i> Skills</dt>
                             <dd id="cv__skills">
                                 <div class="cv__info skillMain flex jcb aic">
                                     <span class="title">Add Skills </span>
                                     <div class="btn-block">
                                         <button class="icon"><i class="fas fa-paint-brush"></i></button>
                                         <button class="icon"><i class="fas fa-trash"></i></button>
                                     </div>
                                 </div>
                                 <div class="cv__info skillMain flex jcb aic">
                                     <span class="title">Add Skills </span>
                                     <div class="btn-block">
                                         <button class="icon"><i class="fas fa-paint-brush"></i></button>
                                         <button class="icon"><i class="fas fa-trash"></i></button>
                                     </div>
                                 </div>
                                 <div class="cv__info skillMain flex jcb aic">
                                     <span class="title">Add Skills </span>
                                     <div class="btn-block">
                                         <button class="icon"><i class="fas fa-paint-brush"></i></button>
                                         <button class="icon"><i class="fas fa-trash"></i></button>
                                     </div>
                                 </div>
                             </dd>

                             <!-- languages -->
                             <dt class="sidebar__title"><i class="fas fa-language"></i> Languages</dt>
                             <dd id="cv__languages">

                                 <div class="cv__info langMain">
                                     English
                                     <div class="btn-block">
                                         <button class="icon"><i class="fas fa-paint-brush"></i></button>
                                         <button class="icon"><i class="fas fa-trash"></i></button>
                                     </div>
                                 </div>

                                 <div class="cv__info langMain">
                                     French
                                     <div class="btn-block">
                                         <button class="icon"><i class="fas fa-paint-brush"></i></button>
                                         <button class="icon"><i class="fas fa-trash"></i></button>
                                     </div>
                                 </div>


                                 <div class="cv__info langMain">
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


                                 <div class="cv__info intMain">
                                     Add Interest
                                     <div class="btn-block">
                                         <button class="icon"><i class="fas fa-paint-brush"></i></button>
                                         <button class="icon"><i class="fas fa-trash"></i></button>
                                     </div>
                                 </div>
                                 <div class="cv__info intMain">
                                     Add Interest
                                     <div class="btn-block">
                                         <button class="icon"><i class="fas fa-paint-brush"></i></button>
                                         <button class="icon"><i class="fas fa-trash"></i></button>
                                     </div>
                                 </div>
                                 <div class="cv__info intMain">
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
                         <div id="cv__experiences" class="mainCVSection">
                             <h1 class="main__title"><i class="fas fa-briefcase"></i> Experiences</h1>
                             <div class="cv__experienceMain">

                                 <div class="cv__experience mainExperience cv__experiences cv__info pd-3 "
                                     data-element-id="1">
                                     <h2>
                                         <span class="exp_role"> Add Your Experience</span>
                                         <div class="btn-block">
                                             <button class="icon"><i class="fas fa-paint-brush"></i></button>
                                             <button class="icon"><i class="fas fa-trash"></i></button>
                                         </div>
                                         <small><span class="exp_to">Add Experience Year</span> - <span
                                                 class="exp_from"></span></small>
                                     </h2>
                                     <h3><span class="exp_title"> Add Experience Title</span></h3>
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
                                     {{-- <div class="tags">
                                         <span class="label">Add Roll Tag</span>
                                     </div> --}}
                                 </div>
                             </div>

                         </div>


                         <!-- Projects -->
                         <div id="cv__projects">
                             <h1 class="main__title"><i class="fas fa-box-open"></i> Projects</h1>
                             <div class="cv__projectMain">
                                 <div class="cv__project mainExperience cv__info pd-3" data-element-id="1">
                                     <h2>
                                         <span class="proj_role"> Add Your projerience</span>
                                         <div class="btn-block">
                                             <button class="icon"><i class="fas fa-paint-brush"></i></button>
                                             <button class="icon"><i class="fas fa-trash"></i></button>
                                         </div>
                                         <small><span class="project_to">Add project Year</span> - <span
                                                 class="project_from"></span></small>
                                     </h2>
                                     <p class="project_decs">Add Your Projects Description</p>
                                     <p class="project_links my-3">Add Your Project Links</p>
                                     {{-- <div class="tags">
                                         <span class="label">Project Name</span>
                                         <span class="label">Project Name</span>
                                     </div> --}}
                                 </div>
                             </div>
                         </div>

                         <!-- Educations -->
                         <div id="cv__educations">
                             <h1 class="main__title"><i class=" fa fa-university"></i> Educations</h1>

                             <div class="cv__education cv__info pd-3">
                                 <h2>
                                     <span class="edu_school">

                                         Add Education
                                     </span>
                                     <div class="btn-block">
                                         <button class="icon"><i class="fas fa-paint-brush"></i></button>
                                         <button class="icon"><i class="fas fa-trash"></i></button>
                                     </div>
                                     <small><span class="edu_to">Add Education Year</span> - <span
                                             class="edu_from"></span></small>
                                 </h2>
                                 <p class="edu_degree">Add Your Education Degree Here</p>
                                 <p class="edu_desc">Add Your Education Description Here</p>
                             </div>

                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div> 
 <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
 <script src="{{ asset('builderAssets/vendor.js') }}"></script>
 <script src="{{ asset('builderAssets/script.blade.php') }}"></script>
 {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"> --}}
