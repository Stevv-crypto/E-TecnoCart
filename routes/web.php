<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/listproduk/{id}/{nama}/{harga}', function ($id, $nama, $harga) {
    return view('list_produk', compact('id', 'nama', 'harga'));
});