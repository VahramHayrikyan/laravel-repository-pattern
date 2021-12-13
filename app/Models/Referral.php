<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referral extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'referral';

    public function recruiter()
    {
        return $this->belongsTo(User::class,'recruiter_id');
    }
    public function recruit()
    {
        return $this->belongsTo(User::class,'recruit_id');
    }
}
