<?php

use App\Ai\Agents\SalesCoach;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';











Route::get('/call/ai', function () {
    $response = SalesCoach::prompt('Analyze this sales call and give feedback');

    return (string) $response;
});
