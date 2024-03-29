<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserHasAchievement extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'user_has_achievement';
    protected $fillable = [
        'user_id',
        'achievement_id',
        'timestamp',
    ];
    protected static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub
        static::creating(function ($query) {
            $query->timestamp = Carbon::now();
        });
    }
}
