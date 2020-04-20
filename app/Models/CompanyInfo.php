<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static latest()
 */
class CompanyInfo extends Model
{
    //fillables
    protected $fillable = ['phone_number', 'address', 'logo_main', 'logo_mini'];

    public function getLogoMiniAttribute($value){
        return asset('assets/resourceImages/'.$value);
    }

    public function getLogoMainAttribute($value){
        return asset('assets/resourceImages/'.$value);
    }

    public function getLogoPgAttribute($value){
        return asset('assets/resourceImages/'.$value);
    }
}
