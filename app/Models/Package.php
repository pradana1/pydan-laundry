<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
        'outlet_id',
        'category_package_id',
        'type',
        'name',
        'price',
    ];
}
