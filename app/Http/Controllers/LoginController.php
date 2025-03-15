<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    function tampilkan($username, $password){
        return view('Login', ['username' => $username, 'password' => $password]);
    }
}
