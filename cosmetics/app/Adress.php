<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adress extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'phone',
        'ostan',
        'city',
        'codeposty',
        'address'
    ];
}
