<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news_all = News::get();
        return view('frontend.pages.news.index',compact('news_all'));
    }
    public function detail($newsSlug)
    {
        $news = News::active()->whereHas('translation', function ($query) use ($newsSlug) {
            $query->where('slug', $newsSlug);
        })->firstOrFail();
        $some_news = News::limit(7)->get();
        return view('frontend.pages.news.detail',compact('news','some_news'));
    }
}
