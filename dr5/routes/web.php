<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('auth.login');
});

use App\Http\Controllers\UserDashboardController;

Route::get('/user-dashboard', [UserDashboardController::class, 'index'])
    ->name('user.dashboard');