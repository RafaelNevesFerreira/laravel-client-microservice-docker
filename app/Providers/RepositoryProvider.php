<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind("App\Repository\Contracts\ClientRepositoryInterface", "App\Repository\Eloquent\ClientRepository");
    }

}
