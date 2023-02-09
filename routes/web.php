<?php

use App\Http\Controllers\authController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('login');
// });

Route::get('/',[authController::class,'index']);

Route::get('/student',[HomeController::class, 'index']);
Route::post('/add-student',[HomeController::class,'Save']);
Route::get('/edit/{id}',[HomeController::class,'Edit']);
Route::post('/update/{id}',[HomeController::class,'saveChanges']);
Route::get('/remove/{id}',[HomeController::class,'removeStudent']);


