<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/',[\App\Http\Controllers\TransporteController::class,'index'])->name('transporte.index');
Route::get('/create',[\App\Http\Controllers\TransporteController::class,'create'])->name('transporte.create');
Route::post('/store',[\App\Http\Controllers\TransporteController::class,'store'])->name('transporte.store');
Route::get('/edit/{id}',[\App\Http\Controllers\TransporteController::class,'edit'])->name('transporte.edit');
Route::put('/update/{id}',[\App\Http\Controllers\TransporteController::class,'update'])->name('transporte.update');
Route::get('/show',[\App\Http\Controllers\TransporteController::class,'show'])->name('transporte.show');
Route::delete('/destroy/{id}', [\App\Http\Controllers\TransporteController::class,'destroy'])->name('transporte.destroy');
