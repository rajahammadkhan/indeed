<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CVBuilder;
use App\Models\Summary;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Resume;
use App\Models\Skills;
use App\Models\Language;
use App\Models\Interest;

class CVBuilderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        // return view('frontend/cv-builder/index', compact('summary'));
        // try {
        // } catch (\Exception $th) {
        //     return redirect('/login');
        // }

        $user_id = auth()->user()->id;
        $summary = Summary::get();
        $data['summary'] = $summary;
        $data['resume'] = Resume::get();
        $data['education'] = Education::get();
        $data['experience'] = Experience::get();
        $data['project'] = Project::get();
        $data['skill'] = Skills::get();
        $data['language'] = Language::get();
        $data['interest'] = Interest::get();
        $data['user_id'] = $user_id;

        // $data = $resume->concat($experience)->concat($education)->concat($project)->concat($skill)->concat($language)->concat($interest)->concat($summary);
        // dd($data);


        // if (Resume::where('user_id', $user_id)->get()->last()) {
        //     return view('frontend/cv-builder/edit', $data);
        // } else {
        return view('frontend/cv-builder/index', compact('summary'));
        // }
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
    public function store(Request $req)
    {
        return $req;
        $user_id = auth()->user()->id;

        $name = $req['name'];
        $role = $req['job'];
        $email = $req['email'];
        $phone = $req['phone'];
        $edu_degree = $req->education_degree;
        $exp_company = $req->experience_company;
        $exp_role = $req->experience_role;
        $summary = $req->resume;
        $proj_name = $req->project_name;
        $edu_school = $req->education_school;
        $proj_link = $req->project_link;
        $proj_from = $req->project_from;
        $exp_from = $req->experience_from;
        $edu_from = $req->education_from;
        $edu_to = $req->education_to;
        $proj_to = $req->project_to;
        $exp_to = $req->experience_to;
        $exp_desc = $req->experience_description;
        $proj_desc = $req->project_description;
        $edu_desc = $req->education_description;
        $exp_tag = $req->experience_tags;
        $proj_tag = $req->project_tags;
        $skill = $req->skill;
        $language = $req->language;
        // $skill_level = $req->skill_level;
        // $language_level = $req->language_level;
        $interests = $req->interest;
        $social_url = $req->social_url;
        $website = $req['website'];
        $social = $req['social-media'];

        // Validate All Inputs By Server Side 
        $req->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|max:255',
            'job' => 'required',
            'phone' => 'required|max:22',
            'resume' => 'required|min:12',
            'skill' => 'required',
            'language' => 'required',
            'interest' => 'required',
            'experience_company' => 'required',
            'experience_role' => 'required',
            'project_name' => 'required',
            'education_school' => 'required',
            'project_link' => 'required',
            'experience_description' => 'required',
            'project_description' => 'required',
            'education_description' => 'required',
            'experience_description' => 'required',
            'experience_description' => 'required',
            'experience_description' => 'required',
        ]);



        // Insert Common Data Multiple Table 
        $basic_language = [
            'user_id' => $user_id,
            'status' => '1',
            'language' => $language,
            // 'language_level' => $language_level,
        ];
        Language::create($basic_language);



        $basic_skills = [
            'user_id' => $user_id,
            'status' => '1',
            'skill' => $skill,
            // 'skill_level' => $skill_level,
        ];
        Skills::create($basic_skills);



        $basic_interest = [
            'user_id' => $user_id,
            'status' => '1',
            'interest' => $interests,
        ];
        Interest::create($basic_interest);




        // Insert Data in Resumes Table 
        $resume = [
            'user_id' => $user_id,
            // 'status' => '1',
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'role' => $role,
            'website' => $website,
            'social' => $social,
            'social_url' => $social_url,
            'resume_summary' => $summary,
        ];
        Resume::create($resume);




        // Insert Data in Education Table 
        $education = [
            // 'candidate_id'=>auth()->user()->id,
            'user_id' => $user_id,
            'status' => '1',
            'degree' => $edu_degree,
            'school' => $edu_school,
            'edu_from' => $edu_from,
            'edu_to' => $edu_to,
            'description' => $edu_desc
        ];
        Education::create($education);




        // Insert Data in Experience Table 
        $experience = [
            'user_id' => $user_id,
            'status' => '1',
            'role' => $exp_role,
            'company' => $exp_company,
            'experience_from' => $exp_from,
            'experience_to' => $exp_to,
            'tags' => $exp_tag,
            'description' => $exp_desc,
        ];
        Experience::create($experience);




        // Insert Data in Projects Table 
        $project = [
            'user_id' => $user_id,
            'status' => '1',
            'name' => $proj_name,
            'link' => $proj_link,
            'proj_from' => $proj_from,
            'proj_to' => $proj_to,
            'tags' => $proj_tag,
            'description' => $proj_desc,
        ];
        Project::create($project);


        return  redirect()->back()->with('success', 'Resume Succesfully Saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CVBuilder  $cVBuilder
     * @return \Illuminate\Http\Response
     */
    public function show(CVBuilder $cVBuilder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CVBuilder  $cVBuilder
     * @return \Illuminate\Http\Response
     */
    public function edit(CVBuilder $cVBuilder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CVBuilder  $cVBuilder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        if (!auth()->user()->id === $id) {
            return redirect()->back()->with('error', 'Access Denied!');
        }

        $user_id = $id;
        $name = $req['name'];
        $role = $req['job'];
        $email = $req['email'];
        $phone = $req['phone'];
        $edu_degree = $req->education_degree;
        $exp_company = $req->experience_company;
        $exp_role = $req->experience_role;
        $summary = $req->resume;
        $proj_name = $req->project_name;
        $edu_school = $req->education_school;
        $proj_link = $req->project_link;
        $proj_from = $req->project_from;
        $exp_from = $req->experience_from;
        $edu_from = $req->education_from;
        $edu_to = $req->education_to;
        $proj_to = $req->project_to;
        $exp_to = $req->experience_to;
        $exp_desc = $req->experience_description;
        $proj_desc = $req->project_description;
        $edu_desc = $req->education_description;
        $exp_tag = $req->experience_tags;
        $proj_tag = $req->project_tags;
        $skill = $req->skill;
        $language = $req->language;
        // $skill_level = $req->skill_level;
        // $language_level = $req->language_level;
        $interests = $req->interest;
        $social_url = $req->social_url;
        $website = $req['website'];
        $social = $req['social-media'];

        // Validate All Inputs By Server Side 
        $req->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|max:255',
            'job' => 'required',
            'phone' => 'required|max:22',
            'resume' => 'required|min:12',
            'skill' => 'required',
            'language' => 'required',
            'interest' => 'required',
            'experience_company' => 'required',
            'experience_role' => 'required',
            'project_name' => 'required',
            'education_school' => 'required',
            'project_link' => 'required',
            'experience_description' => 'required',
            'project_description' => 'required',
            'education_description' => 'required',
            'experience_description' => 'required',
            'experience_description' => 'required',
            'experience_description' => 'required',
        ]);



        // Insert Common Data Multiple Table 
        $basic_language = [
            'user_id' => $user_id,
            'status' => '1',
            'language' => $language,
            // 'language_level' => $language_level,
        ];
        // Language::update($basic_language);
        // return $basic_language;
        Language::where('user_id', $user_id)->first()->update($basic_language);




        $basic_skills = [
            'user_id' => $user_id,
            'status' => '1',
            'skill' => $skill,
            // 'skill_level' => $skill_level,
        ];
        Skills::where('user_id', $user_id)->first()->update($basic_skills);




        $basic_interest = [
            'user_id' => $user_id,
            'status' => '1',
            'interest' => $interests,
        ];
        Interest::where('user_id', $user_id)->first()->update($basic_interest);





        // Insert Data in Resumes Table 
        $resume = [
            'user_id' => $user_id,
            // 'status' => '1',
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'role' => $role,
            'website' => $website,
            'social' => $social,
            'social_url' => $social_url,
            'resume_summary' => $summary,
        ];
        Resume::where('user_id', $user_id)->first()->update($resume);





        // Insert Data in Education Table 
        $education = [
            // 'candidate_id'=>auth()->user()->id,
            'user_id' => $user_id,
            'status' => '1',
            'degree' => $edu_degree,
            'school' => $edu_school,
            'edu_from' => $edu_from,
            'edu_to' => $edu_to,
            'description' => $edu_desc
        ];
        Education::where('user_id', $user_id)->first()->update($education);





        // Insert Data in Experience Table 
        $experience = [
            'user_id' => $user_id,
            'status' => '1',
            'role' => $exp_role,
            'company' => $exp_company,
            'experience_from' => $exp_from,
            'experience_to' => $exp_to,
            'tags' => $exp_tag,
            'description' => $exp_desc,
        ];
        Experience::where('user_id', $user_id)->first()->update($experience);





        // Insert Data in Projects Table 
        $project = [
            'user_id' => $user_id,
            'status' => '1',
            'name' => $proj_name,
            'link' => $proj_link,
            'proj_from' => $proj_from,
            'proj_to' => $proj_to,
            'tags' => $proj_tag,
            'description' => $proj_desc,
        ];
        Project::where('user_id', $user_id)->first()->update($project);



        return  redirect()->back()->with('success', 'Resume Succesfully Saved!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CVBuilder  $cVBuilder
     * @return \Illuminate\Http\Response
     */
    public function destroy(CVBuilder $cVBuilder)
    {
        //
    }
}
