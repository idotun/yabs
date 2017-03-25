<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

class BlogController extends BackendController
{
    protected $limit = 10;
    protected $uploadPath;
    
    public function __construct()
    {
        parent::__construct();
        $this->uploadPath = public_path('img');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate($this->limit);
        $postCount = Post::count();
        return view("backend.blog.index", compact('posts', 'postCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $post = new Post();
        return view("backend.blog.create", compact('post'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['body' => 'required',
                                   'image' => 'mimes:jpg,jpeg,bmp,png',
                                  ]);
        
        

        
        $data = $this->handleRequest($request);
        
        $post = new Post;
        $post->body = $data['body'];
        $post->image = $data['image'];
        $post->thumbnail = $data['thumbnail'];
        $post->save();
        


        return redirect('/backend/blog')->with('message', 'Your post was successfully created!');
    }
    
    private function handleRequest($request)
    {
        $data = $request->all();
        
        if ($request->hasFile('image'))
        {
            $image = $request->file('image');
            $fileName = $image->getClientOriginalName();
            $destination = $this->uploadPath;
            
            $successUploaded = $image->move($destination, $fileName);
            
        if($successUploaded)
        {
            $extension = $image->getClientOriginalExtension();
            $thumbnail = str_replace(".{$extension}", "_thumb.{$extension}", $fileName);
            
            Image::make($destination . '/' . $fileName)
                    ->resize(250, 250)
                    ->save($destination . '/' . $thumbnail);
        }
            
            $data['image'] = $fileName;
            $data['thumbnail'] = $thumbnail;
        }
        
        return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
