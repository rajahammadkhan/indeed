<?php

namespace App\Http\Controllers\indeed\CVWatchdogs;
use App\Http\Controllers\Controller;
use App\Models\CVWatchdogs;
use Illuminate\Http\Request;

class CVWatchdogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('management/cvwatchdogs/controlpanel/index');
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
     * @param  \App\Models\CVWatchdogs  $cVWatchdogs
     * @return \Illuminate\Http\Response
     */
    public function show(CVWatchdogs $cVWatchdogs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CVWatchdogs  $cVWatchdogs
     * @return \Illuminate\Http\Response
     */
    public function edit(CVWatchdogs $cVWatchdogs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CVWatchdogs  $cVWatchdogs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CVWatchdogs $cVWatchdogs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CVWatchdogs  $cVWatchdogs
     * @return \Illuminate\Http\Response
     */
    public function destroy(CVWatchdogs $cVWatchdogs)
    {
        //
    }

    public function create_watchdogs()
    {
        return view('management/cvwatchdogs/createwatchdogs/index');
    }
    public function modify_watchdogs()
    {
        return view('management/cvwatchdogs/modifywatchdogs/index');
    }
    public function reactive_watchdogs()
    {
        return view('management/cvwatchdogs/reactivewatchdogs/index');
    }
    public function watchdogs_sent()
    {
        return view('management/cvwatchdogs/watchdogssent/index');
    }
   
}
