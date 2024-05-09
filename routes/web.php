<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\VideoshowController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\UserinfoController;
//indeed
use App\Http\Controllers\Management\DashboardController;
use App\Http\Controllers\Management\CVBuilderController;
use App\Http\Controllers\Management\PaymentsController;
use App\Http\Controllers\Management\RolesAndPermissionsController;
use App\Http\Controllers\Management\SettingsController;
use App\Http\Controllers\Management\RecruitersController;
use App\Http\Controllers\Management\CVWatchdogsController;
use App\Http\Controllers\Management\SearchCVsController;
use App\Http\Controllers\Management\ManageJobsController;
use App\Http\Controllers\Management\PostJobController;
use App\Http\Controllers\Management\JobTypeController;
use App\Http\Controllers\Management\LocationController;
use App\Http\Controllers\Management\IndustryController;
use App\Http\Controllers\Management\DepartmentController;
use App\Http\Controllers\Management\ManageSummaryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
Route::fallback(function () {

    return view("404");
});
Route::get('/clear', function () {

    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');


    return redirect()->back();
});


Auth::routes();
//Route::middleware(['auth','AdminRoutes'])
//    ->group(function () {
Route::get('/', [App\Http\Controllers\Frontend\FrontHomeController::class, 'index']);

Route::middleware(['auth'])
    ->group(function () {
        //indeed//dashboard
        Route::get('dashboard', [DashboardController::class, 'dashboard']);
        //postJob
        Route::resource('post-job', PostJobController::class);
        //ManageJobs
        Route::resource('modify-job', ManageJobsController::class);
        Route::get('current-job', [ManageJobsController::class, 'current_job']);
        Route::get('job-application', [ManageJobsController::class, 'job_application']);
        Route::get('job-templates', [ManageJobsController::class, 'job_templates']);
        Route::get('job-posting', [ManageJobsController::class, 'job_posting']);
        Route::get('nation-job', [ManageJobsController::class, 'nation_job']);
        //SearchCVs
        Route::resource('candidate-search', SearchCVsController::class);
        Route::get('candidate-searched', [SearchCVsController::class, 'candidate_searched']);
        Route::get('search-cvs', [SearchCVsController::class, 'search_cvs']);
        Route::get('recent-cvs', [SearchCVsController::class, 'recent_cvs']);
        Route::get('saved-cvs', [SearchCVsController::class, 'saved_cvs']);
        Route::get('saved-searches', [SearchCVsController::class, 'saved_searches']);
        Route::get('recently-viewed', [SearchCVsController::class, 'recently_viewed']);
        Route::get('cv-notes', [SearchCVsController::class, 'cv_notes']);
        Route::get('removed-cvs', [SearchCVsController::class, 'removed_cvs']);
        Route::get('popular-searches', [SearchCVsController::class, 'popular_searches']);
        //CVWatchdogs
        Route::resource('control-panel', CVWatchdogsController::class);
        Route::get('create-watchdogs', [CVWatchdogsController::class, 'create_watchdogs']);
        Route::get('modify-watchdogs', [CVWatchdogsController::class, 'modify_watchdogs']);
        Route::get('reactive-watchdogs', [CVWatchdogsController::class, 'reactive_watchdogs']);
        Route::get('watchdogs-sent', [CVWatchdogsController::class, 'watchdogs_sent']);
        //Payments
        Route::resource('payments', PaymentsController::class);
        //RolesAndPermissions
        Route::resource('roles-and-permissions', RolesAndPermissionsController::class);
        //Settings
        Route::resource('setting', SettingsController::class);
        //AppliedJob
        Route::resource('applied-job', App\Http\Controllers\Frontend\AppliedJobController::class);
        //Summary
        Route::resource('manage-summary', ManageSummaryController::class);
        Route::get('manage-summary/edit-status/{status}/{id}', [ManageSummaryController::class, 'edit_status']);
        Route::get('manage-summary/edit-summary/{id}', [ManageSummaryController::class, 'edit_summary']);
        Route::post('manage-summary/edit-summary/save_summary', [ManageSummaryController::class, 'save_summary'])->name('edit-summary.save_summary');
        Route::get('manage-summary/create', [ManageSummaryController::class, 'create']);
        Route::post('manage-summary/store', [ManageSummaryController::class, 'store']);
        Route::get('manage-summary/delete-summary/{id}', [ManageSummaryController::class, 'destroy']);
        //review-before-post
        Route::resource('job-type', JobTypeController::class);
        Route::resource('location', LocationController::class);
        Route::resource('industry', IndustryController::class);
        Route::resource('department', DepartmentController::class);
        //Route::get('review-before-post/{id}', [PostJobController::class, 'show']);





        //pages//apps
        Route::get('calender', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'calender']);
        Route::get('chat', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'chat']);
        Route::get('contact_grid', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'contact_grid']);
        Route::get('contact_list', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'contact_list']);
        Route::get('dragdrop', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'dragdrop']);
        Route::get('portfolio', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'portfolio']);
        Route::get('support', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'support']);
        Route::get('task', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'task']);
        //charts
        Route::get('amchart', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'amchart']);
        Route::get('apexchart', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'apexchart']);
        Route::get('chartjs', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'chartjs']);
        Route::get('echart', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'echart']);
        Route::get('flot', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'flot']);
        Route::get('jquery_knob', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'jquery_knob']);
        Route::get('morris', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'morris']);
        Route::get('sparkline', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'sparkline']);
        //Dashboard
        Route::get('dashboard2', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'dashboard2']);
        Route::get('dashboard3', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'dashboard3']);
        //Ecommerce
        Route::get('chart', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'chart']);
        Route::get('invoice', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'invoice']);
        Route::get('product_detail', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'product_detail']);
        Route::get('product_list', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'product_list']);
        Route::get('product', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'product']);
        //Email
        Route::get('compose', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'compose']);
        Route::get('inbox', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'inbox']);
        Route::get('mail_inbox', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'mail_inbox']);
        Route::get('view_mail', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'view_mail']);
        //Examples
        Route::get('example404', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'example404']);
        Route::get('example500', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'example500']);
        Route::get('blank', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'blank']);
        Route::get('faqs', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'faqs']);
        Route::get('forgot_password', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'forgot_password']);
        Route::get('iinvoice', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'iinvoice']);
        Route::get('locked', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'locked']);
        Route::get('loginn', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'login']);
        Route::get('login2', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'login2']);
        Route::get('login_register', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'login_register']);
        Route::get('pricing', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'pricing']);
        Route::get('profilee', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'profile']);
        Route::get('registerr', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'register']);
        Route::get('register2', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'register2']);
        //forms
        Route::get('advanced', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'advanced']);
        Route::get('basic', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'basic']);
        Route::get('editor', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'editor']);
        Route::get('form_example', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'form_example']);
        Route::get('form_validation', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'form_validation']);
        Route::get('form_wizard', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'form_wizard']);
        //icons
        Route::get('font_awesome', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'font_awesome']);
        Route::get('material_icon', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'material_icon']);
        //maps
        Route::get('google', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'google']);
        Route::get('jqvmap', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'jqvmap']);
        //medias
        Route::get('carousel', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'carousel']);
        Route::get('image_gallery', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'image_gallery']);
        //tables
        Route::get('advance', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'advance']);
        Route::get('child', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'child']);
        Route::get('export', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'export']);
        Route::get('group', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'group']);
        Route::get('normal', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'normal']);
        //timeline
        Route::get('timeline', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'timeline']);
        Route::get('timeline2', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'timeline2']);
        //ui
        Route::get('alerts', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'alerts']);
        Route::get('animations', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'animations']);
        Route::get('badges', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'badges']);
        Route::get('buttons', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'buttons']);
        Route::get('cards', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'cards']);
        Route::get('collapse', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'collapse']);
        Route::get('dialogs', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'dialogs']);
        Route::get('helper', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'helper']);
        Route::get('labels', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'labels']);
        Route::get('list_group', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'list_group']);
        Route::get('media_object', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'media_object']);
        Route::get('modal', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'modal']);
        Route::get('notice', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'notice']);
        Route::get('notification', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'notification']);
        Route::get('pre_loaders', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'pre_loaders']);
        Route::get('progress_bar', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'progress_bar']);
        Route::get('range_sliders', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'range_sliders']);
        Route::get('tabs', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'tabs']);
        Route::get('typography', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'typography']);
        Route::get('waves', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'waves']);
        //widgets
        Route::get('widgets', [App\Http\Controllers\indeed\modifyJob\ModifyJobController::class, 'widgets']);















        //Route::group(['middleware' => ['auth']], function() {
        Route::resource('admin/roles', RoleController::class);
        Route::resource('admin/users', UserController::class);
        Route::resource('admin/products', ProductController::class);
        Route::resource('admin/dashboard', HomeController::class);

        Route::resource('admin/countries', CountryController::class);


        //    Categories Routes


        Route::resource('admin/categories', CategoriesController::class);

        //keyword
        Route::resource('admin/keyword', App\Http\Controllers\Management\KeywordController::class);

        //blog
        Route::resource('admin/post', BlogController::class);

        //Store
        Route::resource('admin/store', StoreController::class);

        //video
        Route::resource('admin/videos', VideoshowController::class);

        //slider
        Route::resource('admin/slider', SliderController::class);

        //testimonial
