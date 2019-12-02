<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'user_id', 'status', 'products', 'price', 'resnumber', 'address'
    ];
}
