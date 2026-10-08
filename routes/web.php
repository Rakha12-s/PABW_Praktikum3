<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LaporBanjirController;

Route::get('/', [LaporBanjirController::class, 'create'])->name('lapor.create');
Route::post('/lapor', [LaporBanjirController::class, 'store'])->name('lapor.store');
Route::get('/konfirmasi', [LaporBanjirController::class, 'konfirmasi'])->name('lapor.konfirmasi');
Route::get('/laporan', [LaporBanjirController::class, 'index'])->name('laporan.index');

Route::get('/students', [StudentController::class, 'index'])->name('students.index');

// Route::get('/', function () {
//     return view('welcome');
// });
