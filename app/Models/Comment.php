<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comment';
    public $timestamps = false;

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
        return $this->belongsTo(User::class,'user_id');
    }
    public function getTimeStampAttribute()
    {
        return Carbon::parse($this->attributes['timestamp']);
    }
    public function shortContent($word_count)
    {
        $it = trim(strip_tags($this->content));
        // spit into words using space as delineator
        $itsplit = preg_split('/ /',$it);
        // get first n words
        $n = ($word_count < count($itsplit)) ? $word_count : count($itsplit) -1;
        $out="";
        for ($x=0; $x<=$n;$x++)
        {
            $out .=  $itsplit[$x]." ";
        }
        $out = substr($out,0,-1); //strip last space
        return $out;
    }
}
