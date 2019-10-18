<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
    //
    public function category(){
        return view('Categories.category');
    }

    public function addcategory(Request $request){
        //return $request->input('category');
        // To validate 
        $this->validate($request, [

            'category'=>'required',

        ]);
       // return 'Successful validation';
       $category = new Category;
       $category->category=$request->input('category');
       $category->save();
       return redirect('/category')->with('response','Category successfully added');
    }
}
