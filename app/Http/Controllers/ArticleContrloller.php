<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleTag;
use App\Models\Comment;
use Illuminate\Http\Request;

class ArticleContrloller extends Controller
{
    public function index(){
        $data['articles'] = Article::latest('timestamp')->paginate(10);
        $data['comments'] = Comment::take(10)->get();
        $data['tags'] = ArticleTag::get();
        return view('site.articles.full_article',compact('data'));
    }
}
