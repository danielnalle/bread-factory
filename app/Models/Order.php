<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model
{
    protected $fillable = ['no_order', 'cart_id', 'order_status_id', 'payment_status_id', 'total_price'];

    public function cart(): BelongsTo
    {
        return $this->belongsTo(Cart::class);
    }

    public function orderStatus(): BelongsTo
    {
        return $this->belongsTo(OrderStatus::class);
    }

    public function paymentStatus(): BelongsTo
    {
        return $this->belongsTo(PaymentStatus::class);
    }
}
