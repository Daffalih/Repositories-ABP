<h2>Data Mahasiswa</h2>

<a href="/mahasiswa/create">Tambah Data</a>

<ul>
@foreach($data as $m)
    <li>{{ $m->nama }} - {{ $m->jurusan }}</li>
@endforeach
</ul>git push origin --delete main