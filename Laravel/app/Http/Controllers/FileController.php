<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
//use App\User;
use Illuminate\Support\Facades\Validator;
use App\Traits\UploadTrait;

class FileController extends Controller
{
    use UploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // fetch all the images
        $files  =   File::all();
        return view('index', compact('files'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
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
            'name'         =>  'required',
            'title'         =>  'required',
            'filename'     =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Get current user
        //$user = User::findOrFail(auth()->user()->id);
        // Set user name
        $user =new File;
       
        $user->name = $request->input('name');

        $user->title = $request->input('title');

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
            // Upload image
            $this->uploadOne($image, $folder, 'public', $name);
            // Set user profile image path in database to filePath
            $user->filename = $filePath;
        }
        // Persist user record to database
        $user->save();

        // Return user back and show a flash message
        return back()->with("success", "File uploaded successfully");

    }


   /* public function store(Request $request)
    {
        // file validation
        $validator      =   Validator::make($request->all(),
            [
                'title'=>'required',
                'filename'      =>   'required|mimes:jpeg,png,jpg,bmp|max:2048',
            
            ]);

        // if validation fails
        if($validator->fails()) {
            return back()->withErrors($validator->errors());
        }

        // if validation success
        if($file   =   $request->file('filename')) {

        $name      =   time().time().'.'.$file->getClientOriginalExtension();
        
        $target_path    =   public_path('/uploads/');
        
            if($file->move($target_path, $name)) {
                echo "success";
                // save file name in the database
                $file   =   File::create(['filename' => $name]);
            
                return back()->with("success", "File uploaded successfully");
            }
        }
    }*/

    /**
     * 
     * 
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
