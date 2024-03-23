<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'price',
        'image',
        'available_products',
        'is_Auto',
        'is_Valid',
        'user_id',
        'category_id',
        'region_id',
    ];

    public function category(){
        return $this->belongsTo(Categorie::class);
    }
}
