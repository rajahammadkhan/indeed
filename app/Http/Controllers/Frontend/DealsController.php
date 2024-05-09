<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\seo;
use Session;
use App\Models\coupon;
use App\Models\media;
use App\Models\Contact;
use Illuminate\Http\Request;

class DealsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('frontend.home.index');
    }
    public function countrysort($id)
    {
        if(Session::get('country') == null){
            Session::put('country', $id);
        }else{
            Session::forget('country');
            Session::put('country', $id);

        }


        return redirect()->back();
    }
    public function SearchResult(Request $request)
    {
        $coupon =array();
        if($request->category != null && $request->coupon != null) {
            $coupons = coupon::where('category_id', base64_decode($request->category))
                ->where('title', 'like', "%$request->coupon%")
                ->get();
        }elseif($request->category  != null && $request->coupon == null){
            $coupons = coupon::where('category_id', base64_decode($request->category))

                ->get();
        }elseif($request->category  == null && $request->coupon != null){
            $coupons = coupon::where('title', 'like', "%$request->coupon%")
                ->get();
        }

        foreach ($coupons as $row) {
            $seo = seo::where(['reference_type' => 'coupon', 'reference_id' => $row->id])->get()->first();
            $media = media::where(['reference_type' => 'coupon', 'reference_id' => $row->id])->get();
            $coupon[] = [
                'basic' => $row,
                'media' => $media,
                'seo' => $seo
            ];
        }
        $column = 3;
        return   view('frontend/search/index',compact('coupon','column'));

    }


    public function ContactPost(Request $request)
    {
        Contact::create($request->all());
        return redirect()->back()->with('success','Your Query Has been submitted');
    }


}
