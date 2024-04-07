<?php

namespace App\Providers;

use App\Models\User;
use App\Repositories\AdminRepository;
use App\Repositories\AdminRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(AdminRepositoryInterface::class, function ($app) {
            return new AdminRepository( new User());
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}