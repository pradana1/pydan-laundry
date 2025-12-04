<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $fillable = [
        'outlet_id',
        'category_expense_id',
        'amount',
        'description',
        'expense_date',
    ];

    public function outlet() {
        return $this->belongsTo('Outlet::class');
    }

    public function category_expenses() {
        return $this->belongsTo('CategoryPackage::class');
    }
}
