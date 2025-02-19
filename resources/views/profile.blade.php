<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <h1>Profile Staff</h1>
    <p>Nama: {{ $staff->nama_staff }}</p>
    <p>Jabatan: {{ $staff->jabatan }}</p>
    <p>Tanggal: {{ now()->format('d-m-Y') }}</p>

    <form action="/submit-form" method="POST">
        @csrf
        <label for="keperluan">Keperluan:</label>
        <select name="keperluan" id="keperluan">
            <option value="Dinas">Dinas</option>
            <option value="Pribadi">Pribadi</option>
        </select>
        <br>

        <label for="keterangan">Keterangan:</label>
        <textarea name="keterangan" id="keterangan"></textarea>
        <br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
