<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect,Response,DB,Config;
use Datatables;

class CustomSearchController extends Controller
{
    //
    
    public function index()
    {
        return view('tafuta');
    }
    public function usersList()
    {
        $users = DB::table('sciences')->select('*');
        return datatables()->of($users)
            ->make(true);
    }
}
