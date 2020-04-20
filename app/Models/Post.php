<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static latest()
 */
class Post extends Model
{
    //fillables
    protected $fillable = ['title', 'description', 'image'];
}
