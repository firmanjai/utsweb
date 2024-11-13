<!-- resources/views/absensi/create.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Absensi</title>
</head>
<body>
    <h1>Form Absensi Karyawan</h1>
    
    <form action="{{ route('absensi.store') }}" method="POST">
        @csrf
        <div>
            <label for="karyawan_id">Nama Karyawan:</label>
            <select name="karyawan_id" id="karyawan_id" required>
                <option value="">Pilih Karyawan</option>
                <option value="">jay</option>
                <option value="">rey</option>
                <option value="">riski</option>
                @foreach ($karyawans as $karyawan)
                    <option value="{{ $karyawan->id }}">{{ $karyawan->nama }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="tanggal">Tanggal:</label>
            <input type="date" name="tanggal" id="tanggal" required>
        </div>

        <div>
            <label for="status">Status:</label>
            <select name="status" id="status" required>
                <option value="hadir">Hadir</option>
                <option value="tidak hadir">Tidak Hadir</option>
                <option value="sakit">Sakit</option>
                <option value="izin">Izin</option>
            </select>
        </div>

        <button type="submit">Simpan Absensi</button>
    </form>
</body>
</html>
