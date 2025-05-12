<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    use HasFactory;
        protected $fillable = [
        'name', 'price', 'image', 'features', 'destinasi','waLink'
    ];

    protected $travels = [
        'features' => 'array',
    ];

}
