<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResultController;

// 1. Show the frontend form when visiting the homepage
Route::get('/', function () {
    return view('check');
});

// 2. Handle the form submission when the user clicks "Submit"
Route::post('/fetch-result', [ResultController::class, 'fetch'])->name('fetch.result');