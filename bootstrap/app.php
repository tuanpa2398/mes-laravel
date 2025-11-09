<?php

use App\Shared\AppConstant;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias([
            AppConstant::APP_AUTH_MIDDLEWARE => AuthMiddleware::class
        ]);

    })
    ->withExceptions(function (Exceptions $exceptions): void {
        // Tùy biến hiển thị lỗi cho người dùng
        // $exceptions->render(function (Throwable $e, Request $request) {
        //     return redirect()->back()->with('error', '')
        // });
    })->create();
