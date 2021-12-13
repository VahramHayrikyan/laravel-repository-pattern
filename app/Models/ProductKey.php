<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductKey extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
      'title',
      'product_unit_id',
      'type',
      'stock_method',
      'serial',
      'filename',
      'supplier_id',
      'cost',
      'used',
    ];
}
