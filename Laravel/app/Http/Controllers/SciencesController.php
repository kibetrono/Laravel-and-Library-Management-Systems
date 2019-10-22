<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use Illuminate\Support\Facades\Input;
//use Illuminate\Support\Facades\File;
//use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
//use Validator,Redirect,Response,File;
//use Input;
//use Request;
use Illuminate\Support\Facades\Validator;
use App\Science;
use App\Traits\UploadTrait;
class SciencesController extends Controller
{
   use UploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // return 'Insert all information about the sciences book';

        $sciences = Science::all();
 
        //
      //  return 'Insert all information about the sciences book';
      
     /* $science =DB::table('sciences')
        ->select('sciences.*');
        
        
        return view('project.fetchSciences',['science'=>$science]);*/
        $sciences = Science::paginate(5);
 
       return view('project.fetchSciences',compact('sciences'));
        
        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('inserting.insertSciences');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        // Form validation
        $request->validate([
           
            'site_title'         =>  'required',
            'site_link'         =>  'required',
            'site_keywords'         =>  'required',
            'site_description'         =>  'required',
            'filename'     =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Get current user
        //$user = User::findOrFail(auth()->user()->id);
        // Set user name
        $sciences =new Science;
       
        $sciences->site_title = $request->input('site_title');
        $sciences->site_link = $request->input('site_link');
        $sciences->site_keywords = $request->input('site_keywords');
        $sciences->site_description = $request->input('site_description');
       

        // Check if a profile image has been uploaded
        if ($request->has('filename')) {
            // Get image file
            $image = $request->file('filename');
            // Make a image name based on user name and current timestamp
            $name = str_slug($request->input('title')).'_'.time();
            // Define folder path
            $folder = '/uploads/images/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
           // $filePath2 =  $name. '.' . $image->getClientOriginalExtension();

            // Upload image
            $this->uploadOne($image, $folder, 'public', $name);
            // Set user profile image path in database to filePath
            $sciences->filename = $filePath;
        }
        // Persist user record to database
        $sciences->save();

        // Return user back and show a flash message
       // return back()->with("success", "File uploaded successfully");
        return back()->with("success","Book successfully added!!");
       // return redirect('/photos')->with("success","Book successfully added!!");

    }
     
    /*public function store(Request $request)
    {
        //return $request->input('site_name');
        //
       $this->validate($request,[
            'site_title' => 'required',
            'site_link' => 'required',
            'site_keywords' => 'required',
            'site_description' => 'required',
            'fileUpload' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            //'site_image' => 'required'
             ]);

             $sciences = new Science([
                'site_title' => $request->get('site_title'),
                'site_link' => $request->get('site_link'),
                'site_keywords' => $request->get('site_keywords'),
                'site_description' => $request->get('site_description'),
               'site_image' => $request->file('site_image')
             ]);
         /* $sciences =new Science;
           $sciences->site_title = $request->input('site_title');
           $sciences->site_link = $request->input('site_link');
           $sciences->site_keywords = $request->input('site_keywords');
           $sciences->site_description = $request->input('site_description');
           if ($files = $request->file('fileUpload')) {
            $destinationPath = 'public/image/'; // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $insert['image'] = "$profileImage";
         }
         $check = Science::insertGetId($insert);
            $sciences->save();
             //return redirect()->route('inserting.insertSciences')->with('success','Books information successfully added');
            return redirect('sciences/create')->with('success','Books information successfully added');

            }*/

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $sciences = Science::all();

	return view("project.users")->with("allUsers", $sciences);
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
    }
}
