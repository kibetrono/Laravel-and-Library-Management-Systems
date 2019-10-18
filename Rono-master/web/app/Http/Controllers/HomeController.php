<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Profile;
use App\user;
use App\Post;
use Auth;

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
        $user_id=Auth::user()->id;
        //matching user id from the users table and the user id from the profiles table
        $profile=DB::table('users')//join users table and 
                    ->join('profiles','users.id','=','profiles.user_id')//jion profiles table
                    ->select('users.*','profiles.*')
                    ->where(['profiles.user_id'=>$user_id])
                    ->first();
                   //->get();
    //return $profile;
   // exit();
   $posts= Post::paginate(2);
   //return $posts;
   //exit();
        return view('home',['profile'=> $profile,'posts'=>$posts]);
    }
}
