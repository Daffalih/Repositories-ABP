<h2>Tambah Mahasiswa</h2>

<form method="POST" action="/mahasiswa">
    @csrf
    <input type="text" name="nama" placeholder="Nama"><br><br>
    <input type="text" name="jurusan" placeholder="Jurusan"><br><br>
    <button type="submit">Simpan</button>
</form>