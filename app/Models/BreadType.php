<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BreadType extends Model
{
    use HasFactory;
    protected $table = 'bread_types';
    protected $fillable = [
        'name',
        'isActive',
    ];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class, 'id', 'bread_type_id');
    }
}
