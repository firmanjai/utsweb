<h1>Tambah Karyawan</h1>
<form action="{{ route('karyawan.store') }}" method="POST">
    @csrf
    <label for="nama">Nama</label>
    <input type="text" name="nama" required>
    <label for="jabatan">Jabatan</label>
    <input type="text" name="jabatan" required>
    <button type="submit">Simpan</button>
</form>
