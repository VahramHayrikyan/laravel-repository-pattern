<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    use HasFactory;
    protected $table = 'article';
    protected $fillable = [
        'user_id',
        'category',
        'title',
        'content',
        'image',
        'private',
        'seo_url',
    ];

    public function getTimeStampAttribute()
    {
        return Carbon::parse($this->attributes['timestamp']);
    }

    public function getMapUrl()
    {
        if ($this->_url === null)
            $this->_url = htmlspecialchars($this->createUrl('article/view',array('id'=>$this->id,'seo_url'=>$this->seo_url)));
        return $this->_url;
    }

    public function getViewUrl()
    {
        return $this->createUrl('article/view',array('id'=>$this->id,'seo_url'=>$this->seo_url));
    }

    public function getImageUrl()
    {
        return $this->url.'/uploads/articles/'.$this->id.'/'.$this->image;
    }

    public function getGridImage()
    {
        return "<div class='text-center'><a href='".$this->imageUrl."' class='fancybox-button' data-rel='fancybox-button'>
			<img style='max-height:70px;max-width:200px;' src='".$this->imageUrl."' alt='thumbnail' />
		</a></div>";
    }

    public function formattedDate($format)
    {
//        if (!empty($this->timestamp)) {
//            $date =  new \Moment\Moment($this->timestamp);
//            return $date->format($format);
//        }
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

    /**
     * Relationship Start
     */


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function articleLikes()
    {
        return $this->hasMany('');
    }

    public function articleTags()
    {
        return $this->hasMany(ArticleTag::class,'article_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class,'article_id');
    }

    public function likes()
    {

    }

    /**
     * Relationship End
     */

}
