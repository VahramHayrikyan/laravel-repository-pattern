<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ArcadeCategory extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'arcade_category';
    protected $fillable = [
        'title'
    ];

    public function arcadeGames(): HasMany
    {
        return $this->hasMany(ArcadeGame::class, 'arcade_category_id', 'id');
    }
}
