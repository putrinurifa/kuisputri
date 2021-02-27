<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanProgramController extends Controller
{
    public function karir(){
       return view('programs.karir');
    }

    public function magang(){
       return view('programs.magang');
    }

    public function kunjungan(){
       return view('programs.kunjungan');
    }
}
