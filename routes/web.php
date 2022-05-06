<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('', [ContactController::class, 'contact']);
Route::post('confirm', [ContactController::class, 'confirm']);
Route::post('thanks', [ContactController::class, 'thanks']);

