<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class Giveaway extends Model
{
    use HasFactory;

    protected $table = 'giveaway';
    protected $fillable = [
        'id',
        'status',
        'user_id',
        'product_category_id',
        'who_can_join',
        'type',
        'title',
        'seo_url',
        'description',
        'image',
        'fee',
        'rrp',
        'private',
        'featured',
        'max_entrants',
        'max_entries_per_user',
        'end_date',
        'start_date',
        'date_finished',
        'create_date',
    ];

    public function displayHumanTimeLeft()
    {
        $now = Carbon::now();

        if ($now->diffInDays($this->end_date) > 0)
        {
            return $now->diffInDays($this->end_date) . Str::plural('day', $now->diffInDays($this->end_date)).     ' left';
        }
    }
    public function getMapUrl()
    {
        if ($this->_url === null)
            $this->_url = $this->createUrl('giveaways/' . $this->random_id . '/' . $this->seo_url);
        return $this->_url;
    }

    public function update_time()
    {
        return strtotime($this->create_date);
    }

    public function getExtraImages()
    {
//        return IImage::getImages(Yii::getPathOfAlias('webroot') . '/uploads/giveaway/'.$this->id.'/extra', Yii::app()->baseUrl. '/uploads/giveaway/'.$this->id.'/extra/');

    }

    public function getImageUrl()
    {
        return $this->url . '/uploads/giveaway/'.$this->id.'/'. rawurlencode($this->image);
    }
}
