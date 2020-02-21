<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    //
    protected $fillable = [
        //'name', 'email', 'password',
    ];

    //By default laravel will expect created_at & updated_at column in your table. By making it to false it will override the default setting.
    public $timestamps = false;
}


