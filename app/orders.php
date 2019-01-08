<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    protected $table = 'orders';

    protected $fillable=[
        'id','user_id','product_id','product_name','product_price','product_quantity','way',
    ];
}
