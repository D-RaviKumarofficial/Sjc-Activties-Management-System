<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\W2wEventController;

Route::get('/', function () {
    return view('user.login');
});

Route::get('register',[UserController::class,'register'])->name('user.register');
Route::post('register',[UserController::class,'processRegister'])->name('user.processRegister');

Route::get('login',[UserController::class,'login'])->name('user.login');
Route::post('login',[UserController::class,'authenticate'])->name('user.authenticate');

Route::get('home',[UserController::class,'home'])->name('user.home');
Route::get('user/aboutus', [UserController::class, 'aboutus'])->name('user.aboutus');



require __DIR__.'/admin.php';
Route::resource('events', W2wEventController::class);

