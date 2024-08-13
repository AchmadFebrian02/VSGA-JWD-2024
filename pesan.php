<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form Pemesanan</h1>
    <form action="" method="post">
        <label for="nama">Nama Pemensan</label>
        <input type="text" name="namapemesan" id="name">
        <label for="nohp">Nomor HP</label>
        <input type="text" name="nohp" id="nohp">
        <input type="submit" value="submit" name="submit">
    </form>
</body>
<?php 
    if (isset($_POST['submit'])){
        $namapemesan = $_POST['namapemesan'];
        $nohp = $_POST['nohp'];

        echo "Resume pemesan <br>";
        echo "Nama Pesanan: $namapemesan <br>";
        echo "No Hp: $nohp";
    }
?>
</html>