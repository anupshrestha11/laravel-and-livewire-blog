<?php

namespace App\Http\Controllers;

use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $postsPopular = Post::where('status', '1')->orderBy('views', 'desc')->take(10)->get();
        $postsRecent  = Post::where('status', '1')->orderBy('id', 'desc')->take(5)->get();

        return view('main.pages.index', ['recent' => $postsRecent, 'popular' => $postsPopular]);
    }
    public function blogs()
    {
        $posts     = Post::where('status', '1')->get();
        $postsShow = Post::where('status', '1')->orderBy('id', 'desc')->paginate(4);

        return view('main.pages.blogs', ['posts' => $posts, 'postsShow' => $postsShow]);
    }
    public function slug($slug)
    {
        $post = Post::where('slug', $slug)->first();
        $post->views++;
        $post->save();

        $posts = Post::where('status', '1')->get();

        return view('main.pages.blog', ['post' => $post, 'posts' => $posts]);

    }
}
