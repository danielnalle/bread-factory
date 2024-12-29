<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Customer extends Model
{
    protected $fillable = [
        'user_id',
        'address',
        'phone',
    ];

    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id');
    }
}
