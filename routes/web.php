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
    
Route::middleware(['auth'])->group(function () {
    Route::get('proprietaires',[ProprietaireController::class,'index']);
    Route::get('proprietaires/{id}',[ProprietaireController::class,'show']);
    Route::put('proprietaires/{id}',[ProprietaireController::class,'update']);
    Route::get('proprietaires/delete/{id}',[ProprietaireController::class,'delete']);
    Route::get('proprietairesStore',[ProprietaireController::class,'store']);
    Route::get('proprietairesAdd',function () {
        return view('proprietaire/addProprietaire');
    });
    
    Route::get('/', function () {
        return view('index');
    });
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');
});

require __DIR__.'/auth.php';



