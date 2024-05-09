<?php

namespace App\Http\Controllers\Management;
use App\Http\Controllers\Controller;
use App\Models\JobType;
use Illuminate\Http\Request;

class JobTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $job_type = JobType::get();
        return view('management/managejobs/JobType/index',compact('job_type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('management.managejobs.JobType.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'status' => 'required',
            'job_name' => 'required',
        ]);

        $data = [
            'status' => $request->status,
            'job_name' => $request->job_name,
        ];
        $jobType = JobType::create($data);
        return redirect()->back()->with('success','JobType Created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JobType  $jobType
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job_type = JobType::where('id',$id)->get()->first();
        return view('management.managejobs.JobType.edit',compact('job_type'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JobType  $jobType
     * @return \Illuminate\Http\Response
     */
    public function edit(JobType $jobType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JobType  $jobType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $jobType = JobType::where('id',$id)->get()->first();
        $jobType->update([
            'status' => $request->status,
            'job_name' => $request->job_name,
        ]);
        return  redirect()->back()->with('success', 'JobType Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JobType  $jobType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jobType = JobType::where('id',$id)->delete();
        return  redirect()->back()->with('success', 'JobType Deleted Succesfully');
    }
}
