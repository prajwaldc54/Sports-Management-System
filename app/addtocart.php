<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class addtocart extends Model
{
    //
    protected $table = 'addtocarts';
    protected $fillable = ['cartid','product_id', 'user_id'];
}
