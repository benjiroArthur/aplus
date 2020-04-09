<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //fillables
    protected $fillable = ['name', 'phone_number', 'address', 'email', 'email_verified_at'];
}
