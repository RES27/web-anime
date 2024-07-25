<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\OngoingController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\EpisodeController;


// Route::get('/', function () {
//     return view('ongoing.index');
// });

Route::get('/', [OngoingController::class, 'index']);
Route::get('/detail/{title}', [DetailController::class, 'index'])->name('detail');
Route::get('/episode/{title}', [EpisodeController::class, 'index'])->name('episode');

// Route::get('/detail/{title}', function ($title) {
//     return $title; // This should output the title passed in the URL
// })->name('detail');
