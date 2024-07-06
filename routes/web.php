<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tugas-crud', [App\Http\Controllers\UserController::class, 'index'])->name('tugas');
Route::post('/tugas-crud', [App\Http\Controllers\UserController::class, 'store'])->name('tugas_store');
Route::post('/tugas-crud/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('tugas_update');
Route::post('/tugas-crud/delete/{id}', [App\Http\Controllers\UserController::class, 'delete'])->name('tugas_delete');


Route::get('/tugas-crud', [App\Http\Controllers\UserController::class, 'index'])->name('tugas_search');
