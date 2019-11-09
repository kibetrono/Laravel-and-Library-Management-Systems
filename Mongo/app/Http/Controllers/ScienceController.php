<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Science;
use Illuminate\Support\Facades\Validator;
use App\Traits\UploadTrait;
use Illuminate\Support\Facades\DB;


class ScienceController extends Controller
{

    use UploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cars=Science::paginate(5);
        return view('Sciences.scienceindex',compact('cars'));
    }

    public function display()
    {
        //
        $sciences = Science::all();

	return view("Sciences.sciencedisplay")->with("allUsers", $sciences);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Sciences.sciencecreate');

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
        $request->validate([
           
            'site_title'         =>  'required',
            'site_link'         =>  'required',
            'site_keywords'         =>  'required',
            'site_description'         =>  'required',
            'filename' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            
        ]);

        $science = new Science();
        $science->site_title = $request->get('site_title');
        $science->site_link = $request->get('site_link');
        $science->site_keywords = $request->get('site_keywords');
        $science->site_description = $request->get('site_description');    
        
        if ($request->has('filename')) {
            
            $image = $request->file('filename');
            $name = str_slug($request->input('title')).'_'.time();
            $folder = '/uploads/images/';
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();

            $this->uploadOne($image, $folder, 'public', $name);
            $science->filename = $filePath;
        }
        $science->save();
        return back()->with("success","Book successfully added!!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $car = Science::find($id);
        return view('Sciences.scienceedit',compact('car','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $car= Science::find($id);
        $car->site_title = $request->get('site_title');
        $car->site_link = $request->get('site_link');
        $car->site_keywords = $request->get('site_keywords');
        $car->site_description = $request->get('site_description');    
        
        if ($request->has('filename')) {
            
            $image = $request->file('filename');
            $name = str_slug($request->input('title')).'_'.time();
            $folder = '/uploads/images/';
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();

            $this->uploadOne($image, $folder, 'public', $name);
            $car->filename = $filePath;
        }
        $car->save();
        return back()->with("success","Book successfully updated!!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $car = Science::find($id);
        $car->delete();
        return back()->with('success','Book has been  deleted');
    }
}
