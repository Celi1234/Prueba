<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuscriptionController;
use App\Http\Controllers\DepartamentController;
use App\Http\Controllers\ComidaController;
use App\Http\Controllers\TouristsDestinationController;
use App\Http\Controllers\CommentController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('departaments', DepartamentController::class);

Route::resource('suscriptions', SuscriptionController::class);

Route::resource('comidas', ComidaController::class);

Route::resource('tourists-destinations', TouristsDestinationController::class);

Route::resource('comments', CommentController::class);