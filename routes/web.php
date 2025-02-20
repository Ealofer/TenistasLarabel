<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TenistaController;
use App\Http\Controllers\TorneoController;
use App\Http\Controllers\TituloController;



/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('tenistas', [TenistaController::class,'index'])->name(name: 'tenistas.index');
Route::post('tenistas', [TenistaController::class, 'store'])->name(name:'tenistas.store');
Route::get('tenistas/create',[TenistaController::class,'create'])->name(name:'tenistas.create');
Route::get('tenistas/{tenista}/edit',[TenistaController::class,'edit'])->name(name:'tenistas.edit');
Route::put('tenistas/{tenista}',[TenistaController::class,'update'])->name(name:'tenistas.update');
Route::delete('tenistas/{tenista}',[TenistaController::class,'delete'])->name(name:'tenistas.delete');


Route::get('torneos', [TorneoController::class,'index'])->name(name: 'torneos.index');
Route::post('torneos', [TorneoController::class, 'store'])->name(name:'torneos.store');
Route::get('torneos/create',[TorneoController::class,'create'])->name(name:'torneos.create');
Route::get('torneos/{torneo}/edit',[TorneoController::class,'edit'])->name(name:'torneos.edit');
Route::put('torneos/{torneo}',[TorneoController::class,'update'])->name(name:'torneos.update');
Route::delete('torneos/{torneo}',[TorneoController::class,'delete'])->name(name:'torneos.delete');

Route::get('titulos', [TituloController::class,'index'])->name(name: 'titulos.index');
Route::post('titulos', [TituloController::class, 'store'])->name(name:'titulos.store');
Route::get('titulos/create',[TituloController::class,'create'])->name(name:'titulos.create');
Route::get('titulos/{titulo}/edit',[TituloController::class,'edit'])->name(name:'titulos.edit');
Route::put('titulos/{titulo}',[TituloController::class,'update'])->name(name:'titulos.update');
Route::delete('titulos/{titulo}',[TituloController::class,'delete'])->name(name:'titulos.delete');