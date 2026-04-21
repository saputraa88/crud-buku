<!DOCTYPE html>
<html>
<head>
    <title>Tambah Buku</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        input {
            width: 300px;
            padding: 8px;
            margin-bottom: 10px;
        }
        button, a {
            padding: 8px 12px;
            text-decoration: none;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .btn-simpan { background: green; color: white; }
        .btn-kembali { background: gray; color: white; }
        .error { color: red; }
    </style>
</head>
<body>

    <h1>Tambah Data Buku</h1>

    @if($errors->any())
        <div class="error">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('buku.store') }}" method="POST">
        @csrf

        <label>Judul</label><br>
        <input type="text" name="judul" value="{{ old('judul') }}"><br>

        <label>Penulis</label><br>
        <input type="text" name="penulis" value="{{ old('penulis') }}"><br>

        <label>Penerbit</label><br>
        <input type="text" name="penerbit" value="{{ old('penerbit') }}"><br>

        <label>Tahun Terbit</label><br>
        <input type="number" name="tahun_terbit" value="{{ old('tahun_terbit') }}"><br><br>

        <button type="submit" class="btn-simpan">Simpan</button>
        <a href="{{ route('buku.index') }}" class="btn-kembali">Kembali</a>
    </form>

</body>
</html>