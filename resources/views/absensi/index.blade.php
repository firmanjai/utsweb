<!-- resources/views/absensi/index.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Absensi Karyawan</title>
</head>
<body>
    <h1>Daftar Absensi Karyawan</h1>
    <a href="{{ route('absensi.create') }}">Tambah Absensi</a>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <table border="1">
        <thead>
            <tr>
                <th>Nama Karyawan</th>
                <th>Tanggal</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($absensis as $absensi)
                <tr>
                    <td>{{ $absensi->karyawan->nama }}</td>
                    <td>{{ $absensi->tanggal }}</td>
                    <td>{{ ucfirst($absensi->status) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
