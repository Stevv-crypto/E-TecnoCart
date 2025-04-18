<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MerekMotorController extends Controller
{
    public function getData()
    {
        // Logika untuk mendapatkan array data
        $dataMotor = [
            ['id' => 1, 'nama' => 'Motor Kawasaki', 'harga' => 50000000],
            ['id' => 2, 'nama' => 'Motor Ducati', 'harga' => 100000000],
            ['id' => 3, 'nama' => 'Motor beat', 'harga' => 25000000],
            ['id' => 4, 'nama' => 'Motor vario', 'harga' => 27000000],
            ['id' => 5, 'nama' => 'Motor Vespa', 'harga' => 35000000],
        ];

        return $dataMotor;
    }

    public function tampilkan(){
        $data = $this->getData();
        return view('Merek_Motor', compact('data'));
    }
}
