<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.radixtouch.in/templates/admin/lorax/source/light/pages/ui/progressbars.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Jun 2021 11:00:31 GMT -->
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Lorax - Bootstrap 4 Admin Dashboard Template</title>
    <!-- Favicon-->
    <link rel="icon" href="../../assets/images/favicon.ico" type="image/x-icon">
    <!-- Plugins Core Css -->
    <link href="../../assets/css/app.min.css" rel="stylesheet">
    <!-- Custom Css -->
    <link href="../../assets/css/style.css" rel="stylesheet">
    <!-- You can choose a theme from css/styles instead of get all themes -->
    <link href="../../assets/css/styles/all-themes.css" rel="stylesheet" />
</head>

<body class="light">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30">
            <img class="loading-img-spin" src="../../assets/images/loading.png" width="20" height="20" alt="admin">
        </div>
        <p>Please wait...</p>
    </div>
</div>
<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Top Bar -->
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="#" onClick="return false;" class="navbar-toggle collapsed" data-toggle="collapse"
               data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="#" onClick="return false;" class="bars"></a>
            <a class="navbar-brand" href="../../index-2.html">
                <img src="../../assets/images/logo.png" alt="" />
                <span class="logo-name">Lorax</span>
            </a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="pull-left">
                <li>
                    <a href="#" onClick="return false;" class="sidemenu-collapse">
                        <svg class="openNavorNot" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 120 120" enable-background="new 0 0 120 120" xml:space="preserve">
                                <polygon points="0.233,106.52 60,3 119.768,106.52 "></polygon>
                            </svg>
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <!-- Full Screen Button -->
                <li class="fullscreen">
                    <a href="javascript:;" class="fullscreen-btn">
                        <i class="fas fa-expand"></i>
                    </a>
                </li>
                <!-- #END# Full Screen Button -->
                <!-- #START# Notifications-->
                <li class="dropdown">
                    <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown"
                       role="button">
                        <i class="far fa-bell"></i>
                        <span class="label-count bg-orange"></span>
                    </a>
                    <ul class="dropdown-menu pullDown">
                        <li class="header">NOTIFICATIONS</li>
                        <li class="body">
                            <ul class="menu">
                                <li>
                                    <a href="#" onClick="return false;">
                                            <span class="table-img msg-user">
                                                <img src="../../assets/images/user/user1.jpg" alt="">
                                            </span>
                                        <span class="menu-info">
                                                <span class="menu-title">Sarah Smith</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 14 mins ago
                                                </span>
                                                <span class="menu-desc">Please check your email.</span>
                                            </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onClick="return false;">
                                            <span class="table-img msg-user">
                                                <img src="../../assets/images/user/user2.jpg" alt="">
                                            </span>
                                        <span class="menu-info">
                                                <span class="menu-title">Airi Satou</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 22 mins ago
                                                </span>
                                                <span class="menu-desc">Please check your email.</span>
                                            </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onClick="return false;">
                                            <span class="table-img msg-user">
                                                <img src="../../assets/images/user/user3.jpg" alt="">
                                            </span>
                                        <span class="menu-info">
                                                <span class="menu-title">John Doe</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </span>
                                                <span class="menu-desc">Please check your email.</span>
                                            </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onClick="return false;">
                                            <span class="table-img msg-user">
                                                <img src="../../assets/images/user/user4.jpg" alt="">
                                            </span>
                                        <span class="menu-info">
                                                <span class="menu-title">Ashton Cox</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 2 hours ago
                                                </span>
                                                <span class="menu-desc">Please check your email.</span>
                                            </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onClick="return false;">
                                            <span class="table-img msg-user">
                                                <img src="../../assets/images/user/user5.jpg" alt="">
                                            </span>
                                        <span class="menu-info">
                                                <span class="menu-title">Cara Stevens</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 4 hours ago
                                                </span>
                                                <span class="menu-desc">Please check your email.</span>
                                            </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onClick="return false;">
                                            <span class="table-img msg-user">
                                                <img src="../../assets/images/user/user6.jpg" alt="">
                                            </span>
                                        <span class="menu-info">
                                                <span class="menu-title">Charde Marshall</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </span>
                                                <span class="menu-desc">Please check your email.</span>
                                            </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onClick="return false;">
                                            <span class="table-img msg-user">
                                                <img src="../../assets/images/user/user7.jpg" alt="">
                                            </span>
                                        <span class="menu-info">
                                                <span class="menu-title">John Doe</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> Yesterday
                                                </span>
                                                <span class="menu-desc">Please check your email.</span>
                                            </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="#" onClick="return false;">View All Notifications</a>
                        </li>
                    </ul>
                </li>
                <!-- #END# Notifications-->
                <li class="dropdown user_profile">
                    <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown"
                       role="button">
                        <img src="../../assets/images/user.jpg" width="32" height="32" alt="User">
                    </a>
                    <ul class="dropdown-menu pullDown">
                        <li class="body">
                            <ul class="user_dw_menu">
                                <li>
                                    <a href="#" onClick="return false;">
                                        <i class="material-icons">person</i>Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onClick="return false;">
                                        <i class="material-icons">feedback</i>Feedback
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onClick="return false;">
                                        <i class="material-icons">help</i>Help
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onClick="return false;">
                                        <i class="material-icons">power_settings_new</i>Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- #END# Tasks -->
                <li class="pull-right">
                    <a href="#" onClick="return false;" class="js-right-sidebar" data-close="true">
                        <i class="fas fa-cog"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- #Top Bar -->
