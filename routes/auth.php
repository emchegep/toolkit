<?php

use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\NotificationController;
use App\Http\Middleware\Admin;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Chat;
use App\Livewire\User\Job\Index;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::middleware('guest')->group(function () {
//    Volt::route('register', 'pages.auth.register')
//        ->name('register');
    Route::get('/register', Register::class)->name('register');

//    Volt::route('login', 'pages.auth.login')
//        ->name('login') ;
    Route::get('/login', Login::class)->name('login');

    Volt::route('forgot-password', 'pages.auth.forgot-password')
        ->name('password.request');

    Volt::route('reset-password/{token}', 'pages.auth.reset-password')
        ->name('password.reset');
});

Route::middleware('auth')->group(function () {
    Volt::route('verify-email', 'pages.auth.verify-email')
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Volt::route('confirm-password', 'pages.auth.confirm-password')
        ->name('password.confirm');
});

Route::middleware(['auth', Admin::class])->prefix('admin')->as('admin.')->group(function () {
     Route::get('/dashboard',App\Livewire\User\Index::class)->name('dashboard');

    Route::get('/jobs', Index::class)->name('jobs');

    Route::get('/notifications', \App\Livewire\Notification::class)->name('notifications');
    Route::get('/chat', Chat::class)->name('chat');
    Route::get('/notifications/mark-as-read', [NotificationController::class, 'markAllAsRead'])->name('notifications.mark-as-read');

});
