<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

//Transporte
Route::get('/transporte',[\App\Http\Controllers\TransporteController::class,'index'])->name('transporte.index');
Route::get('/create',[\App\Http\Controllers\TransporteController::class,'create'])->name('transporte.create');
Route::post('/store',[\App\Http\Controllers\TransporteController::class,'store'])->name('transporte.store');
Route::get('/edit/{id}',[\App\Http\Controllers\TransporteController::class,'edit'])->name('transporte.edit');
Route::put('/update/{id}',[\App\Http\Controllers\TransporteController::class,'update'])->name('transporte.update');
Route::get('/show/{id}',[\App\Http\Controllers\TransporteController::class,'show'])->name('transporte.show');
Route::delete('/destroy/{id}', [\App\Http\Controllers\TransporteController::class,'destroy'])->name('transporte.destroy');

//Camion
Route::get('/camiones',[\App\Http\Controllers\CamionController::class,'index2'])->name('camion.index');
Route::get('/create2',[\App\Http\Controllers\CamionController::class,'create2'])->name('camion.create');
Route::post('/store2',[\App\Http\Controllers\CamionController::class,'store2'])->name('camion.store');
Route::get('/edit2/{id}',[\App\Http\Controllers\CamionController::class,'edit2'])->name('camion.edit');
Route::put('/update2/{id}',[\App\Http\Controllers\CamionController::class,'update2'])->name('camion.update');
Route::get('/show2/{id}',[\App\Http\Controllers\CamionController::class,'show2'])->name('camion.show');
Route::delete('/destroy2/{id}', [\App\Http\Controllers\CamionController::class,'destroy2'])->name('camion.destroy');

//Nuevas rutas
Route::post('/crear',[\App\Http\Controllers\CamionController::class,'store2'])->name('camion.crear');
Route::get('/registrar',[\App\Http\Controllers\CamionController::class,'store2'])->name('camion.registrar');
Route::post('/editar/{id}',[\App\Http\Controllers\CamionController::class,'edit2'])->name('camion.editar');
Route::get('/lista',[\App\Http\Controllers\CamionController::class,'index2'])->name('ruta');
Route::get('/eliminar/{id}', [\App\Http\Controllers\CamionController::class,'destroy2'])->name('camion.destruir');
Route::get('/delete', [\App\Http\Controllers\CamionController::class,'destroy2'])->name('camion.eliminar');

Route::get('/error404', function(){
    return view('Errors/404');
});
