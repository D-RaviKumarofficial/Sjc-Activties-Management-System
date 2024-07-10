<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


Route::get('admin/register',[AdminController::class,'register'])->name('admin.register');
Route::post('admin/register',[AdminController::class,'processRegister'])->name('admin.processRegister');

Route::get('admin/login',[AdminController::class,'login'])->name('admin.login');
Route::post('admin/login',[AdminController::class,'authenticate'])->name('admin.authenticate');

Route::get('admin/home',[AdminController::class,'home'])->name('admin.home');
