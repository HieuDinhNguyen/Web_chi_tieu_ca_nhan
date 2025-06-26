<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Income extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
        'amount',
        'date',
        'income_category_id'
    ];
    public function category()
    {
        return $this->belongsTo(IncomeCategory::class, 'income_category_id');
    }
}
