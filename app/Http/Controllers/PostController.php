<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    // public function index()
    // {
    //     $posts = DB::select('select * from posts');

    //     return view('blog-post', ['posts' => $posts]);
    // }

    public function show($id)
    {
        // dd($id);
        $post = Post::findOrFail($id);

        return view('blog-post', ['post' => $post]);
    }
}
