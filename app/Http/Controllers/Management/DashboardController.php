<?php

namespace App\Http\Controllers\Management;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('management/dashboard/index');
    }

    public function dashboard()
    {
        return view('management/dashboard/dashboard');
    }
    public function cvBuilder()
    {
        return view('frontend/job-seeker/cvBuilder');
    }
    public function help_center()
    {
        return view('frontend/job-seeker/helpCenter');
    }
    public function job_alert()
    {
        return view('frontend/job-seeker/job_alert');
    }
}
