@extends('light.layouts.app3')
@section('title')
    Tabs - {{config('app.dashboard')}}
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">Tabs</h4>
                        </li>
                        <li class="breadcrumb-item bcrumb-1">
                            <a href="../../index-2.html">
                                <i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item bcrumb-2">
                            <a href="#" onClick="return false;">UI</a>
                        </li>
                        <li class="breadcrumb-item active">Tabs</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Example Tab -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Tab</strong> Examples</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown"
                                   role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="#" onClick="return false;">Action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Another action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Something else here</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs tab-nav-right" role="tablist">
                            <li role="presentation">
                                <a href="#home" data-toggle="tab" class="active show">HOME</a>
                            </li>
                            <li role="presentation">
                                <a href="#profile" data-toggle="tab">PROFILE</a>
                            </li>
                            <li role="presentation">
                                <a href="#messages" data-toggle="tab">MESSAGES</a>
                            </li>
                            <li role="presentation">
                                <a href="#setting" data-toggle="tab">SETTINGS</a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active show" id="home">
                                <b>Home Content</b>
                                <p>
                                    Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit
                                    mediocritatem an. Pri ut tation electram moderatius.
                                    Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent
                                    aliquid
                                    pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere
                                    gubergren
                                    sadipscing mel.
                                </p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                <b>Profile Content</b>
                                <p>
                                    Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit
                                    mediocritatem an. Pri ut tation electram moderatius.
                                    Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent
                                    aliquid
                                    pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere
                                    gubergren
                                    sadipscing mel.
                                </p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="messages">
                                <b>Message Content</b>
                                <p>
                                    Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit
                                    mediocritatem an. Pri ut tation electram moderatius.
                                    Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent
                                    aliquid
                                    pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere
                                    gubergren
                                    sadipscing mel.
                                </p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="setting">
                                <b>Settings Content</b>
                                <p>
                                    Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit
                                    mediocritatem an. Pri ut tation electram moderatius.
                                    Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent
                                    aliquid
                                    pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere
                                    gubergren
                                    sadipscing mel.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Example Tab -->
        <!-- Tabs With Only Icon Title -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Tab</strong> With Icons</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown"
                                   role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="#" onClick="return false;">Action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Another action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Something else here</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs tab-nav-right" role="tablist">
                            <li role="presentation">
                                <a href="#home_only_icon_title" data-toggle="tab" class="active show">
                                    <i class="material-icons">home</i>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#profile_only_icon_title" data-toggle="tab">
                                    <i class="material-icons">face</i>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#messages_only_icon_title" data-toggle="tab">
                                    <i class="material-icons">email</i>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#settings_only_icon_title" data-toggle="tab">
                                    <i class="material-icons">settings</i>
                                </a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active show" id="home_only_icon_title">
                                <b>Home Content</b>
                                <p>
                                    Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit
                                    mediocritatem an. Pri ut tation electram moderatius.
                                    Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent
                                    aliquid
                                    pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere
                                    gubergren
                                    sadipscing mel.
                                </p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="profile_only_icon_title">
                                <b>Profile Content</b>
                                <p>
                                    Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit
                                    mediocritatem an. Pri ut tation electram moderatius.
                                    Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent
                                    aliquid
                                    pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere
                                    gubergren
                                    sadipscing mel.
                                </p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="messages_only_icon_title">
                                <b>Message Content</b>
                                <p>
                                    Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit
                                    mediocritatem an. Pri ut tation electram moderatius.
                                    Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent
                                    aliquid
                                    pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere
                                    gubergren
                                    sadipscing mel.
                                </p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="settings_only_icon_title">
                                <b>Settings Content</b>
                                <p>
                                    Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit
                                    mediocritatem an. Pri ut tation electram moderatius.
                                    Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent
                                    aliquid
                                    pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere
                                    gubergren
                                    sadipscing mel.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Tabs With Only Icon Title -->
        <!-- Tabs With Icon Title -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Tab</strong> With Icon Titles</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown"
                                   role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="#" onClick="return false;">Action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Another action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Something else here</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation">
                                <a href="#home_with_icon_title" data-toggle="tab" class="active show">
                                    <i class="material-icons">home</i> HOME
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#profile_with_icon_title" data-toggle="tab">
                                    <i class="material-icons">face</i> PROFILE
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#messages_with_icon_title" data-toggle="tab">
                                    <i class="material-icons">email</i> MESSAGES
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#settings_with_icon_title" data-toggle="tab">
                                    <i class="material-icons">settings</i> SETTINGS
                                </a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active show" id="home_with_icon_title">
                                <b>Home Content</b>
                                <p>
                                    Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit
                                    mediocritatem an. Pri ut tation electram moderatius.
                                    Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent
                                    aliquid
                                    pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere
                                    gubergren
                                    sadipscing mel.
                                </p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="profile_with_icon_title">
                                <b>Profile Content</b>
                                <p>
                                    Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit
                                    mediocritatem an. Pri ut tation electram moderatius.
                                    Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent
                                    aliquid
                                    pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere
                                    gubergren
                                    sadipscing mel.
                                </p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="messages_with_icon_title">
                                <b>Message Content</b>
                                <p>
                                    Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit
                                    mediocritatem an. Pri ut tation electram moderatius.
                                    Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent
                                    aliquid
                                    pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere
                                    gubergren
                                    sadipscing mel.
                                </p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="settings_with_icon_title">
                                <b>Settings Content</b>
                                <p>
                                    Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit
                                    mediocritatem an. Pri ut tation electram moderatius.
                                    Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent
                                    aliquid
                                    pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere
                                    gubergren
                                    sadipscing mel.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Tabs With Icon Title -->
        <!-- Tabs With Custom Animations -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Tabs</strong> With Animations</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown"
                                   role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="#" onClick="return false;">Action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Another action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Something else here</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                    <li role="presentation">
                                        <a href="#home_animation_1" data-toggle="tab" class="active show">HOME</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#profile_animation_1" data-toggle="tab">PROFILE</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#messages_animation_1" data-toggle="tab">MESSAGES</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#settings_animation_1" data-toggle="tab">SETTINGS</a>
                                    </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane animated flipInX active show"
                                         id="home_animation_1">
                                        <b>Home Content</b>
                                        <p>
                                            Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit
                                            mediocritatem an. Pri ut tation electram moderatius.
                                            Per te suavitate democritum. Duis nemore probatus ne quo, ad liber
                                            essent
                                            aliquid pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu
                                            munere
                                            gubergren sadipscing mel.
                                        </p>
                                    </div>
                                    <div role="tabpanel" class="tab-pane animated flipInX" id="profile_animation_1">
                                        <b>Profile Content</b>
                                        <p>
                                            Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit
                                            mediocritatem an. Pri ut tation electram moderatius.
                                            Per te suavitate democritum. Duis nemore probatus ne quo, ad liber
                                            essent
                                            aliquid pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu
                                            munere
                                            gubergren sadipscing mel.
                                        </p>
                                    </div>
                                    <div role="tabpanel" class="tab-pane animated flipInX"
                                         id="messages_animation_1">
                                        <b>Message Content</b>
                                        <p>
                                            Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit
                                            mediocritatem an. Pri ut tation electram moderatius.
                                            Per te suavitate democritum. Duis nemore probatus ne quo, ad liber
                                            essent
                                            aliquid pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu
                                            munere
                                            gubergren sadipscing mel.
                                        </p>
                                    </div>
                                    <div role="tabpanel" class="tab-pane animated flipInX"
                                         id="settings_animation_1">
                                        <b>Settings Content</b>
                                        <p>
                                            Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit
                                            mediocritatem an. Pri ut tation electram moderatius.
                                            Per te suavitate democritum. Duis nemore probatus ne quo, ad liber
                                            essent
                                            aliquid pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu
                                            munere
                                            gubergren sadipscing mel.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                    <li role="presentation">
                                        <a href="#home_animation_2" data-toggle="tab" class="active show">HOME</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#profile_animation_2" data-toggle="tab">PROFILE</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#messages_animation_2" data-toggle="tab">MESSAGES</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#settings_animation_2" data-toggle="tab">SETTINGS</a>
                                    </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane animated fadeInRight active show"
                                         id="home_animation_2">
                                        <b>Home Content</b>
                                        <p>
                                            Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit
                                            mediocritatem an. Pri ut tation electram moderatius.
                                            Per te suavitate democritum. Duis nemore probatus ne quo, ad liber
                                            essent
                                            aliquid pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu
                                            munere
                                            gubergren sadipscing mel.
                                        </p>
                                    </div>
                                    <div role="tabpanel" class="tab-pane animated fadeInRight"
                                         id="profile_animation_2">
                                        <b>Profile Content</b>
                                        <p>
                                            Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit
                                            mediocritatem an. Pri ut tation electram moderatius.
                                            Per te suavitate democritum. Duis nemore probatus ne quo, ad liber
                                            essent
                                            aliquid pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu
                                            munere
                                            gubergren sadipscing mel.
                                        </p>
                                    </div>
                                    <div role="tabpanel" class="tab-pane animated fadeInRight"
                                         id="messages_animation_2">
                                        <b>Message Content</b>
                                        <p>
                                            Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit
                                            mediocritatem an. Pri ut tation electram moderatius.
                                            Per te suavitate democritum. Duis nemore probatus ne quo, ad liber
                                            essent
                                            aliquid pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu
                                            munere
                                            gubergren sadipscing mel.
                                        </p>
                                    </div>
                                    <div role="tabpanel" class="tab-pane animated fadeInRight"
                                         id="settings_animation_2">
                                        <b>Settings Content</b>
                                        <p>
                                            Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit
                                            mediocritatem an. Pri ut tation electram moderatius.
                                            Per te suavitate democritum. Duis nemore probatus ne quo, ad liber
                                            essent
                                            aliquid pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu
                                            munere
                                            gubergren sadipscing mel.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Tabs With Custom Animations -->
    </div>
</section>
@endsection