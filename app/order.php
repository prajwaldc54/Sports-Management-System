<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    //
    protected $table = 'orders';
    protected $fillable = ['product_id','userproduct_id', 'user_id', 'Size','Quantity','brand','Delivery Address'];
}
