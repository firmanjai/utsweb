<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function index()
    {
        $absensis = Absensi::with('karyawan')->get();
        return view('absensi.index', compact('absensis'));
    }

    public function create()
    {
        $karyawans = Karyawan::all();
        return view('absensi.create', compact('karyawans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'karyawan_id' => 'required|exists:karyawans,id',
            'tanggal' => 'required|date',
            'status' => 'required|in:hadir,izin,sakit,alpha',
        ]);

        Absensi::create($request->all());

        return redirect()->route('absensi.index');
    }
}
