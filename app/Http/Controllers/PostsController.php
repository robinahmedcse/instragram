<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{
    
    
    public function __construct() {
        $this->middleware('auth');       
    }
    
    
    public function create() {
        return view('posts.create');
    }
    
    
    public function store() {
        
     //   $data= request()->validate();
         $data= request()->validate([
             'caption'=> 'required',
              'image'=> 'required|image',
         ]);
         
         
         
    // dd(request('image')->store('uploads','public'));
         
         $imagePath=request('image')->store('uploads','public');
         
         $image=Image::make(public_path("storage/{$imagePath}"))->fit(1200,1200);
         $image->save();
      
         
         auth()->user()->posts()->create([
             'caption'=> $data['caption'],
              'image'=> $imagePath,
         ]);
        
    // dd(request()->all());
         
    return redirect('/profile/'.auth()->user()->id);
       
    }
    
    public function Show(\App\Post $post) {
        //dd($post);
         return view('posts.show', [
             'posts' =>$post,
         ]);
        
        //return view('posts.show',  compact(posts));
        
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}
