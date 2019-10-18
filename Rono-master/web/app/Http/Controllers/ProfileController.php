<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use App\Profile;
use Auth; //To get the details of the user inorder to fill in the user_id found uin the databse
class ProfileController extends Controller
{
    //
    public function profile(){
        return view('Profiles.profile');
    }
    public function addprofile(Request $request){

        //return $request->input('name');
        $this->validate($request, [

            'name'=>'required',
            'designation'=>'required',
            'profile_pic'=>'required',
        ]);
        //return 'Validation done successfully';
        $profiles=new Profile ;     //Profile is the created model and should be imported by use App\Profile
        $profiles->name=$request->input('name');
        $profiles->user_id=Auth::user()->id;
        $profiles->designation=$request->input('designation');
        if(Input::hasFile('profile_pic')){
$file=Input::file('profile_pic');
            $file->move(public_path().'/uploads/',$file->getClientOriginalName());
$url = URL::to("/"). '/uploads/'.$file->getClientOriginalName();
            //return $url;
           // exit();
        }
        $profiles->profile_pic=$url;
        $profiles->save();
        return redirect('/home')->with('response','Profile picture added successfully ');
        //return Auth::user()->;
        //exit();
    }
}
