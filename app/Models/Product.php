<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'descriptions',
        'image',
        'category_id',
        'price',
        'discount_percent',
        'notes',
        'shop_id',
        'tva'
    ];
}
