<?php

namespace Shefoo10\Packagy;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class PackagyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        Route::prefix("packagy")
            ->as("packagy")
            ->group(function () {
                $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
            });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
