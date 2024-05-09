<?php

namespace App\Http\Controllers\indeed\modifyJob;
use App\Http\Controllers\Controller;
use App\Models\modifyJob;
use Illuminate\Http\Request;

class ModifyJobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return view('light/postjob/dashboard/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\modifyJob  $modifyJob
     * @return \Illuminate\Http\Response
     */
    public function show(modifyJob $modifyJob)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\modifyJob  $modifyJob
     * @return \Illuminate\Http\Response
     */
    public function edit(modifyJob $modifyJob)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\modifyJob  $modifyJob
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, modifyJob $modifyJob)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\modifyJob  $modifyJob
     * @return \Illuminate\Http\Response
     */
    public function destroy(modifyJob $modifyJob)
    {
        //
    }


    public function applied_job()
    {
        return view('management/appliedjob/index');
    }

    public function searchJob()
    {
        return view('light/postJob/searchJob');
    }

    public function calender()
    {
        return view('light/pages/apps/calender');
    }

    public function chat()
    {
        return view('light/pages/apps/chat');
    }

    public function contact_grid()
    {
        return view('light/pages/apps/contact_grid');
    }

    public function contact_list()
    {
        return view('light/pages/apps/contact_list');
    }

    public function dragdrop()
    {
        return view('light/pages/apps/dragdrop');
    }

    public function portfolio()
    {
        return view('light/pages/apps/portfolio');
    }

    public function support()
    {
        return view('light/pages/apps/support');
    }

    public function task()
    {
        return view('light/pages/apps/task');
    }

    public function amchart()
    {
        return view('light/pages/charts/amchart');
    }

    public function apexchart()
    {
        return view('light/pages/charts/apexchart');
    }

    public function chartjs()
    {
        return view('light/pages/charts/chartjs');
    }

    public function echart()
    {
        return view('light/pages/charts/echart');
    }

    public function flot()
    {
        return view('light/pages/charts/flot');
    }

    public function jquery_knob()
    {
        return view('light/pages/charts/jquery-knob');
    }

    public function morris()
    {
        return view('light/pages/charts/morris');
    }

    public function sparkline()
    {
        return view('light/pages/charts/sparkline');
    }

    public function dashboard2()
    {
        return view('light/pages/dashboard/dashboard2');
    }

    public function dashboard3()
    {
        return view('light/pages/dashboard/dashboard3');
    }

    public function chart()
    {
        return view('light/pages/ecommerce/chart');
    }

    public function invoice()
    {
        return view('light/pages/ecommerce/invoice');
    }

    public function product_detail()
    {
        return view('light/pages/ecommerce/product-detail');
    }

    public function product_list()
    {
        return view('light/pages/ecommerce/product-list');
    }

    public function product()
    {
        return view('light/pages/ecommerce/products');
    }

    public function compose()
    {
        return view('light/pages/email/compose');
    }

    public function inbox()
    {
        return view('light/pages/email/inbox');
    }

    public function mail_inbox()
    {
        return view('light/pages/email/mail-inbox');
    }

    public function view_mail()
    {
        return view('light/pages/email/view-mail');
    }

    public function example404()
    {
        return view('light/pages/examples/404');
    }

    public function example500()
    {
        return view('light/pages/examples/500');
    }

    public function blank()
    {
        return view('light/pages/examples/blank');
    }

    public function faqs()
    {
        return view('light/pages/examples/faqs');
    }

    public function forgot_password()
    {
        return view('light/pages/examples/forgot-password');
    }

    public function iinvoice()
    {
        return view('light/pages/examples/invoice');
    }

    public function locked()
    {
        return view('light/pages/examples/locked');
    }

    public function login()
    {
        return view('light/pages/examples/login');
    }

    public function login2()
    {
        return view('light/pages/examples/login2');
    }

    public function login_register()
    {
        return view('light/pages/examples/login-register');
    }

    public function pricing()
    {
        return view('light/pages/examples/pricing');
    }

    public function profile()
    {
        return view('light/pages/examples/profile');
    }

    public function register()
    {
        return view('light/pages/examples/register');
    }
    public function register2()
    {
        return view('light/pages/examples/register2');
    }

    public function advanced()
    {
        return view('light/pages/forms/advanced-form-elements');
    }

    public function basic()
    {
        return view('light/pages/forms/basic-form-elements');
    }

    public function editor()
    {
        return view('light/pages/forms/editors');
    }
    public function form_example()
    {
        return view('light/pages/forms/form-examples');
    }
    public function form_validation()
    {
        return view('light/pages/forms/form-validation');
    }
    public function form_wizard()
    {
        return view('light/pages/forms/form-wizard');
    }

    public function font_awesome()
    {
        return view('light/pages/icons/font-awesome');
    }

    public function material_icon()
    {
        return view('light/pages/icons/material-icon');
    }

    public function google()
    {
        return view('light/pages/maps/google');
    }

    public function jqvmap()
    {
        return view('light/pages/maps/jqvmap');
    }

    public function carousel()
    {
        return view('light/pages/medias/carousel');
    }

    public function image_gallery()
    {
        return view('light/pages/medias/image-gallery');
    }

    public function advance()
    {
        return view('light/pages/tables/advance-tables');
    }
    public function child()
    {
        return view('light/pages/tables/child-row-table');
    }
    public function export()
    {
        return view('light/pages/tables/export-table');
    }
    public function group()
    {
        return view('light/pages/tables/group-table');
    }
    public function normal()
    {
        return view('light/pages/tables/normal-table');
    }
    public function timeline()
    {
        return view('light/pages/timeline/timeline');
    }
    public function timeline2()
    {
        return view('light/pages/timeline/timeline2');
    }
    public function alerts()
    {
        return view('light/pages/ui/alerts');
    }
    public function animations()
    {
        return view('light/pages/ui/animations');
    }
    public function badges()
    {
        return view('light/pages/ui/badges');
    }
    public function buttons()
    {
        return view('light/pages/ui/buttons');
    }
    public function cards()
    {
        return view('light/pages/ui/cards');
    }
    public function collapse()
    {
        return view('light/pages/ui/collapse');
    }
    public function dialogs()
    {
        return view('light/pages/ui/dialogs');
    }
    public function helper()
    {
        return view('light/pages/ui/helper-classes');
    }
    public function labels()
    {
        return view('light/pages/ui/labels');
    }
    public function list_group()
    {
        return view('light/pages/ui/list-group');
    }
    public function media_object()
    {
        return view('light/pages/ui/media-object');
    }
    public function modal()
    {
        return view('light/pages/ui/modal');
    }
    public function notice()
    {
        return view('light/pages/ui/notice-object');
    }
    public function notification()
    {
        return view('light/pages/ui/notification');
    }
    public function pre_loaders()
    {
        return view('light/pages/ui/preloaders');
    }
    public function progress_bar()
    {
        return view('light/pages/ui/progressbars');
    }
    public function range_sliders()
    {
        return view('light/pages/ui/range-sliders');
    }
    public function tabs()
    {
        return view('light/pages/ui/tabs');
    }
    public function typography()
    {
        return view('light/pages/ui/typography');
    }
    public function waves()
    {
        return view('light/pages/ui/waves');
    }
    public function widgets()
    {
        return view('light/pages/widgets/widget');
    }



















}
