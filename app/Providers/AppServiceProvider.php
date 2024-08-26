<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Pagination\Paginator;
use App\Models\Post;
use Illuminate\Support\Facades\View;
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

        View::composer('header', function ($view) {
            $topViewedPosts = Post::orderByDesc('views')->take(3)->get();
            $view->with('topViewedPosts', $topViewedPosts);
        });

        Schema::defaultStringLength(191);
        Paginator::useBootstrap();
    }
}
