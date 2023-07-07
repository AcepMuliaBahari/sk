<?php

use App\Http\Controllers\DepanController;
use App\Http\Controllers\FitunController;
use App\Http\Controllers\GaleriController;
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

Route::get('/', function () {
    return view('components.depan.depan');
});
Route::get('/fitur', function () {
    return view('fitur');
});
Route::get('/tentang', function () {
    return view('tentang');
});
Route::get('/galeri', function () {
    return view('galeri');
});
Route::get('/data', function () {
    return view('data');
});


