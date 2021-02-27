<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanProductsController extends Controller
{
    public function eduGames(){
        return view('products.eduGames');
    }
    public function kidsGames(){
        return view('products.kidsGames');
    }
    public function story(){
        return view('products.story');
    }
    public function songs(){
        return view('products.songs');
    }


}
