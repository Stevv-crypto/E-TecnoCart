<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListItemController extends Controller
{
    public function index()
    {
        return view('ListItem'); // akan memanggil resources/views/
    }
}
