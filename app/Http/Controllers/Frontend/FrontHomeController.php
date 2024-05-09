<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\categories;
use App\Models\country;
use App\Models\Department;
use App\Models\Industry;
use App\Models\Location;
use App\Models\store;
use App\Models\seo;
use App\Models\Pages;
use App\Models\Newsletter;
use App\Models\Keyword;
use App\Models\PostJob;
use DB;
use Session;
use App\Models\coupon;
use App\Models\Reaction;
use App\Models\media;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;



class FrontHomeController extends Controller
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
        $data['department']=Department::get();
        $data['industry']=Industry::get();
        $data['location']=Location::get();
        $data['stores'] =  store::select('stores.*')->leftJoin('media', function($join) {
        $join->on('stores.id', '=', 'media.reference_id');
    })
        ->where('status',1)
        ->where('reference_type','=','store')
            ->select('stores.id','stores.title','stores.slug','media.image')
            ->limit(30)->get();
        return view('frontend.home.index',$data);
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



        $coupons =array();
        $coupon =array();
        if($request->category != null && $request->coupon != null) {
            $coupons = coupon::where('status',1)->where('category_id', base64_decode($request->category))
                ->where('title', 'like', "%$request->coupon%")
                ->get();
        }elseif($request->category  != null && $request->coupon == null){
            $coupons = coupon::where('status',1)->where('category_id', base64_decode($request->category))

                ->get();
        }elseif($request->category  == null && $request->coupon != null){
            $coupons = coupon::where('status',1)->where('title', 'like', "%$request->coupon%")
                ->get();
        }

        foreach ($coupons as $row) {
            $seo = seo::where(['reference_type' => 'coupon', 'reference_id' => $row->id])->get()->first();
            $reaction = Reaction::where(['type' => 'comment', 'reference_type' => 'coupon', 'reference_id' => $row->id])->get();
            $media = media::where(['reference_type' => 'coupon', 'reference_id' => $row->id])->get();
            $country = country::where(['id' => $row->country_id])->get()->first();
            $category = categories::where('id',$row->category_id)->first();

            $coupon[] = [
                'basic' => $row,
                'media' => $media,
                'seo' => $seo,
                 'country' => $country,
                        'comment' => count($reaction),
                        'category' => $category,
            ];
        }
        $column = '6';
        return   view('frontend/search/index',compact('coupon','column'));

    }


    public function ContactPost(Request $request)
    {
        Contact::create($request->all());
        return redirect()->back()->with('success','Your Query Has been submitted');
    }
    public function newsletter(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);
       $check =  Newsletter::where('email',$request->email)->get();
       if(count($check) == 0 ) {
           if ($validator->fails())   //check all validations are fine, if not then redirect and show error messages
           {

               return 'false';
           } else {
               Newsletter::create($request->all());
//            return redirect()->back()->with('success','Your Query Has been submitted');
               return true;
           }
       }else{
           return 2;
       }




//        Contact::create($request->all());
//        return redirect()->back()->with('success','Your Query Has been submitted');
    }


    public function PageShow($slug)
    {
        $data['blog'] = Pages::where('slug',$slug)->get()->first();
        $data['media'] =media::where('reference_id', $data['blog']->id)->where('reference_type','page')->get()->first();
        return view('frontend/pages/show',$data);


    }

    public function SearchKeyword(Request $request)
    {

        if ($request->keyword != null) {
            $coupons = Keyword::where('title', 'like', "%$request->keyword%")
                ->get();
//            dd($coupons);
            return response($coupons);

        }
    }


    public function all_store()

    {

        $data['stores'] =  store::select('stores.*')->leftJoin('media', function($join) {
            $join->on('stores.id', '=', 'media.reference_id');
        })
            ->where('status',1)
            ->where('reference_type','=','store')
            ->select('stores.id','stores.title','stores.slug','media.image')
            ->get();
        return view ('frontend/allstore',$data);
    }

}
