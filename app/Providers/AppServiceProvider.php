<?php

namespace App\Providers;

use App\Models\User;
use App\Repositories\AdminRepository;
use App\Repositories\AdminRepositoryInterface;
use App\Repositories\FinanciereRepository;
use App\Repositories\FinanciereRepositoryInterface;
use App\Services\FinanciereService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // _____________admin__________
        $this->app->bind(AdminRepositoryInterface::class, function ($app) {
            return new AdminRepository( new User());
        });

        // ____________________financiere___________

        $this->app->bind(FinanciereRepositoryInterface::class, FinanciereRepository::class);
        $this->app->bind(FinanciereService::class, function ($app) {
            return new FinanciereService($app->make(FinanciereRepositoryInterface::class));
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