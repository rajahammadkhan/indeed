<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\AppliedJob;
use App\Models\CandidateJobPost;
use App\Models\media;
use App\Models\User;
use Illuminate\Http\Request;

class AppliedJobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=User::where('id',auth()->user()->id)->get()->first();
        return view('frontend/appliedjob/index',compact('user'));
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
        if ($request->file('document_pdf')) {
            $mainext = $request->file('document_pdf')->getClientOriginalExtension();
            $main_file = 'applied-job'.time() . rand(1000, 14000000000) . '.' . $mainext;
            $request->document_pdf->move(public_path('indeed/document'), $main_file);
        } else {
            $main_file = null;
        }

        $data = [
            'user_id'=>auth()->user()->id,
            'user_email' => $request->user_email,
            'country_code' => $request->country_code,
            'mobile_phone' => $request->mobile_phone,
            'additional_question' => $request->additional_question,
            'proficiency_level' => $request->proficiency_level,
            'document_pdf' => $main_file,
        ];
        $appliedJob = AppliedJob::create($data);
        $candidate_post_job=
            [
                'candidate_id'=>auth()->user()->id,
                'job_id'=>$appliedJob->id,
            ];
        $candidate_post_job = CandidateJobPost::create($candidate_post_job);
        return redirect()->route('applied-job.show',$appliedJob->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AppliedJob  $appliedJob
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['user']=User::where('id',auth()->user()->id)->get()->first();
        $data['appliedJob'] = AppliedJob::where('id',$id)->get()->first();
        return view('frontend/appliedjob/jobDetail',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AppliedJob  $appliedJob
     * @return \Illuminate\Http\Response
     */
    public function edit(AppliedJob $appliedJob)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AppliedJob  $appliedJob
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $appliedJob = AppliedJob::where('id',$id)->get()->first();
        $appliedJob->update([
            'agreed' =>  $request->agreed,
        ]);
        return redirect()->back()->with('success','Applied Job Created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AppliedJob  $appliedJob
     * @return \Illuminate\Http\Response
     */
    public function destroy(AppliedJob $appliedJob)
    {
        //
    }
}
