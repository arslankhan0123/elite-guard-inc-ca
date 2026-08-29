<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Service;
use App\Models\Category;
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
        $views = ['layouts.frontend.header', 'layouts.frontend.footer'];
        View::composer($views, function ($view) {
            $view->with('header_services', Service::where('status', 'active')->get());
            $view->with('header_categories', Category::where('status', 'active')
                ->orderBy('order', 'asc')
                ->orderBy('id', 'asc')
                ->with([
                    'services' => fn ($query) => $query->where('status', 'active')->orderBy('name'),
                    'products' => fn ($query) => $query->where('status', 'active')->orderBy('name'),
                ])->get());
        });
    }
}