//        Route::resource('admin/testimonial', App\Http\Controllers\Management\TestimonialController::class);

        //userinfo
        Route::resource('admin/user-info', UserinfoController::class);

        //pages
        Route::resource('admin/pages', PageController::class);

        Route::resource('admin/contacts', App\Http\Controllers\Management\ContactController::class);

        Route::get('admin/subscriber', [App\Http\Controllers\Management\ContactController::class, 'subscriber']);

        //coupon
        Route::resource('admin/coupon', CouponController::class);
        Route::resource('admin/theme-setting', App\Http\Controllers\Management\ThemeSettingsController::class);
        Route::post('admin/theme-setting-fields', [App\Http\Controllers\Management\ThemeSettingsController::class, 'theme_setting_fields']);





        Route::resource('resume-builder',CVBuilderController::class);
Route::get('resume-builder', [CVBuilderController::class, 'index']);
Route::post('resume-builder', [CVBuilderController::class, 'store']);





    });
Route::middleware(['auth', 'throttle:2,1'])
    ->group(function () {
        Route::post('post-like', [App\Http\Controllers\Frontend\ReactionsController::class, 'LikePost']);
        Route::post('post-dislike', [App\Http\Controllers\Frontend\ReactionsController::class, 'DislikePost']);
    });

Route::get('contact', function () {
    return view('/frontend/contact/index');
});
Route::get('advertising', function () {
    return view('/frontend/contact/index');
});
Route::get('/page/{slug}', [App\Http\Controllers\Frontend\FrontHomeController::class, 'PageShow']);

