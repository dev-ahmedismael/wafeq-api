<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaxRate extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'tax_type',
        'tax_rate',
        'description',
        'tax_exemption_reason',
        'editable'
    ];
}
