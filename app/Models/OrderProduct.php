<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'order_product';
    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'price_each',
        'status',
        'initial_type',
        'kinguin_order_id',
        'cw_order_id',
        'cw_cost_each',
        'publisher_id',
        'publisher_percentage',
        'publisher_earnings',
        'date_finished',
    ];
    protected static function boot()
    {
        parent::boot();
        // auto-sets values on creation
        static::creating(function ($query) {
            $query->date_finished = Carbon::now();
        });
    }
//    TODO :: Relationship Start

    public function product()
    {
        return $this->belongsTo(Product::class,'product_id');
    }

//    TODO :: Relationship End

}
