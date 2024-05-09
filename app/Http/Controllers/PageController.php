<?php

namespace App\Http\Controllers;
use App\Models\Pages;
use App\Models\seo;
use App\Models\media;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!auth()->user()->hasPermissionTo('page-list')){
            return abort(401);
        }

        $pages = Pages::leftJoin('media', function($join) {
            $join->on('pages.id', '=', 'media.reference_id');
        })
            ->where('reference_type','=','page')
            ->select('pages.id','pages.title','pages.status','media.image')
            ->get();
        return  view('management.pages.index',compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!auth()->user()->hasPermissionTo('page-create')){
            return abort(401);
        }
        return view('management.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!auth()->user()->hasPermissionTo('page-create')){
            return abort(401);
        }
        $request->validate(
            [
                'title' => 'required',
            ]);
        if ($request->file('image')) {
            $mainext = $request->file('image')->getClientOriginalExtension();
            $main_file = 'page'.time() . rand(1000, 14000000000) . '.' . $mainext;
            $request->image->move(public_path('images/media'), $main_file);
        } else {
            $main_file = null;
        }
        $data = [
            'user_id' => $request->user_id,
            'title' => $request->title,
            'category_id' => $request->category_id,
            'description'=> $request->description,
            'status' => $request->status,
        ];
        $pages = Pages::create($data);
        $multi_image=
            [
                'reference_id' => $pages->id,
                'reference_type'=>'page',
                'image' => $main_file,
            ];
        $multi = media::create($multi_image);

        $seo = [
            'reference_id' => $pages->id,
            'meta_title' => $request->meta_title,
            'reference_type' => 'page',
            'meta_description'=> $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
        ];
        $search = seo::create($seo);
        return redirect()->route('pages.show',$pages->id)->with('success','Pages Created successfully');;

    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!auth()->user()->hasPermissionTo('page-edit')){
            return abort(401);
        }


        $category = Pages::where('id',$id)->get()->first();
        $seo = seo::where('reference_id',$id)->where('reference_type','page')->get()->first();
        $media = media::where('reference_id', $id)->where('reference_type','page')->get()->first();

        return view('management/pages/edit',compact('category','seo','media'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        if(!auth()->user()->hasPermissionTo('page-edit')){
            return abort(401);
        }
        $pages = Pages::where('id',$id)->get()->first();
        $multi = media::where('reference_id', $id)->where('reference_type','page')->get()->first();
        if($request->file('image')){

            $ext = $request->file('image')->getClientOriginalExtension();
            $main_file = 'page'.time() . rand(1000, 14000000000) . '.' . $ext;
            $request->image->move(public_path('images/media'), $main_file);
        }
        else
        {
            $main_file = $multi->image;
        }

        $pages->update([
            'user_id' => $request->user_id,
            'title' => $request->title,
            'description' =>$request->description,
            'status' => $request->status,
        ]);


        if($multi != null ){
            $multi->update([
                'image' => $main_file,
            ]);
        }else {
            $multi_image =
                [
                    'reference_id' => $id,
                    'reference_type' => 'page',
                    'image' => $main_file,
                ];

            media::create($multi_image);
        }



        $seo = seo::where('reference_id',$id)->where('reference_type','page')->get()->first();
        $seo->update([
//            'reference_id' => $pages->id,
            'meta_title' => $request->meta_title,
//            'reference_type' => 'page',
            'meta_description'=> $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
        ]);


        return redirect()->back()->with('success','Pages Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!auth()->user()->hasPermissionTo('page-delete')){
            return abort(401);
        }
        $pages = Pages::where('id',$id)->delete();
        $seos = seo::where(['reference_id' => $id,'reference_type' => 'page'])->delete();

        return  redirect()->back()->with('success', 'Pages Deleted Succesfully');
    }
}
