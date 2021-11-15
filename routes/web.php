<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mahasiswaController;

Route::get('/mahasiswa', [mahasiswaController::class, 'mahasiswa'])->name('mahasiswa');
Route::post('/mahasiswa',[mahasiswaController::class,'data'])->name('mahasiswa');

Route::get('/', function () {
    return view('welcome');
});