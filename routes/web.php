<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/',[\App\Http\Controllers\TransporteController::class,'index'])->name('transporte.index');
Route::get('/create',[\App\Http\Controllers\TransporteController::class,'create'])->name('transporte.create');
Route::get('/edit',[\App\Http\Controllers\TransporteController::class,'edit'])->name('transporte.edit');

