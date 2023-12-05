
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h2>Selamat Datang Di Form Pengisian Data</h2>

    <div class="container mt-4">
        <a class="btn btn-primary" href="{{ URL::previous() }}">Kembali</a>
        <form action="{{ route('home.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>

            <div class="mb-3">
                <label for="kelas" class="form-label">Kelas:</label>
                <input type="number" class="form-control" id="kelas" name="kelas" required>
            </div>

            <div class="mb-3">
                <label for="aksi" class="form-label">Kegiatan:</label>
                <input type="text" class="form-control" id="aksi" name="aksi" required>
            </div>

            <button type="submit" class="btn btn-primary">Tambahkan Data</button>
        </form>
    </div>
</body>
</html>
    