<div>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="sidebar-user-panel active">
                    <div class="user-panel">
                        <div class=" image">
                            <img src="../../assets/images/usrbig.jpg" class="img-circle user-img-circle"
                                 alt="User Image" />
                        </div>
                    </div>
                    <div class="profile-usertitle">
                        <div class="sidebar-userpic-name"> Emily Smith </div>
                        <div class="profile-usertitle-job ">Manager </div>
                    </div>
                </li>
                <li>
                    <a href="#" onClick="return false;" class="menu-toggle">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Home</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="../../index-2.html">Dashboard 1</a>
                        </li>
                        <li>
                            <a href="../dashboard/dashboard2.html">Dashboard 2</a>
                        </li>
                        <li>
                            <a href="../dashboard/dashboard3.html">Dashboard 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="../apps/calendar.html">
                        <i class="far fa-calendar"></i>
                        <span>Events</span>
                    </a>
                </li>
                <li>
                    <a href="#" onClick="return false;" class="menu-toggle">
                        <i class="fas fa-mail-bulk"></i>
                        <span>Email</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="../email/inbox.html">Inbox</a>
                        </li>
                        <li>
                            <a href="../email/compose.html">Compose</a>
                        </li>
                        <li>
                            <a href="../email/view-mail.html">Read Email</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" onClick="return false;" class="menu-toggle">
                        <i class="fab fa-google-play"></i>
                        <span>Apps</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="../apps/chat.html">Chat</a>
                        </li>
                        <li>
                            <a href="../apps/task.html">Task Bar</a>
                        </li>
                        <li>
                            <a href="../apps/dragdrop.html">Drag &amp; Drop</a>
                        </li>
                        <li>
                            <a href="../apps/portfolio.html">Portfolio</a>
                        </li>
                        <li>
                            <a href="../apps/contact_list.html">Contact List</a>
                        </li>
                        <li>
                            <a href="../apps/contact_grid.html">Contact Grid</a>
                        </li>
                        <li>
                            <a href="../apps/support.html">Support</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" onClick="return false;" class="menu-toggle">
                        <i class="fas fa-shopping-cart"></i>
                        <span>E-commerce</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="../ecommerce/products.html">Products</a>
                        </li>
                        <li>
                            <a href="../ecommerce/product-detail.html">Product Details</a>
                        </li>
                        <li>
                            <a href="../ecommerce/cart.html">Cart</a>
                        </li>
                        <li>
                            <a href="../ecommerce/product-list.html">Product List</a>
                        </li>
                        <li>
                            <a href="../ecommerce/invoice.html">Invoice</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="../widgets/widget.html">
                        <i class="fas fa-braille"></i>
                        <span>Widgets</span>
                    </a>
                </li>
                <li class="active">
                    <a href="#" onClick="return false;" class="menu-toggle">
                        <i class="fas fa-drafting-compass"></i>
                        <span>User Interface (UI)</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="alerts.html">Alerts</a>
                        </li>
                        <li>
                            <a href="animations.html">Animations</a>
                        </li>
                        <li>
                            <a href="badges.html">Badges</a>
                        </li>
                        <li>
                            <a href="modal.html">Modal</a>
                        </li>
                        <li>
                            <a href="buttons.html">Buttons</a>
                        </li>
                        <li>
                            <a href="collapse.html">Collapse</a>
                        </li>
                        <li>
                            <a href="dialogs.html">Dialogs</a>
                        </li>
                        <li>
                            <a href="cards.html">Cards</a>
                        </li>
                        <li>
                            <a href="labels.html">Labels</a>
                        </li>
                        <li>
                            <a href="list-group.html">List Group</a>
                        </li>
                        <li>
                            <a href="media-object.html">Media Object</a>
                        </li>
                        <li>
                            <a href="notifications.html">Notifications</a>
                        </li>
                        <li>
                            <a href="preloaders.html">Preloaders</a>
                        </li>
                        <li class="active">
                            <a href="progressbars.html">Progress Bars</a>
                        </li>
                        <li>
                            <a href="range-sliders.html">Range Sliders</a>
                        </li>

                        <li>
                            <a href="tabs.html">Tabs</a>
                        </li>
                        <li>
                            <a href="waves.html">Waves</a>
                        </li>
                        <li>
                            <a href="typography.html">Typography</a>
                        </li>
                        <li>
                            <a href="helper-classes.html">Helper Classes</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" onClick="return false;" class="menu-toggle">
                        <i class="fab fa-wpforms"></i>
                        <span>Forms</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="../forms/basic-form-elements.html">Basic Form</a>
                        </li>
                        <li>
                            <a href="../forms/advanced-form-elements.html">Advanced Form</a>
                        </li>
                        <li>
                            <a href="../forms/form-examples.html">Form Examples</a>
                        </li>
                        <li>
                            <a href="../forms/form-validation.html">Form Validation</a>
                        </li>
                        <li>
                            <a href="../forms/form-wizard.html">Form Wizard</a>
                        </li>
                        <li>
                            <a href="../forms/editors.html">Editors</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" onClick="return false;" class="menu-toggle">
                        <i class="fas fa-table"></i>
                        <span>Tables</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="../tables/normal-tables.html">Normal Tables</a>
                        </li>
                        <li>
                            <a href="../tables/advance-tables.html">Advance Datatables</a>
                        </li>
                        <li>
                            <a href="../tables/export-table.html">Export Table</a>
                        </li>
                        <li>
                            <a href="../tables/child-row-table.html">Child Row Table</a>
                        </li>
                        <li>
                            <a href="../tables/group-table.html">Grouping</a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="#" onClick="return false;" class="menu-toggle">
                        <i class="far fa-images"></i>
                        <span>Medias</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="../medias/image-gallery.html">Image Gallery</a>
                        </li>
                        <li>
                            <a href="../medias/carousel.html">Carousel</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" onClick="return false;" class="menu-toggle">
                        <i class="fas fa-chart-line"></i>
                        <span>Charts</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="../charts/echart.html">Echart</a>
                        </li>
                        <li>
                            <a href="../charts/apexchart.html">Apex Chart</a>
                        </li>
                        <li>
                            <a href="../charts/amchart.html">amChart</a>
                        </li>
                        <li>
                            <a href="../charts/flot.html">Flot</a>
                        </li>
                        <li>
                            <a href="../charts/chartjs.html">ChartJS</a>
                        </li>
                        <li>
                            <a href="../charts/sparkline.html">Sparkline</a>
                        </li>
                        <li>
                            <a href="../charts/jquery-knob.html">Jquery Knob</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" onClick="return false;" class="menu-toggle">
                        <i class="fab fa-hubspot"></i>
                        <span>Timeline</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="../timeline/timeline.html">Timeline 1</a>
                        </li>
                        <li>
                            <a href="../timeline/timeline2.html">Timeline 2</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" onClick="return false;" class="menu-toggle">
                        <i class="fas fa-paw"></i>
                        <span>Icons</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="../icons/material-icons.html">Material Icons</a>
                        </li>
                        <li>
                            <a href="../icons/font-awesome.html">Font Awesome</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" onClick="return false;" class="menu-toggle">
                        <i class="fas fa-id-card"></i>
                        <span>Authentication</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="../examples/login-register.html">Login &amp; Register</a>
                        </li>
                        <li>
                            <a href="../examples/login.html">Login</a>
                        </li>
                        <li>
                            <a href="../examples/login2.html">Login 2</a>
                        </li>
                        <li>
                            <a href="../examples/register.html">Register</a>
                        </li>
                        <li>
                            <a href="../examples/register2.html">Register 2</a>
                        </li>
                        <li>
                            <a href="../examples/forgot-password.html">Forgot Password</a>
                        </li>
                        <li>
                            <a href="../examples/locked.html">Locked</a>
                        </li>
                        <li>
                            <a href="../examples/404.html">404 - Not Found</a>
                        </li>
                        <li>
                            <a href="../examples/500.html">500 - Server Error</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" onClick="return false;" class="menu-toggle">
                        <i class="far fa-file-alt"></i>
                        <span>Extra Pages</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="../examples/profile.html">Profile</a>
                        </li>
                        <li>
                            <a href="../examples/pricing.html">Pricing</a>
                        </li>
                        <li>
                            <a href="../examples/faqs.html">Faqs</a>
                        </li>
                        <li>
                            <a href="../examples/blank.html">Blank Page</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" onClick="return false;" class="menu-toggle">
                        <i class="fas fa-globe-americas"></i>
                        <span>Maps</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="../maps/google.html">Google Map</a>
                        </li>
                        <li>
                            <a href="../maps/jqvmap.html">Vector Map</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" onClick="return false;" class="menu-toggle">
                        <i class="fas fa-angle-double-down"></i>
                        <span>Multi Level Menu</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="#" onClick="return false;">
                                <span>Menu Item</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" onClick="return false;">
                                <span>Menu Item - 2</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" onClick="return false;" class="menu-toggle">
                                <span>Level - 2</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="#" onClick="return false;">
                                        <span>Menu Item</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onClick="return false;" class="menu-toggle">
                                        <span>Level - 3</span>
                                    </a>
                                    <ul class="ml-menu">
                                        <li>
                                            <a href="#" onClick="return false;">
                                                <span>Level - 4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- #Menu -->
    </aside>
    <!-- #END# Left Sidebar -->
    <!-- Right Sidebar -->
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
    <!-- #END# Right Sidebar -->
