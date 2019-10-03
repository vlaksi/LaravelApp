<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//Zato sto u database/migrations/create_post imamo string,zahteva se ovaj use iz nepoznatog razlog ( za sad :D )
use Illuminate\Support\Facades\Schema;

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
        //Zato sto u database/migrations/create_post imamo string,zahteva se ovo podesavanje iz nepoznatog razlog ( za sad :D )
        Schema::defaultStringLength(191);
        //
    }
}
