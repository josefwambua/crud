<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('home.index');
// });


Route::get('/', [HomeController::class,'index']);

// for uploading winners details
// route::post('/upload_winner', [HomeController::class, 'upload']);
Route::post('/upload_winner', [HomeController::class, 'upload'])->name('upload.winner');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
