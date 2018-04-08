<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

/*       for ($i = 0; $i < 1000; $i++) {
            $post = new Post;
            $post->title = 'Post title ' . $i;
            $post->body  = $i . ' If your controller method is also expecting input from a route parameter you should list your route parameters after your other dependencies. For example, if your route is defined like so:';
            $post->save();
        }*/


        $posts = Post::orderBy('id', 'dec')->paginate(5);

        return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //1- Validate the data and if it not correct automaticly will redirect to the create method

        $this->validate(request(), [
                'title' => 'required|max:255',
                'body'  =>  'required'
            ]);

        //2- Insert the data to database

        $post = new Post;
        $post->title = $request->title;
        $post->body  = $request->body;
        $post->save();

        //3-make session and redirect.

        Session::flash('success', 'The blog post was  successfuly save');

       return redirect()->route('posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->withPost($post); // Instead of with('post', $post)
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

        return view('posts.edit')->withPost($post);
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
        //1- Validate the data and if it not correct automaticly will redirect to the create method

        $this->validate(request(), [
            'title' => 'required|max:255',
            'body'  =>  'required'
        ]);

        //2- Insert the data to database

        $post = Post::find($id);
        $post->title = $request->title;
        $post->body  = $request->body;
        $post->save();

        //3-make session and redirect.

        Session::flash('success', 'The post updated successfuly');

        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        Session::flash('success', 'The post deleted successfuly');

        return redirect()->route('posts.index');
    }
}
