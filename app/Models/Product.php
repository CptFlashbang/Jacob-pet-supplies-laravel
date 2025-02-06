<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'available',
        'description',
        'type',
        'sell_by_date'
    ];

    protected $casts = [
        'available' => 'boolean',
        'price' => 'float',
        'sell_by_date' => 'datetime'
    ];
}
