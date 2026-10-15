<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    protected $fillable = [
        'label',
        'description',
        'price',
        'category_id',
        'sales_count',
        'views_count'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
