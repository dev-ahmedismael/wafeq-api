<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuotesAndProformas extends Model
{
    use HasFactory;

    protected $fillable = [
        'index',
        'status',
        'number',
        'date',
        'customer',
        'currency',
        'quote_amount',
        'item',
        'line_item_description',
        'qty',
        'price',
        'tax_rate',
        'discount',
        'line_amount',
        'reference',
        'project',
        'notes',
        'quote_id',
    ];
}
