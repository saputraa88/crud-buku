<!DOCTYPE html>
<html>
<head>
    <title>Detail Buku</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        .card {
            width: 400px;
            padding: 20px;
            border: 1px solid #999;
            border-radius: 8px;
        }
        a {
            display: inline-block;
            margin-top: 15px;
            padding: 8px 12px;
            background: gray;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }
    </style>
</head>
<body>

    <h1>Detail Buku</h1>

    <div class="card">
        <p><strong>Judul:</strong> {{ $buku->judul }}</p>
        <p><strong>Penulis:</strong> {{ $buku->penulis }}</p>
        <p><strong>Penerbit:</strong> {{ $buku->penerbit }}</p>
        <p><strong>Tahun Terbit:</strong> {{ $buku->tahun_terbit }}</p>
    </div>

    <a href="{{ route('buku.index') }}">Kembali</a>

</body>
</html>