<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
//        Auth::logout();
        if(!auth()->user()->hasPermissionTo('dashboard-permission')){
            return abort(401);
        }
         $contact = Contact::get();
        return view('management.home.index',compact('contact'));
    }
}
