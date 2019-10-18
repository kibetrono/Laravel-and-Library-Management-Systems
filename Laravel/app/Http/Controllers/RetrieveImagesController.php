<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Science;


class RetrieveImagesController extends Controller
{
    //


    public function index(){

            $sciences = Science::all();
       /* $sciences = DB::table('sciences')
        ->select('sciences.*')
        ->first();*/
        
        return view('project.booksimages',compact('sciences'));

    }
}
