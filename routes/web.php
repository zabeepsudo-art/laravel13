<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Queue;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Laravel\Ai\Text;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';

Route::get('/search', function () {
    $query = 'Best backend framework';

    $embedding = Str::of($query)->toEmbeddings();

    $documents = DB::table('documents')
        ->whereVectorSimilarTo('embedding', $embedding)
        ->limit(5)
        ->get();

    return $documents;
});