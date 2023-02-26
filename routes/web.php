<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Echo_;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/hallo', [WelcomeController::class,'hallo']);

Route::get('/hello', function(){
    return 'Hello World';
});

/*
Route::get('/', function () {
    return view('welcome');
});
*/

//nomor 1
Route::get('/', [HomeController::class, 'index']);

//nomor 2
Route::prefix('product')->group(function(){
    Route::get('/make-up', function(){
        return 'Daftar Make-up yang Masih Tersedia';
    });
    Route::get('/baju-anak', function(){
        return 'Baju Anak yang masih Ready';
    });
    Route::get('/peralatan-mandi', function(){
        return 'Ini daftar peralatan mandi yang ready';
    });
    Route::get('/baju-dewasa', function(){
        return 'Baju Dewasa';
    }); 
});

//nomor 3
Route::get('/news/{name?}', function ($name = 'Minggu'){
    return 'Air Hujan Telah Mengguyur Kota Malang Pada Hari ' .$name;
});
Route::get('/news/{name}/cuaca-hari-ini/{comment}', function ($name, $comment){
    return 'Air Hujan Telah Mengguyur Kota Malang Pada Hari ' .$name . '<br> Dengan Perkiraan Akan disertai ' .$comment;
});

//nomor 4
Route::prefix('Kampus-Merdeka')->name('program') ->group(function(){
    Route::get('/MSIB', function(){
        return 'Daftar Program yang masih tersedia';
    });
    Route::get('/Magang', function(){
        return 'Lowongan Perusahaan ';
    });
    Route::get('/IISMA', function(){
        return 'Daftar Program yang Masih Tersedia';
    });
});

//nomor 5
Route::get('/about-us', function(){
    return 'This is Page About Us';
});

//nomor 6
Route::resource('photos', PhotoController::class)->only(['index', 'show']);