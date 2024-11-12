<?php

use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\AbsensiController;

Route::resource('karyawan', KaryawanController::class);
Route::resource('absensi', AbsensiController::class);
