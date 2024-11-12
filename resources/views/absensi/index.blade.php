<h1>Daftar Absensi</h1>
<a href="{{ route('absensi.create') }}">Tambah Absensi</a>
<table>
    <thead>
        <tr>
            <th>Karyawan</th>
            <th>Tanggal</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($absensis as $absensi)
        <tr>
            <td>{{ $absensi->karyawan->nama }}</td>
            <td>{{ $absensi->tanggal }}</td>
            <td>{{ $absensi->status }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
