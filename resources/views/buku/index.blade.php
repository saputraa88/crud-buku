<!DOCTYPE html>
<html>
<head>
    <title>Data Buku</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        a, button {
            padding: 8px 12px;
            text-decoration: none;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }
        .btn-tambah { background: green; color: white; }
        .btn-detail { background: blue; color: white; }
        .btn-edit { background: orange; color: white; }
        .btn-hapus { background: red; color: white; }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #999;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        .alert {
            padding: 10px;
            background: #d4edda;
            color: #155724;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

    <h1>Data Buku</h1>

    @if(session('success'))
        <div class="alert">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('buku.create') }}" class="btn-tambah">+ Tambah Buku</a>

    <table>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Aksi</th>
        </tr>

        @forelse($buku as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->judul }}</td>
            <td>{{ $item->penulis }}</td>
            <td>{{ $item->penerbit }}</td>
            <td>{{ $item->tahun_terbit }}</td>
            <td>
                <a href="{{ route('buku.show', $item->id) }}" class="btn-detail">Detail</a>
                <a href="{{ route('buku.edit', $item->id) }}" class="btn-edit">Edit</a>

                <form action="{{ route('buku.destroy', $item->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-hapus" onclick="return confirm('Yakin mau hapus data ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="6">Data buku belum ada</td>
        </tr>
        @endforelse
    </table>

</body>
</html>