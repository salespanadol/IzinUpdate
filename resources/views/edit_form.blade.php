<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Izin Staff</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f7e0f7;
        }
        .container {
            max-width: 600px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        .btn-submit {
            background-color: #e83e8c;
            color: white;
        }
        .btn-submit:hover {
            background-color: #c8236c;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Edit Izin</h2>
        <form action="{{ route('izin.update', $izin->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="staff" class="form-label">Staff:</label>
                <select class="form-select" name="id_staff" id="staff" required>
                    @foreach ($staff as $s)
                        <option value="{{ $s->id_staff }}" {{ $s->id_staff == $izin->id_staff ? 'selected' : '' }}>{{ $s->nama_staff }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="jam_keluar" class="form-label">Jam Keluar:</label>
                <input type="time" class="form-control" id="jam_keluar" name="jam_keluar" min="08:00" max="16:30" value="{{ $izin->jam_keluar }}" required>
            </div>

            <div class="mb-3">
                <label for="jam_masuk" class="form-label">Jam Masuk:</label>
                <input type="time" class="form-control" id="jam_masuk" name="jam_masuk" min="08:00" max="16:30" value="{{ $izin->jam_masuk }}" required>
            </div>

            <div class="mb-3">
                <label for="keperluan" class="form-label">Keperluan:</label>
                <select class="form-select" name="keperluan" id="keperluan" required>
                    <option value="Dinas" {{ $izin->keperluan == 'Dinas' ? 'selected' : '' }}>Dinas</option>
                    <option value="Pribadi" {{ $izin->keperluan == 'Pribadi' ? 'selected' : '' }}>Pribadi</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan:</label>
                <textarea class="form-control" name="keterangan" id="keterangan">{{ $izin->keterangan }}</textarea>
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status:</label>
                <select class="form-select" name="status" id="status" required>
                    <option value="Disetujui" {{ $izin->status == 'Disetujui' ? 'selected' : '' }}>Disetujui</option>
                    <option value="Ditolak" {{ $izin->status == 'Ditolak' ? 'selected' : '' }}>Ditolak</option>
                    <option value="Menunggu" {{ $izin->status == 'Menunggu' ? 'selected' : '' }}>Menunggu</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="pemberi_izin" class="form-label">Pemberi Izin:</label>
                <input type="text" class="form-control" id="pemberi_izin" name="pemberi_izin" value="{{ $izin->pemberi_izin }}" required>
            </div>

            <button type="submit" class="btn btn-submit w-100">Update</button>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
