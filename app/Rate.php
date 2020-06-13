<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    protected $table ='rates';
    protected $fillable=[
        'rate_value',
        'user_id',
        'book_id'
    ];

}