Route::get('/countrysort/{id}', [App\Http\Controllers\Frontend\FrontHomeController::class, 'countrysort']);
Route::get('/chalo', [App\Http\Controllers\Frontend\FrontHomeController::class, 'norm']);

Route::get('collection/{slug}', function () {
    return view('/frontend/coupon/collection');
});
Route::get('deals', function () {
    return view('/frontend/coupon/deals');
});
Route::get('coupons', function () {
    return view('/frontend/coupon/coupons');
});
Route::get('stores/{slug}', function () {
    return view('/frontend/coupon/stores');
});


Route::resource('single-coupons', App\Http\Controllers\Frontend\SingleCouponController::class);


Route::resource('blog', App\Http\Controllers\Frontend\BlogsController::class);



Route::post('post-comment', [App\Http\Controllers\Frontend\ReactionsController::class, 'CommentPost']);

Route::get('search-result', [App\Http\Controllers\Frontend\FrontHomeController::class, 'SearchResult']);

Route::post('post-contact', [App\Http\Controllers\Frontend\FrontHomeController::class, 'ContactPost']);


Route::resource('my-account', App\Http\Controllers\Frontend\UserDashboardController::class);


Route::get('my-activity', [App\Http\Controllers\Frontend\UserDashboardController::class, 'activity']);
Route::get('wishlist', [App\Http\Controllers\Frontend\UserDashboardController::class, 'wishList']);


//my profile
Route::get('my-profile', [App\Http\Controllers\Frontend\UserDashboardController::class, 'myProfile']);
Route::put('update_profile/{id}', [App\Http\Controllers\Frontend\UserDashboardController::class, 'updateprofile']);

//change password

Route::get('change-password', [App\Http\Controllers\Frontend\UserDashboardController::class, 'password']);
Route::put('update-password/{id}', [App\Http\Controllers\Frontend\UserDashboardController::class, 'updatePassword']);

Route::resource('video', App\Http\Controllers\Frontend\VideoController::class);


Route::post('image-delete', [App\Http\Controllers\CouponController::class, 'imagedelete']);


Route::get('get-code/{id}', [App\Http\Controllers\Frontend\SingleCouponController::class, 'get_code']);
Route::post('newsletter', [App\Http\Controllers\Frontend\FrontHomeController::class, 'newsletter']);

//coupon search filter
Route::post('search-coupon', [CouponController::class, 'search']);
Route::get('SearchKeyword', [App\Http\Controllers\Frontend\FrontHomeController::class, 'SearchKeyword']);


// all store
Route::get('all-store', [App\Http\Controllers\Frontend\FrontHomeController::class, 'all_store']);


//sitemap

Route::get('sitemap.xml', [App\Http\Controllers\Frontend\SitemapController::class, 'index']);
Route::get('coupon.xml', [App\Http\Controllers\Frontend\SitemapController::class, 'coupon']);
Route::get('deal.xml', [App\Http\Controllers\Frontend\SitemapController::class, 'deal']);
Route::get('post.xml', [App\Http\Controllers\Frontend\SitemapController::class, 'post']);
Route::get('pages.xml', [App\Http\Controllers\Frontend\SitemapController::class, 'pages']);
Route::get('video.xml', [App\Http\Controllers\Frontend\SitemapController::class, 'video']);
Route::get('collection.xml', [App\Http\Controllers\Frontend\SitemapController::class, 'collection']);




//indeed
//Navbar Pages

Route::get('cv-builder', [DashboardController::class, 'cvBuilder']);
Route::get('job-alert', [DashboardController::class, 'job_alert']);
Route::get('help-center', [DashboardController::class, 'help_center']);
Route::resource('recruiting', RecruitersController::class);
Route::resource('search-job', App\Http\Controllers\Frontend\SearchJobController::class);
Route::resource('searched-job', App\Http\Controllers\Frontend\SearchedJobController::class);
