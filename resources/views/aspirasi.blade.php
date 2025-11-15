<html>
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
            <form method="post" action="/aspirasi" >
                <label for="nama">Atas nama siapa?</label><br>
                <input type="text" id="nama" name="nama"><br>
                <br>
                <label for="pesan">Apa pesannya?</label><br>
                <input type="text" id="pesan" name="pesan"><br>
                <br>
                <input type="submit" value="kirim!"><br>
            </form>
        </div>
    </body>
</html>