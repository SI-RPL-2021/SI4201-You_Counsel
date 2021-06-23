<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientPesanController extends Controller
{
    public function exMethod ($data1, $data2) {
        $hasil = $data1 + $data2;
        return $hasil;
    }
}