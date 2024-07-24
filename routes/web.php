<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\OngoingController;


// Route::get('/', function () {
//     return view('ongoing.index');
// });

Route::get('/', [OngoingController::class, 'index']);
