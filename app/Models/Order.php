<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //fillables
    protected $fillable = ['product_id', 'customer_id', 'quantity', 'amount', 'transaction_srn'];

    //relationships

}
