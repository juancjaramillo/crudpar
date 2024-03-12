<?php

use App\Http\Controllers\InfoPersonasController;
use Illuminate\Support\Facades\Route;

Route::get('/',[InfoPersonasController::class,'index'])->name('InfoPersonas.index');
Route::get('/create',[InfoPersonasController::class,'create'])->name('InfoPersonas.create');
Route::post('/store',[InfoPersonasController::class,'store'])->name('InfoPersonas.store');
Route::get('/edit/{id}',[InfoPersonasController::class,'edit'])->name('InfoPersonas.edit');
Route::put('/update/{id}',[InfoPersonasController::class,'update'])->name('InfoPersonas.update');
Route::get('/show/{id}',[InfoPersonasController::class,'show'])->name('InfoPersonas.show');
Route::delete('/destroy/{id}',[InfoPersonasController::class,'destroy'])->name('InfoPersonas.destroy');