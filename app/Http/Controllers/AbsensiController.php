<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Karyawan;  // Jika ada tabel karyawan
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    // Menampilkan form untuk input data absensi
    public function create()
    {
        $karyawans = Karyawan::all(); // Mendapatkan data karyawan
        return view('absensi.create', compact('karyawans'));
    }

    // Menyimpan data absensi
    public function store(Request $request)
    {
        $request->validate([
            'karyawan_id' => 'required|exists:karyawans,id',
            'tanggal' => 'required|date',
            'status' => 'required|in:hadir,tidak hadir,sakit,izin',
        ]);

        Absensi::create($request->all());

        return redirect()->route('absensi.index')->with('success', 'Absensi berhasil ditambahkan.');
    }

    // Menampilkan daftar absensi
    public function index()
    {
        $absensis = Absensi::all();
        return view('absensi.index', compact('absensis'));
    }
}
