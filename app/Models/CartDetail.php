<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class CartDetail extends Model
{
    protected $table = "cart_details";
    protected $fillable = ['cart_id', 'bread_id', 'quantity'];

    public function cart(): BelongsTo
    {
        return $this->belongsTo(Cart::class, 'cart_id');
    }

    public function breads(): BelongsToMany
    {
        return $this->belongsToMany(Bread::class, 'bread_id');
    }
}
