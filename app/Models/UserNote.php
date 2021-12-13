<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserNote extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'user_note';
    protected $fillable = [
      'user_id',
      'creator_id',
      'note',
      'timestamp',
    ];


    protected static function boot()
    {
        parent::boot();
        // auto-sets values on creation
        static::creating(function ($query) {
            $query->timestamp = Carbon::now();
        });
    }

    public function user()
    {
       return $this->belongsTo(User::class,'user_id','id');
    }
    public function creator()
    {
       return $this->belongsTo(User::class,'creator_id','id');
    }

    public function getTimeStampAttribute()
    {
        return Carbon::parse($this->attributes['timestamp']);
    }
}
