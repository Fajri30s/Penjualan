<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-5oLJaoTywtOwQ3FsoPjc91G+h9GqTkJ6SCJgPI10hmsXugJnupUVJ8y7N0A2pZr6" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-rbsA2VBKQdMI3BkIgUsPDeA49H0tvuvrjbNuCa8smXKp4z/pzwCxwwcl3IFcnl7c" crossorigin="anonymous"></script>
  <title>Data Barang</title>
  <style>
    body {
    background-color: rgb(255, 255, 255);
    color: rgb(0, 0, 0); 
    font-family: Arial, sans-serif;
    }
    .button {
        background-color: blue; 
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        }
        .button2 {background-color: red;}
        .button3 {background-color: green;}
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    
    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }
    
    tr:nth-child(even) {
      background-color: #dddddd;
    }
    </style>
</head>
<body>
  <div>
    <div>
      <h1>Data Barang</h1>
    </div>
    <div>
      @if (auth()->user()->level == 'Admin')
       <button class="button" ><a style="color:white" href="{{ route('barang.tambah') }}">Tambah Barang</a></button>
			@endif
      <div>
        <table>
          <thead>
            <tr>
              <th>No</th>
              <th>Kode Barang</th>
              <th>Nama Barang</th>
              <th>Kategori</th>
              <th>Harga</th>
              <th>Jumlah</th>
							@if (auth()->user()->level == 'Admin')
              <th>Aksi</th>
							@endif
            </tr>
          </thead>
          <tbody>
            @php($no = 1)
            @foreach ($data as $row)
              <tr>
                <th>{{ $no++ }}</th>
                <td>{{ $row->kode_barang }}</td>
                <td>{{ $row->nama_barang }}</td>
                <td>{{ $row->kategori->nama }}</td>
                <td>{{ $row->harga }}</td>
                <td>{{ $row->jumlah }}</td>
								@if (auth()->user()->level == 'Admin')
                <td>
                  <button class="button button3" ><a style="color:white" href="{{ route('barang.edit', $row->id) }}" >Edit</a></button>
                  <button class="button button2" ><a style="color:white" href="{{ route('barang.hapus', $row->id) }}" >Hapus</a></button>
                </td>
								@endif
              </tr>
            @endforeach
          </tbody>
        </table>
        {{ $data->links('pagination::bootstrap-5') }}
        <button class="button button2" ><a style="color:white" href="{{ route('dashboard') }}">Kembali</a></button>
      </div>
    </div>
  </div>
  </body>
</html>
  

