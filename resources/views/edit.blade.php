<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <a class="btn btn-primary" href="{{ URL::previous() }}">Kembali</a>
    <form action="{{ route('home.update', ['id' => $user->id]) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="inputname" class="form-label">Nama</label>
            <input type="text" name="nama"
                class="form-control @error('nama') is-invalid @enderror" id="inputname"
                value="{{ $user->nama }}" required>
            @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="inputname" class="form-label">Kelas</label>
            <input type="text" name="kelas"
                class="form-control @error('kelas') is-invalid @enderror" id="inputname"
                value="{{ $user->kelas }}" required>
            @error('kelas')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="inputname" class="form-label">Kegiatan</label>
            <input type="text" name="aksi"
                class="form-control @error('aksi') is-invalid @enderror" id="inputname"
                value="{{ $user->aksi }}" required>
            @error('aksi')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-warning">Perbarui</button>
    </form>
</body>
</html>
    



