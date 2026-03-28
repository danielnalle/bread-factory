<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CartDetail extends Model
{
    protected $table = 'cart_details';

    protected $fillable = ['cart_id', 'bread_id', 'quantity'];

    public function cart(): BelongsTo
    {
        return $this->belongsTo(Cart::class);
    }

    public function breads(): BelongsTo
    {
        return $this->belongsTo(Bread::class, 'bread_id');
    }
}
