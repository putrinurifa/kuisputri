<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanProgramController extends Controller
{
    public function karir(){
        echo '<center> <h2> Program karir <br> 
           <a href="https://www.educastudio.com/program/karir">Klik Disini </a>'.'Untuk Melanjutkan Ke Halaman Karir';
    }

    public function magang(){
        echo '<center> <h2> Program Magang <br> 
           <a href="https://www.educastudio.com/program/magang">Klik Disini </a>'.'Untuk Melanjutkan Ke Halaman Magang';
    }

    public function kunjungan(){
        echo '<center> <h2> Program kunjungan Industri <br> 
           <a href="https://www.educastudio.com/program/kunjungan-industri">Klik Disini </a>'.'Untuk Melanjutkan Ke Halaman Kunjungan';
    }
}
