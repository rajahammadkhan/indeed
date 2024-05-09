<?php

namespace App\Http\Controllers\Management;
use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $department = Department::get();
        return view('management/managejobs/Department/index',compact('department'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('management.managejobs.Department.create');
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
            'depart_name' => 'required',
        ]);

        $data = [
            'status' => $request->status,
            'depart_name' => $request->depart_name,
        ];
        $department = Department::create($data);
        return redirect()->back()->with('success','Department Created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $department = Department::where('id',$id)->get()->first();
        return view('management.managejobs.Department.edit',compact('department'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $department = Department::where('id',$id)->get()->first();
        $department->update([
            'status' => $request->status,
            'depart_name' => $request->depart_name,
        ]);
        return  redirect()->back()->with('success', 'Department Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $department = Department::where('id',$id)->delete();
        return  redirect()->back()->with('success','Department Deleted Succesfully');
    }
}
