<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'bread_types';
    protected $fillable = [
        'name',
        'isActive',
    ];
}
