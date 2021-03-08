<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ViewDataController extends Controller
{
    //
    public function index(){
        $users = DB::select('select * from post1s');
        return view('viewData',['users'=>$users]);
        }   
}

