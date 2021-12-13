<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'product_category';
    protected $fillable = [
     'name',
     'image',
     'image_dark',
     'position',
    ];
}
