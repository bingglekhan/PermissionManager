<?php

namespace LaravelEnso\PermissionManager;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class PermissionAuthServiceProvider extends ServiceProvider
{
    public function boot()
    {
        \Gate::define('access-route', function ($user, $route) {
            return $user->hasAccessTo($route);
        });
    }
}
