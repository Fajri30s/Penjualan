<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Form Edit/Tambah</title>
</head>
<body>
  <form action="{{ isset($kategori) ? route('kategori.tambah.update', $kategori->id) : route('kategori.tambah.simpan') }}" method="post">
    @csrf
      <h1>{{ isset($kategori) ? 'Form Edit Kategori' : 'Form Tambah Kategori' }}</h1>
  
      <div class="form-group">
        <label for="nama">Nama Kategori</label>
        <input type="text" class="form-control" id="nama" name="nama" value="{{ isset($kategori) ? $kategori->nama : '' }}">
      </div>
      <button>Simpan</button>
      <button><a href="{{ route('kategori') }}">Kembali</a></button>
  </form>
</body>
</html>
 
  

