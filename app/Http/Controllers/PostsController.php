<?php

namespace App\Http\Controllers;

use App\Post;

class PostsController extends Controller
{
    //
    
    public function index()

    {
        //

        $posts = Post::latest()->get();

         

        

        return view('posts.index', compact('posts'));


        // return view('posts.index');//, compact('posts'));
    }

    public function show(Post $post)
    
    {
            // var_dump($post);
        // die ('hi');

        
        return view('posts.show', compact('post'));

    }

    public function list()
    
    {
        //Show all of the posts here. 
        $posts = Post::latest()->get();

         

        

        return view('posts.list', compact('posts'));

    }


    public function create()
    
    {


        return view('posts.create');

    }

    public function store()

    {
        // dd(request(['title','body']));

        // dd(request()->all);

        // Create a new post using the request data
        // $post = new Post;

        // $post->title = request('title'); 

        // $post->body = request('body');


        // // Save it to the database

        // $post->save();
        // And then redirect to the home page.  
        // $this->validate(request(), [
        //     'title'=> 'required',
        //     'body' => 'required'
        // ]);

        Post::create(request(['title', 'body']));

        return redirect('/');

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