</div>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">Progress Bars</h4>
                        </li>
                        <li class="breadcrumb-item bcrumb-1">
                            <a href="../../index-2.html">
                                <i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item bcrumb-2">
                            <a href="#" onClick="return false;">UI</a>
                        </li>
                        <li class="breadcrumb-item active">Progress</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Basic</strong> Examples</h2>
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
                        <div class="progress">
                            <div class="progress-bar" role="progressbar width-per-60" aria-valuenow="60"
                                 aria-valuemin="0" aria-valuemax="100">
                                <span class="sr-only">60% Complete</span>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar width-per-75" role="progressbar" aria-valuenow="75"
                                 aria-valuemin="0" aria-valuemax="100">75%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Examples -->
        <!-- Contextual Alternatives -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Progressbar</strong> With Colors</h2>
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
                        <div class="progress">
                            <div class="progress-bar progress-bar-success width-per-40" role="progressbar"
                                 aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                <span class="sr-only">40% Complete (success)</span>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-info width-per-20" role="progressbar"
                                 aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                <span class="sr-only">20% Complete</span>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-warning width-per-60" role="progressbar"
                                 aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                <span class="sr-only">60% Complete (warning)</span>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-danger width-per-80" role="progressbar"
                                 aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                <span class="sr-only">80% Complete (danger)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Contextual Alternatives -->
        <!-- Striped -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Progressbar</strong> With Striped</h2>
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
                        <div class="progress">
                            <div class="progress-bar progress-bar-success progress-bar-striped width-per-40"
                                 role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                <span class="sr-only">40% Complete (success)</span>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-info progress-bar-striped width-per-20"
                                 role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                <span class="sr-only">20% Complete</span>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-warning progress-bar-striped width-per-60"
                                 role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                <span class="sr-only">60% Complete (warning)</span>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-danger progress-bar-striped width-per-80"
                                 role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                <span class="sr-only">80% Complete (danger)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Striped -->
        <!-- Stacked -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Stacked</strong>
                        </h2>
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
                        <div class="progress">
                            <div class="progress-bar progress-bar-success width-per-35">
                                <span class="sr-only">35% Complete (success)</span>
                            </div>
                            <div class="progress-bar progress-bar-warning progress-bar-striped active width-per-20">
                                <span class="sr-only">20% Complete (warning)</span>
                            </div>
                            <div class="progress-bar progress-bar-danger width-per-10">
                                <span class="sr-only">10% Complete (danger)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Stacked -->
    </div>
</section>
<!-- Plugins Js -->
<script src="../../assets/js/app.min.js"></script>
<!-- Custom Js -->
<script src="../../assets/js/admin.js"></script>
<!-- Demo Js -->
</body>


<!-- Mirrored from www.radixtouch.in/templates/admin/lorax/source/light/pages/ui/progressbars.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Jun 2021 11:00:31 GMT -->
</html>