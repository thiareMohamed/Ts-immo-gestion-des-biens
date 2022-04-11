<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProprieteController;
use App\Http\Controllers\ProprietaireController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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
    
    Route::get('/', function () {
        return view('index');
    });

    // Route proprietes
    Route::get('/proprietes',[ProprieteController::class,'index']);
    Route::get('/proprietes/{id}',[ProprieteController::class,'show']);
    Route::post('/proprietes/edit/{id}',[ProprieteController::class,'update']);
    Route::get('/proprietes/delete/{id}',[ProprieteController::class,'delete']);
    Route::post('/proprietesStore',[ProprieteController::class,'store']);
    Route::get('/proprietesAdd', [ProprieteController::class,'addPropriete']);

    // Route proprietaired
    Route::get('/proprietaires',[ProprietaireController::class,'index']);
    Route::get('/proprietaires/{id}',[ProprietaireController::class,'show']);
    Route::post('/proprietaires/edit/{id}',[ProprietaireController::class,'update']);
    Route::get('/proprietaires/delete/{id}',[ProprietaireController::class,'delete']);
    Route::post('/proprietairesStore',[ProprietaireController::class,'store']);
    Route::get('/proprietairesAdd',function () {
        return view('/proprietaire/addProprietaire');
    });

    

    // LogOut
    Route::get('logout',[AuthenticatedSessionController::class,'destroy']);

});

require __DIR__.'/auth.php';