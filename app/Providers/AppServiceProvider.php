<?php

namespace App\Providers;

use App\Models\User;
use App\Repositories\AdminRepository;
use App\Repositories\AdminRepositoryInterface;
use App\Repositories\FinanciereRepository;
use App\Repositories\FinanciereRepositoryInterface;
use App\Services\FinanciereService;
use App\Services\FinanciereServiceInterface;
use App\Repositories\PlannerRepository;
use App\Repositories\PlannerRepositoryInterface;
use App\Services\PlannerService;
use App\Services\PlannerServiceInterface;
use App\Repositories\StockisteRepository;
use App\Repositories\StockisteRepositoryInterface;
use App\Services\StockisteService;
use App\Services\StockisteServiceInterface;
use App\Services\AdminService;
use App\Services\AdminServiceInterface;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // _____________admin__________

        $this->app->bind(AdminRepositoryInterface::class, AdminRepository::class);
        $this->app->bind(AdminServiceInterface::class, function ($app) {
            return new AdminService($app->make(AdminRepositoryInterface::class));
        });

        // ____________________financiere___________

        $this->app->bind(FinanciereRepositoryInterface::class, FinanciereRepository::class);
        $this->app->bind(FinanciereServiceInterface::class, function ($app) {
            return new FinanciereService($app->make(FinanciereRepositoryInterface::class));
        });

        // _______________Responsable agricule_______________
        $this->app->bind(PlannerRepositoryInterface::class, PlannerRepository::class);
        $this->app->bind(PlannerServiceInterface::class, function ($app) {
            return new PlannerService($app->make(PlannerRepositoryInterface::class));
        });

         // _______________stockiste_______________
         $this->app->bind(StockisteRepositoryInterface::class, StockisteRepository::class);
         $this->app->bind(StockisteServiceInterface::class, function ($app) {
             return new StockisteService($app->make(StockisteRepositoryInterface::class));
         });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useTailwind();
    }
}