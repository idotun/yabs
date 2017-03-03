<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(20);
        return view("blog.index", compact('posts'));
    }
    
    public function post($id){
        $post = Post::findorfail($id);
        return view("blog.post", compact('post'));
    }
}
