<?php

namespace App\Providers;
use App\Models\Brand;
use App\Models\Cart;
use App\Models\CartProduct;
use App\Models\Category;
use App\Models\Menu;
use App\Models\Language;
use App\Models\News;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;


class ShareServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $active_langs = Cache::rememberForever('active_langs', function () {
            return Language::active()->get();
        });
        View::share([
            'langs' => $active_langs,
        ]);

    }

    public function register()
    {}
}
