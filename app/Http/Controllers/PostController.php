<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Post; 

class PostController extends Controller
{
    public function index(Request $request){
        
        
        $posts = Post::latest('date')->paginate(3); 
        // return  Post::latest('date')->toSql();
       
        return view('pages.posts', compact('posts'));
    } 
/*
    public function show($id){
       $post = Post::where('Id_posts', $id)->first(); // firest zwraca model - jeden element  
       $post = Post::where('Id_posts', $id)->firstOrFail();  // !!!! firstOrFail()
       if(is_null($post)) return abort(404); 
      //   return  $post; 
       return view('pages.post', compact('post')); 
       //  $post = Post::where('id_posts', $id)->get(); //  zwraca kolekcje 

// return $de; 
    //   return Post::find($id)->toSql();
    //     $post = Post::find($id); 
    //    return view('pages.post', compact('post')); 
       
    }
*/ 

    public function show(Post $post){
      //  $post = Post::where(['slug' => $slug])->firstOrFail(); 
       // $post = Post::whereSlug($slug);
        return view('pages.post', compact('post')); 
     }

     public function memory(){
         return 'w memory';
     }

}
