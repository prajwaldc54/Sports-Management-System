<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //
    protected $table = 'products';
    protected $fillable = ['item_name', 'item_price', 'color','sport','brand','accessories','supplier','description','picture'];
}
