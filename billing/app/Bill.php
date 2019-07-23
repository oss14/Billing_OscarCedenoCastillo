<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    //
    protected $table = 'tbl_bill';

    protected $fillable = [
        'id_bill',
        'id_user',
        'total_bill'
    ];
}
