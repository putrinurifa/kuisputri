<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\HalamanProductsController;
use App\Http\Controllers\HalamanProgramController;
use App\Http\Controllers\HalamanContactController;
use App\Http\Controllers\HalamanNewsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
    return view('home');
});

Route::prefix('products') -> group(function(){
    Route::get('/eduGames' , [HalamanProductsController::class, 'eduGames']);
    Route::get('/kidsGames', [HalamanProductsController::class, 'kidsGames']);
    Route::get('/story', [HalamanProductsController::class, 'story']);
    Route::get('/songs', [HalamanProductsController::class, 'songs']);
});
Route::get('/news/{judul}', function($judul){
    return view('news/' .$judul);
});
Route::get("/news" , function(){
    return view('news');
});

Route::prefix('program') -> group(function(){
    Route::get('/karir', [HalamanProgramController::class, 'karir']);
    Route::get('/magang', [HalamanProgramController::class, 'magang']);
    Route::get('/kunjungan', [HalamanProgramController::class, 'kunjungan']);
});
Route::get('/program' , function(){
    return view('program');
});
Route::get('/about-us', function (){
    return view('about-us');
});
Route::resource('contact-us', HalamanContactController::class) ->only (['index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
