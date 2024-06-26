<?php

namespace App\Http\Controllers\Management;
use App\Http\Controllers\Controller;
use App\Models\Recruiters;
use Illuminate\Http\Request;

class RecruitersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend/recruiter/recruiting');
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
     * @param  \App\Models\Recruiters  $recruiters
     * @return \Illuminate\Http\Response
     */
    public function show(Recruiters $recruiters)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recruiters  $recruiters
     * @return \Illuminate\Http\Response
     */
    public function edit(Recruiters $recruiters)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recruiters  $recruiters
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recruiters $recruiters)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recruiters  $recruiters
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recruiters $recruiters)
    {
        //
    }
}
