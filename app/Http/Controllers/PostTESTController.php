<?php

namespace App\Http\Controllers;

use App\Post;

class PostTESTController extends Controller
{

public function index()

    {
        //
        $posts = Post::all(); 


        return view('posts.index', compact('posts'));
    }

    public function show()
    {
        $post = Post::find($id);

        return view('posts.show', compact('post'));

    }
}
