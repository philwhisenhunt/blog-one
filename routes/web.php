<?php

// /*
// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider within a group which
// | contains the "web" middleware group. Now create something great!
// |
// */

//         // Route::get('/', function () {
//         //     return view('welcome');
//         // });


//         // Route::get('/about', function () {
//         //     return view('about');
//         // });



// Route::get('/blogger', function () {
//     return view('blogger', [
       
//         'name' => 'laracasts'
//     ]);

// Route::get('/', function () {

//     $posts = DB::table('posts')->get();
    
//     // var_dump($posts);

//     return view('welcome', compact('posts'));

//     // return view('blogger', [
       
//     //     'name' => 'laracasts'
//     // ]);
// });


// // Route::get('/blogger', function () {

// //     $posts = DB::table('posts')->get();
    
// //     var_dump($posts);

// //     return view('blogger', compact('posts'));

// //     // return view('blogger', [
       
// //     //     'name' => 'laracasts'
// //     // ]);
// // });

// // // Route::get('/posts/{title}', function ($title) {

// // //     dd($post);

// // //     $post = DB::table('posts')->find($title);
    
// // //     var_dump($post);

// // //     return view('/posts/show', compact('post'));

// // //     // return view('blogger', [
       
// // //     //     'name' => 'laracasts'
// // //     // ]);
// // // });

// // Route::get('/posts/{post}', function ($id) {

  

// //     $post = DB::table('posts')->find($id);

// //     dd($posts);
    
// //     var_dump($posts);

// //     return view('posts/show', compact('posts'));

// //     // return view('blogger', [
       
// //     //     'name' => 'laracasts'
// //     // ]);
// // });

// Route::get('/posts', function () {

//     // $posts = DB::table('posts')->get();
    
//     // var_dump($posts);
//     $posts = App\Post::all(); 
//     return view('posts.index', compact('posts'));

//     // return view('blogger', [
       
//     //     'name' => 'laracasts'
//     // ]);
// });


// Route::get('/posts/{post}', function ($id) {

//   die ('stop');

//     // $post = DB::table('posts')->find($id);

//     $post = App\Post::find($id);

//     // dd($posts);
    
//     // var_dump($posts);

//     return view('posts.show', compact('post'));

//     // return view('blogger', [
       
//     //     'name' => 'laracasts'
//     // ]);
// });

//Is this right?

// use App\Post;

// Route::get('/posts', 'PostsController@index');
Route::get('/', 'PostsController@index');

Route::get('/posts/{post}', 'PostsController@show');

//How do I get them all here?? -----

Route::get('/posts', 'PostsController@index');

//controller => PostsController

//Eloquent model =>post

//migration => create_posts_table

//should be able to make all three of these at once in one line of the command

