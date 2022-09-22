<?php

namespace App\Http\Controllers;
use App\Models\Post ; 
use Illuminate\Support\Facades\DB ;

use Illuminate\Http\Request;

class PostController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
    }


    public function index()
    {
        //$posts = Post::all();
        $posts = DB::select('SELECT * FROM posts') ; 
        return view('posts.index')->with('posts',$posts)  ;
    }

    
    public function create()
    {
        return view('posts.create') ;
        
    }

    
    public function store(Request $request)
    {
        $Post = new Post;
        $Post->title=$request->Title;
        $Post->body=$request->Body;
        $Post->user_id=auth()->user()->id;
    

        if ($Post->title==null ||$Post->body==null ) 
        {

           // return view("inc.message") ;
            return redirect("/posts/create") ; 

        }

        else 
        { 
            $Post->save();
            return redirect("/posts")->with("success","Post Created");  

        }


    }

    
    public function show($id)
    {
        $post =  Post::find($id);
        return view('posts.show')->with('post',$post) ;
        
    }

    
    public function edit($id)
    {
        $Post =  Post::find($id);
        return view('posts.edit')->with('post',$Post) ;
        
    }

    public function update(Request $request, $id)
    {
        $Post = Post::find($id) ; 
        $Post->title =Strip_tags($request->input("Title")) ;
        $Post->body = Strip_tags($request->input("Body")) ;
        $Post->save();
        return redirect("/posts")->with("success","Post Updated") ;
        
    }



    public function destroy($id)
    {
        $to_delete = Post::find($id) ;  ;
        $to_delete->delete();
        return redirect("/posts") ;

        
    }






}
