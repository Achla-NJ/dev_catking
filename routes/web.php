<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('profile',[ProfileController::class,'profile']);
Route::get('profile/edit',[ProfileController::class,'manage_profile']);