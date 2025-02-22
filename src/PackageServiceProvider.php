<?php

declare(strict_types=1);

namespace Codelabmw\LaravelPackageSkeleton;

use Illuminate\Support\ServiceProvider;
use Override;

final class PackageServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    #[Override]
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
