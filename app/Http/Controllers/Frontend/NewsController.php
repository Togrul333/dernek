<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $news_all = News::when($request->has('search'), function ($query) use ($request) {
            $search = $request->get('search');
            return $query->whereHas('translations', function ($query) use ($search) {
                $query->where('title', 'like', "%$search%")
                    ->orWhere('content', 'like', "%$search%")
                    ->orWhere('description', 'like', "%$search%");
            });
        })->get();
        return view('frontend.pages.news.index', compact('news_all'));
    }

    public function detail($newsSlug)
    {
        $news = News::active()->whereHas('translation', function ($query) use ($newsSlug) {
            $query->where('slug', $newsSlug);
        })->firstOrFail();
        $some_news = News::limit(7)->get();
        return view('frontend.pages.news.detail', compact('news', 'some_news'));
    }
}
