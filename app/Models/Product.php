<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "breads";
    protected $fillable = ['name', 'description', 'bread_type_id', 'quantity', 'min_order', 'price', 'image'];
}
