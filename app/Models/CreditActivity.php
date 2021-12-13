<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CreditActivity extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'credits_activity';
    protected $fillable = [
        'user_id',
        'type',
        'description',
        'change',
        'credits_before',
        'credits_after',
    ];

    protected static function boot()
    {
        parent::boot();
        // auto-sets values on creation
        static::creating(function ($query) {
            $query->timestamp = Carbon::now();
        });
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
