<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    protected $fillable = [
        'transaction_id',
        'package_id',
        'quantity',
        'total',
    ];

    public function transaction() {
        return $this->belongsTo('Transaction::class');
    }

    public function packages() {
        return $this->belongsTo('Package::class');
    }
}
