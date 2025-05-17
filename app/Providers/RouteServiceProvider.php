<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    public const HOME = '/dashboard';

    public function boot(): void
    {
        $this->routes(function () {
            Route::middleware('web')
                ->group(base_path('routes/web.php'));

            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));
        });
    }

    // Custom redirect after login
    public static function redirectTo()
    {
        $role = auth()->user()->role->name;

        return match ($role) {
            'admin' => '/admin/dashboard',
            'guru' => '/guru/dashboard',
            'siswa' => '/siswa/dashboard',
            default => '/login',
        };
    }
}
