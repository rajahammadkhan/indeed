<?php

namespace App\Http\Controllers\Management;
use App\Http\Controllers\Controller;
use App\Models\CandidateJobPost;
use App\Models\Department;
use App\Models\Industry;
use App\Models\JobType;
use App\Models\Location;
use App\Models\ManageJobs;
use App\Models\media;
use App\Models\PostJob;
use Illuminate\Http\Request;

class ManageJobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modify_job = PostJob::get();
        return view('management/managejobs/modifyjob/index',compact('modify_job'));
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
     * @param  \App\Models\ManageJobs  $manageJobs
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['media'] = media::where('reference_id',$id)->where('reference_type','post-job')->get()->first();
        $data['job_type']=JobType::get();
        $data['department']=Department::get();
        $data['industry']=Industry::get();
        $data['location']=Location::get();
        $data['post_job'] = PostJob::where('id',$id)->get()->first();
        return view('frontend/recruiter/editpostjob',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ManageJobs  $manageJobs
     * @return \Illuminate\Http\Response
     */
    public function edit(ManageJobs $manageJobs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ManageJobs  $manageJobs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $recruiter_post_job = RecruiterJobPost::where('job_id', $id)->get()->first();
        $multi = media::where('reference_id',$id)->where('reference_type','post-job')->get()->first();
        $data = PostJob::where('id',$id)->get()->first();

        if($request->file('image')){

            $ext = $request->file('image')->getClientOriginalExtension();
            $main_file = 'post-job'.time() . rand(1000, 14000000000) . '.' . $ext;
            $request->image->move(public_path('images/media'), $main_file);
        }
        else
        {
            $main_file = $multi->image;
        }

        $data->update([
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
        ]);

        if($multi != null ){
            $multi->update([
                'image' => $main_file,
            ]);
        }else {
            $multi_image =
                [
                    'reference_id' => $id,
                    'reference_type' => 'post-job',
                    'image' => $main_file,
                ];

            media::create($multi_image);
        }

        $recruiter_post_job->update([
                'candidate_id'=>auth()->user()->id,
                'job_id'=>$id,
            ]);
        return  redirect()->back()->with('success', 'PostJob Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ManageJobs  $manageJobs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post_job = PostJob::where('id',$id)->delete();
        return  redirect()->back()->with('success', 'PostJob Deleted Succesfully');
    }
    
    public function current_job()
    {
        return view('light/postjob/managejobs/currentjob/index');
    }
    public function job_application()
    {
        return view('light/postjob/managejobs/jobapplication/index');
    }
    public function job_templates()
    {
        return view('light/postjob/managejobs/jobtemplates/index');
    }
    public function job_posting()
    {
        return view('light/postjob/managejobs/jobposting/index');
    }
    public function nation_job()
    {
        return view('light/postjob/managejobs/nationjobs/index');
    }
}
