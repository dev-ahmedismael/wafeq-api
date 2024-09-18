<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'account_category_id',
        'code',
        'account_name',
        'type',
        'activity',
        'debit',
        'credit',
        'enable_payments',
        'show_in_expense_claim',
        'editable'
    ];

    public function account_categories(): BelongsTo
    {
        return $this->belongsTo(AccountCategory::class);
    }
}
