<?php

namespace App\Http\Controllers\Management;
use App\Http\Controllers\Controller;
use App\Models\RecruiterJobPost;
use App\Models\media;
use App\Models\PostJob;
use App\Models\JobType;
use App\Models\Department;
use App\Models\Industry;
use App\Models\Location;
use Illuminate\Http\Request;
use function Ramsey\Uuid\v1;

class PostJobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['job_type']=JobType::get();
        $data['department']=Department::get();
        $data['industry']=Industry::get();
        $data['location']=Location::get();
        return view('frontend/recruiter/postjobb',$data);
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
        if ($request->file('image')) {
            $mainext = $request->file('image')->getClientOriginalExtension();
            $main_file = 'post-job'.time() . rand(1000, 14000000000) . '.' . $mainext;
            $request->image->move(public_path('images/media'), $main_file);
        } else {
            $main_file = null;
        }

        $data = [
            'user_id'=>auth()->user()->id,
            'industry_id' => $request->industry_id,
            'department_id' => $request->department_id,
            'job_type_id' => $request->job_type_id,
            'location_id' => $request->location_id,
            'status' => $request->status,
            'job_title' => $request->job_title,
            'job_status' => $request->job_status,
            'postcode' => $request->postcode,
            'advertise_job' => $request->advertise_job,
            'minimum_pay' => $request->minimum_pay,
            'maximum_pay' => $request->maximum_pay,
            'pay_rate' => $request->pay_rate,
            'start_date' => $request->start_date,
            'job_description' => $request->job_description,
            'screening_question' => $request->screening_question,
            'question_answer' => json_encode($request->question_answer),
        ];
        $post_job = PostJob::create($data);
        $multi_image=
            [
                'reference_id' => $post_job->id,
                'reference_type'=>'post-job',
                'image' => $main_file,
            ];
        $multi = media::create($multi_image);
        $recruiter_post_job=
            [
                'recruiter_id'=>auth()->user()->id,
                'job_id'=>$post_job->id,
            ];
        $recruiter_post_job = RecruiterJobPost::create($recruiter_post_job);
        return redirect()->route('post-job.show',$post_job->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PostJob  $postJob
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post_job = PostJob::where('id',$id)->get()->first();
        return view('frontend/recruiter/postJobDetails',compact('post_job'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PostJob  $postJob
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PostJob  $postJob
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $post_job = PostJob::where('id',$id)->get()->first();
        $post_job->update([
            'agreed' =>  $request->agreed,
        ]);
        return redirect()->back()->with('success','Post-Job Created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PostJob  $postJob
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostJob $postJob)
    {
        //
    }
}
