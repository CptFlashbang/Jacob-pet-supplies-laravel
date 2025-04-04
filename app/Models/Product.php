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

    public function isDiscounted(): bool
    {
        return $this->is_end_of_line || ($this->sell_by_date && now()->diffInDays($this->sell_by_date, false) <= 7);
    }
}
