<?php

namespace App\Providers;
use View;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider  extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
         view()->composer('FE.home.index', 'App\Http\ViewComposers\TabComposer' );
         view()->composer('FE.emails.callback', 'App\Http\ViewComposers\TabComposer' );
         view()->composer('FE.emails.callback_billing', 'App\Http\ViewComposers\TabComposer' );
         view()->composer('FE.layouts.menu', 'App\Http\ViewComposers\TabComposer' );
         view()->composer('FE.layouts.sidebar', 'App\Http\ViewComposers\TabComposer' );   
         view()->composer('FE.single_blog.index', 'App\Http\ViewComposers\TabComposer' );   
         view()->composer('FE.blog.index', 'App\Http\ViewComposers\TabComposer' );   
         view()->composer('admin.layoutadmin', 'App\Http\ViewComposers\TabComposer' );   
         view()->composer('admin.leftmenu', 'App\Http\ViewComposers\TabComposer' );   
         view()->composer('admin.dashboard', 'App\Http\ViewComposers\TabComposer' ); 
         view()->composer('FE.layouts.menu', 'App\Http\ViewComposers\TabComposer' ); 
         view()->composer('FE.canhan.index', 'App\Http\ViewComposers\TabComposer' ); 
         view()->composer('FE.canhan.donhang', 'App\Http\ViewComposers\TabComposer' ); 
         view()->composer('FE.products.index', 'App\Http\ViewComposers\TabComposer' ); 
         view()->composer('FE.products.search_products', 'App\Http\ViewComposers\TabComposer' ); 

         view()->composer('FE.shopping_cart.index', 'App\Http\ViewComposers\TabComposer' ); 




            view()->composer('*', 'App\Http\ViewComposers\InfoComposer'); 


    }
}
