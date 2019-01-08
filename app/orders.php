<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    protected $table = 'orders';

    protected $fillable=[
        'id','user_id','user_name','user_phone','user_address',
        'product_id','product_name','product_price','product_quantity','total','way',
    ];
}
