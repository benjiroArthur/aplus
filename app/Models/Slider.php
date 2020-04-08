<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    //fillables
    protected $fillable = ['image', 'title', 'description'];

    public function getImageAttribute($value){
        return asset('assets/img/banner/'.$value);
    }
}
