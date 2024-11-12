namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    // Menampilkan form absensi
    public function index()
    {
        $karyawans = Karyawan::all();
        return view('absensi.index', compact('karyawans'));
    }

    // Menyimpan data absensi
    public function store(Request $request)
    {
        $request->validate([
            'karyawan_id' => 'required|exists:karyawans,id',
            'status' => 'required|in:hadir,tidak_hadir,izin,sakit',
        ]);

        Absensi::create([
            'karyawan_id' => $request->karyawan_id,
            'tanggal' => now()->format('Y-m-d'),
            'status' => $request->status,
        ]);

        return redirect()->route('absensi.index')->with('success', 'Absensi berhasil dicatat.');
    }

    // Melihat absensi karyawan
    public function show($karyawan_id)
    {
        $absensis = Absensi::where('karyawan_id', $karyawan_id)->get();
        return view('absensi.show', compact('absensis'));
    }
}
