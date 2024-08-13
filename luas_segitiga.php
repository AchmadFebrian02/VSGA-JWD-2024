<!-- Nama Program : Luas Persegi Panjang -->
<!-- Versi : 1.0.0 -->
<!-- Tanggal Pembuatan : 25 Juli 2024 -->
<!-- Deskripsi : Program ini dirancang untuk membantu pengguna dalam menghitung luas persegi panjang -->
<!-- fitur utama termasuk perkalian sederhana -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Hitung Luas Persegi Panjang</h2>
    <form method="POST" action="">
        <label for="alas">alas</label>
        <input type="text" id="alas" name="alas" require>
        <br><br>
        <label for="tinggi">tinggi</label>
        <input type="text" id="tinggi" name="tinggi" require>
        <br><br>
        <input type="submit" value="hitung">
    </form>

    <?php
       define("SETENGAH", 0.5);
       if ($_SERVER ["REQUEST_METHOD"] == "POST"){
        // MENDAPATKAN NILAI DARI FORM 
        $alas = $_POST['alas'];
        $tinggi = $_POST['tinggi'];
        // fungsi untuk menghitung luas persegi panjang
        function hitung_luas_segitiga($alas, $tinggi){
            //rumus luas segitiga
            $luas = SETENGAH * $alas * $tinggi;

            return $luas;
        }
        // menghitung luas
        $luas = hitung_luas_segitiga($alas, $tinggi);
        // menampilkan hasil 
        echo "<h3>Hasil Perhitungan</h3>";
        echo "panjang: $alas <br>";
        echo "lebar: $tinggi<br>";
        echo "luas persegi panjang $luas";
        }
    ?>
</body>
</html>