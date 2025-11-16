<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pesan</title>
    <style>
        .pesan-card {
            background: white;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .pesan-waktu {
            color: #888;
            font-size: 14px;
        }
        .pesan-nama {
            font-weight: bold;
            font-size: 18px;
        }
        .pesan-isi {
            margin-top: 5px;
            white-space: pre-line;
        }
    </style>
</head>
<body>

    <h2>Daftar Pesan Kamu</h2>

    @foreach($pesan as $p)
        <div class="pesan-card">
            <div class="pesan-nama">{{ $p->nama }}</div>
            <div class="pesan-waktu">{{ $p->created_at->format('d M Y H:i') }}</div><br>
            <div class="pesan-isi">{{ $p->pesan }}</div>
        </div>
    @endforeach

</body>
</html>
