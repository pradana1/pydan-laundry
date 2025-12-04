<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    protected $fillable = [
        'code_outlet',
        'name',
        'address',
        'phone',
    ];

    public function users() 
    {
        return $this->hasMany(User::class);
    }

    public function customers() 
    {
        return $this->hasMany('Customer::class');
    }

    public function packages() {
        return $this->hasMany('Package::class');
    }

    public function expenses() {
        return $this->hasMany('Expense::class');
    }

    public function transaction() {
        return $this->hasMany('Transaction::class');
    }

    
}
