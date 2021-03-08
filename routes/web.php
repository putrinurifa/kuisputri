<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\HalamanProductsController;
use App\Http\Controllers\HalamanProgramController;
use App\Http\Controllers\HalamanContactController;
use App\Http\Controllers\HalamanNewsController;
use Illuminate\Support\Facades\Route;
use App\Models\Flight;

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


Route::get('/flight' , function(){
    $flight = DB::table('flights')->get();

    return view('viewData', ['flight' => $flight]);

});
//Untuk retrieve semua database menggunakan method all()
/*
Route::get('/flight' , function(){
    $flights = Flight::where('active', 1)
               ->orderBy('name')
               ->take(10)
               ->get();
});
*/
//not all data 

Route::get('/', function(){
    return view('home');
});

Route::prefix('products') -> group(function(){
    Route::get('/eduGames' , [HalamanProductsController::class, 'eduGames']);
    Route::get('/kidsGames', [HalamanProductsController::class, 'kidsGames']);
    Route::get('/story', [HalamanProductsController::class, 'story']);
    Route::get('/songs', [HalamanProductsController::class, 'songs']);
    
    Route::get('/home' ,function(){
        return redirect('home');
    });
    Route::get('/products/eduGames' ,function(){
        return redirect('products/eduGames');
    });
    Route::get('/products/kidsGames' ,function(){
        return redirect('products/kidsGames');
    });
    Route::get('/products/story' ,function(){
        return redirect('products/story');
    });
    Route::get('/products/songs' ,function(){
        return redirect('products/songs');
    });
    Route::get('/news' ,function(){
        return redirect('news');
    });
    Route::get('/program/karir' ,function(){
        return redirect('/program/karir');
    });
    Route::get('/program/kunjungan' ,function(){
        return redirect('/program/kunjungan');
    });
    Route::get('/program/magang' ,function(){
        return redirect('/program/magang');
    });
    Route::get('/about-us' ,function(){
        return redirect('/about-us');
    });
    Route::get('/contact-us' ,function(){
        return redirect('/contact-us');
    });
    
    
});
Route::get('/news/{judul}', [HalamanNewsController::class, 'show'])->name('news');
Route::get("/news" , function(){
    return view('news');

     
    Route::get('/home' ,function(){
        return redirect('home');
    });
    Route::get('/products/eduGames' ,function(){
        return redirect('products/eduGames');
    });
    Route::get('/products/kidsGames' ,function(){
        return redirect('products/kidsGames');
    });
    Route::get('/products/story' ,function(){
        return redirect('products/story');
    });
    Route::get('/products/songs' ,function(){
        return redirect('products/songs');
    });
    Route::get('/news' ,function(){
        return redirect('news');
    });
    Route::get('/program/karir' ,function(){
        return redirect('/program/karir');
    });
    Route::get('/program/kunjungan' ,function(){
        return redirect('/program/kunjungan');
    });
    Route::get('/program/magang' ,function(){
        return redirect('/program/magang');
    });
    Route::get('/about-us' ,function(){
        return redirect('/about-us');
    });
    Route::get('/contact-us' ,function(){
        return redirect('/contact-us');
    });

});

Route::prefix('program') -> group(function(){
    Route::get('/karir', [HalamanProgramController::class, 'karir']);
    Route::get('/magang', [HalamanProgramController::class, 'magang']);
    Route::get('/kunjungan', [HalamanProgramController::class, 'kunjungan']);

     
    Route::get('/home' ,function(){
        return redirect('home');
    });
    Route::get('/products/eduGames' ,function(){
        return redirect('products/eduGames');
    });
    Route::get('/products/kidsGames' ,function(){
        return redirect('products/kidsGames');
    });
    Route::get('/products/story' ,function(){
        return redirect('products/story');
    });
    Route::get('/products/songs' ,function(){
        return redirect('products/songs');
    });
    Route::get('/news' ,function(){
        return redirect('news');
    });
    Route::get('/program/karir' ,function(){
        return redirect('/program/karir');
    });
    Route::get('/program/kunjungan' ,function(){
        return redirect('/program/kunjungan');
    });
    Route::get('/program/magang' ,function(){
        return redirect('/program/magang');
    });
    Route::get('/about-us' ,function(){
        return redirect('/about-us');
    });
    Route::get('/contact-us' ,function(){
        return redirect('/contact-us');
    });
});
Route::get('/program' , function(){
    return view('program');
});
Route::get('/about-us', function (){
    return view('about-us');

     
    Route::get('/home' ,function(){
        return redirect('home');
    });
    Route::get('/products/eduGames' ,function(){
        return redirect('products/eduGames');
    });
    Route::get('/products/kidsGames' ,function(){
        return redirect('products/kidsGames');
    });
    Route::get('/products/story' ,function(){
        return redirect('products/story');
    });
    Route::get('/products/songs' ,function(){
        return redirect('products/songs');
    });
    Route::get('/news' ,function(){
        return redirect('news');
    });
    Route::get('/program/karir' ,function(){
        return redirect('/program/karir');
    });
    Route::get('/program/kunjungan' ,function(){
        return redirect('/program/kunjungan');
    });
    Route::get('/program/magang' ,function(){
        return redirect('/program/magang');
    });
    Route::get('/about-us' ,function(){
        return redirect('/about-us');
    });
    Route::get('/contact-us' ,function(){
        return redirect('/contact-us');
    });
});
Route::resource('/contact-us', HalamanContactController::class) ->only (['index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
