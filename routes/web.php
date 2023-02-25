<?php

use App\Http\Controllers\WelcomeController;
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
Route::view('/hello', 'Hello World');

Route::get('/hallo', [WelcomeController::class,'hallo']);

Route::get('/hello', function(){
    return 'Hello World';
});

/*
Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('/', function (){
    echo "Selamat Datang";
});

Route::get('/about', function(){
    echo "Nama : Afifah Salsabila";
    echo "<br>";
    echo "NIM : 2141720118";
});

Route::get('/articles/{id}', function($id){
    echo "Halaman artikel dengan id  " .$id;
});

