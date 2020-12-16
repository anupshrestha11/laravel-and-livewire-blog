<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('dashboard.pages.posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.posts.create.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title'          => 'required|max:255',
            'slug'           => 'required|unique:posts|max:255',
            'excerpt'        => 'required',
            'featured_image' => 'required|image',
            'content'        => 'required',
        ]);

        if ($request->status == null) {
            $request['published_at'] = Carbon::now()->toDateTimeString();
        }

        $filename = $request->file('featured_image')->getClientOriginalName();

// $request->file('featured_image')->store('post', $filename, 'public');
        $path = $request->file('featured_image')->storeAs(
            'public/featured_image', $filename
        );

        $request['featured_image_path'] = "featured_image/" . $filename;

        $post = Post::create($request->all());

        session()->flash('msg', 'Post added successfully.');
        return redirect(route('dashboard.posts.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return "<img src='/storage/$post->featured_image_path' width='400px'/>";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
