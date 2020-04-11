<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method create(array $all)
 * @method static find(int $id)
 */
class Product extends Model
{
    //fillables
    protected $fillable = ['product_srn', 'name', 'price', 'in_stock'];
}
