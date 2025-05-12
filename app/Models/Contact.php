<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable=[
        'contactNumber',
        'rekeningNumber',
        'nasabahName',
        'waLink',
        'about',
        'email',
        'instagram',
        'address'
    ];
}
