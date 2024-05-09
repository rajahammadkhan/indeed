<?php

namespace App\Http\Controllers\indeed\SearchCVs;
use App\Http\Controllers\Controller;
use App\Models\SearchCVs;
use Illuminate\Http\Request;

class SearchCVsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('management/searchcvs/candidatesearch/index');
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
     * @param  \App\Models\SearchCVs  $searchCVs
     * @return \Illuminate\Http\Response
     */
    public function show(SearchCVs $searchCVs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SearchCVs  $searchCVs
     * @return \Illuminate\Http\Response
     */
    public function edit(SearchCVs $searchCVs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SearchCVs  $searchCVs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SearchCVs $searchCVs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SearchCVs  $searchCVs
     * @return \Illuminate\Http\Response
     */
    public function destroy(SearchCVs $searchCVs)
    {
        //
    }

    public function candidate_searched()
    {
        return view('management/searchcvs/candidatesearch/candidatesearched');
    }

    public function search_cvs()
    {
        return view('management/searchcvs/searchcvss/index');
    }
    public function recent_cvs()
    {
        return view('management/searchcvs/recentcvs/index');
    }
    public function saved_cvs()
    {
        return view('management/searchcvs/savedcvs/index');
    }
    public function saved_searches()
    {
        return view('management/searchcvs/savedsearches/index');
    }
    public function recently_viewed()
    {
        return view('management/searchcvs/recentlyviewed/index');
    }
    public function cv_notes()
    {
        return view('management/searchcvs/cvnotes/index');
    }
    public function removed_cvs()
    {
        return view('management/searchcvs/removedcvs/index');
    }
    public function popular_searches()
    {
        return view('management/searchcvs/popularsearches/index');
    }
}
