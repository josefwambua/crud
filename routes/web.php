<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('home.index');
// });


Route::get('/', [HomeController::class,'index']);

// Viewing  winner
Route::get('/view_winner', [HomeController::class,'view_winner']);
Route::get('/update_post/{id}', [HomeController::class,'update_post']);
Route::post('/confirm_update/{id}', [HomeController::class,'confirm_update']);
Route::delete('/delete_post/{id}', [HomeController::class,'delete_post']);





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
