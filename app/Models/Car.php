<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'price', 'image', 'features', 'type','waLink'
    ];

    protected $casts = [
        'features' => 'array',
    ];
}
