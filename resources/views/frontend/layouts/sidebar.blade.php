<div>
    <aside id="leftsidebar" class="sidebar">
        <div class="menu">
            <ul class="list">
                @can('post-job')
                    <li class="position-relative active postaNewJob">
                        <a href="{{url('post-job')}}" class="">
                            <i class="fas fa-plus text-white"></i>
                            <span>Post a job</span>
                        </a>
                    </li>
                @endcan
                @can('dashboard')
                    <li class="position-relative active">
                        <a href="{{url('dashboard')}}" class="">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>Home</span>
                        </a>
                    </li>
                @endcan
                @can('manage-job')
                    <li class="position-relative">
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i class="fab fa-google-play"></i>
                            <span>Manage Jobs</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{url('post-job')}}">Post Job Now</a>
                            </li>
                            @can('modify-job')
                                <li>
                                    <a href="{{url('modify-job')}}">Modify/Delete Jobs</a>
                                </li>
                            @endcan
                            @can('search-job')
                                <li>
                                    <a href="{{url('search-job')}}">Search Jobs</a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('search-cvss')
                    <li class="position-relative">
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i class="fas fa-mail-bulk"></i>
                            <span>Search CVs</span>
                        </a>
                        <ul class="ml-menu">
                            @can('search-cvs')
                                <li>
                                    <a href="{{url('search-cvs')}}">Search CVs</a>
                                </li>
                            @endcan
                            @can('recent-cvs')
                                <li>
                                    <a href="{{url('recent-cvs')}}">Recent CVs</a>
                                </li>
                            @endcan
                            @can('saved-cvs')
                                <li>
                                    <a href="{{url('saved-cvs')}}">Saved CVs</a>
                                </li>
                            @endcan
                            @can('saved-searches')
                                <li>
                                    <a href="{{url('saved-searches')}}">Saved Searches</a>
                                </li>
                            @endcan
                            @can('recently-viewed')
                                <li>
                                    <a href="{{url('recently-viewed')}}">Recently Viewed CVs</a>
                                </li>
                            @endcan
                            @can('cv-notes')
                                <li>
                                    <a href="{{url('cv-notes')}}">CV Notes</a>
                                </li>
                            @endcan
                            @can('removed-cvs')
                                <li>
                                    <a href="{{url('removed-cvs')}}">Removed CVs</a>
                                </li>
                            @endcan
                            @can('popular-searches')
                                <li>
                                    <a href="{{url('popular-searches')}}">Popular Searches</a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('cv-watchdogs')
                    <li class="position-relative">
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i class="fas fa-shopping-cart"></i>
                            <span>CV Watchdogs</span>
                        </a>
                        <ul class="ml-menu">
                            <li >
                                <a href="{{url('control-panel')}}">Watchdogs Control Panel</a>
                            </li>
                            <li>
                                <a href="{{url('create-watchdogs')}}">Create Watchdogs</a>
                            </li>
                            <li>
                                <a href="{{url('modify-watchdogs')}}">Modify Watchdogs</a>
                            </li>
                            <li>
                                <a href="{{url('watchdogs-sent')}}">Watchdogs Sent</a>
                            </li>
                            <li>
                                <a href="{{url('reactive-watchdogs')}}">Reactive Watchdogs</a>
                            </li>
                        </ul>
                    </li>
                @endcan
                @can('job-status')
                        <li class="position-relative">
                            <a href="#" onClick="return false;" class="menu-toggle">
                                <i class="fas fa-barcode"></i>
                                <span>Job Status</span>
                            </a>
                            <ul class="ml-menu">
                                @can('job-type')
                                    <li>
                                        <a href="{{url('job-type')}}">Job Type</a>
                                    </li>
                                @endcan
                                @can('industry')
                                    <li>
                                        <a href="{{url('industry')}}">Industry</a>
                                    </li>
                                @endcan
                                @can('department')
                                    <li>
                                        <a href="{{url('department')}}">Department</a>
                                    </li>
                                @endcan
                                @can('location')
                                    <li>
                                        <a href="{{url('location')}}">Location</a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endcan
                @can('candidate-search')
                    <li class="position-relative">
                        <a href="{{url('candidate-search')}}">
                            <i class="far fa-id-card"></i>
                            <span>Candidate Search</span>
                        </a>
                    </li>
                @endcan
                @can('applied-job')
                    <li class="position-relative">
                        <a href="{{url('applied-job')}}">
                            <i class="fa fa-archive"></i>
                            <span>Applied Job</span>
                        </a>
                    </li>
                @endcan
                @can('payment')
                    <li class="position-relative">
                        <a href="{{url('payments')}}">
                            <i class="fas fa-credit-card"></i>
                            <span>Payments</span>
                        </a>
                    </li>
                @endcan
                @can('setting')
                    <li class="position-relative">
                        <a href="{{url('roles-and-permissions')}}">
                            <i class="fas fa-tasks"></i>
                            <span>Roles and Permissions</span>
                        </a>
                    </li>
                @endcan
                @can('roles-and-permission')
                    <li class="position-relative">
                        <a href="{{url('settings')}}">
                            <i class="fas fa-cog"></i>
                            <span>Settings</span>
                        </a>
                    </li>
                @endcan
            </ul>
        </div>
    </aside>
    <aside id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs tab-nav-right" role="tablist">
            <li role="presentation">
                <a href="#skins" data-toggle="tab" class="active">SKINS</a>
            </li>
            <li role="presentation">
                <a href="#settings" data-toggle="tab">SETTINGS</a>
            </li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane in active in active stretchLeft" id="skins">
                <div class="demo-skin">
                    <div class="rightSetting">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list list-unstyled m-t-20">
                            <li>
                                <div class="form-check">
                                    <div class="form-check m-l-10">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" value="" checked> Save
                                            History
                                            <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <div class="form-check m-l-10">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" value="" checked> Show
                                            Status
                                            <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <div class="form-check m-l-10">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" value="" checked> Auto
                                            Submit Issue
                                            <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <div class="form-check m-l-10">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" value="" checked> Show
                                            Status To All
                                            <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="rightSetting">
                        <p>SIDEBAR MENU COLORS</p>
                        <button type="button"
                                class="btn btn-sidebar-light btn-border-radius p-l-20 p-r-20">Light</button>
                        <button type="button"
                                class="btn btn-sidebar-dark btn-default btn-border-radius p-l-20 p-r-20">Dark</button>
                    </div>
                    <div class="rightSetting">
                        <p>THEME COLORS</p>
                        <button type="button"
                                class="btn btn-theme-light btn-border-radius p-l-20 p-r-20">Light</button>
                        <button type="button"
                                class="btn btn-theme-dark btn-default btn-border-radius p-l-20 p-r-20">Dark</button>
                    </div>
                    <div class="rightSetting">
                        <p>SKINS</p>
                        <ul class="demo-choose-skin choose-theme list-unstyled">
                            <li data-theme="black" class="actived">
                                <div class="black-theme"></div>
                            </li>
                            <li data-theme="white">
                                <div class="white-theme white-theme-border"></div>
                            </li>
                            <li data-theme="purple">
                                <div class="purple-theme"></div>
                            </li>
                            <li data-theme="blue">
                                <div class="blue-theme"></div>
                            </li>
                            <li data-theme="cyan">
                                <div class="cyan-theme"></div>
                            </li>
                            <li data-theme="green">
                                <div class="green-theme"></div>
                            </li>
                            <li data-theme="orange">
                                <div class="orange-theme"></div>
                            </li>
                        </ul>
                    </div>
                    <div class="rightSetting">
                        <p>Disk Space</p>
                        <div class="sidebar-progress">
                            <div class="progress m-t-20">
                                <div class="progress-bar l-bg-cyan shadow-style width-per-45" role="progressbar"
                                     aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="progress-description">
                                    <small>26% remaining</small>
                                </span>
                        </div>
                    </div>
                    <div class="rightSetting">
                        <p>Server Load</p>
                        <div class="sidebar-progress">
                            <div class="progress m-t-20">
                                <div class="progress-bar l-bg-orange shadow-style width-per-63" role="progressbar"
                                     aria-valuenow="63" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="progress-description">
                                    <small>Highly Loaded</small>
                                </span>
                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane stretchRight" id="settings">
                <div class="demo-settings">
                    <p>GENERAL SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Report Panel Usage</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever switch-col-green"></span>
                                </label>
                            </div>
                        </li>
                        <li>
                            <span>Email Redirect</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox">
                                    <span class="lever switch-col-blue"></span>
                                </label>
                            </div>
                        </li>
                    </ul>
                    <p>SYSTEM SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Notifications</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever switch-col-purple"></span>
                                </label>
                            </div>
                        </li>
                        <li>
                            <span>Auto Updates</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever switch-col-cyan"></span>
                                </label>
                            </div>
                        </li>
                    </ul>
                    <p>ACCOUNT SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Offline</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever switch-col-red"></span>
                                </label>
                            </div>
                        </li>
                        <li>
                            <span>Location Permission</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox">
                                    <span class="lever switch-col-lime"></span>
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </aside>
</div>