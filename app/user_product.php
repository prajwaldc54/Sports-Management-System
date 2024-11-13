<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_product extends Model
{
    protected $table = 'user_products';
    protected $fillable = ['userid', 'product_name','retail_price','color','sport','brand','accessories','Store_name','quantity','picture'];
}
