<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'short_name',
        'phone',
        'commercial_number',
        'building_number',
        'street',
        'district',
        'city',
        'postal_code',
    ];
}
