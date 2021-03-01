<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanNewsController extends Controller
{
    //
    public function show($judul){
        
        return view('news', ['judul' => $judul]);
    }
}
