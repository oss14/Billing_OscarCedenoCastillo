<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'tbl_product';

    protected $fillable = [
        'id_product',
        'name_product',
        'detail_product',
        'price_product'
    ];
}
