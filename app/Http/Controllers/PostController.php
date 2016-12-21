<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

use App\Http\Requests\CUPostRequest;

use App\Post;

class PostController extends Controller
{
    
    /**
     * Instantiate a new PostController instance.
     */
    public function __construct()
    {
        $this->middleware('auth', [
            "except" => ['showByTitle']
          ]);

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Take all the posts without content
        $posts = Post::select('id', 'title', 'created_at', 'updated_at')->orderBy('updated_at', 'desc')->get();
        
        //Return with a view
        return view('post.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CUPostRequest $request)
    {
        //once Request is validated go further
        $post = Post::create([
            "title" => $request->title,
            "body" => $request->body
        ]);

        Session::flash('flashSuccess', 'Post created Succesfully...<a href="' . route('post.show', $post->id) . '" class="alert-link">View Post</a>');

        //after storing post in database give response to user
        return redirect()->route('post.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $title
     * @return \Illuminate\Http\Response
     */
    public function showByTitle($title)
    {
        $post = Post::where('title', $title)->firstOrFail();
        return view('post.show')->with('post', $post);
    }

    /**
     * Display the specified resource.
     *
     * @param  Post $post -> int  $id 
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //$post = Post::findOrFail($id);
        return view('post.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Post $post -> int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('post.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Post $post -> int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CUPostRequest $request, Post $post)
    {
        //once Request is validated go further
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        Session::flash('flashInfo', 'Post has been updated...<a href="' . route('post.show', $post->id) . '" class="alert-link">View Post</a>');

        //after storing post in database give response to user
        return redirect()->route('post.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Post $post -> int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $title = $post->title;
        $post->delete();

        $msg = 'Post deleted recently with title : '. substr($title, 0, 35);
        if(strlen($title) > 35) $msg = $msg . "...";
        Session::flash('flashDanger', $msg );

        return redirect()->route('post.index');
    }
}
