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

    public function outlet() {
        return $this->belongsTo('Outlet::class');
    }

    public function transactions() {
        return $this->hasMany('Transaction::class');
    }

    public function scopeByOutlet($query)
    {
        if (!auth()->user()->can('admin')) {
            $query->where('outlet_id', auth()->user()->outlet_id);
        }

        return $query;
    }
}

