<?php

namespace App\Providers;

use View;
use Jenssegers\Agent\Agent;
use Illuminate\Support\ServiceProvider;
use Cache;

class AgentServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $agent = new Agent();

        View::share('agent', $agent);

      
    }

    public function register()
    {
        //
    }
}