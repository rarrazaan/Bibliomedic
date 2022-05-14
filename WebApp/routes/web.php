<?php

use Illuminate\Support\Facades\Route;
use App\Models\Obat;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\UserController;

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
Route::resource('obat',ObatController::class);
Route::get('/dashboard', function(){
    return view('dashboard');
});
Route::get('/', function(){
    return view('obat.add');
});
Route::get('/login', function(){
    return view('login');
});
Route::post('/user/login', [UserController::class, 'login']);