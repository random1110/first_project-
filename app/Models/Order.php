<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable=[
        'cart_id',
        'user_id',
        'driver_name',
        'addrees',
        'longitude',
        'latitude',
        'status',
        'notes',
        'rejection_notes',
        'shop_id'
    ];
}
