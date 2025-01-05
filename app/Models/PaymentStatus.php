<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PaymentStatus extends Model
{
    protected $table = 'payment_status';

    protected $fillabel = ['name'];

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class, 'payment_status_id');
    }
}
