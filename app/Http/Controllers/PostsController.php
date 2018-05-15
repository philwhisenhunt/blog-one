<?php

namespace App\Http\Controllers;

use App\Post;

class PostsController extends Controller
{
    //
    
public function index()

    {
        //
        $posts = Post::all(); 


        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    
    {
            // return $post;
            //var_dump($post);
        //die ('hi');
        
        return view('posts.show', compact('post'));

    }

    public function list(Post $post)
    
    {
        //Show all of the posts here. 
         $posts = Post::all();

        

        return view('posts.list', compact('post'));

    }
}

// public function index()

//     {
    
//          return view('posts.index');
//     }

//     public function show()
    
//     {
//             // return $post;

//         return view('posts.show');

//     }
// }
