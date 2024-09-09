<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScannerController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/scanner', function () {
    return view('scanner');
});
Route::post('scanner/post', [ScannerController::class, 'store'])->name('store');