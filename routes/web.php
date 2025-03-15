<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListProdukController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/listproduk/{id}/{nama}/{harga}', [ListProdukController::class, 'tampilkan']);