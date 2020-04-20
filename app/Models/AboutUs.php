<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static latest()
 */
class AboutUs extends Model
{
    //fillables
    protected $fillable = ['mission', 'vision', 'about'];
}
