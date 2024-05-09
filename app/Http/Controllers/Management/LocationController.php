<?php

namespace App\Http\Controllers\Management;
use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $location=Location::get();
        return view('management/managejobs/Location/index',compact('location'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('management.managejobs.Location.create');
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
            'location_name' => 'required',
        ]);

        $data = [
            'status' => $request->status,
            'location_name' => $request->location_name,
        ];
        $location = Location::create($data);
        return redirect()->back()->with('success','Location Created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $location = Location::where('id',$id)->get()->first();
        return view('management.managejobs.Location.edit',compact('location'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function edit(Location $location)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $location = Location::where('id',$id)->get()->first();
        $location->update([
            'status' => $request->status,
            'location_name' => $request->location_name,
        ]);
        return  redirect()->back()->with('success', 'Location Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $location = Location::where('id',$id)->delete();
        return  redirect()->back()->with('success', 'Location Deleted Succesfully');
    }
}
