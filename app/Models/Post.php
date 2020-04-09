<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //fillables
    protected $fillable = ['title', 'description', 'image'];
}
