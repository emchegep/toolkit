<?php

use App\Http\Controllers\NotificationController;
use App\Livewire\Chat;
use App\Livewire\Jobs\Create;
use App\Livewire\Jobs\Index;
use App\Livewire\Jobs\ShowJob;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');


Route::middleware('auth')->group(function (){
    Route::get('/jobs', Create::class)->name('job.create');
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::middleware(['auth'])->group(function (){
    Route::get('/jobs/create', Create::class)->name('jobs.create');
    Route::get('/jobs/{job}', ShowJob::class)->name('jobs.show');
});

require __DIR__.'/auth.php';
