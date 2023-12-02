<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Donation;
use App\Models\News;
use App\Models\Slider;

class IndexController extends Controller
{
    public function index()
    {
        $sliders = Slider::get();
        $news = News::limit(7)->get();
        $donations = Donation::limit(3)->get();
        return view('frontend.index',compact('sliders','news','donations'));
    }
}
