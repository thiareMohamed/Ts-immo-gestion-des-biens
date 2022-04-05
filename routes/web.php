<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProprietaireController;

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
Route::get('proprietaires',[ProprietaireController::class,'index']);
Route::get('proprietaires/{id}',[ProprietaireController::class,'show']);
Route::put('proprietaires/{id}',[ProprietaireController::class,'update']);
Route::delete('proprietaires/delete/{id}',[ProprietaireController::class,'delete']);
Route::post('proprietaires',[ProprietaireController::class,'store']);
Route::get('addProprietaire',function () {
    return view('proprietaire/addProprietaire');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');    

Route::middleware(['web'])->group(function () {

});

require __DIR__.'/auth.php';


