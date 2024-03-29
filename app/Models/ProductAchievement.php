<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAchievement extends Model
{
    use HasFactory;
    protected $table = 'product_achievement';
    protected $fillable = [
        'product_id',
        'title',
        'description',
        'image',
    ];
    public $timestamps = false;
    static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub
        static::creating(function ($query) {
            $query->timestamp = Carbon::now();
        });
    }

}
