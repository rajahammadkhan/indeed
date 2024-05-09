<?php

namespace App\Http\Controllers;
use App\Models\categories;
use App\Models\media;
use App\Models\seo;
use Illuminate\Http\Request;
use Route;


class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(isset($_GET['type']))
        {

            $category = categories::where('reference_type',base64_decode($_GET['type']))->get();
            return view('management/categories/index',compact('category'));
        }
        else
        {
            return  abort('404');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        if(isset($_GET['type']))
        {
            $cate = categories::get();

            return view('management/categories/create',compact('cate'));
        }
        else
        {
            return  abort('404');
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $img =  $request->image;
        $category_type = base64_decode($_GET['type']);

           if(isset($_GET['type']))
           {
               if ($request->file('image')) {
                   $mainext = $request->file('image')->getClientOriginalExtension();
                   $main_file = 'categories'.time() . rand(1000, 14000000000) . '.' . $mainext;
                   $request->image->move(public_path('images/media'), $main_file);
               } else {
                   $main_file = null;
               }
               $category_type = base64_decode($_GET['type']);


         $data = [
             'title' => $request->title,
             'long_description' => $request->description,
             'status' => $request->status,
             'reference_type' => $category_type,
             'image'=> $main_file,
             'parent_category' => $request->parent_category,
         ];
         $categories = categories::create($data);

               $seo = [
                   'reference_id' => $categories->id,
                   'meta_title' => $request->meta_title,
                   'reference_type' => 'category',
                   'meta_description'=> $request->meta_description,
                   'meta_keywords' => $request->meta_keywords,
               ];

               $search = seo::create($seo);
               return redirect()->back()->with('success','Category Created successfully');

           }
         else
        {
            return  abort('404');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function show(categories $categories,$id)
    {

        $media = media::where('reference_id',$id)->where('reference_type','category')->get()->first();
        $category = categories::where('id',$id)->get()->first();
        $all_category = categories::get();
        $seo = seo::where('reference_id',$category->id)->where('reference_type','category')->get()->first();
        return view('management/categories/edit',compact('category','category','seo','all_category'));



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function edit(categories $categories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $categories = categories::where('id',$id)->get()->first();
        $category_type = base64_decode($_GET['type']);
        $media = media::where('reference_id',$id)->where('reference_type','category')->get()->first();


//
        if($request->file('image')){

            $ext = $request->file('image')->getClientOriginalExtension();
            $main_file = 'categories'.time() . rand(1000, 14000000000) . '.' . $ext;
            $request->image->move(public_path('images/media'), $main_file);
        }
        else
        {
            $main_file = $media->image;
        }

        $categories->update([
            'title' => $request->title,
            'long_description' => $request->description,
            'status' => $request->status,
            'reference_type' => $category_type,
            'image'=> $main_file,
            'parent_category' => $request->parent_category,
        ]);

        $seo = seo::where('reference_id',$categories->id)->where('reference_type','category')->get()->first();
if($seo != null ){
    $seo->update([
//        'reference_id' => $categories->id,
        'meta_title' => $request->meta_title,
//        'reference_type' => 'category',
        'meta_description'=> $request->meta_description,
        'meta_keywords' => $request->meta_keywords,
    ]);
}else{
    seo::create([
        'reference_id' => $categories->id,
        'meta_title' => $request->meta_title,
        'reference_type' => 'category',
        'meta_description'=> $request->meta_description,
        'meta_keywords' => $request->meta_keywords,
    ]);
}




        return redirect()->back()->with('success','Category Updated successfully');






    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(categories $categories,$id)
    {

        $categories = categories::where('id',$id)->delete();

        return  redirect()->back()->with('success', 'Category Deleted Succesfully');

    }
}
