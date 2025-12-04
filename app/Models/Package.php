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

    public function outlet() {
        return $this->belongsTo('Outlet::class');
    }

    public function category_package() {
        return $this->belongsTo('CategoryPackage::class');
    }

    public function scopeByOutlet($query)
    {
        if (!auth()->user()->can('admin')) {
            $query->where('outlet_id', auth()->user()->outlet_id);
        }

        return $query;
    }
}
