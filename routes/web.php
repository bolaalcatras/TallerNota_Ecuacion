<?php
namespace App\Http\Controllers;
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
    return view('formulario');
});


Route::get('/qualification',[QualificationController::class,'create']);
Route::post('/qualification',[QualificationController::class,'store'])->name('qualification.store');

Route::get('/result',[ResultController::class,'create']);
Route::post('/result',[ResultController::class,'store'])->name('result.store');