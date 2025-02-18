<?php

namespace App\Providers;

use App\Domain\Permissions\Infrastructure\PermissionsRepository;
use App\Domain\Reports\Infrastructure\ReportRepository;
use App\Domain\Roles\Infrastructure\RolesRepository;
use App\Infrastructure\Persistence\PermissionsRepositoryInterface;
use App\Infrastructure\Persistence\ReportRepositoryInterface;
use App\Infrastructure\Persistence\RolesRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ReportRepositoryInterface::class, ReportRepository::class);
        $this->app->bind(RolesRepositoryInterface::class, RolesRepository::class);
        $this->app->bind(PermissionsRepositoryInterface::class, PermissionsRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
