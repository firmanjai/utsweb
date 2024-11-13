<?php

use App\Http\Controllers\AbsensiController;

Route::get('/absensi', [AbsensiController::class, 'index'])->name('absensi.index');
Route::get('/absensi/create', [AbsensiController::class, 'create'])->name('absensi.create');
Route::post('/absensi', [AbsensiController::class, 'store'])->name('absensi.store');
