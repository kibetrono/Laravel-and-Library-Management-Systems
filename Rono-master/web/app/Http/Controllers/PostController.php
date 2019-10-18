<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use App\Category;
use App\Post;
use Auth;
use App\Like;
use App\Dislike;
use App\Comment;
use DB;
use App\Profile;
class PostController extends Controller
{
    //
    public function post(){
        $categories= Category::all();
        
        return view('Posts.post',['categories'=>$categories]);
    }
    public function addpost(Request $request){
        //return 'This is the newest post';
        //return $request->input('post_title');
        $this->validate($request, [

            'post_title'=>'required',
            'post_body'=>'required',
            'category_id'=>'required',
            'post_image'=>'required',
        ]);
      //return 'Successful validation';
      $posts=new Post ;     //Post is the created model and should be imported by use App\Post
      $posts->post_title=$request->input('post_title');
      $posts->user_id=Auth::user()->id;
      $posts->post_body=$request->input('post_body');
      $posts->category_id=$request->input('category_id');
     
      if(Input::hasFile('post_image')){
$file=Input::file('post_image');
          $file->move(public_path().'/uploadimage/',$file->getClientOriginalName());
$url = URL::to("/"). '/uploadimage/'.$file->getClientOriginalName();
          //return $url;
         // exit();
      }
      $posts->post_image=$url;
      $posts->save();
      return redirect('/home')->with('response','Post successfully added');
      //return Auth::user()->;
      //exit();
    }
    //public function view(){
       // return view('Posts.view');
    //}
    
    public function view($post_id){
        $posts=Post::where('id','=',$post_id)->get();
        //return $post;
        //exit();
        $likePost=Post::find($post_id);
        $likeCtr= Like::where(['post_id'=> $likePost->id])->count();
        $dislikeCtr= Dislike::where(['post_id'=> $likePost->id])->count();
        //return $likeCtr;
       // exit();
        $categories= Category::all();
        $comments=DB::table('users')
        ->join('comments','users.id','=','comments.user_id')
        ->join('posts','comments.post_id','=','posts.id')
        ->select('users.name','comments.*')
        ->where(['posts.id'=>$post_id])
        ->get();
        //return $comments;
        //exit();
        return view('Posts.view',['posts'=>$posts,'categories'=> $categories,'likeCtr'=>$likeCtr,'dislikeCtr'=>$dislikeCtr,'comments'=>$comments]);
    }
    public function edit($post_id){
        $categories= Category::all();
        $posts= Post::find($post_id);
        //return $posts;
       // exit();
       $category= Category::find($posts->category_id);
        return view('Posts.edit',['categories'=> $categories,'posts'=>$posts,'category'=>$category]);
    }
    public function editPost( Request $request,$post_id){
        $this->validate($request, [

            'post_title'=>'required',
            'post_body'=>'required',
            'category_id'=>'required',
            'post_image'=>'required',  
        ]);
      //return 'Successful validation';
      $posts=new Post ;     //Post is the created model and should be imported by use App\Post
      $posts->post_title=$request->input('post_title');
      $posts->user_id=Auth::user()->id;
      $posts->post_body=$request->input('post_body');
      $posts->category_id=$request->input('category_id');
     
      if(Input::hasFile('post_image')){
$file=Input::file('post_image');
          $file->move(public_path().'/uploadimage/',$file->getClientOriginalName());
$url = URL::to("/"). '/uploadimage/'.$file->getClientOriginalName();
          //return $url;
         // exit();
      }
      $posts->post_image=$url;
      $data=array(
          'post_title'=>$posts->post_title,
          'user_id'=>$posts->user_id,
          'post_body'=>$posts->post_body,
          'category_id'=>$posts->category_id,
          'post_image'=>$posts->post_image
      );
      Post::where('id',$post_id)
      ->update($data);
      $posts->update();
      return redirect('/home')->with('response','Post successfully updated');
      //return Auth::user()->;
      //exit();
    }
    //public function view(){
       // return view('Posts.view');
    //}
    public function deletePost($post_id){
     //return $post_id;
     Post::where('id',$post_id)
     ->delete();
     return redirect('/home')->with('response','Post successfully deleted');
    }
    public function category($catee_id){
        $categories = Category::all();
        $posts=DB::table('posts')
        ->join('categories','posts.category_id','=','categories.id')
        ->select('posts.*','categories.*')
        ->where(['categories.id'=>$catee_id])
        ->get();
       // return $posts;
       // exit();
        return view('/Categories.categoryview',['categories'=>$categories,'posts'=>$posts]);
    }
    public function like($id){
    
        $loggedin_user=Auth::user()->id;
        $like_user=Like::where(['user_id'=>$loggedin_user,'post_id'=>$id])->first();
        if(empty($like_user->user_id)){
            $user_id=Auth::user()->id;
            $email=Auth::user()->email;
            $post_id=$id;
            $like= new Like;
            $like->user_id=$user_id;
            $like->email=$email;
            $like->post_id=$post_id;
            $like->save();
            return redirect("/view/{$id}");

        }
        else{
            return redirect("/view/{$id}");
        }
    }
    public function dislike($id){
    
        $loggedin_user=Auth::user()->id;
        $like_user=Dislike::where(['user_id'=>$loggedin_user,'post_id'=>$id])->first();
        if(empty($like_user->user_id)){
            $user_id=Auth::user()->id;
            $email=Auth::user()->email;
            $post_id=$id;
            $like= new Dislike;
            $like->user_id=$user_id;
            $like->email=$email;
            $like->post_id=$post_id;
            $like->save();
            return redirect("/view/{$id}");

        }
        else{
            return redirect("/view/{$id}");
        }
    }
    public function comment(Request $request,$post_id){
        $this->validate($request, [

            'comment'=>'required',
              
        ]);
        $comment = new Comment;
        $comment->user_id=Auth::user()->id;
        $comment->post_id=$post_id;
        $comment->comment=$request->input('comment');
        $comment->save();
        return redirect("/view/{$post_id}")->with('response','Successfully commented ');

    }
    public function search(Request $request){
       //return $request->input('search');
       $user_id=Auth::user()->id;
       $profile= Profile::find($user_id);
       $keyword= $request->input('search');
       $posts=Post::where('post_title','LIKE','%'.$keyword.'%')->get();
      // return $post;
       //exit();
       return view('Posts.search',['profile'=>$profile,'posts'=>$posts]);

    }
    }

