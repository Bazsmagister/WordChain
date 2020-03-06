<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    //
    protected $fillable = [
        'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'x', 'y', 'z'

    ];

    //By default laravel will expect created_at & updated_at column in your table. By making it to false it will override the default setting.
    public $timestamps = false;
}


