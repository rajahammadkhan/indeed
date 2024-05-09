<?php

namespace App\Http\Controllers\Management;
use App\Http\Controllers\Controller;
use App\Models\Industry;
use App\Models\media;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Reference;


class IndustryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $industry = Industry::leftJoin('media', function($join) {
            $join->on('industries.id', '=', 'media.reference_id');
        })
            ->where('reference_type','=','industry')
            ->select('industries.id','industries.industry_name','industries.status','media.image')
            ->get();
        return view('management/managejobs/Industry/index',compact('industry'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('management.managejobs.Industry.create');
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
        'industry_name' => 'required',
        ]);

        if ($request->file('image')) {
            $mainext = $request->file('image')->getClientOriginalExtension();
            $main_file = 'industry'.time() . rand(1000, 14000000000) . '.' . $mainext;
            $request->image->move(public_path('images/media'), $main_file);
        } else {
            $main_file = null;
        }

        $data = [
            'status' => $request->status,
            'industry_name' => $request->industry_name,
        ];
        $industry = Industry::create($data);
        $multi_image=
            [
                'reference_id' => $industry->id,
                'reference_type'=>'industry',
                'image' => $main_file,
            ];

        $multi = media::create($multi_image);

        return redirect()->back()->with('success','Industry Created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Industry  $industry
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['media'] = media::where('reference_id',$id)->where('reference_type','industry')->get()->first();
        $data['industry'] = Industry::where('id',$id)->get()->first();
        return view('management.managejobs.Industry.edit',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Industry  $industry
     * @return \Illuminate\Http\Response
     */
    public function edit(Industry $industry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Industry  $industry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $multi = media::where('reference_id',$id)->where('reference_type','industry')->get()->first();
        $industry = Industry::where('id',$id)->get()->first();

        if($request->file('image')){

            $ext = $request->file('image')->getClientOriginalExtension();
            $main_file = 'industry'.time() . rand(1000, 14000000000) . '.' . $ext;
            $request->image->move(public_path('images/media'), $main_file);
        }
        else
        {
            $main_file = $multi->image;
        }

        $industry->update([
            'status' => $request->status,
            'industry_name' => $request->industry_name,
        ]);

        if($multi != null ){
            $multi->update([
                'image' => $main_file,
            ]);
        }else {
            $multi_image =
                [
                    'reference_id' => $id,
                    'reference_type' => 'industry',
                    'image' => $main_file,
                ];

            media::create($multi_image);
        }


        return  redirect()->back()->with('success', 'Industry Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Industry  $industry
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $industry = Industry::where('id',$id)->delete();
        return  redirect()->back()->with('success', 'Industry Deleted Succesfully');
    }
}
