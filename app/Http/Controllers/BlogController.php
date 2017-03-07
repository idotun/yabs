<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use GrahamCampbell\Markdown\Facades\Markdown;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(20);
        return view("blog.index", compact('posts'));
    }
    
    public function post($id){
        $popularPosts = Post::orderBy('view_count', 'desc')->take(10)->get();
        
        $post = Post::findorfail($id);
        
        //update posts set view_count = view_count + 1 where id = 
        
        $post->increment('view_count');
        
        return view("blog.post", compact('post', 'popularPosts'));
        
        
       
    }
    
   
}
