<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'outlet_id',
        'name',
        'email',
        'phone',
        'address',
    ];
}
