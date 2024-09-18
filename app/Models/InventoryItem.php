<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'is_active',
        'name',
        'code',
        'measure_unit',
        'description',
        'selling_price',
        'revenue_account',
        'revenue_tax_rate',
        'purchase_cost',
        'expense_account',
        'purchase_tax_rate',
    ];
}
