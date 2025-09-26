<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: [
            __DIR__.'/../routes/web.php',
            __DIR__.'/../routes/admin_web.php'
        ],
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
        $middleware->web(append: [
            \App\Http\Middleware\GlobalMiddleware::class,
        ]);

        $middleware->alias([
            'auth_middleware' => \App\Http\Middleware\AuthMiddleware::class,
            'auth_check_middleware' => \App\Http\Middleware\AuthCheckMiddleware::class,
            'global_middleware' => \App\Http\Middleware\GlobalMiddleware::class,
            'admin_auth_middleware' => \App\Http\Middleware\AdminAuthMiddleware::class,
            'admin_auth_check_middleware' => \App\Http\Middleware\AdminAuthCheckMiddleware::class,
        ]);

    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
