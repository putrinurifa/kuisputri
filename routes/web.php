<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\HalamanProductsController;
use App\Http\Controllers\HalamanProgramController;
use App\Http\Controllers\HalamanContactController;
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

Route::get('/', [HomeController::class, 'index']);
Route::prefix('products') -> group(function(){
    Route::get('/eduGames', [HalamanProductsController::class, 'eduGames']);
    Route::get('/kidsGames', [HalamanProductsController::class, 'kidsGames']);
    Route::get('/story', [HalamanProductsController::class, 'story']);
    Route::get('/songs', [HalamanProductsController::class, 'songs']);
});
Route::get('/news/{judul}', function($judul){
    echo '<center> <h2> Halaman Berita <br> 
           <a href="https://www.educastudio.com/news">Klik Disini </a>'.'Untuk Melanjutkan Ke Halaman Berita
           <br> <h3> Judul Berita : '.$judul.'
           <br> <h4> <a href="https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19">Klik Disini </a>'.'Untuk Melanjutkan Ke Halaman '.$judul;
});
Route::prefix('program') -> group(function(){
    Route::get('/karir', [HalamanProgramController::class, 'karir']);
    Route::get('/magang', [HalamanProgramController::class, 'magang']);
    Route::get('/kunjungan', [HalamanProgramController::class, 'kunjungan']);
});
Route::get('/about', function (){
    echo '<center> <h2> About Us <br>
        <a href="https://www.educastudio.com/about-us">Klik Disini </a>Untuk Menampilkan Halaman About Us';
});
Route::resource('contact', HalamanContactController::class) ->only (['index']);
