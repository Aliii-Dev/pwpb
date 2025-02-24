<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Filament\Auth\MyLogoutResponse;
use Filament\Http\Responses\Auth\Contracts\LogoutResponse;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(LogoutResponse::class, MyLogoutResponse::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
