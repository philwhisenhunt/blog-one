<?php

namespace App;

class Post extends Model
{
    //

    // public function isComplete()
    // {
    //     return static::where('completed', 0)->get();
    // }

    // protected $fillable = ['title', 'body'];
    // protected $guarded = []

//This is an extenstion of Model.php

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function user() // $post->user
    {
        return $this->belongsTo(User::class);
    }

    public function addComment($body)
    {
    $this->comments()->create(compact('body'));

        // Comment::create([
        //     'body' => $body,
        //     'post_id' => $this->id
        // ]);
    }
}
 