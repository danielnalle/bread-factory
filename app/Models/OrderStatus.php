<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class OrderStatus extends Model
{
    protected $table = 'order_status';

    protected $fillable = ['name'];

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class, 'order_status_id');
    }
}
