<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Izin Staff</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f7e0f7;
        }
        .navbar {
            background-color: #e83e8c;
        }
        .table-container {
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .btn-tambah {
            background-color: #e83e8c;
            color: white;
        }
        .btn-tambah:hover {
            background-color: #c8236c;
        }
        .highlight {
            background-color: yellow;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Izin Staff</a>
            <div class="ms-auto">
                <a href="/profile" class="btn btn-light">Profile</a>
                <a href="/logout" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="table-container">
            <div class="d-flex justify-content-between mb-3">
                <h2>Data Izin Staff</h2>
                <form action="/" method="GET" class="d-flex">
                    <input type="text" name="search" class="form-control me-2" placeholder="Cari Nama" value="{{ request('search') }}">
                    <button type="submit" class="btn me-2" style="background-color: #e83e8c; color: white;">Cari</button>
                    <a href="/" class="btn" style="background-color: rgb(215, 131, 170); color: white;">Reset</a>
                </form>
                <a href="/form" class="btn btn-tambah ms-3">Tambah Izin</a>
            </div>

            <table class="table table-striped">
                <thead class="table-danger">
                    <tr>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Tanggal</th>
                        <th>Jam Keluar</th>
                        <th>Jam Masuk</th>
                        <th>Keperluan</th>
                        <th>Keterangan</th>
                        <th>Status</th>
                        <th>Pemberi Izin</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $izin)
                        <tr>
                            <td>
                                @php
                                    $search = request('search');
                                    $nama = $izin->staff->nama_staff;
                                    if ($search && stripos($nama, $search) !== false) {
                                        echo str_ireplace($search, "<span class='highlight'>$search</span>", $nama);
                                    } else {
                                        echo $nama;
                                    }
                                @endphp
                            </td>
                            <td>{{ $izin->staff->jabatan }}</td>
                            <td>{{ $izin->created_at->format('d-m-Y') }}</td>
                            <td>{{ $izin->jam_keluar }}</td>
                            <td>{{ $izin->jam_masuk }}</td>
                            <td>{{ $izin->keperluan }}</td>
                            <td>{{ $izin->keterangan }}</td>
                            <td>{{ $izin->status }}</td>
                            <td>{{ $izin->pemberi_izin }}</td>
                            <td>
                                <a href="{{ url('izin/edit/'.$izin->id_izin) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="/izin/delete/{{ $izin->id_izin}}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
