<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;

    protected $fillable = [
        'karyawan_id', 'tanggal', 'status'
    ];

    // Relasi ke model Karyawan (jika ada tabel karyawan)
    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class);
    }
}
