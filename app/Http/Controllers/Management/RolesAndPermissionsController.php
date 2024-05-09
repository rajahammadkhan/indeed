<?php

namespace App\Http\Controllers\Management;
use App\Http\Controllers\Controller;
use App\Models\RolesAndPermissions;
use Illuminate\Http\Request;

class RolesAndPermissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('management/rolesandpermission/index');
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
     * @param  \App\Models\RolesAndPermissions  $rolesAndPermissions
     * @return \Illuminate\Http\Response
     */
    public function show(RolesAndPermissions $rolesAndPermissions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RolesAndPermissions  $rolesAndPermissions
     * @return \Illuminate\Http\Response
     */
    public function edit(RolesAndPermissions $rolesAndPermissions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RolesAndPermissions  $rolesAndPermissions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RolesAndPermissions $rolesAndPermissions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RolesAndPermissions  $rolesAndPermissions
     * @return \Illuminate\Http\Response
     */
    public function destroy(RolesAndPermissions $rolesAndPermissions)
    {
        //
    }
}
