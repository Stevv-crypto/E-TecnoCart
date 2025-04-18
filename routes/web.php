<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MerekMotorController;

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/Login/{username}/{password}', function ($username, $password) {
    //return view('Login', compact('username', 'password'));
//});
Route::get('/Login/{username}/{password}', [LoginController::class, 'tampilkan']);
Route::get('/MerekMotor', [MerekMotorController::class, 'tampilkan']);

Route::get( '/gambar',function() {
    return view('gambar');
});
Route::get( '/profile',function() {
    return view('profile');
});