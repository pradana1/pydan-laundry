<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'invoice',
        'customer_id',
        'user_id',
        'outlet_id',
        'date',
        'deadline',
        'status',
        'payment_status',
        'payment_date',
        'tax_percent',
        'tax_amount',
        'discount_percent',
        'discount_amount',
        'additional_fee',
        'total_price',
    ];

    public function transaction_details() {
        return $this->hasMany('TransactionDetail::class');
    }

    public function customer() {
        return $this->belongsTo('Customer::class');
    }

    public function user() {
        return $this->belongsTo('User::class');
    }

    public function outlet() {
        return $this->belongsTo('Outlet::class');
    }
}
