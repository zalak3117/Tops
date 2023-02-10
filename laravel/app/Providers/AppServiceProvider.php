<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//use App\Models\cart;

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
        // $cart=cart::where('cust_id','=',session('cust_id'))->get();
        // $total=count($cart);
        // View::share('total',$total);
        
        // view()-> composer(
        //     'layout.header',
        //     function($view) {
        //         $view->with('cart', cart::all());
        //     }
        // );
       
    }
}
