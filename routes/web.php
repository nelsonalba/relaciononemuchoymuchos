<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('productos/listar',[ProductoController::class,'listar'])->name('producto.listar');
Route::get('productos/create',[ProductoController::class,'create']);
Route::post('productos/store', [ProductoController::class,'store'])->name('producto.store');
Route::put('productos/{producto}',[ProductoController::class,'update'])->name('producto.update');
Route::get('productos/{producto}/editar',[ProductoController::class,'edit'])->name('producto.edit');
Route::delete('productos/{producto}',[ProductoController::class,'destroy'])->name('producto.destroy');