<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListProdukController extends Controller
{
    function tampilkan($id, $nama, $harga){
        return view('list_produk', ['id'=> $id, 'nama'=> $nama, 'harga'=> $harga]);
    }
}
