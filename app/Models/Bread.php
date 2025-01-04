<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bread extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'quantity', 'min_order', 'price', 'image'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function cartDetails(): HasMany
    {
        return $this->hasMany(CartDetail::class, 'bread_id');
    }
}
