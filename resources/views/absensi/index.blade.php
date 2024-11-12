<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi Karyawan</title>
</head>
<body>
    <h1>Absensi Karyawan</h1>
    
    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <form action="{{ route('absensi.store') }}" method="POST">
        @csrf
        <label for="karyawan_id">Pilih Karyawan</label>
        <select name="karyawan_id" id="karyawan_id" required>
            @foreach($karyawans as $karyawan)
                <option value="{{ $karyawan->id }}">{{ $karyawan->nama }}</option>
            @endforeach
        </select>

        <label for="status">Status Absensi</label>
        <select name="status" id="status" required>
            <option value="hadir">Hadir</option>
            <option value="tidak_hadir">Tidak Hadir</option>
            <option value="izin">Izin</option>
            <option value="sakit">Sakit</option>
        </select>

        <button type="submit">Catat Absensi</button>
    </form>
</body>
</html>
