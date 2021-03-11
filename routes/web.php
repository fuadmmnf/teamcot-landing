<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/clear', function () {
    \Illuminate\Support\Facades\Artisan::call('route:clear');
    \Illuminate\Support\Facades\Artisan::call('config:cache');
    return 'cache cleared';
});


Route::get('/', [\App\Http\Controllers\IndexController::class, 'show'])->name('index');
Route::get('/galleries/{slug}', [\App\Http\Controllers\IndexController::class, 'showGallery'])->name('gallery');
Route::post('/messages', [\App\Http\Controllers\IndexController::class, 'saveMessage']);
