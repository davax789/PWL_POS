<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Anggota</title>
    <!-- Jika menggunakan Bootstrap, pastikan untuk menambahkan CSS berikut -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container text-center p-4">
        <h1>Data Anggota</h1>
        <ol class="list-group">
            @forelse ($anggotas as $anggota)
                <li class="list-group-item">
                    {{ $anggota->nama }} (NIP: {{ $anggota->nip }})<br>
                    Tanggal Lahir: {{ $anggota->tanggal_lahir }}<br>
                    Nilai: {{ $anggota->nilai }}
                </li>
            @empty
                <li class="list-group-item">Tidak ada data anggota.</li>
            @endforelse
        </ol>
    </div>
    <!-- Jika menggunakan Bootstrap, pastikan untuk menambahkan JS berikut (opsional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
