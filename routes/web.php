<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;


Route::get('', [ContactController::class, 'contact']);
Route::post('confirm', [ContactController::class, 'confirm']);
Route::post('thanks', [ContactController::class, 'thanks']);

//Route::get('admin/welcome', function () {
    //return view('welcome');
//});

//Route::get('/dashboard', function () {
    //return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

Route::get('admin', [AdminController::class, 'admin'])->middleware('auth')->name('admin');
Route::get('reset', [AdminController::class, 'reset'])->middleware('auth')->name('reset');
Route::post('delete', [AdminController::class, 'delete']);

require __DIR__.'/auth.php';
