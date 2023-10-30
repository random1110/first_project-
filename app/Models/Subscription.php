<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'expired_date',
        'amount',
        'notes',
        'shop_id'
    ];
}
