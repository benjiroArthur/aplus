<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method create(array $all)
 * @method static find($id)
 */
class Project extends Model
{
    //fillable
    protected $fillable = ['title', 'description', 'status', 'cover_image', 'start_date', 'end_date'];
}
