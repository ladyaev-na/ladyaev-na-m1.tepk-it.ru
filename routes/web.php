<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\FancController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/materials',[MaterialController::class,'index'])->name('materials.index');

Route::get('/materials/create',[MaterialController::class,'create'])->name('materials.create');
Route::post('/materials',[MaterialController::class,'store'])->name('materials.store');

Route::get('/materials/edit/{material}',[MaterialController::class,'edit'])->name('materials.edit');
Route::post('/materials/edit/{material}',[MaterialController::class,'update'])->name('materials.update');

Route::get('/materials/list/{materials}',[FancController::class,'history'])->name('materials.list');

