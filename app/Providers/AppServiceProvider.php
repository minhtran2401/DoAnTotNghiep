<?php

namespace App\Providers;
use View;
use DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Info;



use Illuminate\Support\ServiceProvider;

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
       
        $timenow = Carbon::now('Asia/Ho_Chi_Minh');  
        view()->share('timenow', $timenow);

       

    }

    
}
