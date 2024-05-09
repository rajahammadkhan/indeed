<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\media;
use App\Models\SearchedJob;
use App\Models\PostJob;
use Illuminate\Http\Request;

class SearchedJobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post_job = PostJob::leftJoin('media', function($join) {
            $join->on('post_jobs.id', '=', 'media.reference_id');
        })
            ->where('reference_type','=','post-job')
            ->select('post_jobs.id','post_jobs.job_title','post_jobs.user_id','post_jobs.minimum_pay',
                     'post_jobs.maximum_pay','post_jobs.pay_rate','post_jobs.industry_id','post_jobs.location_id',
                     'post_jobs.job_type_id','post_jobs.department_id','post_jobs.job_description',
                     'media.image')
            ->get();
        return view('frontend/job-seeker/searchedjob',compact('post_job'));
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
     * @param  \App\Models\SearchedJob  $searchedJob
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['media'] = media::where('reference_id',$id)->where('reference_type','post-job')->get()->first();
        $data['post_job'] = PostJob::where('id',$id)->get()->first();
        return view('frontend/job-seeker/singlejobpost',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SearchedJob  $searchedJob
     * @return \Illuminate\Http\Response
     */
    public function edit(SearchedJob $searchedJob)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SearchedJob  $searchedJob
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SearchedJob $searchedJob)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SearchedJob  $searchedJob
     * @return \Illuminate\Http\Response
     */
    public function destroy(SearchedJob $searchedJob)
    {
        //
    }
}
