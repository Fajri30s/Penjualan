<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
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
  </style>
</head>
<body>
  <h1>Data Kategori</h1>
  <button class="button" ><a style="color:white"href="{{ route('kategori.tambah') }}">Tambah Kategori</a></button>
    <table>
      <th>No</  th>
      <th>Nama Kategori</th>
      <th>Aksi</th>
      <tbody>
        @php($no = 1)
        @foreach ($kategori as $row)
          <tr>
            <th>{{ $no++ }}</th>
            <td>{{ $row->nama }}</td>
            <td>
              <button class="button3" ><a style="color:white" href="{{ route('kategori.edit', $row->id) }}">Edit</a></button>
              <button class="button2" ><a style="color:white" href="{{ route('kategori.hapus', $row->id) }}">Hapus</a></button>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    {{ $kategori->links('pagination::bootstrap-5') }}
    <button class="button button2" ><a style="color:white" href="{{ route('dashboard') }}">Kembali</a></button>
</body>
</html>

      

