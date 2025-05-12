<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    use HasFactory;
        protected $fillable = [
        'category_id', 'destination','price', 'image', 'features','waLink'
        // 'departure', 'destination','price', 'image', 'features','waLink','category_id'
    ];

    protected $casts = [
        'features' => 'array',
    ];

    public function category()
{
    return $this->belongsTo(Category::class, 'category_id');
}
    

}
