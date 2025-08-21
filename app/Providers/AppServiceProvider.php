<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
   public function boot()
{
    View::composer('*', function ($view) {
        $cartKey = auth()->check() ? 'cart_' . auth()->id() : 'cart_' . session()->getId();
        $cart = session()->get($cartKey, []);
        
        $totalQuantity = 0;
        foreach ($cart as $item) {
            $totalQuantity += $item['quantity'];
        }

        $view->with('globalCartCount', $totalQuantity);
    });
}
}
