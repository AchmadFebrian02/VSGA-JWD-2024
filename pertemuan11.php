<!-- 
Nama Progam : Alert notifikasi Jquery
Versi 1.0.0
Penulis : Faris Achmad JWD
Deskripsi : menampilkan alert menggunakan Jquery
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./jquery-3.7.1.js"></script>
    <title>Document</title>
</head>
<body>
    <button id="clickMe">klik saya!</button>

    <script>
        $(document).ready(function() {
            $("#clickMe").click(function(){
                alert("anda mengklik tombol");
            })
        })
    </script>
</body>
</html>