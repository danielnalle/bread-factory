<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bread extends Model
{
    use HasFactory;
    protected $table = "breads";
    protected $fillable = ['name', 'description', 'bread_type_id', 'quantity', 'min_order', 'unit', 'price', 'image'];

    public function bread_type(): BelongsTo
    {
        return $this->belongsTo(BreadType::class, 'bread_type_id');
    }

    public function cart_details(): HasMany
    {
        return $this->hasMany(CartDetail::class, 'bread_id');
    }
}
