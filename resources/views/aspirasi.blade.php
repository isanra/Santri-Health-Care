<!DOCTYPE html>
<html lang="id">
<html>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <title>Digital Aspirasi Box</title>
    </head>
    <style>
        .title {
            text-align:center;
        }
        .pesanForm {
            margin-left:256px;
            margin-right:256px;
        }
        input[id="pesan"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            box-sizing: border-box;
            border-radius: 8px
        }
        input[id="nama"] {
            margin: 10px 0;
            box-sizing: border-box;
            border-radius: 6px
        }
    </style>
    <body>
        <div class=title>
            <h2>Kamu Mau Ngomong Apa?</h2>
        </div>
        <div class=pesanForm>
            <form action="/user/aspirasi"  method="POST">
                @csrf
                <label for="nama">Atas nama siapa?</label><br>
                <input type="text" id="nama" name="nama"><br>
                <br>
                <label for="pesan">Apa pesannya?</label><br>
                <input type="text" id="pesan" name="pesan"><br>
                <br>
                <button>kirim!</button><br>
            </form>
        </div>
    </body>
</html>