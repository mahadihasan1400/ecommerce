<?php

namespace App\Providers;

use App\Brand;
use View;
use App\Product;
use App\Category;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//        $categories = Category::where('publication_status',1)->get();
//        $products = Product::where('publication_status', 1)
//            ->orderBy('id','DESC')
//            ->take(4)
//            ->get();
//        View::share('categories', $categories);
//        View::share('products', $products);

        // data pass for specific view

        View::composer('front-end.includes.header', function ($view) {
            $categories = Category::where('publication_status', 1)->get();
            $view->with('categories', $categories);
        });

        View::composer('front-end.includes.footer', function ($view) {
            $brands = Brand::where('publication_status', 1)->get();
            $view->with('brands', $brands);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
