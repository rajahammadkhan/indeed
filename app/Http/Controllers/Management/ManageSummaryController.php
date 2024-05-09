<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CVBuilder;
use App\Models\User;
use App\Models\Summary;

class ManageSummaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $summary = Summary::get();
        return view('management/summary/index', compact('summary'));
    }

    public function edit_status($status, $id)
    {
        Summary::where("id", $id)->update(['status' => $status]);
        // return $res; 
        return  redirect()->back()->with('success', 'Status Succesfully Updated');

    }
    
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        // dd($req->resume);
        $data = [
            // 'candidate_id'=>auth()->user()->id,
            'status' => $req->status,
            'summary' => $req->summary,
        ];
        Summary::insert($data); 
        return  redirect('/manage-summary'); 


    }
    
    public function create(Request $req)
    {
        // dd($req->resume);
        return view('management/summary/create');
        $data = [
            // 'candidate_id'=>auth()->user()->id,
            'status' => $req->status,
            'summary' => $req->summary,
        ];
        Summary::insert($data);
    }

    public function edit_summary($id)
    {
        // dd($req->resume); 
        $data = Summary::where(['id' => $id])->get();
        // dd($data);
        return view('management/summary/edit', compact('data'));
 
    }

    public function save_summary(Request $req)
    {
        // return $req;
        $affectedRows = Summary::where("id", $req->id)->update(["summary" => $req->summary]); 
        return  redirect('/manage-summary'); 
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
    public function update(Request $request, CVBuilder $cVBuilder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CVBuilder  $cVBuilder
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // return $id;
        // return $res;
        Summary::where('id',$id)->delete();
        return  redirect()->back()->with('success', 'Summary Deleted Succesfully');
    }
}
