php
use App\Http\Controllers\AbsensiController;

Route::get('/absensi', [AbsensiController::class, 'index'])->name('absensi.index');
Route::post('/absensi', [AbsensiController::class, 'store']);
Route::get('/absensi/{karyawan_id}', [AbsensiController:class, 'show'])->name('absensi.show');