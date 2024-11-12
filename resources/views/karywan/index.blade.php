<h1>Daftar Karyawan</h1>
<a href="{{ route('karyawan.create') }}">Tambah Karyawan</a>
<table>
    <thead>
        <tr>
            <th>Nama</th>
            <th>Jabatan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($karyawans as $karyawan)
        <tr>
            <td>{{ $karyawan->nama }}</td>
            <td>{{ $karyawan->jabatan }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
