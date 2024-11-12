<h1>Tambah Absensi</h1>
<form action="{{ route('absensi.store') }}" method="POST">
    @csrf
    <label for="karyawan_id">Karyawan</label>
    <select name="karyawan_id" required>
        @foreach ($karyawans as $karyawan)
        <option value="{{ $karyawan->id }}">{{ $karyawan->nama }}</option>
        @endforeach
    </select>
    <label for="tanggal">Tanggal</label>
    <input type="date" name="tanggal" required>
    <label for="status">Status</label>
    <select name="status" required>
        <option value="hadir">Hadir</option>
        <option value="izin">Izin</option>
        <option value="sakit">Sakit</option>
        <option value="alpha">Alpha</option>
    </select>
    <button type="submit">Simpan</button>
</form>
