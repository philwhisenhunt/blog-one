<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    public function isComplete()
    {
        return static::where('completed', 0)->get();
    }
}
