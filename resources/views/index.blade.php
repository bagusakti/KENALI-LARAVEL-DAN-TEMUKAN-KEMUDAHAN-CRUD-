<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
    <h2>Selamat Datang Di Halaman Utama</h2>

    <a class="btn btn-primary" href="{{ route('home.create') }}">Tambahkan Data</a>
    <table id="data-table" class="table table-bordered">
        <thead>
          <tr>
            <th>Nomor</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Kegiatan</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($tabel as $item )
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->kelas }}</td>
                    <td>{{ $item->aksi }}</td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('home.edit', ['id' => $item->id]) }}">Edit</a>
                        <form id="form-delete{{ $item->id }}"
                            action="{{ route('home.destroy', ['id' => $item->id]) }}"
                            method="post" style="display: none">
                            @csrf
                            @method('delete')
                        </form>
                        <a class="btn btn-danger" style="cursor: pointer"
                            onclick="deleteItem({{ $item->id }})">
                            Hapus
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>

    </div>

      <script>
        function deleteItem(id) {
            if (confirm('Anda yakin ingin menghapus item ini?')) {
                document.getElementById('form-delete' + id).submit();
            }
        }
    </script>
    
</body>
</html>

   