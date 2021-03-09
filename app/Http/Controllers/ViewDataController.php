<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ViewDataController extends Controller
{
    //
    public function index(){
        $users = DB::table('post1s')->paginate(5);

        return view('viewData', ['users' => $users]);
    }
}

