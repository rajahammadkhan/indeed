<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Industry;
use App\Models\SearchJob;
use App\Models\PostJob;
use Illuminate\Http\Request;

class SearchJobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $industry = Industry::leftJoin('media', function($join) {
            $join->on('industries.id', '=', 'media.reference_id');
        })
            ->where('reference_type','=','industry')
            ->select('industries.id','industries.industry_name','media.image')
            ->get();
        return view('frontend/job-seeker/index',compact('industry'));
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
     * @param  \App\Models\SearchJob  $searchJob
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $abc = PostJob::where('industry_id',$id)->get();
        if(sizeof($abc)==0)
        {
            return view('frontend/job-seeker/nodata');
        }
        else
        {
            $post_job = PostJob::leftJoin('media', function($join) {
                $join->on('post_jobs.id', '=', 'media.reference_id');
            })
                ->where('industry_id','=',$id)
                ->where('reference_type','=','post-job')
                ->select('post_jobs.id','post_jobs.job_title','post_jobs.user_id','post_jobs.minimum_pay',
                    'post_jobs.maximum_pay','post_jobs.pay_rate','post_jobs.industry_id','post_jobs.location_id',
                    'post_jobs.job_type_id','post_jobs.department_id','post_jobs.job_description',
                    'media.image')
                ->get();
            return view('frontend/job-seeker/searchedjob',compact('post_job'));
        }


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SearchJob  $searchJob
     * @return \Illuminate\Http\Response
     */
    public function edit(SearchJob $searchJob)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SearchJob  $searchJob
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SearchJob $searchJob)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SearchJob  $searchJob
     * @return \Illuminate\Http\Response
     */
    public function destroy(SearchJob $searchJob)
    {
        //
    }
}
