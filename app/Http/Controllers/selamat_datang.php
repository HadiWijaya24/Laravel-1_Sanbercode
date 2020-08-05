<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Psy\CodeCleaner\ReturnTypePass;

class selamat_datang extends Controller
{
    public function ucapan(Request $request)
    {
        $nama = $request["username"];
        
        return view('welcome',["name"=>$nama]);
        
    }
}
