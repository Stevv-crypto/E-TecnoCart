<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/Login/{username}/{password}', function ($username, $password) {
    //return view('Login', compact('username', 'password'));
//});
Route::get('/Login/{username}/{password}', [LoginController::class, 'tampilkan']);

Route::get('/spoduct', function () {
    return view('spoduct');
});