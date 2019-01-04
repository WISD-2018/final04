<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    //
    protected $table = 'products';

    protected $fillable=[
        'id','name','source','time','where','price','kind','stock','picture',
    ];
}
