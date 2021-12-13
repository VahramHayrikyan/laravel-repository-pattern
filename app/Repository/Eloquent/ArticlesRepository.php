<?php


namespace App\Repository\Eloquent;


use App\Models\Article;
use App\Repository\ArticlesRepositoryInterface;
use Carbon\Carbon;

class ArticlesRepository implements ArticlesRepositoryInterface
{

    public function init()
    {
        return Article::where([
            ['private','=',0],
            ['timestamp','<=',Carbon::now()],
        ])->orderBy('timestamp','DESC')->take(4)->get();
    }
}
