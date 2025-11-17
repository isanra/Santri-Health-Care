<!DOCTYPE html>
<html lang="id">
<html>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <title>Digital Aspirasi Box</title>
    </head>
    <style>
    .container
    {
        margin:50px
    }
    .pesan-card
    {
        margin:100px
        border-radius: 8px;
        padding:12px
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    }
    </style>
    <body>
        <div class="container">
            <div class="pesan-card">
                <div class="pesan-nama">{{ $pesan['nama'] }}</div>
                <div class="pesan-tanggal">{{ $pesan['created_at'] }}</div><br>
                <div class="pesan-isi">{{ $pesan['pesan'] }}</div>
            </div>
        </div>
    </body>
</html>