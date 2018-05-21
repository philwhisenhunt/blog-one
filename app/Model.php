<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
    //

    // public function isComplete()
    // {
    //     return static::where('completed', 0)->get();
    // }

    protected $guarded = [];
}