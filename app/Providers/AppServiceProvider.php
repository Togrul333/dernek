<?php

namespace App\Providers;

use App\Models\Donation;
use App\Models\News;
use App\Models\Slider;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Relation::morphMap([
            'slider' => Slider::class,
            'news' => News::class,
            'donation' => Donation::class,
        ]);
    }
}
